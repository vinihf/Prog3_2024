

/*
    Exemplo 1
    Executa imediatamente
*/
alert("Olá!");




/*  
    Exemplo 2
    Executa a partir da ação de um botão
*/
//Função que imprime Olá!
function hello(){
    alert("Olá!")
}

//Com DOM eu acesso o botão
var botao = document.querySelector('.botao-hello');

//Quando clicar no botão, executa a função
botao.addEventListener('click',hello);


/*
    Exemplo 3
*/

//Com DOM eu acesso o botão
var botao1 = document.querySelector('.botao-hello1');

//Quando clicar no botão, executa a função
botao1.addEventListener('click',function(e){
    alert("Olá!")
    e.target.style.backgroundColor = 'blue';
    e.target.style.color = 'red';
});