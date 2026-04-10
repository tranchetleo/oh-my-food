document.addEventListener('DOMContentLoaded', function () {
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
});
