<?php
    //VERIFICA EXISTÊNCIA DE $active_page. CASO NÃO EXISTA, ESTA VARIÁVEL É CRIADA COMO UMA STIRNG VÁZIA.
    if(!isset($active_page)){
        $active_page = '';
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo (isset($title) ? $title : 'No name') ?></title>
        
        <!--JQUERY CDN GOOGLE API-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
        <!--IMPORTANDO BOOTSTRAP DE ACORDO COM VERSÃO USADA NA PÁGINA-->
        <?php if($bootstrap_version == "3.0") : ?>
            <!--BOOTSTRAP 3.0 CDN-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <?php elseif($bootstrap_version == "4.0") : ?>
            <!--BOOTSTRAP 4.0 CDN-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <?php endif; ?>
        
        <!--CSS DO PROJETO-->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="<?php echo ( ( isset($page_css) ) ? ( 'css/' . $page_css ) : '#' ) ?>">
        
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand" href="vw_dashboard.php"><img src="img/logo.png" width="50" height="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ( ($active_page == 'link_cadastrar_desafio') ? 'active' : '' ) ?>" id="link_cadastrar_desafio" href="vw_addDesafio.php">Cadastrar Desafio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ( ($active_page == 'link_res_desafios_anteriores') ? 'active' : '' ) ?>" id="link_res_desafios_anteriores" href="vw_consultaRespostas.php">Respostas de Desafios Anteriores</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>