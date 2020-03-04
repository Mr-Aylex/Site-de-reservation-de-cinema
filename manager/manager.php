<?php

require_once("../traitement/traitement_film.php");
require_once("../model/Films.php");

class manager
{
    /**
     * @return PDO
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
     */
    public function insert_film(Films $films)
    {

    $request = $this->connexion_bd()->prepare('INSERT INTO films(nom,salle) VALUES(:nom, :salle)');
    $insert_film =$request->execute(array(
        'nom'=>$films->getTitre(),
        'salle'=>$films->getSalle()
        ));
    if($insert_film == true)
    {
        header("Location: ../index.php");
    }


    }

    /**
     * @param Utilisateur $user
     */
    public function insert_Utilisateur(Utilisateur $user)
    {
        $request = $this->connexion_bd()->prepare('INSERT INTO utilisateur(nom, prenom, mail, adresse, mdp, admin) VALUES(:nom, :prenom, :mail, :adresse, :mdp, :admin)');
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
