<?php
class entree {
    public $libelle;
    public $description;
    public $prix;
    public $image;
    private $id;
    private $id_categorie;
    private $active;

    public function __construct($libelle, $description, $prix, $image, $id, $id_categorie, $active) {
        
        $this-> libelle = $libelle;
        $this-> description = $description;
        $this-> prix = $prix;
        $this-> image = $image;
        $this-> id = $id;
        $this-> id_categorie = $id_categorie;
        $this-> active = $active ;
    }

    public function getLibelleEntree () {
        return $this->libelle;
    }
    public function setLibelleEntree ($libelle) {
        $this->libelle = $libelle;
        return $this;
    }


    public function getDescriptionEntree () {
        return $this->description;
    }
    public function setDescriptionEntree ($description) {
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

    public function getIdEntree () {
        return $this->id;
    }
    public function setIdEntree ($id){
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


public function affichage_entree_categorie() {
    echo '<div class="affichage_Article mt-5">
    <div class=" justify-content-center">
        <h4>'. $this->getLibelleEntree().'</h4>
        <img src="'. $this->getImage().'" class="col-3 mb-4" alt="'. $this->getLibelleEntree().'" srcset="">
        <p>'. $this->getDescriptionEntree().'</p>
        <p>'. $this->getPrix().' € par portion.</p>
        <button class="ajouter-au-panier btn btn-primary" data-id="'. $this->getIdEntree().'">Ajouter au Panier</button>
    </div>
</div>';
}

public function affichage_entree() {
    echo '<div class="affichage_Article mt-5">
    <div class=" justify-content-center">
        <h4>'. $this->getLibelleEntree().'</h4>
        <img src="'. $this->getImage().'" class="col-3 mb-4" alt="'. $this->getLibelleEntree().'" srcset="">
        <p>'. $this->getDescriptionEntree().'</p>
        <p>'. $this->getPrix().' € par portion.</p>
        <button class="ajouter-au-panier btn btn-primary" data-id="'. $this->getIdEntree().'">Ajouter au Panier</button>
    </div>
</div>';
}
}
?>