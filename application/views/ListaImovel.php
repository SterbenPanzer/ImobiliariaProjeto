<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Visualização de Imóveis</li>
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

    <div class="col-md-12">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7">
                <?php
                foreach ($imoveis as $i) {

                    echo '<button type="button" class="btn btn-light mr-4 mb-3 mt-4 shadow text-center">';
                    echo '<h4 class="mb-5 pt-2"> Titulo: ' . $i->titulo . '</h4>';
                    echo '<hr>';
                    echo '<h6 class="mb-3"> Status: ' . $i->status . '</h6>';
                    echo '<h6 class="mb-3"> Tipo: ' . $i->tipo . '</h6>';
                    echo '<h6 class="mb-3"> Categoria: ' . $i->categoria . '</h6>';
                    echo '<h6 class="mb-3"> Descrição: ' . $i->tx_descricao . '</h6>';
                    echo '<h6 class="mb-3"> Valor: R$ ' . $i->vl_valor . '</h6>';
                    echo '<a class="pl-2" href="' . $this->config->base_url() . 'Imovel/alterar/' . $i->id_imovel . '"><i class="fas fa-pen text-dark border rounded shadow-sm py-1 px-2"></i></a>';
                    echo '<a class="pl-2 ml-2 mr-3" href="' . $this->config->base_url() . 'Imovel/deletar/' . $i->id_imovel . '"><i class="fas fa-times text-dark border rounded shadow-sm py-1 px-2"></i></a>';
                    echo '</button>';
                }
                ?>
            </div>
        </div>
    </div>
</div>