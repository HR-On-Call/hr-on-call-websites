document.addEventListener("DOMContentLoaded", function() {
    // Create cookie consent banner if it doesn't exist yet
    if (!document.getElementById('cookie-consent-banner')) {
        createConsentBanner();
    }

    // Check if user has already given consent
    if (!getCookie('cookie_consent')) {
        // If no consent yet, show the banner
        setTimeout(function() {
            document.getElementById('cookie-consent-banner').style.display = 'block';
        }, 1000);
    }

    // Add event listeners to consent buttons
    document.getElementById('accept-cookies').addEventListener('click', function() {
        setCookie('cookie_consent', 'accepted', 365);
        hideBanner();
    });

    document.getElementById('decline-cookies').addEventListener('click', function() {
        setCookie('cookie_consent', 'declined', 365);
        hideBanner();
    });
});

// Function to create the consent banner
function createConsentBanner() {
    const banner = document.createElement('div');
    banner.id = 'cookie-consent-banner';
    banner.style.display = 'none';
    
    banner.innerHTML = `
        <div class="cookie-consent-content">
            <h3>Cookie Notice</h3>
            <p>This website uses cookies to enhance your browsing experience and analyze site traffic. 
               By clicking "Accept", you consent to our use of cookies.</p>
            <div class="cookie-buttons">
                <button id="accept-cookies" class="cookie-btn accept">Accept</button>
                <button id="decline-cookies" class="cookie-btn decline">Decline</button>
                <a href="cookie-policy.php" class="cookie-link">Learn More</a>
            </div>
        </div>
    `;
    
    document.body.appendChild(banner);
}

// Function to hide the banner
function hideBanner() {
    const banner = document.getElementById('cookie-consent-banner');
    if (banner) {
        banner.style.display = 'none';
    }
}

// Helper function to set a cookie
function setCookie(name, value, days) {
    let expires = '';
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

// Helper function to get a cookie value
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