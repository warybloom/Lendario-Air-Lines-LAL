<?php
    require_once("Model/User.php");

    class UserController {

        private $user;

        public function __construct(){
            $this->user = new User();
         
        }

        private function createUser(){
            echo $_POST['firstname'];

          /*  $this->user->setUserFirstname($_POST['firstname']);
            $this->user->setUserLastname($_POST['lastname']);
            $this->user->setUserEmail($_POST['email']);
            $this->user->setUserPhone($_POST['number']);
            $this->user->setUserGender($_POST['preco']);
            $this->user->setUserBirthDate(date('Y-m-d',strtotime($_POST['data'])));
            $this->user->setUserPassword($_POST['password']);
            $result = $this->user->incluir();
            if($result >= 1){
                echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
            }else{
                echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            }*/
        }
    }

?>