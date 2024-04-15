const textarea = document.querySelector('textarea');
var h3 = document.querySelector('h3');

textarea.addEventListener('keyup',function(e){
    texto = e.target.value;
    h3.innerHTML = `Número de letras digitadas: ${texto.length}`;
});