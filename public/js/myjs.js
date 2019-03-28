var string = "7 Reasons Why You Should Be Using Tweeter!";
var str = string.split("");
var el = document.getElementById('header');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
var running = setTimeout(animate, 90);
})();

$(function() {

              var documentEl = $(document),
                  fadeElem = $('.fade-scroll');


              documentEl.on('scroll', function() {
                  var currScrollPos = documentEl.scrollTop();

                  fadeElem.each(function() {
                      var $this = $(this),
                          elemOffsetTop = $this.offset().top;
                      if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos-elemOffsetTop)/400);
                  });
              });

          });
