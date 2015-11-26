<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
    public function cadastrar(){
        // Carregando os models | usuario.php | usuariodao.php |
        require_once APPPATH."models/usuario.php";
	    $this->load->model('usuariodao');
	    $model = $this->usuariodao;
	    
	    // Atribuindo os valores do formulário (POST) para os campos do banco
	    $nm_usuario = $_POST["nome"];
	    $cd_CPF = $_POST["cpf"];
	    $dt_nascimento = $_POST["ano"]."-".$_POST["mes"]."-".$_POST["dia"];
	    $sg_sexo = $_POST["sexo"];
        $cd_telefone = $_POST["tel"];
        $cd_celular = $_POST["cel"];
        $ds_email = $_POST["email"];
        $ds_senha = $_POST["senha"];
        $cd_CEP  = $_POST["cep"];
        $nm_endereco = $_POST["end"];
        $cd_numEndereco = $_POST["num"];
        $ds_complemento = $_POST["comp"];
        $nm_bairro = $_POST["bairro"];
        $nm_cidade = $_POST["cidade"];
        $sg_estado = $_POST["estado"];
        $ds_referencia = $_POST["ref"];
	    
	    // Criando o objeto usuario para inserir no banco
	    $newCadastro = new usuario(
	    $nm_usuario, $cd_CPF, $dt_nascimento, $sg_sexo, $cd_telefone,
	    $cd_celular, $ds_email, $ds_senha, $cd_CEP, $nm_endereco,
	    $cd_numEndereco,$ds_complemento, $nm_bairro, $nm_cidade,
	    $sg_estado, $ds_referencia);
	    
	    // Inserindo no banco
	    $model->insert($newCadastro);
	    
	     // Carregando as views com mensagem de sucesso
	    $data['msg'] = true;
	    $this->load->view('header');
        $this->load->view('cadastro', $data);
        $this->load->view('footer');    
    }
    
    // Este método reutilizado o getUser() do model.php
    public function auth(){
        // Carregando o model
        $this->load->model("model");
        
        // Pegando informações do formulário
        // Para passar como parâmetros no model.php
        $ds_email = $_POST["email"];
        $ds_senha = $_POST["senha"];
        $banco = "usuario";
        
        // Chamando o metodo getUser do model.php
        // E atribuindo o resultado á variavel $permissao
        $permissao = $this->model->getUser($ds_email, $ds_senha, $banco);
        if($permissao !== false){
            if($permissao === "usuario"){
                // Iniciando a sessão _USER com permissao de usuario
                $this->session->set_userdata("_ID","comum");
                // Redirecionando para o metodo '' do controller 
                redirect("/menu/produtos");
            }if($permissao === "comum"){
                redirect("menu/entrar");
            }
        }else{
            $data["msgerro"] = true;
            $this->load->view("header");
            $this->load->view("entrar", $data);
            $this->load->view("footer");
        }
    }
}
?>