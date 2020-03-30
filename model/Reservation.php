

<?php

class Reservation {
  protected $numero;
  protected $tarif;
  protected $type_de_tarif;
  protected $salle;
  protected $id_film;
  protected $id_utilisateur;
  /**
   * Films constructor.
   * @param $donnees
   */
  public function __construct($donnees){
    $this->hydrate($donnees);
  }

  /**
   * @param array $donnees
   */
  public function hydrate($donnees){
    foreach($donnees as $key => $value){
          $method = 'set'.ucfirst($key);
          if(method_exists($this,$method)){
            $this->$method($value);
          }
    }

  }

  /**
   * @return string
   */
  public function getTarif()
  {
    return $this->tarif;
  }

  /**
   * @param string $salle
   * @return reservation
   */
  public function setTarif($tarif)
  {
    $this->tarif = $tarif;
    return $this;
  }

  public function getType_de_tarif()
  {
    return $this->type_de_tarif;
  }

  public function setType_de_tarif($type_de_tarif)
  {
    $this->type_de_tarif = $type_de_tarif;
    return $this;
  }

  public function getSalle()
  {
    return $this->salle;
  }

  public function setSalle($salle)
  {
    $this->salle = $salle;
    return $this;
  }

  public function getId_film()
  {
    return $this->id_film;
  }

  public function setId_film($id_film)
  {
    $this->id_film = $id_film;
    return $this;
  }
  public function getId_utilisateur()
  {
    return $this->id_utilisateur;
  }

  public function setId_utilisateur($id_utilisateur)
  {
    $this->id_utilisateur = $id_utilisateur;
    return $this;
  }


}


 ?>