document.addEventListener("DOMContentLoaded",()=>{
var navbut = document.getElementById('nav_but');
var trigger = true;
$('.navigation>li>a').css('color','#eeb111').css('text-decoration','none');
$('.navigation>li').mouseover(function(){
    TweenMax.to($(this), .5, {y:-5, ease: Power3.easeOut});
    }).mouseleave(function(){TweenMax.to($(this), .5, {y:5, ease: Power3.easeOut});});
       

TweenMax.set($('.fa-times'),{rotation:90});
navbut.addEventListener('click',()=>{
    
    if(trigger === true){
        
        TweenMax.from($('#menu'), 1.5, {x:-4000, ease: Power3.easeOut,delay:1});
        TweenMax.from($('.navigation'), 1.5, {x:600, ease: Power3.easeOut,delay:1});
        TweenMax.from($('.background'), 1.5, {x:2000, ease: Power3.easeOut,delay:0.4});
        TweenMax.to($('.fa-bars'),0.5,{rotation:-90,ease: Power3.easeOut});
        TweenMax.to($('.fa-times'),0.5,{rotation:0,ease: Power3.easeOut});
        TweenMax.staggerFrom(".navigation>li", 1, {x:300,opacity:0, stagger:0.2,delay:1,ease: Power4.easeOut});
        $('.logo').css('opacity','0');
        trigger = false;
    }
    else{
        
        $('.logo').css('opacity','1');
        
        TweenMax.to($('.fa-bars'),0.5,{rotation:0,ease: Power3.easeOut});
        TweenMax.to($('.fa-times'),0.5,{rotation:90,ease: Power3.easeOut});
        trigger =true;
    }
});  
    TweenMax.from($('.main_wrap>h1'), 2.5, {opacity:0,y:200, ease: Power3.easeOut,delay:0});
    TweenMax.from($('.main_wrap>p'), 2.5, {opacity:0,y:200, ease: Power3.easeOut,delay:0.5});
    TweenMax.from($('.bar-line'), 2, {x:100, ease: Power3.easeOut,delay:2.7});
    TweenMax.from($('#golden'), 1.5, {x:-4000, ease: Power3.easeOut});
    TweenMax.from($('#apple'), 1.5, {x:4000, ease: Power3.easeOut});
    TweenMax.from($('.square'), 1.5, {width:0, ease: Power3.easeOut,delay:0.5});
    TweenMax.from($('.hero_img'), 1.5, {width:0, ease: Power3.easeOut,delay:0.8});
    TweenMax.from($('.vert_line'), 1.5, {height:0, ease: Power3.easeOut,delay:2});
    TweenMax.from($('.horizont_line'), 1.5, {width:0, ease: Power3.easeOut,delay:1.2});
    TweenMax.from($('.logo'), 1.5, {y:-100,opacity:0, ease: Power3.easeOut,delay:2.2});
    
    if(window.innerWidth>770){
    TweenMax.from($('.sidebar'), 1.5, {x:200,opacity:0, ease: Power3.easeOut,delay:2.2});
}
else{
    TweenMax.from($('.sidebar'), 1.5, {y:-200,opacity:0, ease: Power3.easeOut,delay:2.2});
}
var a =0,b=$('#apple').width()*0.6;
// document.addEventListener('scroll',(event)=>{
//     if(event.originalEvent.wheelDelta >= 0){
//     TweenMax.to($('#golden'), 1.5, {x:a, ease: Power3.easeOut});
//     a+=100;
//     }
//     else{
//         TweenMax.to($('#golden'), 1.5, {x:a, ease: Power3.easeOut});
//         a-=100;
//     }
// })

$(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta < 0) {
        TweenMax.to($('#golden'), .5, {x:a});
        TweenMax.to($('#apple'), .5, {x:b});
        a+=100;
        b-=100;
        console.log(event.originalEvent.wheelDelta);
    }
    else if(event.originalEvent.wheelDelta > 0 && a>=0) {
        
        TweenMax.to($('#golden'), .5, {x:a, ease: Power3.easeOut});
        TweenMax.to($('#apple'), .5, {x:b});
        b+=100;
        a-=100;
        console.log(event.originalEvent.wheelDelta);
    }
    });
    $(".off_item").on("mouseenter", function() {
        var duration = 1;
        TweenMax.to(this, duration / 4, {y:-50, ease:Power2.easeOut});
        TweenMax.to(this, duration / 2, {y:0, ease:Bounce.easeOut, delay:duration / 4});
      });
});
