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
import AOS from 'aos';

const particlesJS = window.particlesJS;
const particleContainers = ['particles-js', 'particles-js2', 'particles-js3'];

const configPath = `${window.location.origin}/ftltrade/wp-content/themes/ftltrade/theme/js/particlesjs-config.json`;
console.log(configPath);

particleContainers.forEach(id => {
  particlesJS.load(id, configPath, function () {
    console.log(`Particles.js config loaded for #${id}`);
  });
});

AOS.init();

const header = document.querySelector('header');
const logoWhite = document.querySelector('#logo-white');
const logoScroll = document.querySelector('#logo-scroll');
document.addEventListener('scroll', (event) => {
  var elmTop = window.scrollY;
  if (elmTop > 50) {
    header.classList.add("header--scroll");
    logoWhite.classList.add("hidden");
    logoScroll.classList.remove("hidden");
  } else {
    header.classList.remove("header--scroll");
    logoWhite.classList.remove("hidden");
    logoScroll.classList.add("hidden");
  }
});

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
    focus: 'center',
    type: 'loop',
    breakpoints: {
      1440: {
        perPage: 4,
        focus: false,
      },
      1280: {
        perPage: 3,
      },
      992: {
        perPage: 2,
      },
      640: {
        perPage: 1,
      },
    }
  });

  splidePost.mount();
}

const sliderttb = document.querySelector('#splide-ttb')

if (sliderttb !== null) {
  document.addEventListener('DOMContentLoaded', function () {
    const ttb = new Splide('#splide-ttb', {
      type: 'loop',
      direction: 'ttb',
      perPage: 4,
      perMove: 1,
      height: '300px',
      wheel: true,
      arrows: true,
      autoplay: true,
      pagination: false,
      interval: 5000,
      speed: 600,
      easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
      classes: {
        arrows: 'splide__arrows custom-arrows',
        arrow: 'splide__arrow custom-arrow',
        next: 'arrow-next-ttb',
        prev: 'arrow-prev-ttb hidden',
      },
      breakpoints: {
        640: {
          height: '200px',
        },
      }
    });



    ttb.on('mounted', function () {
      const nextArrowTtb = document.querySelector('.arrow-next-ttb');
      if (nextArrowTtb) {
        nextArrowTtb.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="21" viewBox="0 0 41 21">
  <image id="_22" data-name="22" width="41" height="21" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAVCAYAAADb2McgAAACSElEQVRIiWJkmZJZzMDAkM7AwPCEgYHhP8PgAjIMDAwrAAAAAP//YmFgYFjGwMCQxMDA4DjIHAgCzxkYGBYCAAAA//9igjK0GRgYdg0CRyGDUwwMDFIMDAz3AAAAAP//AjkSBtwZGBi2DwrnMTCcYGBgsACzGBgYAAAAAP//QnYkCHgxMDAcoL+bUMAFBgYGS3j+YGBgAAAAAP//QnckCIDS5rqBcR/DfgYGBlMUEQYGBgAAAAD//8LmSBAIZmBg2EZ7N6GA4wwMDE4MDAx/UEQZGBgAAAAA///C5UgQ8GZgYNhCH/cxHGNgYLDCKsPAwAAAAAD//8LnSBDwZWBg2Ed9N6GAcwwMDNY4ZRkYGAAAAAD//yLkSBBwZmBg2EN9t4HBGQYGBnO8KhgYGAAAAAD//yLGkSDgSoPi6TA0k2CkQRTAwMAAAAAA//8i1pEgACqeNlHHfWAH2hGlkoGBAQAAAP//IsWRIOBPhRAF5WKiHcjAwMAAAAAA//8i1ZEgAArRnWToAwFQVYc3k2AABgYGAAAAAP//IseRIODBwMCwl0Q9Z6GZhLSWFgMDAwAAAP//IteRIOBCQjl6BF85iBcwMDAAAAAA//+ixJEgACpHNxPhQFsGBoZfZNnAwMAAAAAA//+i1JEg4IenCgVlEpADyQcMDAwAAAAA//+ihiNBAFSFordHT1MSxXDAwMAAAAAA//+iliNBANQehTXzLlHLgQwMDAwAAAAA//+ipiNBANTMa2FgYLAhpiYhCjAwMAAAAAD//wMAnpU0PtSe/7QAAAAASUVORK5CYII="/>
</svg>`;
      }
    });

    ttb.on('moved', function () {
      document.querySelectorAll('#splide-ttb .splide__slide').forEach(slide => {
        slide.classList.remove('is-active', 'is-secondary', 'is-tertiary', 'is-last');
      });

      const visibleSlides = document.querySelectorAll('#splide-ttb .splide__slide.is-visible');
      if (visibleSlides[0]) visibleSlides[0].classList.add('is-active');
      if (visibleSlides[1]) visibleSlides[1].classList.add('is-secondary'); 
      if (visibleSlides[2]) visibleSlides[2].classList.add('is-tertiary');
      if (visibleSlides[3]) visibleSlides[3].classList.add('is-last');
    });

    ttb.mount();
  });
}

const navToggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('nav');

navToggle.addEventListener('click', () => {
  nav.classList.toggle('expanded');
})

document.addEventListener('DOMContentLoaded', function () {
  const prevArrow = document.querySelector('.arrow-prev')
  const nextArrows = document.querySelectorAll('.arrow-next')

  const svgContent = `<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
  <image width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
</svg>`

  if (prevArrow) {
    prevArrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
      <image width="9" height="17" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAARCAYAAAAPFIbmAAABN0lEQVQokWJkmZJRz8DA0MXAwPCdARtgYGAAAAAA//9iYmBgKGdgYDiDSwEDAwMDAAAA//8CKTrOwMCgxcDAsBWrCgYGBgAAAAD//wIpYoSyvRgYGLZhqGBgYAAAAAD//0JWBAKeGAoZGBgAAAAA//8CKUIHIIXb4YIMDAwAAAAA///CpggEPOAmMjAwAAAAAP//wqUIYTUDgwgAAAD//8KnCKKQgaEQAAAA//8ipGgfAwPDFAAAAAD//2IhoMCZgYGBAQAAAP//wmXSfpgCBgYGBgAAAAD//8KmaC8DA4MTnMfAwAAAAAD//wIp+o9mhQuKFgYGBgAAAAD//wIp+odkAtwKOGBgYAAAAAD//wIpsmJgYLiDzQQwYGBgAAAAAP//AinqZ2BgMMalgIGBgQEAAAD//wMACZcWSEh3n18AAAAASUVORK5CYII=" />
    </svg>`
  }

  nextArrows.forEach(arrow => {
    arrow.innerHTML = svgContent
  })
})

  document.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('loader');
    
    setTimeout(() => {
      loader.classList.add("hide");
    }, 800);
  });
