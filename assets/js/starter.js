// Importing JavaScript
//
// You have two choices for including Bootstrap's JS files—the whole thing,
// or just the bits that you need.


// Option 1
//
// Import Bootstrap's bundle (all of Bootstrap's JS + Popper.js dependency)

// import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


// Option 2
//
// Import just what we need

// If you're importing tooltips or popovers, be sure to include our Popper.js dependency
// import "../../node_modules/popper.js/dist/popper.min.js";

// import "../../node_modules/jquery/dist/jquery.slim.min.js";
// import "../../node_modules/bootstrap/js/dist/util.js";
// import "../../node_modules/bootstrap/js/dist/collapse.js";
// import "../../node_modules/bootstrap/js/dist/modal.js";
// import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";




// function createRipple(event) {
//   const button = event.currentTarget;
//
//   const circle = document.createElement("span");
//   const diameter = Math.max(button.clientWidth, button.clientHeight);
//   const radius = diameter / 2;
//
//   circle.style.width = circle.style.height = `${diameter}px`;
//   circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
//   // circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
//   circle.style.top = `${button.clientHeight / 2}px`;
//   circle.classList.add("ripple");
//
//   const ripple = button.getElementsByClassName("ripple")[0];
//
//   if (ripple) {
//     ripple.remove();
//   }
//
//   button.appendChild(circle);
// }
//
// document.addEventListener('DOMContentLoaded', function() {
//   const buttons = document.getElementsByClassName("art-button");
//   for (const button of buttons) {
//     button.addEventListener("click", createRipple);
//   }
// }, false);
if (!!AOS) {
  AOS.init({
    startEvent: 'DOMContentLoaded',
    once: true
  });
}

