<?php
class dessert {
    public $libelle;
    public $description;
    public $prix;
    public $image;
    private $id;
    private $active;

    public function __construct($libelle, $description, $prix, $image, $id, $id_categorie, $active) {
        
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
    echo '<div class="affichage_Article mt-5">
    <div class=" justify-content-center">
        <h4>'. $this->getLibelleDessert().'</h4>
        <img src="'. $this->getImage().'" class="col-3 mb-4" alt="'. $this->getLibelleDessert().'" srcset="">
        <p>'. $this->getDescriptionDessert().'</p>
        <p>'. $this->getPrix().' € par portion.</p>
        <button class="ajouter-au-panier btn btn-primary" data-id="'. $this->getId().'">Ajouter au Panier</button>
        <div>
            
</div>';
}
}
?>