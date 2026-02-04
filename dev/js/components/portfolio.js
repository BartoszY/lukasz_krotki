
/**
 * Toggle description visibility on portfolio single page
 */
const descToggle = () => {
  const toggleButton  = document.querySelector('.show-portfolio-description');
  const description = document.querySelector('.portfolio-description');

  if (!toggleButton || !description) return;

  toggleButton.addEventListener('click', () => {
    description.classList.toggle('active');
    toggleButton.classList.toggle('active');
  });

}


export { descToggle };