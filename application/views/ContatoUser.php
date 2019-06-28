<div class="container">
    <div class="row">
        <div class="col-md-12 text-center bg-light my-5 TextOption5">
            <h2>
                Informações para contato.
            </h2>
            <hr>
            <br>
            <h4>
                <?php
                echo $contatos->tx_endereco;
                ?>
            </h4>
            <br>
            <h4>
                <?php
                echo 'Tel. (49) ' . $contatos->nm_telefone;
                ?>
            </h4>
            <br>
            <h4>
                <?php
                echo 'Cel. (49) ' . $contatos->nm_celular;
                ?>
            </h4>
            <br>
            <h4>
                <?php
                echo 'Email: ' . $contatos->tx_email;
                ?>
            </h4>
        </div>
    </div>
</div>