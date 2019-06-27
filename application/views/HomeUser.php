<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark my-2">
            <div class="card shadow">
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-control my-4 ml-5 SelectOption" name="id_categoria" id="id_categoria">
                            <option selected hidden disabled>Categoria</option>
                            <?php
                            if ($categorias != null) {
                                foreach ($categorias as $c) {
                                    echo '<option ';
                                    echo ' value="' . $c->id_categoria . '">' . $c->tx_descricao . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <select class="form-control my-4 ml-5 SelectOption" name="id_tipo" id="id_tipo">
                            <option selected hidden disabled>Tipo</option>
                            <?php
                            if ($tipos != null) {
                                foreach ($tipos as $t) {
                                    echo '<option ';
                                    echo ' value="' . $t->id_tipo . '">' . $t->tx_descricao . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control my-4 ml-4  SelectOption" name="id_bairro" id="id_bairro">
                            <option selected hidden disabled>Bairro</option>
                                 <?php
                            if ($bairros != null) {
                                foreach ($bairros as $b) {
                                    echo '<option ';
                                    echo ' value="' . $b->id_bairro . '">' . $b->tx_descricao . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <select class="form-control my-4 ml-4  SelectOption" name="" id="">
                            <option>Dormitorios</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control my-4  SelectOption" name="" id="">
                            <option>Preço Minimo</option>
                        </select>
                        <select class="form-control my-4  SelectOption" name="" id="">
                            <option>Preço Maximo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-outline my-5 mr-3 SelectOption2">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <h1 class="my-5 TextOption4 ">Destaques</h1>
        <div class = "row my-5 ml-5">
            <?php
            foreach ($imoveis as $i) {


                echo '<div class = "col-md-4 my-4">' .
                '<div class = "card shadow" style = "width: 18rem;">' .
                '<div class = "card-header HeaderOption text-center">' .
                '<h5 class = "TextOption3">' . $i->categoria . ' - ' . $i->tipo . '</h5>' .
                '</div>';
                foreach ($galerias as $g) {
                    if ($g->cd_imovel == $i->id_imovel) {
                        echo '<img src = "' . base_url('uploads/' . $g->im_imagem) . '" class = "card-img-top" alt = "...">';
                    }
                }
                echo '<div class = "card-body">' .
                '<h5 class = "card-title TextOption3">' . $i->tx_titulo . '</h5>';

                $countG = 1;
                foreach ($tipodetalhes as $d) {
                    if ($countG <= 2) {
                        if ($d->cd_imovel == $i->id_imovel) {
                            echo '<p class = "card-text">' . $d->descricao . ' : ' . $d->valor . '</p>';
                            $countG++;
                        }
                    }
                }
                echo '<hr>' .
                '<div class = "row">' .
                '<div class = "col-md-8">' .
                '<h4 class = "card-text">R$ ' . $i->vl_valor . '</h4>' .
                '</div>' .
                '<div class = "col-md-4">' .
                ' <a href = "#" class = "btn BotonOption"><i class = "fas fa-plus"></i></a>' .
                '</div>' .
                '</div>' .
                '</div>' .
                '</div>' .
                '</div>';
            }
            ?>
        </div>'
    </div>
</div>



