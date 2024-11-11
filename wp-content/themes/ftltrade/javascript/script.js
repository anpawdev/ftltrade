/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import 'particles.js/particles';
import Splide from '@splidejs/splide';

const particlesJS = window.particlesJS;

// Lista identyfikatorów kontenerów, w których chcesz uruchomić efekt cząsteczek
const particleContainers = ['particles-js', 'particles-js2', 'particles-js3'];

// Funkcja, która ładuje konfigurację dla każdego kontenera
particleContainers.forEach(id => {
  particlesJS.load(id, '../ftltrade/wp-content/themes/ftltrade/theme/js/particlesjs-config.json', function () {
    console.log(`callback - particles.js config loaded for #${id}`);
  });
});

const header = document.querySelector('header');
document.addEventListener('scroll', (event) => {
  var elmTop = window.scrollY;
  if (elmTop > 50) {
    header.classList.add("header--scroll");
  } else {
    header.classList.remove("header--scroll");
  }
});

const logoSlider = document.querySelector('#splide-logo')

if (logoSlider !== null) {
  const splideLogo = new Splide(logoSlider, {
    pagination: false,
    perPage: 5,
    perMove: 1,
    arrows: false,
    breakpoints: {
      640: {
        gap: "1.5rem",
        perPage: 1,
        perMove: 1,
      },
    }
  });

  splideLogo.mount();
}