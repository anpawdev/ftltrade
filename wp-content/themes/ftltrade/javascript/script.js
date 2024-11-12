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

document.addEventListener('DOMContentLoaded', function () {
  const prevArrow = document.querySelector('.arrow-prev')
  const nextArrow = document.querySelector('.arrow-next')

  if (prevArrow) {
    prevArrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
      <image width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
    </svg>`
  }

  if (nextArrow) {
    nextArrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
      <image width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
    </svg>`
  }
})


const logoSlider = document.querySelector('#splide-logo')

if (logoSlider !== null) {
  const splideLogo = new Splide(logoSlider, {
    pagination: false,
    perPage: 5,
    perMove: 1,
    arrows: true,
    classes: {
      arrows: 'splide__arrows custom-arrows',
      arrow: 'splide__arrow custom-arrow',
      prev: 'splide__arrow--prev arrow-prev',
      next: 'splide__arrow--next arrow-next',
    },
    breakpoints: {
      1024: {
        gap: "1.5rem",
        perPage: 3,
      },
      992: {
        gap: "1.5rem",
        perPage: 2,
      },
      640: {
        gap: "1.5rem",
        perPage: 1,
      },
    }
  });

  splideLogo.mount();
}

const postsSlider = document.querySelector('#splide-news')

if (postsSlider !== null) {
  const splidePost = new Splide(postsSlider, {
    pagination: true,
    perPage: 5,
    perMove: 1,
    arrows: false,
    gap: "19px",
    breakpoints: {
      1024: {
        perPage: 3,
        perMove: 1,
      },
      640: {
        perPage: 1,
        perMove: 1,
      },
    }
  });

  splidePost.mount();
}