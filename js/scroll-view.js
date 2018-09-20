// Adapted from: https://eddyerburgh.me/animate-elements-scrolled-view-vanilla-js
const animateHTML = () => {
  let elems, windowHeight;

  const init = () => {
    elems = document.querySelectorAll('.item');
    windowHeight = window.innerHeight;
    _addEventHandlers();
  };

  const _addEventHandlers = () => {
    window.addEventListener('load', _checkPosition);
    window.addEventListener('scroll', _.throttle(_checkPosition, 1000));
    window.addEventListener('resize', init);
  };

  const _checkPosition = () => {
    elems.forEach((element, index) => {
      let posFromTop = element.getBoundingClientRect().top;
      if (posFromTop - windowHeight <= -50) {
        setTimeout(function () {
          element.classList.add('visible');
        }, 100 * index);
      }
    });
  };

  return {
    init: init
  };
};

animateHTML().init();