<?php
session_start();

// Check if user_id is set in the session to determine login status
$is_logged_in = isset($_SESSION['user_id']);
// Get user_name from session if logged in, otherwise default to 'User'
$user_name = $_SESSION['user_name'] ?? 'User';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classcheck.in - AI-Powered Classroom Revolution</title>
    <meta name="description" content="Classcheck.in is an AI-powered education platform revolutionizing classrooms.  Features include AI quizzes, QR attendance, smart notes, AI tutoring with A.Xel, and detailed analytics.  Improve student engagement and teacher productivity.">
    <meta name="keywords" content="classroom management, AI education, AI tutor, QR code attendance, online quizzes, smart notes, teacher tools, student engagement, edtech, learning management system, virtual classroom, AI for teachers, AI for students">
    <link rel="canonical" href="https://www.classcheck.in/">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <?php
    // Structured Data (Schema Markup) - Organization and Website
    $org_name = "Classcheck.in";
    $org_logo = "https://linux.classcheck.in/includes/images/logo.png"; // Full URL to your logo
    $url = "https://www.classcheck.in";  // Full URL to your website
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "<?php echo $org_name; ?>",
      "legalName": "<?php echo $org_name; ?>",
      "url": "<?php echo $url; ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "<?php echo $org_logo; ?>",
        "width": "200", 
        "height": "50"
      },
      "description": "AI-powered education platform revolutionizing classrooms.",
      "sameAs": [
        "https://www.github.com/malikmusabji", // Add social media links
        "https://x.com/themalikmusabji",
        "https://www.linkedin.com/themalikmusab"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Classcheck.in",
      "url": "<?php echo $url; ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "<?php echo $url; ?>/search?q={search_term_string}"
        },
        "queryInput": "required name=search_term_string"
      }
    }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classcheck.in - AI-Powered Classroom Revolution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <style>
      /* Lucide Icons Font Face */
      @font-face {
        font-family: 'LucideIcons';
        /* Load Lucide Icons font */
        src: url(https://cdn.jsdelivr.net/npm/lucide-static@latest/font/Lucide.ttf) format('truetype');
      }
      /* Lucide Icons Base Class */
      .lucide {
        font-family: 'LucideIcons';
        font-size: 1.25rem; /* Default icon size */
        line-height: 1;
        display: inline-block;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      /* Particles.js container styling */
      #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0; /* Behind hero content */
      }
      /* SVG Flow Line Animation */
      @keyframes flow { from { stroke-dashoffset: 100; } to { stroke-dashoffset: 0; } }
      /* SVG Pulse Dot Animation */
      @keyframes pulseDot { 0%, 100% { r: 2; opacity: 0.5; } 50% { r: 3.5; opacity: 0.9; } }
      /* SVG Large Pulse Dot Animation */
      @keyframes pulseDotLarge { 0%, 100% { r: 4; opacity: 0.6; } 50% { r: 5.5; opacity: 1; } }
      /* Apply flow animation to lines */
      .svg-flow-line { stroke-dasharray: 100; animation: flow 4s ease-in-out infinite alternate; }
      /* Apply pulse animation to dots */
      .svg-pulse-dot { animation: pulseDot 2.5s ease-in-out infinite; }
      .svg-pulse-dot-large { animation: pulseDotLarge 3s ease-in-out infinite; }
      /* Stagger animation delays */
      .svg-flow-line:nth-of-type(even) { animation-delay: -1s; }
      .svg-flow-line:nth-of-type(3n) { animation-delay: -0.5s; }
      .svg-pulse-dot:nth-of-type(odd) { animation-delay: -0.8s; }
      .svg-pulse-dot-large:nth-of-type(even) { animation-delay: -1.2s; }
      /* Hero section background gradient */
      .hero-section { background: linear-gradient(135deg, #f0f4ff 0%, #e6fffa 100%); }

      /* Marquee Animation */
      @keyframes marquee {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-50%); }
      }
      /* Marquee Container Styling */
      .marquee-container { overflow: hidden; white-space: nowrap; }
      /* Marquee Content Styling & Animation */
      .marquee-content { display: inline-block; animation: marquee 30s linear infinite; will-change: transform; }
      .marquee-content > * { display: inline-block; padding: 0 1.5rem; } /* Spacing for marquee items */

      /* Parallax Background Element Styling */
      .parallax-bg-element {
          position: absolute;
          z-index: -1; /* Behind main content but above body background */
          opacity: 0.15;
          transition: transform 0.1s ease-out; /* Smooth transition for parallax effect */
          will-change: transform; /* Optimize for transform changes */
      }

      /* --- Added CSS Snippets --- */

      /* Scroll Progress Bar */
      .scroll-progress-bar {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%; /* Initial width */
        height: 3px;
        background: linear-gradient(to right, #4F46E5, #10B981); /* Gradient colors */
        z-index: 9999; /* Ensure it's above the sticky header */
        transition: width 0.2s ease-out; /* Smooth width transition */
      }

      /* Loading Animation Overlay (Optional - currently commented out in JS) */
      .loading-animation {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        z-index: 10000; /* Highest z-index */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.5s ease-out; /* Fade out transition */
      }
      .loading-animation.fade-out {
        opacity: 0;
        pointer-events: none; /* Make it non-interactive when faded */
      }
      /* Loader Spinner */
      .loader {
        width: 48px;
        height: 48px;
        border: 5px solid #4F46E5; /* Use primary color */
        border-bottom-color: transparent; /* Creates spinner effect */
        border-radius: 50%;
        animation: rotation 1s linear infinite; /* Apply rotation animation */
      }
      /* Rotation Keyframes */
      @keyframes rotation {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      /* Floating Animation */
      .floating {
        animation: floating 3s ease-in-out infinite;
      }
      @keyframes floating {
        0% { transform: translate(0, 0px); }
        50% { transform: translate(0, 15px); } /* Move down */
        100% { transform: translate(0, -0px); } /* Move back up */
      }

      /* Reveal on Scroll Base Style */
      .reveal {
        opacity: 0;
        transform: translateY(30px); /* Start slightly lower */
        transition: all 0.8s ease; /* Smooth transition for opacity and transform */
      }
      /* Reveal on Scroll Active State */
      .reveal.active {
        opacity: 1;
        transform: translateY(0); /* Move to original position */
      }
      /* Note: The existing JS uses .animate-on-scroll and .is-visible.
         This .reveal class is an alternative/additional option. */

      /* Text Gradient Animation */
      .text-gradient-animate {
        background: linear-gradient(120deg, #4F46E5, #10B981, #4F46E5); /* Gradient colors */
        background-size: 200% auto; /* Double size for animation */
        color: transparent; /* Hide original text color */
        -webkit-background-clip: text; /* Clip background to text (WebKit) */
        background-clip: text; /* Clip background to text */
        animation: textGradient 5s linear infinite; /* Apply gradient animation */
      }
      @keyframes textGradient {
        to { background-position: 200% center; } /* Move background position */
      }

      /* Nav Link Hover Underline Effect */
      .nav-link {
        position: relative; /* Needed for the ::after pseudo-element */
      }
      .nav-link::after {
        content: '';
        position: absolute;
        width: 0; /* Start with no width */
        height: 2px;
        bottom: 0; /* Position at the bottom of the link */
        left: 50%;
        background: #4F46E5; /* Use primary color */
        transition: all 0.3s ease; /* Smooth transition for width and transform */
        transform: translateX(-50%); /* Center the underline */
      }
      .nav-link:hover::after {
        width: 100%; /* Expand width on hover */
      }

      /* Custom Cursor (Optional - currently commented out in JS) */
      .custom-cursor {
        width: 20px;
        height: 20px;
        border: 2px solid #4F46E5; /* Use primary color */
        border-radius: 50%;
        position: fixed;
        pointer-events: none; /* Important: Prevent cursor from blocking interactions */
        z-index: 9999;
        transition: transform 0.1s ease, background-color 0.1s ease; /* Smooth transitions */
        transform: translate(-50%, -50%); /* Center the cursor visually */
      }
      .custom-cursor.hover {
        transform: translate(-50%, -50%) scale(1.5); /* Scale up on hover */
        background: rgba(79, 70, 229, 0.1); /* Light primary color background */
      }
      
      .cc-license-details {
        margin-top: 2rem; /* Adjust spacing as needed */
        padding: 1rem;
        background-color: #f0f0f0; /* Light gray background */
        border-radius: 0.5rem; /* Rounded corners */
    }

    .cc-license-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333; /* Darker text */
    }

    .cc-license-icons {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .cc-icon {
        height: 2rem; /* Adjust icon size */
        margin-right: 0.25rem; /* Spacing between icons */
    }

    .cc-license-text {
        font-size: 0.9rem;
        color: #555; /* Slightly lighter text */
        margin-bottom: 0.5rem;
    }

    .cc-by,
    .cc-nc,
    .cc-nd {
        font-size: 0.8rem;
        color: #333;
        margin-bottom: 0.25rem;
        display: flex;
        align-items: center;
    }

    .cc-by-icon,
    .cc-nc-icon,
    .cc-nd-icon {
        height: 1rem; /* Smaller icons */
        margin-right: 0.25rem;
    }

    .cc-nc-definition {
        font-size: 0.75rem;
        color: #777; /* Even lighter */
        margin-left: 1.25rem; /* Indent */
    }
      
      
      /* --- Styles for Seamless Scroll Transition --- */
.hero-content-wrapper {
    /* Ensure opacity and add transition for fade-in/out */
    opacity: 1;
    transition: opacity 0.3s ease-out;
    will-change: opacity; /* Optimize for opacity changes */
}

.hero-content-wrapper.fade-out-quick {
    /* State when fading out */
    opacity: 0;
}
/* --- End Seamless Scroll Transition Styles --- */
      
      .scroll-down-indicator svg {
    /* You can add specific SVG styles here if needed */
    /* e.g., stroke-width: 1.5; */
    
    
}

/* Example of a custom bounce animation if you don't want Tailwind's */
 @keyframes bounceDown {
  0%, 20%, 50%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-10px);
  }
  60% {
    transform: translateY(-5px);
  }
} 

/* If using custom animation, remove 'animate-bounce' from HTML and add: */
 .scroll-down-indicator {
  animation: bounceDown 2s infinite;
} 
/* --- End Scroll Down Indicator CSS --- */
      /* --- End Added CSS Snippets --- */

    </style>
    <script>
      // Tailwind CSS Configuration
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Inter', 'sans-serif'], // Set Inter as the default sans-serif font
            },
            colors: {
              // Define primary and secondary color palettes
              primary: { DEFAULT: '#4F46E5', hover: '#4338CA', light: '#a7a2f7' },
              secondary: { DEFAULT: '#10B981', light: '#6EE7B7', hover: '#059669' },
            },
            animation: {
              // Define custom animations
              fadeInUp: 'fadeInUp 0.6s ease-out forwards',
              fadeIn: 'fadeIn 0.8s ease-out forwards',
              marquee: 'marquee 30s linear infinite',
              rotation: 'rotation 1s linear infinite',
              floating: 'floating 3s ease-in-out infinite',
              textGradient: 'textGradient 5s linear infinite'
            },
            keyframes: {
              // Define keyframes for custom animations
              fadeInUp: {
                '0%': { opacity: '0', transform: 'translateY(20px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
              },
              fadeIn: {
                '0%': { opacity: '0' },
                '100%': { opacity: '1' },
              },
              marquee: {
                '0%': { transform: 'translateX(0%)' },
                '100%': { transform: 'translateX(-50%)' }
              },
              rotation: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' }
              },
              floating: {
                '0%': { transform: 'translate(0, 0px)' },
                '50%': { transform: 'translate(0, 15px)' },
                '100%': { transform: 'translate(0, -0px)' }
              },
              textGradient: {
                'to': { backgroundPosition: '200% center' }
              }
            }
          }
        }
      }
    </script>
    <style type="text/tailwindcss">
      /* Apply base styles using Tailwind directives */
      body { @apply font-sans antialiased text-gray-800 bg-gray-50 max-w-full; }
      /* Feature card styling */
      .feature-card { @apply bg-white p-6 rounded-xl shadow-md transition-all duration-300 ease-out hover:shadow-xl hover:-translate-y-1 hover:scale-[1.02]; }
      /* Call-to-action button styling */
      .cta-button { @apply inline-block px-6 py-3 bg-primary text-white font-semibold rounded-lg shadow-md hover:bg-primary-hover transition-all duration-300 transform hover:scale-105; }
      /* Small call-to-action button styling */
      .cta-button-sm { @apply inline-block px-4 py-2 bg-primary text-white font-semibold rounded-lg shadow-sm hover:bg-primary-hover transition-all duration-300 transform hover:scale-105 text-sm; }
      /* Specific style for mobile login button */
      .login-button-sm { @apply inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-lg text-primary bg-indigo-100 hover:bg-indigo-200 transition-colors; }
      /* Navigation link styling */
      .nav-link { @apply text-gray-600 hover:text-primary transition-colors duration-200 px-3 py-2 rounded-md text-sm font-medium; }
      /* Subtle navigation link styling (e.g., for welcome message) */
      .nav-link-subtle { @apply text-gray-500 hover:text-primary transition-colors duration-200 px-3 py-2 rounded-md text-sm font-medium; }
      /* Mobile menu button styling */
      .mobile-menu-button { @apply inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white; }
      /* Base style for elements animating on scroll */
      .animate-on-scroll { @apply opacity-0 transition-all duration-700 ease-out; }
      /* Visible state for elements animating on scroll */
      .animate-on-scroll.is-visible { @apply opacity-100 transform-none; }
      /* Initial state for fade-in-up animation */
      .initial-fade-in-up { @apply opacity-0 translate-y-6; }
      /* Initial state for simple fade-in animation */
      .initial-fade-in { @apply opacity-0; }
      /* Visible state combined with initial fade-in-up */
      .animate-on-scroll.is-visible.initial-fade-in-up { @apply opacity-100 translate-y-0; }
      /* Visible state combined with initial fade-in */
      .animate-on-scroll.is-visible.initial-fade-in { @apply opacity-100; }
      /* Wrapper for hero content to apply parallax */
      .hero-content-wrapper { @apply relative z-10 transition-transform duration-100 ease-out; }
      /* Style list markers with primary color */
      .list-disc li::marker, .list-decimal li::marker { color: theme('colors.primary.DEFAULT'); }
      /* Benefits list item styling */
      .benefits-list li { @apply flex items-start; }
      /* Benefits list icon styling */
      .benefits-list .lucide { @apply mr-2 mt-1 text-emerald-500 flex-shrink-0 text-base; }
      /* Hero animation container styling */
      .hero-animation-container { @apply mt-12 md:mt-16 max-w-xl lg:max-w-2xl mx-auto relative aspect-video; }
      /* Hero animation SVG styling */
      .hero-animation-svg { @apply w-full h-full opacity-60; }
      /* Alternating background for 'How It Works' steps */
      .how-it-works-step:nth-child(odd) { @apply bg-white; }
      .how-it-works-step:nth-child(even) { @apply bg-gray-100; }
      /* 'How It Works' step base styling */
      .how-it-works-step { @apply p-6 rounded-lg transition-shadow duration-300 hover:shadow-md; }
    </style>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classcheck.in - Interactive Orbit</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tone/14.7.77/Tone.min.js"></script>
    <style>
        :root {
            /* Default Theme Values (Theme 0) */
            --bg-color: #f0f4ff;
            --center-bg-color: rgba(255, 255, 255, 0.6);
            --center-border-color: #4f46e5;
            --center-text-color: #4f46e5;
            --subtitle-text-color: #6366f1;
            --item-bg-color: rgba(255, 255, 255, 0.7);
            --item-border-color: rgba(79, 70, 229, 0.2);
            --item-hover-bg-color: rgba(255, 255, 255, 0.95);
            --item-hover-border-color: #4f46e5;
            --item-active-bg-color: #10b981;
            --item-active-border-color: #6ee7b7;
            --small-icon-bg-color: rgba(129, 140, 248, 0.5);
            --icon-color-dashboard: #ff4500;
            --icon-color-ui: #ffd700;
            --icon-color-streaks: #00ffff;
            --icon-color-vibes: #32cd32;
            --icon-color-quickadd: #ff00ff;
            --icon-color-reflection: #ff69b4;
            --icon-color-eastereggs: #40e0d0;
            --icon-color-widgets: #ff8c00;
            --small-svg-color-1: #f87171;
            --small-svg-color-2: #fbbf24;
            --small-svg-color-3': '#34d399';
            --small-svg-color-4': '#60a5fa';
            --small-svg-color-5': '#a78bfa';
            --small-svg-color-6': '#f472b6';
            /* Button colors (kept in case other buttons are added) */
            --button-bg: #4f46e5;
            --button-text: #ffffff;
            --button-hover-bg: #4338ca;
            --button-disabled-bg: #a5b4fc;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background-color: var(--bg-color);
            color: var(--center-text-color);
            display: flex;
            flex-direction: column; /* Align items vertically */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            overflow: hidden;
            transition: background-color 0.5s ease;
        }

        .feature-orbit-container {
            position: relative;
            width: 450px;
            height: 450px;
            margin: 20px auto; /* Reduced margin */
        }

        .feature-orbit-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 220px;
            height: 220px;
            border-radius: 50%;
            border: 3px solid var(--center-border-color);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--center-text-color);
            background-color: var(--center-bg-color);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55), border-color 0.5s ease, background-color 0.5s ease, color 0.5s ease;
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2), 0 0 0 5px rgba(79, 70, 229, 0.05);
            cursor: default;
            z-index: 10;
            padding: 15px;
        }

        .feature-orbit-center-title {
            font-size: 1.4rem;
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 5px;
        }

        .feature-orbit-subtitle {
            font-size: 0.8rem;
            color: var(--subtitle-text-color);
            line-height: 1.3;
             transition: color 0.5s ease;
        }

        .feature-orbit-item {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--item-bg-color);
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, border-color 0.3s ease-in-out, opacity 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--item-border-color);
            backdrop-filter: blur(5px);
            transform-origin: center center;
            will-change: transform;
            z-index: 5;
        }

        .feature-orbit-container.is-hovering .feature-orbit-item:not(.hover-target) {
             opacity: 0.6;
        }

        .feature-orbit-item.hover-target {
            background-color: var(--item-hover-bg-color);
            box-shadow: 0 8px 16px rgba(79, 70, 229, 0.25);
            border-color: var(--item-hover-border-color);
            z-index: 6;
            opacity: 1;
        }

        .feature-orbit-icon {
            width: 35px;
            height: 35px;
            color: var(--icon-color);
             transition: color 0.5s ease;
        }
        [data-feature="dashboard"] .feature-orbit-icon { color: var(--icon-color-dashboard); }
        [data-feature="ui"] .feature-orbit-icon { color: var(--icon-color-ui); }
        [data-feature="streaks"] .feature-orbit-icon { color: var(--icon-color-streaks); }
        [data-feature="vibes"] .feature-orbit-icon { color: var(--icon-color-vibes); }
        [data-feature="quickadd"] .feature-orbit-icon { color: var(--icon-color-quickadd); }
        [data-feature="reflection"] .feature-orbit-icon { color: var(--icon-color-reflection); }
        [data-feature="eastereggs"] .feature-orbit-icon { color: var(--icon-color-eastereggs); }
        [data-feature="widgets"] .feature-orbit-icon { color: var(--icon-color-widgets); }

        .feature-orbit-item.active {
            background-color: var(--item-active-bg-color);
            border-color: var(--item-active-border-color);
            box-shadow: 0 0 25px rgba(16, 185, 129, 0.8), 0 0 10px rgba(255, 255, 255, 0.5) inset;
        }

        .small-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: var(--small-icon-bg-color);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            z-index: 1;
            transition: transform 0.2s ease-out, opacity 0.2s ease-out, background-color 0.5s ease;
            will-change: transform, opacity;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .small-icon svg {
            width: 8px;
            height: 8px;
            transition: fill 0.5s ease;
        }
        .small-icon:nth-child(6n+1) svg { fill: var(--small-svg-color-1); }
        .small-icon:nth-child(6n+2) svg { fill: var(--small-svg-color-2); }
        .small-icon:nth-child(6n+3) svg { fill: var(--small-svg-color-3); }
        .small-icon:nth-child(6n+4) svg { fill: var(--small-svg-color-4); }
        .small-icon:nth-child(6n+5) svg { fill: var(--small-svg-color-5); }
        .small-icon:nth-child(6n+0) svg { fill: var(--small-svg-color-6); }

        .small-icon.disrupted {
            transform: scale(0) !important;
            opacity: 0 !important;
        }

        @keyframes rotateCenter {
            0% { transform: translate(-50%, -50%) scale(1.0); }
            50% { transform: translate(-50%, -50%) scale(1.05); }
            100% { transform: translate(-50%, -50%) scale(1.0); }
        }

        .feature-orbit-center.rotate {
            animation: rotateCenter 0.6s ease-in-out;
        }

        /* Removed #sound-toggle styles */

    </style>
