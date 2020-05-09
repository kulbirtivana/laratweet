// import * as ScrollMagic from "scrollmagic"; // Or use scrollmagic-with-ssr to avoid server rendering problems
// import { TweenMax, TimelineMax, Linear } from "gsap"; // Also works with TweenLite and TimelineLite
// import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap";
// ScrollMagic.Scene.addIndicators = require("scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators");
// ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax); 
// const myHeading = $( 'h2');
// console.log( myHeading);

const myListings = $( '.featuresall');
const myListItemPs = $( '.feature1');

myListItemPs.hide();
// myListItemPs.on();
$( 'body').on('click', '.featuresall', function (event){
const clickedElement = $( this);

const clickedElementP = clickedElement.siblings( '.feature1');

if (clickedElementP.is( ':hidden')){
	clickedElementP.show(500);
} else {
	clickedElementP.hide(500);
}
});

//ScrollMagic

		// $(function () { // wait for document ready
		// init
		var controller = new ScrollMagic.Controller();

		// define movement of panels
		var wipeAnimation = new TimelineMax()
		.fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
			.fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
			.fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in f
			// animate to second panel
			// .to("#slideContainer", 0.5, {z: -150})		// move back in 3D space
			// .to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
			// .to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
			// // animate to third panel
			// .to("#slideContainer", 0.5, {z: -150, delay: 1})
			// .to("#slideContainer", 1,   {x: "-50%"})
			// .to("#slideContainer", 0.5, {z: 0})
			// // animate to forth panel
			// .to("#slideContainer", 0.5, {z: -150, delay: 1})
			// .to("#slideContainer", 1,   {x: "-75%"})
			// .to("#slideContainer", 0.5, {z: 0});

		// create scene to pin and link animation
		new ScrollMagic.Scene({
				triggerElement: "#pinContainer",
				triggerHook: "onLeave",
				duration: "500%"
			})
			.setPin("#pinContainer")
			.setTween(wipeAnimation)
			.addIndicators() // add indicators (requires plugin)
			.addTo(controller);
	// });


		// var slideIndex = 0;
		// showSlides();

		// function showSlides() {
		//   var i;
		//   var slides = document.getElementsByClassName("mySlides");
		//   var dots = document.getElementsByClassName("dot");
		//   for (i = 0; i < slides.length; i++) {
		//     slides[i].style.display = "none";  
		//   }
		//   slideIndex++;
		//   if (slideIndex > slides.length) {slideIndex = 1}    
		//   for (i = 0; i < dots.length; i++) {
		//     dots[i].className = dots[i].className.replace(" active", "");
		//   }
		//   slides[slideIndex-1].style.display = "block";  
		//   dots[slideIndex-1].className += " active";
		//   setTimeout(showSlides, 2000); // Change image every 2 seconds
		// }