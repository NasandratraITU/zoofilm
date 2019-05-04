<?php 
		if( !defined('BASEPATH')) exit('No direct script access allowed');
	
		class mabase extends CI_Model{
		
			public function __construct(){
				parent::__construct();
				$this->load->database();
			}
		
			public function getGenre()
			{
				$sql = "select * from GENREFILM";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            public function getListFilmByGenre($idgenre)
            {
                $sql = "select * from FILM where IDGENRE='".$idgenre."'";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            public function getInfoFilm($idfilm)
            {
                $sql = "select * from FILM where IDFILM='".$idfilm."'";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            public function getProgrammeByIdFilm($idfilm)
            {
                $sql = "select idprogramme,datefilm,idsalle,heuredate,minutedate from programme where idfilm = ".$idfilm;
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            public function reserver($nom,$prenom,$enfant,$adulte,$telephone,$idprogramme)
            {
                $sql = "insert into reservation(NOMCLIENT,PRENOMCLIENT,TELEPHONE,NOMBREENFANT,NOMBREADULTE,IDPROGRAMME) values ('".$nom."','".$prenom."','".$telephone."',".$enfant.",".$adulte.",".$idprogramme.")";
                $result = $this->db->query($sql);
                $this->db->close();
            }

            public function getListePersonneReservation($idprogramme)
            {
                $sql = "select NOMCLIENT,PRENOMCLIENT,TELEPHONE,NOMBREENFANT,NOMBREADULTE from reservation  where IDPROGRAMME='".$idprogramme."'";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            

        }