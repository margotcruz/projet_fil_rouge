<?php
class plat {
    public $libelle;
    public $description;
    public $prix;
    public $image;
    private $id;
    private $id_categorie;
    private $active;

    public function __construct($libelle=null, $description=null, $prix=null, $image=null, $id=null, $id_categorie=null, $active=null) {
        
        $this-> libelle = $libelle;
        $this-> description = $description;
        $this-> prix = $prix;
        $this-> image = $image;
        $this-> id = $id;
        $this-> id_categorie = $id_categorie;
        $this-> active = $active ;
    }

    public function getLibellePlat () {
        return $this->libelle;
    }
    public function setLibellePlat ($libelle) {
        $this->libelle = $libelle;
        return $this;
    }


    public function getDescription () {
        return $this->description;
    }
    public function setDescription ($description) {
        $this->description = $description;
        return $this;
    }


    public function getPrix () {
        return $this->prix;
    }
    public function setPrix ($prix) {
        $this->prix = $prix;
        return $this;
    }


    public function getImage () {
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
        return $this;
    }

    public function getId_Plat () {
        return $this->id;
    }
    public function setId_Plat ($id){
        $this->id = $id;
        return $this;
    }

    public function getIdCategorie () {
        return $this->id_categorie;
    }
    public function setIdCategorie($id_categorie){
        $this->id_categorie = $id_categorie;
        return $this;
    }

    public function getActive () {
        return $this->active;
    }
    public function setActive($active) {
        $this-> active = $active;
        return $this;
    }


public function affichage_plats_carousel () {
    echo ' <div class="carousel-item active">
    <img src="' . $this->getImage() . '" class="d-block w-100" alt="' . $this->getLibellePlat() . '">
    <div class="carousel-caption d-none d-md-block">
      <h5>' . $this->getLibellePlat() . '</h5>
      <p>'. $this->getDescription() . '</p>
      <p>'. $this->getPrix() . ' € par portion.</p>
    </div>
  </div>';
}


public function affichage_plat() {
    echo ' 
    <div class="card">
      <img src="' . $this->getImage() . '" alt="' . $this->getLibellePlat() . '">
      <div class="card-details">
        <p>' . $this->getLibellePlat() . '</p>
        <p>'. $this->getDescription() . '</p>
        <button>Commander</button>
    </div>
  </div>
  ';
}

}
?>