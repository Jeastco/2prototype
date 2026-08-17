<?php
/**
 * ADS-Nyanza — Maintenance / Offline page
 * Returns HTTP 503 so search engines know we're temporarily down.
 */

http_response_code(503);

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Optional: how long (in seconds) until we're back. Shown as the initial countdown.
$retryAfter = 1800; // 30 minutes
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ADS-Nyanza — Under Maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="ADS-Nyanza is currently undergoing scheduled maintenance. We'll be back shortly.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#1f7a3a">

    <link rel="icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        :root {
            --brand: #1f7a3a;
            --brand-2: #4caf7f;
            --brand-soft: #e8f5ec;
            --bg: #f6f8f7;
            --ink: #1a2b3c;
            --muted: #5b6b78;
            --line: rgba(31, 122, 58, 0.12);
            --card: rgba(255, 255, 255, 0.92);
            --shadow: 0 30px 60px rgba(15, 30, 22, 0.10);
            --radius: 28px;
        }

        * { box-sizing: border-box; }

        html, body { height: 100%; }
        body {
            margin: 0;
            font-family: 'Poppins', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
            color: var(--ink);
            background: linear-gradient(135deg, var(--bg) 0%, var(--brand-soft) 100%);
            -webkit-font-smoothing: antialiased;
        }

        /* ===== Topbar ===== */
        .topbar {
            background: var(--brand);
            color: #fff;
            font-size: 0.78rem;
        }
        .topbar a { color: #fff; text-decoration: none; opacity: .95; }
        .topbar a:hover { opacity: 1; text-decoration: underline; }
        .topbar .bi { margin-right: .35rem; }

        /* ===== Hero ===== */
        .offline-hero {
            min-height: calc(100vh - 40px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.5rem 1rem;
            position: relative;
            overflow: hidden;
        }
        .offline-hero::before,
        .offline-hero::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: .07;
            background: var(--brand);
            filter: blur(2px);
            animation: float 18s ease-in-out infinite;
        }
        .offline-hero::before { width: 360px; height: 360px; top: -120px; right: -120px; }
        .offline-hero::after  { width: 280px; height: 280px; bottom: -90px; left: -90px; animation-delay: 6s; }

        @keyframes float {
            0%, 100% { transform: translate(0,0) scale(1); }
            50%      { transform: translate(24px,-24px) scale(1.06); }
        }

        .offline-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 760px;
            background: var(--card);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 2.75rem 2.25rem;
            box-shadow: var(--shadow);
            text-align: center;
            animation: rise .8s ease both;
        }
        @keyframes rise {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .offline-logo {
            width: 96px; height: 96px;
            margin: 0 auto .75rem;
            display: flex; align-items: center; justify-content: center;
            position: relative;
            animation: bob 3.2s ease-in-out infinite;
        }
        .offline-logo img {
            max-width: 100%;
            max-height: 80px;
            object-fit: contain;
            filter: drop-shadow(0 6px 20px rgba(0,0,0,.08));
        }
        .offline-logo::after {
            content: "";
            position: absolute; inset: -8px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(31,122,58,.10), transparent 70%);
            z-index: -1;
            animation: pulse 2.4s ease-in-out infinite;
        }
        @keyframes bob   { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-8px); } }
        @keyframes pulse { 0%,100% { transform: scale(.85); opacity:.5; } 50% { transform: scale(1.15); opacity:1; } }

        .badge-status {
            display: inline-flex; align-items: center; gap: .4rem;
            background: linear-gradient(135deg, #fff3cd, #ffe69c);
            color: #7a5a00;
            padding: .35rem 1rem;
            border-radius: 999px;
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: .9rem;
        }
        .badge-status .dot {
            width: 7px; height: 7px; border-radius: 50%;
            background: #d39e00; box-shadow: 0 0 0 0 rgba(211,158,0,.6);
            animation: ping 1.8s ease-out infinite;
        }
        @keyframes ping {
            0%   { box-shadow: 0 0 0 0 rgba(211,158,0,.55); }
            80%  { box-shadow: 0 0 0 8px rgba(211,158,0,0); }
            100% { box-shadow: 0 0 0 0 rgba(211,158,0,0); }
        }

        h1.offline-title {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: clamp(1.7rem, 2.6vw + 1rem, 2.6rem);
            margin: 0 0 .5rem;
            line-height: 1.15;
        }
        h1.offline-title span { color: var(--brand); }

        p.offline-desc {
            color: var(--muted);
            max-width: 38rem;
            margin: 0 auto 1.5rem;
            line-height: 1.7;
        }

        /* ===== Heartbeat monitor ===== */
        .monitor {
            background: #0b1220;
            border-radius: 14px;
            padding: .9rem 1.1rem .6rem;
            border: 1px solid rgba(76, 175, 127, .25);
            margin: 1rem 0 1.4rem;
            position: relative;
            overflow: hidden;
        }
        .monitor::before {
            content: "MAINTENANCE MODE";
            position: absolute; top: 8px; right: 14px;
            font-size: .6rem; letter-spacing: 2px; font-weight: 700;
            color: rgba(255,255,255,.18);
        }
        .monitor svg { width: 100%; height: 110px; display: block; }
        .monitor .grid {
            stroke: rgba(255,255,255,.06);
            stroke-width: 1;
        }
        .monitor .beat {
            fill: none;
            stroke: var(--brand-2);
            stroke-width: 2;
            stroke-linecap: round; stroke-linejoin: round;
            filter: drop-shadow(0 0 6px rgba(76,175,127,.5));
            stroke-dasharray: 1200;
            stroke-dashoffset: 1200;
            animation: draw 2.6s linear infinite;
        }
        @keyframes draw { to { stroke-dashoffset: 0; } }

        .monitor .legend {
            display: flex; justify-content: space-between; align-items: center;
            font-family: 'Courier New', monospace;
            font-size: .65rem;
            color: rgba(255,255,255,.45);
            letter-spacing: 1.5px;
            margin-top: .25rem;
        }
        .monitor .legend .ok { color: var(--brand-2); }

        /* ===== Countdown ===== */
        .countdown {
            display: flex; align-items: center; justify-content: center;
            gap: .9rem; padding: .9rem;
            background: rgba(31,122,58,.05);
            border: 1px solid var(--line);
            border-radius: 16px;
            margin: 0 auto 1rem;
        }
        .countdown .cell { text-align: center; min-width: 70px; }
        .countdown .num {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem; font-weight: 800;
            color: var(--brand);
            line-height: 1;
            background: #fff;
            padding: .5rem .35rem;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,.05);
            font-variant-numeric: tabular-nums;
        }
        .countdown .lbl {
            display: block;
            font-size: .62rem;
            font-weight: 600;
            letter-spacing: 1.2px;
            color: var(--muted);
            text-transform: uppercase;
            margin-top: .35rem;
        }
        .countdown .sep {
            font-size: 1.8rem; font-weight: 700; color: var(--brand);
            animation: blink 1s infinite;
        }
        @keyframes blink { 50% { opacity: .25; } }

        .progress {
            height: 8px; background: #e6eee8; border-radius: 999px; overflow: hidden;
            max-width: 420px; margin: .25rem auto 1rem;
        }
        .progress > span {
            display: block; height: 100%;
            background: linear-gradient(90deg, var(--brand), var(--brand-2), var(--brand));
            background-size: 200% 100%;
            border-radius: inherit;
            transition: width .5s ease;
            animation: shimmer 2.4s linear infinite;
        }
        @keyframes shimmer { from { background-position: 0% 0; } to { background-position: -200% 0; } }

        .progress-meta {
            display: flex; justify-content: space-between;
            font-size: .72rem; color: var(--muted);
            max-width: 420px; margin: 0 auto 1.2rem;
        }

        /* ===== Feature pills ===== */
        .pills {
            display: flex; flex-wrap: wrap; justify-content: center;
            gap: .75rem; margin: 1.1rem 0 .6rem;
        }
        .pill {
            display: inline-flex; align-items: center; gap: .5rem;
            background: #fff; border: 1px solid var(--line);
            color: var(--ink);
            padding: .45rem .85rem; border-radius: 999px;
            font-size: .78rem; font-weight: 500;
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .pill:hover { transform: translateY(-2px); box-shadow: 0 8px 18px rgba(0,0,0,.06); }
        .pill .bi { color: var(--brand); }

        /* ===== Buttons ===== */
        .btn-brand {
            display: inline-flex; align-items: center; gap: .55rem;
            background: var(--brand); color: #fff;
            padding: .75rem 1.6rem; border-radius: 999px;
            font-weight: 600; text-decoration: none;
            border: 0; cursor: pointer;
            transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
        }
        .btn-brand:hover { background: #16622e; color: #fff; transform: translateY(-2px); box-shadow: 0 12px 24px rgba(31,122,58,.28); }
        .btn-brand:focus-visible { outline: 3px solid #ffd24d; outline-offset: 2px; }

        .actions { display: flex; flex-wrap: wrap; gap: .75rem; justify-content: center; margin-top: 1.2rem; }
        .actions .ghost { background: transparent; color: var(--brand); border: 1px solid var(--brand); }
        .actions .ghost:hover { background: var(--brand); color: #fff; }

        /* ===== Footer ===== */
        .footnote {
            margin-top: 1.4rem; font-size: .72rem; color: var(--muted);
        }

        /* ===== Reduced motion ===== */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition: none !important; }
        }
    </style>
</head>
<body>

<header class="topbar py-2" role="banner">
    <div class="container d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
        <span><i class="bi bi-geo-alt-fill" aria-hidden="true"></i> ACK St. Peters Church Compound, Kisumu</span>
        <a href="tel:+254726947044"><i class="bi bi-telephone-fill" aria-hidden="true"></i> +254 726 947 044</a>
        <a href="mailto:ads@ads-nyanza.org"><i class="bi bi-envelope-fill" aria-hidden="true"></i> ads@ads-nyanza.org</a>
    </div>
</header>

<main class="offline-hero" role="main">
    <section class="offline-card" aria-labelledby="title">
        <div class="offline-logo">
            <img src="img/ads.png" alt="ADS-Nyanza logo" width="96" height="96">
        </div>

        <div class="badge-status" role="status" aria-live="polite">
            <span class="dot" aria-hidden="true"></span> Under Maintenance
        </div>

        <h1 id="title" class="offline-title">We'll be <span>back soon</span></h1>
        <p class="offline-desc">
            Our team is rolling out improvements to the ADS-Nyanza site.
            We're working as fast as we can — thank you for your patience.
        </p>

        <!-- Heartbeat monitor -->
        <div class="monitor" aria-hidden="true">
            <svg viewBox="0 0 600 110" preserveAspectRatio="none">
                <g class="grid">
                    <line x1="0" y1="55"  x2="600" y2="55"/>
                    <line x1="0" y1="30"  x2="600" y2="30"/>
                    <line x1="0" y1="80"  x2="600" y2="80"/>
                </g>
                <path class="beat" d="M0,55 L40,55 L60,55 L70,80 L80,30 L90,55 L120,55 L140,55 L150,80 L160,30 L170,55 L210,55
                    L240,55 L250,80 L260,30 L270,55 L320,55 L350,55 L360,80 L370,30 L380,55 L420,55
                    L450,55 L460,80 L470,30 L480,55 L520,55 L560,55 L600,55"/>
            </svg>
            <div class="legend">
                <span>SYS · RECOVERING</span>
                <span class="ok">● ONLINE SOON</span>
                <span>SIGNAL · 78%</span>
            </div>
        </div>

        <!-- Countdown -->
        <div class="countdown" aria-label="Estimated time remaining">
            <div class="cell">
                <span class="num" id="cd-h">00</span>
                <span class="lbl">Hours</span>
            </div>
            <span class="sep" aria-hidden="true">:</span>
            <div class="cell">
                <span class="num" id="cd-m">02</span>
                <span class="lbl">Minutes</span>
            </div>
            <span class="sep" aria-hidden="true">:</span>
            <div class="cell">
                <span class="num" id="cd-s">00</span>
                <span class="lbl">Seconds</span>
            </div>
        </div>

        <div class="progress" aria-hidden="true"><span id="prog" style="width:0%"></span></div>
        <div class="progress-meta">
            <span><i class="bi bi-arrow-repeat me-1"></i> Maintenance in progress</span>
            <span id="progPct">0%</span>
        </div>

        <div class="pills" aria-label="What's being improved">
            <span class="pill"><i class="bi bi-code-slash"></i> Development</span>
            <span class="pill"><i class="bi bi-rocket-takeoff"></i> Upgrading</span>
            <span class="pill"><i class="bi bi-shield-check"></i> Security</span>
            <span class="pill"><i class="bi bi-speedometer2"></i> Performance</span>
        </div>

        <div class="actions">
            <a class="btn-brand" href="mailto:ads@ads-nyanza.org?subject=Notify%20me%20when%20ADS-Nyanza%20is%20back">
                <i class="bi bi-bell-fill" aria-hidden="true"></i> Notify me when it's back
            </a>
            <a class="btn-brand ghost" href="https://wa.me/254726947044" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
            </a>
        </div>

        <p class="footnote">
            Need urgent help? Call <a href="tel:+254726947044" style="color:var(--brand); text-decoration:none;">+254 726 947 044</a> or email
            <a href="mailto:ads@ads-nyanza.org" style="color:var(--brand); text-decoration:none;">ads@ads-nyanza.org</a>.
        </p>
    </section>
</main>

<script>
(function () {
    // --- Countdown ---
    const TOTAL = <?php echo (int) $retryAfter; ?>;
    let remaining = TOTAL;

    const h = document.getElementById('cd-h');
    const m = document.getElementById('cd-m');
    const s = document.getElementById('cd-s');
    const bar = document.getElementById('prog');
    const pct = document.getElementById('progPct');

    const pad = n => String(Math.max(0, n)).padStart(2, '0');
    const render = () => {
        const hrs  = Math.floor(remaining / 3600);
        const mins = Math.floor((remaining % 3600) / 60);
        const secs = remaining % 60;
        h.textContent = pad(hrs);
        m.textContent = pad(mins);
        s.textContent = pad(secs);
        const done = ((TOTAL - remaining) / TOTAL) * 100;
        bar.style.width = done + '%';
        pct.textContent = Math.round(done) + '%';
    };

    render();
    const tick = setInterval(() => {
        remaining = Math.max(0, remaining - 1);
        render();
        if (remaining === 0) clearInterval(tick);
    }, 1000);

    // --- Auto-reload when back online ---
    const badge = document.querySelector('.badge-status');
    let tries = 0;
    const ping = () => {
        fetch('/', { method: 'HEAD', cache: 'no-store' })
            .then(r => {
                if (r.ok) {
                    badge.innerHTML = '<span class="dot" style="background:#1f7a3a"></span> Connection restored';
                    badge.style.background = '#d4edda';
                    badge.style.color = '#155724';
                    setTimeout(() => location.reload(), 1500);
                } else {
                    schedule();
                }
            })
            .catch(schedule);
    };
    const schedule = () => {
        // Backoff: 15s, 30s, then 60s
        tries = Math.min(tries + 1, 3);
        setTimeout(ping, tries * 15000);
    };
    setTimeout(ping, 15000);

    // --- Re-ping when tab becomes visible ---
    document.addEventListener('visibilitychange', () => {
        if (!document.hidden) ping();
    });
})();
</script>
</body>
</html>