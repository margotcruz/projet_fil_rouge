<?php
class dessert {
    public $libelle;
    public $description;
    public $prix;
    public $image;
    private $id;
    private $active;

    public function __construct($libelle=null, $description=null, $prix=null, $image=null, $id=null, $id_categorie=null, $active=null) {
        
        $this-> libelle = $libelle;
        $this-> description = $description;
        $this-> prix = $prix;
        $this-> image = $image;
        $this-> id = $id;
        $this-> active = $active ;
    }

    public function getLibelleDessert () {
        return $this->libelle;
    }
    public function setLibelleDessert ($libelle) {
        $this->libelle = $libelle;
        return $this;
    }


    public function getDescriptionDessert () {
        return $this->description;
    }
    public function setDescriptionDessert ($description) {
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

    public function getId () {
        return $this->id;
    }
    public function setId ($id){
        $this->id = $id;
        return $this;
    }

    public function getActive () {
        return $this->active;
    }
    public function setActive($active) {
        $this-> active = $active;
        return $this;
    }

public function affichage_dessert() {
    echo '<div class="card">
    <img src="' . $this->getImage() . '" alt="'. $this->getLibelleDessert().'">
    <div class="card-details">
      <p>'. $this->getLibelleDessert().'</p>
      <p>'. $this->getDescriptionDessert().'</p>
      <button>Commander</button>
  </div>
</div>';
}
}
?>