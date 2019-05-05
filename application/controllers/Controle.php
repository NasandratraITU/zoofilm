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

    public function getListFilmBygenre($idgenre)
    {
        $page = "filmByGenre";
        $listGenre = $this->mabase->getGenre();
        $listFilm = $this->mabase->getListFilmByGenre($idgenre);
        $genre = $this->mabase->getNomGenre($idgenre);
        $titre = "Decouvrez nos films genre ".$genre[0]['GENRE'];
		$rep = array('page'=>$page,'listFilm'=>$listFilm,'listGenre'=>$listGenre,'titre'=>$titre);
        $this->load->view('index',$rep);
    }

    public function getInfoFilm($idfilm)
    {
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

    public function reserver($idprogramme,$idfilm)
    {
        $nom=$this->input->get('nom');
        $prenom=$this->input->get('prenom');
        $enfant=$this->input->get('enfant');
        $adulte=$this->input->get('adulte');
        $telephone=$this->input->get('telephone');
        // $infoprogramme = $this->mabase->getProgrammeByIdFilm($idfilm);
        $listGenre = $this->mabase->reserver($nom,$prenom,$enfant,$adulte,$telephone,$idprogramme);
        // $film = $this->mabase->getInfoFilm($idfilm);
		// $rep = array('page'=>$page,'film'=>$film,'listGenre'=>$listGenre,'infoprogramme'=>$infoprogramme);
        redirect('Controle/getInfoFilm/'.$idfilm);
    }

    public function getListePersonneReservation($idprogramme)
    {
        $page = "listePersonne";
        $listGenre = $this->mabase->getGenre();
        $listpersonne = $this->mabase->getListePersonneReservation($idprogramme);
        $rep = array('page'=>$page,'listGenre'=>$listGenre,'listpersonne'=>$listpersonne);
        $this->load->view('index',$rep);
    }



}

