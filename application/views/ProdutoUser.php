<div class="container">
    <div class="row my-5">
        <div class="col-md-6">
            <img src="<?php
            foreach ($galerias as $g) {
                if ($g->cd_imovel == $imoveis->id_imovel) {
                    echo base_url('uploads/' . $g->im_imagem);
                }
            }
            ?>" class="card-img-top img-fluid" alt="...">
        </div>
        <div class = "col-md-3">
            <h2 class="mb-4 ml-5"><?= $imoveis->titulo ?></h2>
            <div class="card shadow ml-5" style="width: 18rem;">
                <div class = "card-header HeaderOption text-center">
                    <h4 class = "TextOption3"><?= $imoveis->categoria . ' - ' . $imoveis->tipo ?></h4>
                </div>
                <div class="card-body">
                    <h4 class="TextOption3">Bairro: <?= $imoveis->bairro ?> </h4>
                    <hr>
                    <?php
                       foreach ($tipodetalhes as $d) {
                        if ($d->cd_imovel == $imoveis->id_imovel) {
                            echo '<p class = "card-text">' . $d->descricao . ' : ' . $d->valor . '</p>';
                        }
                }
                    ?>
                    <hr>
                     <h3 class = "card-text">R$ <?=  $imoveis->vl_valor ?> </h3>
                </div>
            </div> 
        </div>
    </div>