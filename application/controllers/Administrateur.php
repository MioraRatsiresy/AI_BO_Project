<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateur extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
		parent::__construct();
		session_start();
	}
	public function index()
	{
        if(isset($_GET['error'])){
            $erreur="Mot de passe ou email erroné";
            $this->load->view('pages/sign-in',$erreur);	
        }
        else{
		$this->load->view('pages/sign-in');	
    }
	}
    public function accueil(){
		if(!isset($_SESSION['idAdministrator'])){
			redirect(base_url('Administrateur/index'));
		}
		else{
		$this->load->view('pages/dashboard');
		}	
    }

    public function traitementlogin(){
		if(!empty($_POST['email']) && !empty($_POST['mdp'])){
			$this->load->model('Administrator');
        	$idAdministrator = $this->Administrator->traitementLogin($_POST['email'],$_POST['mdp']);
        	if($idAdministrator!=null){
        		$_SESSION['idAdministrator'] = $idAdministrator;
        		 redirect(base_url('Administrateur/accueil'));
        	}else{
        		redirect(base_url('Administrateur/index?error=1'));
        	}
		}else{
			redirect(base_url('Welcome/indexAppro?error=ok'));
		}
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url('Administrateur/index'));
	}
	
}
?>