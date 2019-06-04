<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
           <link href="<?= $this->config->base_url() ?>css/css.css" rel="stylesheet" type="text/css">
        <title>Menu do Admin</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= $this->config->base_url() . 'index.php/Imovel/cadastrar' ?>"><i class="fas fa-hotel text-light mr-2 ml-2"></i> Imobiliaria/Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuImoveis" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Imoveis</a>
                        <div class="dropdown-menu" aria-labelledby="menuImoveis">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'index.php/Imovel/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'index.php/Imovel/listar' ?>">Visualizar</a>
                        </div>
                        </div>
                        </nav>

