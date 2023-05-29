<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lendário Air Lines - LAL</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="View/index.css" />
    <link rel="stylesheet" href="View/home.css" />
    <link rel="stylesheet" href="View/passagens.css" />
    <link rel="stylesheet" href="View/dadosDoPassageiro.css" />
    <link rel="stylesheet" href="View/resumoDaCompra.css" />
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
                    <li><a href="home.html">Home</a></li>
                    <li class="active"><a href="passagens.html">Passagens</a></li>
                    <li><a href="reclamacoes.html">Fazer reclamação</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.html">Check-In</a>
                    </li>
                    <li>
                        <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal">Cancelamento</a>
                    </li>
                    <li>
                        <a href="formulario.html"></span>Cadastrar</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
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
                    <input type="text" id="id-passagem" />
                    <br />
                    <label for="id-voo">Identificador do voo</label>
                    <input type="text" id="id-voo" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar passagem</button>
                </div>
            </div>

        </div>
    </div>

    <div class="best-selling-tickets" style="height:80vh !important">
        <h3>Resumo da compra </h3>
        <div class="container">
            <h5>Passagem</h5>
            <div href="passagensVolta.html" class="ticket-item col-md-12">
                <div class="col-md-7">
                    <div class="origem-destino col-md-12">
                        <div class="col-md-6 destino-item">
                            <label>Origem</label>
                            <p>SSA - 15:00</p>
                           
                        </div>
                        <div class="col-md-1 destino-item">
                        <span class="glyphicon glyphicon-plane"></span>
                        </div>
                        <div class="col-md-6 destino-item">
                            <label>Destino</label>
                            <p>REC - 20:00</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-md-12 origem-destino">
                        <div class="col-md-6 destino-item">
                            <label >Duração</label>
                            <p>5 horas</p>
                            <label>Tipo de passagem</label>
                            <p>Economica</p>
                        </div>
                        <div class="col-md-6 destino-item">
                            <label>Preço</label>
                            <p>R$500</p>
                            <label>Localizador</label>
                            <p>qqsdew</p>
                        </div>
                        
                    </div>
                </div>   
            </div>
            <h5>Passageiro</h5>
            <div href="passagensVolta.html" class="ticket-item col-md-12">
                <div class="col-md-7">
                    <div class="origem-destino col-md-12">
                        <div class="col-md-6 destino-item">
                            <label>Nome</label>
                            <p>Rafael Santos</p>
                        </div>
                        <div class="col-md-1 destino-item">
                        <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <div class="col-md-6 destino-item">
                            <label>CPF</label>
                            <p>000.000.000-72</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-md-12 origem-destino">
                        <div class="col-md-6 destino-item">
                            <label>Telefone</label>
                            <p>895852578512</p>
                        </div>
                        <div class="col-md-6 destino-item">
                            <label>e-mail</label>
                            <p>email@email.com</p>
                        </div>
                        
                    </div>
                </div>   
            </div>
            <div class="form-group">
                <a href="checkout.html" style="width: 100%;" type="submit" class="btn btn-primary">Continuar</a>
            </div>
        </div>
       
    </div>

    <footer class="container-fluid d-flex align-items-center justify-content-center text-center ">
        <h4>Somos a Lendário Air Lines</h4>
        <h5>Fazemos questão de tornar sua viagem a mais lendária possível</h5>
        <h5>CNPJ: 00.000.000/0000-01</h5>
        <h5>E-mail: lendarioairlines@lendarioLAL.com.br</h5>
        <h5>Telefone:(71) 98888-7777</h5>
    </footer>

</body>

</html> 