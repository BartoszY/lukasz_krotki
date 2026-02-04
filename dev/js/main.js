import AOS from 'aos';
import { burgerMenu, fixedHeader } from './components/header';
import { descToggle } from './components/portfolio';

burgerMenu();
fixedHeader();
descToggle();

const cursor = document.querySelector('.custom-cursor');

document.addEventListener('mousemove', (e) => {
  cursor.classList.remove('custom-cursor--hover');
  cursor.style.left = e.clientX + 'px';
  cursor.style.top = e.clientY + 'px';

  if (e.target.tagName === 'A' || e.target.parentElement.tagName === 'A') {
    cursor.classList.add('custom-cursor--hover');
  }
});



setTimeout(function() {
  AOS.init({
    once: true,
    easing: 'ease-in-sine',
    duration: 600,
    disable: 'mobile',
  });
}, 100);

