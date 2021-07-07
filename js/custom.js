(function ($) {
	("use strict");

	/* ----------------------------------------------------------- */
	/*  FUNCTION TO STOP LOCAL AND YOUTUBE VIDEOS IN SLIDESHOW
    /* ----------------------------------------------------------- */

	function stop_videos() {
		var video = document.getElementById("video");
		if (video.paused !== true && video.ended !== true) {
			video.pause();
		}
	}

	$(document).ready(function () {
		/* ----------------------------------------------------------- */
		/*  STOP VIDEOS
        /* ----------------------------------------------------------- */

		$(".stop").on("click", function () {
			stop_videos();
		});

		/* ----------------------------------------------------------- */
		/*  FIX REVEALATOR ISSUE AFTER PAGE LOADED
        /* ----------------------------------------------------------- */

		$(".revealator-delay1").addClass("no-transform");

		/* ----------------------------------------------------------- */
		/*  PROJECT GALLERY
        /* ----------------------------------------------------------- */

		if ($(".grid").length) {
			new CBPGridGallery(document.getElementById("grid-gallery"));
		}

		/* ----------------------------------------------------------- */
		/*  HIDE HEADER WHEN PROJECT SLIDESHOW OPENED
        /* ----------------------------------------------------------- */

		$(".grid figure").on("click", function () {
			$("#navbar-collapse-toggle").addClass("hide-header");
		});

		/* ----------------------------------------------------------- */
		/*  SHOW HEADER WHEN PROJECT SLIDESHOW CLOSED
        /* ----------------------------------------------------------- */

		$(".nav-close").on("click", function () {
			$("#navbar-collapse-toggle").removeClass("hide-header");
		});
		$(".nav-prev").on("click", function () {
			if ($(".slideshow ul li:first-child").hasClass("current")) {
				$("#navbar-collapse-toggle").removeClass("hide-header");
			}
		});
		$(".nav-next").on("click", function () {
			if ($(".slideshow ul li:last-child").hasClass("current")) {
				$("#navbar-collapse-toggle").removeClass("hide-header");
			}
		});

		/* ----------------------------------------------------------- */
		/*  PROJECT DIRECTION AWARE HOVER EFFECT
        /* ----------------------------------------------------------- */

		var item = $(".grid li figure");
		var elementsLength = item.length;
		for (var i = 0; i < elementsLength; i++) {
			$(item[i]).hoverdir();
		}

		/* ----------------------------------------------------------- */
		/*  AJAX CONTACT FORM
        /* ----------------------------------------------------------- */

		$(".contactform").on("submit", function () {
			$(".contactform").find(".output_message").removeClass("success error");
			$(".output_message").fadeIn(1500);
			$(".output_message").text("Sending...");
			$(".contact .contactform .output_message").css("margin-bottom", "30px");
			var form = $(this);
			$.ajax({
				url: form.attr("action"),
				method: form.attr("method"),
				data: form.serialize(),
				success: function (result) {
					if (result == "success") {
						$(".form-inputs").css("display", "none");
						$(".box p").css("display", "none");
						$(".contactform").find(".output_message").addClass("success");
						$(".output_message").fadeIn(1500);
						$(".output_message").text("Message Sent!");
						$(".output_message").fadeOut(2500);
					} else {
						$(".tabs-container").css("height", "440px");
						$(".contactform").find(".output_message").addClass("error");
						$(".output_message").fadeIn(1500);
						$(".output_message").text("Error Sending!");
						$(".output_message").fadeOut(2500);
					}
				},
			});

			return false;
		});
	});

	/* ----------------------------------------------------------- */
	/*  KEYBOARD NAVIGATION IN PROJECT SLIDESHOW
    /* ----------------------------------------------------------- */
	$(document).keyup(function (e) {
		if (e.keyCode === 27) {
			stop_videos();
			$(".close-content").click();
			$("#navbar-collapse-toggle").removeClass("hide-header");
		}
		if (e.keyCode === 37 || e.keyCode === 39) {
			stop_videos();
		}
	});
})(jQuery);
