/**
* jQuery.UI.iPad plugin
* Copyright (c) 2010 Stephen von Takach
* licensed under MIT.
* Date: 27/8/2010
*
* Project Home:
* http://code.google.com/p/jquery-ui-for-ipad-and-iphone/
*/


$(function() {
	//
	// Extend jQuery feature detection
	//
	$.extend($.support, {
		//touch: typeof Touch == "object"
		touch: "ontouchend" in document
		//touch: Touch.className == "touch"
	});

	//
	// Hook up touch events
	//
	if ($.support.touch) {

		/* 2013-02-27
		var obj_target1 = document.getElementById("cubebox");
		if (obj_target1) {
			obj_target1.addEventListener("touchstart", iPadTouchCubeHandler, false);
			obj_target1.addEventListener("touchmove", iPadTouchCubeHandler, false);
			obj_target1.addEventListener("touchend", iPadTouchCubeHandler, false);
			obj_target1.addEventListener("touchcancel", iPadTouchCubeHandler, false);
		}
		var obj_target2 = document.getElementById("mainbanner");
		if (obj_target2) {
			obj_target2.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target2.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target2.addEventListener("touchend", iPadTouchHandler, false);
			obj_target2.addEventListener("touchcancel", iPadTouchHandler, false);
		}
		*/

		var obj_target3 = document.getElementById("layer_experience_panorama");
		if (obj_target3) {
			obj_target3.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target3.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target3.addEventListener("touchend", iPadTouchHandler, false);
			obj_target3.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		var obj_target4 = document.getElementById("slider_deposit");
		if (obj_target4) {
			obj_target4.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target4.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target4.addEventListener("touchend", iPadTouchHandler, false);
			obj_target4.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		var obj_target5 = document.getElementById("slider_month");
		if (obj_target5) {
			obj_target5.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target5.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target5.addEventListener("touchend", iPadTouchHandler, false);
			obj_target5.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		var obj_target6 = document.getElementById("find_a_car_hide_layer");
		if (obj_target6) {
			obj_target6.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target6.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target6.addEventListener("touchend", iPadTouchHandler, false);
			obj_target6.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		var obj_target7 = document.getElementById("gnb_carfinder");
		if (obj_target7) {
			obj_target7.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target7.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target7.addEventListener("touchend", iPadTouchHandler, false);
			obj_target7.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		/* 2013-02-26 thej phoebe add - for equus */
		var obj_target8 = document.getElementById("exterior_slider");
		if (obj_target8) {
			obj_target8.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target8.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target8.addEventListener("touchend", iPadTouchHandler, false);
			obj_target8.addEventListener("touchcancel", iPadTouchHandler, false);
		}

		var obj_target9 = document.getElementById("interior_slider");
		if (obj_target9) {
			obj_target9.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target9.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target9.addEventListener("touchend", iPadTouchHandler, false);
			obj_target9.addEventListener("touchcancel", iPadTouchHandler, false);
		}
		/* -- 2013-02-26 */

		/* 2013-02-27 thej phoebe add for new panorama */
		var obj_target10 = document.getElementById("panoramaDIV");
		if (obj_target10) {
			obj_target10.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target10.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target10.addEventListener("touchend", iPadTouchHandler, false);
			obj_target10.addEventListener("touchcancel", iPadTouchHandler, false);
			obj_target10.addEventListener("scroll", iPadTouchHandler, false);
		}
		var obj_target11 = document.getElementById("layer_experience_new_panorama");
		if (obj_target11) {
			obj_target11.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target11.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target11.addEventListener("touchend", iPadTouchHandler, false);
			obj_target11.addEventListener("touchcancel", iPadTouchHandler, false);
			obj_target11.addEventListener("scroll", iPadTouchHandler, false);
		}

		var obj_target12 = document.getElementById("technology_slider");
		if (obj_target12) {
			obj_target12.addEventListener("touchstart", iPadTouchHandler, false);
			obj_target12.addEventListener("touchmove", iPadTouchHandler, false);
			obj_target12.addEventListener("touchend", iPadTouchHandler, false);
			obj_target12.addEventListener("touchcancel", iPadTouchHandler, false);
		}
		/* -- 2013-07-27 */
		
		
	}
});


var lastTap = null;			// Holds last tapped element (so we can compare for double tap)
var tapValid = false;			// Are we still in the .6 second window where a double tap can occur
var tapTimeout = null;			// The timeout reference

function cancelTap() {
	tapValid = false;
}

var rightClickPending = false;	// Is a right click still feasible
var rightClickEvent = null;		// the original event
var holdTimeout = null;			// timeout reference
var cancelMouseUp = false;		// prevents a click from occuring as we want the context menu


function cancelHold() {
	if (rightClickPending) {
		window.clearTimeout(holdTimeout);
		rightClickPending = false;
		rightClickEvent = null;
	}
}

function startHold(event) {
	if (rightClickPending)
		return;

	rightClickPending = true; // We could be performing a right click
	rightClickEvent = (event.changedTouches)[0];
	holdTimeout = window.setTimeout("doRightClick();", 800);
}


function doRightClick() {
	rightClickPending = false;

	//
	// We need to mouse up (as we were down)
	//
	var first = rightClickEvent,
		simulatedEvent = document.createEvent("MouseEvent");
	simulatedEvent.initMouseEvent("mouseup", true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0, null);
	first.target.dispatchEvent(simulatedEvent);

	//
	// emulate a right click
	//
	simulatedEvent = document.createEvent("MouseEvent");
	simulatedEvent.initMouseEvent("mousedown", true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 2, null);
	first.target.dispatchEvent(simulatedEvent);

	//
	// Show a context menu
	//
	simulatedEvent = document.createEvent("MouseEvent");
	simulatedEvent.initMouseEvent("contextmenu", true, true, window, 1, first.screenX + 50, first.screenY + 5, first.clientX + 50, first.clientY + 5, false, false, false, false, 2, null);
	first.target.dispatchEvent(simulatedEvent);


	//
	// Note:: I don't mouse up the right click here however feel free to add if required
	//


	cancelMouseUp = true;
	rightClickEvent = null; // Release memory
}


//
// mouse over event then mouse down
//
function iPadTouchStart(event) {
	var touches = event.changedTouches,
		first = touches[0],
		type = "mouseover",
		simulatedEvent = document.createEvent("MouseEvent");
	//
	// Mouse over first - I have live events attached on mouse over
	//
	simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0, null);
	first.target.dispatchEvent(simulatedEvent);

	type = "mousedown";
	simulatedEvent = document.createEvent("MouseEvent");

	simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0, null);
	first.target.dispatchEvent(simulatedEvent);


	if (!tapValid) {
		lastTap = first.target;
		tapValid = true;
		tapTimeout = window.setTimeout("cancelTap();", 600);
		startHold(event);
	}
	else {
		window.clearTimeout(tapTimeout);

		//
		// If a double tap is still a possibility and the elements are the same
		//	Then perform a double click
		//
		if (first.target == lastTap) {
			lastTap = null;
			tapValid = false;

			type = "click";
			simulatedEvent = document.createEvent("MouseEvent");

			simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0/*left*/, null);
			first.target.dispatchEvent(simulatedEvent);

			type = "dblclick";
			simulatedEvent = document.createEvent("MouseEvent");

			simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, 0/*left*/, null);
			first.target.dispatchEvent(simulatedEvent);
		}
		else {
			lastTap = first.target;
			tapValid = true;
			tapTimeout = window.setTimeout("cancelTap();", 600);
			startHold(event);
		}
	}
}

function iPadTouchHandler(event) {
	var type = "", button = 0; /*left*/
	if (event.touches.length > 1) return;
	switch (event.type) {
		case "touchstart":
			if ($(event.changedTouches[0].target).is("select")) return;
			iPadTouchStart(event); /*We need to trigger two events here to support one touch drag and drop*/
			//event.preventDefault();
			return false;
			break;

		case "touchmove":
			cancelHold();
			type = "mousemove";
			//event.preventDefault();
			break;

		case "touchend":
			if (cancelMouseUp) {
				cancelMouseUp = false;
				//event.preventDefault();
				return false;
			}
			cancelHold();
			type = "mouseup";
			break;

		default:
			return;
	}
	var touches = event.changedTouches, first = touches[0], simulatedEvent = document.createEvent("MouseEvent");
	simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, button, null);
	first.target.dispatchEvent(simulatedEvent);
	if (type == "mouseup" && tapValid && first.target == lastTap) {	// This actually emulates the ipads default behaviour (which we prevented)
		simulatedEvent = document.createEvent("MouseEvent");		// This check avoids click being emulated on a double tap
		simulatedEvent.initMouseEvent("click", true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, button, null);
		first.target.dispatchEvent(simulatedEvent);
	}
}

