var adiciona = document.querySelector('.add')

adiciona.addEventListener('click',function(e){
    conteudo = document.querySelector('input');
    lista = document.querySelector('ul');
    
    item = document.createElement('li');
    item.classList.add('item');
    item.setAttribute('id',new Date().getMilliseconds())
    item.textContent = conteudo.value;
    
    item.addEventListener("click",function(e){
        e.target.remove();
    })
    
    lista.appendChild(item);
    
    conteudo.value='';
});

