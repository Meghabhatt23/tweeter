$(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this).delay($(this).data('delay')).queue(function(){
      $(this).addClass('animate-in');
    });
  });
});
Splitting(); // => letters are '<div>' wrapped!

// ref obj
var OBJ = 'h2 > div span';

// total nr of letters
var ntCh = OBJ.length;

// cos (index) => y
function curveY(i){
  var n = i / ntCh * 6.24;
  return (Math.cos(n)) * -200;
}

// sin (index) => x
function curveX(i){
  var n = i / ntCh * 6.24;
  return (Math.sin(n)) * -200;
}

// new timeline ref
var tl = new TimelineMax({delay:.5, repeat:-1 });

// color array helper
var arr = ["#008954","#0077be","#a9d046","#00b0f0","#a93056","#ee3338","#f89734","#ffd925","#973989","#cb92a6"];

// ZIGZAG letters
tl.staggerFrom( OBJ , 1, {
	cycle:{
		y:curveY,
	},
	x:-100, opacity:0
}, .03);
// ZIPPER letters
tl.staggerTo( OBJ , 3, {
	cycle:{
		y:[-80, 80],
		color: arr,
		skewY:[ 20, -20],
		skewX:[ -20, 20],
	},
}, .05, "+=1" );

// sin curve out

tl.staggerTo( OBJ , 2, {
	cycle: {
		x: curveY,
		y: curveX,
	},
	color: "#fff"
}, .03, "+=1" );
