const navToggle = document.querySelector('.nav__toggle-button');
const navList = document.querySelector('.nav__primary-list');

navToggle.addEventListener('click', () => {
  const isOpened = navList.getAttribute('aria-expanded') === 'true';

  isOpened ? closeNav() : openNav();
});

const closeNav = () => {
  navList.setAttribute('aria-expanded', 'false');
};

const openNav = () => {
  navList.setAttribute('aria-expanded', 'true');
};
