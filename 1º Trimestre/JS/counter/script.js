const decrementa = document.querySelector('.decrementa');
const reset = document.querySelector('.reset');
const incrementa = document.querySelector('.incrementa');
var valor = parseInt(document.querySelector('h2').innerHTML);


decrementa.addEventListener('click',function(){
    let valor = parseInt(document.querySelector('h2').innerHTML);
    document.querySelector('h2').innerHTML = --valor;
})

reset.addEventListener('click',function(){
    document.querySelector('h2').innerHTML = 0;
})

incrementa.addEventListener('click',function(){
  let valor = parseInt(document.querySelector('h2').innerHTML);
  document.querySelector('h2').innerHTML = ++valor;
})






