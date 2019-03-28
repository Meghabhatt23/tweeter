var string = "7 Reasons Why You Should Be Using Tweeter!";
var str = string.split("");
var el = document.getElementById('header');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
var running = setTimeout(animate, 90);
})();
