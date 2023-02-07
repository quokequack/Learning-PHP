function myFormData(event){
    event.preventDefault();
    const formData = new FormData(this);
    window.fetch(this.getAttribute('action'),{
        method: 'POST',
        body: formData
    }).then(function(response){
        console.log(response.text());
    }).then(function(text){
        document.getElementById('mensagem').innerHTML = text;
    }).catch(function (error){
        alert('Erro! '+ error);
    }); 
}

function meuFetch(){
    window.fetch("meuFetch.php?nome=Maria")
    .then(response => response.text())
    .then(data=>{
        document.getElementById("mensagem").innerHTML = data;
    }).catch(error => alert("Erro! "+error));
}
function meuAjax(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'meuAjax.php?nome=Maria');
    xhr.onload = function(){
        if(xhr.status == 200){
            document.getElementById("mensagem").innerHTML = xhr.responseText;
        }else{
            alert("Erro! Status:"+xhr.status);
        }
    }
    xhr.send();
}
