
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram | feed</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/paginaInicial.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/header.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/global.css">

</head>

<body>
    <div id="container">
        <!--menu navbar-->
        <?php $render('navbar');?>
    
         
        <div class="downscreen">
            <?php if(!empty($search)): ?>
                <div class="userSearch">
                    <div class="img">
                        <img src="<?=$base;?>/assets/images/<?=$search['foto'];?>" alt="">
                    </div>
                    <div class="nome">
                        <h4><?=$search['nome'];?></h4>
                    </div>
                    <div class="seguir">
                        +
                    </div>

                </div>
            <?php else: ?>
                <strong>Nada encontrado</strong>
            <?php endif;?>
        </div>     
</div>

    </div>
</body>
<script src="<?=$base;?>/assets/js/script.js"></script>
</html>
