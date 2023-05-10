const errorText = document.getElementById('errorText');
const errorV = document.getElementById('error');

function error(err, time){
  let timeS = time / 1000;
  errorText.innerText = err;
  errorV.style.display = 'flex';
  errorV.style.animation = 'notify ' + timeS + 's ease-out';
  setTimeout(function(){
    errorV.style.animation = '';
    errorV.style.display = 'none';
  }, time-50)
}

const successV = document.getElementById('success');
function success(msg, time){
  let timeS = time / 1000;
  successV.innerText = msg;
  successV.style.display = 'flex';
  successV.style.animation = 'notify ' + timeS + 's ease-out';
  setTimeout(function(){
    successV.style.animation = '';
    successV.style.display = 'none';
  }, time-50)
}