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
                $sql = "select * from FILM f join PROGRAMME p on f.IDFILM=p.IDFILM where IDGENRE='".$idgenre."'";
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

            public function getIdReservation($idfilm)
            {
                $sql = "select  IDRESERVATION from RESERVATION where IDFILM=".$idfilm."";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            public function getPlaceReste($idprogramme)
            {
                $sql = "select 150-(sum(NOMBREADULTE)+sum(NOMBREENFANT)) as reste from reservation r where IDPROGRAMME=".$idprogramme."";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }
            
            public function getNomGenre($idgenre)
            {
                $sql= "select GENRE from GENREFILM where IDGENRE=".$idgenre."";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }

            // -------------------------------------------------------------------------------------------------------------------------------

            public function getListMetier()
			{
				$sql = "select * from profession";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function getMetierById($idmetier)
			{
				$sql = "select * from profession where IDPROFESSION = ".$idmetier;
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function updateMetier($idmetier,$nommetier,$description,$h3,$contenuh3,$h4,$contenuh4,$h5,$contenuh5)
			{
				$sql = "update PROFESSION set NOMPROFESSION='".$nommetier."',DESCPROFESSION=\"".$description."\",TITREH3=\"".$h3."\",CONTENUH3=\"".$contenuh3."\",TITREH4=\"".$h4."\",CONTENUH4=\"".$contenuh4."\",TITREH5=\"".$h5."\",CONTENUH5=\"".$contenuh5."\" where IDPROFESSION='".$idmetier."'";
				$result = $this->db->query($sql);
				$this->db->close();
			}

			public function ajouterMetier($idmetier,$nommetier,$description,$h3,$contenuh3,$h4,$contenuh4,$h5,$contenuh5)
			{
				$sql = "insert into  PROFESSION(NOMPROFESSION,DESCPROFESSION,IMAGEPROFESSION,TITREH3,CONTENUH3,TITREH4,CONTENUH4,TITREH5,CONTENUH5,IDCATEGORIE) values( NOMPROFESSION='".$nommetier."',DESCPROFESSION=\"".$description."\",IMAGEPROFESSION=,TITREH3=\"".$h3."\",CONTENUH3=\"".$contenuh3."\",TITREH4=\"".$h4."\",CONTENUH4=\"".$contenuh4."\",TITREH5=\"".$h5."\",CONTENUH5=\"".$contenuh5."\" where IDPROFESSION='".$idmetier."'";
				$result = $this->db->query($sql);
				$this->db->close();
			}

			public function getIdMaxFilm()
			{
				$sql = "select max(IDFILM) as idmax from FILM";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function getGenreFilm()
			{
				$sql = "select * from GENREFILM";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function getSalle()
			{
				$sql = "select * from SALLE";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function insertFilm($titre,$idgenre,$acteur,$duree,$sortie,$description)
			{
				$sql = "insert into FILM(TITREFILM,IDGENRE,ACTEUR,DUREE,IMAGEFILM,IMAGEFILM2,DATESORTIE,DESCRIPTIONFILM) values ('".$titre."',".$idgenre.",'".$acteur."',".$duree.",'image1','image2','".$sortie."',\"".$description."\")";
				$result = $this->db->query($sql);
				$this->db->close();
			}

			public function insertProgramme($date,$idfilm,$heure,$idsalle)
			{
				$sql = "insert into PROGRAMME(DATEFILM,HEUREDATE,MINUTEDATE,ESTFINI,IDSALLE,IDFILM) values ('".$date."',".$heure.",0,0,".$idsalle.",".$idfilm.")";
				$result = $this->db->query($sql);
				$this->db->close();
			}

			public function updateImage($idfilm,$nomimage)
			{
				$sql = "update film set IMAGEFILM='".$nomimage."' where IDFILM=".$idfilm."";
				$result = $this->db->query($sql);
				$this->db->close();
			}
			
			public function getListeFilm()
			{
				$sql = "select IDFILM,TITREFILM,GENRE,ACTEUR,DUREE from FILM f join GENREFILM g on f.IDGENRE=g.IDGENRE";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}

			public function getFilmById($idfilm)
			{
				$sql = "select IDFILM,TITREFILM,GENRE,ACTEUR,DUREE,DATESORTIE,DESCRIPTIONFILM from FILM f join GENREFILM g on f.IDGENRE=g.IDGENRE where f.IDFILM=".$idfilm."";
				$result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
			}
			
			public function updateFilm($idfilm,$titre,$acteur,$duree,$sortie,$description)
			{
				$sql = "update film set TITREFILM='".$titre."',ACTEUR='".$acteur."',DUREE=".$duree.",DATESORTIE=".$sortie.",DESCRIPTIONFILM=\"".$description."\" where IDFILM=".$idfilm."";
				$result = $this->db->query($sql);
				$this->db->close();
            }
            
            public function verifierlogin($login,$password)
            {
                $sql= "select * from administrateur where loginadmin='".$login."' and passwordadmin='".$password."'";
                $result = $this->db->query($sql);
				$retour = $result->result_array();
				$this->db->close();
				return $retour;
            }


        }