// This is all you.
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('#mobile-menu');

if (menuToggle && mobileMenu) {
    const closeMenu = (restoreFocus = false) => {
        mobileMenu.hidden = true;
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.querySelector('[data-menu-label]').textContent = 'Menu';
        if (restoreFocus) menuToggle.focus();
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        mobileMenu.hidden = isOpen;
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.querySelector('[data-menu-label]').textContent = isOpen ? 'Menu' : 'Close';
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !mobileMenu.hidden) closeMenu(true);
    });
    document.addEventListener('click', (event) => {
        if (!mobileMenu.hidden && !event.target.closest('.site-header')) closeMenu();
    });
    mobileMenu.addEventListener('click', (event) => {
        if (event.target.closest('a')) closeMenu();
    });
    window.matchMedia('(min-width: 1024px)').addEventListener('change', (event) => {
        if (event.matches) closeMenu();
    });
}
