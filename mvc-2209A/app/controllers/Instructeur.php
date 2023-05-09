<?php

class Instructeur extends BaseController
{
    private $InstructeurModel;

    public function __construct()
    {
        $this->InstructeurModel = $this->model('InstructeurModel');
    }

    public function index()
    {
        $Instructeur = $this->InstructeurModel->getInstructeur();

        $rows = '';
        foreach ($Instructeur as $result) {
            $rows .= "<tr>
                        <td>$result->Voornaam</td>   
                        <td>$result->Tussenvoegsel</td>
                        <td>$result->Achternaam</td>
                        <td>$result->Mobiel</td>
                        <td>$result->DatumInDienst</td>
                        <td>$result->AantalSterren</td>   
                        <td><a href='" . URLROOT ."/instructeur/overzichtvoertuigen/'><i class='bi bi-car-front'></i></a></td>            
                      </tr>";
        }


        $data = [
            'title' => 'Instructeurs in dienst',
            'records' => 'info uit de database',
            'rows'    => $rows
        ];

        $this->view('Instructeur/overzichtinstructeur', $data);
    }

        public function overzichtVoertuigen($Id)
        {
            $result = $this->InstructeurModel->getToegewezenVoertuigen($Id);
        }
    }