
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
    if (origem=='g'){
        if(destino == 'q'){
            resultado = quantia/1000;
        }else if (destino == 't'){
            resultado = quantia/10000;
        }
    }

    if (origem=='q'){
        if(destino == 'g'){
            resultado = quantia*1000;
        }else if (destino == 't'){
            resultado = quantia/1000;
        }
    }

    if (origem=='t'){
        if(destino == 'g'){
            resultado = quantia*10000;
        }else if (destino == 'q'){
            resultado = quantia*1000;
        }
    }
    valor.value = parseFloat(resultado);
})