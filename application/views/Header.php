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
                        <a href="#" id="menuImoveis" class="nav-link dropdown-toggle ml-5" role="button" data-toggle="dropdown">Imoveis</a>
                        <div class="dropdown-menu" aria-labelledby="menuImoveis">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Imovel/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Imovel/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuCategoria" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="menuCategoria">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Categoria/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuDetalhe" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Detalhes</a>
                        <div class="dropdown-menu" aria-labelledby="menuDetalhe">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Detalhe/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Detalhe/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuProximidade" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Proximidades</a>
                        <div class="dropdown-menu" aria-labelledby="menuProximidade">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Proximidade/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Proximidade/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuStatus" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Status</a>
                        <div class="dropdown-menu" aria-labelledby="menuStatus">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Status/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Status/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuTipo" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Tipos</a>
                        <div class="dropdown-menu" aria-labelledby="menuTipo">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Tipo/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Tipo/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuFaleconosco" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Contato</a>
                        <div class="dropdown-menu" aria-labelledby="menuFaleconosco">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Faleconosco/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Faleconosco/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" id="menuBairro" class="nav-link dropdown-toggle ml-2" role="button" data-toggle="dropdown">Bairro</a>
                        <div class="dropdown-menu" aria-labelledby="menuBairro">
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Bairro/cadastrar' ?>">Cadastrar</a>
                            <a class="dropdown-item" href="<?= $this->config->base_url() . 'Bairro/listar' ?>">Visualizar</a>
                        </div>
                    </li>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->config->base_url() . 'Admin/sair' ?>">
                                <i class="fas fa-sign-out-alt ml-5"></i> Sair
                            </a>
                        </li>
                    </ul>

            </div>
        </nav>

