/*
Author: David Anderle & Tomáš Růta
Github: https://github.com/Andergonan/
LICENSE: https://github.com/Andergonan/WAP/blob/main/LICENSE
*/

let day = "Ruta";
let night = "Anderle";

let dayLength = 120000;
let isDay;

function setup(){
  createCanvas(800, 400);
  background(0);
  noStroke();
  textAlign(CENTER);  
  textSize(24);
}

function draw(){
  background(0);

  fill(255);
  
  let dayTime = millis() % dayLength;
  let dayAlpha = 0;
  let nightAlpha = 0;
  isDay = dayTime < dayLength / 2;
  
  if (isDay){    
    let t = abs(dayTime - (dayLength / 2));
    t = min(t, dayLength / 2 - t);
    dayAlpha = map(t, 0, dayLength / 2, 127, 255);
    nightAlpha = 255 - dayAlpha;
  }
  else {   
    let nightTime = dayTime - dayLength / 2;
    let t = abs(nightTime - (dayLength / 2));
    t = min(t, dayLength / 2 - t);
    nightAlpha = map(t, 0, dayLength / 2, 127, 255);
    dayAlpha = 255 - nightAlpha;                
  }
  
  let alpha = 255 * (sin(TWO_PI * dayTime / float(dayLength)) + 1) / 2.0;
  background(255 - alpha);
    
  fill(alpha, alpha);
  textSize(dayAlpha);
  text(day, width / 2, (height / 2) + 60);

  fill(alpha, 255 - alpha);
  textSize(nightAlpha);
  text(night, width / 2, (height / 2) + 60);
}