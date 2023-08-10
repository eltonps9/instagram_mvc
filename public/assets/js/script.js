var tela = document.querySelector("#telapost");
var button = document.querySelector("#input");
var clicar = document.querySelector("#clicar");
var preview = document.querySelector(".containerPreview");
var containerPost = document.querySelector(".container_post");
var img = document.querySelector("#image");
var buttonReturn = document.querySelector(".buttonReturn");
var buttonPublic = document.querySelector(".buttonPublic");
var legenda = document.querySelector(".legenda");
var postando = document.querySelector(".postagem");

// botão para adicionar foto
button.addEventListener('click', () => {
    clicar.type = 'file';
    clicar.click();

});

clicar.onchange = () => {
    if (clicar.files[0]) {
        containerPost.style.display = 'none';
        preview.style.display = 'flex';
        buttonPublic.style.display = 'block';
        buttonReturn.style.display = 'block';
        legenda.style.display = 'flex';
        postando.style.width = '650px';
        img.style.width = '60%';
        img.src = URL.createObjectURL(clicar.files[0])
    }

}

// area de pesquisa
var search = document.querySelector("#search");
var screenSearch = document.querySelector("#screenSearch");

search.addEventListener('click', () => {
    if (screenSearch.style.display == 'flex') {
        screenSearch.style.display = "none";
    } else {
        screenSearch.style.display = "flex";
    }

});

function voltar() {

    alert('deseja mesmo descartar?');
    containerPost.style.display = 'flex';
    preview.style.display = 'none';
    buttonPublic.style.display = 'none';
    buttonReturn.style.display = 'none';
    postando.style.width = '400px';

}

function criar() {
    var tela = document.querySelector("#telapost");
    var container = document.querySelector("#container_section");

    if (tela.style.display == 'flex') {
        tela.style.display = "none";
        body.style.overflow = "hidden";
    } else {
        container.style.overflow = "auto";
        tela.style.display = "flex";
    }
}

function aperta() {
    document.querySelector("#legenda").innerHTML = "";
}