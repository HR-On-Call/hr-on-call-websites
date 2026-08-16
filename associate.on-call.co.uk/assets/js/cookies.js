// Cookie Consent Management
document.addEventListener('DOMContentLoaded', function() {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');

    // Check if consent already given
    const consent = getCookie('cookie_consent');

    if (!consent && cookieBanner) {
        cookieBanner.classList.add('show');
    }

    // Accept all cookies
    document.querySelectorAll('[data-action="accept-cookies"]').forEach(btn => {
        btn.addEventListener('click', function() {
            setConsent({
                necessary: true,
                analytics: true,
                marketing: true
            });
            hideBanner();
            hideModal();
        });
    });

    // Reject non-essential cookies
    document.querySelectorAll('[data-action="reject-cookies"]').forEach(btn => {
        btn.addEventListener('click', function() {
            setConsent({
                necessary: true,
                analytics: false,
                marketing: false
            });
            hideBanner();
            hideModal();
        });
    });

    // Open settings modal
    document.querySelectorAll('[data-action="cookie-settings"]').forEach(btn => {
        btn.addEventListener('click', function() {
            if (cookieModal) {
                cookieModal.classList.add('show');
                loadCurrentSettings();
            }
        });
    });

    // Cookie preferences link (for footer)
    document.querySelectorAll('[data-action="cookie-preferences"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (cookieModal) {
                cookieModal.classList.add('show');
                loadCurrentSettings();
            }
        });
    });

    // Close modal
    document.querySelectorAll('[data-action="close-modal"]').forEach(btn => {
        btn.addEventListener('click', function() {
            hideModal();
        });
    });

    // Save settings
    document.querySelectorAll('[data-action="save-cookies"]').forEach(btn => {
        btn.addEventListener('click', function() {
            const analytics = document.getElementById('cookie-analytics')?.checked || false;
            const marketing = document.getElementById('cookie-marketing')?.checked || false;

            setConsent({
                necessary: true,
                analytics: analytics,
                marketing: marketing
            });
            hideBanner();
            hideModal();
        });
    });

    // Close modal when clicking outside
    if (cookieModal) {
        cookieModal.addEventListener('click', function(e) {
            if (e.target === cookieModal) {
                hideModal();
            }
        });
    }

    function setConsent(preferences) {
        setCookie('cookie_consent', JSON.stringify(preferences), 365);

        // Apply preferences
        if (preferences.analytics) {
            enableAnalytics();
        }
        if (preferences.marketing) {
            enableMarketing();
        }
    }

    function loadCurrentSettings() {
        const consent = getCookie('cookie_consent');
        if (consent) {
            try {
                const preferences = JSON.parse(consent);
                const analyticsToggle = document.getElementById('cookie-analytics');
                const marketingToggle = document.getElementById('cookie-marketing');

                if (analyticsToggle) analyticsToggle.checked = preferences.analytics || false;
                if (marketingToggle) marketingToggle.checked = preferences.marketing || false;
            } catch (e) {
                console.error('Error parsing cookie consent:', e);
            }
        }
    }

    function hideBanner() {
        if (cookieBanner) {
            cookieBanner.classList.remove('show');
        }
    }

    function hideModal() {
        if (cookieModal) {
            cookieModal.classList.remove('show');
        }
    }

    function enableAnalytics() {
        // Add your analytics code here (e.g., Google Analytics)
        console.log('Analytics enabled');
    }

    function enableMarketing() {
        // Add your marketing code here
        console.log('Marketing cookies enabled');
    }
});

// Cookie utility functions
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + '=' + encodeURIComponent(value) + ';expires=' + expires.toUTCString() + ';path=/;SameSite=Lax';
}

function getCookie(name) {
    const nameEQ = name + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function deleteCookie(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/';
}
