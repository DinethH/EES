var angle = 0;     // starting position (degrees)
var distance = 30; // distance of b from a
var speed = 60;    // revolution speed in degrees per second
var rate  = 10;    // refresh rate in ms

function f() {
    
    var o = $('#a').offset();
    
    var t = o.top + (distance * Math.sin(angle * Math.PI/180.0));
    var l = o.left+ (distance * Math.cos(angle * Math.PI/180.0));
    
    $('#b').css({
        top: t,
        left: l
    });
    $('#c').css({
        top: t + 20,
        left: l + 30
    });
    $('#d').css({
        top: t +40,
        left: l +40
    });
    angle += (speed * (rate/1000)) % 360;
}

setInterval(f, rate);
​