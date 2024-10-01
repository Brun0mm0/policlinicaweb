// slices
// options.fadeOut - fade out old image 
function ws_slices(n,v,k){function t(b,l,f,e,m,g){n.support.transform&&(l.top&&(l.translate=[0,l.top||0,0]),f.top&&(f.translate=[0,f.top||0,0]),delete l.top,delete f.top);wowAnimate(b,l,f,e,m,"swing",g)}var b=jQuery,w=b(this);b.fn._reverse=[].reverse;b("li",k);var u=b("ul",k);k=b("<div>").addClass("ws_effect ws_slices").css({left:0,top:0,"z-index":8,overflow:"hidden",width:"100%",height:"100%",position:"absolute"}).appendTo(k);var x=new function(n,l){var f=b.extend({},{effect:"random",slices:15,animSpeed:500,
pauseTime:3E3,startSlide:0,container:null,onEffectEnd:0},l),e={currentSlide:0,currentImage:"",totalSlides:0,randAnim:"",stop:!1},m=b(n);m.data("wow:vars",e);/absolute|relative/.test(m.css("position"))||m.css("position","relative");var g=l.container||m,p=m.children();e.totalSlides=p.length;0<f.startSlide&&(f.startSlide>=e.totalSlides&&(f.startSlide=e.totalSlides-1),e.currentSlide=f.startSlide);b(p[e.currentSlide]).is("img")?e.currentImage=b(p[e.currentSlide]):e.currentImage=b(p[e.currentSlide]).find("img:first");
b(p[e.currentSlide]).is("a")&&b(p[e.currentSlide]).css("display","block");for(var k=0;k<f.slices;k++){var q=Math.round(g.width()/f.slices),q=b('<div class="wow-slice"></div>').css({left:q*k+"px",overflow:"hidden",width:(k==f.slices-1?g.width()-q*k:q)+"px",position:"absolute"}).appendTo(g);b("<img>").css({position:"absolute",left:0,top:0,transform:"translate3d(0,0,0)"}).appendTo(q)}this.sliderRun=function(b,g){if(e.busy)return!1;f.effect=g||f.effect;e.currentSlide=b-1;u(m,p,f,!1);return!0};var r=function(){if(f.onEffectEnd)f.onEffectEnd(e.currentSlide);
g.hide();b(".wow-slice",g).css({transition:"",transform:""});e.busy=0},u=function(d,f,c,e){var a=d.data("wow:vars");if((!a||a.stop)&&!e)return!1;a.busy=1;a.currentSlide++;a.currentSlide==a.totalSlides&&(a.currentSlide=0);0>a.currentSlide&&(a.currentSlide=a.totalSlides-1);a.currentImage=b(f[a.currentSlide]);a.currentImage.is("img")||(a.currentImage=a.currentImage.find("img:first"));var k=b(v[a.currentSlide]),k={width:k.width(),heiht:k.height(),marginTop:k.css("marginTop"),marginLeft:k.css("marginLeft")};
b(".wow-slice",g).each(function(d){var f=b(this),e=b("img",f),h=Math.round(g.width()/c.slices);e.width(g.width());e.attr("src",a.currentImage.attr("src"));e.css({left:-h*d+"px"}).css(k);f.css({height:"100%",opacity:0,left:h*d,width:d==c.slices-1?g.width()-h*d:h})});g.show();"random"==c.effect&&(d="sliceDownRight sliceDownLeft sliceUpRight sliceUpLeft sliceUpDownRight sliceUpDownLeft fold fade".split(" "),a.randAnim=d[Math.floor(Math.random()*(d.length+1))],void 0==a.randAnim&&(a.randAnim="fade"));
-1!=c.effect.indexOf(",")&&(d=c.effect.split(","),a.randAnim=b.trim(d[Math.floor(Math.random()*d.length)]));if("sliceDown"==c.effect||"sliceDownRight"==c.effect||"sliceDownRight"==a.randAnim||"sliceDownLeft"==c.effect||"sliceDownLeft"==a.randAnim){var h=0;d=b(".wow-slice",g);if("sliceDownLeft"==c.effect||"sliceDownLeft"==a.randAnim)d=d._reverse();d.each(function(a){t(b(this),{top:"-100%",opacity:0},{top:"0%",opacity:1},c.animSpeed,100+h,a==c.slices-1?r:0);h+=50})}else if("sliceUp"==c.effect||"sliceUpRight"==
c.effect||"sliceUpRight"==a.randAnim||"sliceUpLeft"==c.effect||"sliceUpLeft"==a.randAnim){h=0;d=b(".wow-slice",g);if("sliceUpLeft"==c.effect||"sliceUpLeft"==a.randAnim)d=d._reverse();d.each(function(a){t(b(this),{top:"100%",opacity:0},{top:"0%",opacity:1},c.animSpeed,100+h,a==c.slices-1?r:0);h+=50})}else if("sliceUpDown"==c.effect||"sliceUpDownRight"==c.effect||"sliceUpDownRight"==a.randAnim||"sliceUpDownLeft"==c.effect||"sliceUpDownLeft"==a.randAnim){h=0;d=b(".wow-slice",g);if("sliceUpDownLeft"==
c.effect||"sliceUpDownLeft"==a.randAnim)d=d._reverse();d.each(function(a){t(b(this),{top:(a%2?"-":"")+"100%",opacity:0},{top:"0%",opacity:1},c.animSpeed,100+h,a==c.slices-1?r:0);h+=50})}else if("fold"==c.effect||"fold"==a.randAnim){h=0;d=b(".wow-slice",g);var l=d.width();d.each(function(a){t(b(this),{width:0,opacity:0},{width:l,opacity:1},c.animSpeed,100+h,a==c.slices-1?r:0);h+=50})}else if("fade"==c.effect||"fade"==a.randAnim)d=b(".wow-slice",g),b(".wow-slice",g).each(function(a){b(this).css("height",
"100%");b(this).animate({opacity:"1.0"},2*c.animSpeed,a==c.slices-1?r:0)})}}(u,{keyboardNav:!1,caption:0,effect:"sliceDownRight,sliceDownLeft,sliceUpRight,sliceUpLeft,sliceUpDownRight,sliceUpDownLeft,sliceUpDownRight,sliceUpDownLeft,fold,fold,fold",animSpeed:n.duration,startSlide:n.startSlide,container:k,onEffectEnd:function(b){w.trigger("effectEnd")}});this.go=function(b,k){x.sliderRun(b);n.fadeOut&&u.fadeOut(n.duration)}};
