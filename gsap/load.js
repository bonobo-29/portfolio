/* 以下アニメーション */
const jsLoaderBg = '.js-loader-bg'; // カーテン（黒い背景）
const jsDot = '.js-loader-dot-wrap > span'; // ドット
const mvImg = '#mv > img'; // ドット
 
/* ドット */
gsap.set(jsDot, {
  y: -50
});
gsap.set(mvImg, {
    opacity: 0,
    delay: 0.8,
});
 
// timelineを作成
const tl = gsap.timeline();
 
tl.to(
  /* ドット */
  /* 0.8秒後に起動 */
  jsDot, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    delay: 0.8,
    stagger: {
      amount: 0.5,
      from: "start",
      ease: 'power4.inOut'
    }
  },
).to(
  /* ドット */
  /* 前のアニメーションが完了した後、ドットを消す */
  jsDot, {
    opacity: 0
  }
).to(
  /* カーテン */
  /* 前のアニメーションが完了した0.5秒後に、カーテンを下へ移動 */
  jsLoaderBg, {
    y: '100%'
  },
  '+=0.5'
).to(
    /* カーテン */
    /* 前のアニメーションが完了した0.5秒後に、カーテンを下へ移動 */
    mvImg, {
      duration: 4,
      opacity: 1,
      start: 'top center+=100',
      end: 'top top',
    },
    '+=0.5'
);