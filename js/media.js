const navBtn = document.getElementById('navBtn');
const innerNav = document.getElementById('innerNav');
const header = document.querySelector('header');
let animable = true;

navBtn.addEventListener('click', function(){
  if(animable){
    if(innerNav.style.display == 'flex'){
      animable = false;
      innerNav.style.animation = 'navAnim 0.5s reverse ease-out';
      setTimeout(function(){
        animable = true;
        innerNav.style.display = 'none';
        innerNav.style.animation = 'none';
      }, 500)
    } else{
      innerNav.style.display = 'flex';
      animable = false;
      innerNav.style.animation = 'navAnim 0.5s';
      setTimeout(function(){
        animable = true;
        innerNav.style.animation = 'none';
      }, 500)
    }
  }
})

const mediaQueryCondition = window.matchMedia( '( min-width: 701px )' )
setInterval(function(){
  if ( mediaQueryCondition.matches ) {
      document.getElementById('innerNav').style.cssText = `
          display: flex !important;
      `
  }
}, 100)
