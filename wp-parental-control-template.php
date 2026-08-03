<?php
/**
 * Template Name: Premium Parental Control Landing Page
 * Description: A premium, conversion-focused landing page for legal parental control and device management.
 * Version: 1.0.0
 * 
 * WordPress requirements: Full-width, self-contained template, Elementor and Gutenberg compatible.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  
  <!-- Tailwind CSS Play CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Space Grotesk', 'sans-serif'],
          },
          colors: {
            brand: {
              darkest: '#0A0314',
              dark: '#12072B',
              purple: '#1E0B3A',
              medium: '#5B21B6',
              light: '#7C3AED',
              accent: '#A78BFA',
            }
          }
        }
      }
    }
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #0A0314;
      color: #f3f4f6;
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Space Grotesk', sans-serif;
    }

    /* Glow Bubbles */
    .glow-bubble-purple {
      background: radial-gradient(circle, rgba(124, 58, 237, 0.15) 0%, rgba(30, 11, 58, 0) 70%);
      filter: blur(60px);
    }
    
    .glow-bubble-pink {
      background: radial-gradient(circle, rgba(236, 72, 153, 0.12) 0%, rgba(30, 11, 58, 0) 70%);
      filter: blur(60px);
    }

    /* Glassmorphism Panel styles */
    .glass-panel {
      background: rgba(30, 11, 58, 0.35);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.06);
    }

    .glass-panel-hover {
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .glass-panel-hover:hover {
      background: rgba(30, 11, 58, 0.55);
      border-color: rgba(167, 139, 250, 0.3);
      box-shadow: 0 20px 40px -15px rgba(124, 58, 237, 0.25);
      transform: translateY(-4px);
    }

    /* Custom Animations */
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-12px) rotate(0.5deg); }
    }
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes pulse-slow {
      0%, 100% { opacity: 0.2; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(1.05); }
    }
    .animate-pulse-slow {
      animation: pulse-slow 8s ease-in-out infinite;
    }

    /* Gradient Text */
    .gradient-text-purple {
      background: linear-gradient(135deg, #ffffff 10%, #d8b4fe 60%, #a78bfa 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .gradient-text-accent {
      background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 50%, #ec4899 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Glowing borders */
    .neon-border-glow:hover {
      box-shadow: 0 0 15px rgba(139, 92, 246, 0.4);
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class( 'min-h-screen relative selection:bg-purple-600/30 selection:text-purple-200' ); ?>>

  <!-- Background Decorative glow elements -->
  <div class="absolute top-[5%] left-[5%] w-[600px] h-[600px] glow-bubble-purple rounded-full pointer-events-none z-0"></div>
  <div class="absolute top-[20%] right-[5%] w-[500px] h-[500px] glow-bubble-pink rounded-full pointer-events-none z-0 animate-pulse-slow"></div>
  <div class="absolute top-[55%] left-[-10%] w-[700px] h-[700px] glow-bubble-purple rounded-full pointer-events-none z-0"></div>
  <div class="absolute bottom-[10%] right-[10%] w-[600px] h-[600px] glow-bubble-pink rounded-full pointer-events-none z-0"></div>

  <!-- Navigation Bar -->
  <nav class="sticky top-0 z-50 glass-panel border-b border-white/5 py-4 px-6 md:px-12 backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-3 group">
        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-brand-medium to-brand-light flex items-center justify-center shadow-lg shadow-brand-medium/20 group-hover:scale-105 transition-transform duration-200">
          <i data-lucide="shield-check" class="w-5 h-5 text-white"></i>
        </div>
        <span class="text-xl font-bold tracking-wider text-white">
          HACKWITH<span class="text-brand-light">YASH</span>
        </span>
      </a>

      <!-- Desktop Links -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#features" class="text-sm text-gray-400 hover:text-white transition-colors duration-200">Features</a>
        <a href="#dashboard" class="text-sm text-gray-400 hover:text-white transition-colors duration-200">Dashboard</a>
        <a href="#how-it-works" class="text-sm text-gray-400 hover:text-white transition-colors duration-200">How It Works</a>
        <a href="#why-choose-us" class="text-sm text-gray-400 hover:text-white transition-colors duration-200">Why Us</a>
        <a href="#faq" class="text-sm text-gray-400 hover:text-white transition-colors duration-200">FAQ</a>
      </div>

      <div class="hidden md:flex items-center space-x-4">
        <a href="#pricing" class="bg-brand-medium/30 hover:bg-brand-medium/40 border border-brand-medium/50 text-white font-semibold px-5 py-2 rounded-full text-xs uppercase tracking-wider transition-all duration-300">
          Login
        </a>
        <a href="#pricing" class="bg-gradient-to-r from-brand-medium to-brand-light hover:shadow-lg hover:shadow-brand-medium/30 text-white font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider transition-all duration-300">
          Start Now
        </a>
      </div>

      <!-- Mobile Burger Menu Trigger -->
      <button onclick="toggleMobileMenu()" class="md:hidden text-gray-300 hover:text-white focus:outline-none">
        <i id="menu-icon" data-lucide="menu" class="w-6 h-6"></i>
      </button>
    </div>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-white/5 space-y-4 px-2">
      <a href="#features" onclick="toggleMobileMenu()" class="block text-gray-300 hover:text-white py-1">Features</a>
      <a href="#dashboard" onclick="toggleMobileMenu()" class="block text-gray-300 hover:text-white py-1">Dashboard</a>
      <a href="#how-it-works" onclick="toggleMobileMenu()" class="block text-gray-300 hover:text-white py-1">How It Works</a>
      <a href="#why-choose-us" onclick="toggleMobileMenu()" class="block text-gray-300 hover:text-white py-1">Why Us</a>
      <a href="#faq" onclick="toggleMobileMenu()" class="block text-gray-300 hover:text-white py-1">FAQ</a>
      <div class="flex flex-col gap-3 pt-2">
        <a href="#pricing" class="w-full text-center bg-brand-medium/30 border border-brand-medium/50 text-white font-semibold py-2.5 rounded-full text-xs uppercase tracking-wider">
          Login
        </a>
        <a href="#pricing" class="w-full text-center bg-gradient-to-r from-brand-medium to-brand-light text-white font-bold py-2.5 rounded-full text-xs uppercase tracking-wider">
          Start Now
        </a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="relative z-10 pt-16 pb-24 px-6 md:px-12 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Hero Content -->
      <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
        <div class="inline-flex items-center space-x-2 bg-brand-medium/10 border border-brand-medium/30 px-4 py-1.5 rounded-full text-xs font-semibold text-brand-accent uppercase tracking-wider">
          <span class="w-2 h-2 rounded-full bg-green-400 animate-ping"></span>
          <span>Legal & Consent-Driven Device Security</span>
        </div>
        
        <div class="space-y-4">
          <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight md:leading-none">
            <span class="gradient-text-purple">Protect What</span><br>
            <span class="gradient-text-accent">Matters Most</span>
          </h1>
          <p class="text-gray-400 text-base sm:text-lg md:text-xl max-w-2xl mx-auto lg:mx-0 leading-relaxed font-light">
            Monitor and secure your own devices with advanced parental control and device management features. Keep your children safe and your operations secure.
          </p>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
          <a href="#pricing" class="w-full sm:w-auto text-center bg-gradient-to-r from-brand-medium to-brand-light hover:shadow-xl hover:shadow-brand-medium/40 hover:-translate-y-0.5 transition-all duration-300 text-white font-bold px-8 py-4 rounded-full text-sm uppercase tracking-widest shadow-md">
            Start Now
          </a>
          <a href="#dashboard" class="w-full sm:w-auto text-center bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 transition-all duration-300 text-white font-bold px-8 py-4 rounded-full text-sm uppercase tracking-widest">
            Watch Demo
          </a>
        </div>

        <!-- Micro stats -->
        <div class="pt-6 grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0 border-t border-white/5">
          <div>
            <p class="text-2xl font-bold text-white">99.9%</p>
            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Uptime</p>
          </div>
          <div>
            <p class="text-2xl font-bold text-white">256-Bit</p>
            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Encryption</p>
          </div>
          <div>
            <p class="text-2xl font-bold text-white">10k+</p>
            <p class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Active Devices</p>
          </div>
        </div>
      </div>

      <!-- Hero Illustration / Mockup -->
      <div class="lg:col-span-5 flex justify-center relative animate-float">
        <!-- Glowing aura in backdrop -->
        <div class="absolute inset-0 bg-brand-light/20 blur-3xl rounded-full scale-75 pointer-events-none"></div>
        
        <!-- Smartphone Container -->
        <div class="relative w-[280px] sm:w-[320px] h-[580px] sm:h-[640px] rounded-[48px] bg-black border-[8px] border-white/10 shadow-2xl p-3 overflow-hidden flex flex-col justify-between">
          <!-- Speaker/Camera Notch -->
          <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-black rounded-b-2xl z-20 flex items-center justify-center">
            <div class="w-12 h-1 bg-white/20 rounded-full mb-1"></div>
          </div>
          
          <!-- Screen Header -->
          <div class="pt-6 px-3 flex justify-between items-center text-xs text-gray-400 font-bold tracking-wider relative z-10">
            <span>12:40 PM</span>
            <div class="flex items-center space-x-1.5">
              <i data-lucide="wifi" class="w-3.5 h-3.5 text-brand-accent"></i>
              <i data-lucide="battery" class="w-3.5 h-3.5 text-green-400"></i>
            </div>
          </div>

          <!-- App Mock Interface -->
          <div class="flex-grow flex flex-col justify-between px-2 py-4 relative z-10 space-y-4">
            
            <!-- Quick Shield Status Widget -->
            <div class="bg-brand-purple/60 border border-brand-medium/40 p-4 rounded-3xl text-center space-y-3 shadow-lg backdrop-blur-md">
              <div class="w-12 h-12 rounded-full bg-brand-medium/20 border border-brand-medium flex items-center justify-center mx-auto shadow-inner shadow-brand-light/35 animate-pulse">
                <i data-lucide="shield" class="w-6 h-6 text-brand-accent"></i>
              </div>
              <div>
                <p class="text-xs text-gray-400 font-semibold uppercase tracking-wider">Device Shield Status</p>
                <h4 class="text-lg font-bold text-white">Fully Protected</h4>
              </div>
            </div>

            <!-- Mini Map Tracker Mockup -->
            <div class="bg-brand-purple/60 border border-brand-medium/40 p-3 rounded-3xl shadow-lg relative flex-grow overflow-hidden min-h-[160px] flex flex-col justify-between">
              <!-- Illustrative map grid lines -->
              <div class="absolute inset-0 opacity-15 pointer-events-none" style="background-image: radial-gradient(circle, #8b5cf6 1px, transparent 1px); background-size: 20px 20px;"></div>
              
              <div class="flex justify-between items-center relative z-10">
                <span class="text-[10px] bg-green-500/20 text-green-400 border border-green-500/30 px-2 py-0.5 rounded-full font-bold uppercase">LIVE</span>
                <span class="text-[10px] text-gray-400 font-semibold flex items-center"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-pink-500 mr-1"></i>Sam's Phone</span>
              </div>
              
              <!-- Centered Radar/Location Indicator -->
              <div class="relative w-16 h-16 mx-auto my-auto flex items-center justify-center">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-light opacity-30"></span>
                <div class="w-8 h-8 rounded-full bg-brand-light border-2 border-white flex items-center justify-center shadow-lg relative">
                  <i data-lucide="user" class="w-4 h-4 text-brand-darkest"></i>
                </div>
              </div>
              
              <div class="bg-black/40 border border-white/5 p-2 rounded-2xl text-left relative z-10 flex justify-between items-center">
                <div>
                  <p class="text-[9px] text-gray-400 uppercase font-semibold">Current Location</p>
                  <p class="text-[11px] text-white font-bold tracking-tight">Main Street, Central Park</p>
                </div>
                <i data-lucide="chevron-right" class="w-4 h-4 text-brand-accent"></i>
              </div>
            </div>

            <!-- Fast Privacy Icons Strip -->
            <div class="grid grid-cols-4 gap-2">
              <div class="bg-white/5 border border-white/10 p-2.5 rounded-2xl text-center flex flex-col items-center">
                <i data-lucide="clock" class="w-4 h-4 text-purple-400 mb-1"></i>
                <span class="text-[8px] text-gray-400 font-semibold uppercase">Limits</span>
              </div>
              <div class="bg-white/5 border border-white/10 p-2.5 rounded-2xl text-center flex flex-col items-center">
                <i data-lucide="navigation" class="w-4 h-4 text-emerald-400 mb-1"></i>
                <span class="text-[8px] text-gray-400 font-semibold uppercase">GPS</span>
              </div>
              <div class="bg-white/5 border border-white/10 p-2.5 rounded-2xl text-center flex flex-col items-center">
                <i data-lucide="smartphone" class="w-4 h-4 text-pink-400 mb-1"></i>
                <span class="text-[8px] text-gray-400 font-semibold uppercase">Apps</span>
              </div>
              <div class="bg-white/5 border border-white/10 p-2.5 rounded-2xl text-center flex flex-col items-center">
                <i data-lucide="bell-ring" class="w-4 h-4 text-yellow-400 mb-1"></i>
                <span class="text-[8px] text-gray-400 font-semibold uppercase">Alerts</span>
              </div>
            </div>

          </div>

          <!-- Phone Home Indicator Bar -->
          <div class="pb-1 text-center relative z-20">
            <div class="w-24 h-1 bg-white/20 rounded-full mx-auto"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Trust Section -->
  <section class="relative z-10 py-16 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <h2 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight">Built on Absolute Security and Ethics</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Our software respects family boundaries and organizational compliance. We build software to secure your endpoints with full permission verification.
      </p>
    </div>

    <!-- Trust Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Card 1 -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4 text-left">
        <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center">
          <i data-lucide="shield-check" class="w-6 h-6 text-purple-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Device Security</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Defends mobile devices against zero-day exploits, phishing links, and suspicious background installations.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4 text-left">
        <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
          <i data-lucide="users" class="w-6 h-6 text-emerald-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Family Safety</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Enables active alerts, content filtering, and downtime locks for kids to build balanced digital habits safely.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4 text-left">
        <div class="w-12 h-12 rounded-2xl bg-pink-500/10 border border-pink-500/30 flex items-center justify-center">
          <i data-lucide="lock" class="w-6 h-6 text-pink-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Privacy Protection</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            All reports and location updates are secured behind strict end-to-end encrypted protocol channels.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4 text-left">
        <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center">
          <i data-lucide="layout-dashboard" class="w-6 h-6 text-blue-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Secure Dashboard</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Monitor status metrics remotely from any web browser using multi-factor identity authorization.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Dashboard Preview Section -->
  <section id="dashboard" class="relative z-10 py-20 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-flex items-center space-x-2 bg-brand-light/10 text-brand-accent text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">
        <span>SaaS Preview</span>
      </div>
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight">Real-Time Security Control</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Experience the centralized admin dashboard. View current connection grids, activity timelines, and security alert triggers dynamically.
      </p>
    </div>

    <!-- Complete Dashboard Mock Container -->
    <div class="glass-panel rounded-3xl overflow-hidden shadow-2xl border border-white/10 flex flex-col md:flex-row h-auto md:h-[600px]">
      
      <!-- Dashboard Sidebar -->
      <div class="w-full md:w-64 bg-brand-darkest/60 border-b md:border-b-0 md:border-r border-white/5 p-6 flex flex-col justify-between space-y-6">
        <div class="space-y-6">
          <!-- Active Admin info -->
          <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-brand-medium/30 border border-brand-light flex items-center justify-center text-brand-light font-bold text-sm uppercase">
              YL
            </div>
            <div>
              <h4 class="text-sm font-bold text-white">Yash Admin</h4>
              <p class="text-[10px] text-gray-500 font-semibold tracking-wider uppercase">Standard Plan</p>
            </div>
          </div>

          <!-- Sidebar Navigation -->
          <nav class="space-y-1">
            <a href="#" class="flex items-center space-x-3 bg-brand-medium/20 text-white px-3.5 py-2.5 rounded-xl text-xs font-bold tracking-wide">
              <i data-lucide="layout" class="w-4 h-4 text-brand-accent"></i>
              <span>Dashboard Overview</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-400 hover:text-white px-3.5 py-2.5 rounded-xl text-xs font-semibold tracking-wide transition-colors">
              <i data-lucide="smartphone" class="w-4 h-4"></i>
              <span>Monitored Devices</span>
              <span class="ml-auto text-[9px] bg-brand-medium text-white px-1.5 py-0.5 rounded-full font-bold">2</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-400 hover:text-white px-3.5 py-2.5 rounded-xl text-xs font-semibold tracking-wide transition-colors">
              <i data-lucide="map" class="w-4 h-4"></i>
              <span>Geofencing Zones</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-400 hover:text-white px-3.5 py-2.5 rounded-xl text-xs font-semibold tracking-wide transition-colors">
              <i data-lucide="clock" class="w-4 h-4"></i>
              <span>Downtime Rules</span>
            </a>
            <a href="#" class="flex items-center space-x-3 text-gray-400 hover:text-white px-3.5 py-2.5 rounded-xl text-xs font-semibold tracking-wide transition-colors">
              <i data-lucide="settings" class="w-4 h-4"></i>
              <span>Admin Settings</span>
            </a>
          </nav>
        </div>

        <!-- Devices Selection stack -->
        <div class="space-y-3 pt-6 border-t border-white/5">
          <p class="text-[9px] text-gray-500 font-bold uppercase tracking-wider">Target Devices</p>
          <div class="space-y-1.5">
            <!-- Sam Phone -->
            <button class="w-full flex items-center justify-between p-2.5 rounded-xl bg-white/5 border border-white/15 text-left">
              <div class="flex items-center space-x-2.5">
                <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                <span class="text-[11px] text-white font-bold">Sam's Android</span>
              </div>
              <span class="text-[8px] text-brand-accent uppercase font-bold">Active</span>
            </button>
            <!-- Office Tablet -->
            <button class="w-full flex items-center justify-between p-2.5 rounded-xl hover:bg-white/5 text-left group">
              <div class="flex items-center space-x-2.5">
                <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                <span class="text-[11px] text-gray-400 group-hover:text-white transition-colors font-medium">Tablet Office</span>
              </div>
              <span class="text-[8px] text-gray-500 uppercase font-semibold">Idle</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Main Dashboard Contents Workspace -->
      <div class="flex-grow bg-brand-darkest/20 p-6 overflow-y-auto space-y-6 flex flex-col justify-between">
        
        <!-- Top Metrics row -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <!-- Active Screen Time -->
          <div class="bg-brand-purple/20 border border-white/5 p-4 rounded-2xl flex items-center justify-between">
            <div class="space-y-1">
              <span class="text-[10px] text-gray-500 uppercase font-semibold">Screen Time Today</span>
              <h3 class="text-xl font-bold text-white">2h 45m</h3>
              <p class="text-[9px] text-green-400 font-semibold uppercase flex items-center"><i data-lucide="trending-down" class="w-3.5 h-3.5 mr-0.5"></i>-15% from avg</p>
            </div>
            <i data-lucide="clock" class="w-8 h-8 text-brand-accent/55"></i>
          </div>

          <!-- Total Alerts triggered -->
          <div class="bg-brand-purple/20 border border-white/5 p-4 rounded-2xl flex items-center justify-between">
            <div class="space-y-1">
              <span class="text-[10px] text-gray-500 uppercase font-semibold">Security Flags</span>
              <h3 class="text-xl font-bold text-white">0 Flags</h3>
              <p class="text-[9px] text-green-400 font-semibold uppercase">All Safe</p>
            </div>
            <i data-lucide="shield-check" class="w-8 h-8 text-emerald-500/55"></i>
          </div>

          <!-- Location verification check -->
          <div class="bg-brand-purple/20 border border-white/5 p-4 rounded-2xl flex items-center justify-between">
            <div class="space-y-1">
              <span class="text-[10px] text-gray-500 uppercase font-semibold">Geofence Status</span>
              <h3 class="text-xl font-bold text-white">Inside Safe</h3>
              <p class="text-[9px] text-brand-accent font-semibold uppercase">Home Zone</p>
            </div>
            <i data-lucide="navigation" class="w-8 h-8 text-pink-500/55"></i>
          </div>
        </div>

        <!-- Dashboard middle Grid (Charts and Timeline) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 flex-grow">
          <!-- App usage bar chart mockup -->
          <div class="lg:col-span-7 bg-brand-purple/30 border border-white/5 p-5 rounded-2xl space-y-4 flex flex-col justify-between min-h-[220px]">
            <div class="flex justify-between items-center">
              <h4 class="text-xs font-bold text-white uppercase tracking-wider">Top Application Usage</h4>
              <i data-lucide="bar-chart-2" class="w-4 h-4 text-gray-400"></i>
            </div>
            <!-- Custom bars stack -->
            <div class="space-y-2.5">
              <!-- App 1: Social Media -->
              <div class="space-y-1">
                <div class="flex justify-between text-[10px]">
                  <span class="text-white font-bold">Social Media (Limits Active)</span>
                  <span class="text-gray-400 font-semibold">1h 12m</span>
                </div>
                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden">
                  <div class="h-full bg-gradient-to-r from-brand-medium to-brand-light rounded-full" style="width: 60%;"></div>
                </div>
              </div>
              <!-- App 2: Educational apps -->
              <div class="space-y-1">
                <div class="flex justify-between text-[10px]">
                  <span class="text-white font-bold">Educational Apps</span>
                  <span class="text-gray-400 font-semibold">45m</span>
                </div>
                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden">
                  <div class="h-full bg-emerald-500 rounded-full" style="width: 38%;"></div>
                </div>
              </div>
              <!-- App 3: Entertainment -->
              <div class="space-y-1">
                <div class="flex justify-between text-[10px]">
                  <span class="text-white font-bold">Entertainment (Blocked at 9PM)</span>
                  <span class="text-gray-400 font-semibold">30m</span>
                </div>
                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden">
                  <div class="h-full bg-pink-500 rounded-full" style="width: 25%;"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Real-Time Activity Log Timeline -->
          <div class="lg:col-span-5 bg-brand-purple/30 border border-white/5 p-5 rounded-2xl space-y-4 flex flex-col justify-between">
            <h4 class="text-xs font-bold text-white uppercase tracking-wider">Live Security Logs</h4>
            
            <div class="space-y-3 text-[11px] leading-relaxed">
              <!-- Event 1 -->
              <div class="flex items-start space-x-2">
                <div class="w-1.5 h-1.5 rounded-full bg-green-500 mt-1.5"></div>
                <div>
                  <p class="text-white font-semibold">Geofence Crossed</p>
                  <p class="text-gray-500">Entered School Zone • 8:15 AM</p>
                </div>
              </div>
              <!-- Event 2 -->
              <div class="flex items-start space-x-2">
                <div class="w-1.5 h-1.5 rounded-full bg-brand-light mt-1.5"></div>
                <div>
                  <p class="text-white font-semibold">Screen Limit Policy Set</p>
                  <p class="text-gray-500">Homework Downtime On • 4:00 PM</p>
                </div>
              </div>
              <!-- Event 3 -->
              <div class="flex items-start space-x-2">
                <div class="w-1.5 h-1.5 rounded-full bg-yellow-500 mt-1.5"></div>
                <div>
                  <p class="text-white font-semibold">App Blocked Attempt</p>
                  <p class="text-gray-500">Restricted application blocked • 4:30 PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Consent banner inside dashboard -->
        <div class="bg-brand-medium/10 border border-brand-medium/30 p-3.5 rounded-xl flex items-center justify-between">
          <div class="flex items-center space-x-2">
            <i data-lucide="info" class="w-4.5 h-4.5 text-brand-accent"></i>
            <span class="text-[10px] sm:text-xs text-brand-accent font-semibold">Legal Notice: This software is active strictly with explicit local device owner consent verification.</span>
          </div>
          <span class="text-[9px] bg-green-500/20 text-green-400 px-2 py-0.5 rounded-full font-bold">COMPLIANT</span>
        </div>

      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="relative z-10 py-20 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <div class="inline-flex items-center space-x-2 bg-brand-medium/10 border border-brand-medium/20 px-4 py-1.5 rounded-full text-xs font-semibold text-brand-accent uppercase tracking-wider">
        <span>Comprehensive Tools</span>
      </div>
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight">Advanced Management Features</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Everything you need to secure endpoints, monitor location metrics with consent, audit applications, and lock down screen boundaries.
      </p>
    </div>

    <!-- Features Card Grid (8 cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Feature 1: Activity Reports -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center">
          <i data-lucide="file-text" class="w-6 h-6 text-purple-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Activity Reports</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Receive clean visual graphs summarizing daily application usage and browser logs.
          </p>
        </div>
      </div>

      <!-- Feature 2: Location History -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-pink-500/10 border border-pink-500/30 flex items-center justify-center">
          <i data-lucide="map" class="w-6 h-6 text-pink-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Location Mapping</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Keep track of physical device locations in real-time with full permissions and legal consent controls.
          </p>
        </div>
      </div>

      <!-- Feature 3: Screen Time Management -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center">
          <i data-lucide="clock" class="w-6 h-6 text-emerald-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Screen Time Controls</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Establish healthy screen routines by setting daily downtime locks, homework locks, and sleep schedules.
          </p>
        </div>
      </div>

      <!-- Feature 4: App Usage Insights -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center">
          <i data-lucide="bar-chart-2" class="w-6 h-6 text-blue-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">App Usage Insights</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Audit which applications are downloaded, category usage, and block dangerous utilities easily.
          </p>
        </div>
      </div>

      <!-- Feature 5: Family Device Management -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center">
          <i data-lucide="users" class="w-6 h-6 text-yellow-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Family Admin Grid</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Monitor and manage multiple family or organization devices from a single web admin credentials base.
          </p>
        </div>
      </div>

      <!-- Feature 6: Security Alerts -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-red-500/10 border border-red-500/30 flex items-center justify-center">
          <i data-lucide="bell" class="w-6 h-6 text-red-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Instant Security Alerts</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Get instant push notifications for boundary crossings, system settings alterations, and new app downloads.
          </p>
        </div>
      </div>

      <!-- Feature 7: Backup & Recovery -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center">
          <i data-lucide="hard-drive" class="w-6 h-6 text-indigo-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Backup & Recovery</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Protect important device databases and recover settings easily if a device is lost or stolen.
          </p>
        </div>
      </div>

      <!-- Feature 8: Remote Management -->
      <div class="glass-panel glass-panel-hover p-6 rounded-3xl space-y-4">
        <div class="w-12 h-12 rounded-2xl bg-teal-500/10 border border-teal-500/30 flex items-center justify-center">
          <i data-lucide="smartphone" class="w-6 h-6 text-teal-400"></i>
        </div>
        <div class="space-y-2">
          <h3 class="text-lg font-bold text-white">Remote Lockout</h3>
          <p class="text-xs text-gray-400 leading-relaxed font-light">
            Trigger lock commands remotely on your authorized family endpoints in emergency situations.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- How It Works Section -->
  <section id="how-it-works" class="relative z-10 py-20 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight">How It Works</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Set up secure monitoring in three simple steps. No coding, root, or jailbreak required.
      </p>
    </div>

    <!-- Step Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Step 1 -->
      <div class="relative p-6 space-y-4 text-center">
        <!-- Step Number Badge overlayed behind -->
        <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 text-8xl font-black text-white/5 pointer-events-none select-none">01</span>
        <div class="w-16 h-16 rounded-full bg-brand-medium/20 border border-brand-medium/50 flex items-center justify-center mx-auto shadow-lg relative z-10">
          <i data-lucide="download" class="w-7 h-7 text-brand-accent"></i>
        </div>
        <h3 class="text-xl font-bold text-white relative z-10">1. Install Software</h3>
        <p class="text-xs text-gray-400 leading-relaxed font-light max-w-xs mx-auto">
          Download and install the configuration module directly on your own or your child's target smartphone.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="relative p-6 space-y-4 text-center">
        <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 text-8xl font-black text-white/5 pointer-events-none select-none">02</span>
        <div class="w-16 h-16 rounded-full bg-brand-medium/20 border border-brand-medium/50 flex items-center justify-center mx-auto shadow-lg relative z-10">
          <i data-lucide="check-square" class="w-7 h-7 text-brand-accent"></i>
        </div>
        <h3 class="text-xl font-bold text-white relative z-10">2. Grant Permissions</h3>
        <p class="text-xs text-gray-400 leading-relaxed font-light max-w-xs mx-auto">
          Activate accessibility and GPS location filters with explicit consent to start recording device events safely.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="relative p-6 space-y-4 text-center">
        <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 text-8xl font-black text-white/5 pointer-events-none select-none">03</span>
        <div class="w-16 h-16 rounded-full bg-brand-medium/20 border border-brand-medium/50 flex items-center justify-center mx-auto shadow-lg relative z-10">
          <i data-lucide="lock" class="w-7 h-7 text-brand-accent"></i>
        </div>
        <h3 class="text-xl font-bold text-white relative z-10">3. Monitor Securely</h3>
        <p class="text-xs text-gray-400 leading-relaxed font-light max-w-xs mx-auto">
          Open your private admin portal to review metrics, active tracking lines, and security details from any browser.
        </p>
      </div>

    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section id="why-choose-us" class="relative z-10 py-20 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Side Heading Content -->
      <div class="lg:col-span-5 space-y-6 text-center lg:text-left">
        <div class="inline-flex items-center space-x-2 bg-brand-medium/10 text-brand-accent text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider">
          <span>Why Choose Us</span>
        </div>
        <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">The SaaS Standard in Endpoint Control</h2>
        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
          We bring high-end corporate mobile management features down to household scales, providing absolute assurance, control, and digital protection.
        </p>
      </div>

      <!-- Why Us checklist grid -->
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
        
        <!-- Feature 1 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-purple-500/10 border border-purple-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-brand-accent"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">100% Secure</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">All active data points are fully encrypted end-to-end.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-emerald-400"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">Easy Setup</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Simple wizard layout helps configure the client in 5 minutes.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-pink-500/10 border border-pink-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-pink-400"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">Privacy Focused</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Zero third-party trackers or corporate logs collected.</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-blue-500/10 border border-blue-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-blue-400"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">Fast Support</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Get 24/7 dedicated support assistance from security engineers.</p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-yellow-400"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">Regular Updates</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Continuous updates supporting newly released Android updates.</p>
          </div>
        </div>

        <!-- Feature 6 -->
        <div class="flex items-start space-x-4 bg-brand-purple/20 border border-white/5 p-5 rounded-2xl">
          <div class="w-8 h-8 rounded-full bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center flex-shrink-0">
            <i data-lucide="check" class="w-4 h-4 text-indigo-400"></i>
          </div>
          <div>
            <h4 class="text-base font-bold text-white">Modern Interface</h4>
            <p class="text-xs text-gray-400 mt-1 leading-relaxed">Clean, responsive metrics panels built with next-gen UI aesthetics.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="relative z-10 py-20 px-6 md:px-12 max-w-7xl mx-auto border-t border-white/5">
    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight">Stories from Our Users</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        See how families and businesses have gained digital peace of mind with our secure device management tools.
      </p>
    </div>

    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="glass-panel p-6 rounded-3xl flex flex-col justify-between space-y-6">
        <p class="text-xs text-gray-300 italic leading-relaxed">
          "Managing screen time and protecting our kids from dangerous websites was a constant struggle. This software allowed us to establish clear boundaries, and the activity logs give us complete visibility without being intrusive."
        </p>
        <div class="flex items-center space-x-3.5 pt-4 border-t border-white/5">
          <div class="w-10 h-10 rounded-full bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-brand-accent font-bold text-xs uppercase">
            SA
          </div>
          <div>
            <h4 class="text-xs font-bold text-white">Sarah Anderson</h4>
            <p class="text-[10px] text-gray-500">Parent of 2 • Austin, TX</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="glass-panel p-6 rounded-3xl flex flex-col justify-between space-y-6">
        <p class="text-xs text-gray-300 italic leading-relaxed">
          "We deploy this utility on our employees' logistics tablets. It keeps trackers running correctly and alerts us immediately if someone changes core settings. Truly professional SaaS quality."
        </p>
        <div class="flex items-center space-x-3.5 pt-4 border-t border-white/5">
          <div class="w-10 h-10 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold text-xs uppercase">
            DM
          </div>
          <div>
            <h4 class="text-xs font-bold text-white">David Miller</h4>
            <p class="text-[10px] text-gray-500">Fleet Operations Manager • Chicago, IL</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="glass-panel p-6 rounded-3xl flex flex-col justify-between space-y-6">
        <p class="text-xs text-gray-300 italic leading-relaxed">
          "The real-time geofencing notifications work perfectly. Knowing when my child arrives at school or heads home helps us stay connected and relaxed during busy workdays."
        </p>
        <div class="flex items-center space-x-3.5 pt-4 border-t border-white/5">
          <div class="w-10 h-10 rounded-full bg-pink-500/10 border border-pink-500/30 flex items-center justify-center text-pink-400 font-bold text-xs uppercase">
            ET
          </div>
          <div>
            <h4 class="text-xs font-bold text-white">Elena Torres</h4>
            <p class="text-[10px] text-gray-500">Working Parent • San Diego, CA</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Accordion FAQ Section -->
  <section id="faq" class="relative z-10 py-20 px-6 md:px-12 max-w-4xl mx-auto border-t border-white/5">
    <div class="text-center space-y-4 mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight">Frequently Asked Questions</h2>
      <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Common inquiries regarding legal policies, setup requirements, and data safety.
      </p>
    </div>

    <!-- Accordion Stack -->
    <div class="space-y-4">
      
      <!-- FAQ 1 -->
      <div class="glass-panel rounded-2xl overflow-hidden border border-white/5">
        <button onclick="toggleFaq(1)" class="w-full px-6 py-5 flex items-center justify-between text-left text-white hover:bg-white/5 transition-colors duration-200">
          <span class="text-sm font-bold tracking-wide">Is this software legal?</span>
          <i id="faq-arrow-1" data-lucide="chevron-down" class="w-4.5 h-4.5 text-brand-accent transition-transform duration-300"></i>
        </button>
        <div id="faq-answer-1" class="hidden px-6 pb-5 pt-1 text-xs text-gray-400 leading-relaxed font-light border-t border-white/5">
          Yes, our software is fully legal when used strictly within legal boundaries: monitoring your minor children, or tracking devices owned by your company where the user has been fully notified and provided explicit consent. We strictly prohibit utilizing our tools for unauthorized surveillance or hacking purposes.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="glass-panel rounded-2xl overflow-hidden border border-white/5">
        <button onclick="toggleFaq(2)" class="w-full px-6 py-5 flex items-center justify-between text-left text-white hover:bg-white/5 transition-colors duration-200">
          <span class="text-sm font-bold tracking-wide">Which devices are supported?</span>
          <i id="faq-arrow-2" data-lucide="chevron-down" class="w-4.5 h-4.5 text-brand-accent transition-transform duration-300"></i>
        </button>
        <div id="faq-answer-2" class="hidden px-6 pb-5 pt-1 text-xs text-gray-400 leading-relaxed font-light border-t border-white/5">
          We offer complete client application builds for Android version 8.0 up to version 15. All features are fully optimized to work without rooting the target device. Simple administrative settings access is all that is required for installation.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="glass-panel rounded-2xl overflow-hidden border border-white/5">
        <button onclick="toggleFaq(3)" class="w-full px-6 py-5 flex items-center justify-between text-left text-white hover:bg-white/5 transition-colors duration-200">
          <span class="text-sm font-bold tracking-wide">How is user privacy protected?</span>
          <i id="faq-arrow-3" data-lucide="chevron-down" class="w-4.5 h-4.5 text-brand-accent transition-transform duration-300"></i>
        </button>
        <div id="faq-answer-3" class="hidden px-6 pb-5 pt-1 text-xs text-gray-400 leading-relaxed font-light border-t border-white/5">
          Your security dashboard reports are fully encrypted end-to-end. We deploy strict zero-knowledge database protocols, meaning that neither we nor any third party can inspect or access target screen logs or physical coordinates except your authorized admin credential login.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="glass-panel rounded-2xl overflow-hidden border border-white/5">
        <button onclick="toggleFaq(4)" class="w-full px-6 py-5 flex items-center justify-between text-left text-white hover:bg-white/5 transition-colors duration-200">
          <span class="text-sm font-bold tracking-wide">Is user consent required?</span>
          <i id="faq-arrow-4" data-lucide="chevron-down" class="w-4.5 h-4.5 text-brand-accent transition-transform duration-300"></i>
        </button>
        <div id="faq-answer-4" class="hidden px-6 pb-5 pt-1 text-xs text-gray-400 leading-relaxed font-light border-t border-white/5">
          Yes, keeping transparency clear is an absolute legal mandate. Devices configured with our tools display an active tracking status header notification so that target users are fully aware that monitoring filters are active on their device.
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="glass-panel rounded-2xl overflow-hidden border border-white/5">
        <button onclick="toggleFaq(5)" class="w-full px-6 py-5 flex items-center justify-between text-left text-white hover:bg-white/5 transition-colors duration-200">
          <span class="text-sm font-bold tracking-wide">Can I cancel my subscription anytime?</span>
          <i id="faq-arrow-5" data-lucide="chevron-down" class="w-4.5 h-4.5 text-brand-accent transition-transform duration-300"></i>
        </button>
        <div id="faq-answer-5" class="hidden px-6 pb-5 pt-1 text-xs text-gray-400 leading-relaxed font-light border-t border-white/5">
          Absolutely. You can manage, upgrade, or cancel your active security licenses directly from your profile settings on the dashboard. No contracts, cancellation fees, or hidden conditions.
        </div>
      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative z-10 py-16 px-6 md:px-12 max-w-5xl mx-auto rounded-3xl bg-gradient-to-tr from-brand-purple/40 to-brand-medium/25 border border-brand-medium/30 text-center space-y-6 mb-24 overflow-hidden">
    <!-- Backdrop radial grid overlay -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(124,58,237,0.15),transparent_70%)] pointer-events-none"></div>
    
    <div class="relative z-10 max-w-2xl mx-auto space-y-6">
      <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">Secure Your Devices Today</h2>
      <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light">
        Start protecting your family or business endpoints now. One simplified portal, lifetime product updates, and zero complexity.
      </p>
      
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
        <a href="#pricing" class="w-full sm:w-auto text-center bg-gradient-to-r from-brand-medium to-brand-light hover:shadow-xl hover:shadow-brand-medium/40 hover:-translate-y-0.5 transition-all duration-300 text-white font-bold px-8 py-4 rounded-full text-xs uppercase tracking-widest shadow-md">
          Get Started
        </a>
        <a href="mailto:support@hackwithyash.in" class="w-full sm:w-auto text-center bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 transition-all duration-300 text-white font-bold px-8 py-4 rounded-full text-xs uppercase tracking-widest">
          Contact Support
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="relative z-10 bg-brand-darkest border-t border-white/5 py-12 px-6 md:px-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Column 1: Info and logo -->
      <div class="space-y-4 text-left">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center space-x-2">
          <span class="text-lg font-bold tracking-wider text-white">
            HACKWITH<span class="text-brand-light">YASH</span>
          </span>
        </a>
        <p class="text-xs text-gray-500 leading-relaxed font-light">
          Premium device monitoring, security endpoint tracking, and parental control tools. Complete privacy, 100% remote connection.
        </p>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="space-y-3 text-left">
        <h4 class="text-xs font-bold text-white uppercase tracking-wider">Product</h4>
        <div class="flex flex-col space-y-2 text-xs text-gray-400 font-medium">
          <a href="#features" class="hover:text-white transition-colors">Features Overview</a>
          <a href="#dashboard" class="hover:text-white transition-colors">Security Dashboard</a>
          <a href="#how-it-works" class="hover:text-white transition-colors">How It Works</a>
        </div>
      </div>

      <!-- Column 3: Legal pages -->
      <div class="space-y-3 text-left">
        <h4 class="text-xs font-bold text-white uppercase tracking-wider">Legal</h4>
        <div class="flex flex-col space-y-2 text-xs text-gray-400 font-medium">
          <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="hover:text-white transition-colors">Privacy Policy</a>
          <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>" class="hover:text-white transition-colors">Terms of Service</a>
          <a href="<?php echo esc_url( home_url( '/refund-policy/' ) ); ?>" class="hover:text-white transition-colors">Refund Policy</a>
        </div>
      </div>

      <!-- Column 4: Contact & Social links -->
      <div class="space-y-3 text-left">
        <h4 class="text-xs font-bold text-white uppercase tracking-wider">Connect</h4>
        <div class="flex flex-col space-y-2 text-xs text-gray-400 font-medium">
          <a href="mailto:support@hackwithyash.in" class="hover:text-white transition-colors">support@hackwithyash.in</a>
          <a href="https://instagram.com/trackmastertool" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center">
            <svg class="w-3.5 h-3.5 text-gray-400 hover:text-white mr-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
            <span>Instagram Profile</span>
          </a>
        </div>
      </div>

    </div>

    <!-- Copyright -->
    <div class="max-w-7xl mx-auto pt-8 mt-8 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between text-[11px] text-gray-500 font-medium tracking-wide uppercase gap-4">
      <p>&copy; <?php echo date('Y'); ?> HackWithYash. All rights reserved.</p>
      <div class="flex space-x-6">
        <span>Consent Active</span>
        <span>•</span>
        <span>Secure Payments via Razorpay</span>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // Toggle Mobile Navigation Menu
    function toggleMobileMenu() {
      const menu = document.getElementById('mobile-menu');
      const icon = document.getElementById('menu-icon');
      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        icon.setAttribute('data-lucide', 'x');
      } else {
        menu.classList.add('hidden');
        icon.setAttribute('data-lucide', 'menu');
      }
      lucide.createIcons();
    }

    // Toggle Accordion FAQs
    function toggleFaq(id) {
      const answer = document.getElementById(`faq-answer-${id}`);
      const arrow = document.getElementById(`faq-arrow-${id}`);
      
      if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        arrow.style.transform = 'rotate(180deg)';
      } else {
        answer.classList.add('hidden');
        arrow.style.transform = 'rotate(0deg)';
      }
    }
  </script>

  <?php wp_footer(); ?>
</body>
</html>
