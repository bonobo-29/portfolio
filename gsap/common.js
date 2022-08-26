const ham = document.querySelector('#Hamburger');
const menu = document.querySelector('.sp__menu');

ham.addEventListener('click', function () {

  ham.classList.toggle('js-menu-open');
  menu.classList.toggle('js-open');
});


gsap.registerPlugin(ScrollTrigger);

const fv_slides = document.querySelectorAll('.fv_slide');
const fv_slides_fig = document.querySelectorAll('.fv_slide_fig');

fv_slides.forEach((fv_slide, index) => {
    gsap.to(fv_slide, 1, {
        width: "150%",
        left: "150%",
        delay: 0.8,
        ease: Expo.ease,
        scrollTrigger: {
            trigger: fv_slide,
        }
    })
})

fv_slides_fig.forEach((fv_slide_fig, index) => {
    gsap.to(fv_slide_fig, 1, {
        opacity: 1,
        delay: 1,
        scrollTrigger: {
            trigger: fv_slide_fig,
        }
    })
})
// テキストを徐々に表示させる
const ttl__clips = document.querySelectorAll('.ttl__clip');

ttl__clips.forEach((ttl__clip, index) => {
  gsap.to(ttl__clip, {
    scrollTrigger: {
      trigger: ttl__clip,
      start: 'top-=100 center+=100',
      end: 'top top-=100',
    }
  });

  ScrollTrigger.create({
    trigger:ttl__clip,
    delay: 0.8,
    id: index+1,
    start: 'top center-=50',
    end: 'top top+=50',
    once: true,
    toggleClass: {
      targets: ttl__clip,
      className: 'slid__open',
    },
  });
});
// 背景が徐々に表示
gsap.fromTo('.scroll__bg', 2, {
    width: "0",
  },
  {
    width: '70%',
    scrollTrigger: {
      trigger: '#works',
      start: 'top center-=50',
      end: 'top top+=50',
      once: true,
    }
  }
)

//下からフェードイン
const fadeUps = document.querySelectorAll('.fade__up');

fadeUps.forEach((fadeUp, index) => {
  gsap.fromTo(fadeUp,2, {
    autoAlpha: 0,
    y:60,
  },
  {
    autoAlpha: 1,
    y: 0,
    scrollTrigger: {
      trigger: fadeUp,
      start: 'top center-=50',
      end: 'top top',
      // toggleActions: "play pause resume reverse",
    }
  });
})

// timelineを作成
const design = '#skill__design'; // ドット
const wordpress = '#skill__wordpress'; // ドット
const coding = '#skill__coding'; // ドット
const seo = '#skill__seo'; // ドット
gsap.set(
  [design, wordpress, coding, seo], {
  width: '0',
});
const bar = gsap.timeline({
  scrollTrigger: {
    trigger: '#skill',
    start: 'top center-=100',
    end: 'top top',
  }
});
bar.to(
  design, {
    width: '65%',
  },
  '+=1'
).to(
  wordpress, {
    width: '90%',
  },
  '<'
).to(
  coding, {
    width: '90%',
  },
  '<'
).to(
  seo, {
    width: '75%',
  },
  '<'
);