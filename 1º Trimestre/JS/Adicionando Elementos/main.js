var adiciona = document.querySelector('.add')

adiciona.addEventListener('click',function(e){
    conteudo = document.querySelector('input');
    lista = document.querySelector('ul');
    
    //Criar a tag html
    item = document.createElement('li');
    //Adiciono uma class para ela
    item.classList.add('item');
    //Defino um id para o elemento novo
    item.setAttribute('id',new Date().getMilliseconds())
    //Adiciono o texto dentro dela
    item.textContent = conteudo.value;
    
    item.addEventListener("click",function(e){
        e.target.remove();
    })
    
    //Adiciono a tag na lista que está na tela
    lista.appendChild(item);
    
    conteudo.value='';
});

