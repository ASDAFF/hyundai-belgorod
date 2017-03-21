/*
*	spritespin 360° view scripts
*	created 12.09.2016
*/
$(document).ready(function(){
	var
		$spritespin = $('.spritespin'),
		model = $spritespin.data('model'),
		// spritespin options
		initFrame = 30,
		wdth = 700, // probably will changed
		hght = model === 'creta' ? 525 : 316, // probably will changed
		currentFrame,
		currentFrameSrc,
		spritespinInit = function(framesSrc) {
			// crate a new spritespin instance
			$spritespin.spritespin({
				source: framesSrc,
				width: wdth,
				height: hght,
				frame: currentFrame || initFrame,
				sense: -1,
				mods: ['drag', '360'],
				animate: false,
				module: null,
				reverse: false,
				scrollThreshold: 500,
				onInit: function() {
					progressRingInit();
				},
				onProgress: function(e, p) {
					stage = p.percent / 100;
					progressRingDraw();
				},
				onLoad: function() {
					progressRingLoad();
				}
			});
			// create spritespin API;
			var api = $spritespin.spritespin("api");
			// now get current frame;
			$spritespin.bind('onFrame', function(){
				currentFrame = api.data.frame;
				currentFrameSrc = api.data.source[currentFrame];
				$progressImg.length !=0 && $progressImg.attr('src', currentFrameSrc); // change img's src to the current frame;
			});
		},

		// canvas params
		canvas = document.getElementById("progress-ring"),
		ctx = canvas.getContext("2d"),
		px = canvas.width/2,
		py = canvas.height/2,
		startSegment,
		endSegment,
		stage = 0,
		radio = 40,
		backRingColor = '#eee',
		forwardRingColor = '#1A85CA',
		ringWidth = 3,

		// color lists nodes;
		$colSelect = $('.view-360-color-selector'),
		$colSelectList = $('.view-360-color-selector').find('ul'),

		// source paths;
		framesPath = $colSelect.find('li').eq(0).data('color'), // first color as a default color
		framesSrc = SpriteSpin.sourceArray('/img/images/360/'+model+'/'+framesPath+'/{frame}.png', { frame: [1,36], digits: 2 }),

		// progress nodes;
		$ringWrap = $('.progress-ring-wrap'),
		// set first image src;
		t = initFrame + 1,
		$progressImg = $('.progress-last-frame');
		tf = '/img/images/360/'+model+'/'+framesPath+'/'+t+'.png';
		$('.view-360_wrap').addClass('spritespin-loading-progress').css({width: wdth, height: hght});
		console.log('width:', wdth, 'height:', hght);
// 		$progressImg.css('width', wdth).attr('src', tf).parent().addClass('spritespin-loading-progress');
		$('.progress-last-frame').css('width', wdth).attr('src', tf);
// 		console.log(tf);
// 	if ($progressImg.attr('src').indexOf('transparent') !== -1) {
// 		$progressImg.attr('src', '/media/images/360/'+model+'/'+initFrame+'.png').parent().addClass('spritespin-loading-progress');
// 		$progressImg.attr('src', framesSrc[initFrame]).parent().addClass('spritespin-loading-progress');
// 		console.log('// set first image src');
// 	}

	function progressRingDraw(){
		ctx.clearRect(0,0,canvas.width,canvas.height);
		ctx.beginPath();
			ctx.strokeStyle = backRingColor;
			ctx.lineWidth = 3;
			ctx.arc(px,py,radio,Math.PI,Math.PI*4);
			ctx.stroke();
		ctx.closePath();

		startSegment = Math.PI * 2;
		endSegment = Math.PI * 2;
		endSegment = endSegment + (Math.PI * 2) * stage;

		ctx.beginPath();
			ctx.strokeStyle = forwardRingColor;
			ctx.lineWidth = ringWidth;
			ctx.arc(px,py,radio,startSegment,endSegment);
			ctx.stroke();
		ctx.closePath();
	}
	function progressRingInit(){
		!$spritespin.parent().hasClass('spritespin-loading-progress') && $spritespin.parent().addClass('spritespin-loading-progress');
		ctx.clearRect(0,0,canvas.width,canvas.height);
		ctx.beginPath();
			ctx.strokeStyle = backRingColor;
			ctx.lineWidth = ringWidth;
			ctx.arc(px,py,radio,Math.PI,Math.PI*4);
			ctx.stroke();
		ctx.closePath();
	}
	function progressRingLoad(){
		$spritespin.parent().removeClass('spritespin-loading-progress');
	}

	// OK make basics;
	// now we can finaly initialize;
// 	console.log('// initialize');

	spritespinInit(framesSrc);
	// process color changes;
	$colSelect.on('click', 'li', function(e) {
		if ($(e.target).hasClass('current') || $(e.target).parent().hasClass('current')) {
			return false;
		} else {
			$colSelect.find('.current').removeClass('current');
			$(this).addClass('current');
			// get new sources;
			framesPath = $(this).data('color');
			framesSrc = SpriteSpin.sourceArray('/img/images/360/'+model+'/'+framesPath+'/{frame}.png', { frame: [1,36], digits: 2 });
			spritespinInit(framesSrc); // reinit plugin;
		}
	});
	// and the first color should be selected;
	$colSelect.find('li').eq(0).addClass('current');
});