</head>
<body class="bg-gray-50">

    <div class="scroll-progress-bar"></div>

    
    
    <div class="page-wrapper" style=" max-width: 100%;">

    <header class="bg-white/95 backdrop-blur-sm shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-auto mr-2" src="https://linux.classcheck.in/includes/images/logo.png" alt="Classcheck.in Logo" onerror="this.style.display='none'"> <span class="font-bold text-xl text-primary" style="display: none;" onload="this.style.display= this.previousElementSibling.style.display === 'none' ? 'inline' : 'none'">Classcheck.in</span>
                    </a>
                    <span class="inline-block ml-3 text-sm text-gray-500 font-normal">
                    Lead the Class. Be Classcheck.
                    </span>
                </div>
                <div class="hidden min-[850px]:ml-6 min-[850px]:flex min-[850px]:space-x-4 items-center">
                    <a href="index.php" class="nav-link text-primary font-semibold" aria-current="page">Home</a>
                    <a href="#features" class="nav-link">Features</a>
                    <a href="#how-it-works" class="nav-link">How It Works</a>
                    <a href="#pricing" class="nav-link">Pricing</a>
                    <a href="#benefits" class="nav-link">Benefits</a>
                    <a href="#contact" class="nav-link">Contact Us</a>

                    <?php if ($is_logged_in): ?>
                        <span class="nav-link-subtle hidden lg:inline">Welcome, <?php echo htmlspecialchars($user_name); ?>!</span>
                        <a href="dashboard.php" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-primary bg-indigo-100 hover:bg-indigo-200 transition-colors">Dashboard</a>
                        <a href="logout.php" class="ml-2 cta-button-sm !bg-gray-600 hover:!bg-gray-700">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-primary bg-indigo-100 hover:bg-indigo-200 transition-colors">Login</a>
                        <a href="register.php" class="ml-2 cta-button text-sm">Sign Up</a>
                    <?php endif; ?>
                </div>
                <div class="-mr-2 flex items-center min-[850px]:hidden">
                    <?php if ($is_logged_in): ?>
                        <a href="dashboard.php" class="login-button-sm mr-2">Dashboard</a>
                         <a href="logout.php" class="cta-button-sm !bg-gray-600 hover:!bg-gray-700 mr-2">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="login-button-sm mr-2">Login</a>
                        <a href="register.php" class="cta-button-sm">Sign Up</a>
                    <?php endif; ?>
                    <button type="button" id="mobile-menu-open-button" class="mobile-menu-button ml-2" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <div class="min-[850px]:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700" aria-current="page">Home</a>
                <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Features</a>
                <a href="#how-it-works" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">How It Works</a>
                <a href="#pricing" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Pricing</a>
                <a href="#benefits" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Benefits</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Contact Us</a>
            </div>
             <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="px-2 space-y-1">
                    <?php if ($is_logged_in): ?>
                        <div class="px-3 py-2 text-base font-medium text-gray-500">Welcome, <?php echo htmlspecialchars($user_name); ?>!</div>
                        <a href="dashboard.php" class="block w-full px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Dashboard</a>
                        <a href="logout.php" class="block w-full mt-1 px-3 py-2 rounded-md text-base font-medium text-white bg-gray-600 hover:bg-gray-700">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="block w-full px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Login</a>
                        <a href="register.php" class="block w-full mt-1 px-3 py-2 rounded-md text-base font-medium text-white bg-primary hover:bg-primary-hover">Sign Up</a>
                    <?php endif; ?>
                 </div>
             </div>
        </div>

        <div class="marquee-container bg-gradient-to-r from-primary to-secondary text-white py-1.5 text-sm font-medium">
            <div class="marquee-content">
                <span>AI Quizzes ✨</span>
                <span>QR Attendance ✅</span>
                <span>Smart Notes 📝</span>
                <span>AI Tutor 🤖</span>
                <span>Analytics 📊</span>
                <span>Gamification 🎮</span>
                <span>AI Quizzes ✨</span>
                <span>QR Attendance ✅</span>
                <span>Smart Notes 📝</span>
                <span>AI Tutor 🤖</span>
                <span>Analytics 📊</span>
                <span>Gamification 🎮</span>
            </div>
             <div class="marquee-content" aria-hidden="true">
                <span>AI Quizzes ✨</span>
                <span>QR Attendance ✅</span>
                <span>Smart Notes 📝</span>
                <span>AI Tutor 🤖</span>
                <span>Analytics 📊</span>
                <span>Gamification 🎮</span>
                <span>AI Quizzes ✨</span>
                <span>QR Attendance ✅</span>
                <span>Smart Notes 📝</span>
                <span>AI Tutor 🤖</span>
                <span>Analytics 📊</span>
                <span>Gamification 🎮</span>
            </div>
        </div>
    </header>

    <main>
        <section id="hero-section" class="hero-section relative py-20 md:py-32 overflow-hidden">
        <div class="feature-orbit-container" id="orbit-container">
        <div class="feature-orbit-center" id="orbit-center">
        </div>

        <div class="feature-orbit-item" data-feature="dashboard">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
        </div>
        <div class="feature-orbit-item" data-feature="ui">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M10 3L8.84 7.33 5 8.21l3.16 2.5.19 3.96L12 13.4l3.65 1.27.19-3.96L19 8.21l-3.84-.88L14 3l-1.16 4.33L10 3zm4.79 10.88l-1.13 4.33L12 19.4l-1.66-1.19-1.13-4.33 3.79-.88 3.79.88zM5.16 14.21l.19 3.96L9 19.4l-1.66-1.19L5.16 14.21zm13.68 0l-2.18 3.96L15 19.4l.19-3.96 3.65-1.23z"/></svg>
        </div>
        <div class="feature-orbit-item" data-feature="streaks">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
        </div>
        <div class="feature-orbit-item" data-feature="vibes">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07M19.07 4.93a10 10 0 0 1 0 14.14"></path></svg>
        </div>
        <div class="feature-orbit-item" data-feature="quickadd">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 10 20 15 15 20"></polyline><path d="M4 4v7a4 4 0 0 0 4 4h12"></path></svg>
        </div>
        <div class="feature-orbit-item" data-feature="reflection">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5zM12 6a6.48 6.48 0 0 0-6 6.48c0 .79.14 1.56.4 2.28l-.46 1.37L4.1 19.9l3.77-1.26a6.48 6.48 0 0 0 7.66 0L19.3 19.9l-1.84-3.77.46-1.37A6.48 6.48 0 0 0 12 6zm1.88 6.13l-1.4 1.41-1.4-1.41a1.93 1.93 0 0 0-2.72 0 1.94 1.94 0 0 0 0 2.72l4.12 4.12 4.12-4.12a1.94 1.94 0 0 0 0-2.72 1.93 1.93 0 0 0-2.72 0z"></path></svg>
        </div>
        <div class="feature-orbit-item" data-feature="eastereggs">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M6 3h12l4 6-10 12L2 9l4-6zm1.8 2L4.5 9h15L16.2 5H7.8zM12 10.5l6.4 7.5H5.6L12 10.5z"></path></svg>
        </div>
        <div class="feature-orbit-item" data-feature="widgets">
             <svg class="feature-orbit-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
        </div>

        <div id="small-icon-container">
        </div>
    </div>
            <div id="particles-js"></div>
            <div class="hero-content-wrapper max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <?php if ($is_logged_in): ?>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900 mb-6 animate-on-scroll initial-fade-in-up" style="transition-delay: 100ms;">
                        Welcome back to <span class="text-primary">Classcheck.in</span>, <?php echo htmlspecialchars($user_name); ?>!
                    </h1>
                    <p class="max-w-2xl mx-auto text-lg md:text-xl text-gray-600 mb-10 animate-on-scroll initial-fade-in-up" style="transition-delay: 200ms;">
                        Ready to manage your classes, check attendance, or explore your insights?
                    </p>
                    <div class="animate-on-scroll initial-fade-in-up" style="transition-delay: 300ms;">
                        <a href="dashboard.php" class="cta-button text-lg inline-flex items-center gap-2">
                            <span class="lucide">&#xe907;</span> Go to Dashboard </a>
                    </div>
                    <div class="hero-animation-container animate-on-scroll initial-fade-in" style="transition-delay: 400ms;">
                         <svg class="hero-animation-svg" viewBox="0 0 400 200" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                             <defs>
                                 <linearGradient id="lineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                     <stop offset="0%" style="stop-color:#a7a2f7; stop-opacity:0.8" /> <stop offset="100%" style="stop-color:#6EE7B7; stop-opacity:0.8" /> </linearGradient>
                                 <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                     <feGaussianBlur stdDeviation="1.5" result="coloredBlur"/>
                                     <feMerge>
                                         <feMergeNode in="coloredBlur"/>
                                         <feMergeNode in="SourceGraphic"/>
                                     </feMerge>
                                 </filter>
                             </defs>
                             <g filter="url(#glow)">
                                 <line class="svg-flow-line" x1="20" y1="100" x2="380" y2="100" stroke="url(#lineGrad)" stroke-width="1"/>
                                 <line class="svg-flow-line" x1="50" y1="50" x2="350" y2="150" stroke="url(#lineGrad)" stroke-width="0.8"/>
                                 <line class="svg-flow-line" x1="50" y1="150" x2="350" y2="50" stroke="url(#lineGrad)" stroke-width="0.8"/>
                                 <line class="svg-flow-line" x1="100" y1="30" x2="300" y2="170" stroke="#a7a2f7" stroke-width="0.6" stroke-opacity="0.7"/>
                                 <line class="svg-flow-line" x1="100" y1="170" x2="300" y2="30" stroke="#6EE7B7" stroke-width="0.6" stroke-opacity="0.7"/>
                                 <line class="svg-flow-line" x1="150" y1="10" x2="250" y2="190" stroke="#a7a2f7" stroke-width="0.4" stroke-opacity="0.6"/>
                                 <line class="svg-flow-line" x1="150" y1="190" x2="250" y2="10" stroke="#6EE7B7" stroke-width="0.4" stroke-opacity="0.6"/>
                                 <circle class="svg-pulse-dot-large" cx="50" cy="75" r="4" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="350" cy="125" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="100" cy="150" r="2" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot-large" cx="300" cy="50" r="4" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="200" cy="100" r="3" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="150" cy="40" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot-large" cx="250" cy="160" r="4" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="80" cy="20" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="320" cy="180" r="2" fill="#4F46E5"/>
                             </g>
                         </svg>
                    </div>

                <?php else: ?>
                    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900 mb-6 animate-on-scroll initial-fade-in-up" style="transition-delay: 100ms;">
                        Streamline the Classroom & Engaging Students with <span class="text-gradient-animate">Classcheck.in's AI</span>
                    </h1>
                    <p class="max-w-3xl mx-auto text-lg md:text-xl text-gray-600 mb-10 animate-on-scroll initial-fade-in-up" style="transition-delay: 200ms;">
                        Cut attendance time from <span class="font-semibold">10 to 3 minutes</span> with QR codes and other Proprietry technology, boost comprehension with interactive quizzes & games, generate notes instantly, and empower students with <span class="font-semibold text-secondary">A.Xel</span>, our 24/7 AI tutor.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll initial-fade-in-up" style="transition-delay: 300ms;">
                        <a href="register.php" class="cta-button text-lg">Get Started Now</a>
                        <a href="request_demo.php" class="inline-block px-6 py-3 bg-white text-primary border border-primary font-semibold rounded-lg shadow-sm hover:bg-indigo-50 transition-colors duration-300 text-lg transform hover:scale-105">Request a Demo</a>
                    </div>
                    <div class="hero-animation-container animate-on-scroll initial-fade-in" style="transition-delay: 400ms;">
                         <svg class="hero-animation-svg" viewBox="0 0 400 200" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg">
                             <defs>
                                 <linearGradient id="lineGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                                     <stop offset="0%" style="stop-color:#a7a2f7; stop-opacity:0.8" /> <stop offset="100%" style="stop-color:#6EE7B7; stop-opacity:0.8" /> </linearGradient>
                                 <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                     <feGaussianBlur stdDeviation="1.5" result="coloredBlur"/>
                                     <feMerge>
                                         <feMergeNode in="coloredBlur"/>
                                         <feMergeNode in="SourceGraphic"/>
                                     </feMerge>
                                 </filter>
                             </defs>
                             <g filter="url(#glow)">
                                 <line class="svg-flow-line" x1="20" y1="100" x2="380" y2="100" stroke="url(#lineGrad)" stroke-width="1"/>
                                 <line class="svg-flow-line" x1="50" y1="50" x2="350" y2="150" stroke="url(#lineGrad)" stroke-width="0.8"/>
                                 <line class="svg-flow-line" x1="50" y1="150" x2="350" y2="50" stroke="url(#lineGrad)" stroke-width="0.8"/>
                                 <line class="svg-flow-line" x1="100" y1="30" x2="300" y2="170" stroke="#a7a2f7" stroke-width="0.6" stroke-opacity="0.7"/>
                                 <line class="svg-flow-line" x1="100" y1="170" x2="300" y2="30" stroke="#6EE7B7" stroke-width="0.6" stroke-opacity="0.7"/>
                                 <line class="svg-flow-line" x1="150" y1="10" x2="250" y2="190" stroke="#a7a2f7" stroke-width="0.4" stroke-opacity="0.6"/>
                                 <line class="svg-flow-line" x1="150" y1="190" x2="250" y2="10" stroke="#6EE7B7" stroke-width="0.4" stroke-opacity="0.6"/>
                                 <circle class="svg-pulse-dot-large" cx="50" cy="75" r="4" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="350" cy="125" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="100" cy="150" r="2" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot-large" cx="300" cy="50" r="4" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="200" cy="100" r="3" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="150" cy="40" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot-large" cx="250" cy="160" r="4" fill="#4F46E5"/>
                                 <circle class="svg-pulse-dot" cx="80" cy="20" r="2" fill="#10B981"/>
                                 <circle class="svg-pulse-dot" cx="320" cy="180" r="2" fill="#4F46E5"/>
                             </g>
                         </svg>
                         <a href="#features" aria-label="Scroll down to features"
           class="scroll-down-indicator absolute bottom-20 left-[47.9%] transform -translate-x-1/2 z-10 cursor-pointer group animate-bounce">
            <svg class="w-8 h-8 text-gray-600 group-hover:text-primary transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </a>
                    </div>
                <?php endif; ?>

            </div>
        </section>

        <section id="features" class="py-16 md:py-24 bg-white overflow-hidden relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 p-8 bg-gradient-to-r from-indigo-50 to-emerald-50 rounded-xl animate-on-scroll initial-fade-in-up">
                     <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-3">Transforming Education, Together</h2>
                     <p class="mt-4 text-lg text-gray-700">Discover how Classcheck.in streamlines tasks and ignites learning.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="feature-card group hover:bg-gradient-to-br from-primary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl" style="transition-delay: 100ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-primary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-primary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M3 6a3 3 0 013-3h3a3 3 0 013 3v3a3 3 0 01-3 3H6a3 3 0 01-3-3V6z" />
                                    <path d="M15 6a3 3 0 013-3h3a3 3 0 013 3v3a3 3 0 01-3 3h-3a3 3 0 01-3-3V6z" />
                                    <path d="M3 18a3 3 0 013-3h3a3 3 0 013 3v3a3 3 0 01-3 3H6a3 3 0 01-3-3v-3z" />
                                    <circle cx="18" cy="18" r="3" />
                                    <path d="M21 21l-1.5-1.5" />
                                </svg>
                            </div>
                        </div>
                        <div class="relative">
                            <h3 class="text-xl font-semibold mb-3">Effortless QR Attendance</h3>
                            <div class="text-primary font-bold mb-3">Save 70% Time!</div>
                            <p class="text-gray-600">Reduce check-in time from 10 to just 3 minutes using secure QR codes.</p>
                            <div class="mt-4 flex justify-center space-x-2">
                                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Quick</span>
                                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Secure</span>
                                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Easy</span>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card group hover:bg-gradient-to-br from-secondary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl" style="transition-delay: 200ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-secondary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-secondary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 3v6a1 1 0 001 1h6" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Interactive Quizzes</h3>
                        <div class="text-secondary font-bold mb-3">Instant Feedback</div>
                        <p class="text-gray-600">Reinforce learning with dynamic, course-related quizzes and real-time insights.</p>
                        <div class="mt-4 grid grid-cols-2 gap-2">
                            <div class="bg-secondary/10 p-2 rounded-lg">
                                <div class="font-semibold text-secondary">95%</div>
                                <div class="text-xs text-gray-600">Engagement</div>
                            </div>
                            <div class="bg-secondary/10 p-2 rounded-lg">
                                <div class="font-semibold text-secondary">2x</div>
                                <div class="text-xs text-gray-600">Retention</div>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card group hover:bg-gradient-to-br from-primary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl floating" style="transition-delay: 300ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-primary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-primary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 8V4H8" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="4" y="4" width="16" height="16" rx="2"/>
                                    <path d="M2 14h2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20 14h2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 13v2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 13v2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Meet A.Xel: Your AI Tutor</h3>
                        <div class="text-primary font-bold mb-3">24/7 Support</div>
                        <p class="text-gray-600">Personalized, adaptive learning with instant answers based on your course material.</p>
                        <div class="mt-4 flex justify-center">
                            <div class="relative inline-flex items-center px-4 py-2 rounded-full bg-primary/10 text-primary">
                                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-primary opacity-75"></span>
                                <span class="relative">Always Online</span>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card group hover:bg-gradient-to-br from-secondary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl" style="transition-delay: 400ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-secondary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-secondary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 15l-2-2m0 0l-2-2m2 2l2-2m-2 2l-2 2m8-10V5a2 2 0 00-2-2H8a2 2 0 00-2 2v2M6 19h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gamified Learning</h3>
                        <div class="text-secondary font-bold mb-3">Fun & Engaging</div>
                        <p class="text-gray-600">Transform studying into an exciting journey with interactive, course-specific games.</p>
                        <div class="mt-4 flex justify-center space-x-2">
                            <div class="w-8 h-8 rounded-full bg-secondary/20 flex items-center justify-center text-lg">🏆</div>
                            <div class="w-8 h-8 rounded-full bg-secondary/20 flex items-center justify-center text-lg">🎮</div>
                            <div class="w-8 h-8 rounded-full bg-secondary/20 flex items-center justify-center text-lg">⭐</div>
                        </div>
                    </div>

                    <div class="feature-card group hover:bg-gradient-to-br from-primary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl" style="transition-delay: 500ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-primary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-primary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                     <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Smart Notes</h3>
                        <div class="text-primary font-bold mb-3">Real-time Generation</div>
                        <p class="text-gray-600">Auto-generate concise notes from any content format, including live lectures.</p>
                        <div class="mt-4 flex justify-center space-x-2">
                            <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">PDF</span>
                            <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Video</span>
                            <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Live</span>
                        </div>
                    </div>

                    <div class="feature-card group hover:bg-gradient-to-br from-secondary/5 to-transparent text-center animate-on-scroll initial-fade-in-up p-8 rounded-xl" style="transition-delay: 600ms;" data-tilt> <div class="relative mb-6">
                            <div class="absolute inset-0 bg-secondary/10 rounded-full blur-xl group-hover:blur-2xl transition-all duration-300"></div>
                            <div class="relative">
                                <svg class="w-16 h-16 mx-auto text-secondary group-hover:scale-110 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Analytics Dashboard</h3>
                        <div class="text-secondary font-bold mb-3">Data-Driven Insights</div>
                        <p class="text-gray-600">Track progress and patterns with intuitive, real-time analytics.</p>
                        <div class="mt-4 grid grid-cols-3 gap-2">
                            <div class="bg-secondary/10 p-2 rounded-lg">
                                <div class="font-semibold text-secondary">87%</div>
                                <div class="text-xs text-gray-600">Attendance</div>
                            </div>
                            <div class="bg-secondary/10 p-2 rounded-lg">
                                <div class="font-semibold text-secondary">92%</div>
                                <div class="text-xs text-gray-600">Progress</div>
                            </div>
                            <div class="bg-secondary/10 p-2 rounded-lg">
                                <div class="font-semibold text-secondary">95%</div>
                                <div class="text-xs text-gray-600">Success</div>
                            </div>
                        </div>
                    </div>
                </div> </div>
        </section>

        <section id="how-it-works" class="py-16 md:py-24 bg-gradient-to-br from-gray-50 to-white overflow-hidden relative z-10">
            <div class="absolute inset-0 z-0">
                <div class="absolute top-0 left-0 w-72 h-72 bg-primary opacity-5 rounded-full blur-3xl transform -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-72 h-72 bg-secondary opacity-5 rounded-full blur-3xl transform translate-x-1/2 translate-y-1/2"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16 animate-on-scroll initial-fade-in-up">
                    <span class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary text-sm font-semibold mb-4">Our Process</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">How Classcheck.in Works</h2>
                    <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto">Transform your classroom in three simple steps</p>
                </div>

                <div class="relative">
                    <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-primary via-secondary to-primary transform -translate-y-1/2">
                        <div class="animate-pulse absolute inset-0 bg-gradient-to-r from-primary via-secondary to-primary opacity-50"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 mt-12 relative">
                        <div class="how-it-works-step group animate-on-scroll initial-fade-in-up" style="transition-delay: 100ms;">
                            <div class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-primary-hover rounded-full flex items-center justify-center text-white text-xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">1</div>
                                </div>
                                <div class="mt-6">
                                    <div class="mb-6 text-primary transform group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-semibold mb-4">Connect & Upload</h3>
                                    <p class="text-gray-600">Link your LMS or easily upload course materials – PDFs, videos, presentations, and more.</p>
                                    <ul class="mt-4 text-left text-sm text-gray-500 space-y-2">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Multiple file formats supported
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Easy drag & drop interface
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Automatic content organization
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="how-it-works-step group animate-on-scroll initial-fade-in-up" style="transition-delay: 200ms;">
                            <div class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                    <div class="w-12 h-12 bg-gradient-to-br from-secondary to-secondary-hover rounded-full flex items-center justify-center text-white text-xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">2</div>
                                </div>
                                <div class="mt-6">
                                    <div class="mb-6 text-secondary transform group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 6l-4 4-4-4" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 12l4 4m-8-4l-4 4" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-semibold mb-4">AI Generation</h3>
                                    <p class="text-gray-600">Our AI analyzes content to create interactive learning materials automatically.</p>
                                    <ul class="mt-4 text-left text-sm text-gray-500 space-y-2">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Smart content analysis
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Auto-generated quizzes
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Interactive flashcards & notes
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="how-it-works-step group animate-on-scroll initial-fade-in-up" style="transition-delay: 300ms;">
                            <div class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                                <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-primary-hover rounded-full flex items-center justify-center text-white text-xl font-bold shadow-lg group-hover:scale-110 transition-transform duration-300">3</div>
                                </div>
                                <div class="mt-6">
                                    <div class="mb-6 text-primary transform group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-16 h-16 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <path d="M17 18a5 5 0 0 0-10 0" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 2a5 5 0 0 0-5 5v1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 22a5 5 0 0 0 5-5v-1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7 2a5 5 0 0 1 5 5v1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M7 22a5 5 0 0 1-5-5v-1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <circle cx="12" cy="12" r="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-semibold mb-4">Engage & Analyze</h3>
                                    <p class="text-gray-600">Track progress and engage students with interactive tools and A.Xel AI tutor.</p>
                                    <ul class="mt-4 text-left text-sm text-gray-500 space-y-2">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Real-time analytics
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            Progress tracking
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-primary" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                            24/7 AI support
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> </div> </div>
        </section>

        <section id="pricing" class="py-16 md:py-24 bg-white overflow-hidden relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-on-scroll initial-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Flexible Plans for Everyone</h2>
                    <p class="mt-4 text-lg text-gray-600">Choose the right plan or contact us for custom institutional solutions.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="feature-card border border-gray-200 flex flex-col animate-on-scroll initial-fade-in-up" style="transition-delay: 100ms;" data-tilt> <h3 class="text-xl font-semibold mb-1 text-center text-gray-700">Student Basic</h3>
                        <p class="text-4xl font-bold text-center my-4">$0<span class="text-lg font-normal text-gray-500">/month</span></p>
                        <p class="text-sm text-gray-500 text-center mb-6">Great for individual students starting out.</p>
                        <ul class="space-y-3 text-left my-6 flex-grow text-sm text-gray-600">
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Basic QR Attendance Check-in</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Limited Interactive Quizzes</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Basic Note Generation (Limited)</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Community Support</span></li>
                        </ul>
                        <a href="register.php" class="inline-block w-full px-6 py-3 bg-indigo-100 text-primary text-center font-semibold rounded-lg shadow-sm hover:bg-indigo-200 transition-colors duration-300 mt-auto">Get Started Free</a>
                    </div>

                    <div class="feature-card border-2 border-primary flex flex-col relative animate-on-scroll initial-fade-in-up" style="transition-delay: 200ms;" data-tilt> <span class="bg-primary text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full absolute top-0 right-0 -mt-3 mr-3">Popular</span>
                        <h3 class="text-xl font-semibold mb-1 text-center text-primary">Educator Pro</h3>
                        <p class="text-4xl font-bold text-center my-4">$9<span class="text-lg font-normal text-gray-500">/month</span></p>
                        <p class="text-sm text-gray-500 text-center mb-6">For educators and power users needing more.</p>
                        <ul class="space-y-3 text-left my-6 flex-grow text-sm text-gray-600">
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>All Basic Features, plus:</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Unlimited Attendance Tracking</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Advanced Quizzes & Games</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Full A.Xel AI Tutor Access</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Enhanced Note Generation (Live Lectures)</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Educator Analytics Dashboard</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Priority Support</span></li>
                        </ul>
                        <a href="register.php" class="cta-button w-full text-center mt-auto">Choose Pro</a>
                    </div>

                    <div class="feature-card border border-gray-200 flex flex-col animate-on-scroll initial-fade-in-up" style="transition-delay: 300ms;" data-tilt> <h3 class="text-xl font-semibold mb-1 text-center text-gray-700">Institution</h3>
                        <p class="text-4xl font-bold text-center my-4">Custom</p>
                        <p class="text-sm text-gray-500 text-center mb-6">Tailored solutions for schools and universities.</p>
                        <ul class="space-y-3 text-left my-6 flex-grow text-sm text-gray-600">
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>All Pro Features, plus:</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>LMS Integration (Canvas, Moodle, etc.)</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Admin Dashboards & Controls</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Bulk Licensing Options</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Dedicated Account Manager</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Custom Onboarding & Training</span></li>
                            <li class="flex items-start"><span class="lucide text-emerald-500 mr-2 mt-0.5 flex-shrink-0 text-base">&#xe919;</span><span>Enhanced Security Options</span></li>
                        </ul>
                        <a href="#contact" class="inline-block w-full px-6 py-3 bg-gray-800 text-white text-center font-semibold rounded-lg shadow-sm hover:bg-gray-700 transition-colors duration-300 mt-auto">Contact Sales</a>
                    </div>
                </div> </div>
        </section>

        <section id="benefits" class="py-16 md:py-24 bg-gray-50 overflow-hidden relative z-10">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="text-center mb-12 animate-on-scroll initial-fade-in-up">
                     <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Why Choose Classcheck.in?</h2>
                     <p class="mt-4 text-lg text-gray-600">Unlock benefits for everyone involved in the learning process.</p>
                 </div>
                 <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                     <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll initial-fade-in-up hover:shadow-lg transition-shadow duration-300" style="transition-delay: 100ms;">
                          <h3 class="text-xl font-semibold mb-4 text-primary">For Students</h3>
                          <ul class="space-y-3 text-gray-600 benefits-list">
                              <li><span class="lucide">&#xe919;</span><span>Personalized learning paths & adaptive feedback</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Increased engagement through quizzes & games</span></li>
                              <li><span class="lucide">&#xe919;</span><span>24/7 AI tutor support (A.Xel)</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Dynamic study tools generated instantly</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Easy attendance check-in</span></li>
                          </ul>
                      </div>
                      <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll initial-fade-in-up hover:shadow-lg transition-shadow duration-300" style="transition-delay: 200ms;">
                          <h3 class="text-xl font-semibold mb-4 text-secondary">For Educators</h3>
                          <ul class="space-y-3 text-gray-600 benefits-list">
                              <li><span class="lucide">&#xe919;</span><span>Significant time-saving automation (attendance, grading)</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Actionable insights from real-time student analytics</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Enhanced teaching tools (quizzes, games)</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Easily support diverse learners & identify needs</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Streamlined content preparation</span></li>
                          </ul>
                      </div>
                      <div class="bg-white p-8 rounded-xl shadow-md animate-on-scroll initial-fade-in-up hover:shadow-lg transition-shadow duration-300" style="transition-delay: 300ms;">
                          <h3 class="text-xl font-semibold mb-4 text-gray-700">For Institutions</h3>
                          <ul class="space-y-3 text-gray-600 benefits-list">
                              <li><span class="lucide">&#xe919;</span><span>Scalable & integrable platform (LMS compatible)</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Boost technological reputation & innovation</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Secure data handling & academic integrity features</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Improve overall educational outcomes & efficiency</span></li>
                              <li><span class="lucide">&#xe919;</span><span>Attract & retain tech-savvy students and faculty</span></li>
                          </ul>
                      </div>
                 </div> </div>
        </section>

        <section id="testimonials" class="py-16 md:py-24 bg-white overflow-hidden relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-on-scroll initial-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Trusted by Educators & Students</h2>
                    <p class="mt-4 text-lg text-gray-600">See what others are saying about Classcheck.in.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <blockquote class="bg-gray-100 p-6 rounded-lg shadow animate-on-scroll initial-fade-in-up hover:shadow-md transition-shadow duration-300" style="transition-delay: 100ms;">
                        <p class="text-gray-700 italic mb-4">"Classcheck.in has significantly reduced the time I spend on attendance and given me valuable insights into where my students need help. The interactive quizzes are a game-changer!"</p>
                        <footer class="text-gray-600 font-semibold">- Professor Jane Doe, Example University</footer>
                    </blockquote>
                    <blockquote class="bg-gray-100 p-6 rounded-lg shadow animate-on-scroll initial-fade-in-up hover:shadow-md transition-shadow duration-300" style="transition-delay: 200ms;">
                        <p class="text-gray-700 italic mb-4">"Studying used to feel like a chore, but the AI tutor (A.Xel!) and learning games on Classcheck.in actually make it engaging. I feel much more prepared for my exams."</p>
                        <footer class="text-gray-600 font-semibold">- John Smith, Student</footer>
                    </blockquote>
                </div> </div>
        </section>

        <section id="cta" class="py-16 md:py-24 bg-gradient-to-br from-primary to-indigo-700 text-white overflow-hidden relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll initial-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Elevate Your Learning Experience?</h2>
                <p class="max-w-xl mx-auto text-lg text-indigo-100 mb-10">
                    Join thousands of students and educators transforming education with Classcheck.in.
                </p>
                <a href="register.php" class="inline-block px-8 py-4 bg-white text-primary font-bold rounded-lg shadow-lg hover:bg-gray-100 transition-colors duration-300 text-lg transform hover:scale-105">
                    Sign Up for Free Today
                </a>
            </div>
        </section>

        <section id="contact" class="py-16 md:py-24 bg-gray-50 overflow-hidden relative z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-on-scroll initial-fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Get in Touch</h2>
                    <p class="mt-4 text-lg text-gray-600">Have questions or want a personalized demo? Reach out to us!</p>
                </div>
                <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md animate-on-scroll initial-fade-in-up" style="transition-delay: 200ms;">
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 gap-y-6">
                            <div>
                                <label for="contact-full-name" class="sr-only">Full name</label>
                                <input type="text" name="full-name" id="contact-full-name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="Full name" required>
                            </div>
                            <div>
                                <label for="contact-email" class="sr-only">Email</label>
                                <input id="contact-email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="Email" required>
                            </div>
                            <div>
                                <label for="contact-subject" class="sr-only">Subject</label>
                                <input type="text" name="subject" id="contact-subject" autocomplete="off" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border-gray-300 rounded-md" placeholder="Subject (e.g., Demo Request, Question)">
                            </div>
                            <div>
                                <label for="contact-message" class="sr-only">Message</label>
                                <textarea id="contact-message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary focus:border-primary border border-gray-300 rounded-md" placeholder="Your Message" required></textarea>
                            </div>
                            <div>
                                <button type="submit" class="cta-button w-full justify-center">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-6 text-center text-sm text-gray-500">Or email us at <a href="mailto:support@classcheck.in" class="text-primary hover:underline">support@classcheck.in</a></p>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-gray-800 text-gray-300 py-12 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                 <div>
                     <h4 class="text-lg font-semibold text-white mb-3">Classcheck.in</h4>
                     <p class="text-sm text-gray-400">AI-powered platform enhancing classroom efficiency and student engagement.</p>
                     <div class="flex space-x-4 mt-4">
                         <a href="#" class="text-gray-400 hover:text-white transition-colors"><span class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                         <a href="#" class="text-gray-400 hover:text-white transition-colors"><span class="sr-only">Twitter</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                         <a href="#" class="text-gray-400 hover:text-white transition-colors"><span class="sr-only">LinkedIn</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg></a>
                     </div>
                 </div>
                 <div>
                     <h5 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-3">Quick Links</h5>
                     <ul class="space-y-2">
                         <li><a href="#features" class="hover:text-white text-sm transition-colors">Features</a></li>
                         <li><a href="#how-it-works" class="hover:text-white text-sm transition-colors">How It Works</a></li>
                         <li><a href="#pricing" class="hover:text-white text-sm transition-colors">Pricing</a></li>
                         <li><a href="#benefits" class="hover:text-white text-sm transition-colors">Benefits</a></li>
                         <li><a href="#contact" class="hover:text-white text-sm transition-colors">Contact</a></li>
                         <li><a href="request_demo.php" class="hover:text-white text-sm transition-colors">Request Demo</a></li>
                     </ul>
                 </div>
                 <div>
                     <h5 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-3">Resources</h5>
                     <ul class="space-y-2">
                         <li><a href="#" class="hover:text-white text-sm transition-colors">Blog</a></li>
                         <li><a href="#" class="hover:text-white text-sm transition-colors">Help Center</a></li>
                         <li><a href="#" class="hover:text-white text-sm transition-colors">Case Studies</a></li>
                     </ul>
                 </div>
                 <div>
                     <h5 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-3">Legal</h5>
                     <ul class="space-y-2">
                         <li><a href="#" class="hover:text-white text-sm transition-colors">Privacy Policy</a></li>
                         <li><a href="#" class="hover:text-white text-sm transition-colors">Terms of Service</a></li>
                     </ul>
                 </div>
             </div>
             
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-sm text-gray-400">
                 &copy; <span id="current-year"></span> Classcheck.in. All rights reserved.
             </div>
             
             <div class="cc-license-details">
            <h2 class="cc-license-title">LICENSE</h2>
            <div class="cc-license-icons">
                <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="Creative Commons" class="cc-icon">
                <img src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="Attribution" class="cc-icon">
                <img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="NonCommercial" class="cc-icon">
                <img src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt="NoDerivatives" class="cc-icon">
                <span class="cc-license-text">CC BY-NC-ND 4.0</span>
            </div>
            <p class="cc-license-description">
                Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International
            </p>
            <p class="cc-license-text">
                This license requires that reusers give credit to the creator. It allows reusers to copy and distribute the material in any medium or format in unadapted form and for noncommercial purposes only.
            </p>
            <p class="cc-license-text">
                Classcheck © 2025 by Mus Ab Ali is licensed under Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International. To view a copy of this license, visit https://creativecommons.org/licenses/by-nc-nd/4.0/
            <p class="cc-by">
                <img src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="BY" class="cc-by-icon">BY: Credit must be given to me, the creator.
            </p>
            <p class="cc-nc">
                <img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="NC" class="cc-nc-icon">NC: Only noncommercial use of my work is permitted.
                <span class="cc-nc-definition">Noncommercial means not primarily intended for or directed towards commercial advantage or monetary compensation.</span>
            </p>
            <p class="cc-nd">
                <img src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt="ND" class="cc-nd-icon">ND: No derivatives or adaptations of my work are permitted.
            </p>
        </div>
    </div>
        </div>
    </footer>

    </div>    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // --- Core Functionality ---

        // Mobile Menu Toggle
        const menuButton = document.getElementById('mobile-menu-open-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                // Toggle icon between hamburger and close
                const icon = menuButton.querySelector('svg');
                 if (!isExpanded) {
                     // Change to close icon
                     icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />`;
                 } else {
                     // Change back to hamburger icon
                     icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />`;
                 }
            });
        }

        // Update Copyright Year Dynamically
        const currentYearSpan = document.getElementById('current-year');
        if (currentYearSpan) {
            currentYearSpan.textContent = new Date().getFullYear();
        }

        // Smooth Scrolling for Anchor Links (Accounts for sticky header height)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const hash = this.hash; // Store the hash

                // Ensure the link is intended for on-page navigation
                if (!hash || hash === '#' || !document.querySelector(hash)) return;

                const targetElement = document.querySelector(hash);
                const header = document.querySelector('header');
                const headerHeight = header ? header.offsetHeight : 0;
                const buffer = 20; // Extra space below the header
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - buffer;

                // Check if this specific anchor is the scroll-down indicator
                const isScrollDownIndicator = this.classList.contains('scroll-down-indicator');

                if (isScrollDownIndicator && hash === '#features') {
                    e.preventDefault(); // Prevent default jump only for this indicator

                    const heroContentWrapper = document.querySelector('.hero-content-wrapper');

                    if (heroContentWrapper) {
                        // Add fade-out class
                        heroContentWrapper.classList.add('fade-out-quick');

                        // Wait for fade animation to start, then scroll
                        setTimeout(() => {
                            window.scrollTo({ top: targetPosition, behavior: 'smooth' });

                            // Optional: Remove fade class after scrolling likely finished
                            // You might need to adjust timing or use 'scrollend' event if available/needed
                            setTimeout(() => {
                                heroContentWrapper.classList.remove('fade-out-quick');
                            }, 800); // Adjust timeout as needed (scroll duration + buffer)

                        }, 200); // Delay before scrolling (adjust as needed, less than transition duration)
                    } else {
                         // Fallback if hero wrapper not found (shouldn't happen)
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    }

                } else {
                    // --- Standard Smooth Scroll Logic for OTHER links ---
                    // Check if it's a primary navigation link or footer link etc.
                     const isPageLink = this.classList.contains('nav-link') ||
                                       this.closest('#mobile-menu') ||
                                       this.closest('footer') ||
                                       this.closest('#pricing') ||
                                       this.closest('#cta');

                    if (targetElement && isPageLink) {
                        e.preventDefault(); // Prevent default anchor jump for these specific links too

                        // Perform smooth scroll
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });

                        // Close mobile menu if it's open and the click was inside it
                        const mobileMenu = document.getElementById('mobile-menu');
                        const menuButton = document.getElementById('mobile-menu-open-button');
                        if (mobileMenu && !mobileMenu.classList.contains('hidden') && this.closest('#mobile-menu')) {
                           if(menuButton) menuButton.click(); // Simulate a click to close
                        }
                    }
                    // If it's not a designated page link, allow default browser behavior or handle differently
                }
            });
        });

        // --- Animations & Effects ---

        // Scroll Progress Bar Update
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            // Calculate scroll percentage, handle division by zero
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            const progressBar = document.querySelector('.scroll-progress-bar');
            if (progressBar) {
                progressBar.style.width = scrolled + '%'; // Update width based on scroll percentage
            }
        });

        // Custom Cursor Logic (Optional - currently commented out)
        /*
        const cursor = document.getElementById('custom-cursor');
        if (cursor) {
            window.addEventListener('mousemove', e => {
                // Update cursor position to follow mouse
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });

            // Add hover effect to interactive elements
            document.querySelectorAll('a, button, .feature-card, [data-tilt]').forEach(el => {
                el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
                el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
            });
        }
        */

        // Enhanced Intersection Observer for Scroll Animations
        const observerOptions = {
            root: null, // Observe intersections relative to the viewport
            rootMargin: '0px',
            threshold: 0.1 // Trigger when 10% of the element is visible
        };

        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add visibility class when element enters viewport
                    entry.target.classList.add('is-visible');
                    // Add 'active' class if using the separate .reveal CSS
                    if (entry.target.classList.contains('reveal')) {
                        entry.target.classList.add('active');
                    }
                    // Optional: Unobserve after animation to save resources
                    // observer.unobserve(entry.target);
                } else {
                    // Optional: Remove classes if elements should fade out when leaving viewport
                    // entry.target.classList.remove('is-visible');
                    // if (entry.target.classList.contains('reveal')) {
                    //     entry.target.classList.remove('active');
                    // }
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        // Select elements to animate
        const elementsToAnimate = document.querySelectorAll('.animate-on-scroll, .reveal');
        elementsToAnimate.forEach(el => {
            // Apply initial animation state (fade-in or fade-in-up)
            if (el.classList.contains('initial-fade-in') || el.closest('#cta')) {
                 el.classList.add('initial-fade-in'); // Apply simple fade
            } else if (!el.classList.contains('reveal')) { // Don't apply fade-up if it's a reveal element
                 el.classList.add('initial-fade-in-up'); // Apply fade and move up
            }
            // Start observing the element
            observer.observe(el);
        });

        // --- Initializations on DOMContentLoaded ---
        document.addEventListener('DOMContentLoaded', (event) => {
            // Particles.js Initialization for Hero Section
            if(document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    "particles": {
                        "number": { "value": 60, "density": { "enable": true, "value_area": 800 } },
                        "color": { "value": ["#4F46E5", "#10B981"] }, // Use primary and secondary colors
                        "shape": { "type": "circle" },
                        "opacity": { "value": 0.4, "random": true, "anim": {"enable": true, "speed": 0.5, "opacity_min": 0.1, "sync": false} },
                        "size": { "value": 3, "random": true, "anim": {"enable": false} },
                        "line_linked": { "enable": true, "distance": 150, "color": "#a7a2f7", "opacity": 0.3, "width": 1 },
                        "move": { "enable": true, "speed": 2, "direction": "none", "random": true, "straight": false, "out_mode": "out", "bounce": false }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": false, "mode": "push" }, "resize": true },
                        "modes": { "grab": { "distance": 140, "line_linked": { "opacity": 0.7 } }, "push": { "particles_nb": 4 } }
                    },
                    "retina_detect": true
                });
            }

            // Scroll-based Parallax for Background Shapes and Hero Content
            const heroContent = document.querySelector('.hero-content-wrapper');
            const parallaxBg1 = document.getElementById('parallax-bg-1');
            const parallaxBg2 = document.getElementById('parallax-bg-2');

            window.addEventListener('scroll', () => {
                const offset = window.pageYOffset;
                // Apply parallax effect only within the hero section's visibility range for performance
                if (offset < window.innerHeight) {
                    if (heroContent) {
                        // Move hero content up slightly faster than scroll
                        heroContent.style.transform = `translateY(${offset * 0.4}px)`;
                    }
                    // Move background elements at different speeds/directions
                    if (parallaxBg1) {
                         parallaxBg1.style.transform = `translateY(${offset * -0.1}px) translateX(${offset * -0.05}px)`;
                    }
                    if (parallaxBg2) {
                         parallaxBg2.style.transform = `translateY(${offset * -0.15}px) translateX(${offset * 0.05}px)`;
                    }
                }
            });

            // Initialize Vanilla Tilt for elements with data-tilt attribute
            const tiltElements = document.querySelectorAll("[data-tilt]");
            if (tiltElements.length > 0 && typeof VanillaTilt !== 'undefined') {
                 VanillaTilt.init(tiltElements, {
                     max: 8,       // Reduced max tilt
                     speed: 300,     // Slightly faster speed
                     glare: true,
                     "max-glare": 0.1 // Reduced glare intensity
                 });
            }

            // Hide Loading Animation (Example - uncomment if using loading overlay)
            /*
            const loadingOverlay = document.getElementById('loading-overlay');
            if (loadingOverlay) {
                setTimeout(() => {
                    loadingOverlay.classList.add('fade-out');
                }, 300); // Short delay
            }
            */

        }); // End DOMContentLoaded

    </script>

