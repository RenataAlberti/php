<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	// Chamando index.php - início
	// menu/index
	public function index(){
		$this->load->model('produtodao');
	    $model = $this->produtodao;
    	$query = $model->queryAll();
	    $data['lista'] = $query;
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	
	// Chamando cadastro.php - formulário de cadastro (de usuários)
	// menu/cadastro
	public function cadastro(){
		$data['msg'] = false;
		$this->load->view('header');
		$this->load->view('cadastro', $data);
		$this->load->view('footer');
	}
	
	// Chamando entrar.php - formulário de login (usuários)
	// menu/entrar
	public function entrar(){
		$data['msgerro'] = false;
		$this->load->view('header');
		$this->load->view('entrar', $data);
		$this->load->view('footer');
	}
	
	// Chamando produtos.php - página de produtos
	// menu/produtos
	public function produtos(){
		$this->load->model('produtodao');
	    $model = $this->produtodao;
    	$query = $model->queryAll();
	    $data['lista'] = $query;
		$this->load->view('header');
		$this->load->view('produtos', $data);
		$this->load->view('footer');
	}
	
	// Chamando contato.php - formulário de contato
	// menu/contato
	public function contato(){
		$this->load->view('header');
		$this->load->view('contato');
		$this->load->view('footer');
	}
	
	// Chamando restrito.php - formulário de login (restrito)
	// Não aparecer mensagem de erro no login e senha
	// menu/restrito
	public function restrito(){
		$data["msgerro"] = false;
		$this->load->view('header');
		$this->load->view('restrito', $data);
		$this->load->view('footer');
	}
	
	// Chamando 
	public function sair(){
		$this->session->unset_userdata("_ID");
		$this->session->unset_userdata("_ADM");
		redirect("menu/index");
	}
	// Chamando adm_Prod - formulário de cadastro (de produtos - permissao: somente restrito)
	// menu/adm_Prod
	
}

?>
