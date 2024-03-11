<?php
class plat {
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

public function affichage_plat_header () {
    echo '<div class="card">
    <img src="' . $this->getImage() . '" class="card-img mb-3" alt="' . $this->getLibellePlat() . '">
    <div class="card-img-overlay">
      <h5 class="card-title">' . $this->getLibellePlat() . '</h5>
    </div>
  </div>';
}

public function affichage_plat() {
    echo '<div class="affichage_Article mt-5">
    <div class=" justify-content-center">
        <h4>'. $this->getLibellePlat() . '</h4>
        <img src="'. $this->getImage() .'" class="col-3 mb-4" alt="'. $this->getLibellePlat() . '" srcset="">
        <p>'. $this->getDescription() . '</p>
        <p>'. $this->getPrix() . ' € par portion.</p>
        <button class="ajouter-au-panier btn btn-primary" data-id="'. $this->getId_Plat() . '">Ajouter au Panier</button>
        <div>
    </div>
</div>';
}

public function affichage_plat_vedette() {
   echo '<div class="box-front">
   <img src="'. $this->getImage() .'" alt="'. $this->getLibellePlat() . '" class="img-box">
 </div>
 <div class="box-back">
   <p>'. $this->getDescription() . '</p>
   <p>'. $this->getPrix() . '</p>
 </div>';
}
}
?>