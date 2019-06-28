<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark my-2">
            <div class="card shadow">
                <form action="<?= base_url('Home/Buscar') ?>" method="POST">
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
                            <select class="form-control my-4 ml-4  SelectOption" name="quartos" id="quartos">
                                <option selected hidden disabled>Cômodos</option>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control my-4  SelectOption3" name="precoMinimo" id="precoMinimo">
                                <option selected hidden disabled>Preço Minimo</option>
                                <option value="100000">R$ 100.000,00</option>;
                                <option value="200000">R$ 200.000,00</option>;
                                <option value="300000">R$ 300.000,00</option>;
                                <option value="400000">R$ 400.000,00</option>;
                                <option value="500000">R$ 500.000,00</option>;
                                <option value="600000">R$ 600.000,00</option>;
                                <option value="700000">R$ 700.000,00</option>;
                                <option value="800000">R$ 800.000,00</option>;
                                <option value="900000">R$ 900.000,00</option>;
                                <option value="1000000">R$ 1.000.000,00</option>;
                            </select>
                            <select class="form-control my-4  SelectOption3" name="precoMaximo" id="precoMaximo">
                                <option selected hidden disabled>Preço Maximo</option>
                                <option value="1000000">R$ 1.000.000,00</option>;
                                <option value="1100000">R$ 1.100.000,00</option>;
                                <option value="1200000">R$ 1.200.000,00</option>;
                                <option value="1300000">R$ 1.300.000,00</option>;
                                <option value="1400000">R$ 1.400.000,00</option>;
                                <option value="1500000">R$ 1.500.000,00</option>;
                                <option value="1600000">R$ 1.600.000,00</option>;
                                <option value="1700000">R$ 1.700.000,00</option>;
                                <option value="1800000">R$ 1.800.000,00</option>;
                                <option value="1900000">R$ 1.900.000,00</option>;
                                <option value="2000000">R$ 2.000.000,00</option>;
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-outline my-5 mr-2 ml-4 SelectOption2">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-12">
        <h1 class="my-5 TextOption4 ">Imóveis</h1>
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
                '<h5 class = "card-title TextOption3">' . $i->tx_titulo . '</h5>' .
                '<h4 class="TextOption3"> Bairro ' . $i->bairro . '</h4>';
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
                ' <a href = "'. base_url('Produto/listar/'.$i->id_imovel) .'" class = "btn BotonOption"><i class = "fas fa-plus"></i></a>' .
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



