/*click color button*/
function color(button) {
  document.getElementById("color").innerHTML = button; /*REMOVE LATER*/
  wait();

  /*check*/
  window.location.href = "index.php?w1=" + button;
}

/*wait after click color button*/
function wait() {
  for(i=1; i<5; i++) {
    x = document.getElementById("game"+i);
    x.style.display = "none";
  }

  x = document.getElementById("text");
  x.style.display = "none";

  x = document.getElementById("quit");
  x.style.display = "block";
}

/*click start button*/
function callStart() {
  /*setrgb*/
  window.location.href = "index.php?w1=4";
}

/*set game page*/
function game(score) {
  var x;
  for(i=1; i<5; i++) {
    x = document.getElementById("game"+i);
    x.style.display = "inline-block";
  }

  x = document.getElementById("text");
  x.style.display = "block";

  x = document.getElementById("quit");
  x.style.display = "block";

  for(i=1; i<3; i++) {
    x = document.getElementById("start"+i);
    x.style.display = "none";
  }

  display("text", score);

  
}

/*click quit button*/
function callEnd() {
  /*endgame*/
  window.location.href = "index.php?w1=5";
}

/*set end page*/
function end(score) {
  var x;
  for(i=1; i<4; i++) {
    x = document.getElementById("end"+i);
    x.style.display = "block";
  }

  for(i=1; i<5; i++) {
    x = document.getElementById("game"+i);
    x.style.display = "none";
  }

  x = document.getElementById("text");
  x.style.display = "none";

  x = document.getElementById("quit");
  x.style.display = "none";

  display("end2", score);
}

/*click play again button, set start page*/
function start() {
  var x;
  for(i=1; i<3; i++) {
    x = document.getElementById("start"+i);
    x.style.display = "block";
  }

  for(i=1; i<4; i++) {
    x = document.getElementById("end"+i);
    x.style.display = "none";
  }
}

/*display score*/
function display(id, score) {
  document.getElementById(id).innerHTML = "Score: " + score;
}
