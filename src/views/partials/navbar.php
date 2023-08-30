<nav id="nav">
    <div class="logo">
        <h1>CLONE INSTA</h1>

    </div>
    <ul id="ul">
        <li class="li"><img class="img" src="https://img.icons8.com/?size=512&id=1iF9PyJ2Thzo&format=png" alt="pag"><a id="pagInicial" href="<?=$base;?>/home"><strong>Página Inicial</strong></a></li>
        <li class="li" id="search"><img class="img" src="https://img.icons8.com/?size=512&id=7695&format=png" alt="pesquisar"><a>Pesquisa</a></li>
        <li class="li"><img class="img" src="https://img.icons8.com/?size=512&id=PxI9IPCyBAOD&format=png" alt="reels"><a href="">Reels</a></li>
        <li class="li"><img class="img" src="https://img.icons8.com/?size=512&id=PxI9IPCyBAOD&format=png" alt="reels"><a href="<?=$base;?>/search
        ">search</a></li>
        <li class="li"><img class="img" src="https://img.icons8.com/?size=512&id=20202&format=png" alt="mensag"><a href="">Mensagens</a></li>
        <li class="li"><img class="img" src="https://img.icons8.com/?size=512&id=85033&format=png" alt="notif"><a href="">Notificações</a></li>
        <li class="li " onclick="criar()"><img class="img" src="https://img.icons8.com/?size=512&id=95852&format=png" alt="criar">Criar</li>
        <li class="li"><img id="perfil" class="img" src="https://st2.depositphotos.com/4164031/6914/i/450/depositphotos_69145633-stock-photo-flag-of-brazil.jpg" alt="perfil"><a href="<?=$base;?>/perfil">Perfil</a></li>
    </ul>
    <div class="logout">
        <a href="<?=$base;?>/logout">= Mais</a>

    </div>
</nav>

<div id="telapost" >
    <div id="button" onclick="criar()">X</div>


    <form method="post" action="<?=$base;?>/postagem/<?=$_SESSION['usuario']['id'];?>" enctype="multipart/form-data" class="postagem">
        <div class="header_post">
            <a class="buttonReturn"  onclick="voltar()" style="cursor:pointer;"><--</a>
            <h4>Criar publicação nova</h4>
            <input class="buttonPublic" type="submit" value="publicar" >
        </div>
        <div class="container_post">
            <img id="img" src="<?=$base;?>/assets/images/postagem_icon.png" alt="" > 
            <h4>Arrasta fotos e vídeos para aqui</h4>
            <a id="input" >
                <input id="clicar" name="arquivo" style="display:none;">
                selecionar do computador
            </a>          
        </div>
        
        <div class="containerPreview" >
        
            <img src="" alt="preview" id="image">
            <div class="legenda" >
                <strong> Usuario</strong> 
                <textarea name="legenda" id="legenda" cols="30" rows="10" onkeydown="aperta()">  
                                   
                    Escreva uma legenda...
                </textarea>
            </div>
        </div>

        
</form>

    
</div>


<div id="screenSearch" style="display:none; z-index:5; ">
    <form action="<?=$base;?>/search_Action" method="post" class="upscreen">
        <input type="search" name="search" placeholder="Encontre amigos">
        <div class="searchImg">
            <img src="<?=$base;?>/assets/images/search.png" alt="">
            <input type="submit" value="pesquisar">
        </div>
    </form>
</div>

