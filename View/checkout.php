<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lendário Air Lines - LAL</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="View/index.css" />
    <link rel="stylesheet" href="View/pagamento.css" />
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
                  <li class="active"><a href="home.html">Home</a></li>
                  <li><a href="passagens.html">Passagens</a></li>
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
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col">
            <h3 class="title">Informações de cobrança</h3>
            <div class="inputBox">
              <span>Nome completo:</span>
              <input type="text" placeholder="jhon deo" />
            </div>
            <div class="inputBox">
              <span>Email:</span>
              <input type="email" placeholder="exemple@exemple.com" />
            </div>
            <div class="inputBox">
              <span>Endereço:</span>
              <input type="text" placeholder="room - street - locality" />
            </div>
            <div class="inputBox">
              <span>Cidade:</span>
              <input type="text" placeholder="brazil" />
            </div>
            <div class="flex">
              <div class="inputBox">
                <span>Estado:</span>
                <input type="text" placeholder="India" />
              </div>
              <div class="inputBox">
                <span>CEP:</span>
                <input type="text" placeholder="123 456" />
              </div>
            </div>
          </div>


            <div class="inputBox">
              <span>Cartões aceitos:</span>
              <img src="./card_img.png" alt="" />
            </div>

            <div class="inputBox">
              <span>Nome do titular do cartão:</span>
              <input type="text" placeholder="Mr. jhon deo" />
            </div>
            <div class="inputBox">
              <span>Número do cartão</span>
              
              <input type="text" placeholder="00011122233" maxlength="11"
              size="11"/>
            </div>
            <div class="inputBox">
              <span>Mês de validade:</span>
              <input type="text" placeholder="January" />
            </div>
            <div class="flex">
              <div class="inputBox">
                <span>Ano de validade:</span>
                <input type="text" placeholder="2022" />
              </div>
              <div class="inputBox">
                <span>CVV:</span>
                <input type="text" placeholder="123" />
              </div>
            </div>
          </div>
          <div style="display:flex; flex-direction:column;  align-items:center; justify-content:space-around; height: 100px;">

            <input type="submit" value="Comprar" class="submit-btn" />
            <a href="home.html" style="width:30%" value="Voltar" class="btn btn-danger">Voltar </a>
          </div>
        </div>

      </form>
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
