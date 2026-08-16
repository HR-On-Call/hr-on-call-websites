/**
 * HR On Call - Cookie Consent
 */

document.addEventListener('DOMContentLoaded', function() {
    initCookieConsent();
});

function initCookieConsent() {
    const banner = document.getElementById('cookie-banner');
    const modal = document.getElementById('cookie-modal');

    if (!banner) return;

    // Check if user has already made a choice
    const consent = getCookie('cookie_consent');
    if (!consent) {
        banner.classList.add('show');
    }

    // Handle button clicks
    document.addEventListener('click', function(e) {
        const action = e.target.dataset.action;
        if (!action) return;

        switch(action) {
            case 'accept-cookies':
                acceptAllCookies();
                break;
            case 'reject-cookies':
                rejectAllCookies();
                break;
            case 'cookie-settings':
                openCookieModal();
                break;
            case 'close-modal':
                closeCookieModal();
                break;
            case 'save-cookies':
                savePreferences();
                break;
        }
    });

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal && modal.classList.contains('show')) {
            closeCookieModal();
        }
    });

    // Close modal when clicking outside
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeCookieModal();
            }
        });
    }
}

function acceptAllCookies() {
    setCookie('cookie_consent', 'all', 365);
    setCookie('cookie_analytics', 'true', 365);
    hideBanner();
    closeCookieModal();
    loadAnalytics();
}

function rejectAllCookies() {
    setCookie('cookie_consent', 'essential', 365);
    setCookie('cookie_analytics', 'false', 365);
    hideBanner();
    closeCookieModal();
}

function savePreferences() {
    const analyticsCheckbox = document.getElementById('cookie-analytics');
    const analyticsEnabled = analyticsCheckbox ? analyticsCheckbox.checked : false;

    setCookie('cookie_consent', analyticsEnabled ? 'all' : 'essential', 365);
    setCookie('cookie_analytics', analyticsEnabled ? 'true' : 'false', 365);

    hideBanner();
    closeCookieModal();

    if (analyticsEnabled) {
        loadAnalytics();
    }
}

function openCookieModal() {
    const modal = document.getElementById('cookie-modal');
    if (modal) {
        // Restore saved preferences
        const analyticsConsent = getCookie('cookie_analytics');
        const analyticsCheckbox = document.getElementById('cookie-analytics');
        if (analyticsCheckbox) {
            analyticsCheckbox.checked = analyticsConsent === 'true';
        }
        modal.classList.add('show');
    }
}

function closeCookieModal() {
    const modal = document.getElementById('cookie-modal');
    if (modal) {
        modal.classList.remove('show');
    }
}

function hideBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.remove('show');
    }
}

function loadAnalytics() {
    // Load Google Analytics if user has consented
    // Add your GA tracking code here if needed
}

// Cookie utility functions
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + '=' + value + ';expires=' + expires.toUTCString() + ';path=/;SameSite=Lax';
}

function getCookie(name) {
    const nameEQ = name + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
