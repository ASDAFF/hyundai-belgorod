var canvas = document.getElementById("progress-ring");
var ctx = canvas.getContext("2d");
var zoom = 1;
var prgi = 1;
var px = canvas.width/2;
var py = canvas.height/2;
var startSegment, endSegment;
var drawAni;
var radio = 40*zoom,
	rotateSpeed = 0.004,
	backRingColor = '#eee',
	forwardRingColor = '#1A85CA',
	ringWidth = 3,
	$ringWrap = $('.progress-ring-wrap');

window.requestAnimFrame = (function(){
    return window.requestAnimationFrame		||
        window.webkitRequestAnimationFrame	||
        window.mozRequestAnimationFrame		||
        window.oRequestAnimationFrame		||
        window.msRequestAnimationFrame		||
        function(callback, canvas){
            window.setTimeout(callback, 1000 / 60);
        };
})();

function progressRingDraw(stage){
    window.cancelAnimationFrame(drawAni);
    if (stage > 0 && stage < 1) {
		drawAni = window.requestAnimFrame(progressRingDraw);
    }
    else if(stage > 1)
    	return false;

    ctx.clearRect(0,0,canvas.width,canvas.height);

    ctx.beginPath();
        ctx.strokeStyle = backRingColor;
        ctx.lineWidth = 3;
        ctx.arc(px,py,radio,Math.PI,Math.PI*4);
        ctx.stroke();
    ctx.closePath();

    startSegment = prgi*Math.PI * 2;
    endSegment = prgi*Math.PI * 2;
    endSegment = endSegment + (Math.PI * 2) * stage;


    ctx.beginPath();
        ctx.strokeStyle = forwardRingColor;
        ctx.lineWidth = ringWidth;
        ctx.arc(px,py,radio,startSegment,endSegment);
        ctx.stroke();
    ctx.closePath();
}
function progressRingInit(){
	window.cancelAnimationFrame(drawAni);
    ctx.clearRect(0,0,canvas.width,canvas.height);
        ctx.strokeStyle = backRingColor;
        ctx.lineWidth = ringWidth;
        ctx.arc(px,py,radio,Math.PI,Math.PI*4);
        ctx.stroke();
}
function progressRingLoad(){
};

progressRingInit();