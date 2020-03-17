<?php

/**
 * Class manager
 */
class manager
{
    /**
* @return PDO
*/
    public function connexion_bd()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cinema_php;charset=utf8','root','root');
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
        //header("Location: ../index.php");
    }


    }

    /**
     * @param Utilisateur $user
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
                if ($insert_utilisateur == true) {
                    header("Location: ../index.php");
                }
            }

        }
    }

    /**
     * @param $mail
     * @param $mdp
     * @return Utilisateur
     */
    public function connexion_utilisateur($mail, $mdp)
    {
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
     * @param int $id
     * @return Utilisateur
     */
    public function recuperer_les_donnees_admin($id)
    {
        /** @var PDO $this */
        $request = $this->connexion_bd()->prepare('SELECT * FROM utilisateur WHERE id = :id');
        $request->execute(array('id' => $id));
        $response = $request->fetch();
        if ($response == true)
        {
            $user = new Utilisateur($response);
            return $user;
        }
        else
        {
            header('Location: connexion_form.php');
        }
    }

    /**
     * @param Utilisateur $user
     */
    public function modifier_les_donnees_utilisateur(Utilisateur $user)
    {
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
    public function flush_film()
    {
        require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");
        $request = $this->connexion_bd()->query('SELECT * FROM films');
        $response = $request->fetchall();
        $tab_film = array();
        $i = 0;
        foreach ($response as $item => $value) {
            $nom = strtr($value['titre'],array(" " => "_", "'" => "-"));
            $$nom = new Films($value);
            $tab_film[$nom] = $$nom;
            $i++;
        }
        return $tab_film;
    }

}
