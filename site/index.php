<!--        - - - - - - - - - - - - - - - - - - - - - - - -
            Sistema:    POWER Bel.
            Função:     Gestão comercial de salões de beleza
            Autor:      Carlos Alberto Nunes Susviela
            Contato:    http://www.powerinformatica.com.br
            Giithub:    https://github.com/susviela/power-bel
            - - - - - - - - - - - - - - - - - - - - - - - -
-->
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="imagens/favicon.ico">
        
        <!-- Bootstrap 4 CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/power-bel.css">
     </head>
     <body>

        <!-- BARRA MENU -->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="imagens/favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
                POWER-Bel
            </a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="#">Cortes</a>
                            <a class="dropdown-item" href="#">Manicure</a>
                            <a class="dropdown-item" href="#">Festas</a>
                        </div>
                    </li>                    
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" >
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        <!-- fim - BARRA NENU -->
      
      
        <!-- CARROSSEL -->
        <div id="belCarrossel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#belCarrossel" data-slide-to="0" class="active"></li>
                <li data-target="#belCarrossel" data-slide-to="1"></li>
                <li data-target="#belCarrossel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <!--Imagem do banner -->
                    <img class="d-block img-fluid" src="../site/imagens/banner-1.jpg" alt="First slide">

                        <!--Texto do banner -->
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Contes de cabelos</h3>
                            <p>Sempre os mais atuais e badalados cortes</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Leia mais ...</a></p>
                        </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="../site/imagens/banner-1.jpg" alt="Second slide">
                    <!--Texto/botão do banner -->
                    <div class="carousel-caption d-none d-md-block">
                            <h3>Example headline.</h3>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>        
                </div>

                <div class="carousel-item">
                    <img class="d-block img-fluid" src="../site/imagens/banner-1.jpg" alt="Third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#belCarrossel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#belCarrossel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- fim - CARROSSEL -->    
    
        <!-- NOSSOS SERVIÇOS -->
        <div class="container">
            <hr/>

            <div class="row">
                <div class="col-md-7">
                    <h2 class="servicos-cabecalho text-center">Corte cabelos.</h2>
                    <h5 class="servicos-subtitulo text-center text-muted">Os melhores profissionais, com as técnicas mais modernas.</h5>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid " src="imagens/cabelo.jpg" alt="Corte de cabelos">
                </div>
            </div>

            <hr/>

            <div class="row">
                <div class="col-md-7 push-md-5">
                    <h2 class="servicos-cabecalho">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 pull-md-7">
                    <img class="img-fluid " src="imagens/cabelo.jpg" alt="Corte de cabelos">
                </div>
            </div>

            <hr/>

            <div class="row">
                <div class="col-md-7">
                    <h2 class="servicos-cabecalho">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid " src="imagens/cabelo.jpg" alt="Corte de cabelos">
                </div>
            </div>
            
            <hr/>

        </div>
        <!-- fim - NOSSOS SERVIÇOS -->


        <!-- O QUE OS CLIENTES DIZEM -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 clientes-cabecalho-fundo">
                    <h2 class="clientes-cabecalho text-center">O que dizem nossos clientes. </h2>
                </div>            
            </div>
            
            <div class="row clientes-row">

                <div class="col-lg-4 text-center">
                    <img class="rounded-circle" src="imagens/cliente-1.jpg" alt="imagem cliente-1" width="140" height="140">
                    <p class="h5"> Cliente da Silva Soares </p>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 text-center">
                    <img class="rounded-circle" src="imagens/cliente-1.jpg" alt="imagem cliente-1" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 text-center">
                    <img class="rounded-circle" src="imagens/cliente-1.jpg" alt="imagem cliente-1" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row --> 
            
        </div>
        <!-- fim - O QUE OS CLIENTES DIZEM -->
        
        
        <!-- RODAPÉ -->

        <footer class="rodape">          
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">  <!-- coluna 1 do rodapé -->
                        <p class="text-center  text-muted"> <strong>Serviços</strong> </p>
                    </div>
                    
                    <div class="col-md-3">  <!-- coluna 2 do rodapé -->
                        <p class="text-center text-muted"> <strong>Clientes</strong> </p>
                    </div>
                    
                    <div class="col-md-3">  <!-- coluna 3 do rodapé -->
                        <p class="text-center text-muted"> <strong>Redes Sociais</strong> </p>
                    </div>
                    
                    <div class="col-md-3">  <!-- coluna 4 do rodapé -->
                        <p class="text-center text-muted"> <strong>Contato</strong> </p>
                    </div>

                </div>                
                
                <div class="row">
                    
                    <div class="col-md-12 text-center">  
                        <span class="text-muted"> 
                            <small> &copy;2017 - POWER-Bel Sistema de gestão de Salões de beleza <br>
                                https://github.com/susviela/power-bel
                            </small> 
                        </span>
                    </div>

                </div>                
                
                
            </div>
        </footer>
        <!-- fim - RODAPÉ -->
        
        <!-- jQuery first, then Tether, then Bootstrap 4 JS. -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/tether.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
