
//Busca todos os elementos com o name cor.
var cores = document.querySelectorAll('input[name="cor"]');
//Adiciona para cada um deles o evento de change, quando mudar usa a função MudaCor
cores.forEach(cor => cor.addEventListener('change', () => MudaCor(cor.value)));

//Função MudaCor recebe o valor do radio e altera a cor de fundo do header e do footer
function MudaCor(cor){
    header = document.querySelector('header');
    footer = document.querySelector('footer');
    header.style.backgroundColor = cor;
    footer.style.backgroundColor = cor;
}

converte = document.querySelector('button');
converte.addEventListener('click', function(){
    let quantia = parseFloat(document.querySelector('#quantia').value);
    let origem = document.querySelector('#origem').value;
    let destino = document.querySelector('#destino').value;
    let valor = document.querySelector('#valor');
    let resultado = 0;

    if(origem==destino){
        resultado = quantia;
    }
    if (origem=='r'){
        if(destino == 'd'){
            resultado = quantia*0.18;
        }else if (destino == 'e'){
            resultado = quantia*0.17;
        }
    }

    if (origem=='d'){
        if(destino == 'r'){
            resultado = quantia*5.43;
        }else if (destino == 'e'){
            resultado = quantia*0.93;
        }
    }

    if (origem=='e'){
        if(destino == 'r'){
            resultado = quantia*5.82;
        }else if (destino == 'd'){
            resultado = quantia*1.07;
        }
    }
    valor.value = parseFloat(resultado);
})