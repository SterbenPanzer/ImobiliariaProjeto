<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Visualização de detalhes dos imóvel</li>
        </ol>
    </nav>
    <div class="alert alert-light mt-3 " role="alert">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        if (isset($mensagem)) {
            echo $mensagem;
        }
        ?>
    </div>  

    <div class="col-md-12 my-4">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <?php
                        foreach ($imoveis as $i) {
                            echo '<h4 class="pt-2">' . $i->titulo . '</h4>';
                            echo '<hr>';
                            echo '<h6 class="mb-3"> Status: ' . $i->status . '</h6>';
                            echo '<h6 class="mb-3"> Tipo: ' . $i->tipo . '</h6>';
                            echo '<h6 class="mb-3"> Categoria: ' . $i->categoria . '</h6>';
                            echo '<h6 class="mb-3"> Valor: R$ ' . $i->vl_valor . '</h6>';
                        }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg" class="d-block w-100 imgMax" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg" class="d-block w-100 imgMax" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg" class="d-block w-100 imgMax" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg" class="d-block w-100 imgMax" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://leeford.in/wp-content/uploads/2017/09/image-not-found.jpg" class="d-block w-100 imgMax" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Proximo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4>Detalhes</h4>
                        <hr>
                        <?php
                        foreach ($detalhestipo as $d) {
                            echo '<h6 class="mb-3">' . $d->descricao . ' : ' . $d->valor . '</h6>';
                        }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="col-6">
                <div class="card" >
                    <div class="card-body">
                        <h4>Descrição</h4>
                        <hr>
                        <?php
                        foreach ($imoveis as $i) {
                            echo '<h6 class="mb-3">' . $i->tx_descricao . '</h6>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

