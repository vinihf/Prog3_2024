formulario = document.querySelector('form');
formulario.addEventListener('submit',function(){
    var questao1 = document.querySelector('input[name=questao1]:checked');
    var questao2 = document.querySelector('input[name=questao2]:checked');
    var pontos = 0;
    if(questao1.value == 'c'){
        pontos++;
    }
    if(questao2.value == 'a'){
        pontos++;
    }

    if(pontos==0){
        alert(`Você acertou ${pontos} de 2 questões! Precisa estudar mais.`);
    }else if (pontos==1){
        alert(`Você acertou ${pontos} de 2 questões! Foi bem, mas pode melhorar.`);
    }else{
        alert(`Você acertou ${pontos} de 2 questões! Muito bem!`);
    }
});