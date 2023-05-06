<?php
//Essa classe é reposável em proteger e verificar os dados do banco. Toda e qualquer consulta ou inclusão ao banco, deve ser feita por aqui.
//Todas as funções devem estar comentando para fácil análise dos integrantes.


class Connect
{

    //Aqui é onde o PHP está buscando os dados do banco
    public $dsn = "mysql:host=localhost;dbname=petscao";
    private $user = "root";
    private $passwd = "";
    protected $dao;

    public function __construct()
    {
        try {
            $this->dao = new PDO($this->dsn, $this->user, $this->passwd);
            $this->dao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $erro) {
            echo "ERRO" . $erro->getMessage();
            exit();
        }
    }

    //Essa função faz a verificação somente do login do administrador
    public function login($email, $senha){
        $sql = "SELECT * FROM cliente WHERE email_cli = :usuario AND senha_cli = :senha";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("usuario", $email);
        $sql->bindValue("senha",$senha);
        $sql->execute();
    
    if($sql->rowCount()> 0){

        $retorno = $sql->fetch();
        $_SESSION['cli'] = $retorno['nome_cli'];
        $_SESSION['ID'] = $retorno['id_cliente'];
         return true;
    } 
        return false;
       
    }
    //function para inserir um novo cliente
    public function newClient($cpf, $fist_name, $second_name, $email, $password, $telefone, $complemento, $numero, $usuario, $data_nasc, $celular)
    {

        $exist = new Connect();
        $exist->exists($usuario, $cpf, $email);
        if ($_SESSION['erroruser'] != NULL) {
            unset($_SESSION['erroruser']);
            header('Location: ./cadastro__info.php?existuser=1');
        }
        else if ($_SESSION['errorcpf'] != NULL) {
            unset($_SESSION['errorcpf']);
            header('Location: ./cadastro__email.php?existcpf=1');
        }
        elseif ($_SESSION['erroremail'] != NULL) {
            unset($_SESSION['erroremail']);
            header('Location: ./cadastro__email.php?exist=1');
        }
        else {
            $sql = "INSERT INTO cliente (id_cliente, nome_cli, sobrenome_cli,usuario_cli,pet_cli, 
            cpf_cli, data_nasc_cli, complemento_cli, email_cli, 
            senha_cli, celular_cli, endereco_idendereco) 
  VALUES (null,'$fist_name','$second_name','$usuario','nao informado',
        '$cpf','$data_nasc','$complemento','$email',
        '$password','$celular','1')";
            $sth = $this->dao->prepare($sql);
            $sth->execute();
            if ($sth == null) {
                header('Location: ./cadastro__email.php?error=1');
            }
            else {
                session_start();
                $_SESSION['user'] = $usuario;
                header('Location: ./cadastro__dados.php');

            }
        }    }

    // function para verificar a existencia de dados para nao duplicar
    protected function exists($usuario, $cpf, $email)
    {
        $sql = "SELECT usuario_cli FROM cliente WHERE usuario_cli = ?";
        $sth = $this->dao->prepare($sql);
        $sth->execute(array($usuario));
        $veri = $sth->fetchAll();

        if ($veri == NULL) {
            $sql = "SELECT cpf_cli FROM cliente WHERE cpf_cli = ?";
            $sth = $this->dao->prepare($sql);
            $sth->execute(array($cpf));
            $veri = $sth->fetchAll();

            if ($veri == NULL) {
                $sql = "SELECT email_cli FROM cliente WHERE email_cli = ? ";
                $sth = $this->dao->prepare($sql);
                $sth->execute(array($email));
                $veri = $sth->fetchAll();

                if ($veri == NULL) {
                }
                else {
                    $_SESSION['erroremail'] = "exist";
                }
            }
            else {
                $_SESSION['errorcpf'] = "exist";
            }
        }
        else {
            $_SESSION['erroruser'] = "exist";
        }
    }

    // function para inserir novo endereço
    public function dados($cep, $logradouro, $bairro, $cidade, $estado)
    {


        $sql = "INSERT INTO endereco (id_end,cep_end,logradouro_end,bairro_end,cidade_end,estado_end) 
        VALUES (NULL,$cep,'$logradouro','$bairro','$cidade','$estado')";
        $sth = $this->dao->prepare($sql);
        $sth->bindColumn("id_end", $id, PDO::PARAM_STR);
        $sth->bindColumn("cep_end", $cep, PDO::PARAM_INT);
        $sth->bindColumn("logradouro_end", $logradouro, PDO::PARAM_STR);
        $sth->bindColumn("bairro_end", $bairro, PDO::PARAM_STR);
        $sth->bindColumn("cidade_end", $cidade, PDO::PARAM_STR);
        $sth->bindColumn("estado_end", $estado, PDO::PARAM_STR);
        $sth->execute();
        if ($sth == true) {
            session_start();
            $_SESSION['user'] = "newUser";
            header('location: ./Usuario.php');
        }
        else {
            $_SESSION['user'];
            header('location: ./cadastro__info.php');
        }
    }

    public function updat($id, $nome, $sobrenome, $usuario, $senha, $cpf, $datt, $dog, $email, $endereco, $complemento, $estado, $celular, $telefone)
    { //aqui está sendo feito o update dos usuários, mas ainda está incompleto

        $sql = "UPDATE cliente SET nome_cli = :nome, sobrenome_cli= :sobrenome, usuario_cli= :usuario, senha_cli= :senha, cpf_cli= :cpf, data_nasc_cli= :datt, email_cli = :email, telefone_cli= :telefone, celular_cli= :celular WHERE id_cliente= :id";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("sobrenome", $sobrenome);
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", $senha);
        $sql->bindValue("cpf", $cpf);
        $sql->bindValue("datt", $datt);
        $sql->bindValue("email", $email);
        $sql->bindValue("telefone", $telefone);
        $sql->bindValue("celular", $celular);
        $sql->bindValue("id", $id);
        $sql->execute();

    }

    public function infoUser($usuario)
    {
        $sql = "SELECT * FROM cliente WHERE usuario_cli = ?";
        $sql = $this->dao->prepare($sql);
        $sql->bindValue("usuario_cli", $usuario);
        $sql->execute();

    }
}


/* verificar se essa funcao pode ser excluida
 public function login($email, $senha){
 $sql = "SELECT * FROM cliente WHERE usuario_cli = :usuario AND senha_cli = :senha";
 $sql = $this->dao->prepare($sql);
 $sql->bindValue("usuario", $email);
 $sql->bindValue("senha", $senha);
 $sql->execute();
 if ($sql->rowCount() > 0) {
 $retorno = $sql->fetch();
 $_SESSION['user'] = $retorno['usuario'];
 return true;
 }
 $retorno = $sql->fetch();
 $_SESSION['cli'] = $retorno['nome_cli'];
 $_SESSION['ID'] = $retorno['id_cliente'];
 return true;
 } 
 return false;
 }
 
*/

/*
antigo insert em cliente

  VALUES (null,'$fist_name','$second_name',
  '$usuario','nao informado','$cpf','$data_nasc',
  'nao informado','$email','$password','$numero',
  '$complemento','$email','$telefone','$celular')";

*/
