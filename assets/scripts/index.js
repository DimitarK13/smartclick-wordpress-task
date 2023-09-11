window.addEventListener('load', () => {
  const navToggle = document.querySelector('.nav__toggle-button');
  const navList = document.querySelector('.nav__primary-list');

  navToggle.addEventListener('click', () => {
    navList.classList.toggle('opened');
  });
});
