function send(to){

    const forms = document.getElementById("form");
    var Resposta = document.getElementById("response");
    
    forms.addEventListener('submit', evento => {
        evento.preventDefault();
        
        const form_dados = new FormData(forms);
        const dados = Object.fromEntries(form_dados);
        
        fetch(to, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dados)
        })
        .then(resposta => resposta.json())
        .then(data => {

            Resposta.innerHTML = data.message;
            setTimeout(function(){ 
                window.location.href = data.redirect;  
            }, 2000);
            
        })
        .catch(error => console.error('Erro:', error));
    });

}


function go_to(x){

    if (x==0){
        setTimeout(function(){
            window.location.href = "index.html";
        }, 1000);
    }

    if (x==1){
        window.location.href = "signup.html";
    }

}
