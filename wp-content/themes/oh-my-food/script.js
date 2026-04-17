document.addEventListener('DOMContentLoaded', function () {
    initMobileMenu();
    initContestPopup();
});

function initMobileMenu() {
    var header = document.querySelector('.omf-header');

    if (!header) {
        return;
    }

    var toggle = header.querySelector('.omf-header__toggle');
    var navigation = header.querySelector('.omf-header__nav');

    if (!toggle || !navigation) {
        return;
    }

    var mobileBreakpoint = window.matchMedia('(max-width: 900px)');

    function setMenuState(isOpen) {
        header.classList.toggle('is-open', isOpen);
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    }

    function syncMenuState() {
        header.classList.add('omf-header--interactive');

        if (!mobileBreakpoint.matches) {
            setMenuState(false);
        }
    }

    toggle.addEventListener('click', function () {
        setMenuState(!header.classList.contains('is-open'));
    });

    var navigationLinks = navigation.querySelectorAll('a');
    var index;

    for (index = 0; index < navigationLinks.length; index += 1) {
        navigationLinks[index].addEventListener('click', function () {
            if (mobileBreakpoint.matches) {
                setMenuState(false);
            }
        });
    }

    document.addEventListener('click', function (event) {
        if (!mobileBreakpoint.matches || !header.classList.contains('is-open')) {
            return;
        }

        if (!header.contains(event.target)) {
            setMenuState(false);
        }
    });

    document.addEventListener('keydown', function (event) {
        if ('Escape' === event.key && header.classList.contains('is-open')) {
            setMenuState(false);
            toggle.focus();
        }
    });

    if ('function' === typeof mobileBreakpoint.addEventListener) {
        mobileBreakpoint.addEventListener('change', syncMenuState);
    } else if ('function' === typeof mobileBreakpoint.addListener) {
        mobileBreakpoint.addListener(syncMenuState);
    }

    syncMenuState();
}

function initContestPopup() {
    var popup = document.getElementById('omf-contest-popup');

    if (!popup) {
        return;
    }

    var popupDialog = popup.querySelector('.omf-popup__dialog');
    var closeTriggers = popup.querySelectorAll('[data-omf-popup-close]');
    var popupForm = popup.querySelector('[data-omf-popup-form]');
    var sessionKey = 'omfContestPopupSeen';
    var previousFocusedElement = null;
    var canUseSessionStorage = true;

    if (!popupDialog) {
        return;
    }

    function getFocusableElements() {
        return popupDialog.querySelectorAll(
            'a[href], button:not([disabled]), textarea:not([disabled]), input:not([type="hidden"]):not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
        );
    }

    function onPopupKeydown(event) {
        if ('Escape' === event.key) {
            event.preventDefault();
            closePopup();
            return;
        }

        if ('Tab' !== event.key) {
            return;
        }

        var focusableElements = getFocusableElements();

        if (!focusableElements.length) {
            return;
        }

        var firstElement = focusableElements[0];
        var lastElement = focusableElements[focusableElements.length - 1];

        if (event.shiftKey && document.activeElement === firstElement) {
            event.preventDefault();
            lastElement.focus();
        } else if (!event.shiftKey && document.activeElement === lastElement) {
            event.preventDefault();
            firstElement.focus();
        }
    }

    function openPopup() {
        previousFocusedElement = document.activeElement;
        popup.hidden = false;
        popup.setAttribute('aria-hidden', 'false');
        document.body.classList.add('omf-modal-open');
        popupDialog.addEventListener('keydown', onPopupKeydown);

        var focusableElements = getFocusableElements();
        if (focusableElements.length) {
            focusableElements[0].focus();
        } else {
            popupDialog.setAttribute('tabindex', '-1');
            popupDialog.focus();
        }
    }

    function closePopup() {
        popup.hidden = true;
        popup.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('omf-modal-open');
        popupDialog.removeEventListener('keydown', onPopupKeydown);

        if (previousFocusedElement && 'function' === typeof previousFocusedElement.focus) {
            previousFocusedElement.focus();
        }
    }

    var index;
    for (index = 0; index < closeTriggers.length; index += 1) {
        closeTriggers[index].addEventListener('click', closePopup);
    }

    if (popupForm) {
        popupForm.addEventListener('submit', function (event) {
            event.preventDefault();
            closePopup();
        });
    }

    document.addEventListener('keydown', function (event) {
        if ('Escape' === event.key && !popup.hidden) {
            event.preventDefault();
            closePopup();
        }
    });

    try {
        window.sessionStorage.setItem('__omf_popup_test', '1');
        window.sessionStorage.removeItem('__omf_popup_test');
    } catch (error) {
        canUseSessionStorage = false;
    }

    if (canUseSessionStorage) {
        if (!window.sessionStorage.getItem(sessionKey)) {
            window.setTimeout(function () {
                openPopup();
                window.sessionStorage.setItem(sessionKey, '1');
            }, 2000);
        }
        return;
    }

    window.setTimeout(function () {
        openPopup();
    }, 2000);
}