function iPadTouchCubeHandler(event) {
	var type = "", button = 0; /*left*/
	if (event.touches.length > 1) return;
	switch (event.type) {
		case "touchstart":
			if ($(event.changedTouches[0].target).is("select")) return;
			iPadTouchStart(event); /*We need to trigger two events here to support one touch drag and drop*/
			//event.preventDefault();
			return false;
			break;

		case "touchmove":
			cancelHold();
			type = "mousemove";
			//event.preventDefault();
			break;

		case "touchend":
			if (cancelMouseUp) {
				cancelMouseUp = false;
				//event.preventDefault();
				return false;
			}
			cancelHold();
			type = "mouseup";
			break;

		default:
			return;
	}
	var touches = event.changedTouches, first = touches[0], simulatedEvent = document.createEvent("MouseEvent");
	simulatedEvent.initMouseEvent(type, true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, button, null);
	first.target.dispatchEvent(simulatedEvent);
	if (type == "mouseup" && tapValid && first.target == lastTap) {	// This actually emulates the ipads default behaviour (which we prevented)
		simulatedEvent = document.createEvent("MouseEvent");		// This check avoids click being emulated on a double tap
		simulatedEvent.initMouseEvent("click", true, true, window, 1, first.screenX, first.screenY, first.clientX, first.clientY, false, false, false, false, button, null);
		first.target.dispatchEvent(simulatedEvent);
	}
}