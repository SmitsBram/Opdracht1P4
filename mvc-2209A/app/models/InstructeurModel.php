<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInstructeur()
    {
        $sql = "SELECT 
                    Voornaam
                    ,Tussenvoegsel
                    ,Achternaam
                    ,Mobiel
                    ,DatumInDienst
                    ,AantalSterren
                    
                FROM   Instructeur";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
