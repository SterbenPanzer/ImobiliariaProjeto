<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Footer -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <footer class="page-footer font-small mdb-color pt-4 text-light bg-dark">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Footer links -->
                    <div class="row text-center text-md-left mt-3 pb-3">

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h3 class="text-uppercase mb-4 font-weight-bold">
                                <?php
                                echo $contatos->tx_nomeempresa;
                                ?>    
                            </h3>
                            <h6>
                                <?php
                                echo $contatos->tx_endereco;
                                ?>
                            </h6>
                            <h6>
                                <?php
                                echo 'Tel. (49) ' . $contatos->nm_telefone;
                                ?>
                            </h6>
                            <h6>
                                <?php
                                echo 'Cel. (49) ' . $contatos->nm_celular;
                                ?>
                            </h6>
                            <h6>
                                <?php
                                echo 'Email: ' . $contatos->tx_email;
                                ?>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        
                        <!-- Grid column -->

                       

                       
                    </div>
                    <!-- Footer links -->

                    <hr>

                    <!-- Grid row -->
                    <div class="row d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-8">

                            <!--Copyright-->
                            <p class="text-center text-md-left">© 2018 Copyright:
                                <a href="#">
                                    <strong> ImobTech.com</strong>
                                </a>
                            </p>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-5 col-lg-4 ml-lg-0">

                            <!-- Social buttons -->
                            <div class="text-center text-md-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

            </footer>
        </div>
    </div>
</div>
</body>
</html>