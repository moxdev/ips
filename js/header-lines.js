(function() {
  var leftRule = document.querySelector('.caption-rule.left');
  var rightRule = document.querySelector('.caption-rule.right');

  function calculateWidth() {
    var featureWrapper = document.querySelector('.page-feature');
    var caption = document.querySelector('.page-feature .caption');
    return (featureWrapper.scrollWidth - caption.scrollWidth) * 0.5;
  }

  window.addEventListener('load', function() {
    leftRule.style.width = calculateWidth() + 'px';
    rightRule.style.width = calculateWidth() + 'px';
  });

  window.addEventListener('resize', function() {
    leftRule.style.width = calculateWidth() + 'px';
    rightRule.style.width = calculateWidth() + 'px';
  });
})();