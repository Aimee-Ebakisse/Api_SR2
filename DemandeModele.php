<?php
class DemandeModele{
    private $db;

    public function __construct($db) {
        $this->db=$db;
    }

    public function ListeDemandeService(){
        $req="SELECT iddemande, idclient,description FROM demandeservice";
        $pre= $this->db->prepare($req);
        $pre->execute();
        
        return $pre;
    }
}