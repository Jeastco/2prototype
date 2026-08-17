// ===== ADDITIONAL SECURITY LAYER =====
class SecurityManager {
    constructor() {
        this.setupCSP();
        this.setupRateLimiting();
        this.setupInputSanitization();
        this.setupSessionManagement();
    }

    setupCSP() {
        // Content Security Policy
        const meta = document.createElement('meta');
        meta.httpEquiv = 'Content-Security-Policy';
        meta.content = `
            default-src 'self';
            script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdnjs.cloudflare.com;
            style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com;
            img-src 'self' data: https:;
            font-src 'self' https://cdnjs.cloudflare.com;
            connect-src 'self' https://api.openai.com https://api.adsnyanza.com;
            frame-ancestors 'self';
            form-action 'self';
            base-uri 'self';
            upgrade-insecure-requests;
        `.replace(/\s+/g, ' ').trim();
        document.head.appendChild(meta);
    }

    setupRateLimiting() {
        // Rate limiting per IP (would be server-side)
        this.messageCount = 0;
        this.maxMessages = 100;
        this.resetTime = Date.now() + 3600000; // 1 hour

        setInterval(() => {
            if (Date.now() > this.resetTime) {
                this.messageCount = 0;
                this.resetTime = Date.now() + 3600000;
            }
        }, 60000);
    }

    setupInputSanitization() {
        // XSS prevention
        document.addEventListener('input', (e) => {
            if (e.target.id === 'user-input') {
                e.target.value = this.sanitizeInput(e.target.value);
            }
        });
    }

    sanitizeInput(input) {
        // Remove potentially dangerous characters
        return input.replace(/[<>]/g, '');
    }

    setupSessionManagement() {
        // Session timeout
        this.sessionTimeout = 30 * 60 * 1000; // 30 minutes
        this.lastActivity = Date.now();

        document.addEventListener('click', () => {
            this.lastActivity = Date.now();
        });

        setInterval(() => {
            if (Date.now() - this.lastActivity > this.sessionTimeout) {
                this.endSession();
            }
        }, 60000);
    }

    endSession() {
        // Clear sensitive data
        localStorage.clear();
        sessionStorage.clear();
        location.reload();
    }
}

// Initialize security
const securityManager = new SecurityManager();