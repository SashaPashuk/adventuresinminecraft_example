const copyBtn = document.getElementById('copyBtn');
const ipText = document.getElementById('ipText');

copyBtn.addEventListener('click', function(){
  navigator.clipboard.writeText(ipText.innerText);
  success('Скопированно!', 2000);
})