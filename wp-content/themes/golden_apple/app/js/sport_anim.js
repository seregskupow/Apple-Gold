document.addEventListener("DOMContentLoaded",()=>{

    var cards = document.querySelectorAll('.crue_col');
    var sport = document.querySelectorAll('.crue_col_sport');
    var about =document.querySelectorAll('.about');
   console.log(cards);
    cards.forEach((el,index)=>{
        el.addEventListener('mouseover',()=>{
            TweenMax.to(sport[index], .5, {y:-400, ease: Power3.easeOut});
            TweenMax.to(about[index], .7, {y:-800, ease: Power3.easeOut});
        });
        el.addEventListener('mouseleave',()=>{
            TweenMax.to(sport[index], .5, {y:-120, ease: Power3.easeOut});
            TweenMax.to(about[index], .5, {y:-516, ease: Power3.easeOut});
        });
    })

    TweenMax.staggerFrom(".crue_col", 1, {scale:0,y:300,opacity:0, stagger:0.2,delay:1,ease: Power4.easeOut});
    TweenMax.from($('#crue_title'), 1.5, {y:200, ease: Power4.easeOut,delay:0.4});
    TweenMax.from($('.line'), 2, {scale:0, ease: Power4.easeOut,delay:1.2});
})