<script>
        const orbitContainer = document.getElementById('orbit-container');
        const orbitCenter = document.getElementById('orbit-center');
        const orbitItems = document.querySelectorAll('.feature-orbit-item');
        const smallIconContainer = document.getElementById('small-icon-container');
        // Removed soundToggleButton reference

        let orbitRadius = 0;
        let innerRadius = 0;
        let animationFrameId = null;
        const rotationSpeed = 0.0005;

        const defaultTitle = "Classcheck.in";
        const defaultSubtitle = "Explore the Features";

        const NUM_SMALL_ICONS = 6;
        const SMALL_ICON_SPEED = 0.5;
        const smallIcons = [];

        const smallIconSVGs = [
            `<svg viewBox="0 0 10 10"><circle cx="5" cy="5" r="5"/></svg>`,
            `<svg viewBox="0 0 10 10"><rect width="10" height="10"/></svg>`,
            `<svg viewBox="0 0 10 10"><polygon points="5 0, 10 10, 0 10"/></svg>`,
            `<svg viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>`,
            `<svg viewBox="0 0 24 24"><path d="M17.2 3H6.8l-3.6 6.24v7.52l3.6 6.24h10.4l3.6-6.24v-7.52L17.2 3z"/></svg>`,
            `<svg viewBox="0 0 10 10"><polygon points="5 0, 10 5, 5 10, 0 5"/></svg>`
        ];

        const themes = [
             // --- Original 10 Themes ---
            { // 0: Default Theme (Light Blue)
                '--bg-color': '#f0f4ff', '--center-bg-color': 'rgba(255, 255, 255, 0.6)', '--center-border-color': '#4f46e5', '--center-text-color': '#4f46e5', '--subtitle-text-color': '#6366f1', '--item-bg-color': 'rgba(255, 255, 255, 0.7)', '--item-border-color': 'rgba(79, 70, 229, 0.2)', '--item-hover-bg-color': 'rgba(255, 255, 255, 0.95)', '--item-hover-border-color': '#4f46e5', '--item-active-bg-color': '#10b981', '--item-active-border-color': '#6ee7b7', '--small-icon-bg-color': 'rgba(129, 140, 248, 0.5)', '--icon-color-dashboard': '#ff4500', '--icon-color-ui': '#ffd700', '--icon-color-streaks': '#00ffff', '--icon-color-vibes': '#32cd32', '--icon-color-quickadd': '#ff00ff', '--icon-color-reflection': '#ff69b4', '--icon-color-eastereggs': '#40e0d0', '--icon-color-widgets': '#ff8c00', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#4f46e5', '--button-text': '#ffffff', '--button-hover-bg': '#4338ca', '--button-disabled-bg': '#a5b4fc'
            },
            { // 1: Dark Theme
                '--bg-color': '#1f2937', '--center-bg-color': 'rgba(55, 65, 81, 0.7)', '--center-border-color': '#818cf8', '--center-text-color': '#e0e7ff', '--subtitle-text-color': '#a5b4fc', '--item-bg-color': 'rgba(75, 85, 99, 0.6)', '--item-border-color': 'rgba(129, 140, 248, 0.3)', '--item-hover-bg-color': 'rgba(55, 65, 81, 0.9)', '--item-hover-border-color': '#a5b4fc', '--item-active-bg-color': '#34d399', '--item-active-border-color': '#a7f3d0', '--small-icon-bg-color': 'rgba(99, 102, 241, 0.5)', '--icon-color-dashboard': '#fb923c', '--icon-color-ui': '#fde047', '--icon-color-streaks': '#22d3ee', '--icon-color-vibes': '#4ade80', '--icon-color-quickadd': '#f472b6', '--icon-color-reflection': '#fda4af', '--icon-color-eastereggs': '#67e8f9', '--icon-color-widgets': '#fbbf24', '--small-svg-color-1': '#fb7185', '--small-svg-color-2': '#facc15', '--small-svg-color-3': '#4ade80', '--small-svg-color-4': '#38bdf8', '--small-svg-color-5': '#c084fc', '--small-svg-color-6': '#f0abfc', '--button-bg': '#818cf8', '--button-text': '#1f2937', '--button-hover-bg': '#6366f1', '--button-disabled-bg': '#a5b4fc'
            },
             { // 2: Pastel Theme
                '--bg-color': '#fff7ed', '--center-bg-color': 'rgba(255, 255, 255, 0.7)', '--center-border-color': '#fbbf24', '--center-text-color': '#d97706', '--subtitle-text-color': '#f59e0b', '--item-bg-color': 'rgba(255, 255, 255, 0.8)', '--item-border-color': 'rgba(251, 191, 36, 0.3)', '--item-hover-bg-color': 'rgba(255, 255, 255, 1)', '--item-hover-border-color': '#f59e0b', '--item-active-bg-color': '#a7f3d0', '--item-active-border-color': '#6ee7b7', '--small-icon-bg-color': 'rgba(253, 186, 116, 0.5)', '--icon-color-dashboard': '#f87171', '--icon-color-ui': '#facc15', '--icon-color-streaks': '#fb923c', '--icon-color-vibes': '#a3e635', '--icon-color-quickadd': '#4ade80', '--icon-color-reflection': '#fb7185', '--icon-color-eastereggs': '#38bdf8', '--icon-color-widgets': '#c084fc', '--small-svg-color-1': '#fda4af', '--small-svg-color-2': '#fde047', '--small-svg-color-3': '#86efac', '--small-svg-color-4': '#7dd3fc', '--small-svg-color-5': '#d8b4fe', '--small-svg-color-6': '#f9a8d4', '--button-bg': '#fbbf24', '--button-text': '#ffffff', '--button-hover-bg': '#f59e0b', '--button-disabled-bg': '#fcd34d'
            },
            { // 3: Neon Glow Theme
                '--bg-color': '#0f0f0f', '--center-bg-color': 'rgba(17, 24, 39, 0.6)', '--center-border-color': '#00ffff', '--center-text-color': '#f0fdf4', '--subtitle-text-color': '#a7f3d0', '--item-bg-color': 'rgba(31, 41, 55, 0.5)', '--item-border-color': 'rgba(0, 255, 255, 0.3)', '--item-hover-bg-color': 'rgba(17, 24, 39, 0.8)', '--item-hover-border-color': '#00ffff', '--item-active-bg-color': '#ff00ff', '--item-active-border-color': '#f9a8d4', '--small-icon-bg-color': 'rgba(0, 255, 255, 0.3)', '--icon-color-dashboard': '#ff00ff', '--icon-color-ui': '#ffff00', '--icon-color-streaks': '#ff4500', '--icon-color-vibes': '#00ff00', '--icon-color-quickadd': '#00ffff', '--icon-color-reflection': '#ff69b4', '--icon-color-eastereggs': '#7fff00', '--icon-color-widgets': '#ffa500', '--small-svg-color-1': '#ff00ff', '--small-svg-color-2': '#ffff00', '--small-svg-color-3': '#00ff00', '--small-svg-color-4': '#00ffff', '--small-svg-color-5': '#7fff00', '--small-svg-color-6': '#ff69b4', '--button-bg': '#00ffff', '--button-text': '#0f0f0f', '--button-hover-bg': '#7df9ff', '--button-disabled-bg': '#00ced1'
            },
            { // 4: Forest Calm Theme
                '--bg-color': '#f0fff4', '--center-bg-color': 'rgba(220, 252, 231, 0.7)', '--center-border-color': '#15803d', '--center-text-color': '#14532d', '--subtitle-text-color': '#16a34a', '--item-bg-color': 'rgba(167, 243, 208, 0.6)', '--item-border-color': 'rgba(52, 211, 153, 0.4)', '--item-hover-bg-color': 'rgba(110, 231, 183, 0.8)', '--item-hover-border-color': '#059669', '--item-active-bg-color': '#f59e0b', '--item-active-border-color': '#fcd34d', '--small-icon-bg-color': 'rgba(134, 239, 172, 0.5)', '--icon-color-dashboard': '#ca8a04', '--icon-color-ui': '#059669', '--icon-color-streaks': '#d97706', '--icon-color-vibes': '#16a34a', '--icon-color-quickadd': '#047857', '--icon-color-reflection': '#be123c', '--icon-color-eastereggs': '#0e7490', '--icon-color-widgets': '#a16207', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#15803d', '--button-text': '#ffffff', '--button-hover-bg': '#16a34a', '--button-disabled-bg': '#6ee7b7'
            },
            { // 5: Oceanic Theme
                '--bg-color': '#e0f2fe', '--center-bg-color': 'rgba(186, 230, 253, 0.7)', '--center-border-color': '#0ea5e9', '--center-text-color': '#0369a1', '--subtitle-text-color': '#0ea5e9', '--item-bg-color': 'rgba(186, 230, 253, 0.6)', '--item-border-color': 'rgba(56, 189, 248, 0.4)', '--item-hover-bg-color': 'rgba(125, 211, 252, 0.8)', '--item-hover-border-color': '#0284c7', '--item-active-bg-color': '#fef3c7', '--item-active-border-color': '#fcd34d', '--small-icon-bg-color': 'rgba(125, 211, 252, 0.5)', '--icon-color-dashboard': '#0ea5e9', '--icon-color-ui': '#0284c7', '--icon-color-streaks': '#f59e0b', '--icon-color-vibes': '#38bdf8', '--icon-color-quickadd': '#0ea5e9', '--icon-color-reflection': '#7dd3fc', '--icon-color-eastereggs': '#fcd34d', '--icon-color-widgets': '#0369a1', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#0ea5e9', '--button-text': '#ffffff', '--button-hover-bg': '#0284c7', '--button-disabled-bg': '#7dd3fc'
            },
            { // 6: Sunset Theme
                '--bg-color': '#fff1f2', '--center-bg-color': 'rgba(255, 228, 230, 0.7)', '--center-border-color': '#f43f5e', '--center-text-color': '#be123c', '--subtitle-text-color': '#f43f5e', '--item-bg-color': 'rgba(255, 228, 230, 0.6)', '--item-border-color': 'rgba(251, 113, 133, 0.4)', '--item-hover-bg-color': 'rgba(254, 205, 211, 0.8)', '--item-hover-border-color': '#e11d48', '--item-active-bg-color': '#fde68a', '--item-active-border-color': '#facc15', '--small-icon-bg-color': 'rgba(251, 113, 133, 0.5)', '--icon-color-dashboard': '#f43f5e', '--icon-color-ui': '#e11d48', '--icon-color-streaks': '#fb923c', '--icon-color-vibes': '#f97316', '--icon-color-quickadd': '#be123c', '--icon-color-reflection': '#fb7185', '--icon-color-eastereggs': '#facc15', '--icon-color-widgets': '#ea580c', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#f43f5e', '--button-text': '#ffffff', '--button-hover-bg': '#e11d48', '--button-disabled-bg': '#fda4af'
            },
            { // 7: Monochrome Theme
                '--bg-color': '#e5e7eb', '--center-bg-color': 'rgba(243, 244, 246, 0.7)', '--center-border-color': '#4b5563', '--center-text-color': '#1f2937', '--subtitle-text-color': '#4b5563', '--item-bg-color': 'rgba(229, 231, 235, 0.6)', '--item-border-color': 'rgba(107, 114, 128, 0.4)', '--item-hover-bg-color': 'rgba(209, 213, 219, 0.8)', '--item-hover-border-color': '#374151', '--item-active-bg-color': '#6b7280', '--item-active-border-color': '#9ca3af', '--small-icon-bg-color': 'rgba(156, 163, 175, 0.5)', '--icon-color-dashboard': '#1f2937', '--icon-color-ui': '#374151', '--icon-color-streaks': '#4b5563', '--icon-color-vibes': '#6b7280', '--icon-color-quickadd': '#111827', '--icon-color-reflection': '#374151', '--icon-color-eastereggs': '#4b5563', '--icon-color-widgets': '#1f2937', '--small-svg-color-1': '#6b7280', '--small-svg-color-2': '#4b5563', '--small-svg-color-3': '#374151', '--small-svg-color-4': '#1f2937', '--small-svg-color-5': '#111827', '--small-svg-color-6': '#9ca3af', '--button-bg': '#4b5563', '--button-text': '#ffffff', '--button-hover-bg': '#374151', '--button-disabled-bg': '#9ca3af'
            },
             { // 8: Candy Theme
                '--bg-color': '#fce7f3', '--center-bg-color': 'rgba(253, 230, 242, 0.7)', '--center-border-color': '#ec4899', '--center-text-color': '#be185d', '--subtitle-text-color': '#db2777', '--item-bg-color': 'rgba(253, 230, 242, 0.6)', '--item-border-color': 'rgba(244, 114, 182, 0.4)', '--item-hover-bg-color': 'rgba(251, 207, 232, 0.8)', '--item-hover-border-color': '#db2777', '--item-active-bg-color': '#a5b4fc', '--item-active-border-color': '#c7d2fe', '--small-icon-bg-color': 'rgba(244, 114, 182, 0.5)', '--icon-color-dashboard': '#ec4899', '--icon-color-ui': '#d946ef', '--icon-color-streaks': '#f472b6', '--icon-color-vibes': '#a855f7', '--icon-color-quickadd': '#be185d', '--icon-color-reflection': '#db2777', '--icon-color-eastereggs': '#8b5cf6', '--icon-color-widgets': '#c026d3', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ec4899', '--button-text': '#ffffff', '--button-hover-bg': '#db2777', '--button-disabled-bg': '#f9a8d4'
            },
             { // 9: Retro Theme
                '--bg-color': '#f5f5f4', '--center-bg-color': 'rgba(231, 229, 228, 0.7)', '--center-border-color': '#a16207', '--center-text-color': '#44403c', '--subtitle-text-color': '#78716c', '--item-bg-color': 'rgba(214, 211, 209, 0.6)', '--item-border-color': 'rgba(168, 162, 158, 0.4)', '--item-hover-bg-color': 'rgba(214, 211, 209, 0.8)', '--item-hover-border-color': '#57534e', '--item-active-bg-color': '#ea580c', '--item-active-border-color': '#fb923c', '--small-icon-bg-color': 'rgba(168, 162, 158, 0.5)', '--icon-color-dashboard': '#ea580c', '--icon-color-ui': '#ca8a04', '--icon-color-streaks': '#a16207', '--icon-color-vibes': '#dc2626', '--icon-color-quickadd': '#57534e', '--icon-color-reflection': '#78716c', '--icon-color-eastereggs': '#fb923c', '--icon-color-widgets': '#44403c', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#a16207', '--button-text': '#ffffff', '--button-hover-bg': '#ca8a04', '--button-disabled-bg': '#eab308'
            },
            // --- 10 More New Themes ---
            { // 10: Spring Theme
                '--bg-color': '#ecfdf5', '--center-bg-color': 'rgba(220, 252, 231, 0.7)', '--center-border-color': '#22c55e', '--center-text-color': '#15803d', '--subtitle-text-color': '#16a34a', '--item-bg-color': 'rgba(167, 243, 208, 0.6)', '--item-border-color': 'rgba(74, 222, 128, 0.4)', '--item-hover-bg-color': 'rgba(110, 231, 183, 0.8)', '--item-hover-border-color': '#16a34a', '--item-active-bg-color': '#f9a8d4', '--item-active-border-color': '#fbcfe8', '--small-icon-bg-color': 'rgba(110, 231, 183, 0.5)', '--icon-color-dashboard': '#f97316', '--icon-color-ui': '#84cc16', '--icon-color-streaks': '#22c55e', '--icon-color-vibes': '#10b981', '--icon-color-quickadd': '#06b6d4', '--icon-color-reflection': '#ec4899', '--icon-color-eastereggs': '#eab308', '--icon-color-widgets': '#ef4444', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#22c55e', '--button-text': '#ffffff', '--button-hover-bg': '#16a34a', '--button-disabled-bg': '#86efac'
            },
            { // 11: Autumn Theme
                '--bg-color': '#fffbeb', '--center-bg-color': 'rgba(254, 243, 199, 0.7)', '--center-border-color': '#d97706', '--center-text-color': '#92400e', '--subtitle-text-color': '#b45309', '--item-bg-color': 'rgba(253, 230, 138, 0.6)', '--item-border-color': 'rgba(245, 158, 11, 0.4)', '--item-hover-bg-color': 'rgba(252, 211, 77, 0.8)', '--item-hover-border-color': '#b45309', '--item-active-bg-color': '#dc2626', '--item-active-border-color': '#f87171', '--small-icon-bg-color': 'rgba(252, 211, 77, 0.5)', '--icon-color-dashboard': '#dc2626', '--icon-color-ui': '#d97706', '--icon-color-streaks': '#f97316', '--icon-color-vibes': '#ca8a04', '--icon-color-quickadd': '#92400e', '--icon-color-reflection': '#b91c1c', '--icon-color-eastereggs': '#f59e0b', '--icon-color-widgets': '#ea580c', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#d97706', '--button-text': '#ffffff', '--button-hover-bg': '#b45309', '--button-disabled-bg': '#f59e0b'
            },
            { // 12: High Contrast Theme
                '--bg-color': '#ffffff', '--center-bg-color': 'rgba(229, 231, 235, 0.7)', '--center-border-color': '#000000', '--center-text-color': '#000000', '--subtitle-text-color': '#4b5563', '--item-bg-color': 'rgba(209, 213, 219, 0.6)', '--item-border-color': 'rgba(0, 0, 0, 0.4)', '--item-hover-bg-color': 'rgba(156, 163, 175, 0.8)', '--item-hover-border-color': '#000000', '--item-active-bg-color': '#000000', '--item-active-border-color': '#6b7280', '--small-icon-bg-color': 'rgba(107, 114, 128, 0.5)', '--icon-color-dashboard': '#000000', '--icon-color-ui': '#000000', '--icon-color-streaks': '#000000', '--icon-color-vibes': '#000000', '--icon-color-quickadd': '#000000', '--icon-color-reflection': '#000000', '--icon-color-eastereggs': '#000000', '--icon-color-widgets': '#000000', '--small-svg-color-1': '#000000', '--small-svg-color-2': '#000000', '--small-svg-color-3': '#000000', '--small-svg-color-4': '#000000', '--small-svg-color-5': '#000000', '--small-svg-color-6': '#000000', '--button-bg': '#000000', '--button-text': '#ffffff', '--button-hover-bg': '#374151', '--button-disabled-bg': '#9ca3af'
            },
            { // 13: Coffee Theme
                '--bg-color': '#fdfbf7', '--center-bg-color': 'rgba(245, 245, 245, 0.7)', '--center-border-color': '#7f5539', '--center-text-color': '#4a403a', '--subtitle-text-color': '#9c6644', '--item-bg-color': 'rgba(230, 220, 210, 0.6)', '--item-border-color': 'rgba(188, 156, 126, 0.4)', '--item-hover-bg-color': 'rgba(210, 190, 170, 0.8)', '--item-hover-border-color': '#7f5539', '--item-active-bg-color': '#b08968', '--item-active-border-color': '#ddb892', '--small-icon-bg-color': 'rgba(188, 156, 126, 0.5)', '--icon-color-dashboard': '#7f5539', '--icon-color-ui': '#9c6644', '--icon-color-streaks': '#b08968', '--icon-color-vibes': '#ddb892', '--icon-color-quickadd': '#e6ccb2', '--icon-color-reflection': '#7f5539', '--icon-color-eastereggs': '#9c6644', '--icon-color-widgets': '#b08968', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#7f5539', '--button-text': '#ffffff', '--button-hover-bg': '#9c6644', '--button-disabled-bg': '#ddb892'
            },
            { // 14: Mint Theme
                '--bg-color': '#f0fdfa', '--center-bg-color': 'rgba(204, 251, 241, 0.7)', '--center-border-color': '#14b8a6', '--center-text-color': '#0f766e', '--subtitle-text-color': '#0d9488', '--item-bg-color': 'rgba(153, 246, 228, 0.6)', '--item-border-color': 'rgba(45, 212, 191, 0.4)', '--item-hover-bg-color': 'rgba(94, 234, 212, 0.8)', '--item-hover-border-color': '#0d9488', '--item-active-bg-color': '#a7f3d0', '--item-active-border-color': '#d1fae5', '--small-icon-bg-color': 'rgba(94, 234, 212, 0.5)', '--icon-color-dashboard': '#14b8a6', '--icon-color-ui': '#0d9488', '--icon-color-streaks': '#0f766e', '--icon-color-vibes': '#047857', '--icon-color-quickadd': '#134e4a', '--icon-color-reflection': '#14b8a6', '--icon-color-eastereggs': '#0d9488', '--icon-color-widgets': '#0f766e', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#14b8a6', '--button-text': '#ffffff', '--button-hover-bg': '#0d9488', '--button-disabled-bg': '#5eead4'
            },
            { // 15: Lavender Theme
                '--bg-color': '#f5f3ff', '--center-bg-color': 'rgba(237, 233, 254, 0.7)', '--center-border-color': '#8b5cf6', '--center-text-color': '#6d28d9', '--subtitle-text-color': '#7c3aed', '--item-bg-color': 'rgba(221, 214, 254, 0.6)', '--item-border-color': 'rgba(167, 139, 250, 0.4)', '--item-hover-bg-color': 'rgba(196, 181, 253, 0.8)', '--item-hover-border-color': '#7c3aed', '--item-active-bg-color': '#c4b5fd', '--item-active-border-color': '#ddd6fe', '--small-icon-bg-color': 'rgba(196, 181, 253, 0.5)', '--icon-color-dashboard': '#8b5cf6', '--icon-color-ui': '#7c3aed', '--icon-color-streaks': '#6d28d9', '--icon-color-vibes': '#5b21b6', '--icon-color-quickadd': '#a78bfa', '--icon-color-reflection': '#c4b5fd', '--icon-color-eastereggs': '#8b5cf6', '--icon-color-widgets': '#7c3aed', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#8b5cf6', '--button-text': '#ffffff', '--button-hover-bg': '#7c3aed', '--button-disabled-bg': '#c4b5fd'
            },
            { // 16: Cyberpunk Theme
                '--bg-color': '#1a1a2e', '--center-bg-color': 'rgba(27, 39, 68, 0.7)', '--center-border-color': '#e94560', '--center-text-color': '#f0f0f0', '--subtitle-text-color': '#00ffff', '--item-bg-color': 'rgba(40, 50, 80, 0.6)', '--item-border-color': 'rgba(0, 255, 255, 0.4)', '--item-hover-bg-color': 'rgba(50, 60, 90, 0.8)', '--item-hover-border-color': '#00ffff', '--item-active-bg-color': '#e94560', '--item-active-border-color': '#fcd34d', '--small-icon-bg-color': 'rgba(0, 255, 255, 0.5)', '--icon-color-dashboard': '#e94560', '--icon-color-ui': '#00ffff', '--icon-color-streaks': '#fcd34d', '--icon-color-vibes': '#9dff00', '--icon-color-quickadd': '#e94560', '--icon-color-reflection': '#00ffff', '--icon-color-eastereggs': '#fcd34d', '--icon-color-widgets': '#9dff00', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#e94560', '--button-text': '#ffffff', '--button-hover-bg': '#ff1493', '--button-disabled-bg': '#f87171'
            },
            { // 17: Vintage Theme
                '--bg-color': '#fdf6e3', '--center-bg-color': 'rgba(243, 234, 213, 0.7)', '--center-border-color': '#b58900', '--center-text-color': '#657b83', '--subtitle-text-color': '#839496', '--item-bg-color': 'rgba(238, 232, 213, 0.6)', '--item-border-color': 'rgba(147, 161, 161, 0.4)', '--item-hover-bg-color': 'rgba(200, 190, 170, 0.8)', '--item-hover-border-color': '#586e75', '--item-active-bg-color': '#dc322f', '--item-active-border-color': '#cb4b16', '--small-icon-bg-color': 'rgba(147, 161, 161, 0.5)', '--icon-color-dashboard': '#cb4b16', '--icon-color-ui': '#b58900', '--icon-color-streaks': '#dc322f', '--icon-color-vibes': '#859900', '--icon-color-quickadd': '#268bd2', '--icon-color-reflection': '#6c71c4', '--icon-color-eastereggs': '#d33682', '--icon-color-widgets': '#2aa198', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#b58900', '--button-text': '#ffffff', '--button-hover-bg': '#cb4b16', '--button-disabled-bg': '#839496'
            },
            { // 18: Arctic Theme
                '--bg-color': '#f9fafb', '--center-bg-color': 'rgba(243, 244, 246, 0.7)', '--center-border-color': '#93c5fd', '--center-text-color': '#1e3a8a', '--subtitle-text-color': '#3b82f6', '--item-bg-color': 'rgba(229, 231, 235, 0.6)', '--item-border-color': 'rgba(147, 197, 253, 0.4)', '--item-hover-bg-color': 'rgba(209, 213, 219, 0.8)', '--item-hover-border-color': '#60a5fa', '--item-active-bg-color': '#bfdbfe', '--item-active-border-color': '#dbeafe', '--small-icon-bg-color': 'rgba(147, 197, 253, 0.5)', '--icon-color-dashboard': '#2563eb', '--icon-color-ui': '#3b82f6', '--icon-color-streaks': '#60a5fa', '--icon-color-vibes': '#93c5fd', '--icon-color-quickadd': '#bfdbfe', '--icon-color-reflection': '#dbeafe', '--icon-color-eastereggs': '#eff6ff', '--icon-color-widgets': '#1e40af', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#93c5fd', '--button-text': '#1e3a8a', '--button-hover-bg': '#60a5fa', '--button-disabled-bg': '#dbeafe'
            },
            { // 19: Desert Theme
                '--bg-color': '#fef9c3', '--center-bg-color': 'rgba(254, 240, 138, 0.7)', '--center-border-color': '#ca8a04', '--center-text-color': '#854d0e', '--subtitle-text-color': '#a16207', '--item-bg-color': 'rgba(253, 224, 71, 0.6)', '--item-border-color': 'rgba(234, 179, 8, 0.4)', '--item-hover-bg-color': 'rgba(250, 204, 21, 0.8)', '--item-hover-border-color': '#a16207', '--item-active-bg-color': '#fb923c', '--item-active-border-color': '#fdba74', '--small-icon-bg-color': 'rgba(250, 204, 21, 0.5)', '--icon-color-dashboard': '#ca8a04', '--icon-color-ui': '#a16207', '--icon-color-streaks': '#854d0e', '--icon-color-vibes': '#f97316', '--icon-color-quickadd': '#ea580c', '--icon-color-reflection': '#fb923c', '--icon-color-eastereggs': '#fcd34d', '--icon-color-widgets': '#ca8a04', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ca8a04', '--button-text': '#ffffff', '--button-hover-bg': '#a16207', '--button-disabled-bg': '#fcd34d'
            },
            // --- 10 More New Themes ---
            { // 20: Alien Planet Theme
                '--bg-color': '#1d1f2d', '--center-bg-color': 'rgba(50, 50, 90, 0.7)', '--center-border-color': '#39ff14', '--center-text-color': '#afeeee', '--subtitle-text-color': '#7fffd4', '--item-bg-color': 'rgba(70, 70, 110, 0.6)', '--item-border-color': 'rgba(120, 250, 120, 0.4)', '--item-hover-bg-color': 'rgba(90, 90, 130, 0.8)', '--item-hover-border-color': '#39ff14', '--item-active-bg-color': '#ff1493', '--item-active-border-color': '#ff69b4', '--small-icon-bg-color': 'rgba(127, 255, 212, 0.5)', '--icon-color-dashboard': '#39ff14', '--icon-color-ui': '#7fffd4', '--icon-color-streaks': '#afeeee', '--icon-color-vibes': '#ff1493', '--icon-color-quickadd': '#00ced1', '--icon-color-reflection': '#90ee90', '--icon-color-eastereggs': '#ff69b4', '--icon-color-widgets': '#7df9ff', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#39ff14', '--button-text': '#1d1f2d', '--button-hover-bg': '#7fff00', '--button-disabled-bg': '#98fb98'
            },
            { // 21: Starship Bridge Theme
                '--bg-color': '#2c3e50', '--center-bg-color': 'rgba(75, 95, 115, 0.7)', '--center-border-color': '#ecf0f1', '--center-text-color': '#3498db', '--subtitle-text-color': '#95a5a6', '--item-bg-color': 'rgba(100, 120, 140, 0.6)', '--item-border-color': 'rgba(189, 195, 199, 0.4)', '--item-hover-bg-color': 'rgba(120, 140, 160, 0.8)', '--item-hover-border-color': '#ecf0f1', '--item-active-bg-color': '#e74c3c', '--item-active-border-color': '#f1c40f', '--small-icon-bg-color': 'rgba(149, 165, 166, 0.5)', '--icon-color-dashboard': '#3498db', '--icon-color-ui': '#ecf0f1', '--icon-color-streaks': '#f1c40f', '--icon-color-vibes': '#2ecc71', '--icon-color-quickadd': '#e74c3c', '--icon-color-reflection': '#9b59b6', '--icon-color-eastereggs': '#1abc9c', '--icon-color-widgets': '#3498db', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#3498db', '--button-text': '#ffffff', '--button-hover-bg': '#2980b9', '--button-disabled-bg': '#95a5a6'
            },
            { // 22: Bioluminescent Flora Theme
                '--bg-color': '#0a1f0f', '--center-bg-color': 'rgba(10, 50, 20, 0.7)', '--center-border-color': '#7fff00', '--center-text-color': '#ccffdd', '--subtitle-text-color': '#98fb98', '--item-bg-color': 'rgba(20, 70, 30, 0.6)', '--item-border-color': 'rgba(127, 255, 0, 0.4)', '--item-hover-bg-color': 'rgba(30, 90, 40, 0.8)', '--item-hover-border-color': '#7fff00', '--item-active-bg-color': '#00ffff', '--item-active-border-color': '#e0ffff', '--small-icon-bg-color': 'rgba(152, 251, 152, 0.5)', '--icon-color-dashboard': '#7fff00', '--icon-color-ui': '#98fb98', '--icon-color-streaks': '#adff2f', '--icon-color-vibes': '#00fa9a', '--icon-color-quickadd': '#00ffff', '--icon-color-reflection': '#7cfc00', '--icon-color-eastereggs': '#32cd32', '--icon-color-widgets': '#ccffdd', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#7fff00', '--button-text': '#0a1f0f', '--button-hover-bg': '#adff2f', '--button-disabled-bg': '#98fb98'
            },
            { // 23: Dreamscape Theme
                '--bg-color': '#e6e6fa', '--center-bg-color': 'rgba(255, 240, 245, 0.7)', '--center-border-color': '#dda0dd', '--center-text-color': '#8a2be2', '--subtitle-text-color': '#ba55d3', '--item-bg-color': 'rgba(240, 248, 255, 0.6)', '--item-border-color': 'rgba(221, 160, 221, 0.4)', '--item-hover-bg-color': 'rgba(230, 230, 250, 0.8)', '--item-hover-border-color': '#dda0dd', '--item-active-bg-color': '#ffb6c1', '--item-active-border-color': '#ffc0cb', '--small-icon-bg-color': 'rgba(255, 182, 193, 0.5)', '--icon-color-dashboard': '#8a2be2', '--icon-color-ui': '#ba55d3', '--icon-color-streaks': '#dda0dd', '--icon-color-vibes': '#ff69b4', '--icon-color-quickadd': '#db7093', '--icon-color-reflection': '#dda0dd', '--icon-color-eastereggs': '#ee82ee', '--icon-color-widgets': '#da70d6', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#dda0dd', '--button-text': '#ffffff', '--button-hover-bg': '#ee82ee', '--button-disabled-bg': '#e6e6fa'
            },
            { // 24: Geometric Chaos Theme
                '--bg-color': '#fafafa', '--center-bg-color': 'rgba(220, 220, 220, 0.7)', '--center-border-color': '#ff3d00', '--center-text-color': '#212121', '--subtitle-text-color': '#757575', '--item-bg-color': 'rgba(230, 230, 230, 0.6)', '--item-border-color': 'rgba(255, 61, 0, 0.4)', '--item-hover-bg-color': 'rgba(200, 200, 200, 0.8)', '--item-hover-border-color': '#ff3d00', '--item-active-bg-color': '#00e5ff', '--item-active-border-color': '#18ffff', '--small-icon-bg-color': 'rgba(170, 170, 170, 0.5)', '--icon-color-dashboard': '#ff3d00', '--icon-color-ui': '#ffab00', '--icon-color-streaks': '#00e5ff', '--icon-color-vibes': '#76ff03', '--icon-color-quickadd': '#d500f9', '--icon-color-reflection': '#651fff', '--icon-color-eastereggs': '#00e5ff', '--icon-color-widgets': '#ff3d00', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ff3d00', '--button-text': '#ffffff', '--button-hover-bg': '#ff6e40', '--button-disabled-bg': '#bdbdbd'
            },
            { // 25: Black Hole Theme
                '--bg-color': '#000000', '--center-bg-color': 'rgba(20, 0, 30, 0.7)', '--center-border-color': '#4b0082', '--center-text-color': '#ffffff', '--subtitle-text-color': '#dda0dd', '--item-bg-color': 'rgba(50, 0, 70, 0.6)', '--item-border-color': 'rgba(138, 43, 226, 0.4)', '--item-hover-bg-color': 'rgba(70, 0, 90, 0.8)', '--item-hover-border-color': '#8a2be2', '--item-active-bg-color': '#ff00ff', '--item-active-border-color': '#ff69b4', '--small-icon-bg-color': 'rgba(100, 0, 120, 0.5)', '--icon-color-dashboard': '#ffffff', '--icon-color-ui': '#dda0dd', '--icon-color-streaks': '#ff00ff', '--icon-color-vibes': '#8a2be2', '--icon-color-quickadd': '#4b0082', '--icon-color-reflection': '#ffffff', '--icon-color-eastereggs': '#dda0dd', '--icon-color-widgets': '#ff00ff', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#4b0082', '--button-text': '#ffffff', '--button-hover-bg': '#8a2be2', '--button-disabled-bg': '#9370db'
            },
            { // 26: Fairy Glen Theme
                '--bg-color': '#f0fff0', '--center-bg-color': 'rgba(240, 255, 240, 0.7)', '--center-border-color': '#ff69b4', '--center-text-color': '#2e8b57', '--subtitle-text-color': '#98fb98', '--item-bg-color': 'rgba(220, 255, 220, 0.6)', '--item-border-color': 'rgba(255, 182, 193, 0.4)', '--item-hover-bg-color': 'rgba(200, 255, 200, 0.8)', '--item-hover-border-color': '#ff69b4', '--item-active-bg-color': '#dda0dd', '--item-active-border-color': '#ee82ee', '--small-icon-bg-color': 'rgba(255, 192, 203, 0.5)', '--icon-color-dashboard': '#ff69b4', '--icon-color-ui': '#ee82ee', '--icon-color-streaks': '#da70d6', '--icon-color-vibes': '#98fb98', '--icon-color-quickadd': '#2e8b57', '--icon-color-reflection': '#dda0dd', '--icon-color-eastereggs': '#ffb6c1', '--icon-color-widgets': '#db7093', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ff69b4', '--button-text': '#ffffff', '--button-hover-bg': '#ff1493', '--button-disabled-bg': '#ffc0cb'
            },
            { // 27: Dragon's Lair Theme
                '--bg-color': '#3b0f0f', '--center-bg-color': 'rgba(100, 20, 20, 0.7)', '--center-border-color': '#ffd700', '--center-text-color': '#ffebcd', '--subtitle-text-color': '#f4a460', '--item-bg-color': 'rgba(139, 0, 0, 0.6)', '--item-border-color': 'rgba(255, 215, 0, 0.4)', '--item-hover-bg-color': 'rgba(165, 42, 42, 0.8)', '--item-hover-border-color': '#ffd700', '--item-active-bg-color': '#ff4500', '--item-active-border-color': '#ff8c00', '--small-icon-bg-color': 'rgba(218, 165, 32, 0.5)', '--icon-color-dashboard': '#ffd700', '--icon-color-ui': '#f4a460', '--icon-color-streaks': '#ff8c00', '--icon-color-vibes': '#dc143c', '--icon-color-quickadd': '#b22222', '--icon-color-reflection': '#cd5c5c', '--icon-color-eastereggs': '#daa520', '--icon-color-widgets': '#ff4500', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ffd700', '--button-text': '#3b0f0f', '--button-hover-bg': '#f4a460', '--button-disabled-bg': '#daa520'
            },
             { // 28: Holodeck Theme
                '--bg-color': '#000000', '--center-bg-color': 'rgba(20, 20, 20, 0.7)', '--center-border-color': '#0077cc', '--center-text-color': '#ffffff', '--subtitle-text-color': '#cccccc', '--item-bg-color': 'rgba(40, 40, 40, 0.6)', '--item-border-color': 'rgba(0, 119, 204, 0.4)', '--item-hover-bg-color': 'rgba(60, 60, 60, 0.8)', '--item-hover-border-color': '#0077cc', '--item-active-bg-color': '#cc0000', '--item-active-border-color': '#ff3333', '--small-icon-bg-color': 'rgba(0, 119, 204, 0.5)', '--icon-color-dashboard': '#0077cc', '--icon-color-ui': '#ffffff', '--icon-color-streaks': '#cc0000', '--icon-color-vibes': '#00aa00', '--icon-color-quickadd': '#dddd00', '--icon-color-reflection': '#ffffff', '--icon-color-eastereggs': '#cc0000', '--icon-color-widgets': '#0077cc', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#0077cc', '--button-text': '#ffffff', '--button-hover-bg': '#0055aa', '--button-disabled-bg': '#cccccc'
            },
             { // 29: Supernova Theme
                '--bg-color': '#fff8dc', '--center-bg-color': 'rgba(255, 220, 180, 0.7)', '--center-border-color': '#ff4500', '--center-text-color': '#ff6347', '--subtitle-text-color': '#ff7f50', '--item-bg-color': 'rgba(255, 200, 150, 0.6)', '--item-border-color': 'rgba(255, 165, 0, 0.4)', '--item-hover-bg-color': 'rgba(255, 180, 120, 0.8)', '--item-hover-border-color': '#ff4500', '--item-active-bg-color': '#ffff00', '--item-active-border-color': '#fffacd', '--small-icon-bg-color': 'rgba(255, 165, 0, 0.5)', '--icon-color-dashboard': '#ff4500', '--icon-color-ui': '#ff6347', '--icon-color-streaks': '#ff7f50', '--icon-color-vibes': '#ffa500', '--icon-color-quickadd': '#ffd700', '--icon-color-reflection': '#ffff00', '--icon-color-eastereggs': '#ffdab9', '--icon-color-widgets': '#ff8c00', '--small-svg-color-1': '#f87171', '--small-svg-color-2': '#fbbf24', '--small-svg-color-3': '#34d399', '--small-svg-color-4': '#60a5fa', '--small-svg-color-5': '#a78bfa', '--small-svg-color-6': '#f472b6', '--button-bg': '#ff4500', '--button-text': '#ffffff', '--button-hover-bg': '#ff6347', '--button-disabled-bg': '#ffa07a'
            }
        ];
        let currentThemeIndex = 0;

        // Removed sound state variables and functions

        function getFeatureTitle(feature) {
             switch (feature) {
                case "dashboard": return "Personal Dashboard";
                case "ui": return "Aesthetic UI";
                case "streaks": return "Streaks & Motivation";
                case "vibes": return "Study Vibes";
                case "quickadd": return "Quick Add";
                case "reflection": return "Daily Reflection";
                case "eastereggs": return "Easter Eggs";
                case "widgets": return "Widgets";
                default: return defaultTitle;
            }
        }

        function getFeatureSubtitle(feature) {
             switch (feature) {
                case "dashboard": return "Your space: tasks, events, mood & more.";
                case "ui": return "Customize themes, enjoy smooth visuals.";
                case "streaks": return "Build habits, stay motivated, feel rewarded.";
                case "vibes": return "Focus sounds, timers & mood themes.";
                case "quickadd": return "Add tasks, notes & timers instantly.";
                case "reflection": return "Track mood, journal thoughts, build awareness.";
                case "eastereggs": return "Fun surprises & interactions that delight.";
                case "widgets": return "See key info at a glance on your screen.";
                default: return defaultSubtitle;
            }
        }

        function updateCenterText(title, subtitle) {
            const displayTitle = typeof title === 'string' ? title : defaultTitle;
            const displaySubtitle = typeof subtitle === 'string' ? subtitle : defaultSubtitle;
            orbitCenter.innerHTML = `
                <div class="feature-orbit-center-title">${displayTitle}</div>
                <p class="feature-orbit-subtitle">${displaySubtitle}</p>
            `;
        }

        function setItemTransform(item, x, y, scale = 1) {
            const validScale = typeof scale === 'number' && !isNaN(scale) ? scale : 1;
            item.style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px) scale(${validScale})`;
        }

        function calculateRadii() {
            if (orbitCenter.offsetWidth === 0) return false;
            const centerRadius = orbitCenter.offsetWidth / 2;
            const itemRadius = orbitItems[0] ? orbitItems[0].offsetWidth / 2 : 35;
            const gap = 15;
            orbitRadius = centerRadius + itemRadius + gap;
            innerRadius = centerRadius - 10;
            return true;
        }

        function applyTheme(themeIndex) {
            const safeIndex = themeIndex % themes.length;
            const theme = themes[safeIndex];
             console.log(`Applying theme index: ${safeIndex}`);
            const rootStyle = document.documentElement.style;
            for (const [key, value] of Object.entries(theme)) {
                rootStyle.setProperty(key, value);
            }
        }

        function initializeSmallIcons() {
            smallIconContainer.innerHTML = '';
            smallIcons.length = 0;
            if (innerRadius <= 0) return;

            for (let i = 0; i < NUM_SMALL_ICONS; i++) {
                const element = document.createElement('div');
                element.classList.add('small-icon');
                element.innerHTML = smallIconSVGs[i % smallIconSVGs.length];

                const angle = Math.random() * 2 * Math.PI;
                const radius = Math.random() * innerRadius;
                const x = radius * Math.cos(angle);
                const y = radius * Math.sin(angle);

                const velocityAngle = Math.random() * 2 * Math.PI;
                const dx = Math.cos(velocityAngle) * SMALL_ICON_SPEED;
                const dy = Math.sin(velocityAngle) * SMALL_ICON_SPEED;

                smallIcons.push({ element, x, y, dx, dy });
                smallIconContainer.appendChild(element);
                setItemTransform(element, x, y);
            }
             addSmallIconListeners();
        }

        function calculateInitialPositions() {
             if (!calculateRadii()) {
                setTimeout(calculateInitialPositions, 100);
                return;
            }
            const itemCount = orbitItems.length;
            const angleIncrement = (2 * Math.PI) / itemCount;

            orbitItems.forEach((item, index) => {
                const angle = index * angleIncrement - Math.PI / 2;
                item.dataset.initialAngle = angle;
                item.dataset.targetScale = 1;
                // Removed click count initialization
            });

            initializeSmallIcons();
        }

        function animateOrbit(timestamp) {
            const currentGlobalAngle = (timestamp * rotationSpeed) % (2 * Math.PI);

            orbitItems.forEach(item => {
                const initialAngle = parseFloat(item.dataset.initialAngle);
                const targetScale = parseFloat(item.dataset.targetScale) || 1;
                if (!isNaN(initialAngle)) {
                    const newAngle = initialAngle + currentGlobalAngle;
                    const x = orbitRadius * Math.cos(newAngle);
                    const y = orbitRadius * Math.sin(newAngle);
                    setItemTransform(item, x, y, targetScale);
                }
            });

            smallIcons.forEach(icon => {
                if (icon.element.classList.contains('disrupted')) return;

                icon.x += icon.dx;
                icon.y += icon.dy;

                const distanceFromCenter = Math.sqrt(icon.x * icon.x + icon.y * icon.y);
                if (distanceFromCenter > innerRadius) {
                    const normalX = icon.x / distanceFromCenter;
                    const normalY = icon.y / distanceFromCenter;
                    const dotProduct = icon.dx * normalX + icon.dy * normalY;
                    icon.dx -= 2 * dotProduct * normalX;
                    icon.dy -= 2 * dotProduct * normalY;
                    icon.x = normalX * innerRadius;
                    icon.y = normalY * innerRadius;
                }
                 setItemTransform(icon.element, icon.x, icon.y);
            });

            animationFrameId = requestAnimationFrame(animateOrbit);
        }

        function resetSmallIcon(icon) {
            icon.element.classList.remove('disrupted');
            const angle = Math.random() * 2 * Math.PI;
            const radius = Math.random() * innerRadius;
            icon.x = radius * Math.cos(angle);
            icon.y = radius * Math.sin(angle);
            const velocityAngle = Math.random() * 2 * Math.PI;
            icon.dx = Math.cos(velocityAngle) * SMALL_ICON_SPEED;
            icon.dy = Math.sin(velocityAngle) * SMALL_ICON_SPEED;
            setItemTransform(icon.element, icon.x, icon.y);
        }

        function addMainIconListeners() {
             orbitItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const feature = item.dataset.feature;
                    const title = getFeatureTitle(feature);
                    const subtitle = getFeatureSubtitle(feature);
                    updateCenterText(title, subtitle);
                    orbitContainer.classList.add('is-hovering');
                    orbitItems.forEach(sibling => {
                        if (sibling === item) {
                            sibling.dataset.targetScale = 1.2;
                            sibling.classList.add('hover-target');
                        } else {
                            sibling.dataset.targetScale = 0.9;
                            sibling.classList.remove('hover-target');
                        }
                    });
                    // Removed hover sound
                });

                item.addEventListener('mouseleave', () => {
                    updateCenterText(defaultTitle, defaultSubtitle);
                    orbitContainer.classList.remove('is-hovering');
                    orbitItems.forEach(anyItem => {
                        anyItem.dataset.targetScale = 1;
                        anyItem.classList.remove('hover-target');
                    });
                });

                item.addEventListener('click', (event) => {
                    const feature = item.dataset.feature;

                    // Theme Switching Logic (on 1st click)
                    currentThemeIndex++;
                    applyTheme(currentThemeIndex);
                    console.log(`Theme changed by ${feature}. New index: ${currentThemeIndex % themes.length}`);
                    // Removed click counting logic

                    // Standard Click Effects
                    console.log(`Clicked on feature: ${feature}`);
                    item.classList.add('active');
                    updateCenterText(getFeatureTitle(feature), getFeatureSubtitle(feature));
                    if ("vibrate" in navigator) navigator.vibrate(50);
                    orbitCenter.classList.add('rotate');
                    setTimeout(() => orbitCenter.classList.remove('rotate'), 600);
                    setTimeout(() => {
                        item.classList.remove('active');
                        const currentScale = item.matches(':hover') ? 1.2 : 1;
                        item.dataset.targetScale = currentScale;
                        if (!item.matches(':hover')) {
                             updateCenterText(defaultTitle, defaultSubtitle);
                             orbitItems.forEach(anyItem => {
                                if (anyItem !== item) anyItem.dataset.targetScale = 1;
                             });
                        }
                    }, 300);
                });
            });
        }

        function addSmallIconListeners() {
            smallIcons.forEach(icon => {
                icon.element.addEventListener('click', (event) => {
                     event.stopPropagation();
                    icon.element.classList.add('disrupted');
                     if ("vibrate" in navigator) navigator.vibrate(20);
                     // Removed sound playback call
                    setTimeout(() => {
                       resetSmallIcon(icon);
                    }, 300);
                });
            });
        }

        function addGlobalListeners() {
             let resizeTimeout;
             window.addEventListener('resize', () => {
                 if (animationFrameId) cancelAnimationFrame(animationFrameId);
                 clearTimeout(resizeTimeout);
                 resizeTimeout = setTimeout(() => {
                     if(calculateRadii()) {
                         calculateInitialPositions();
                         if (!document.hidden) {
                             animationFrameId = requestAnimationFrame(animateOrbit);
                         }
                     } else {
                           console.warn("Resize failed, center dimensions not ready.");
                     }
                 }, 250);
             });

            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    if (animationFrameId) {
                         cancelAnimationFrame(animationFrameId);
                         animationFrameId = null;
                    }
                } else {
                    if (!animationFrameId) {
                        if(orbitRadius > 0 || calculateRadii()) {
                             animationFrameId = requestAnimationFrame(animateOrbit);
                        } else {
                             console.warn("Visibility change restart failed, radii not ready.");
                             init();
                        }
                    }
                }
            });
             // Removed sound toggle listener
        }

        function init() {
            applyTheme(currentThemeIndex);
            updateCenterText(defaultTitle, defaultSubtitle);
            calculateInitialPositions();
            addMainIconListeners();
            addGlobalListeners();

            if (!document.hidden && (orbitRadius > 0 || calculateRadii())) {
                 animationFrameId = requestAnimationFrame(animateOrbit);
            } else if (orbitRadius === 0) {
                 console.warn("Initial animation start delayed, radii not ready.");
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }

    </script>

</body>
</html>
