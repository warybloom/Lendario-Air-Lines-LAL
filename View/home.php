<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lendário Air Lines - LAL</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="View/home.css"/>
    <link rel="stylesheet" href="View/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lendário Air Lines - LAL</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home">Home</a></li>
                    <li><a  href="passagens.php">Passagens</a></li>
                    <li><a href="reclamacoes.php">Fazer reclamação</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.php">Check-In</a>
                    </li>
                    <li>
                        <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal">Cancelamento</a>
                    </li>
                    <li>
                        <a href="cadastro"></span>Cadastrar</a>
                    </li>
                    <li>
                        <a href="login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cancelamento</h4>
            </div>
            <div class="modal-body">
             <label for="id-passagem">Identificador da passagem</label>
             <input type="text" id="id-passagem"/>
             <br />
             <label for="id-voo">Identificador do voo</label>
             <input type="text" id="id-voo"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar passagem</button>
            </div>
          </div>
          
        </div>
      </div>    
    <div class="wrapper-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner">
                <div class="item active">
                    <img src="View/salvador.webp" alt="Salvador" />
                    <div class="carousel-caption">
                        <h3>Salvador</h3>
                        <p>Ida e volta de onde estiver <span>*</span> por apenas R$400</p>
                    </div>
                </div>


                <div class="item">
                    <img src="View/recife.jpg" alt="Recife" />
                    <div class="carousel-caption">
                        <h3>Recife</h3>
                        <p>Ida e volta de onde estiver <span>*</span> por apenas R$400</p>
                    </div>
                </div>

                <div class="item">
                    <img src="View/fortaleza.jpg" alt="Fortaleza" />
                    <div class="carousel-caption">
                        <h3>Fortaleza</h3>
                        <p>Ida e volta de onde estiver <span>*</span> por apenas R$400</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
            <div class="fast-selling-tickets">
                <h3 style="margin-left:33px">Compra rápida</h3>
                <div class="container-fluid col-md-12">
                        <div class="form-group" style="display: flex; width: 100%; align-items: center; flex-direction: column; gap:10px; ">
                            <div style="width: 85%;display: flex; flex-direction: row; align-items: center; justify-content:space-between; gap:15px;" >
                                <div style="width:400px">
                                    <label for="select-trecho">Trecho:</label>
                                    <select class="form-control" name="select-trecho" id="select-trecho">
                                        <option>Só ida ou só volta</option>
                                        <option>Ida e volta</option>
                                    </select>
                                </div>
                                <div style="width:400px">
                                    <label for="partida">Partida:</label>
                                    <input type="text" class="form-control" id="partida">
                                </div>
                                
                                <div style="width:400px">
                                    <label for="partida">Destino:</label>
                                    <input type="text" class="form-control" id="partida">
                                </div>
                            </div>
                            <div style="width: 85%;display: flex; flex-direction: row; align-items: end; justify-content:space-between; gap:15px;">
                            
                                <div style="width:400px">
                                    <label for="data-ida">Data de Ida:</label>
                                    <input type="date" class="form-control" id="data-ida">
                                </div>
                                <div style="width:400px">
                                    <label for="data-retorno">Data de Retorno:</label>
                                    <input type="date" class="form-control" id="data-retorno" >
                                </div>
                            </div>
                            <button class="btn btn-primary search-button">Buscar Voos</button>
                        </div>
                    
                </div>
            </div>
    </div>
    <div class="best-selling-tickets">
        <h3>Destinos populares</h3>
        <div class="container-fluid align-self-left">
            <div class="row">
                <div class="col-md-4">
                    <a href="checkout.php" class="popular-destinations">
                        <div class="photo-container">
                            <img src="View/salvador.webp" alt="salvador" >
                        </div>
                        <div class="info-container">
                            <div class="form-to-container">
                                <span class="from">REC</span>
                                <i class="fa fa-plane"></i>
                                <span class="from">SSA</span>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="checkout.php" class="popular-destinations">
                        <div class="photo-container">
                            <img src="View/recife.jpg" alt="salvador" >
                        </div>
                        <div class="info-container">
                            <div class="form-to-container">
                                <span class="from">SSA</span>
                                <i class="fa fa-plane"></i>
                                <span class="from">REC</span>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="checkout.php" class="popular-destinations">
                        <div class="photo-container">
                            <img src="View/fortaleza.jpg" alt="salvador" >
                        </div>
                        <div class="info-container">
                            <div class="form-to-container">
                                <span class="from">SSA</span>
                                <i class="fa fa-plane"></i>
                                <span class="from">FOR</span>
                            </div>
                            
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="checkout.php" class="popular-destinations">
                        <div class="photo-container">
                            <img src="View/salvador.webp" alt="salvador" >
                        </div>
                        <div class="info-container">
                            <div class="form-to-container">
                                <span class="from">REC</span>
                                <i class="fa fa-plane"></i>
                                <span class="from">SSA</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid d-flex align-items-center justify-content-center text-center">
        <h4>Somos a Lendário Air Lines</h4>
        <h5>Fazemos questão de tornar sua viagem a mais lendária possível</h5>
        <h5>CNPJ: 00.000.000/0000-01</h5>
        <h5>E-mail: lendarioairlines@lendarioLAL.com.br</h5>
        <h5>Telefone:(71) 98888-7777</h5>
    </footer>
    <script>
        var select = document.getElementById('select-trecho');

            if(select.value === 'Só ida ou só volta'){
                var retornoDataInput = document.getElementById('data-retorno');
                
                retornoDataInput.setAttribute('disabled', 'disabled');
            }
            if(select.value === 'Ida e volta'){
                var retornoDataInput = document.getElementById('data-retorno');
                
                retornoDataInput.removeAttribute('disabled', 'disabled');
            }

        select.addEventListener('change', function(){
            
            if(select.value === 'Só ida ou só volta'){
                var retornoDataInput = document.getElementById('data-retorno');
                
                retornoDataInput.setAttribute('disabled', 'disabled');
            }
            if(select.value === 'Ida e volta'){
                var retornoDataInput = document.getElementById('data-retorno');
                
                retornoDataInput.removeAttribute('disabled', 'disabled');
            }
        })


    </script>
</body>

</html>