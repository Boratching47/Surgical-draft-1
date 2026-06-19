(function(){
  // Header shrink on scroll
  var header=document.querySelector('.site-header');
  var onScroll=function(){header.classList.toggle('shrink',window.scrollY>30);};
  window.addEventListener('scroll',onScroll,{passive:true});onScroll();

  // Scroll reveal
  var els=document.querySelectorAll('.reveal');
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(entries){
      entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}});
    },{threshold:.12});
    els.forEach(function(el){io.observe(el);});
  }else{
    els.forEach(function(el){el.classList.add('in');});
  }
})();
