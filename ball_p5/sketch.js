/*
Author: David Anderle
Github: https://github.com/Andergonan/
LICENSE: https://github.com/Andergonan/WAP/blob/main/LICENSE
*/

let x = 180; //ball reflection 1
let y = 90; // ball reflection 2

let xspeed = 4; // ball speed 1
let yspeed = 4; // ball speed 2

let r = 80; // ball size

function setup() { // window
    createCanvas(window.innerWidth, window.innerHeight);
}

function draw () {
    background (0); // background
    ellipse (x, y, r*2, r*2); // ball
    x += xspeed;
    y += yspeed;
    
    if (x > width - r || x < r) {
        xspeed = -xspeed;
    }
      if (y > height - r || y < r) {
        yspeed = -yspeed;
    }
}