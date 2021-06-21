const bars = document.querySelector(".fa-bars");
const times = document.querySelector(".fa-times");
const mobile_nav = document.querySelector("#mobile-nav ul");

// click event for bars
bars.addEventListener("click", click_bars);
// click event for times
times.addEventListener("click", click_times);

function click_bars() {
  mobile_nav.style.transform = "translatex(0vw)";
  bars.style.transform = "rotate(360deg)";
  bars.style.display = "none";
}

function click_times() {
  bars.style.display = "block";
  mobile_nav.style.transform = "translatex(-100vw)";
}