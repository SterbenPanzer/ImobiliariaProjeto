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


            <?php
            foreach ($imoveis as $i) {
                echo ' <div class="col-4">';
                echo '<div class="card mb-5" style="width: 18rem;">';
                echo ' <div class="card-body">';
                echo '<h4 class="pt-2">' . $i->titulo . '</h4>';
            foreach ($galerias as $g) {
                if($i->id_imovel == $g->cd_imovel){
                echo '<img class="img-fluid mb-2" style="max-height:150px; max-width:150px;" src="'. base_url('uploads/'.$g->im_imagem) .'">';
                }
            }
                echo '<hr>';
                echo '<h6 class="mb-3"> Tipo: ' . $i->tipo . '</h6>';
                echo '<h6 class="mb-3"> Categoria: ' . $i->categoria . '</h6>';
                echo '<h6 class="mb-3"> Valor: R$ ' . $i->vl_valor . '</h6>';
                echo '<a class="pl-2" href="' . $this->config->base_url() . 'Imovel/alterar/' . $i->id_imovel . '"><i class="fas fa-pen text-dark border rounded shadow-sm py-1 px-2"></i></a>';
                echo '<a class="pl-2 ml-2" href="' . $this->config->base_url() . 'Imovel/deletar/' . $i->id_imovel . '"><i class="fas fa-times text-dark border rounded shadow-sm py-1 px-2"></i></a>';
                echo '<a class="pl-2 ml-2 mr-3" href="' . $this->config->base_url() . 'Imovel/listarDetalhes/' . $i->id_imovel . '"><i class="fas fa-info-circle border rounded shadow-sm py-1 px-2"></i></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</div>