//! enabling scrolls using mousewheel
const scrollContainer = document.querySelector("html,body,*");
scrollContainer.addEventListener(
	"wheel",
	(evt) => {
		evt.preventDefault();
		if ((screen.width >= 280) & (screen.width < 1536)) {
			scrollContainer.scrollTop += evt.deltaY * 4;
		} else {
			scrollContainer.scrollLeft += evt.deltaY * 8;
		}
	},
	{
		passive: false,
	}
);

//! showing backtotop icon
const arrow = document.querySelector("#toTop");
//? Call the BACK2TOP Function
BACK2TOP(arrow, 300);

//!tilt js
VanillaTilt.init(document.querySelectorAll(".tilt"), {
	max: 25,
	speed: 400,
	scale: 1.05,
});
