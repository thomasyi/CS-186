(function(a){a.fn.swipe=function(b){var c={threshold:{x:140,y:200},swipeLeft:function(){alert("swiped left")},swipeRight:function(){alert("swiped right")}};var b=a.extend(c,b);if(!this){return false}return this.each(function(){var h=a(this);var f={x:0,y:0};var d={x:0,y:0};function e(k){console.log("Starting swipe gesture...");f.x=k.targetTouches[0].pageX;f.y=k.targetTouches[0].pageY}function j(k){d.x=k.targetTouches[0].pageX;d.y=k.targetTouches[0].pageY}function g(k){console.log("Ending swipe gesture...");var l=f.y-d.y;if(l<c.threshold.y&&l>(c.threshold.y*-1)){changeX=f.x-d.x;if(changeX>c.threshold.x){c.swipeLeft(k)}if(changeX<(c.threshold.x*-1)){c.swipeRight(k)}}}function i(k){console.log("Canceling swipe gesture...")}this.addEventListener("touchstart",e,false);this.addEventListener("touchmove",j,false);this.addEventListener("touchend",g,false);this.addEventListener("touchcancel",i,false)})}})(jQuery);