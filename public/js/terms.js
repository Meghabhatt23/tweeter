$(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});


wow = new WOW(
   {
     animateClass: 'animated',
     offset:       100,
     callback:     function(box) {
       console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
     }
   }
 );
 wow.init();
 document.getElementById('moar').onclick = function() {
   var section = document.createElement('section');
   section.className = 'section--purple wow fadeInDown';
   this.parentNode.insertBefore(section, this);
 };

 var string = "Hello I'm Laith Haleem Form Ghammas Love Developing Websites";
 var str = string.split("");
 var el = document.getElementById('str');
 (function animate() {
 str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
 var running = setTimeout(animate, 90);
 })();
