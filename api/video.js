export const config = {
  runtime: 'edge',
};

export default async function handler(req) {
  const url = new URL(req.url);
  let file = url.searchParams.get('file') || '';
  if (!file) {
    const pathname = url.pathname;
    const match = pathname.match(/^\/videos\/(.+)$/);
    if (match) file = match[1];
  }

  if (!file) {
    return new Response('File parameter is required', { status: 400 });
  }

  try {
    file = decodeURIComponent(file);
  } catch (e) {}

  const safeFile = encodeURIComponent(file);
  const targetUrl = 'https://media.githubusercontent.com/media/Yashgadwal/hackwithyash/main/videos/' + safeFile;

  const fetchHeaders = new Headers();
  fetchHeaders.set('User-Agent', 'Mozilla/5.0');
  const range = req.headers.get('range');
  if (range) {
    fetchHeaders.set('range', range);
  }

  try {
    const upstream = await fetch(targetUrl, {
      method: req.method === 'HEAD' ? 'HEAD' : 'GET',
      headers: fetchHeaders,
    });

    const responseHeaders = new Headers();
    responseHeaders.set('Content-Type', 'video/mp4');
    responseHeaders.set('Accept-Ranges', 'bytes');
    responseHeaders.set('Access-Control-Allow-Origin', '*');
    responseHeaders.set('Cache-Control', 'public, max-age=86400, s-maxage=604800');

    const contentLength = upstream.headers.get('content-length');
    if (contentLength) responseHeaders.set('Content-Length', contentLength);

    const contentRange = upstream.headers.get('content-range');
    if (contentRange) responseHeaders.set('Content-Range', contentRange);

    return new Response(req.method === 'HEAD' ? null : upstream.body, {
      status: upstream.status,
      headers: responseHeaders,
    });
  } catch (err) {
    return new Response('Error proxying video: ' + err.message, { status: 502 });
  }
}
