//Parallax effect
window.onscroll = () => {
    console.log(window.scrollY);
    document.getElementById("L1").style.top = window.scrollY * 0.90 + "px";
    document.getElementById("L2").style.top = window.scrollY * 0.51 + "px";
    document.getElementById("L3").style.top = window.scrollY * 0.35 + "px";
    document.getElementById("L4").style.top = window.scrollY * 0.18 + "px";
    document.getElementById("L5").style.top = window.scrollY * -0.12 + "px";
};

//snowflake
