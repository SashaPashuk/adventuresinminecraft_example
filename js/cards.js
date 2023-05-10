const card = document.querySelectorAll('.card');
const darkness = document.getElementById('darkness');

card.forEach(elem => {
  elem.addEventListener('click', function(){
    const active = document.getElementById(elem.id + 'a');
    activate(active);
  })
})

function activate(active){
  active.style.display = 'inline-flex';
  active.style.animation = 'show 0.5s ease-in';
  darkness.style.display = 'block';
  darkness.style.animation = 'show 0.5s ease-in'

  darkness.addEventListener('click', function(){
    active.style.display = 'none';
    active.style.animation = '';
    darkness.style.display = 'none';
    darkness.style.animation = ''
  })
}
