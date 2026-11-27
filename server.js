const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 5500;
const BASE_DIR = path.resolve(__dirname);
const CONTENT_FILE = path.join(BASE_DIR, 'content.json');

const MIME_TYPES = {
  '.html': 'text/html; charset=utf-8',
  '.css': 'text/css; charset=utf-8',
  '.js': 'text/javascript; charset=utf-8',
  '.json': 'application/json; charset=utf-8',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.svg': 'image/svg+xml',
  '.ico': 'image/x-icon',
  '.mp4': 'video/mp4'
};

const server = http.createServer((req, res) => {
  let reqUrl = req.url.split('?')[0];

  // API Route: GET /api/content
  if (reqUrl === '/api/content' && req.method === 'GET') {
    if (fs.existsSync(CONTENT_FILE)) {
      res.writeHead(200, {
        'Content-Type': 'application/json; charset=utf-8',
        'Access-Control-Allow-Origin': '*'
      });
      return fs.createReadStream(CONTENT_FILE).pipe(res);
    } else {
      res.writeHead(404, { 'Content-Type': 'application/json' });
      return res.end(JSON.stringify({ error: 'content.json not found' }));
    }
  }

  // API Route: GET /api/video
  if (reqUrl === '/api/video' && req.method === 'GET') {
    const urlObj = new URL(req.url, `http://${req.headers.host || 'localhost'}`);
    let file = urlObj.searchParams.get('file') || '';
    if (file) {
      try { file = decodeURIComponent(file); } catch (e) {}
      const videoPath = path.join(BASE_DIR, 'videos', file);
      if (fs.existsSync(videoPath)) {
        const stats = fs.statSync(videoPath);
        const range = req.headers.range;
        if (range) {
          const parts = range.replace(/bytes=/, '').split('-');
          const start = parseInt(parts[0], 10);
          const end = parts[1] ? parseInt(parts[1], 10) : stats.size - 1;
          const chunkSize = (end - start) + 1;
          res.writeHead(206, {
            'Content-Range': `bytes ${start}-${end}/${stats.size}`,
            'Accept-Ranges': 'bytes',
            'Content-Length': chunkSize,
            'Content-Type': 'video/mp4',
            'Access-Control-Allow-Origin': '*'
          });
          return fs.createReadStream(videoPath, { start, end }).pipe(res);
        } else {
          res.writeHead(200, {
            'Content-Length': stats.size,
            'Accept-Ranges': 'bytes',
            'Content-Type': 'video/mp4',
            'Access-Control-Allow-Origin': '*'
          });
          return fs.createReadStream(videoPath).pipe(res);
        }
      }
    }
    res.writeHead(404, { 'Content-Type': 'text/plain' });
    return res.end('Video not found');
  }

  // API Route: POST /api/content
  if (reqUrl === '/api/content' && req.method === 'POST') {
    let body = '';
    req.on('data', chunk => {
      body += chunk.toString();
    });
    req.on('end', () => {
      try {
        const parsed = JSON.parse(body);
        fs.writeFileSync(CONTENT_FILE, JSON.stringify(parsed, null, 2), 'utf-8');
        res.writeHead(200, {
          'Content-Type': 'application/json; charset=utf-8',
          'Access-Control-Allow-Origin': '*'
        });
        return res.end(JSON.stringify({ success: true, message: 'Content saved successfully' }));
      } catch (err) {
        res.writeHead(400, { 'Content-Type': 'application/json' });
        return res.end(JSON.stringify({ error: 'Invalid JSON payload' }));
      }
    });
    return;
  }

  // CORS Preflight
  if (req.method === 'OPTIONS') {
    res.writeHead(204, {
      'Access-Control-Allow-Origin': '*',
      'Access-Control-Allow-Methods': 'GET, POST, OPTIONS',
      'Access-Control-Allow-Headers': 'Content-Type'
    });
    return res.end();
  }

  // Default routes
  if (reqUrl === '/' || reqUrl === '') {
    reqUrl = '/index.html';
  } else if (reqUrl === '/admin') {
    reqUrl = '/admin.html';
  } else if (reqUrl.toLowerCase() === '/trackmasterpro') {
    reqUrl = '/trackmasterPro.html';
  } else if (reqUrl.toLowerCase() === '/trackmasterpro-light' || reqUrl.toLowerCase() === '/trackmasterprolight') {
    reqUrl = '/trackmasterProLight.html';
  } else if (reqUrl.toLowerCase() === '/trackmaster' || reqUrl.toLowerCase() === '/trackmaster.html') {
    reqUrl = '/trackmaster.html';
  } else if (reqUrl.toLowerCase() === '/links' || reqUrl.toLowerCase() === '/links.html') {
    reqUrl = '/links.html';
  } else if (reqUrl.toLowerCase() === '/link' || reqUrl.toLowerCase() === '/link.html' || reqUrl.toLowerCase() === '/linkk' || reqUrl.toLowerCase() === '/linkk.html') {
    reqUrl = '/link.html';
  }

  let decodedUrl = reqUrl;
  try {
    decodedUrl = decodeURIComponent(reqUrl);
  } catch (e) {
    decodedUrl = reqUrl;
  }

  const filePath = path.join(BASE_DIR, decodedUrl);

  // Security check: prevent directory traversal
  if (!filePath.startsWith(BASE_DIR)) {
    res.writeHead(403, { 'Content-Type': 'text/plain' });
    return res.end('Forbidden');
  }

  fs.stat(filePath, (err, stats) => {
    if (err || !stats.isFile()) {
      res.writeHead(404, { 'Content-Type': 'text/plain' });
      return res.end('Not Found');
    }

    const ext = path.extname(filePath).toLowerCase();
    const contentType = MIME_TYPES[ext] || 'application/octet-stream';

    // HTTP Range Support for smooth MP4 video playback & seeking
    const range = req.headers.range;
    if (range && ext === '.mp4') {
      const parts = range.replace(/bytes=/, '').split('-');
      const start = parseInt(parts[0], 10);
      const end = parts[1] ? parseInt(parts[1], 10) : stats.size - 1;
      const chunkSize = (end - start) + 1;
      const fileStream = fs.createReadStream(filePath, { start, end });

      res.writeHead(206, {
        'Content-Range': `bytes ${start}-${end}/${stats.size}`,
        'Accept-Ranges': 'bytes',
        'Content-Length': chunkSize,
        'Content-Type': contentType,
        'Access-Control-Allow-Origin': '*'
      });
      fileStream.pipe(res);
    } else {
      res.writeHead(200, {
        'Content-Length': stats.size,
        'Accept-Ranges': 'bytes',
        'Content-Type': contentType,
        'Access-Control-Allow-Origin': '*'
      });
      fs.createReadStream(filePath).pipe(res);
    }
  });
});

server.listen(PORT, '0.0.0.0', () => {
  console.log(`LIVE_SERVER_RUNNING on http://localhost:${PORT}`);
  console.log(`ADMIN_PANEL_RUNNING on http://localhost:${PORT}/admin.html`);
});
