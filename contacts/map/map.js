(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:



(lib.БезимениРисунок1 = function() {
	this.initialize(img.БезимениРисунок1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок10 = function() {
	this.initialize(img.БезимениРисунок10);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок100 = function() {
	this.initialize(img.БезимениРисунок100);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок101 = function() {
	this.initialize(img.БезимениРисунок101);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок102 = function() {
	this.initialize(img.БезимениРисунок102);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок103 = function() {
	this.initialize(img.БезимениРисунок103);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок104 = function() {
	this.initialize(img.БезимениРисунок104);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок105 = function() {
	this.initialize(img.БезимениРисунок105);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок106 = function() {
	this.initialize(img.БезимениРисунок106);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок107 = function() {
	this.initialize(img.БезимениРисунок107);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок108 = function() {
	this.initialize(img.БезимениРисунок108);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок109 = function() {
	this.initialize(img.БезимениРисунок109);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок10_ = function() {
	this.initialize(img.БезимениРисунок10_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок11 = function() {
	this.initialize(img.БезимениРисунок11);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок110 = function() {
	this.initialize(img.БезимениРисунок110);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок111 = function() {
	this.initialize(img.БезимениРисунок111);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок112 = function() {
	this.initialize(img.БезимениРисунок112);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок113 = function() {
	this.initialize(img.БезимениРисунок113);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок114 = function() {
	this.initialize(img.БезимениРисунок114);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок115 = function() {
	this.initialize(img.БезимениРисунок115);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок116 = function() {
	this.initialize(img.БезимениРисунок116);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок117 = function() {
	this.initialize(img.БезимениРисунок117);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок118 = function() {
	this.initialize(img.БезимениРисунок118);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок119 = function() {
	this.initialize(img.БезимениРисунок119);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок11_ = function() {
	this.initialize(img.БезимениРисунок11_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок12 = function() {
	this.initialize(img.БезимениРисунок12);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок120 = function() {
	this.initialize(img.БезимениРисунок120);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок121 = function() {
	this.initialize(img.БезимениРисунок121);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок122 = function() {
	this.initialize(img.БезимениРисунок122);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок123 = function() {
	this.initialize(img.БезимениРисунок123);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок124 = function() {
	this.initialize(img.БезимениРисунок124);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок125 = function() {
	this.initialize(img.БезимениРисунок125);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок126 = function() {
	this.initialize(img.БезимениРисунок126);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок127 = function() {
	this.initialize(img.БезимениРисунок127);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок128 = function() {
	this.initialize(img.БезимениРисунок128);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок129 = function() {
	this.initialize(img.БезимениРисунок129);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок12_ = function() {
	this.initialize(img.БезимениРисунок12_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок13 = function() {
	this.initialize(img.БезимениРисунок13);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок130 = function() {
	this.initialize(img.БезимениРисунок130);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок131 = function() {
	this.initialize(img.БезимениРисунок131);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок132 = function() {
	this.initialize(img.БезимениРисунок132);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок133 = function() {
	this.initialize(img.БезимениРисунок133);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок134 = function() {
	this.initialize(img.БезимениРисунок134);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок135 = function() {
	this.initialize(img.БезимениРисунок135);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок136 = function() {
	this.initialize(img.БезимениРисунок136);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок137 = function() {
	this.initialize(img.БезимениРисунок137);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок138 = function() {
	this.initialize(img.БезимениРисунок138);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок139 = function() {
	this.initialize(img.БезимениРисунок139);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок13_ = function() {
	this.initialize(img.БезимениРисунок13_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок14 = function() {
	this.initialize(img.БезимениРисунок14);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок140 = function() {
	this.initialize(img.БезимениРисунок140);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок141 = function() {
	this.initialize(img.БезимениРисунок141);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок142 = function() {
	this.initialize(img.БезимениРисунок142);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок143 = function() {
	this.initialize(img.БезимениРисунок143);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок144 = function() {
	this.initialize(img.БезимениРисунок144);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок145 = function() {
	this.initialize(img.БезимениРисунок145);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок146 = function() {
	this.initialize(img.БезимениРисунок146);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок147 = function() {
	this.initialize(img.БезимениРисунок147);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок148 = function() {
	this.initialize(img.БезимениРисунок148);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок149 = function() {
	this.initialize(img.БезимениРисунок149);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок14_ = function() {
	this.initialize(img.БезимениРисунок14_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок15 = function() {
	this.initialize(img.БезимениРисунок15);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок150 = function() {
	this.initialize(img.БезимениРисунок150);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок151 = function() {
	this.initialize(img.БезимениРисунок151);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок152 = function() {
	this.initialize(img.БезимениРисунок152);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок153 = function() {
	this.initialize(img.БезимениРисунок153);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок154 = function() {
	this.initialize(img.БезимениРисунок154);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок155 = function() {
	this.initialize(img.БезимениРисунок155);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок156 = function() {
	this.initialize(img.БезимениРисунок156);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок157 = function() {
	this.initialize(img.БезимениРисунок157);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок158 = function() {
	this.initialize(img.БезимениРисунок158);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок159 = function() {
	this.initialize(img.БезимениРисунок159);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок15_ = function() {
	this.initialize(img.БезимениРисунок15_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок16 = function() {
	this.initialize(img.БезимениРисунок16);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок160 = function() {
	this.initialize(img.БезимениРисунок160);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок161 = function() {
	this.initialize(img.БезимениРисунок161);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок162 = function() {
	this.initialize(img.БезимениРисунок162);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок163 = function() {
	this.initialize(img.БезимениРисунок163);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок164 = function() {
	this.initialize(img.БезимениРисунок164);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок165 = function() {
	this.initialize(img.БезимениРисунок165);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок166 = function() {
	this.initialize(img.БезимениРисунок166);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок167 = function() {
	this.initialize(img.БезимениРисунок167);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок168 = function() {
	this.initialize(img.БезимениРисунок168);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок169 = function() {
	this.initialize(img.БезимениРисунок169);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок16_ = function() {
	this.initialize(img.БезимениРисунок16_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок17 = function() {
	this.initialize(img.БезимениРисунок17);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок170 = function() {
	this.initialize(img.БезимениРисунок170);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок171 = function() {
	this.initialize(img.БезимениРисунок171);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок172 = function() {
	this.initialize(img.БезимениРисунок172);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок173 = function() {
	this.initialize(img.БезимениРисунок173);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок174 = function() {
	this.initialize(img.БезимениРисунок174);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок175 = function() {
	this.initialize(img.БезимениРисунок175);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок176 = function() {
	this.initialize(img.БезимениРисунок176);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок177 = function() {
	this.initialize(img.БезимениРисунок177);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок178 = function() {
	this.initialize(img.БезимениРисунок178);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок179 = function() {
	this.initialize(img.БезимениРисунок179);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок17_ = function() {
	this.initialize(img.БезимениРисунок17_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок18 = function() {
	this.initialize(img.БезимениРисунок18);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок180 = function() {
	this.initialize(img.БезимениРисунок180);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок181 = function() {
	this.initialize(img.БезимениРисунок181);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок182 = function() {
	this.initialize(img.БезимениРисунок182);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок183 = function() {
	this.initialize(img.БезимениРисунок183);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок184 = function() {
	this.initialize(img.БезимениРисунок184);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок185 = function() {
	this.initialize(img.БезимениРисунок185);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок187 = function() {
	this.initialize(img.БезимениРисунок187);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок18_ = function() {
	this.initialize(img.БезимениРисунок18_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок19 = function() {
	this.initialize(img.БезимениРисунок19);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок19_ = function() {
	this.initialize(img.БезимениРисунок19_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок1_ = function() {
	this.initialize(img.БезимениРисунок1_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок2 = function() {
	this.initialize(img.БезимениРисунок2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок20 = function() {
	this.initialize(img.БезимениРисунок20);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок21 = function() {
	this.initialize(img.БезимениРисунок21);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок22 = function() {
	this.initialize(img.БезимениРисунок22);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок23 = function() {
	this.initialize(img.БезимениРисунок23);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок24 = function() {
	this.initialize(img.БезимениРисунок24);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок25 = function() {
	this.initialize(img.БезимениРисунок25);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок26 = function() {
	this.initialize(img.БезимениРисунок26);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок27 = function() {
	this.initialize(img.БезимениРисунок27);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок28 = function() {
	this.initialize(img.БезимениРисунок28);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок29 = function() {
	this.initialize(img.БезимениРисунок29);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок2_ = function() {
	this.initialize(img.БезимениРисунок2_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок3 = function() {
	this.initialize(img.БезимениРисунок3);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок30 = function() {
	this.initialize(img.БезимениРисунок30);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок31 = function() {
	this.initialize(img.БезимениРисунок31);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок32 = function() {
	this.initialize(img.БезимениРисунок32);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок33 = function() {
	this.initialize(img.БезимениРисунок33);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок34 = function() {
	this.initialize(img.БезимениРисунок34);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок35 = function() {
	this.initialize(img.БезимениРисунок35);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок36 = function() {
	this.initialize(img.БезимениРисунок36);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок37 = function() {
	this.initialize(img.БезимениРисунок37);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок38 = function() {
	this.initialize(img.БезимениРисунок38);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок39 = function() {
	this.initialize(img.БезимениРисунок39);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок3_ = function() {
	this.initialize(img.БезимениРисунок3_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок4 = function() {
	this.initialize(img.БезимениРисунок4);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок40 = function() {
	this.initialize(img.БезимениРисунок40);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок41 = function() {
	this.initialize(img.БезимениРисунок41);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок42 = function() {
	this.initialize(img.БезимениРисунок42);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок43 = function() {
	this.initialize(img.БезимениРисунок43);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок44 = function() {
	this.initialize(img.БезимениРисунок44);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок45 = function() {
	this.initialize(img.БезимениРисунок45);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок46 = function() {
	this.initialize(img.БезимениРисунок46);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок47 = function() {
	this.initialize(img.БезимениРисунок47);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок48 = function() {
	this.initialize(img.БезимениРисунок48);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок49 = function() {
	this.initialize(img.БезимениРисунок49);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок4_ = function() {
	this.initialize(img.БезимениРисунок4_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок5 = function() {
	this.initialize(img.БезимениРисунок5);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок50 = function() {
	this.initialize(img.БезимениРисунок50);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок51 = function() {
	this.initialize(img.БезимениРисунок51);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок52 = function() {
	this.initialize(img.БезимениРисунок52);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок53 = function() {
	this.initialize(img.БезимениРисунок53);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок54 = function() {
	this.initialize(img.БезимениРисунок54);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок55 = function() {
	this.initialize(img.БезимениРисунок55);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок56 = function() {
	this.initialize(img.БезимениРисунок56);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок57 = function() {
	this.initialize(img.БезимениРисунок57);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок58 = function() {
	this.initialize(img.БезимениРисунок58);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок59 = function() {
	this.initialize(img.БезимениРисунок59);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок5_ = function() {
	this.initialize(img.БезимениРисунок5_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок6 = function() {
	this.initialize(img.БезимениРисунок6);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок61 = function() {
	this.initialize(img.БезимениРисунок61);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок62 = function() {
	this.initialize(img.БезимениРисунок62);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок63 = function() {
	this.initialize(img.БезимениРисунок63);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок64 = function() {
	this.initialize(img.БезимениРисунок64);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок65 = function() {
	this.initialize(img.БезимениРисунок65);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок66 = function() {
	this.initialize(img.БезимениРисунок66);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок67 = function() {
	this.initialize(img.БезимениРисунок67);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок68 = function() {
	this.initialize(img.БезимениРисунок68);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок69 = function() {
	this.initialize(img.БезимениРисунок69);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок6_ = function() {
	this.initialize(img.БезимениРисунок6_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок7 = function() {
	this.initialize(img.БезимениРисунок7);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок70 = function() {
	this.initialize(img.БезимениРисунок70);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок71 = function() {
	this.initialize(img.БезимениРисунок71);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок72 = function() {
	this.initialize(img.БезимениРисунок72);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок73 = function() {
	this.initialize(img.БезимениРисунок73);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок74 = function() {
	this.initialize(img.БезимениРисунок74);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок75 = function() {
	this.initialize(img.БезимениРисунок75);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок76 = function() {
	this.initialize(img.БезимениРисунок76);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок77 = function() {
	this.initialize(img.БезимениРисунок77);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок78 = function() {
	this.initialize(img.БезимениРисунок78);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок79 = function() {
	this.initialize(img.БезимениРисунок79);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок7_ = function() {
	this.initialize(img.БезимениРисунок7_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок8 = function() {
	this.initialize(img.БезимениРисунок8);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок80 = function() {
	this.initialize(img.БезимениРисунок80);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок81 = function() {
	this.initialize(img.БезимениРисунок81);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок82 = function() {
	this.initialize(img.БезимениРисунок82);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок83 = function() {
	this.initialize(img.БезимениРисунок83);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок84 = function() {
	this.initialize(img.БезимениРисунок84);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок85 = function() {
	this.initialize(img.БезимениРисунок85);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок86 = function() {
	this.initialize(img.БезимениРисунок86);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок87 = function() {
	this.initialize(img.БезимениРисунок87);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок88 = function() {
	this.initialize(img.БезимениРисунок88);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок89 = function() {
	this.initialize(img.БезимениРисунок89);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок8_ = function() {
	this.initialize(img.БезимениРисунок8_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок9 = function() {
	this.initialize(img.БезимениРисунок9);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок90 = function() {
	this.initialize(img.БезимениРисунок90);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок91 = function() {
	this.initialize(img.БезимениРисунок91);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок92 = function() {
	this.initialize(img.БезимениРисунок92);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок93 = function() {
	this.initialize(img.БезимениРисунок93);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок94 = function() {
	this.initialize(img.БезимениРисунок94);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок95 = function() {
	this.initialize(img.БезимениРисунок95);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок96 = function() {
	this.initialize(img.БезимениРисунок96);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок97 = function() {
	this.initialize(img.БезимениРисунок97);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок99 = function() {
	this.initialize(img.БезимениРисунок99);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок9_ = function() {
	this.initialize(img.БезимениРисунок9_);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.БезимениРисунок98 = function() {
	this.initialize(img.БезимениРисунок98);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1000,685);


(lib.Hyundailogosilver2560x14401 = function() {
	this.initialize(img.Hyundailogosilver2560x14401);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,96);


(lib.LogoMetro = function() {
	this.initialize(img.LogoMetro);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,55);


(lib.logo = function() {
	this.initialize(img.logo);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,64);


(lib.LUK_OIL_Logo_latsvg = function() {
	this.initialize(img.LUK_OIL_Logo_latsvg);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,42);


(lib.pyaterochkalogo = function() {
	this.initialize(img.pyaterochkalogo);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,75);


(lib.shell = function() {
	this.initialize(img.shell);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,150,46);// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.копияСимвол39копия4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AAIA0IgIgfQgCgJgDgDQgDgCgHABIgKAsIgbAAIAWhnIAbAAIgJAsQAIAAADgDQADgDAGgJQALgUAGgEQAGgFAPAAIAHAAIgEATIgDAAQgEAAgCACIgGAHQgJAPgFADQgEADgGACQAKABAFAQIAKAjg");
	this.shape.setTransform(108,42.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("AgfAxQgLgHgFgKQgGgLAAgNQAAgbAQgRQARgRAZgBQAXAAANANQANANAAAVQAAAYgQATQgQASgaAAQgPAAgMgFgAgKgbQgHAGgEALQgEAKAAAIQAAALAGAHQAGAGAKABQAKAAAIgKQALgPAAgSQAAgKgGgHQgFgFgKgBQgIAAgHAGg");
	this.shape_1.setTransform(96.3,42.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#000000").s().p("AAIA0IAKgsIgmAAIgJAsIgcAAIAWhnIAcAAIgIAnIAlAAIAJgnIAbAAIgWBng");
	this.shape_2.setTransform(84.1,42.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("AAhA0IAWhnIAcAAIgWBngAhSA0IAWhnIAcAAIgJArIAgAAQAQAAAJAHQAIAFAAANQAAAPgKALQgLAJgUAAgAgzAiIAVAAQAPAAAGgDQAGgEAAgHQAAgGgGgEQgFgCgQAAIgPAAg");
	this.shape_3.setTransform(69.5,42.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#000000").s().p("Ag8BJIAeiOIAaAAIgCAKQAIgHAHgDQAIgDAIAAQARAAAKALQAJALAAAXQAAAbgRAUQgOAQgVAAQgTAAgLgRIgLA2gAAAgvQgGAHgEAKQgDALAAAJQAAALAGAHQAGAHAHgBQAHAAAGgEQAHgGAEgKQAEgMAAgKQAAgMgGgGQgFgGgJAAQgIAAgGAFg");
	this.shape_4.setTransform(54.1,44.3);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("AgvBDQgHgIAAgMQAAgFADgQIAMg5IAdAAIgNA8IgDAOQAAAFAEADQADADAFAAIAIgBIAGgFIAHgGIAGgKIAEgPIAKgwIAcAAIgWBnIgaAAIADgOQgQAQgVAAQgMAAgIgHgAgJg0QgHgHgCgOIANAAQADAIADADQADADAGAAQAMAAAHgOIANAAQgEANgJAIQgJAHgLAAQgKAAgIgHg");
	this.shape_5.setTransform(144.3,17.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#000000").s().p("AgvAuQgHgIAAgMQAAgFADgQIAMg5IAdAAIgNA8IgDAOQAAAFAEADQADADAFAAIAIgBIAGgFIAHgGIAGgKIAEgOIAKgxIAcAAIgWBnIgaAAIADgOQgQAQgVAAQgMAAgIgHg");
	this.shape_6.setTransform(132,19.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#000000").s().p("AAIA0IgIgfQgCgJgDgCQgDgDgHAAIgKAtIgbAAIAWhnIAbAAIgJAsQAIAAADgDQADgCAGgKQALgUAGgFQAGgEAPAAIAHAAIgEATIgDAAQgEAAgCABIgGAIQgJAOgFAEQgEAEgGABQAKABAFAQIAKAjg");
	this.shape_7.setTransform(121,19.4);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#000000").s().p("AgmAqQgMgLAAgVQAAgQAHgPQAHgQAPgIQAOgJAQAAQASAAALAKQALAKACAPIgbADQgBgIgEgFQgFgEgHAAQgHAAgHAGQgHAHgEALQgEAMAAAKQAAAJAFAGQAEAEAHAAQAGAAAGgEQAGgGAEgJIAbAEQgGASgOAKQgNAKgQAAQgUAAgMgNg");
	this.shape_8.setTransform(110,19.4);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#000000").s().p("AgmAqQgMgLABgWQgBgaARgSQAQgSAdgBQAWAAAIAJQAIAIAAALQABAKgHAGQgFAHgMADQAKADAFAFQAFAGAAAJQAAAMgMAKQgMAKgZAAQgXAAgNgNgAgSAcQAFAGAOAAQAJAAAFgDQAFgDAAgGQgBgGgEgEQgGgEgHAAIgZAAQAAAMAFAIgAgMgbQgHAGgDAOIAVAAQAPAAAGgEQAFgEAAgHQAAgGgDgDQgFgCgIAAQgMAAgJAGg");
	this.shape_9.setTransform(98.5,19.4);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#000000").s().p("AgkApQgNgNAAgWQAAgUAMgRQAQgWAdgBQAUAAALAMQALAMAAAVQAAAKgCAHIhFAAIAAADQgBALAGAGQAGAHAIgBQAOAAAHgOIAaAEQgIAPgMAIQgMAIgPAAQgVAAgNgOgAgKgbQgGAGgDAOIArAAIAAgEQAAgLgFgGQgFgGgJABQgHgBgIAHg");
	this.shape_10.setTransform(87.1,19.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#000000").s().p("AAlA0IgJgfQgCgIgDgDQgCgDgHAAIgKAtIgaAAIAKgtQgFAAgDACQgCABgFAHIgXAjIgfAAIAagkQAHgJAEgEQAFgDAGAAQgFgGgCgEIgDgLQgBgKgCgCQgBgCgFgBIgGAAIAEgPIAJAAQAHAAAHADQAGAEADAUQACALADADQADACAFABIAJgsIAbAAIgKAsQAHAAAFgEQAFgEAFgNQAHgOAGgFQAGgEALAAIANAAIgEAPIgEAAQgEABgCACIgHAMQgFAKgFAEQgFAFgIACQALACAEAPIAKAjg");
	this.shape_11.setTransform(73.8,19.4);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#000000").s().p("Ag9BGIADgVIAKABQANAAAIgTIgShnIAcAAIAHAzIADAcQAFgPAJgSIAZguIAdAAIg/BxQgIAOgEAGQgFAGgGADQgHADgIAAQgKAAgLgDg");
	this.shape_12.setTransform(61,21.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#000000").s().p("AAoA1IANg+IACgOQAAgEgCgDQgDgCgFAAQgLAAgIALQgGAIgEATIgKAvIgbAAIANg+IACgOQAAgEgCgDQgDgCgFAAQgFAAgFACQgFADgDAFQgEAFgDAHIgDAPIgKAwIgdAAIAWhnIAbAAIgDANQAQgPARAAQAKAAAHAEQAGAFACAJQAFgIAKgFQALgFAKAAQANAAAHAGQAHAHAAALIgDATIgNA+g");
	this.shape_13.setTransform(46.4,19.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#000000").s().p("AgmAqQgMgLAAgVQAAgQAHgPQAHgQAPgIQAOgJAQAAQASAAALAKQALAKACAPIgbADQgBgIgEgFQgFgEgHAAQgHAAgHAGQgHAHgEALQgEAMAAAKQAAAJAFAGQAEAEAHAAQAGAAAGgEQAGgGAEgJIAbAEQgGASgOAKQgNAKgQAAQgUAAgMgNg");
	this.shape_14.setTransform(32.4,19.4);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#000000").s().p("AgsBCQgNgJgGgOQgGgNAAgPQAAgMAEgOQAFgSAKgOQALgOAPgIQAQgIASgBQAbABARARQAQAQAAAbQAAAWgKAWQgLAUgTAMQgSAMgWAAQgUgBgOgIgAgagdQgOAVAAAXQABAPAIAKQAJAKAPAAQALAAALgIQALgIAIgQQAGgQAAgOQAAgRgJgKQgIgJgPAAQgUAAgOATg");
	this.shape_15.setTransform(19.3,17.4);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("#000000").ss(3,1,1).p("ALxkaQAAiWiWAAI0dAAQiWAAAACWIAAEnQAACWCWAAIKNAAIOOEOIj+kOQCWAAAAiWg");
	this.shape_16.setTransform(85.7,43.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#CCCCCC").s().p("Ag1CiIqNAAQiWABAAiXIAAklQAAiWCWgBIUdAAQCWABAACWIAAElQAACXiWgBID+EOg");
	this.shape_17.setTransform(85.7,43.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.копияСимвол39копия4, new cjs.Rectangle(-1.5,-1.5,174.4,89.5), null);


(lib.копияСимвол39копия3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.logo();
	this.instance.parent = this;
	this.instance.setTransform(150,54,1,1,180);

	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(3,1,1).p("AMKmIQAAiWiWAAI2BAAQiWAAAACWIAAHHQAACWCWAAILxAAIPAFKIkwlKQCWAAAAiWg");
	this.shape.setTransform(83.2,38.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCCCCC").s().p("AgcDUIrxAAQiWABAAiXIAAnFQAAiWCWgBIWBAAQCWABAACWIAAHFQAACXiWgBIEwFLg");
	this.shape_1.setTransform(83.2,38.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.копияСимвол39копия3, new cjs.Rectangle(-11.5,-17.5,189.4,111.5), null);


(lib.копияСимвол39копия2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.LogoMetro();
	this.instance.parent = this;
	this.instance.setTransform(159,57.5,0.9,0.9,180);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AAAAaIAFgZIALgaIAUAAIgBAaIgFAZgAgjAaIAGgZIAKgaIATAAIAAAaIgFAZg");
	this.shape.setTransform(39.3,23.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgoAqQgNgNAAgVQAAgYAQgTQAQgSAaAAQAPAAAMAFQALAHAFAKQAGALAAANQAAAbgQASQgRAQgZABQgXAAgNgNgAgOgWQgLAPAAASQAAAKAGAHQAFAFAKABQAIAAAHgGQAHgGAEgLQAEgKAAgIQAAgLgGgHQgGgGgKgBQgKAAgIAKg");
	this.shape_1.setTransform(51.6,16.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgzA+QgJgLAAgXQAAgcARgTQAOgQAVAAQATAAALARIALg2IAcAAIgeCOIgaAAIACgKQgIAHgHADQgIADgIAAQgRAAgKgLgAgSgJQgHAGgEAKQgEAMAAAKQAAAMAGAGQAFAGAJAAQAIAAAFgFQAHgHAEgKQADgLAAgJQAAgLgGgHQgGgHgHABQgHAAgGAEg");
	this.shape_2.setTransform(64.4,14.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgMAxQgGgFgCgJQgFAIgKAFQgLAFgKAAQgNAAgHgGQgHgHAAgLIADgTIANg+IAcAAIgNA+IgCAOQAAAEACADQADACAFAAQALAAAIgLQAGgIAEgTIAKgvIAbAAIgNA+IgCAOQAAAEACADQADACAFAAQAFAAAFgCQAFgDADgFQAEgFADgHIADgPIAKgwIAdAAIgWBnIgbAAIADgNQgQAPgRAAQgKAAgHgEg");
	this.shape_3.setTransform(79.3,16.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgmArQgLgMAAgVQAAgKACgHIBFAAIAAgDQABgKgGgHQgGgGgJAAQgNgBgHAPIgagEQAIgPAMgIQAMgHAOAAQAWAAANANQANANAAAWQAAAUgMARQgQAXgdAAQgUAAgLgMgAgXALQAAAMAFAGQAFAGAJAAQAHAAAIgHQAGgGADgNIgrAAIAAACg");
	this.shape_4.setTransform(93.4,16.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AAMBIIgFhkIgwBkIgqAAIAeiPIAbAAIgdB2IA4h2IAcAAIAGB3IAWh3IAbAAIgeCPg");
	this.shape_5.setTransform(107,18.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AAAAaIAFgZIALgaIAUAAIgBAaIgFAZgAgjAaIAGgZIAKgaIATAAIAAAaIgFAZg");
	this.shape_6.setTransform(119.2,23.1);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAIA0IAIgmIglAAIgJAmIgbAAIAWhnIAcAAIgKAsIAmAAIAJgsIAcAAIgWBng");
	this.shape_7.setTransform(44.5,39.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AALA1IANg8IADgOQAAgFgEgDQgDgDgFAAIgIABIgHAFIgGAGIgGAKIgEAOIgKAxIgcAAIAWhnIAaAAIgDAOQAQgQAVAAQAMAAAIAHQAHAIAAAMQAAAFgDAQIgMA5g");
	this.shape_8.setTransform(56.4,39.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgmAvQgJgIAAgNQAAgJAHgHQAHgHAJgCQgJgBgFgGQgFgHAAgIQAAgNALgJQALgLAYAAQAlAAAIAeIgbACQgFgOgPAAQgGAAgFAFQgFADAAAHQAAAHAFADQAFADAKABIgDAPIgNACQgEAAgDAEQgEAEAAAFQAAAGAEADQAFAEAFAAQAKAAAHgMIAXAEQgKAbggAAQgTgBgJgHg");
	this.shape_9.setTransform(68.5,39.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgmAvQgKgJAAgLIABgKIAFgbQAFgTAAgHQAAgHgCgIIAbAAQACAGAAAGQAGgHAHgEQAIgEAIAAQANAAAJAJQAIAJAAANQAAAPgJAIQgJAJgYACQgUABgGACIgCAKQAAAFADADQAEACAHAAQAHAAAEgCQAEgEACgGIAbADQgEAOgMAIQgMAIgSAAQgUgBgJgHgAgBgeQgGAEgDAEQgDAFgCALIgBADIAHgBQAUgCAHgFQAFgEAAgGQAAgEgEgEQgDgEgHABQgGAAgEACg");
	this.shape_10.setTransform(78.9,39.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AgmAuQgJgJgBgMQABgNAIgIQAKgGAZgFQARgFAFgCQAEgDAAgFQAAgFgEgDQgFgDgIAAQgSAAgEAPIgbgEQAEgQANgIQAMgIAVAAQAWAAAKALQAKAJAAAMQAAAIgEAHQgEAGgHADQgHADgUAFQgTAEgEADQgFADAAAGQAAAEADACQAEACAIAAQANAAAFgMIAYAFQgJAcgeAAQgXAAgLgJg");
	this.shape_11.setTransform(89.7,39.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AgmAvQgKgJAAgLIABgKIAFgbQAFgTAAgHQAAgHgCgIIAbAAQACAGAAAGQAGgHAHgEQAIgEAIAAQANAAAJAJQAIAJAAANQAAAPgJAIQgJAJgYACQgUABgGACIgCAKQAAAFADADQAEACAHAAQAHAAAEgCQAEgEACgGIAbADQgEAOgMAIQgMAIgSAAQgUgBgJgHgAgBgeQgGAEgDAEQgDAFgCALIgBADIAHgBQAUgCAHgFQAFgEAAgGQAAgEgEgEQgDgEgHABQgGAAgEACg");
	this.shape_12.setTransform(100.5,39.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AAMBIIgFhkIgwBkIgqAAIAeiPIAbAAIgdB2IA4h2IAcAAIAGB3IAWh3IAbAAIgeCPg");
	this.shape_13.setTransform(114.1,41.6);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("#000000").ss(3,1,1).p("AJjmtI1jAAIAAIRIJCAAIO/FKIkvlKICRAAg");
	this.shape_14.setTransform(99.4,49.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#013E77").s().p("Ai+BkIpCAAIAAoRIVjAAIAAIRIiRAAIEvFKg");
	this.shape_15.setTransform(99.4,49.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.копияСимвол39копия2, new cjs.Rectangle(21,5,156.9,89), null);


(lib.копияСимвол39копия = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.shell();
	this.instance.parent = this;
	this.instance.setTransform(197.5,13,0.49,0.49,0,0,180);

	this.instance_1 = new lib.LUK_OIL_Logo_latsvg();
	this.instance_1.parent = this;
	this.instance_1.setTransform(119.5,15,0.49,0.49,0,0,180);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AgeA+QgSgNgJgYIAegFQAFAPAJAIQAKAGAKABQAMgBAJgIQAJgKAAgRQAAgPgHgQQgGgQgLgHQgKgIgMAAQgLAAgHAGQgHAFgCANIgdgDQADgWAOgMQAPgNAXABQAUgBASALQARALALAVQAJAUABAYQgBAegPAQQgPAPgZAAQgXAAgRgMg");
	this.shape.setTransform(109.8,2.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("AgjA9QgQgNgBgRQABgLAFgHQAGgJAKgEQgQgEgHgJQgIgKAAgMQABgSAPgKQAOgKAVAAQAPAAAPAIQAPAIAHATIgcAHQgGgSgSABQgIAAgGADQgGAFAAAHQAAAJAHAFQAHAGAKAAIAKgBIAFAYIgHgBQgJAAgHAGQgIAEABAJQAAALAJAFQAIAHALAAQALAAAHgHQAHgFABgJIAdAJQgJAkgugBQgbAAgPgNg");
	this.shape_1.setTransform(123.8,2.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#000000").s().p("AAnBIIgSggIg4AAIgFAgIgcAAIAYiPIAgAAIBRCPgAALAQIgig4IgIA4IAqAAg");
	this.shape_2.setTransform(137.8,2.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#000000").ss(3,1,1).p("AILiTQAAiWiWAAI0eAAQiWAAAACWIAAEnQAACWCWAAIUeAAQCWAAAAiWII1hOg");
	this.shape_3.setTransform(148.8,15.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#CCCCCC").s().p("AupEqQiWAAAAiWIAAknQAAiWCWAAIUeAAQCVAAAACWII1DZIo1BOQAACWiVAAg");
	this.shape_4.setTransform(148.8,15.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.копияСимвол39копия, new cjs.Rectangle(38.5,-15.5,220.5,62.5), null);


(lib.копияСимвол39 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.pyaterochkalogo();
	this.instance.parent = this;
	this.instance.setTransform(-11,67,1,1,0,180,0);

	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(3,1,1).p("AIanOQAAiWiWAAI2VAAQiWAAAACWIAAEnQAACWCWAAIMFAAIW0J2Iskp2QCWAAAAiWg");
	this.shape.setTransform(97.2,61.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#CCCCCC").s().p("AkMgRIsFAAQiWABAAiXIAAkmQAAiWCWgBIWVAAQCWABAACWIAAEmQAACXiWgBIMkJ1g");
	this.shape_1.setTransform(97.2,61.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.копияСимвол39, new cjs.Rectangle(-23.5,-8,241.4,132), null);


(lib.Символ39 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.Hyundailogosilver2560x14401();
	this.instance.parent = this;
	this.instance.setTransform(18,-50,0.827,0.827);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgcAwQgHgHgBgNIAUgBQAAAGADADQACACAEAAQAGAAADgEQAGgGADgOQgGAFgHAAQgNAAgIgJQgIgIAAgOQAAgQALgNQAKgNAQAAQAPAAAIALQAIALAAATQAAAcgMAUQgNAUgUAAQgNAAgHgHgAgEgfQgGAHAAANQAAAJADADQADAEAEAAQAEAAAEgDQAEgCADgHQACgHAAgHQAAgIgDgEQgEgEgFAAQgFAAgEAGg");
	this.shape.setTransform(151,44.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AgaAvQgJgIgDgOIAVgCQABAIADAEQADADAGAAQAGAAAFgFQAFgFAAgHQAAgHgEgEQgEgEgGAAIgDABIAEgRIABAAQAIAAAFgEQAFgFAAgHQAAgFgEgDQgCgDgGAAQgEAAgCADQgEAEgCAIIgTgEQADgMAHgHQAKgJANAAQAPAAAHAIQAJAIgBAMQABAIgGAHQgEAHgJADQAHADADAFQADAGAAAGQABAMgJAKQgMAOgRAAQgOAAgIgIg");
	this.shape_1.setTransform(142.9,44.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgMAMQAFgBADgDQADgDABgGIgJAAIAEgUIAUAAIgDARQgDANgHAHQgGAFgKABg");
	this.shape_2.setTransform(132.2,49.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgjAyQgGgFAAgKIADgQIAJgqIAWAAIgKAtIgCAKQAAAEACACQADADAEAAIAFgCIAFgDIAFgFIAFgHIACgLIAIgkIAWAAIgRBNIgTAAIACgLQgMANgPAAQgKAAgGgGgAgHgnQgFgFgCgLIALAAQACAGACADQACACAFAAQAIAAAGgLIAJAAQgDAKgGAGQgHAGgIAAQgIAAgGgGg");
	this.shape_3.setTransform(126.9,44.1);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AgbAfQgJgKAAgQQAAgQAIgMQANgRAVAAQAOAAAJAJQAIAJAAAPQAAAHgBAHIg0AAIAAABQAAAIAEAFQAFAFAGAAQAKAAAGgLIASADQgFAMgJAFQgKAGgKAAQgQAAgKgKgAgHgUQgFAFgCAJIAgAAIAAgCQAAgIgEgEQgEgFgGAAQgGAAgFAFg");
	this.shape_4.setTransform(118.2,45.6);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("AgwAmIACgRIAIABQAFAAADgEQACgEADgKIAJgrIBBAAIgRBNIgUAAIANg8IgaAAIgJAnQgCANgGAEQgGAGgLAAQgFAAgIgCg");
	this.shape_5.setTransform(109.4,45.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AgbAfQgJgKAAgQQAAgQAIgMQANgRAVAAQAOAAAJAJQAIAJAAAPQAAAHgBAHIg0AAIAAABQAAAIAEAFQAFAFAGAAQAKAAAGgLIASADQgFAMgJAFQgKAGgKAAQgQAAgKgKgAgHgUQgFAFgCAJIAgAAIAAgCQAAgIgEgEQgEgFgGAAQgGAAgFAFg");
	this.shape_6.setTransform(101.2,45.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AAdAoIAKgvIACgKQAAgDgCgCQgCgCgDAAQgIAAgHAIQgEAGgDAPIgIAjIgUAAIAKguIACgLQAAgDgCgCQgCgCgEAAQgEAAgDACQgEACgDAEIgEAJIgDALIgIAkIgVAAIAQhNIAUAAIgCAKQAMgMANAAQAIAAAEADQAFAEABAHQAFgGAHgEQAIgEAIAAQAJAAAFAFQAGAFAAAJIgCANIgKAvg");
	this.shape_7.setTransform(90.5,45.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AgeAiQgGgGAAgKQAAgLAHgHQAHgGASgBQAOgBAFgCIABgHQAAgEgCgBQgDgDgGAAQgFAAgCADQgEABgBAFIgVgCQAEgKAJgGQAJgGANAAQAPAAAHAGQAIAGAAAJIgBAIIgEATQgDAOAAAGIABALIgUAAIgCgJQgEAFgFADQgGADgHAAQgJAAgHgHgAAHAEQgPABgFAEQgDADAAAEQAAAEADADQACACAFAAQAEAAAEgCQAEgCACgEIAEgLIAAgEIgFACg");
	this.shape_8.setTransform(80,45.6);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AAGAnIgGgXQgBgHgCgCQgCgBgGAAIgIAhIgUAAIARhNIAUAAIgHAhQAGAAADgCQACgCAEgIQAIgPAFgDQAEgDALAAIAGAAIgDAOIgDAAIgEACIgEAFQgHALgEADQgDACgFABQAJABACAMIAIAag");
	this.shape_9.setTransform(72.7,45.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("AgcAgQgJgJAAgQQAAgMAFgLQAGgLAKgHQALgGAMAAQAOAAAIAHQAIAHABAMIgUADQgBgHgDgDQgDgEgFAAQgGAAgFAFQgGAFgCAJQgDAIAAAIQAAAHADADQAEAFAFAAQAEAAAEgFQAGgDACgIIAVAEQgGANgJAIQgLAHgMAAQgOAAgJgJg");
	this.shape_10.setTransform(64.8,45.6);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AAZAnIARhNIAVAAIgRBNgAg+AnIARhNIAVAAIgHAgIAYAAQAMAAAHAFQAGAEAAAKQAAALgIAIQgIAHgPAAgAglAaIAOAAQAMAAAEgDQAFgCAAgGQAAgFgEgCQgFgCgLAAIgMAAg");
	this.shape_11.setTransform(54.4,45.6);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AgjATIAUgCQAEAKALAAQAFAAADgCQAEgEAAgFQAAgFgEgCQgDgDgHABIABgNIAKAAQADgBACgDQADgCAAgFQAAgDgDgEQgDgCgFAAQgHAAgFAJIgRgDQAIgUAXAAQAOAAAHAGQAHAGAAAJQAAAIgFAEQgFAGgHABQAGAAAEAGQAEAFAAAFQAAAKgIAIQgJAHgRAAQgcAAgGgWg");
	this.shape_12.setTransform(44,45.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AALA2IAOhDIg6BDIgUAAIAXhrIAUAAIgOBCIA6hCIAUAAIgWBrg");
	this.shape_13.setTransform(35.8,44.1);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AgMAKIAFgTIAUAAIgFATg");
	this.shape_14.setTransform(23.9,48.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFFFFF").s().p("AgxAmIADgRIAIABQAFAAADgEQACgEADgKIAJgrIBBAAIgRBNIgUAAIANg8IgaAAIgJAnQgCANgGAEQgGAGgLAAQgFAAgJgCg");
	this.shape_15.setTransform(17.6,45.7);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFFFFF").s().p("AgtA1IACgQIAHABQAKAAAGgPIgOhNIAVAAIAGAnIACAUQAEgLAGgNIATgjIAWAAIgvBVQgGALgDAEQgEAEgFADQgEACgHAAQgHAAgIgCg");
	this.shape_16.setTransform(9.6,47.2);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("#000000").ss(3,1,1).p("Aw5paIAANrQAACWCWAAIKNAAIVQFKIrAlKQCWAAAAiWIAAtrQAAiWiWAAI0dAAQiWAAAACWg");
	this.shape_17.setTransform(108.2,17.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#0066CC").s().p("AkWGmIqNAAQiWABAAiXIAAtqQAAiVCWAAIUdAAQCWAAAACVIAANqQAACXiWgBILAFLg");
	this.shape_18.setTransform(108.2,17.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance}]}).wait(1));

	// Слой 3
	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#000099").s().p("AgmDCIgKgzIhNABIgmkMIAbhGIAoEjIABAAIBPgBIAJA0IABAAIBsgDIggAvIhsADgABdBdIBHgBIgfAvIgeABg");
	this.shape_19.setTransform(215.6,94.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_19).wait(1));

	// Слой 2
	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#0066CC").s().p("AgfB1IhQABIgmkeIC3AAIAPBdIBCACIAjC7IhGAAIAJA0IhuADg");
	this.shape_20.setTransform(217.1,92.6);

	this.timeline.addTween(cjs.Tween.get(this.shape_20).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ39, new cjs.Rectangle(-1.5,-59.5,233.6,173.7), null);


(lib.Символ26 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок11_();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ26, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ25 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок10_();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ25, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ24 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок9_();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ24, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ23 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок8_();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ23, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ22 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок1_();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ22, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ21 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок187();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ21, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок117();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ20, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ19 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок118();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ19, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ18 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок119();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ18, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ17 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок120();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ17, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок121();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ16, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок122();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ15, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AiyBXIAAitIFlAAIAACtg");
	mask.setTransform(21.6,-203.9);

	// Слой 1
	this.instance = new lib.БезимениРисунок123();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ14, new cjs.Rectangle(3.7,-212.7,35.8,17.5), null);


(lib.Символ10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AiyBjIAAjFIFlAAIAADFg");
	mask.setTransform(172.4,-202.3);

	// Слой 1
	this.instance = new lib.БезимениРисунок127();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ10, new cjs.Rectangle(154.6,-212.1,35.8,19.8), null);


(lib.Символ9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AipBiIAAjDIFTAAIAADDg");
	mask.setTransform(175.2,-205.7);

	// Слой 1
	this.instance = new lib.БезимениРисунок130();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ9, new cjs.Rectangle(158.2,-215.5,34,19.7), null);


(lib.Символ8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Ai4EQIAAofIFxAAIAAIfg");
	mask.setTransform(367.5,257.7);

	// Слой 1
	this.instance = new lib.БезимениРисунок185();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ8, new cjs.Rectangle(349,230.5,37,54.5), null);


(lib.Символ7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AiVCJIAAkRIErAAIAAERg");
	mask.setTransform(-363.5,-246.5);

	// Слой 1
	this.instance = new lib.БезимениРисунок79();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ7, new cjs.Rectangle(-378.5,-260.3,30,27.5), null);


(lib.Символ6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок1();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ6, new cjs.Rectangle(-500,-342.5,1000,685), null);


(lib.Символ5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AkIB4IAAjvIIRAAIAADvg");
	mask.setTransform(-45.5,228.5);

	// Слой 1
	this.instance = new lib.БезимениРисунок20();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ5, new cjs.Rectangle(-72,216.5,53,24), null);


(lib.Символ4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Ah8DwIAAnfID5AAIAAHfg");
	mask.setTransform(-83.5,189.5);

	// Слой 1
	this.instance = new lib.БезимениРисунок38();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ4, new cjs.Rectangle(-96,165.5,25,48), null);


(lib.Символ3копия3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AoUozIAAjoIFwAAIAADog");
	mask.setTransform(-53.3,-79.6);

	// Слой 1
	this.instance = new lib.БезимениРисунок55();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ3копия3, new cjs.Rectangle(-106.5,-159.2,36.8,23.3), null);


(lib.Символ3копия2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AtVpYIAAjoIFwAAIAADog");
	mask.setTransform(-85.4,-83.3);

	// Слой 1
	this.instance = new lib.БезимениРисунок56();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ3копия2, new cjs.Rectangle(-170.8,-166.7,36.8,23.3), null);


(lib.Символ3копия = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AyFqXIAAjoIFwAAIAADog");
	mask.setTransform(-115.8,-89.6);

	// Слой 1
	this.instance = new lib.БезимениРисунок57();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ3копия, new cjs.Rectangle(-231.5,-179.2,36.8,23.3), null);


(lib.Символ3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("Ai3B0IAAjnIFvAAIAADng");
	mask.setTransform(-270.2,-183.8);

	// Слой 1
	this.instance = new lib.БезимениРисунок58();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ3, new cjs.Rectangle(-288.5,-195.4,36.8,23.3), null);


(lib.Символ2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AisB3IAAjtIFYAAIAADtg");
	mask.setTransform(-322.9,-202.6);

	// Слой 1
	this.instance = new lib.БезимениРисунок59();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ2, new cjs.Rectangle(-340.2,-214.4,34.5,23.8), null);


(lib.Символ1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 2 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AipB9IAAj5IFTAAIAAD5g");
	mask.setTransform(-367.9,-270.9);

	// Слой 1
	this.instance = new lib.БезимениРисунок97();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Символ1, new cjs.Rectangle(-384.9,-283.4,34,25), null);


(lib.Анимация5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок124();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-500,-342.5,1000,685);


(lib.Анимация4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок124();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-500,-342.5,1000,685);


(lib.Анимация3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок124();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-500,-342.5,1000,685);


(lib.Анимация2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 1
	this.instance = new lib.БезимениРисунок129();
	this.instance.parent = this;
	this.instance.setTransform(-500,-342.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-500,-342.5,1000,685);


// stage content:
(lib.Безымянный1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Слой 11
	this.instance = new lib.копияСимвол39копия4();
	this.instance.parent = this;
	this.instance.setTransform(533.1,53.7,1,1,0,0,0,108.2,46.3);

	this.instance_1 = new lib.копияСимвол39копия3();
	this.instance_1.parent = this;
	this.instance_1.setTransform(583,219.6,1,1,180,0,0,108.2,46.3);

	this.instance_2 = new lib.копияСимвол39копия();
	this.instance_2.parent = this;
	this.instance_2.setTransform(341,67.7,1,1,0,0,180,108.2,46.3);

	this.instance_3 = new lib.копияСимвол39копия2();
	this.instance_3.parent = this;
	this.instance_3.setTransform(151,192.6,1,1,180,0,0,108.2,46.3);

	this.instance_4 = new lib.копияСимвол39();
	this.instance_4.parent = this;
	this.instance_4.setTransform(349.6,597.9,1,1,0,180,0,108.2,46.3);

	this.instance_5 = new lib.Символ39();
	this.instance_5.parent = this;
	this.instance_5.setTransform(619.1,479.8,1,1,0,0,0,108.2,46.3);

	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AAAgnQgQAAgMgMQgLgLAAgRQAAgQALgMQAMgMAQAAQAQAAAMAMQAMAMAAAQQAAARgMALQgLAMgQAAgAABgnQAEAAAEABQALADAIAIQAMAMAAAPQAAARgMALQgIAIgJADQgEABgGAAQADAAADABQAEAAAFACQAHADAFAGQAMAMAAAQQAAARgMALQgMAMgQAAQgQAAgMgMQgLgLAAgRQAAgQALgMQAGgGAHgDQAEgCAFAAQADgBACAAQgFAAgEgBQgKgDgIgIQgLgLAAgRQAAgPALgMQAJgIALgDQAEgBAEAA");
	this.shape.setTransform(163.1,58.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#00FF00").s().p("AgcAcQgLgMAAgQQAAgQALgMQAGgFAHgDQAFgCAEgBIANAAIAJADQAGADAGAFQAMAMAAAQQAAAQgMAMQgMAMgQAAQgQAAgMgMg");
	this.shape_1.setTransform(163.1,66.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFF00").s().p("AgGAoIAFAAQgFAAgEgCQgJgCgJgIQgLgMAAgQQAAgQALgMQAJgIALgCIAIgBIABAAIAIABQALACAIAIQAMAMAAAQQAAAQgMAMQgHAIgKACQgEACgGAAIAGAAg");
	this.shape_2.setTransform(163.1,58.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FF0000").s().p("AAAAoQgQAAgMgMQgLgMAAgQQAAgPALgNQAMgLAQAAQAQAAAMALQAMANAAAPQAAAQgMAMQgLAMgQAAg");
	this.shape_3.setTransform(163.1,50.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_5},{t:this.instance_4},{t:this.instance_3},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).wait(2325));

	// Слой 3 - копия: 2
	this.instance_6 = new lib.Символ22();
	this.instance_6.parent = this;
	this.instance_6.setTransform(495.5,306.5);
	this.instance_6._off = true;

	this.instance_7 = new lib.БезимениРисунок2_();
	this.instance_7.parent = this;
	this.instance_7.setTransform(3,1);

	this.instance_8 = new lib.БезимениРисунок3_();
	this.instance_8.parent = this;
	this.instance_8.setTransform(3,1);

	this.instance_9 = new lib.БезимениРисунок4_();
	this.instance_9.parent = this;
	this.instance_9.setTransform(3,1);

	this.instance_10 = new lib.БезимениРисунок5_();
	this.instance_10.parent = this;
	this.instance_10.setTransform(3,1);

	this.instance_11 = new lib.БезимениРисунок6_();
	this.instance_11.parent = this;
	this.instance_11.setTransform(3,1);

	this.instance_12 = new lib.БезимениРисунок7_();
	this.instance_12.parent = this;
	this.instance_12.setTransform(3,1);

	this.instance_13 = new lib.Символ23();
	this.instance_13.parent = this;
	this.instance_13.setTransform(503,343.5);
	this.instance_13._off = true;

	this.instance_14 = new lib.Символ24();
	this.instance_14.parent = this;
	this.instance_14.setTransform(503,343.5);
	this.instance_14._off = true;

	this.instance_15 = new lib.Символ25();
	this.instance_15.parent = this;
	this.instance_15.setTransform(503,343.5);
	this.instance_15._off = true;

	this.instance_16 = new lib.Символ26();
	this.instance_16.parent = this;
	this.instance_16.setTransform(503,343.5);
	this.instance_16._off = true;

	this.instance_17 = new lib.БезимениРисунок12_();
	this.instance_17.parent = this;
	this.instance_17.setTransform(3,1);

	this.instance_18 = new lib.БезимениРисунок13_();
	this.instance_18.parent = this;
	this.instance_18.setTransform(3,1);

	this.instance_19 = new lib.БезимениРисунок14_();
	this.instance_19.parent = this;
	this.instance_19.setTransform(3,1);

	this.instance_20 = new lib.БезимениРисунок15_();
	this.instance_20.parent = this;
	this.instance_20.setTransform(3,1);

	this.instance_21 = new lib.БезимениРисунок16_();
	this.instance_21.parent = this;
	this.instance_21.setTransform(3,1);

	this.instance_22 = new lib.БезимениРисунок17_();
	this.instance_22.parent = this;
	this.instance_22.setTransform(3,1);

	this.instance_23 = new lib.БезимениРисунок18_();
	this.instance_23.parent = this;
	this.instance_23.setTransform(3,1);

	this.instance_24 = new lib.БезимениРисунок19_();
	this.instance_24.parent = this;
	this.instance_24.setTransform(3,1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_6}]},1764).to({state:[{t:this.instance_6}]},18).to({state:[{t:this.instance_7}]},1).to({state:[{t:this.instance_8}]},1).to({state:[{t:this.instance_9}]},1).to({state:[{t:this.instance_10}]},1).to({state:[{t:this.instance_11}]},1).to({state:[{t:this.instance_12}]},1).to({state:[{t:this.instance_13}]},1).to({state:[{t:this.instance_13}]},9).to({state:[{t:this.instance_14}]},1).to({state:[{t:this.instance_14}]},9).to({state:[{t:this.instance_15}]},1).to({state:[{t:this.instance_15}]},9).to({state:[{t:this.instance_16}]},1).to({state:[{t:this.instance_16}]},9).to({state:[{t:this.instance_17}]},1).to({state:[{t:this.instance_18}]},1).to({state:[{t:this.instance_19}]},1).to({state:[{t:this.instance_20}]},1).to({state:[{t:this.instance_21}]},1).to({state:[{t:this.instance_22}]},1).to({state:[{t:this.instance_23}]},1).to({state:[{t:this.instance_24}]},1).to({state:[]},1).wait(488));
	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(1764).to({_off:false},0).to({x:503,y:343.5},18).to({_off:true},1).wait(542));
	this.timeline.addTween(cjs.Tween.get(this.instance_13).wait(1789).to({_off:false},0).to({x:483.8,y:363},9).to({_off:true},1).wait(526));
	this.timeline.addTween(cjs.Tween.get(this.instance_14).wait(1799).to({_off:false},0).to({x:479.3,y:363.3},9).to({_off:true},1).wait(516));
	this.timeline.addTween(cjs.Tween.get(this.instance_15).wait(1809).to({_off:false},0).to({x:475.3,y:362.3},9).to({_off:true},1).wait(506));
	this.timeline.addTween(cjs.Tween.get(this.instance_16).wait(1819).to({_off:false},0).to({x:474.5,y:359.5},9).to({_off:true},1).wait(496));

	// Слой 5 - копия: 2
	this.instance_25 = new lib.Символ14();
	this.instance_25.parent = this;
	this.instance_25.setTransform(535.6,342.1);
	this.instance_25._off = true;

	this.instance_26 = new lib.Символ15();
	this.instance_26.parent = this;
	this.instance_26.setTransform(500,342.5);
	this.instance_26._off = true;

	this.instance_27 = new lib.Символ16();
	this.instance_27.parent = this;
	this.instance_27.setTransform(500,342.8);
	this.instance_27._off = true;

	this.instance_28 = new lib.Символ17();
	this.instance_28.parent = this;
	this.instance_28.setTransform(500,342.5);
	this.instance_28._off = true;

	this.instance_29 = new lib.Символ18();
	this.instance_29.parent = this;
	this.instance_29.setTransform(500,342.5);
	this.instance_29._off = true;

	this.instance_30 = new lib.Символ19();
	this.instance_30.parent = this;
	this.instance_30.setTransform(500,342.5);
	this.instance_30._off = true;

	this.instance_31 = new lib.Символ20();
	this.instance_31.parent = this;
	this.instance_31.setTransform(500,342.5);
	this.instance_31._off = true;

	this.instance_32 = new lib.БезимениРисунок116();
	this.instance_32.parent = this;

	this.instance_33 = new lib.БезимениРисунок115();
	this.instance_33.parent = this;

	this.instance_34 = new lib.БезимениРисунок114();
	this.instance_34.parent = this;

	this.instance_35 = new lib.БезимениРисунок113();
	this.instance_35.parent = this;

	this.instance_36 = new lib.БезимениРисунок112();
	this.instance_36.parent = this;

	this.instance_37 = new lib.БезимениРисунок111();
	this.instance_37.parent = this;

	this.instance_38 = new lib.БезимениРисунок110();
	this.instance_38.parent = this;

	this.instance_39 = new lib.БезимениРисунок109();
	this.instance_39.parent = this;

	this.instance_40 = new lib.БезимениРисунок108();
	this.instance_40.parent = this;

	this.instance_41 = new lib.БезимениРисунок107();
	this.instance_41.parent = this;

	this.instance_42 = new lib.БезимениРисунок106();
	this.instance_42.parent = this;

	this.instance_43 = new lib.БезимениРисунок105();
	this.instance_43.parent = this;

	this.instance_44 = new lib.БезимениРисунок104();
	this.instance_44.parent = this;

	this.instance_45 = new lib.БезимениРисунок103();
	this.instance_45.parent = this;

	this.instance_46 = new lib.БезимениРисунок102();
	this.instance_46.parent = this;

	this.instance_47 = new lib.БезимениРисунок101();
	this.instance_47.parent = this;

	this.instance_48 = new lib.БезимениРисунок100();
	this.instance_48.parent = this;

	this.instance_49 = new lib.БезимениРисунок99();
	this.instance_49.parent = this;

	this.instance_50 = new lib.Символ7();
	this.instance_50.parent = this;
	this.instance_50.setTransform(514.5,330.8);
	this.instance_50._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_25}]},1837).to({state:[{t:this.instance_25}]},14).to({state:[{t:this.instance_26}]},1).to({state:[{t:this.instance_26}]},16).to({state:[{t:this.instance_27}]},1).to({state:[{t:this.instance_27}]},15).to({state:[{t:this.instance_28}]},1).to({state:[{t:this.instance_28}]},16).to({state:[{t:this.instance_29}]},1).to({state:[{t:this.instance_29}]},16).to({state:[{t:this.instance_30}]},1).to({state:[{t:this.instance_30}]},16).to({state:[{t:this.instance_31}]},1).to({state:[{t:this.instance_31}]},10).to({state:[{t:this.instance_32}]},1).to({state:[{t:this.instance_33}]},1).to({state:[{t:this.instance_34}]},1).to({state:[{t:this.instance_35}]},1).to({state:[{t:this.instance_36}]},1).to({state:[{t:this.instance_37}]},1).to({state:[{t:this.instance_38}]},1).to({state:[{t:this.instance_39}]},1).to({state:[{t:this.instance_40}]},1).to({state:[{t:this.instance_41}]},1).to({state:[{t:this.instance_42}]},1).to({state:[{t:this.instance_43}]},1).to({state:[{t:this.instance_44}]},1).to({state:[{t:this.instance_45}]},1).to({state:[{t:this.instance_46}]},1).to({state:[{t:this.instance_47}]},1).to({state:[{t:this.instance_48}]},1).to({state:[{t:this.instance_49}]},1).to({state:[{t:this.instance_50}]},1).to({state:[{t:this.instance_50}]},7).to({state:[]},1).wait(352));
	this.timeline.addTween(cjs.Tween.get(this.instance_25).wait(1837).to({_off:false},0).to({x:486,y:342.3},14).to({_off:true},1).wait(473));
	this.timeline.addTween(cjs.Tween.get(this.instance_26).wait(1852).to({_off:false},0).to({x:442.5,y:340},16).to({_off:true},1).wait(456));
	this.timeline.addTween(cjs.Tween.get(this.instance_27).wait(1869).to({_off:false},0).to({x:443.5,y:336.3},15).to({_off:true},1).wait(440));
	this.timeline.addTween(cjs.Tween.get(this.instance_28).wait(1885).to({_off:false},0).to({x:445.8,y:332.8},16).to({_off:true},1).wait(423));
	this.timeline.addTween(cjs.Tween.get(this.instance_29).wait(1902).to({_off:false},0).to({x:449.5,y:329.5},16).to({_off:true},1).wait(406));
	this.timeline.addTween(cjs.Tween.get(this.instance_30).wait(1919).to({_off:false},0).to({x:454,y:327.5},16).to({_off:true},1).wait(389));
	this.timeline.addTween(cjs.Tween.get(this.instance_31).wait(1936).to({_off:false},0).to({x:472,y:332.3},10).to({_off:true},1).wait(378));
	this.timeline.addTween(cjs.Tween.get(this.instance_50).wait(1965).to({_off:false},0).to({x:500,y:342.5},7).to({_off:true},1).wait(352));

	// Слой 10 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	var mask_graphics_1973 = new cjs.Graphics().p("EhOHA1hMAAAhrBMCcPAAAMAAABrBgAw01tQADAHAFAFQAHAFAIABQAHAAAGgFQAHgFACgGQACgFAAgKQgBgKgCgDIgMgPQgEgFgGgKIgKgQQgFgHgFgCIgLgEIgHgDIgHgFQgHgDgMgBQgQgDgHAFIgJAIQgIACgEABQgGADgEAMQgEANgFAEIgIAFQgJAGAAATQAAATAHAGQAHAJANgDIAKgEIAKgBIAnAAIASgDIANgBIAFAAgA/036QAIACAIgDQAIgEADgJQAEgIgCgKQgCgNgPgSIgFgJIgEgJQgFgPgTgEQgJgDgWgBQgEgIgKgEQgJgEgJADQgHADgLAMIgSAUQgGAGgBAEIgDAQIgBALQAAAHAAADQADANAOADQALACANgIQAEAKAKACQAFABAIABQAJABAPAIQAJACAIgCIAKgDQAFABAHAEg");

	this.timeline.addTween(cjs.Tween.get(mask).to({graphics:null,x:0,y:0}).wait(1973).to({graphics:mask_graphics_1973,x:500,y:342.5}).wait(352));

	// Слой 3 - копия: 2
	this.instance_51 = new lib.БезимениРисунок78();
	this.instance_51.parent = this;

	this.instance_52 = new lib.БезимениРисунок77();
	this.instance_52.parent = this;

	this.instance_53 = new lib.БезимениРисунок76();
	this.instance_53.parent = this;

	this.instance_54 = new lib.БезимениРисунок75();
	this.instance_54.parent = this;

	this.instance_55 = new lib.БезимениРисунок74();
	this.instance_55.parent = this;

	this.instance_56 = new lib.БезимениРисунок73();
	this.instance_56.parent = this;

	this.instance_57 = new lib.БезимениРисунок72();
	this.instance_57.parent = this;

	this.instance_58 = new lib.БезимениРисунок71();
	this.instance_58.parent = this;

	this.instance_59 = new lib.БезимениРисунок70();
	this.instance_59.parent = this;

	this.instance_60 = new lib.БезимениРисунок69();
	this.instance_60.parent = this;

	this.instance_61 = new lib.БезимениРисунок68();
	this.instance_61.parent = this;

	this.instance_62 = new lib.БезимениРисунок67();
	this.instance_62.parent = this;

	this.instance_63 = new lib.БезимениРисунок66();
	this.instance_63.parent = this;

	this.instance_64 = new lib.БезимениРисунок65();
	this.instance_64.parent = this;

	this.instance_65 = new lib.БезимениРисунок64();
	this.instance_65.parent = this;

	this.instance_66 = new lib.БезимениРисунок63();
	this.instance_66.parent = this;

	this.instance_67 = new lib.БезимениРисунок62();
	this.instance_67.parent = this;

	this.instance_68 = new lib.БезимениРисунок61();
	this.instance_68.parent = this;

	this.instance_69 = new lib.Символ2();
	this.instance_69.parent = this;
	this.instance_69.setTransform(451.5,321.2,0.98,0.98);
	this.instance_69._off = true;

	this.instance_70 = new lib.Символ3();
	this.instance_70.parent = this;
	this.instance_70.setTransform(451.8,325.3);
	this.instance_70._off = true;

	this.instance_71 = new lib.Символ3копия();
	this.instance_71.parent = this;
	this.instance_71.setTransform(446.8,327.8);
	this.instance_71._off = true;

	this.instance_72 = new lib.Символ3копия2();
	this.instance_72.parent = this;
	this.instance_72.setTransform(443,331);
	this.instance_72._off = true;

	this.instance_73 = new lib.Символ3копия3();
	this.instance_73.parent = this;
	this.instance_73.setTransform(439.8,334.5);
	this.instance_73._off = true;

	this.instance_74 = new lib.БезимениРисунок55();
	this.instance_74.parent = this;

	this.instance_75 = new lib.БезимениРисунок54();
	this.instance_75.parent = this;

	this.instance_76 = new lib.БезимениРисунок53();
	this.instance_76.parent = this;

	this.instance_77 = new lib.БезимениРисунок52();
	this.instance_77.parent = this;

	this.instance_78 = new lib.БезимениРисунок51();
	this.instance_78.parent = this;

	this.instance_79 = new lib.БезимениРисунок50();
	this.instance_79.parent = this;

	this.instance_80 = new lib.БезимениРисунок49();
	this.instance_80.parent = this;

	this.instance_81 = new lib.БезимениРисунок48();
	this.instance_81.parent = this;

	this.instance_82 = new lib.БезимениРисунок47();
	this.instance_82.parent = this;

	this.instance_83 = new lib.БезимениРисунок46();
	this.instance_83.parent = this;

	this.instance_84 = new lib.БезимениРисунок45();
	this.instance_84.parent = this;

	this.instance_85 = new lib.БезимениРисунок44();
	this.instance_85.parent = this;

	this.instance_86 = new lib.БезимениРисунок43();
	this.instance_86.parent = this;

	this.instance_87 = new lib.БезимениРисунок42();
	this.instance_87.parent = this;

	this.instance_88 = new lib.БезимениРисунок41();
	this.instance_88.parent = this;

	this.instance_89 = new lib.БезимениРисунок40();
	this.instance_89.parent = this;

	this.instance_90 = new lib.БезимениРисунок39();
	this.instance_90.parent = this;

	this.instance_91 = new lib.Символ4();
	this.instance_91.parent = this;
	this.instance_91.setTransform(500.5,97.3,0.791,0.647,0,0,0,0.1,0.1);
	this.instance_91._off = true;

	this.instance_92 = new lib.БезимениРисунок37();
	this.instance_92.parent = this;

	this.instance_93 = new lib.БезимениРисунок36();
	this.instance_93.parent = this;

	this.instance_94 = new lib.БезимениРисунок35();
	this.instance_94.parent = this;

	this.instance_95 = new lib.БезимениРисунок34();
	this.instance_95.parent = this;

	this.instance_96 = new lib.БезимениРисунок33();
	this.instance_96.parent = this;

	this.instance_97 = new lib.БезимениРисунок32();
	this.instance_97.parent = this;

	this.instance_98 = new lib.БезимениРисунок31();
	this.instance_98.parent = this;

	this.instance_99 = new lib.БезимениРисунок30();
	this.instance_99.parent = this;

	this.instance_100 = new lib.БезимениРисунок29();
	this.instance_100.parent = this;

	this.instance_101 = new lib.БезимениРисунок28();
	this.instance_101.parent = this;

	this.instance_102 = new lib.БезимениРисунок27();
	this.instance_102.parent = this;

	this.instance_103 = new lib.БезимениРисунок26();
	this.instance_103.parent = this;

	this.instance_104 = new lib.БезимениРисунок25();
	this.instance_104.parent = this;

	this.instance_105 = new lib.БезимениРисунок24();
	this.instance_105.parent = this;

	this.instance_106 = new lib.БезимениРисунок23();
	this.instance_106.parent = this;

	this.instance_107 = new lib.БезимениРисунок22();
	this.instance_107.parent = this;

	this.instance_108 = new lib.БезимениРисунок21();
	this.instance_108.parent = this;

	this.instance_109 = new lib.Символ5();
	this.instance_109.parent = this;
	this.instance_109.setTransform(507,342.5,1,1,0,1.2,0);
	this.instance_109._off = true;

	this.instance_110 = new lib.БезимениРисунок19();
	this.instance_110.parent = this;

	this.instance_111 = new lib.БезимениРисунок18();
	this.instance_111.parent = this;

	this.instance_112 = new lib.БезимениРисунок17();
	this.instance_112.parent = this;

	this.instance_113 = new lib.БезимениРисунок16();
	this.instance_113.parent = this;

	this.instance_114 = new lib.БезимениРисунок15();
	this.instance_114.parent = this;

	this.instance_115 = new lib.БезимениРисунок14();
	this.instance_115.parent = this;

	this.instance_116 = new lib.БезимениРисунок13();
	this.instance_116.parent = this;

	this.instance_117 = new lib.БезимениРисунок12();
	this.instance_117.parent = this;

	this.instance_118 = new lib.БезимениРисунок11();
	this.instance_118.parent = this;

	this.instance_119 = new lib.БезимениРисунок10();
	this.instance_119.parent = this;

	this.instance_120 = new lib.БезимениРисунок9();
	this.instance_120.parent = this;

	this.instance_121 = new lib.БезимениРисунок8();
	this.instance_121.parent = this;

	this.instance_122 = new lib.БезимениРисунок7();
	this.instance_122.parent = this;

	this.instance_123 = new lib.БезимениРисунок6();
	this.instance_123.parent = this;

	this.instance_124 = new lib.БезимениРисунок5();
	this.instance_124.parent = this;

	this.instance_125 = new lib.БезимениРисунок4();
	this.instance_125.parent = this;

	this.instance_126 = new lib.БезимениРисунок3();
	this.instance_126.parent = this;

	this.instance_127 = new lib.БезимениРисунок2();
	this.instance_127.parent = this;

	this.instance_128 = new lib.БезимениРисунок1();
	this.instance_128.parent = this;

	this.instance_129 = new lib.Символ6();
	this.instance_129.parent = this;
	this.instance_129.setTransform(500,342.5);
	this.instance_129._off = true;

	var maskedShapeInstanceList = [this.instance_51,this.instance_52,this.instance_53,this.instance_54,this.instance_55,this.instance_56,this.instance_57,this.instance_58,this.instance_59,this.instance_60,this.instance_61,this.instance_62,this.instance_63,this.instance_64,this.instance_65,this.instance_66,this.instance_67,this.instance_68,this.instance_69,this.instance_70,this.instance_71,this.instance_72,this.instance_73,this.instance_74,this.instance_75,this.instance_76,this.instance_77,this.instance_78,this.instance_79,this.instance_80,this.instance_81,this.instance_82,this.instance_83,this.instance_84,this.instance_85,this.instance_86,this.instance_87,this.instance_88,this.instance_89,this.instance_90,this.instance_91,this.instance_92,this.instance_93,this.instance_94,this.instance_95,this.instance_96,this.instance_97,this.instance_98,this.instance_99,this.instance_100,this.instance_101,this.instance_102,this.instance_103,this.instance_104,this.instance_105,this.instance_106,this.instance_107,this.instance_108,this.instance_109,this.instance_110,this.instance_111,this.instance_112,this.instance_113,this.instance_114,this.instance_115,this.instance_116,this.instance_117,this.instance_118,this.instance_119,this.instance_120,this.instance_121,this.instance_122,this.instance_123,this.instance_124,this.instance_125,this.instance_126,this.instance_127,this.instance_128,this.instance_129];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_51}]},1973).to({state:[{t:this.instance_52}]},1).to({state:[{t:this.instance_53}]},1).to({state:[{t:this.instance_54}]},1).to({state:[{t:this.instance_55}]},1).to({state:[{t:this.instance_56}]},1).to({state:[{t:this.instance_57}]},1).to({state:[{t:this.instance_58}]},1).to({state:[{t:this.instance_59}]},1).to({state:[{t:this.instance_60}]},1).to({state:[{t:this.instance_61}]},1).to({state:[{t:this.instance_62}]},1).to({state:[{t:this.instance_63}]},1).to({state:[{t:this.instance_64}]},1).to({state:[{t:this.instance_65}]},1).to({state:[{t:this.instance_66}]},1).to({state:[{t:this.instance_67}]},1).to({state:[{t:this.instance_68}]},1).to({state:[{t:this.instance_69}]},1).to({state:[{t:this.instance_69}]},16).to({state:[{t:this.instance_70}]},1).to({state:[{t:this.instance_70}]},15).to({state:[{t:this.instance_71}]},1).to({state:[{t:this.instance_71}]},15).to({state:[{t:this.instance_72}]},1).to({state:[{t:this.instance_72}]},15).to({state:[{t:this.instance_73}]},1).to({state:[{t:this.instance_73}]},15).to({state:[{t:this.instance_74}]},1).to({state:[{t:this.instance_75}]},1).to({state:[{t:this.instance_76}]},1).to({state:[{t:this.instance_77}]},1).to({state:[{t:this.instance_78}]},1).to({state:[{t:this.instance_79}]},1).to({state:[{t:this.instance_80}]},1).to({state:[{t:this.instance_81}]},1).to({state:[{t:this.instance_82}]},1).to({state:[{t:this.instance_83}]},1).to({state:[{t:this.instance_84}]},1).to({state:[{t:this.instance_85}]},1).to({state:[{t:this.instance_86}]},1).to({state:[{t:this.instance_87}]},1).to({state:[{t:this.instance_88}]},1).to({state:[{t:this.instance_89}]},1).to({state:[{t:this.instance_90}]},1).to({state:[{t:this.instance_91}]},1).to({state:[{t:this.instance_91}]},95).to({state:[{t:this.instance_92}]},1).to({state:[{t:this.instance_93}]},1).to({state:[{t:this.instance_94}]},1).to({state:[{t:this.instance_95}]},1).to({state:[{t:this.instance_96}]},1).to({state:[{t:this.instance_97}]},1).to({state:[{t:this.instance_98}]},1).to({state:[{t:this.instance_99}]},1).to({state:[{t:this.instance_100}]},1).to({state:[{t:this.instance_101}]},1).to({state:[{t:this.instance_102}]},1).to({state:[{t:this.instance_103}]},1).to({state:[{t:this.instance_104}]},1).to({state:[{t:this.instance_105}]},1).to({state:[{t:this.instance_106}]},1).to({state:[{t:this.instance_107}]},1).to({state:[{t:this.instance_108}]},1).to({state:[{t:this.instance_109}]},1).to({state:[{t:this.instance_109}]},67).to({state:[{t:this.instance_110}]},1).to({state:[{t:this.instance_111}]},1).to({state:[{t:this.instance_112}]},1).to({state:[{t:this.instance_113}]},1).to({state:[{t:this.instance_114}]},1).to({state:[{t:this.instance_115}]},1).to({state:[{t:this.instance_116}]},1).to({state:[{t:this.instance_117}]},1).to({state:[{t:this.instance_118}]},1).to({state:[{t:this.instance_119}]},1).to({state:[{t:this.instance_120}]},1).to({state:[{t:this.instance_121}]},1).to({state:[{t:this.instance_122}]},1).to({state:[{t:this.instance_123}]},1).to({state:[{t:this.instance_124}]},1).to({state:[{t:this.instance_125}]},1).to({state:[{t:this.instance_126}]},1).to({state:[{t:this.instance_127}]},1).to({state:[{t:this.instance_128}]},1).to({state:[{t:this.instance_129}]},26).to({state:[{t:this.instance_129}]},10).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance_69).wait(1991).to({_off:false},0).to({scaleX:1,scaleY:1,x:500,y:342.5},16).to({_off:true},1).wait(317));
	this.timeline.addTween(cjs.Tween.get(this.instance_70).wait(2008).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(301));
	this.timeline.addTween(cjs.Tween.get(this.instance_71).wait(2024).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(285));
	this.timeline.addTween(cjs.Tween.get(this.instance_72).wait(2040).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(269));
	this.timeline.addTween(cjs.Tween.get(this.instance_73).wait(2056).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(253));
	this.timeline.addTween(cjs.Tween.get(this.instance_91).wait(2089).to({_off:false},0).to({regX:0,regY:0,scaleX:1,scaleY:1,x:500,y:342.5},95).to({_off:true},1).wait(140));
	this.timeline.addTween(cjs.Tween.get(this.instance_109).wait(2202).to({_off:false},0).to({scaleY:1.01,skewX:-8,x:744.5},67).to({_off:true},1).wait(55));
	this.timeline.addTween(cjs.Tween.get(this.instance_129).wait(2314).to({_off:false},0).to({alpha:0},10).wait(1));

	// Слой 5 - копия
	this.instance_130 = new lib.Символ21();
	this.instance_130.parent = this;
	this.instance_130.setTransform(711,341.5);
	this.instance_130._off = true;

	this.instance_131 = new lib.БезимениРисунок128();
	this.instance_131.parent = this;
	this.instance_131.setTransform(120,-1);

	this.instance_132 = new lib.БезимениРисунок129();
	this.instance_132.parent = this;
	this.instance_132.setTransform(114,-1);

	this.instance_133 = new lib.Символ9();
	this.instance_133.parent = this;
	this.instance_133.setTransform(606.7,340.4);
	this.instance_133._off = true;

	this.instance_134 = new lib.Анимация2("synched",0);
	this.instance_134.parent = this;
	this.instance_134.setTransform(597.7,337.6);

	this.instance_135 = new lib.Анимация3("synched",0);
	this.instance_135.parent = this;
	this.instance_135.setTransform(592,335.5);
	this.instance_135._off = true;

	this.instance_136 = new lib.Анимация4("synched",0);
	this.instance_136.parent = this;
	this.instance_136.setTransform(551.2,336.5);

	this.instance_137 = new lib.БезимениРисунок125();
	this.instance_137.parent = this;
	this.instance_137.setTransform(48,-6);

	this.instance_138 = new lib.БезимениРисунок126();
	this.instance_138.parent = this;
	this.instance_138.setTransform(45,-6);

	this.instance_139 = new lib.Символ10();
	this.instance_139.parent = this;
	this.instance_139.setTransform(542,336.5);
	this.instance_139._off = true;

	this.instance_140 = new lib.Анимация5("synched",0);
	this.instance_140.parent = this;
	this.instance_140.setTransform(514,342.5);

	this.instance_141 = new lib.Символ14();
	this.instance_141.parent = this;
	this.instance_141.setTransform(661.8,341.5);
	this.instance_141._off = true;

	this.instance_142 = new lib.Символ15();
	this.instance_142.parent = this;
	this.instance_142.setTransform(500,342.5);
	this.instance_142._off = true;

	this.instance_143 = new lib.Символ16();
	this.instance_143.parent = this;
	this.instance_143.setTransform(500,342.8);
	this.instance_143._off = true;

	this.instance_144 = new lib.Символ17();
	this.instance_144.parent = this;
	this.instance_144.setTransform(500,342.5);
	this.instance_144._off = true;

	this.instance_145 = new lib.Символ18();
	this.instance_145.parent = this;
	this.instance_145.setTransform(500,342.5);
	this.instance_145._off = true;

	this.instance_146 = new lib.Символ19();
	this.instance_146.parent = this;
	this.instance_146.setTransform(500,342.5);
	this.instance_146._off = true;

	this.instance_147 = new lib.Символ20();
	this.instance_147.parent = this;
	this.instance_147.setTransform(500,342.5);
	this.instance_147._off = true;

	this.instance_148 = new lib.БезимениРисунок116();
	this.instance_148.parent = this;

	this.instance_149 = new lib.БезимениРисунок115();
	this.instance_149.parent = this;

	this.instance_150 = new lib.БезимениРисунок114();
	this.instance_150.parent = this;

	this.instance_151 = new lib.БезимениРисунок113();
	this.instance_151.parent = this;

	this.instance_152 = new lib.БезимениРисунок112();
	this.instance_152.parent = this;

	this.instance_153 = new lib.БезимениРисунок111();
	this.instance_153.parent = this;

	this.instance_154 = new lib.БезимениРисунок110();
	this.instance_154.parent = this;

	this.instance_155 = new lib.БезимениРисунок109();
	this.instance_155.parent = this;

	this.instance_156 = new lib.БезимениРисунок108();
	this.instance_156.parent = this;

	this.instance_157 = new lib.БезимениРисунок107();
	this.instance_157.parent = this;

	this.instance_158 = new lib.БезимениРисунок106();
	this.instance_158.parent = this;

	this.instance_159 = new lib.БезимениРисунок105();
	this.instance_159.parent = this;

	this.instance_160 = new lib.БезимениРисунок104();
	this.instance_160.parent = this;

	this.instance_161 = new lib.БезимениРисунок103();
	this.instance_161.parent = this;

	this.instance_162 = new lib.БезимениРисунок102();
	this.instance_162.parent = this;

	this.instance_163 = new lib.БезимениРисунок101();
	this.instance_163.parent = this;

	this.instance_164 = new lib.БезимениРисунок100();
	this.instance_164.parent = this;

	this.instance_165 = new lib.БезимениРисунок99();
	this.instance_165.parent = this;

	this.instance_166 = new lib.Символ7();
	this.instance_166.parent = this;
	this.instance_166.setTransform(514.5,330.8);
	this.instance_166._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_130}]},1163).to({state:[{t:this.instance_130}]},61).to({state:[{t:this.instance_131,p:{x:120,y:-1}}]},1).to({state:[{t:this.instance_132}]},1).to({state:[{t:this.instance_133}]},1).to({state:[{t:this.instance_133}]},5).to({state:[{t:this.instance_134}]},1).to({state:[{t:this.instance_131,p:{x:95,y:-6}}]},1).to({state:[{t:this.instance_135}]},1).to({state:[{t:this.instance_136}]},12).to({state:[{t:this.instance_137,p:{x:48,y:-6}}]},1).to({state:[{t:this.instance_138,p:{x:45,y:-6}}]},1).to({state:[{t:this.instance_139}]},1).to({state:[{t:this.instance_139}]},5).to({state:[{t:this.instance_138,p:{x:23,y:-2}}]},1).to({state:[{t:this.instance_137,p:{x:19,y:-1}}]},1).to({state:[{t:this.instance_140}]},1).to({state:[{t:this.instance_141}]},1).to({state:[{t:this.instance_141}]},28).to({state:[{t:this.instance_141}]},14).to({state:[{t:this.instance_142}]},1).to({state:[{t:this.instance_142}]},16).to({state:[{t:this.instance_143}]},1).to({state:[{t:this.instance_143}]},15).to({state:[{t:this.instance_144}]},1).to({state:[{t:this.instance_144}]},16).to({state:[{t:this.instance_145}]},1).to({state:[{t:this.instance_145}]},16).to({state:[{t:this.instance_146}]},1).to({state:[{t:this.instance_146}]},16).to({state:[{t:this.instance_147}]},1).to({state:[{t:this.instance_147}]},10).to({state:[{t:this.instance_148}]},1).to({state:[{t:this.instance_149}]},1).to({state:[{t:this.instance_150}]},1).to({state:[{t:this.instance_151}]},1).to({state:[{t:this.instance_152}]},1).to({state:[{t:this.instance_153}]},1).to({state:[{t:this.instance_154}]},1).to({state:[{t:this.instance_155}]},1).to({state:[{t:this.instance_156}]},1).to({state:[{t:this.instance_157}]},1).to({state:[{t:this.instance_158}]},1).to({state:[{t:this.instance_159}]},1).to({state:[{t:this.instance_160}]},1).to({state:[{t:this.instance_161}]},1).to({state:[{t:this.instance_162}]},1).to({state:[{t:this.instance_163}]},1).to({state:[{t:this.instance_164}]},1).to({state:[{t:this.instance_165}]},1).to({state:[{t:this.instance_166}]},1).to({state:[{t:this.instance_166}]},7).to({state:[]},1).wait(902));
	this.timeline.addTween(cjs.Tween.get(this.instance_130).wait(1163).to({_off:false},0).to({x:496},61).to({_off:true},1).wait(1100));
	this.timeline.addTween(cjs.Tween.get(this.instance_133).wait(1227).to({_off:false},0).to({x:600.1,y:338.4},5).to({_off:true},1).wait(1092));
	this.timeline.addTween(cjs.Tween.get(this.instance_135).wait(1235).to({_off:false},0).to({_off:true,x:551.2,y:336.5},12).wait(1078));
	this.timeline.addTween(cjs.Tween.get(this.instance_139).wait(1250).to({_off:false},0).to({x:527.1,y:338.9},5).to({_off:true},1).wait(1069));
	this.timeline.addTween(cjs.Tween.get(this.instance_141).wait(1259).to({_off:false},0).to({x:535.6,y:342.1},28).to({x:486,y:342.3},14).to({_off:true},1).wait(1023));
	this.timeline.addTween(cjs.Tween.get(this.instance_142).wait(1302).to({_off:false},0).to({x:442.5,y:340},16).to({_off:true},1).wait(1006));
	this.timeline.addTween(cjs.Tween.get(this.instance_143).wait(1319).to({_off:false},0).to({x:443.5,y:336.3},15).to({_off:true},1).wait(990));
	this.timeline.addTween(cjs.Tween.get(this.instance_144).wait(1335).to({_off:false},0).to({x:445.8,y:332.8},16).to({_off:true},1).wait(973));
	this.timeline.addTween(cjs.Tween.get(this.instance_145).wait(1352).to({_off:false},0).to({x:449.5,y:329.5},16).to({_off:true},1).wait(956));
	this.timeline.addTween(cjs.Tween.get(this.instance_146).wait(1369).to({_off:false},0).to({x:454,y:327.5},16).to({_off:true},1).wait(939));
	this.timeline.addTween(cjs.Tween.get(this.instance_147).wait(1386).to({_off:false},0).to({x:472,y:332.3},10).to({_off:true},1).wait(928));
	this.timeline.addTween(cjs.Tween.get(this.instance_166).wait(1415).to({_off:false},0).to({x:500,y:342.5},7).to({_off:true},1).wait(902));

	// Слой 9 (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	var mask_1_graphics_1423 = new cjs.Graphics().p("EhOHA1hMAAAhrBMCcPAAAMAAABrBgAw01tQADAHAFAFQAHAFAIABQAHAAAGgFQAHgFACgGQACgFAAgKQgBgKgCgDIgMgPQgEgFgGgKIgKgQQgFgHgFgCIgLgEIgHgDIgHgFQgHgDgMgBQgQgDgHAFIgJAIQgIACgEABQgGADgEAMQgEANgFAEIgIAFQgJAGAAATQAAATAHAGQAHAJANgDIAKgEIAKgBIAnAAIASgDIANgBIAFAAgA/036QAIACAIgDQAIgEADgJQAEgIgCgKQgCgNgPgSIgFgJIgEgJQgFgPgTgEQgJgDgWgBQgEgIgKgEQgJgEgJADQgHADgLAMIgSAUQgGAGgBAEIgDAQIgBALQAAAHAAADQADANAOADQALACANgIQAEAKAKACQAFABAIABQAJABAPAIQAJACAIgCIAKgDQAFABAHAEg");

	this.timeline.addTween(cjs.Tween.get(mask_1).to({graphics:null,x:0,y:0}).wait(1423).to({graphics:mask_1_graphics_1423,x:500,y:342.5}).wait(352).to({graphics:null,x:0,y:0}).wait(550));

	// Слой 3 - копия: 2
	this.instance_167 = new lib.БезимениРисунок78();
	this.instance_167.parent = this;

	this.instance_168 = new lib.БезимениРисунок77();
	this.instance_168.parent = this;

	this.instance_169 = new lib.БезимениРисунок76();
	this.instance_169.parent = this;

	this.instance_170 = new lib.БезимениРисунок75();
	this.instance_170.parent = this;

	this.instance_171 = new lib.БезимениРисунок74();
	this.instance_171.parent = this;

	this.instance_172 = new lib.БезимениРисунок73();
	this.instance_172.parent = this;

	this.instance_173 = new lib.БезимениРисунок72();
	this.instance_173.parent = this;

	this.instance_174 = new lib.БезимениРисунок71();
	this.instance_174.parent = this;

	this.instance_175 = new lib.БезимениРисунок70();
	this.instance_175.parent = this;

	this.instance_176 = new lib.БезимениРисунок69();
	this.instance_176.parent = this;

	this.instance_177 = new lib.БезимениРисунок68();
	this.instance_177.parent = this;

	this.instance_178 = new lib.БезимениРисунок67();
	this.instance_178.parent = this;

	this.instance_179 = new lib.БезимениРисунок66();
	this.instance_179.parent = this;

	this.instance_180 = new lib.БезимениРисунок65();
	this.instance_180.parent = this;

	this.instance_181 = new lib.БезимениРисунок64();
	this.instance_181.parent = this;

	this.instance_182 = new lib.БезимениРисунок63();
	this.instance_182.parent = this;

	this.instance_183 = new lib.БезимениРисунок62();
	this.instance_183.parent = this;

	this.instance_184 = new lib.БезимениРисунок61();
	this.instance_184.parent = this;

	this.instance_185 = new lib.Символ2();
	this.instance_185.parent = this;
	this.instance_185.setTransform(451.5,321.2,0.98,0.98);
	this.instance_185._off = true;

	this.instance_186 = new lib.Символ3();
	this.instance_186.parent = this;
	this.instance_186.setTransform(451.8,325.3);
	this.instance_186._off = true;

	this.instance_187 = new lib.Символ3копия();
	this.instance_187.parent = this;
	this.instance_187.setTransform(446.8,327.8);
	this.instance_187._off = true;

	this.instance_188 = new lib.Символ3копия2();
	this.instance_188.parent = this;
	this.instance_188.setTransform(443,331);
	this.instance_188._off = true;

	this.instance_189 = new lib.Символ3копия3();
	this.instance_189.parent = this;
	this.instance_189.setTransform(439.8,334.5);
	this.instance_189._off = true;

	this.instance_190 = new lib.БезимениРисунок55();
	this.instance_190.parent = this;

	this.instance_191 = new lib.БезимениРисунок54();
	this.instance_191.parent = this;

	this.instance_192 = new lib.БезимениРисунок53();
	this.instance_192.parent = this;

	this.instance_193 = new lib.БезимениРисунок52();
	this.instance_193.parent = this;

	this.instance_194 = new lib.БезимениРисунок51();
	this.instance_194.parent = this;

	this.instance_195 = new lib.БезимениРисунок50();
	this.instance_195.parent = this;

	this.instance_196 = new lib.БезимениРисунок49();
	this.instance_196.parent = this;

	this.instance_197 = new lib.БезимениРисунок48();
	this.instance_197.parent = this;

	this.instance_198 = new lib.БезимениРисунок47();
	this.instance_198.parent = this;

	this.instance_199 = new lib.БезимениРисунок46();
	this.instance_199.parent = this;

	this.instance_200 = new lib.БезимениРисунок45();
	this.instance_200.parent = this;

	this.instance_201 = new lib.БезимениРисунок44();
	this.instance_201.parent = this;

	this.instance_202 = new lib.БезимениРисунок43();
	this.instance_202.parent = this;

	this.instance_203 = new lib.БезимениРисунок42();
	this.instance_203.parent = this;

	this.instance_204 = new lib.БезимениРисунок41();
	this.instance_204.parent = this;

	this.instance_205 = new lib.БезимениРисунок40();
	this.instance_205.parent = this;

	this.instance_206 = new lib.БезимениРисунок39();
	this.instance_206.parent = this;

	this.instance_207 = new lib.Символ4();
	this.instance_207.parent = this;
	this.instance_207.setTransform(500.5,97.3,0.791,0.647,0,0,0,0.1,0.1);
	this.instance_207._off = true;

	this.instance_208 = new lib.БезимениРисунок37();
	this.instance_208.parent = this;

	this.instance_209 = new lib.БезимениРисунок36();
	this.instance_209.parent = this;

	this.instance_210 = new lib.БезимениРисунок35();
	this.instance_210.parent = this;

	this.instance_211 = new lib.БезимениРисунок34();
	this.instance_211.parent = this;

	this.instance_212 = new lib.БезимениРисунок33();
	this.instance_212.parent = this;

	this.instance_213 = new lib.БезимениРисунок32();
	this.instance_213.parent = this;

	this.instance_214 = new lib.БезимениРисунок31();
	this.instance_214.parent = this;

	this.instance_215 = new lib.БезимениРисунок30();
	this.instance_215.parent = this;

	this.instance_216 = new lib.БезимениРисунок29();
	this.instance_216.parent = this;

	this.instance_217 = new lib.БезимениРисунок28();
	this.instance_217.parent = this;

	this.instance_218 = new lib.БезимениРисунок27();
	this.instance_218.parent = this;

	this.instance_219 = new lib.БезимениРисунок26();
	this.instance_219.parent = this;

	this.instance_220 = new lib.БезимениРисунок25();
	this.instance_220.parent = this;

	this.instance_221 = new lib.БезимениРисунок24();
	this.instance_221.parent = this;

	this.instance_222 = new lib.БезимениРисунок23();
	this.instance_222.parent = this;

	this.instance_223 = new lib.БезимениРисунок22();
	this.instance_223.parent = this;

	this.instance_224 = new lib.БезимениРисунок21();
	this.instance_224.parent = this;

	this.instance_225 = new lib.Символ5();
	this.instance_225.parent = this;
	this.instance_225.setTransform(507,342.5,1,1,0,1.2,0);
	this.instance_225._off = true;

	this.instance_226 = new lib.БезимениРисунок19();
	this.instance_226.parent = this;

	this.instance_227 = new lib.БезимениРисунок18();
	this.instance_227.parent = this;

	this.instance_228 = new lib.БезимениРисунок17();
	this.instance_228.parent = this;

	this.instance_229 = new lib.БезимениРисунок16();
	this.instance_229.parent = this;

	this.instance_230 = new lib.БезимениРисунок15();
	this.instance_230.parent = this;

	this.instance_231 = new lib.БезимениРисунок14();
	this.instance_231.parent = this;

	this.instance_232 = new lib.БезимениРисунок13();
	this.instance_232.parent = this;

	this.instance_233 = new lib.БезимениРисунок12();
	this.instance_233.parent = this;

	this.instance_234 = new lib.БезимениРисунок11();
	this.instance_234.parent = this;

	this.instance_235 = new lib.БезимениРисунок10();
	this.instance_235.parent = this;

	this.instance_236 = new lib.БезимениРисунок9();
	this.instance_236.parent = this;

	this.instance_237 = new lib.БезимениРисунок8();
	this.instance_237.parent = this;

	this.instance_238 = new lib.БезимениРисунок7();
	this.instance_238.parent = this;

	this.instance_239 = new lib.БезимениРисунок6();
	this.instance_239.parent = this;

	this.instance_240 = new lib.БезимениРисунок5();
	this.instance_240.parent = this;

	this.instance_241 = new lib.БезимениРисунок4();
	this.instance_241.parent = this;

	this.instance_242 = new lib.БезимениРисунок3();
	this.instance_242.parent = this;

	this.instance_243 = new lib.БезимениРисунок2();
	this.instance_243.parent = this;

	this.instance_244 = new lib.БезимениРисунок1();
	this.instance_244.parent = this;

	this.instance_245 = new lib.Символ6();
	this.instance_245.parent = this;
	this.instance_245.setTransform(500,342.5);
	this.instance_245._off = true;

	var maskedShapeInstanceList = [this.instance_167,this.instance_168,this.instance_169,this.instance_170,this.instance_171,this.instance_172,this.instance_173,this.instance_174,this.instance_175,this.instance_176,this.instance_177,this.instance_178,this.instance_179,this.instance_180,this.instance_181,this.instance_182,this.instance_183,this.instance_184,this.instance_185,this.instance_186,this.instance_187,this.instance_188,this.instance_189,this.instance_190,this.instance_191,this.instance_192,this.instance_193,this.instance_194,this.instance_195,this.instance_196,this.instance_197,this.instance_198,this.instance_199,this.instance_200,this.instance_201,this.instance_202,this.instance_203,this.instance_204,this.instance_205,this.instance_206,this.instance_207,this.instance_208,this.instance_209,this.instance_210,this.instance_211,this.instance_212,this.instance_213,this.instance_214,this.instance_215,this.instance_216,this.instance_217,this.instance_218,this.instance_219,this.instance_220,this.instance_221,this.instance_222,this.instance_223,this.instance_224,this.instance_225,this.instance_226,this.instance_227,this.instance_228,this.instance_229,this.instance_230,this.instance_231,this.instance_232,this.instance_233,this.instance_234,this.instance_235,this.instance_236,this.instance_237,this.instance_238,this.instance_239,this.instance_240,this.instance_241,this.instance_242,this.instance_243,this.instance_244,this.instance_245];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_1;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_167}]},1423).to({state:[{t:this.instance_168}]},1).to({state:[{t:this.instance_169}]},1).to({state:[{t:this.instance_170}]},1).to({state:[{t:this.instance_171}]},1).to({state:[{t:this.instance_172}]},1).to({state:[{t:this.instance_173}]},1).to({state:[{t:this.instance_174}]},1).to({state:[{t:this.instance_175}]},1).to({state:[{t:this.instance_176}]},1).to({state:[{t:this.instance_177}]},1).to({state:[{t:this.instance_178}]},1).to({state:[{t:this.instance_179}]},1).to({state:[{t:this.instance_180}]},1).to({state:[{t:this.instance_181}]},1).to({state:[{t:this.instance_182}]},1).to({state:[{t:this.instance_183}]},1).to({state:[{t:this.instance_184}]},1).to({state:[{t:this.instance_185}]},1).to({state:[{t:this.instance_185}]},16).to({state:[{t:this.instance_186}]},1).to({state:[{t:this.instance_186}]},15).to({state:[{t:this.instance_187}]},1).to({state:[{t:this.instance_187}]},15).to({state:[{t:this.instance_188}]},1).to({state:[{t:this.instance_188}]},15).to({state:[{t:this.instance_189}]},1).to({state:[{t:this.instance_189}]},15).to({state:[{t:this.instance_190}]},1).to({state:[{t:this.instance_191}]},1).to({state:[{t:this.instance_192}]},1).to({state:[{t:this.instance_193}]},1).to({state:[{t:this.instance_194}]},1).to({state:[{t:this.instance_195}]},1).to({state:[{t:this.instance_196}]},1).to({state:[{t:this.instance_197}]},1).to({state:[{t:this.instance_198}]},1).to({state:[{t:this.instance_199}]},1).to({state:[{t:this.instance_200}]},1).to({state:[{t:this.instance_201}]},1).to({state:[{t:this.instance_202}]},1).to({state:[{t:this.instance_203}]},1).to({state:[{t:this.instance_204}]},1).to({state:[{t:this.instance_205}]},1).to({state:[{t:this.instance_206}]},1).to({state:[{t:this.instance_207}]},1).to({state:[{t:this.instance_207}]},95).to({state:[{t:this.instance_208}]},1).to({state:[{t:this.instance_209}]},1).to({state:[{t:this.instance_210}]},1).to({state:[{t:this.instance_211}]},1).to({state:[{t:this.instance_212}]},1).to({state:[{t:this.instance_213}]},1).to({state:[{t:this.instance_214}]},1).to({state:[{t:this.instance_215}]},1).to({state:[{t:this.instance_216}]},1).to({state:[{t:this.instance_217}]},1).to({state:[{t:this.instance_218}]},1).to({state:[{t:this.instance_219}]},1).to({state:[{t:this.instance_220}]},1).to({state:[{t:this.instance_221}]},1).to({state:[{t:this.instance_222}]},1).to({state:[{t:this.instance_223}]},1).to({state:[{t:this.instance_224}]},1).to({state:[{t:this.instance_225}]},1).to({state:[{t:this.instance_225}]},67).to({state:[{t:this.instance_226}]},1).to({state:[{t:this.instance_227}]},1).to({state:[{t:this.instance_228}]},1).to({state:[{t:this.instance_229}]},1).to({state:[{t:this.instance_230}]},1).to({state:[{t:this.instance_231}]},1).to({state:[{t:this.instance_232}]},1).to({state:[{t:this.instance_233}]},1).to({state:[{t:this.instance_234}]},1).to({state:[{t:this.instance_235}]},1).to({state:[{t:this.instance_236}]},1).to({state:[{t:this.instance_237}]},1).to({state:[{t:this.instance_238}]},1).to({state:[{t:this.instance_239}]},1).to({state:[{t:this.instance_240}]},1).to({state:[{t:this.instance_241}]},1).to({state:[{t:this.instance_242}]},1).to({state:[{t:this.instance_243}]},1).to({state:[{t:this.instance_244}]},1).to({state:[{t:this.instance_245}]},26).to({state:[{t:this.instance_245}]},10).to({state:[]},1).wait(550));
	this.timeline.addTween(cjs.Tween.get(this.instance_185).wait(1441).to({_off:false},0).to({scaleX:1,scaleY:1,x:500,y:342.5},16).to({_off:true},1).wait(867));
	this.timeline.addTween(cjs.Tween.get(this.instance_186).wait(1458).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(851));
	this.timeline.addTween(cjs.Tween.get(this.instance_187).wait(1474).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(835));
	this.timeline.addTween(cjs.Tween.get(this.instance_188).wait(1490).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(819));
	this.timeline.addTween(cjs.Tween.get(this.instance_189).wait(1506).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(803));
	this.timeline.addTween(cjs.Tween.get(this.instance_207).wait(1539).to({_off:false},0).to({regX:0,regY:0,scaleX:1,scaleY:1,x:500,y:342.5},95).to({_off:true},1).wait(690));
	this.timeline.addTween(cjs.Tween.get(this.instance_225).wait(1652).to({_off:false},0).to({scaleY:1.01,skewX:-8,x:744.5},67).to({_off:true},1).wait(605));
	this.timeline.addTween(cjs.Tween.get(this.instance_245).wait(1764).to({_off:false},0).to({alpha:0},10).to({_off:true},1).wait(550));

	// Слой 7
	this.instance_246 = new lib.БезимениРисунок135();
	this.instance_246.parent = this;

	this.instance_247 = new lib.БезимениРисунок134();
	this.instance_247.parent = this;

	this.instance_248 = new lib.БезимениРисунок133();
	this.instance_248.parent = this;
	this.instance_248.setTransform(-1,0);

	this.instance_249 = new lib.БезимениРисунок132();
	this.instance_249.parent = this;
	this.instance_249.setTransform(-2,0);

	this.instance_250 = new lib.БезимениРисунок131();
	this.instance_250.parent = this;
	this.instance_250.setTransform(-3,0);

	this.instance_251 = new lib.Символ9();
	this.instance_251.parent = this;
	this.instance_251.setTransform(606.7,340.4);
	this.instance_251._off = true;

	this.instance_252 = new lib.Анимация2("synched",0);
	this.instance_252.parent = this;
	this.instance_252.setTransform(597.7,337.6);

	this.instance_253 = new lib.БезимениРисунок128();
	this.instance_253.parent = this;
	this.instance_253.setTransform(95,-6);

	this.instance_254 = new lib.Анимация3("synched",0);
	this.instance_254.parent = this;
	this.instance_254.setTransform(592,335.5);
	this.instance_254._off = true;

	this.instance_255 = new lib.Анимация4("synched",0);
	this.instance_255.parent = this;
	this.instance_255.setTransform(551.2,336.5);

	this.instance_256 = new lib.БезимениРисунок125();
	this.instance_256.parent = this;
	this.instance_256.setTransform(48,-6);

	this.instance_257 = new lib.БезимениРисунок126();
	this.instance_257.parent = this;
	this.instance_257.setTransform(45,-6);

	this.instance_258 = new lib.Символ10();
	this.instance_258.parent = this;
	this.instance_258.setTransform(542,336.5);
	this.instance_258._off = true;

	this.instance_259 = new lib.Анимация5("synched",0);
	this.instance_259.parent = this;
	this.instance_259.setTransform(514,342.5);

	this.instance_260 = new lib.Символ14();
	this.instance_260.parent = this;
	this.instance_260.setTransform(661.8,341.5);
	this.instance_260._off = true;

	this.instance_261 = new lib.Символ15();
	this.instance_261.parent = this;
	this.instance_261.setTransform(500,342.5);
	this.instance_261._off = true;

	this.instance_262 = new lib.Символ16();
	this.instance_262.parent = this;
	this.instance_262.setTransform(500,342.8);
	this.instance_262._off = true;

	this.instance_263 = new lib.Символ17();
	this.instance_263.parent = this;
	this.instance_263.setTransform(500,342.5);
	this.instance_263._off = true;

	this.instance_264 = new lib.Символ18();
	this.instance_264.parent = this;
	this.instance_264.setTransform(500,342.5);
	this.instance_264._off = true;

	this.instance_265 = new lib.Символ19();
	this.instance_265.parent = this;
	this.instance_265.setTransform(500,342.5);
	this.instance_265._off = true;

	this.instance_266 = new lib.Символ20();
	this.instance_266.parent = this;
	this.instance_266.setTransform(500,342.5);
	this.instance_266._off = true;

	this.instance_267 = new lib.БезимениРисунок116();
	this.instance_267.parent = this;

	this.instance_268 = new lib.БезимениРисунок115();
	this.instance_268.parent = this;

	this.instance_269 = new lib.БезимениРисунок114();
	this.instance_269.parent = this;

	this.instance_270 = new lib.БезимениРисунок113();
	this.instance_270.parent = this;

	this.instance_271 = new lib.БезимениРисунок112();
	this.instance_271.parent = this;

	this.instance_272 = new lib.БезимениРисунок111();
	this.instance_272.parent = this;

	this.instance_273 = new lib.БезимениРисунок110();
	this.instance_273.parent = this;

	this.instance_274 = new lib.БезимениРисунок109();
	this.instance_274.parent = this;

	this.instance_275 = new lib.БезимениРисунок108();
	this.instance_275.parent = this;

	this.instance_276 = new lib.БезимениРисунок107();
	this.instance_276.parent = this;

	this.instance_277 = new lib.БезимениРисунок106();
	this.instance_277.parent = this;

	this.instance_278 = new lib.БезимениРисунок105();
	this.instance_278.parent = this;

	this.instance_279 = new lib.БезимениРисунок104();
	this.instance_279.parent = this;

	this.instance_280 = new lib.БезимениРисунок103();
	this.instance_280.parent = this;

	this.instance_281 = new lib.БезимениРисунок102();
	this.instance_281.parent = this;

	this.instance_282 = new lib.БезимениРисунок101();
	this.instance_282.parent = this;

	this.instance_283 = new lib.БезимениРисунок100();
	this.instance_283.parent = this;

	this.instance_284 = new lib.БезимениРисунок99();
	this.instance_284.parent = this;

	this.instance_285 = new lib.Символ7();
	this.instance_285.parent = this;
	this.instance_285.setTransform(514.5,330.8);
	this.instance_285._off = true;

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_246}]},624).to({state:[{t:this.instance_247}]},1).to({state:[{t:this.instance_248}]},1).to({state:[{t:this.instance_249}]},1).to({state:[{t:this.instance_250}]},1).to({state:[{t:this.instance_251}]},1).to({state:[{t:this.instance_251}]},5).to({state:[{t:this.instance_252}]},1).to({state:[{t:this.instance_253}]},1).to({state:[{t:this.instance_254}]},1).to({state:[{t:this.instance_255}]},12).to({state:[{t:this.instance_256,p:{x:48,y:-6}}]},1).to({state:[{t:this.instance_257,p:{x:45,y:-6}}]},1).to({state:[{t:this.instance_258}]},1).to({state:[{t:this.instance_258}]},5).to({state:[{t:this.instance_257,p:{x:23,y:-2}}]},1).to({state:[{t:this.instance_256,p:{x:19,y:-1}}]},1).to({state:[{t:this.instance_259}]},1).to({state:[{t:this.instance_260}]},1).to({state:[{t:this.instance_260}]},39).to({state:[{t:this.instance_261}]},1).to({state:[{t:this.instance_261}]},16).to({state:[{t:this.instance_262}]},1).to({state:[{t:this.instance_262}]},15).to({state:[{t:this.instance_263}]},1).to({state:[{t:this.instance_263}]},16).to({state:[{t:this.instance_264}]},1).to({state:[{t:this.instance_264}]},16).to({state:[{t:this.instance_265}]},1).to({state:[{t:this.instance_265}]},16).to({state:[{t:this.instance_266}]},1).to({state:[{t:this.instance_266}]},10).to({state:[{t:this.instance_267}]},1).to({state:[{t:this.instance_268}]},1).to({state:[{t:this.instance_269}]},1).to({state:[{t:this.instance_270}]},1).to({state:[{t:this.instance_271}]},1).to({state:[{t:this.instance_272}]},1).to({state:[{t:this.instance_273}]},1).to({state:[{t:this.instance_274}]},1).to({state:[{t:this.instance_275}]},1).to({state:[{t:this.instance_276}]},1).to({state:[{t:this.instance_277}]},1).to({state:[{t:this.instance_278}]},1).to({state:[{t:this.instance_279}]},1).to({state:[{t:this.instance_280}]},1).to({state:[{t:this.instance_281}]},1).to({state:[{t:this.instance_282}]},1).to({state:[{t:this.instance_283}]},1).to({state:[{t:this.instance_284}]},1).to({state:[{t:this.instance_285}]},1).to({state:[{t:this.instance_285}]},7).to({state:[]},1).wait(1503));
	this.timeline.addTween(cjs.Tween.get(this.instance_251).wait(629).to({_off:false},0).to({x:600.1,y:338.4},5).to({_off:true},1).wait(1690));
	this.timeline.addTween(cjs.Tween.get(this.instance_254).wait(637).to({_off:false},0).to({_off:true,x:551.2,y:336.5},12).wait(1676));
	this.timeline.addTween(cjs.Tween.get(this.instance_258).wait(652).to({_off:false},0).to({x:527.1,y:338.9},5).to({_off:true},1).wait(1667));
	this.timeline.addTween(cjs.Tween.get(this.instance_260).wait(661).to({_off:false},0).to({x:486,y:342.3},39).to({_off:true},1).wait(1624));
	this.timeline.addTween(cjs.Tween.get(this.instance_261).wait(701).to({_off:false},0).to({x:442.5,y:340},16).to({_off:true},1).wait(1607));
	this.timeline.addTween(cjs.Tween.get(this.instance_262).wait(718).to({_off:false},0).to({x:443.5,y:336.3},15).to({_off:true},1).wait(1591));
	this.timeline.addTween(cjs.Tween.get(this.instance_263).wait(734).to({_off:false},0).to({x:445.8,y:332.8},16).to({_off:true},1).wait(1574));
	this.timeline.addTween(cjs.Tween.get(this.instance_264).wait(751).to({_off:false},0).to({x:449.5,y:329.5},16).to({_off:true},1).wait(1557));
	this.timeline.addTween(cjs.Tween.get(this.instance_265).wait(768).to({_off:false},0).to({x:454,y:327.5},16).to({_off:true},1).wait(1540));
	this.timeline.addTween(cjs.Tween.get(this.instance_266).wait(785).to({_off:false},0).to({x:472,y:332.3},10).to({_off:true},1).wait(1529));
	this.timeline.addTween(cjs.Tween.get(this.instance_285).wait(814).to({_off:false},0).to({x:500,y:342.5},7).to({_off:true},1).wait(1503));

	// Слой 6 (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	var mask_2_graphics_409 = new cjs.Graphics().p("EhOHA1hMAAAhrBMCcPAAAMAAABrBgEAi1gfOIAACHIGuAAIAAiHIAAgGImuAAgEAi1gfeIGuAAIAAh9ImuAAg");

	this.timeline.addTween(cjs.Tween.get(mask_2).to({graphics:null,x:0,y:0}).wait(409).to({graphics:mask_2_graphics_409,x:500,y:342.5}).wait(215).to({graphics:null,x:0,y:0}).wait(1701));

	// Слой 5
	this.instance_286 = new lib.Символ8();
	this.instance_286.parent = this;
	this.instance_286.setTransform(520.5,470.5,1,1,-3);
	this.instance_286._off = true;

	this.instance_287 = new lib.БезимениРисунок184();
	this.instance_287.parent = this;

	this.instance_288 = new lib.БезимениРисунок183();
	this.instance_288.parent = this;

	this.instance_289 = new lib.БезимениРисунок182();
	this.instance_289.parent = this;

	this.instance_290 = new lib.БезимениРисунок181();
	this.instance_290.parent = this;

	this.instance_291 = new lib.БезимениРисунок180();
	this.instance_291.parent = this;

	this.instance_292 = new lib.БезимениРисунок179();
	this.instance_292.parent = this;

	this.instance_293 = new lib.БезимениРисунок178();
	this.instance_293.parent = this;

	this.instance_294 = new lib.БезимениРисунок177();
	this.instance_294.parent = this;

	this.instance_295 = new lib.БезимениРисунок176();
	this.instance_295.parent = this;

	this.instance_296 = new lib.БезимениРисунок175();
	this.instance_296.parent = this;

	this.instance_297 = new lib.БезимениРисунок174();
	this.instance_297.parent = this;

	this.instance_298 = new lib.БезимениРисунок173();
	this.instance_298.parent = this;

	this.instance_299 = new lib.БезимениРисунок172();
	this.instance_299.parent = this;

	this.instance_300 = new lib.БезимениРисунок171();
	this.instance_300.parent = this;

	this.instance_301 = new lib.БезимениРисунок170();
	this.instance_301.parent = this;

	this.instance_302 = new lib.БезимениРисунок169();
	this.instance_302.parent = this;

	this.instance_303 = new lib.БезимениРисунок168();
	this.instance_303.parent = this;

	this.instance_304 = new lib.БезимениРисунок167();
	this.instance_304.parent = this;

	this.instance_305 = new lib.БезимениРисунок166();
	this.instance_305.parent = this;

	this.instance_306 = new lib.БезимениРисунок165();
	this.instance_306.parent = this;

	this.instance_307 = new lib.БезимениРисунок164();
	this.instance_307.parent = this;

	this.instance_308 = new lib.БезимениРисунок163();
	this.instance_308.parent = this;

	this.instance_309 = new lib.БезимениРисунок162();
	this.instance_309.parent = this;

	this.instance_310 = new lib.БезимениРисунок161();
	this.instance_310.parent = this;

	this.instance_311 = new lib.БезимениРисунок160();
	this.instance_311.parent = this;

	this.instance_312 = new lib.БезимениРисунок159();
	this.instance_312.parent = this;

	this.instance_313 = new lib.БезимениРисунок158();
	this.instance_313.parent = this;

	this.instance_314 = new lib.БезимениРисунок157();
	this.instance_314.parent = this;

	this.instance_315 = new lib.БезимениРисунок156();
	this.instance_315.parent = this;

	this.instance_316 = new lib.БезимениРисунок155();
	this.instance_316.parent = this;

	this.instance_317 = new lib.БезимениРисунок154();
	this.instance_317.parent = this;

	this.instance_318 = new lib.БезимениРисунок153();
	this.instance_318.parent = this;

	this.instance_319 = new lib.БезимениРисунок152();
	this.instance_319.parent = this;

	this.instance_320 = new lib.БезимениРисунок151();
	this.instance_320.parent = this;

	this.instance_321 = new lib.БезимениРисунок150();
	this.instance_321.parent = this;

	this.instance_322 = new lib.БезимениРисунок149();
	this.instance_322.parent = this;

	this.instance_323 = new lib.БезимениРисунок148();
	this.instance_323.parent = this;

	this.instance_324 = new lib.БезимениРисунок147();
	this.instance_324.parent = this;

	this.instance_325 = new lib.БезимениРисунок146();
	this.instance_325.parent = this;

	this.instance_326 = new lib.БезимениРисунок145();
	this.instance_326.parent = this;

	this.instance_327 = new lib.БезимениРисунок144();
	this.instance_327.parent = this;

	this.instance_328 = new lib.БезимениРисунок143();
	this.instance_328.parent = this;

	this.instance_329 = new lib.БезимениРисунок142();
	this.instance_329.parent = this;

	this.instance_330 = new lib.БезимениРисунок141();
	this.instance_330.parent = this;

	this.instance_331 = new lib.БезимениРисунок140();
	this.instance_331.parent = this;

	this.instance_332 = new lib.БезимениРисунок139();
	this.instance_332.parent = this;

	this.instance_333 = new lib.БезимениРисунок138();
	this.instance_333.parent = this;

	this.instance_334 = new lib.БезимениРисунок137();
	this.instance_334.parent = this;

	this.instance_335 = new lib.БезимениРисунок136();
	this.instance_335.parent = this;

	var maskedShapeInstanceList = [this.instance_286,this.instance_287,this.instance_288,this.instance_289,this.instance_290,this.instance_291,this.instance_292,this.instance_293,this.instance_294,this.instance_295,this.instance_296,this.instance_297,this.instance_298,this.instance_299,this.instance_300,this.instance_301,this.instance_302,this.instance_303,this.instance_304,this.instance_305,this.instance_306,this.instance_307,this.instance_308,this.instance_309,this.instance_310,this.instance_311,this.instance_312,this.instance_313,this.instance_314,this.instance_315,this.instance_316,this.instance_317,this.instance_318,this.instance_319,this.instance_320,this.instance_321,this.instance_322,this.instance_323,this.instance_324,this.instance_325,this.instance_326,this.instance_327,this.instance_328,this.instance_329,this.instance_330,this.instance_331,this.instance_332,this.instance_333,this.instance_334,this.instance_335];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_2;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_286}]},409).to({state:[{t:this.instance_286}]},25).to({state:[{t:this.instance_286}]},1).to({state:[{t:this.instance_286}]},139).to({state:[{t:this.instance_287}]},1).to({state:[{t:this.instance_288}]},1).to({state:[{t:this.instance_289}]},1).to({state:[{t:this.instance_290}]},1).to({state:[{t:this.instance_291}]},1).to({state:[{t:this.instance_292}]},1).to({state:[{t:this.instance_293}]},1).to({state:[{t:this.instance_294}]},1).to({state:[{t:this.instance_295}]},1).to({state:[{t:this.instance_296}]},1).to({state:[{t:this.instance_297}]},1).to({state:[{t:this.instance_298}]},1).to({state:[{t:this.instance_299}]},1).to({state:[{t:this.instance_300}]},1).to({state:[{t:this.instance_301}]},1).to({state:[{t:this.instance_302}]},1).to({state:[{t:this.instance_303}]},1).to({state:[{t:this.instance_304}]},1).to({state:[{t:this.instance_305}]},1).to({state:[{t:this.instance_306}]},1).to({state:[{t:this.instance_307}]},1).to({state:[{t:this.instance_308}]},1).to({state:[{t:this.instance_309}]},1).to({state:[{t:this.instance_310}]},1).to({state:[{t:this.instance_311}]},1).to({state:[{t:this.instance_312}]},1).to({state:[{t:this.instance_313}]},1).to({state:[{t:this.instance_314}]},1).to({state:[{t:this.instance_315}]},1).to({state:[{t:this.instance_316}]},1).to({state:[{t:this.instance_317}]},1).to({state:[{t:this.instance_318}]},1).to({state:[{t:this.instance_319}]},1).to({state:[{t:this.instance_320}]},1).to({state:[{t:this.instance_321}]},1).to({state:[{t:this.instance_322}]},1).to({state:[{t:this.instance_323}]},1).to({state:[{t:this.instance_324}]},1).to({state:[{t:this.instance_325}]},1).to({state:[{t:this.instance_326}]},1).to({state:[{t:this.instance_327}]},1).to({state:[{t:this.instance_328}]},1).to({state:[{t:this.instance_329}]},1).to({state:[{t:this.instance_330}]},1).to({state:[{t:this.instance_331}]},1).to({state:[{t:this.instance_332}]},1).to({state:[{t:this.instance_333}]},1).to({state:[{t:this.instance_334}]},1).to({state:[{t:this.instance_335}]},1).to({state:[]},1).wait(1701));
	this.timeline.addTween(cjs.Tween.get(this.instance_286).wait(409).to({_off:false},0).to({x:488,y:364.5},25).wait(1).to({rotation:0,x:500,y:342.5},0).to({regX:0.2,regY:-0.3,scaleX:0.67,scaleY:0.5,skewX:3.1,x:506.4,y:-11.3},139).to({_off:true},1).wait(1750));

	// Слой 8 (mask)
	var mask_3 = new cjs.Shape();
	mask_3._off = true;
	var mask_3_graphics_822 = new cjs.Graphics().p("EhOHA1hMAAAhrBMCcPAAAMAAABrBgAw01tQADAHAFAFQAHAFAIABQAHAAAGgFQAHgFACgGQACgFAAgKQgBgKgCgDIgMgPQgEgFgGgKIgKgQQgFgHgFgCIgLgEIgHgDIgHgFQgHgDgMgBQgQgDgHAFIgJAIQgIACgEABQgGADgEAMQgEANgFAEIgIAFQgJAGAAATQAAATAHAGQAHAJANgDIAKgEIAKgBIAnAAIASgDIANgBIAFAAgA/036QAIACAIgDQAIgEADgJQAEgIgCgKQgCgNgPgSIgFgJIgEgJQgFgPgTgEQgJgDgWgBQgEgIgKgEQgJgEgJADQgHADgLAMIgSAUQgGAGgBAEIgDAQIgBALQAAAHAAADQADANAOADQALACANgIQAEAKAKACQAFABAIABQAJABAPAIQAJACAIgCIAKgDQAFABAHAEg");

	this.timeline.addTween(cjs.Tween.get(mask_3).to({graphics:null,x:0,y:0}).wait(822).to({graphics:mask_3_graphics_822,x:500,y:342.5}).wait(352).to({graphics:null,x:0,y:0}).wait(1151));

	// Слой 3 - копия
	this.instance_336 = new lib.БезимениРисунок78();
	this.instance_336.parent = this;

	this.instance_337 = new lib.БезимениРисунок77();
	this.instance_337.parent = this;

	this.instance_338 = new lib.БезимениРисунок76();
	this.instance_338.parent = this;

	this.instance_339 = new lib.БезимениРисунок75();
	this.instance_339.parent = this;

	this.instance_340 = new lib.БезимениРисунок74();
	this.instance_340.parent = this;

	this.instance_341 = new lib.БезимениРисунок73();
	this.instance_341.parent = this;

	this.instance_342 = new lib.БезимениРисунок72();
	this.instance_342.parent = this;

	this.instance_343 = new lib.БезимениРисунок71();
	this.instance_343.parent = this;

	this.instance_344 = new lib.БезимениРисунок70();
	this.instance_344.parent = this;

	this.instance_345 = new lib.БезимениРисунок69();
	this.instance_345.parent = this;

	this.instance_346 = new lib.БезимениРисунок68();
	this.instance_346.parent = this;

	this.instance_347 = new lib.БезимениРисунок67();
	this.instance_347.parent = this;

	this.instance_348 = new lib.БезимениРисунок66();
	this.instance_348.parent = this;

	this.instance_349 = new lib.БезимениРисунок65();
	this.instance_349.parent = this;

	this.instance_350 = new lib.БезимениРисунок64();
	this.instance_350.parent = this;

	this.instance_351 = new lib.БезимениРисунок63();
	this.instance_351.parent = this;

	this.instance_352 = new lib.БезимениРисунок62();
	this.instance_352.parent = this;

	this.instance_353 = new lib.БезимениРисунок61();
	this.instance_353.parent = this;

	this.instance_354 = new lib.Символ2();
	this.instance_354.parent = this;
	this.instance_354.setTransform(451.5,321.2,0.98,0.98);
	this.instance_354._off = true;

	this.instance_355 = new lib.Символ3();
	this.instance_355.parent = this;
	this.instance_355.setTransform(451.8,325.3);
	this.instance_355._off = true;

	this.instance_356 = new lib.Символ3копия();
	this.instance_356.parent = this;
	this.instance_356.setTransform(446.8,327.8);
	this.instance_356._off = true;

	this.instance_357 = new lib.Символ3копия2();
	this.instance_357.parent = this;
	this.instance_357.setTransform(443,331);
	this.instance_357._off = true;

	this.instance_358 = new lib.Символ3копия3();
	this.instance_358.parent = this;
	this.instance_358.setTransform(439.8,334.5);
	this.instance_358._off = true;

	this.instance_359 = new lib.БезимениРисунок55();
	this.instance_359.parent = this;

	this.instance_360 = new lib.БезимениРисунок54();
	this.instance_360.parent = this;

	this.instance_361 = new lib.БезимениРисунок53();
	this.instance_361.parent = this;

	this.instance_362 = new lib.БезимениРисунок52();
	this.instance_362.parent = this;

	this.instance_363 = new lib.БезимениРисунок51();
	this.instance_363.parent = this;

	this.instance_364 = new lib.БезимениРисунок50();
	this.instance_364.parent = this;

	this.instance_365 = new lib.БезимениРисунок49();
	this.instance_365.parent = this;

	this.instance_366 = new lib.БезимениРисунок48();
	this.instance_366.parent = this;

	this.instance_367 = new lib.БезимениРисунок47();
	this.instance_367.parent = this;

	this.instance_368 = new lib.БезимениРисунок46();
	this.instance_368.parent = this;

	this.instance_369 = new lib.БезимениРисунок45();
	this.instance_369.parent = this;

	this.instance_370 = new lib.БезимениРисунок44();
	this.instance_370.parent = this;

	this.instance_371 = new lib.БезимениРисунок43();
	this.instance_371.parent = this;

	this.instance_372 = new lib.БезимениРисунок42();
	this.instance_372.parent = this;

	this.instance_373 = new lib.БезимениРисунок41();
	this.instance_373.parent = this;

	this.instance_374 = new lib.БезимениРисунок40();
	this.instance_374.parent = this;

	this.instance_375 = new lib.БезимениРисунок39();
	this.instance_375.parent = this;

	this.instance_376 = new lib.Символ4();
	this.instance_376.parent = this;
	this.instance_376.setTransform(500.5,97.3,0.791,0.647,0,0,0,0.1,0.1);
	this.instance_376._off = true;

	this.instance_377 = new lib.БезимениРисунок37();
	this.instance_377.parent = this;

	this.instance_378 = new lib.БезимениРисунок36();
	this.instance_378.parent = this;

	this.instance_379 = new lib.БезимениРисунок35();
	this.instance_379.parent = this;

	this.instance_380 = new lib.БезимениРисунок34();
	this.instance_380.parent = this;

	this.instance_381 = new lib.БезимениРисунок33();
	this.instance_381.parent = this;

	this.instance_382 = new lib.БезимениРисунок32();
	this.instance_382.parent = this;

	this.instance_383 = new lib.БезимениРисунок31();
	this.instance_383.parent = this;

	this.instance_384 = new lib.БезимениРисунок30();
	this.instance_384.parent = this;

	this.instance_385 = new lib.БезимениРисунок29();
	this.instance_385.parent = this;

	this.instance_386 = new lib.БезимениРисунок28();
	this.instance_386.parent = this;

	this.instance_387 = new lib.БезимениРисунок27();
	this.instance_387.parent = this;

	this.instance_388 = new lib.БезимениРисунок26();
	this.instance_388.parent = this;

	this.instance_389 = new lib.БезимениРисунок25();
	this.instance_389.parent = this;

	this.instance_390 = new lib.БезимениРисунок24();
	this.instance_390.parent = this;

	this.instance_391 = new lib.БезимениРисунок23();
	this.instance_391.parent = this;

	this.instance_392 = new lib.БезимениРисунок22();
	this.instance_392.parent = this;

	this.instance_393 = new lib.БезимениРисунок21();
	this.instance_393.parent = this;

	this.instance_394 = new lib.Символ5();
	this.instance_394.parent = this;
	this.instance_394.setTransform(507,342.5,1,1,0,1.2,0);
	this.instance_394._off = true;

	this.instance_395 = new lib.БезимениРисунок19();
	this.instance_395.parent = this;

	this.instance_396 = new lib.БезимениРисунок18();
	this.instance_396.parent = this;

	this.instance_397 = new lib.БезимениРисунок17();
	this.instance_397.parent = this;

	this.instance_398 = new lib.БезимениРисунок16();
	this.instance_398.parent = this;

	this.instance_399 = new lib.БезимениРисунок15();
	this.instance_399.parent = this;

	this.instance_400 = new lib.БезимениРисунок14();
	this.instance_400.parent = this;

	this.instance_401 = new lib.БезимениРисунок13();
	this.instance_401.parent = this;

	this.instance_402 = new lib.БезимениРисунок12();
	this.instance_402.parent = this;

	this.instance_403 = new lib.БезимениРисунок11();
	this.instance_403.parent = this;

	this.instance_404 = new lib.БезимениРисунок10();
	this.instance_404.parent = this;

	this.instance_405 = new lib.БезимениРисунок9();
	this.instance_405.parent = this;

	this.instance_406 = new lib.БезимениРисунок8();
	this.instance_406.parent = this;

	this.instance_407 = new lib.БезимениРисунок7();
	this.instance_407.parent = this;

	this.instance_408 = new lib.БезимениРисунок6();
	this.instance_408.parent = this;

	this.instance_409 = new lib.БезимениРисунок5();
	this.instance_409.parent = this;

	this.instance_410 = new lib.БезимениРисунок4();
	this.instance_410.parent = this;

	this.instance_411 = new lib.БезимениРисунок3();
	this.instance_411.parent = this;

	this.instance_412 = new lib.БезимениРисунок2();
	this.instance_412.parent = this;

	this.instance_413 = new lib.БезимениРисунок1();
	this.instance_413.parent = this;

	this.instance_414 = new lib.Символ6();
	this.instance_414.parent = this;
	this.instance_414.setTransform(500,342.5);
	this.instance_414._off = true;

	var maskedShapeInstanceList = [this.instance_336,this.instance_337,this.instance_338,this.instance_339,this.instance_340,this.instance_341,this.instance_342,this.instance_343,this.instance_344,this.instance_345,this.instance_346,this.instance_347,this.instance_348,this.instance_349,this.instance_350,this.instance_351,this.instance_352,this.instance_353,this.instance_354,this.instance_355,this.instance_356,this.instance_357,this.instance_358,this.instance_359,this.instance_360,this.instance_361,this.instance_362,this.instance_363,this.instance_364,this.instance_365,this.instance_366,this.instance_367,this.instance_368,this.instance_369,this.instance_370,this.instance_371,this.instance_372,this.instance_373,this.instance_374,this.instance_375,this.instance_376,this.instance_377,this.instance_378,this.instance_379,this.instance_380,this.instance_381,this.instance_382,this.instance_383,this.instance_384,this.instance_385,this.instance_386,this.instance_387,this.instance_388,this.instance_389,this.instance_390,this.instance_391,this.instance_392,this.instance_393,this.instance_394,this.instance_395,this.instance_396,this.instance_397,this.instance_398,this.instance_399,this.instance_400,this.instance_401,this.instance_402,this.instance_403,this.instance_404,this.instance_405,this.instance_406,this.instance_407,this.instance_408,this.instance_409,this.instance_410,this.instance_411,this.instance_412,this.instance_413,this.instance_414];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_3;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance_336}]},822).to({state:[{t:this.instance_337}]},1).to({state:[{t:this.instance_338}]},1).to({state:[{t:this.instance_339}]},1).to({state:[{t:this.instance_340}]},1).to({state:[{t:this.instance_341}]},1).to({state:[{t:this.instance_342}]},1).to({state:[{t:this.instance_343}]},1).to({state:[{t:this.instance_344}]},1).to({state:[{t:this.instance_345}]},1).to({state:[{t:this.instance_346}]},1).to({state:[{t:this.instance_347}]},1).to({state:[{t:this.instance_348}]},1).to({state:[{t:this.instance_349}]},1).to({state:[{t:this.instance_350}]},1).to({state:[{t:this.instance_351}]},1).to({state:[{t:this.instance_352}]},1).to({state:[{t:this.instance_353}]},1).to({state:[{t:this.instance_354}]},1).to({state:[{t:this.instance_354}]},16).to({state:[{t:this.instance_355}]},1).to({state:[{t:this.instance_355}]},15).to({state:[{t:this.instance_356}]},1).to({state:[{t:this.instance_356}]},15).to({state:[{t:this.instance_357}]},1).to({state:[{t:this.instance_357}]},15).to({state:[{t:this.instance_358}]},1).to({state:[{t:this.instance_358}]},15).to({state:[{t:this.instance_359}]},1).to({state:[{t:this.instance_360}]},1).to({state:[{t:this.instance_361}]},1).to({state:[{t:this.instance_362}]},1).to({state:[{t:this.instance_363}]},1).to({state:[{t:this.instance_364}]},1).to({state:[{t:this.instance_365}]},1).to({state:[{t:this.instance_366}]},1).to({state:[{t:this.instance_367}]},1).to({state:[{t:this.instance_368}]},1).to({state:[{t:this.instance_369}]},1).to({state:[{t:this.instance_370}]},1).to({state:[{t:this.instance_371}]},1).to({state:[{t:this.instance_372}]},1).to({state:[{t:this.instance_373}]},1).to({state:[{t:this.instance_374}]},1).to({state:[{t:this.instance_375}]},1).to({state:[{t:this.instance_376}]},1).to({state:[{t:this.instance_376}]},95).to({state:[{t:this.instance_377}]},1).to({state:[{t:this.instance_378}]},1).to({state:[{t:this.instance_379}]},1).to({state:[{t:this.instance_380}]},1).to({state:[{t:this.instance_381}]},1).to({state:[{t:this.instance_382}]},1).to({state:[{t:this.instance_383}]},1).to({state:[{t:this.instance_384}]},1).to({state:[{t:this.instance_385}]},1).to({state:[{t:this.instance_386}]},1).to({state:[{t:this.instance_387}]},1).to({state:[{t:this.instance_388}]},1).to({state:[{t:this.instance_389}]},1).to({state:[{t:this.instance_390}]},1).to({state:[{t:this.instance_391}]},1).to({state:[{t:this.instance_392}]},1).to({state:[{t:this.instance_393}]},1).to({state:[{t:this.instance_394}]},1).to({state:[{t:this.instance_394}]},67).to({state:[{t:this.instance_395}]},1).to({state:[{t:this.instance_396}]},1).to({state:[{t:this.instance_397}]},1).to({state:[{t:this.instance_398}]},1).to({state:[{t:this.instance_399}]},1).to({state:[{t:this.instance_400}]},1).to({state:[{t:this.instance_401}]},1).to({state:[{t:this.instance_402}]},1).to({state:[{t:this.instance_403}]},1).to({state:[{t:this.instance_404}]},1).to({state:[{t:this.instance_405}]},1).to({state:[{t:this.instance_406}]},1).to({state:[{t:this.instance_407}]},1).to({state:[{t:this.instance_408}]},1).to({state:[{t:this.instance_409}]},1).to({state:[{t:this.instance_410}]},1).to({state:[{t:this.instance_411}]},1).to({state:[{t:this.instance_412}]},1).to({state:[{t:this.instance_413}]},1).to({state:[{t:this.instance_414}]},26).to({state:[{t:this.instance_414}]},10).to({state:[]},1).wait(1151));
	this.timeline.addTween(cjs.Tween.get(this.instance_354).wait(840).to({_off:false},0).to({scaleX:1,scaleY:1,x:500,y:342.5},16).to({_off:true},1).wait(1468));
	this.timeline.addTween(cjs.Tween.get(this.instance_355).wait(857).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(1452));
	this.timeline.addTween(cjs.Tween.get(this.instance_356).wait(873).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(1436));
	this.timeline.addTween(cjs.Tween.get(this.instance_357).wait(889).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(1420));
	this.timeline.addTween(cjs.Tween.get(this.instance_358).wait(905).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(1404));
	this.timeline.addTween(cjs.Tween.get(this.instance_376).wait(938).to({_off:false},0).to({regX:0,regY:0,scaleX:1,scaleY:1,x:500,y:342.5},95).to({_off:true},1).wait(1291));
	this.timeline.addTween(cjs.Tween.get(this.instance_394).wait(1051).to({_off:false},0).to({scaleY:1.01,skewX:-8,x:744.5},67).to({_off:true},1).wait(1206));
	this.timeline.addTween(cjs.Tween.get(this.instance_414).wait(1163).to({_off:false},0).to({alpha:0},10).to({_off:true},1).wait(1151));

	// Слой 4 (mask)
	var mask_4 = new cjs.Shape();
	mask_4._off = true;
	var mask_4_graphics_0 = new cjs.Graphics().p("EhOHA1hMAAAhrBMCcPAAAMAAABrBgAw01tQADAHAFAFQAHAFAIABQAHAAAGgFQAHgFACgGQACgFAAgKQgBgKgCgDIgMgPQgEgFgGgKIgKgQQgFgHgFgCIgLgEIgHgDIgHgFQgHgDgMgBQgQgDgHAFIgJAIQgIACgEABQgGADgEAMQgEANgFAEIgIAFQgJAGAAATQAAATAHAGQAHAJANgDIAKgEIAKgBIAnAAIASgDIANgBIAFAAgA/036QAIACAIgDQAIgEADgJQAEgIgCgKQgCgNgPgSIgFgJIgEgJQgFgPgTgEQgJgDgWgBQgEgIgKgEQgJgEgJADQgHADgLAMIgSAUQgGAGgBAEIgDAQIgBALQAAAHAAADQADANAOADQALACANgIQAEAKAKACQAFABAIABQAJABAPAIQAJACAIgCIAKgDQAFABAHAEg");

	this.timeline.addTween(cjs.Tween.get(mask_4).to({graphics:mask_4_graphics_0,x:500,y:342.5}).wait(420).to({graphics:null,x:0,y:0}).wait(1905));

	// Слой 3
	this.instance_415 = new lib.Символ1();
	this.instance_415.parent = this;
	this.instance_415.setTransform(350.8,287);

	this.instance_416 = new lib.БезимениРисунок96();
	this.instance_416.parent = this;

	this.instance_417 = new lib.БезимениРисунок95();
	this.instance_417.parent = this;

	this.instance_418 = new lib.БезимениРисунок94();
	this.instance_418.parent = this;

	this.instance_419 = new lib.БезимениРисунок93();
	this.instance_419.parent = this;

	this.instance_420 = new lib.БезимениРисунок92();
	this.instance_420.parent = this;

	this.instance_421 = new lib.БезимениРисунок91();
	this.instance_421.parent = this;

	this.instance_422 = new lib.БезимениРисунок90();
	this.instance_422.parent = this;

	this.instance_423 = new lib.БезимениРисунок89();
	this.instance_423.parent = this;

	this.instance_424 = new lib.БезимениРисунок88();
	this.instance_424.parent = this;

	this.instance_425 = new lib.БезимениРисунок87();
	this.instance_425.parent = this;

	this.instance_426 = new lib.БезимениРисунок86();
	this.instance_426.parent = this;

	this.instance_427 = new lib.БезимениРисунок85();
	this.instance_427.parent = this;

	this.instance_428 = new lib.БезимениРисунок84();
	this.instance_428.parent = this;

	this.instance_429 = new lib.БезимениРисунок83();
	this.instance_429.parent = this;

	this.instance_430 = new lib.БезимениРисунок82();
	this.instance_430.parent = this;

	this.instance_431 = new lib.БезимениРисунок81();
	this.instance_431.parent = this;

	this.instance_432 = new lib.БезимениРисунок80();
	this.instance_432.parent = this;

	this.instance_433 = new lib.БезимениРисунок79();
	this.instance_433.parent = this;

	this.instance_434 = new lib.БезимениРисунок78();
	this.instance_434.parent = this;

	this.instance_435 = new lib.БезимениРисунок77();
	this.instance_435.parent = this;

	this.instance_436 = new lib.БезимениРисунок76();
	this.instance_436.parent = this;

	this.instance_437 = new lib.БезимениРисунок75();
	this.instance_437.parent = this;

	this.instance_438 = new lib.БезимениРисунок74();
	this.instance_438.parent = this;

	this.instance_439 = new lib.БезимениРисунок73();
	this.instance_439.parent = this;

	this.instance_440 = new lib.БезимениРисунок72();
	this.instance_440.parent = this;

	this.instance_441 = new lib.БезимениРисунок71();
	this.instance_441.parent = this;

	this.instance_442 = new lib.БезимениРисунок70();
	this.instance_442.parent = this;

	this.instance_443 = new lib.БезимениРисунок69();
	this.instance_443.parent = this;

	this.instance_444 = new lib.БезимениРисунок68();
	this.instance_444.parent = this;

	this.instance_445 = new lib.БезимениРисунок67();
	this.instance_445.parent = this;

	this.instance_446 = new lib.БезимениРисунок66();
	this.instance_446.parent = this;

	this.instance_447 = new lib.БезимениРисунок65();
	this.instance_447.parent = this;

	this.instance_448 = new lib.БезимениРисунок64();
	this.instance_448.parent = this;

	this.instance_449 = new lib.БезимениРисунок63();
	this.instance_449.parent = this;

	this.instance_450 = new lib.БезимениРисунок62();
	this.instance_450.parent = this;

	this.instance_451 = new lib.БезимениРисунок61();
	this.instance_451.parent = this;

	this.instance_452 = new lib.Символ2();
	this.instance_452.parent = this;
	this.instance_452.setTransform(451.5,321.2,0.98,0.98);
	this.instance_452._off = true;

	this.instance_453 = new lib.Символ3();
	this.instance_453.parent = this;
	this.instance_453.setTransform(451.8,325.3);
	this.instance_453._off = true;

	this.instance_454 = new lib.Символ3копия();
	this.instance_454.parent = this;
	this.instance_454.setTransform(446.8,327.8);
	this.instance_454._off = true;

	this.instance_455 = new lib.Символ3копия2();
	this.instance_455.parent = this;
	this.instance_455.setTransform(443,331);
	this.instance_455._off = true;

	this.instance_456 = new lib.Символ3копия3();
	this.instance_456.parent = this;
	this.instance_456.setTransform(439.8,334.5);
	this.instance_456._off = true;

	this.instance_457 = new lib.БезимениРисунок55();
	this.instance_457.parent = this;

	this.instance_458 = new lib.БезимениРисунок54();
	this.instance_458.parent = this;

	this.instance_459 = new lib.БезимениРисунок53();
	this.instance_459.parent = this;

	this.instance_460 = new lib.БезимениРисунок52();
	this.instance_460.parent = this;

	this.instance_461 = new lib.БезимениРисунок51();
	this.instance_461.parent = this;

	this.instance_462 = new lib.БезимениРисунок50();
	this.instance_462.parent = this;

	this.instance_463 = new lib.БезимениРисунок49();
	this.instance_463.parent = this;

	this.instance_464 = new lib.БезимениРисунок48();
	this.instance_464.parent = this;

	this.instance_465 = new lib.БезимениРисунок47();
	this.instance_465.parent = this;

	this.instance_466 = new lib.БезимениРисунок46();
	this.instance_466.parent = this;

	this.instance_467 = new lib.БезимениРисунок45();
	this.instance_467.parent = this;

	this.instance_468 = new lib.БезимениРисунок44();
	this.instance_468.parent = this;

	this.instance_469 = new lib.БезимениРисунок43();
	this.instance_469.parent = this;

	this.instance_470 = new lib.БезимениРисунок42();
	this.instance_470.parent = this;

	this.instance_471 = new lib.БезимениРисунок41();
	this.instance_471.parent = this;

	this.instance_472 = new lib.БезимениРисунок40();
	this.instance_472.parent = this;

	this.instance_473 = new lib.БезимениРисунок39();
	this.instance_473.parent = this;

	this.instance_474 = new lib.Символ4();
	this.instance_474.parent = this;
	this.instance_474.setTransform(500.5,97.3,0.791,0.647,0,0,0,0.1,0.1);
	this.instance_474._off = true;

	this.instance_475 = new lib.БезимениРисунок37();
	this.instance_475.parent = this;

	this.instance_476 = new lib.БезимениРисунок36();
	this.instance_476.parent = this;

	this.instance_477 = new lib.БезимениРисунок35();
	this.instance_477.parent = this;

	this.instance_478 = new lib.БезимениРисунок34();
	this.instance_478.parent = this;

	this.instance_479 = new lib.БезимениРисунок33();
	this.instance_479.parent = this;

	this.instance_480 = new lib.БезимениРисунок32();
	this.instance_480.parent = this;

	this.instance_481 = new lib.БезимениРисунок31();
	this.instance_481.parent = this;

	this.instance_482 = new lib.БезимениРисунок30();
	this.instance_482.parent = this;

	this.instance_483 = new lib.БезимениРисунок29();
	this.instance_483.parent = this;

	this.instance_484 = new lib.БезимениРисунок28();
	this.instance_484.parent = this;

	this.instance_485 = new lib.БезимениРисунок27();
	this.instance_485.parent = this;

	this.instance_486 = new lib.БезимениРисунок26();
	this.instance_486.parent = this;

	this.instance_487 = new lib.БезимениРисунок25();
	this.instance_487.parent = this;

	this.instance_488 = new lib.БезимениРисунок24();
	this.instance_488.parent = this;

	this.instance_489 = new lib.БезимениРисунок23();
	this.instance_489.parent = this;

	this.instance_490 = new lib.БезимениРисунок22();
	this.instance_490.parent = this;

	this.instance_491 = new lib.БезимениРисунок21();
	this.instance_491.parent = this;

	this.instance_492 = new lib.Символ5();
	this.instance_492.parent = this;
	this.instance_492.setTransform(507,342.5,1,1,0,1.2,0);
	this.instance_492._off = true;

	this.instance_493 = new lib.БезимениРисунок19();
	this.instance_493.parent = this;

	this.instance_494 = new lib.БезимениРисунок18();
	this.instance_494.parent = this;

	this.instance_495 = new lib.БезимениРисунок17();
	this.instance_495.parent = this;

	this.instance_496 = new lib.БезимениРисунок16();
	this.instance_496.parent = this;

	this.instance_497 = new lib.БезимениРисунок15();
	this.instance_497.parent = this;

	this.instance_498 = new lib.БезимениРисунок14();
	this.instance_498.parent = this;

	this.instance_499 = new lib.БезимениРисунок13();
	this.instance_499.parent = this;

	this.instance_500 = new lib.БезимениРисунок12();
	this.instance_500.parent = this;

	this.instance_501 = new lib.БезимениРисунок11();
	this.instance_501.parent = this;

	this.instance_502 = new lib.БезимениРисунок10();
	this.instance_502.parent = this;

	this.instance_503 = new lib.БезимениРисунок9();
	this.instance_503.parent = this;

	this.instance_504 = new lib.БезимениРисунок8();
	this.instance_504.parent = this;

	this.instance_505 = new lib.БезимениРисунок7();
	this.instance_505.parent = this;

	this.instance_506 = new lib.БезимениРисунок6();
	this.instance_506.parent = this;

	this.instance_507 = new lib.БезимениРисунок5();
	this.instance_507.parent = this;

	this.instance_508 = new lib.БезимениРисунок4();
	this.instance_508.parent = this;

	this.instance_509 = new lib.БезимениРисунок3();
	this.instance_509.parent = this;

	this.instance_510 = new lib.БезимениРисунок2();
	this.instance_510.parent = this;

	this.instance_511 = new lib.БезимениРисунок1();
	this.instance_511.parent = this;

	this.instance_512 = new lib.Символ6();
	this.instance_512.parent = this;
	this.instance_512.setTransform(500,342.5);
	this.instance_512._off = true;

	var maskedShapeInstanceList = [this.instance_415,this.instance_416,this.instance_417,this.instance_418,this.instance_419,this.instance_420,this.instance_421,this.instance_422,this.instance_423,this.instance_424,this.instance_425,this.instance_426,this.instance_427,this.instance_428,this.instance_429,this.instance_430,this.instance_431,this.instance_432,this.instance_433,this.instance_434,this.instance_435,this.instance_436,this.instance_437,this.instance_438,this.instance_439,this.instance_440,this.instance_441,this.instance_442,this.instance_443,this.instance_444,this.instance_445,this.instance_446,this.instance_447,this.instance_448,this.instance_449,this.instance_450,this.instance_451,this.instance_452,this.instance_453,this.instance_454,this.instance_455,this.instance_456,this.instance_457,this.instance_458,this.instance_459,this.instance_460,this.instance_461,this.instance_462,this.instance_463,this.instance_464,this.instance_465,this.instance_466,this.instance_467,this.instance_468,this.instance_469,this.instance_470,this.instance_471,this.instance_472,this.instance_473,this.instance_474,this.instance_475,this.instance_476,this.instance_477,this.instance_478,this.instance_479,this.instance_480,this.instance_481,this.instance_482,this.instance_483,this.instance_484,this.instance_485,this.instance_486,this.instance_487,this.instance_488,this.instance_489,this.instance_490,this.instance_491,this.instance_492,this.instance_493,this.instance_494,this.instance_495,this.instance_496,this.instance_497,this.instance_498,this.instance_499,this.instance_500,this.instance_501,this.instance_502,this.instance_503,this.instance_504,this.instance_505,this.instance_506,this.instance_507,this.instance_508,this.instance_509,this.instance_510,this.instance_511,this.instance_512];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_4;
	}

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_415}]}).to({state:[{t:this.instance_415}]},49).to({state:[{t:this.instance_416}]},1).to({state:[{t:this.instance_417}]},1).to({state:[{t:this.instance_418}]},1).to({state:[{t:this.instance_419}]},1).to({state:[{t:this.instance_420}]},1).to({state:[{t:this.instance_421}]},1).to({state:[{t:this.instance_422}]},1).to({state:[{t:this.instance_423}]},1).to({state:[{t:this.instance_424}]},1).to({state:[{t:this.instance_425}]},1).to({state:[{t:this.instance_426}]},1).to({state:[{t:this.instance_427}]},1).to({state:[{t:this.instance_428}]},1).to({state:[{t:this.instance_429}]},1).to({state:[{t:this.instance_430}]},1).to({state:[{t:this.instance_431}]},1).to({state:[{t:this.instance_432}]},1).to({state:[{t:this.instance_433}]},1).to({state:[{t:this.instance_434}]},1).to({state:[{t:this.instance_435}]},1).to({state:[{t:this.instance_436}]},1).to({state:[{t:this.instance_437}]},1).to({state:[{t:this.instance_438}]},1).to({state:[{t:this.instance_439}]},1).to({state:[{t:this.instance_440}]},1).to({state:[{t:this.instance_441}]},1).to({state:[{t:this.instance_442}]},1).to({state:[{t:this.instance_443}]},1).to({state:[{t:this.instance_444}]},1).to({state:[{t:this.instance_445}]},1).to({state:[{t:this.instance_446}]},1).to({state:[{t:this.instance_447}]},1).to({state:[{t:this.instance_448}]},1).to({state:[{t:this.instance_449}]},1).to({state:[{t:this.instance_450}]},1).to({state:[{t:this.instance_451}]},1).to({state:[{t:this.instance_452}]},1).to({state:[{t:this.instance_452}]},16).to({state:[{t:this.instance_453}]},1).to({state:[{t:this.instance_453}]},15).to({state:[{t:this.instance_454}]},1).to({state:[{t:this.instance_454}]},15).to({state:[{t:this.instance_455}]},1).to({state:[{t:this.instance_455}]},15).to({state:[{t:this.instance_456}]},1).to({state:[{t:this.instance_456}]},15).to({state:[{t:this.instance_457}]},1).to({state:[{t:this.instance_458}]},1).to({state:[{t:this.instance_459}]},1).to({state:[{t:this.instance_460}]},1).to({state:[{t:this.instance_461}]},1).to({state:[{t:this.instance_462}]},1).to({state:[{t:this.instance_463}]},1).to({state:[{t:this.instance_464}]},1).to({state:[{t:this.instance_465}]},1).to({state:[{t:this.instance_466}]},1).to({state:[{t:this.instance_467}]},1).to({state:[{t:this.instance_468}]},1).to({state:[{t:this.instance_469}]},1).to({state:[{t:this.instance_470}]},1).to({state:[{t:this.instance_471}]},1).to({state:[{t:this.instance_472}]},1).to({state:[{t:this.instance_473}]},1).to({state:[{t:this.instance_474}]},1).to({state:[{t:this.instance_474}]},95).to({state:[{t:this.instance_475}]},1).to({state:[{t:this.instance_476}]},1).to({state:[{t:this.instance_477}]},1).to({state:[{t:this.instance_478}]},1).to({state:[{t:this.instance_479}]},1).to({state:[{t:this.instance_480}]},1).to({state:[{t:this.instance_481}]},1).to({state:[{t:this.instance_482}]},1).to({state:[{t:this.instance_483}]},1).to({state:[{t:this.instance_484}]},1).to({state:[{t:this.instance_485}]},1).to({state:[{t:this.instance_486}]},1).to({state:[{t:this.instance_487}]},1).to({state:[{t:this.instance_488}]},1).to({state:[{t:this.instance_489}]},1).to({state:[{t:this.instance_490}]},1).to({state:[{t:this.instance_491}]},1).to({state:[{t:this.instance_492}]},1).to({state:[{t:this.instance_492}]},67).to({state:[{t:this.instance_493}]},1).to({state:[{t:this.instance_494}]},1).to({state:[{t:this.instance_495}]},1).to({state:[{t:this.instance_496}]},1).to({state:[{t:this.instance_497}]},1).to({state:[{t:this.instance_498}]},1).to({state:[{t:this.instance_499}]},1).to({state:[{t:this.instance_500}]},1).to({state:[{t:this.instance_501}]},1).to({state:[{t:this.instance_502}]},1).to({state:[{t:this.instance_503}]},1).to({state:[{t:this.instance_504}]},1).to({state:[{t:this.instance_505}]},1).to({state:[{t:this.instance_506}]},1).to({state:[{t:this.instance_507}]},1).to({state:[{t:this.instance_508}]},1).to({state:[{t:this.instance_509}]},1).to({state:[{t:this.instance_510}]},1).to({state:[{t:this.instance_511}]},1).to({state:[{t:this.instance_512}]},26).to({state:[{t:this.instance_512}]},10).to({state:[]},1).wait(1905));
	this.timeline.addTween(cjs.Tween.get(this.instance_415).to({x:500,y:342.5},49).to({_off:true},1).wait(2275));
	this.timeline.addTween(cjs.Tween.get(this.instance_452).wait(86).to({_off:false},0).to({scaleX:1,scaleY:1,x:500,y:342.5},16).to({_off:true},1).wait(2222));
	this.timeline.addTween(cjs.Tween.get(this.instance_453).wait(103).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(2206));
	this.timeline.addTween(cjs.Tween.get(this.instance_454).wait(119).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(2190));
	this.timeline.addTween(cjs.Tween.get(this.instance_455).wait(135).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(2174));
	this.timeline.addTween(cjs.Tween.get(this.instance_456).wait(151).to({_off:false},0).to({x:500,y:342.5},15).to({_off:true},1).wait(2158));
	this.timeline.addTween(cjs.Tween.get(this.instance_474).wait(184).to({_off:false},0).to({regX:0,regY:0,scaleX:1,scaleY:1,x:500,y:342.5},95).to({_off:true},1).wait(2045));
	this.timeline.addTween(cjs.Tween.get(this.instance_492).wait(297).to({_off:false},0).to({scaleY:1.01,skewX:-8,x:744.5},67).to({_off:true},1).wait(1960));
	this.timeline.addTween(cjs.Tween.get(this.instance_512).wait(409).to({_off:false},0).to({alpha:0},10).to({_off:true},1).wait(1905));

	// Слой 1
	this.instance_513 = new lib.БезимениРисунок98();
	this.instance_513.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance_513).wait(2325));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(500,342.5,1000,685);
// library properties:
lib.properties = {
	width: 1000,
	height: 685,
	fps: 45,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"images/БезимениРисунок1.png", id:"БезимениРисунок1"},
		{src:"images/БезимениРисунок10.png", id:"БезимениРисунок10"},
		{src:"images/БезимениРисунок100.png", id:"БезимениРисунок100"},
		{src:"images/БезимениРисунок101.png", id:"БезимениРисунок101"},
		{src:"images/БезимениРисунок102.png", id:"БезимениРисунок102"},
		{src:"images/БезимениРисунок103.png", id:"БезимениРисунок103"},
		{src:"images/БезимениРисунок104.png", id:"БезимениРисунок104"},
		{src:"images/БезимениРисунок105.png", id:"БезимениРисунок105"},
		{src:"images/БезимениРисунок106.png", id:"БезимениРисунок106"},
		{src:"images/БезимениРисунок107.png", id:"БезимениРисунок107"},
		{src:"images/БезимениРисунок108.png", id:"БезимениРисунок108"},
		{src:"images/БезимениРисунок109.png", id:"БезимениРисунок109"},
		{src:"images/БезимениРисунок10_.png", id:"БезимениРисунок10_"},
		{src:"images/БезимениРисунок11.png", id:"БезимениРисунок11"},
		{src:"images/БезимениРисунок110.png", id:"БезимениРисунок110"},
		{src:"images/БезимениРисунок111.png", id:"БезимениРисунок111"},
		{src:"images/БезимениРисунок112.png", id:"БезимениРисунок112"},
		{src:"images/БезимениРисунок113.png", id:"БезимениРисунок113"},
		{src:"images/БезимениРисунок114.png", id:"БезимениРисунок114"},
		{src:"images/БезимениРисунок115.png", id:"БезимениРисунок115"},
		{src:"images/БезимениРисунок116.png", id:"БезимениРисунок116"},
		{src:"images/БезимениРисунок117.png", id:"БезимениРисунок117"},
		{src:"images/БезимениРисунок118.png", id:"БезимениРисунок118"},
		{src:"images/БезимениРисунок119.png", id:"БезимениРисунок119"},
		{src:"images/БезимениРисунок11_.png", id:"БезимениРисунок11_"},
		{src:"images/БезимениРисунок12.png", id:"БезимениРисунок12"},
		{src:"images/БезимениРисунок120.png", id:"БезимениРисунок120"},
		{src:"images/БезимениРисунок121.png", id:"БезимениРисунок121"},
		{src:"images/БезимениРисунок122.png", id:"БезимениРисунок122"},
		{src:"images/БезимениРисунок123.png", id:"БезимениРисунок123"},
		{src:"images/БезимениРисунок124.png", id:"БезимениРисунок124"},
		{src:"images/БезимениРисунок125.png", id:"БезимениРисунок125"},
		{src:"images/БезимениРисунок126.png", id:"БезимениРисунок126"},
		{src:"images/БезимениРисунок127.png", id:"БезимениРисунок127"},
		{src:"images/БезимениРисунок128.png", id:"БезимениРисунок128"},
		{src:"images/БезимениРисунок129.png", id:"БезимениРисунок129"},
		{src:"images/БезимениРисунок12_.png", id:"БезимениРисунок12_"},
		{src:"images/БезимениРисунок13.png", id:"БезимениРисунок13"},
		{src:"images/БезимениРисунок130.png", id:"БезимениРисунок130"},
		{src:"images/БезимениРисунок131.png", id:"БезимениРисунок131"},
		{src:"images/БезимениРисунок132.png", id:"БезимениРисунок132"},
		{src:"images/БезимениРисунок133.png", id:"БезимениРисунок133"},
		{src:"images/БезимениРисунок134.png", id:"БезимениРисунок134"},
		{src:"images/БезимениРисунок135.png", id:"БезимениРисунок135"},
		{src:"images/БезимениРисунок136.png", id:"БезимениРисунок136"},
		{src:"images/БезимениРисунок137.png", id:"БезимениРисунок137"},
		{src:"images/БезимениРисунок138.png", id:"БезимениРисунок138"},
		{src:"images/БезимениРисунок139.png", id:"БезимениРисунок139"},
		{src:"images/БезимениРисунок13_.png", id:"БезимениРисунок13_"},
		{src:"images/БезимениРисунок14.png", id:"БезимениРисунок14"},
		{src:"images/БезимениРисунок140.png", id:"БезимениРисунок140"},
		{src:"images/БезимениРисунок141.png", id:"БезимениРисунок141"},
		{src:"images/БезимениРисунок142.png", id:"БезимениРисунок142"},
		{src:"images/БезимениРисунок143.png", id:"БезимениРисунок143"},
		{src:"images/БезимениРисунок144.png", id:"БезимениРисунок144"},
		{src:"images/БезимениРисунок145.png", id:"БезимениРисунок145"},
		{src:"images/БезимениРисунок146.png", id:"БезимениРисунок146"},
		{src:"images/БезимениРисунок147.png", id:"БезимениРисунок147"},
		{src:"images/БезимениРисунок148.png", id:"БезимениРисунок148"},
		{src:"images/БезимениРисунок149.png", id:"БезимениРисунок149"},
		{src:"images/БезимениРисунок14_.png", id:"БезимениРисунок14_"},
		{src:"images/БезимениРисунок15.png", id:"БезимениРисунок15"},
		{src:"images/БезимениРисунок150.png", id:"БезимениРисунок150"},
		{src:"images/БезимениРисунок151.png", id:"БезимениРисунок151"},
		{src:"images/БезимениРисунок152.png", id:"БезимениРисунок152"},
		{src:"images/БезимениРисунок153.png", id:"БезимениРисунок153"},
		{src:"images/БезимениРисунок154.png", id:"БезимениРисунок154"},
		{src:"images/БезимениРисунок155.png", id:"БезимениРисунок155"},
		{src:"images/БезимениРисунок156.png", id:"БезимениРисунок156"},
		{src:"images/БезимениРисунок157.png", id:"БезимениРисунок157"},
		{src:"images/БезимениРисунок158.png", id:"БезимениРисунок158"},
		{src:"images/БезимениРисунок159.png", id:"БезимениРисунок159"},
		{src:"images/БезимениРисунок15_.png", id:"БезимениРисунок15_"},
		{src:"images/БезимениРисунок16.png", id:"БезимениРисунок16"},
		{src:"images/БезимениРисунок160.png", id:"БезимениРисунок160"},
		{src:"images/БезимениРисунок161.png", id:"БезимениРисунок161"},
		{src:"images/БезимениРисунок162.png", id:"БезимениРисунок162"},
		{src:"images/БезимениРисунок163.png", id:"БезимениРисунок163"},
		{src:"images/БезимениРисунок164.png", id:"БезимениРисунок164"},
		{src:"images/БезимениРисунок165.png", id:"БезимениРисунок165"},
		{src:"images/БезимениРисунок166.png", id:"БезимениРисунок166"},
		{src:"images/БезимениРисунок167.png", id:"БезимениРисунок167"},
		{src:"images/БезимениРисунок168.png", id:"БезимениРисунок168"},
		{src:"images/БезимениРисунок169.png", id:"БезимениРисунок169"},
		{src:"images/БезимениРисунок16_.png", id:"БезимениРисунок16_"},
		{src:"images/БезимениРисунок17.png", id:"БезимениРисунок17"},
		{src:"images/БезимениРисунок170.png", id:"БезимениРисунок170"},
		{src:"images/БезимениРисунок171.png", id:"БезимениРисунок171"},
		{src:"images/БезимениРисунок172.png", id:"БезимениРисунок172"},
		{src:"images/БезимениРисунок173.png", id:"БезимениРисунок173"},
		{src:"images/БезимениРисунок174.png", id:"БезимениРисунок174"},
		{src:"images/БезимениРисунок175.png", id:"БезимениРисунок175"},
		{src:"images/БезимениРисунок176.png", id:"БезимениРисунок176"},
		{src:"images/БезимениРисунок177.png", id:"БезимениРисунок177"},
		{src:"images/БезимениРисунок178.png", id:"БезимениРисунок178"},
		{src:"images/БезимениРисунок179.png", id:"БезимениРисунок179"},
		{src:"images/БезимениРисунок17_.png", id:"БезимениРисунок17_"},
		{src:"images/БезимениРисунок18.png", id:"БезимениРисунок18"},
		{src:"images/БезимениРисунок180.png", id:"БезимениРисунок180"},
		{src:"images/БезимениРисунок181.png", id:"БезимениРисунок181"},
		{src:"images/БезимениРисунок182.png", id:"БезимениРисунок182"},
		{src:"images/БезимениРисунок183.png", id:"БезимениРисунок183"},
		{src:"images/БезимениРисунок184.png", id:"БезимениРисунок184"},
		{src:"images/БезимениРисунок185.png", id:"БезимениРисунок185"},
		{src:"images/БезимениРисунок187.png", id:"БезимениРисунок187"},
		{src:"images/БезимениРисунок18_.png", id:"БезимениРисунок18_"},
		{src:"images/БезимениРисунок19.png", id:"БезимениРисунок19"},
		{src:"images/БезимениРисунок19_.png", id:"БезимениРисунок19_"},
		{src:"images/БезимениРисунок1_.png", id:"БезимениРисунок1_"},
		{src:"images/БезимениРисунок2.png", id:"БезимениРисунок2"},
		{src:"images/БезимениРисунок20.png", id:"БезимениРисунок20"},
		{src:"images/БезимениРисунок21.png", id:"БезимениРисунок21"},
		{src:"images/БезимениРисунок22.png", id:"БезимениРисунок22"},
		{src:"images/БезимениРисунок23.png", id:"БезимениРисунок23"},
		{src:"images/БезимениРисунок24.png", id:"БезимениРисунок24"},
		{src:"images/БезимениРисунок25.png", id:"БезимениРисунок25"},
		{src:"images/БезимениРисунок26.png", id:"БезимениРисунок26"},
		{src:"images/БезимениРисунок27.png", id:"БезимениРисунок27"},
		{src:"images/БезимениРисунок28.png", id:"БезимениРисунок28"},
		{src:"images/БезимениРисунок29.png", id:"БезимениРисунок29"},
		{src:"images/БезимениРисунок2_.png", id:"БезимениРисунок2_"},
		{src:"images/БезимениРисунок3.png", id:"БезимениРисунок3"},
		{src:"images/БезимениРисунок30.png", id:"БезимениРисунок30"},
		{src:"images/БезимениРисунок31.png", id:"БезимениРисунок31"},
		{src:"images/БезимениРисунок32.png", id:"БезимениРисунок32"},
		{src:"images/БезимениРисунок33.png", id:"БезимениРисунок33"},
		{src:"images/БезимениРисунок34.png", id:"БезимениРисунок34"},
		{src:"images/БезимениРисунок35.png", id:"БезимениРисунок35"},
		{src:"images/БезимениРисунок36.png", id:"БезимениРисунок36"},
		{src:"images/БезимениРисунок37.png", id:"БезимениРисунок37"},
		{src:"images/БезимениРисунок38.png", id:"БезимениРисунок38"},
		{src:"images/БезимениРисунок39.png", id:"БезимениРисунок39"},
		{src:"images/БезимениРисунок3_.png", id:"БезимениРисунок3_"},
		{src:"images/БезимениРисунок4.png", id:"БезимениРисунок4"},
		{src:"images/БезимениРисунок40.png", id:"БезимениРисунок40"},
		{src:"images/БезимениРисунок41.png", id:"БезимениРисунок41"},
		{src:"images/БезимениРисунок42.png", id:"БезимениРисунок42"},
		{src:"images/БезимениРисунок43.png", id:"БезимениРисунок43"},
		{src:"images/БезимениРисунок44.png", id:"БезимениРисунок44"},
		{src:"images/БезимениРисунок45.png", id:"БезимениРисунок45"},
		{src:"images/БезимениРисунок46.png", id:"БезимениРисунок46"},
		{src:"images/БезимениРисунок47.png", id:"БезимениРисунок47"},
		{src:"images/БезимениРисунок48.png", id:"БезимениРисунок48"},
		{src:"images/БезимениРисунок49.png", id:"БезимениРисунок49"},
		{src:"images/БезимениРисунок4_.png", id:"БезимениРисунок4_"},
		{src:"images/БезимениРисунок5.png", id:"БезимениРисунок5"},
		{src:"images/БезимениРисунок50.png", id:"БезимениРисунок50"},
		{src:"images/БезимениРисунок51.png", id:"БезимениРисунок51"},
		{src:"images/БезимениРисунок52.png", id:"БезимениРисунок52"},
		{src:"images/БезимениРисунок53.png", id:"БезимениРисунок53"},
		{src:"images/БезимениРисунок54.png", id:"БезимениРисунок54"},
		{src:"images/БезимениРисунок55.png", id:"БезимениРисунок55"},
		{src:"images/БезимениРисунок56.png", id:"БезимениРисунок56"},
		{src:"images/БезимениРисунок57.png", id:"БезимениРисунок57"},
		{src:"images/БезимениРисунок58.png", id:"БезимениРисунок58"},
		{src:"images/БезимениРисунок59.png", id:"БезимениРисунок59"},
		{src:"images/БезимениРисунок5_.png", id:"БезимениРисунок5_"},
		{src:"images/БезимениРисунок6.png", id:"БезимениРисунок6"},
		{src:"images/БезимениРисунок61.png", id:"БезимениРисунок61"},
		{src:"images/БезимениРисунок62.png", id:"БезимениРисунок62"},
		{src:"images/БезимениРисунок63.png", id:"БезимениРисунок63"},
		{src:"images/БезимениРисунок64.png", id:"БезимениРисунок64"},
		{src:"images/БезимениРисунок65.png", id:"БезимениРисунок65"},
		{src:"images/БезимениРисунок66.png", id:"БезимениРисунок66"},
		{src:"images/БезимениРисунок67.png", id:"БезимениРисунок67"},
		{src:"images/БезимениРисунок68.png", id:"БезимениРисунок68"},
		{src:"images/БезимениРисунок69.png", id:"БезимениРисунок69"},
		{src:"images/БезимениРисунок6_.png", id:"БезимениРисунок6_"},
		{src:"images/БезимениРисунок7.png", id:"БезимениРисунок7"},
		{src:"images/БезимениРисунок70.png", id:"БезимениРисунок70"},
		{src:"images/БезимениРисунок71.png", id:"БезимениРисунок71"},
		{src:"images/БезимениРисунок72.png", id:"БезимениРисунок72"},
		{src:"images/БезимениРисунок73.png", id:"БезимениРисунок73"},
		{src:"images/БезимениРисунок74.png", id:"БезимениРисунок74"},
		{src:"images/БезимениРисунок75.png", id:"БезимениРисунок75"},
		{src:"images/БезимениРисунок76.png", id:"БезимениРисунок76"},
		{src:"images/БезимениРисунок77.png", id:"БезимениРисунок77"},
		{src:"images/БезимениРисунок78.png", id:"БезимениРисунок78"},
		{src:"images/БезимениРисунок79.png", id:"БезимениРисунок79"},
		{src:"images/БезимениРисунок7_.png", id:"БезимениРисунок7_"},
		{src:"images/БезимениРисунок8.png", id:"БезимениРисунок8"},
		{src:"images/БезимениРисунок80.png", id:"БезимениРисунок80"},
		{src:"images/БезимениРисунок81.png", id:"БезимениРисунок81"},
		{src:"images/БезимениРисунок82.png", id:"БезимениРисунок82"},
		{src:"images/БезимениРисунок83.png", id:"БезимениРисунок83"},
		{src:"images/БезимениРисунок84.png", id:"БезимениРисунок84"},
		{src:"images/БезимениРисунок85.png", id:"БезимениРисунок85"},
		{src:"images/БезимениРисунок86.png", id:"БезимениРисунок86"},
		{src:"images/БезимениРисунок87.png", id:"БезимениРисунок87"},
		{src:"images/БезимениРисунок88.png", id:"БезимениРисунок88"},
		{src:"images/БезимениРисунок89.png", id:"БезимениРисунок89"},
		{src:"images/БезимениРисунок8_.png", id:"БезимениРисунок8_"},
		{src:"images/БезимениРисунок9.png", id:"БезимениРисунок9"},
		{src:"images/БезимениРисунок90.png", id:"БезимениРисунок90"},
		{src:"images/БезимениРисунок91.png", id:"БезимениРисунок91"},
		{src:"images/БезимениРисунок92.png", id:"БезимениРисунок92"},
		{src:"images/БезимениРисунок93.png", id:"БезимениРисунок93"},
		{src:"images/БезимениРисунок94.png", id:"БезимениРисунок94"},
		{src:"images/БезимениРисунок95.png", id:"БезимениРисунок95"},
		{src:"images/БезимениРисунок96.png", id:"БезимениРисунок96"},
		{src:"images/БезимениРисунок97.png", id:"БезимениРисунок97"},
		{src:"images/БезимениРисунок99.png", id:"БезимениРисунок99"},
		{src:"images/БезимениРисунок9_.png", id:"БезимениРисунок9_"},
		{src:"images/БезимениРисунок98.jpg", id:"БезимениРисунок98"},
		{src:"images/Hyundailogosilver2560x14401.png", id:"Hyundailogosilver2560x14401"},
		{src:"images/LogoMetro.jpg", id:"LogoMetro"},
		{src:"images/logo.png", id:"logo"},
		{src:"images/LUK_OIL_Logo_latsvg.png", id:"LUK_OIL_Logo_latsvg"},
		{src:"images/pyaterochkalogo.png", id:"pyaterochkalogo"},
		{src:"images/shell.png", id:"shell"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;