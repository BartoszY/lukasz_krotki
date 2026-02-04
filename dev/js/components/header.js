
/**
 * Burger
 */
const burgerMenu = () => {
  const menu = document.querySelector('.header__menu');
  const menuItemsWithChildrens = document.querySelectorAll('.header__menu > .menu-item-has-children');
  const subMenus = document.querySelectorAll('.header__menu > .menu-item-has-children > .sub-menu');
  const burger = document.querySelector('[data-burger]');
  let initialMenuHeight = false;
  let menuActive = false;

  if (burger) {
    burger.addEventListener('click', () => {
      document.body.classList.toggle('nav-active');
      menuActive = !menuActive;

      if (!initialMenuHeight) {
        setTimeout(() => {
          initialMenuHeight = menu.offsetHeight;
        }, 500);
      } else {
        menu.style.height = `${initialMenuHeight}px`;
      }

      if (menuActive && menuItemsWithChildrens) {
        menuItemsWithChildrens.forEach(itemWithChildrens => {
          itemWithChildrens.classList.remove('active');
        });
      }
    });
  }


  if (menu && menuItemsWithChildrens && subMenus) {
    subMenus.forEach(subMenu => {
      if (!subMenu.parentElement.classList.contains('mega-menu')) return;
      
      // add mobile button
      const title = subMenu.previousElementSibling.textContent || 'Back';
      const mobileBackButton = document.createElement('button');
      mobileBackButton.classList.add('submenu-back');
      mobileBackButton.innerText = title;
      subMenu.prepend(mobileBackButton);
      
      mobileBackButton.addEventListener('click', (e) => {
        subMenu.parentElement.classList.remove('active');
        menu.style.height = `${initialMenuHeight}px`;
      });

      if (isMobile()) return;

      subMenu.addEventListener('mouseleave', (e) => {
        subMenu.parentElement.classList.remove('active');
      });
    });

    menuItemsWithChildrens.forEach(itemWithChildrens => {
      itemWithChildrens.addEventListener('click', (e) => {
        if (e.target.classList.contains('menu-item-has-children')) e.preventDefault();

        if (e.target.classList.contains('submenu-back')) return;

        itemWithChildrens.classList.add('active');
        
        const subMenuHeight = itemWithChildrens.lastElementChild.offsetHeight;
        if (subMenuHeight > initialMenuHeight && isMobile()) {
          menu.style.height = `${subMenuHeight}px`;
        }
      });

      if (isMobile()) return;

      itemWithChildrens.addEventListener('mouseenter', (e) => {
        itemWithChildrens.classList.add('active');
      });
    });
  }
}

/**
 * Fixed Header
 */
const fixedHeader = () => {
  checkFixedClasses();

  window.addEventListener('scroll', () => {
    checkFixedClasses();
  });

  function checkFixedClasses() {
    if (window.pageYOffset > 0) {
      document.body.classList.add('body-scrolled');
    }
    else {
      document.body.classList.remove('body-scrolled');
    }
  }
}


export { burgerMenu, fixedHeader };