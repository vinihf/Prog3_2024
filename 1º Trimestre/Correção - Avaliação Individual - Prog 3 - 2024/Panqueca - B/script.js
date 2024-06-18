formulario = document.querySelector('form');
formulario.addEventListener('submit',function(e){
    e.preventDefault();
    let tamanho = document.querySelector('#tamanho').value;
    let queijo = document.querySelector(".queijo");
    let calabresa = document.querySelector(".calabresa");
    let morango = document.querySelector(".morango");
    let quantidade = document.querySelector("#quantidade").value;
    
    preco = 0;
    
    if(tamanho=="p"){
        preco = 10;
    }else if(tamanho=="m"){
        preco = 15;
    }else{
        preco = 20;
    }

    if(queijo.checked){
        preco+=4;
    }

    if(calabresa.checked){
        preco+=3.5;
    }

    if(morango.checked){
        preco+=8;
    }

    preco *=quantidade;

    if(formulario.retirada.value == 'entrega'){
        preco+=5;
    }
    
    document.querySelector("h3").innerHTML=`R$ ${preco}`;

});