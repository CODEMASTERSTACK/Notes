function loaderAnimation() {
  var loader = document.querySelector('#loader');
  setTimeout(function () {
    loader.style.top = '-100%';
    loader.style.zIndex = '0';
  }, 4200);
}

loaderAnimation();

let calcScrollValue = () => {
  let scrollProgress = document.getElementById('progress');
  let progressValue = document.getElementById('progress-value');
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = 'grid';
  } else {
    scrollProgress.style.display = 'none';
  }
  scrollProgress.addEventListener('click', () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient( #3b49c7 ${scrollValue}%, #ffffff ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

const scroll = new LocomotiveScroll({
  el: document.querySelector('#wrap'),
  smooth: true,
});
