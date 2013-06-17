$(function () {
	/* Menu strip hover events */
	$("#menuStrip a:not(.selected)").hover(function () {
		$(this).stop().animate({
			color : "#C60000"
		}, 150);
	}, function () {
		$(this).stop().animate({
			color : "#666666"
		}, 150);
	});

	/* Comment Button hover events */
	$(".commentButton").hover(function () {
		$(this).find("div").css({
			textDecoration : "underline"
		});
	}, function () {
		$(this).find("div").css({
			textDecoration : "none"
		});
	});

	/* Reveal the comments */
	$(".commentButton").click(function () {
		$(this).parent().parent().find(".commentContainer").stop().slideToggle();
	});

	/* Submitting the comemnts */
	$(".newComment input").click(function () {
		// Get the comment text
		var commentText = $(this).parent().find("textarea").val();

		// Empty the textarea
		$(this).parent().find("textarea").val("");

		// Create the date
		var dateString = "Published on 17/11/2012 by <a href=\"#\">Ben Hall</a>";

		// Do some validation on the text
		if (commentText === "")
			return;

		// Create the main comment div
		var comment = $('<div/>', {
				class : "comment"
			});

		// Create the comment text div
		var texthtml = $('<div/>', {
				class : "text",
				text : commentText
			}).appendTo(comment);

		// Create the comment date div
		var datehtml = $('<div/>', {
				class : "date",
				html : dateString
			}).appendTo(comment);

		// Add the comment to the page once it has been saved in the DB

		// Save in DB

		//Complete
		comment.appendTo(".commentGroup");
	});

	/* Hover events for the comment boxes */
	$(document).on({
		mouseenter : function () {
			$(this).stop().animate({
				backgroundColor : "#F2F2F2"
			}, 150);
		},
		mouseleave : function () {
			$(this).stop().animate({
				backgroundColor : "#FDFDFD"
			}, 150);
		}
	}, ".comment");
});
