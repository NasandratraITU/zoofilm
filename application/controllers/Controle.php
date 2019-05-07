<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
        $page = "accueil";
        $titre = "Reservation film cinema";
        $listGenre = $this->mabase->getGenre();
		$rep = array('page'=>$page,'listGenre'=>$listGenre,'titre'=>$titre);
        $this->load->view('index',$rep);
    }

    public function getListFilmBygenre()
    {
        $idgenre = $this->input->get('idcategorie');
        $page = "filmByGenre";
        $listGenre = $this->mabase->getGenre();
        $listFilm = $this->mabase->getListFilmByGenre($idgenre);
        $genre = $this->mabase->getNomGenre($idgenre);
        $titre = "Decouvrez nos films genre ".$genre[0]['genre'];
		$rep = array('page'=>$page,'listFilm'=>$listFilm,'listGenre'=>$listGenre,'titre'=>$titre);
        $this->load->view('index',$rep);
    }

    public function getInfoFilm()
    {
        $idfilm = $this->input->get('idfilm');
        $page = "infoFilm";
        $infoprogramme = $this->mabase->getProgrammeByIdFilm($idfilm);
        // $idreservation = $this->mabase->getIdReservation($infoprogramme[0]['IDPROGRAMME']);
        $nbplacereste = $this->mabase->getPlaceReste($infoprogramme[0]['idprogramme']);
        $resteplace = $nbplacereste[0]['reste'];
        $listGenre = $this->mabase->getGenre();
        $film = $this->mabase->getInfoFilm($idfilm);
        $titre = "Reserver le film ".$film[0]['TITREFILM']." maintenant";
		$rep = array('page'=>$page,'film'=>$film,'listGenre'=>$listGenre,'infoprogramme'=>$infoprogramme,'resteplace'=>$resteplace,'titre'=>$titre);
        $this->load->view('index',$rep);
    }

    public function reserver()
    {
        $idprogramme = $this->input->post('idprogramme');
        $idfilm = $this->input->post('idfilm');
        $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
        $enfant=$this->input->post('enfant');
        $adulte=$this->input->post('adulte');
        $telephone=$this->input->post('telephone');
        $listGenre = $this->mabase->reserver($nom,$prenom,$enfant,$adulte,$telephone,$idprogramme);
        header('Location:'.base_url('cinema/numerofilm-'.$idfilm.'.html'));
    }

    public function getListePersonneReservation()
    {
        $idprogramme = $this->input->get('idprogramme');
        $page = "listePersonne";
        $listGenre = $this->mabase->getGenre();
        $listpersonne = $this->mabase->getListePersonneReservation($idprogramme);
        $rep = array('page'=>$page,'listGenre'=>$listGenre,'listpersonne'=>$listpersonne);
        $this->load->view('index',$rep);
    }

