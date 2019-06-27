<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="<?= $this->config->base_url() ?>css/css.css" rel="stylesheet" type="text/css">
        <title>ImobTech</title>
    </head>

    <div class="container-fluid">
    <div class="row">
<div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light MenuSimpleGeral">
<a href="https://www.facebook.com/"><i class="fab fa-facebook-square mr-2 Icon1"></i></a>
<a href="https://twitter.com/"><i class="fab fa-twitter-square mr-2"></i></a>
<a href="https://www.instagram.com/?hl=pt-br"><i class="fab fa-instagram mr-2 Icon3"></i></a>
<a href="https://www.youtube.com/"><i class="fab fa-youtube-square Icon4"></i></a>
<a href="#" class="navbar-brand MenuSimple MenuSimple1"><i class="far fa-comment-dots"></i> Contate-nos</a>
<a href="<?= $this->config->base_url() . 'Admin/Login' ?>" class="nav-link text-dark ml-5 MenuSimple"><i class="fas fa-user-lock mr-1"></i> Área do admin</a>
    </nav>
</div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
        <nav class="navbar navbar-expand navbar">
            <a href="#" class="nav-link text-dark mr-5 MenuSimpleGeral2">Imob<span id="ColorDuo">Tech</span></a>
        <a href="<?= $this->config->base_url() . 'Home/listar' ?>" class="navbar-brand text-dark ml-5 TextOption">Inicial</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active text-dark mr-3 TextOption" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Venda</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" class="dropdown-item">Todos os imoveis</a>
                        <a href="#" class="dropdown-item">Casa</a>
                        <a href="#" class="dropdown-item">Apartamentos</a>
                    </div>
                </li>
                <li class="nav-item dropdown show-on-hover">
                    <a href="#" class="nav-link dropdown-toggle active text-dark mr-3 TextOption" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Locação</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a href="#" class="dropdown-item">Todos os imoveis</a>
                        <a href="#" class="dropdown-item">Casa</a>
                        <a href="#" class="dropdown-item">Apartamentos</a>
                    </div>
                </li>
                <a href="#" class="nav-item active nav-link text-dark mr-3 TextOption">Quem somos</a>
                <a href="<?= $this->config->base_url() . 'Contato/listar' ?>" class="nav item active nav-link text-dark TextOption">Contato</a>
            </ul>

            <form action="#" method="post" class="form-inline my-2 mylg-0">
                <input type="search" name="buscar" id="buscar" class="form-control mr-sm-2" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
            </form>

            <a href="#" class="nav item active nav-link TextOption2 ml-3">Seu Imóvel <i class="fas fa-home"></i></a>
        </div>
    </nav>
        </div>
    </div>
      </div>