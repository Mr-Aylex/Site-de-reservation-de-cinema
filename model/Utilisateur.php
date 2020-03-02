<?php


class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $adresse;
    protected $mdp;
    protected $admin;

    /**
     * @param array $array
     */
    public function __construc($array)
    {
        if(empty($array['admin']))
        {
            $array['admin']=null;
        }
        $this->setNom($array['nom'])
            ->setPrenom($array['prenom'])
            ->setMail($array['mail'])
            ->setAdresse($array['adresse'])
            ->setMdp($array['mdp'])
            ->setAdmin($array['admin'])
        ;
    }
    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param string $mdp
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param string $admin
     * @return Utilisateur
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }


}
?>