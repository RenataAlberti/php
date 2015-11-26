<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrito extends CI_Controller {
    
    // validar adm
    public function auth(){
        // Carregando o model
        $this->load->model("model");
        
        // Pegando informações do formulário
        $ds_email = $_POST["email"];
        $ds_senha = $_POST["senha"];
        $banco = "logar";
        // Chamando o metodo getUser do model 
        // E atribuindo o resultado á variavel $permissao
        $permissao = $this->model->getUser($ds_email, $ds_senha, $banco);
        if($permissao !== false){
            if($permissao === "admin"){
                // Iniciando a sessão com permissao de admin 
                $this->session->set_userdata("_ADM","admin");
                redirect("/restrito/admin");
            }
            else{
                // Iniciando a sessão com permissao de comum
                $this->session->set_userdata("_ID","comum");
                redirect("restrito/msgerro");
            }
           
        } else{
            redirect("restrito/msgerro");
        }
    }
    
    public function admin(){
        // Verificando a sessão antes de exibir o conteúdo
        $user = $this->session->userdata("_ADM");
        $usercm = $this->session->userdata("_ID");
        if ($user === "admin"){
            $data['msg'] = false;
            $this->load->view('header');
            $this->load->view('adm_Prod', $data);
            $this->load->view('footer');
        }
        else if($usercm === "comum"){
            redirect("menu/restrito");
        }else{
            redirect("restrito/msgerro");
        }
    }
    
    public function logout(){
        // Encerramento sessão 
        $this->session->unset_userdata("_ID");
        redirect("menu/restrito");
    }
    
    // Aparecer mensagem de login e senha
    public function msgerro(){
        $data["msgerro"] = true;
        $this->load->view("header");
        $this->load->view("restrito", $data);
        $this->load->view("footer");
    }
}
?>