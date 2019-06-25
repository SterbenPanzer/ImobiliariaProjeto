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
                                            echo ((isset($imoveis)) && $c->id_categoria == $imoveis->cd_categoria) ? 'selected' : '';
                                            echo ' value="' . $c->id_categoria . '">' . $c->tx_descricao . '</option>';
                                        }
                                    }
                                    ?>
                        </select>
                        <select class="form-control my-4 ml-5 SelectOption" name="" id="">
                            <option>Tipo</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control my-4 ml-4  SelectOption" name="" id="">
                            <option>Bairro</option>
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
        <div class="row my-5 ml-5">
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5 ml-5">
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-header HeaderOption text-center">
                        <h5 class="TextOption3">Apartamento-Venda</h5>
                    </div>
                    <img src="http://www.dcorevoce.com.br/wp-content/uploads/2016/02/Casas-lindas-baixas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title TextOption3">Bairro estrela</h5>
                        <p class="card-text">Dormitorios: 3 <br> Banheiros:2</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-text">R$ 300.000,00</h4>  
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="btn BotonOption"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


