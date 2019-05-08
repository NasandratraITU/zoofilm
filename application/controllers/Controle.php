<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controle extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$banniere = "LE CINEMA REEL";
        $page = "accueil";
		$titre = "Le cinema réel";
		$description = "Decouvrez de nouvelles perspectives, reservez votre film preferé chez Zooland, profiter du cinema nouvelle generation";
        $listGenre = $this->mabase->getGenre();
		$rep = array('page'=>$page,'listGenre'=>$listGenre,'titre'=>$titre,'banniere'=>$banniere,'description'=>$description);
        $this->load->view('index',$rep);
    }

    public function getListFilmBygenre()
    {
		$idgenre = $this->input->get('idcategorie');
		$description = "Profitez de tous les genres de films chez Zoofilm, comédie ou romantique ou action";
        $page = "filmByGenre";
        $listGenre = $this->mabase->getGenre();
        $listFilm = $this->mabase->getListFilmByGenre($idgenre);
        $genre = $this->mabase->getNomGenre($idgenre);
		$titre = "FILM GENRE ".$genre[0]['genre'];
		$banniere = "FILM GENRE ".$genre[0]['genre'];
		$citation = $genre[0]['INFOTEXTE'];
		$rep = array('page'=>$page,'listFilm'=>$listFilm,'listGenre'=>$listGenre,'titre'=>$titre,'genre'=>$genre,'banniere'=>$banniere,'citation'=>$citation,'description'=>$description);
        $this->load->view('index',$rep);
    }

    public function getInfoFilm()
    {
		$idfilm = $this->input->get('idfilm');
		$description = "Vous avez choisi ce film, il est tant de le regarder.Reservation rapide et efficace";
        $page = "infoFilm";
        $infoprogramme = $this->mabase->getProgrammeByIdFilm($idfilm);
        // $idreservation = $this->mabase->getIdReservation($infoprogramme[0]['IDPROGRAMME']);
        $nbplacereste = $this->mabase->getPlaceReste($infoprogramme[0]['idprogramme']);
        $resteplace = $nbplacereste[0]['reste'];
        $listGenre = $this->mabase->getGenre();
        $film = $this->mabase->getInfoFilm($idfilm);
		$titre = "Reserver le film ".$film[0]['TITREFILM']." maintenant";
		$banniere = "RESERVATION FILM";
		$rep = array('page'=>$page,'film'=>$film,'listGenre'=>$listGenre,'infoprogramme'=>$infoprogramme,'resteplace'=>$resteplace,'titre'=>$titre,'banniere'=>$banniere,'description'=>$description);
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
		$titre = "Accueil";
		if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion-0.html'));
		$rep = array('titre'=>$titre);
		$this->load->view('boindex',$rep);
    }
    
    public function loginbo()
    {
		$mot = $this->input->get('mot');
		$rep = array('mot'=>$mot);
		$this->load->view('bologin',$rep);
		
    }

	public function addMoovie()
	{
		$titre = "Ajout Film";
        if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$page="boajoutFilm";
		$idmax = $this->mabase->getIdMaxFilm();
		$listgenre = $this->mabase->getGenreFilm();
		$listsalle = $this->mabase->getSalle();
		$idsuivant = 1 + $idmax[0]['idmax'];
		// $listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'idsuivant'=>$idsuivant,'listgenre' => $listgenre,'listsalle'=>$listsalle,'titre'=>$titre);
		$this->load->view('boindex',$rep);
	}

	public function manageMoovie()
	{
		$titre = "Gestion des films";
        if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$page="bometier";
		$listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'listMetier'=>$listMetier,'titre'=>$titre);
		$this->load->view('boindex',$rep);
	}

	public function ajouterFilm()
	{
        if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
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
        if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$idfilm = $this->input->get('idfilm');
		$titre="Ajout image principale";
		$page="bopageAjoutImage";
		// $listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'idfilm'=>$idfilm,'titre'=>$titre);
		$this->load->view('boindex',$rep);
	}

	public function pageAjoutImage2()
	{
		if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$titre="Ajout image secondaire";
		$page="bopageAjoutImage2";
		// $listMetier = $this->mabase->getListMetier();
		$rep = array('page'=>$page,'titre'=>$titre);
		$this->load->view('boindex',$rep);
	}

	public function test()
	{
		if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$config['upload_path']='./assets/images';
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

	public function upload1()
	{
        if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$config['upload_path']='./assets/images';
		$config['allowed_types']='jpg|png|jpeg';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('image1'))
		{
			$error = array('error'=>$this->upload->display_errors());
		}
		else{
			$data=array('upload_data'=>$this->upload->data());
		}
		$nomfichier=$this->upload->data('file_name');
		$idmax = $this->mabase->getIdMaxFilm();
		$this->mabase->updateImage($idmax[0]['idmax'],$nomfichier);
		header('Location:'.base_url('admin/pageajoutimage2.html'));
		// header('Location:admin/pageajoutimage2.html');
    }
    
    public function upload2()
	{
        if($this->session->userdata('pseudo')==null)  header('Location:'.base_url('admin/pageconnexion-0.html'));
		$config['upload_path']='./assets/images';
		$config['allowed_types']='jpg|png|jpeg';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('image2'))
		{
			$error = array('error'=>$this->upload->display_errors());
		}
		else{
			$data=array('upload_data'=>$this->upload->data());
		}
		$nomfichier=$this->upload->data('file_name');
		$idmax = $this->mabase->getIdMaxFilm();
		$this->mabase->updateImage2($idmax[0]['idmax'],$nomfichier);
		header('Location:'.base_url('admin/ajoutfilm.html'));
    }

	public function gestionfilm()
	{
		if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$titre = "Gestion des films";
		$page = "bogestionfilm";
		$listfilm = $this->mabase->getListeFilm();
		$rep = array('page'=>$page,'listfilm'=>$listfilm,'titre'=>$titre);
		$this->load->view('boindex',$rep);	
	}

	public function modifierfilm()
	{
		if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$titre = "Modifier votre film";
		$idfilm = $this->input->get('idfilm');
		$para = $this->input->get('para');
		$page = "bomodificationfilm";
		$film = $this->mabase->getFilmById($idfilm);
		$rep = array('page'=>$page,'film'=>$film,'titre'=>$titre,'para'=>$para);
		$this->load->view('boindex',$rep);
	}

	public function updateFilm()
	{
		if($this->session->userdata('pseudo')==null)   header('Location:'.base_url('admin/pageconnexion-0.html'));
		$idfilm=$this->input->post('idfilm');
		$titre=$this->input->post('titre');
		$acteur=$this->input->post('acteur');
		$duree=$this->input->post('duree');
		$sortie=$this->input->post('sortie');
		$description=$this->input->post('description');
		$this->mabase->updateFilm($idfilm,$titre,$acteur,$duree,$sortie,$description);
		header('Location:'.base_url('admin/modificationfilm-'.$idfilm.'-1.html'));
		// redirect('Controle/modifierfilm/'.$idfilm);
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
			header('Location:'.base_url('admin/pageconnexion-1.html'));
        }
    }

    public function deconnection()
    {
        $this->session->unset_userdata('pseudo');
        $this->session->sess_destroy();
		header('Location:'.base_url('admin/pageconnexion-0.html'));
    }
   

}