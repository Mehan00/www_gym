function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

setInterval(function() {
    var x = document.getElementById("kolorek"); 
    var red = getRandomInt(0, 255);
    var green = getRandomInt(0, 255);
    var blue = getRandomInt(0, 255);
    
    x.style.color = "rgb(" + red + "," + green + "," + blue + ")";

}, 500);