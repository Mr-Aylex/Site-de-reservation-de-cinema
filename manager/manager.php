<?php
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");
/**
 * Class manager
 */
class manager
{
    /**
    * @return PDO
     * methode qui return l'objet PDO
    */
    public function connexion_bd()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cinema_php;charset=utf8','root','');
        }
        catch(Exception $e)
        {
            die('ERREUR:'.$e->getMessage());
        }
        return $bdd;
    }

    /**
     * @param Films $films
     *Cette methode permet d'inserer un film
     */
    public function insert_film(Films $films)
    {
        $request = $this->connexion_bd()->prepare('INSERT INTO films(titre,resume,image,bande_annonce,salle,tweet) VALUES(:titre, :resume,:image,:bande_annonce,:salle,:tweet)');
        $insert_film =$request->execute(array(
            'titre'=>$films->getTitre(),
            'resume'=>$films->getResume(),
            'image'=>$films->getImage(),
            'bande_annonce'=>$films->getBande_annonce(),
            'salle'=>$films->getSalle(),
            'tweet'=>$films->getTweet()
          ));
        if($insert_film == true)
        {

            header("Location: ../index.php");
        }

    }






    /**
     * @param Utilisateur $user
     * pour créer un utilisateur dans la BD
     */
    public function insert_Utilisateur(Utilisateur $user)
    {
        $db = $this->connexion_bd();
        $req = $db->prepare('SELECT nom, prenom FROM utilisateur WHERE nom=:nom, prenom=:prenom');
        $req->execute(array(// on lit les donnée de la base de donnée
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom()));
        $donne = $req->fetch();
        if ($donne == true) {
            header(dirname($_SERVER['DOCUMENT_ROOT'])  . '/site-de-reservation-de-cinema/formulaire/inscription_form.php');
        } else {
            $req = $db->prepare('SELECT mail FROM utilisateur WHERE mail=:mail');
            $req->execute(array(// on lit les donnée de la base de donnée
                'mail' => $user->getMail()));
            $donne = $req->fetch();
            if ($donne == true) {
                header(dirname($_SERVER['DOCUMENT_ROOT']). '/site-de-reservation-de-cinema/formulaire/inscription_form.php');
            } else {
                $request = $db->prepare('INSERT INTO utilisateur(nom, prenom, mail, adresse, mdp, admin) VALUES(:nom, :prenom, :mail, :adresse, :mdp, :admin)');
                $insert_utilisateur = $request->execute(array(
                    'nom' => $user->getNom(),
                    'prenom' => $user->getPrenom(),
                    'mail' => $user->getMail(),
                    'adresse' => $user->getAdresse(),
                    'mdp' => $user->getMdp(),
                    'admin' => $user->getAdmin()
                ));
            }

        }
    }

    /**
     * @param String $mail
     * @param String $mdp
     * @return Utilisateur
     * pour connecter l'utilisateur
     */
    public function connexion_utilisateur($mail, $mdp)
    {
        /** @var PDO $this */
        $request = $this->connexion_bd()->prepare('SELECT * FROM utilisateur WHERE mail=:mail and mdp=:mdp');
        $request->execute(array('mdp'=>$mdp, 'mail'=>$mail));
        $response = $request->fetch();
        if ($response == true)
        {
            $user = new Utilisateur($response);
            return $user;
        }
        else
        {
            header('Location: ../formulaire/connexion_form.php');
        }
    }

    /**
     * @return Utilisateur
     * retourne tous les utilisateur présent dans la base de données
     */
    public function recuperer_les_donnees_admin()
    {
        /** @var PDO $this */
        $request = $this->connexion_bd()->query('SELECT * FROM utilisateur');
        $response = $request->fetchall();
        if ($response == true)
        {
            $tab_user = array();
            foreach ($response as $item => $value) {
                $nom = $value['id'].$value['nom'];
                $$nom = new Utilisateur($value);
                $tab_user[$nom] = $$nom;
            }
            return $tab_user;
        }
        else
        {
            return "base de données vide";
        }
    }

    /**
     * @param Utilisateur $user
     * modifie l'utilisateur connecté
     */
    public function modifier_les_donnees_utilisateur(Utilisateur $user)
    {
        /** @var PDO $this */
        $request = $this->connexion_bd()->prepare(' UPDATE utilisateur SET nom = :nom, prenom = :prenom, mail = :mail, adresse = :adresse WHERE id = :id');
        $request->execute(array(
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'mail' => $user->getMail(),
            'adresse' => $user->getAdresse(),
            'id' => $user->getId()
        ));

            header('Location: ../index.php');
    }

    /**
     * @return array
     * methode qui récupère les films et leurs attribues
     */
    public function flush_film()
    {
        require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");
        /** @var PDO $this */
        $request = $this->connexion_bd()->query('SELECT * FROM films');
        $response = $request->fetchall();
        $tab_film = array();
        foreach ($response as $item => $value) {
            $nom = strtr($value['titre'],array(" " => "_", "'" => "µ"));
            $$nom = new Films($value);
            $tab_film[$nom] = $$nom;
        }
        return $tab_film;

    }



    /**
     * @param Reservation $reservation
     * @param int $id
     * @return boolean
     * Méthode qui ajoute une réservation
     */
    public function reservation_film(Reservation $reservation,$id) {
          require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Reservation.php");
          require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/traitement/traitement_reservation_film.php");
      $req_2= $this->connexion_bd()->prepare('INSERT INTO place(tarif,type_de_tarif, salle,id_film,id_utilisateur) VALUES(:tarif, :type_tarif, :salle, :id_film, :id_utilisateur)');
      $tab = array(
          "tarif" =>$reservation->getTarif(),
          "type_tarif" => $reservation->getType_de_tarif(),
          "salle" => $reservation->getSalle(),
          "id_film" => $reservation->getId_film(),
          "id_utilisateur" => $reservation->getId_utilisateur()
      );
        $insert_reservation = $req_2->execute($tab);
        //Vérification de l'existence du tableau de données
          if ($insert_reservation == true){
            return true;
          }else{
              return false;
          }

    }

    /**
     * @param Utilisateur $user
     */
    public function ajout_admin(Utilisateur $user){
      $db = $this->connexion_bd();
      $request = $db->prepare('INSERT INTO utilisateur(nom, prenom, mail, adresse, mdp, admin) VALUES(:nom, :prenom, :mail, :adresse, :mdp, :admin)');
      $insert_utilisateur = $request->execute(array(
          'nom' => $user->getNom(),
          'prenom' => $user->getPrenom(),
          'mail' => $user->getMail(),
          'adresse' => $user->getAdresse(),
          'mdp' => "Admin",
          'admin' => $user->getAdmin()));
          header("Location:../views/admin.php");

    }

    /**
     * @param int $id_film
     * @param String $commentaire
     */
    public function ajout_commentaire($id_film, $commentaire){
        $db = $this->connexion_bd();
        $request = $db->prepare('INSERT INTO commentaire(id_film, commentaire) VALUES(:id_film, :commentaire)');
        $insert_utilisateur = $request->execute(array(
            'id_film' => $id_film,
            'commentaire' => $commentaire
        ));
    }

    /**
     * @return array
     */
    public function Getplaces() {
        $db = $this->connexion_bd();
        $request = $db->query('SELECT * from place');
        $tableau = $request->fetchAll();
        $tab_places = array();
        foreach ($tableau as $item => $value) {
            $numero = $value['numero'].'place';
            $$numero = new Reservation($value);
            $tab_places[$numero] = $$numero;
        }
        return $tab_places;
    }

    /**
     * @param int $id
     */
    public function Deleteplace($id) {
        $db = $this->connexion_bd();
        $request = $db->prepare('DELETE from place WHERE numero = :id');
        $Delete_utilisateur = $request->execute(array(
            'id' => $id
        ));
    }

    /**
     * @param int $tarif
     * @param String $type_tarif
     * @param int $salle
     * @param int $id_film
     * @param int $id
     */
    public function ModifierPlace($tarif, $type_tarif, $salle, $id_film, $id) {
        $db = $this->connexion_bd();
        $request = $db->prepare('UPDATE place set tarif = :tarif, type_de_tarif = :type_tarif, salle = :salle, id_film = :id_film WHERE numero = :id');
        $Modifier_utilisateur = $request->execute(array(
            'id' => $id,
            'tarif' => $tarif,
            'type_tarif' => $type_tarif,
            'salle' => $salle,
            'id_film' => $id_film
        ));
    }

    /**
     * @param int $id
     * @param String $condition
     * @return boolean
     *
     */
    public function GetReservation($id, $condition) {
        $db = $this->connexion_bd();
        $request = $db->prepare('SELECT numero,tarif,type_de_tarif,place.salle, films.titre, utilisateur.nom
from place INNER JOIN utilisateur ON utilisateur.id = place.id_utilisateur INNER JOIN films ON films.id = place.id_film where id_utilisateur = :id');
        $request->execute(array(
            'id' => $id/*,
            'condition' =>$condition*/
        ));
        $res = $request->fetchAll();
        return $res;
    }
    public function getFilm($id_film) {
        $db = $this->connexion_bd();
        $request = $db->prepare('SELECT * FROM films where id= :id');
        $request->execute(array(
            'id' =>$id_film
        ));
        $res = $request->fetch();
        var_dump($res);
        return $res;
    }

}
