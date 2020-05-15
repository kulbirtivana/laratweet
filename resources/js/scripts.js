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

		// var controller = new ScrollMagic.Controller();

		// var wipeAnimation = new TimelineMax()
		// .fromTo("section.panel.turqoise", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
		// 	.fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
		// 	.fromTo("section.panel.bordeaux", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in f
	
		// new ScrollMagic.Scene({
		// 		triggerElement: "#pinContainer",
		// 		triggerHook: "onLeave",
		// 		duration: "500%"
		// 	})
		// 	.setPin("#pinContainer")
		// 	.setTween(wipeAnimation)
		// 	.addIndicators() // add indicators (requires plugin)
		// 	.addTo(controller);

// wait for document ready
		// init
		// $(function () { 
		var controller = new ScrollMagic.Controller();
	 	var wipeAnimation = new TimelineMax()
	 	// .fromTo(".one", 1, {x:"100%"}, {x:"0%"})
		.fromTo(".two", 1, {x:"-100%"}, {x:"0%"} )
		.fromTo(".three", 1, {y:"-100%"}, {y:"0%"} )
		.fromTo(".four", 1, {x:"100%"}, {x:"0%"} )

		var scene = new ScrollMagic.Scene({
					triggerElement: "#container",
					triggerHook: "onLeave",
					duration: "500%"
		})
		.setPin("#container")
		.setTween(wipeAnimation)
		// .addIndicators() 
		.addTo(controller);

			// });