// ----------------------------------------------------------------------------------------------------------------------------------------------------
   
    //FONCTION BACK OFFICE
    public function indexbo()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$this->load->view('boindex');
    }
    
    public function loginbo()
    {
        $this->load->view('bologin');
    }

	public function addMoovie()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$page="boajoutFilm";
		$idmax = $this->mabase->getIdMaxFilm();
		$listgenre = $this->mabase->getGenreFilm();
		$listsalle = $this->mabase->getSalle();
		$idsuivant = 1 + $idmax[0]['idmax'];
		// $listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'idsuivant'=>$idsuivant,'listgenre' => $listgenre,'listsalle'=>$listsalle);
		$this->load->view('boindex',$rep);
	}

	public function manageMoovie()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$page="bometier";
		$listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'listMetier'=>$listMetier);
		$this->load->view('boindex',$rep);
	}

	public function ajouterFilm()
	{
        
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$titre=$this->input->post('titre');
		$idgenre=$this->input->post('idgenre');
		$acteur=$this->input->post('acteur');
		$duree=$this->input->post('duree');
		// $imageprincipale=$this->input->get('');
		// $imagesecondaire=$this->input->get('');
		$sortie=$this->input->post('sortie');
		$description=$this->input->post('description');
		$datediffusion=$this->input->post('datediffusion');
		$heurediffusion=$this->input->post('heurediffusion');
		$idsalle=$this->input->post('salle');
		$idfilm=$this->input->post('idfilm');

		$img=$this->input->post('image1');

		// echo($datediffusion);

		$this->mabase->insertFilm($titre,$idgenre,$acteur,$duree,$sortie,$description);
		$this->mabase->insertProgramme($datediffusion,$idfilm,$heurediffusion,$idsalle);
        $idmax = $this->mabase->getIdMaxFilm();
        
        header('Location:'.base_url('admin/pageajoutimage-'.$idmax[0]['idmax'].'.html'));
		// echo('debut');
		// $config['upload_path']='./uploads';
		// //$config['allowed_types']='jpg|png';
		// $this->load->library('upload',$config);
		// if(!$this->upload->do_upload('image1'))
		// {
		// 	echo('erreur');
		// 	$error = array('error'=>$this->upload->display_errors());
		// 	var_dump($error);
		// }
		// else{
		// 	echo('succes');
		// 	$data=array('upload_data'=>$this->upload->data());
		// }
		// echo('fin');
	}

	public function pageAjoutImage()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
        $idfilm = $this->input->get('idfilm');
		$page="bopageAjoutImage";
		// $listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'idfilm'=>$idfilm);
		$this->load->view('boindex',$rep);
	}

	public function test()
	{
		if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$config['upload_path']='./uploads';
		$config['allowed_types']='jpg|png|jpeg';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('monimage'))
		{
			echo('erreur');
			$error = array('error'=>$this->upload->display_errors());
			var_dump($error);
		}
		else{
			echo('succes');
			$data=array('upload_data'=>$this->upload->data());
		}
		$nomfichier=$this->upload->data('file_name');
	}

	public function upload1($idmax)
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
        
		$config['upload_path']='./uploads';
		$config['allowed_types']='jpg|png|jpeg';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('image1'))
		{
			echo('erreur');
			$error = array('error'=>$this->upload->display_errors());
			var_dump($error);
		}
		else{
			echo('succes');
			$data=array('upload_data'=>$this->upload->data());
		}
		$nomfichier=$this->upload->data('file_name');
		$this->mabase->updateImage($idmax,$nomfichier);
    }
    
    public function upload2($idmax)
	{
        // if($this->session->userdata('pseudo')==null)  redirect('Controle/loginbo');
        // $idmax = $this->input->post('idmax');
		$config['upload_path']='./uploads';
		$config['allowed_types']='jpg|png|jpeg';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('image1'))
		{
			echo('erreur');
			$error = array('error'=>$this->upload->display_errors());
			var_dump($error);
		}
		else{
			echo('succes');
			$data=array('upload_data'=>$this->upload->data());
		}
		$nomfichier=$this->upload->data('file_name');
		$this->mabase->updateImage($idmax,$nomfichier);
	}

	public function gestionfilm()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$page = "bogestionfilm";
		$listfilm = $this->mabase->getListeFilm();
		$rep = array('page'=>$page,'listfilm'=>$listfilm);
		$this->load->view('boindex',$rep);	
	}

	public function modifierfilm($idfilm)
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$page = "bomodificationfilm";
		$film = $this->mabase->getFilmById($idfilm);
		$rep = array('page'=>$page,'film'=>$film);
		$this->load->view('boindex',$rep);
	}

	public function updateFilm($idfilm)
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion.html'));
		$titre=$this->input->get('titre');
		$acteur=$this->input->get('acteur');
		$duree=$this->input->get('duree');
		$sortie=$this->input->get('sortie');
		$description=$this->input->get('description');
		$this->mabase->updateFilm($idfilm,$titre,$acteur,$duree,$sortie,$description);
		redirect('Controle/modifierfilm/'.$idfilm);
    }
    
    public function connectionadmin()
    {
        // if($this->session->userdata('pseudo')==null)  redirect('Controle/loginbo');
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        $passwordhash = sha1($password);
        $admin = $this->mabase->verifierlogin($login,$passwordhash);
        if(count($admin)>0)
        {
            $this->session->set_userdata('pseudo',$admin[0]['loginadmin']);
            header('Location:'.base_url('admin/accueil.html'));
            
        }
        else
        {
            header('Location:'.base_url('admin/pageconnexion.html'));
        }
    }

    public function deconnection()
    {
        $this->session->unset_userdata('pseudo');
        $this->session->sess_destroy();
        redirect('Controle/loginbo');
    }
   

}