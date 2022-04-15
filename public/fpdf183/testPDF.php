<?php
// define('FPDF_FONTPATH',"./font/");
// require('makefont/makefont.php');

// MakeFont('C:\\Windows\\Fonts\\comic.ttf','cp1252');

require_once "../../app/config/config.php";
require_once "../../app/libraries/Utils.php";
require_once "../../app/libraries/Database.php";

require('fpdf.php');
// $idCopro = $_GET['idContact'];
// $idApp = $_GET['idApp'];
$db = new Database();

class PDF extends FPDF
{

    // En-tête
    function Header()
    {
        // Logo
        if ($this->PageNo() != 1) {
            $this->Image('../images/logo.png', 0, 0, $this->GetPageWidth(), 60);
        }
    }

    // Pied de page
    function Footer()
    {
        if ($this->PageNo() != 1) {
            // Positionnement à 1,5 cm du bas
            $this->SetY(-8);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, $this->PageNo() . '/{nb}', 0, 0, 'C');
            // Début en police normale
            $this->SetY(-30);
            $this->SetFont('Arial', '', 10);
            $this->SetTextColor(23, 167, 217);
            $this->Cell(0, 5, 'Votre Comptabilite a votre portee', 0, 0, 'C');

            $this->SetY(-20);
            $this->SetFont('Arial', 'BU', 10);
            $this->SetTextColor(255, 255, 255);
            $this->SetFillColor(22, 122, 41);
            $this->Cell(0, 10, 'Compta-Pharma.sn', 0, 0, 'R', true, 'https://Compta-Pharma.sn');
            $this->SetY(-20);
            $this->SetFont('Arial', 'BU', 10);
            $this->SetTextColor(255, 255, 255);
            $this->Cell(0, 10, 'Fatou Tordy SY', 0, 0, 'L', false, 'mailto:travaux@wbcc.fr');


            $this->SetY(-25);
            $this->SetFont('Arial', '', 10);
            $this->SetTextColor(0, 0, 0);

            $this->SetY(-12);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Fait le ' . date('d/m/Y'), 0, 0, 'C');
        }
    }
}


$pdf = new PDF();

// $pdf->AddPage();
// $pdf->SetY(40 - $pdf->GetPageHeight());

// $pdf->SetFont('Arial', '', 12);
// $pdf->SetTextColor(255, 255, 255);

// $manager = "Lorem ipsum dolor sit amet, consectetur : ";
// $cdp = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur rem, doloribus assumenda tempore voluptatibus est aut pariatur illo et maiores explicabo suscipit dicta, ipsum laborum repudiandae odit, nesciunt dolores quasi.";
// $pdf->MultiCell(0,5,"Team Manager: ".$manager."\nProject Manager: ".$cdp,1,1,'L');

// $pdf->MultiCell(100,5, iconv('UTF-8', 'windows-1252',"L’ensemble des éléments sanitaires de l’habitation (baignoire, douche, lavabo, WC, etc.) ont été testés grâce à des méthodologies spécifiques et adaptées à chacun de ces éléments (micro-aspersions à la pipette, mise en charge bonde de fond, essai en eau projetée, etc.).
// Nous n’avons mis en évidence"),1);
// $pdf->Ln();

//Numéro de page
$pdf->AliasNbPages();
// Page de garde
$pdf->AddPage();
$pdf->Image('../images/logo.png', 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());
// // Page Tableau rapport de recherche de fuite
// $pdf->AddPage();
// $pdf->SetY(40 - $pdf->GetPageHeight());

// $pdf->SetFont('Arial', 'B', 16);
// $pdf->SetTextColor(255, 255, 255);
// $pdf->SetFillColor(192, 0, 0);
// $pdf->Cell(0, 15, 'RAPPORT DE RECHERCHE DE FUITE', 1, 0, 'C', true, '');
// $pdf->Ln();



$pdf->AddPage('L');
$pdf->SetY(40 - $pdf->GetPageHeight());
$pdf->SetFont('Arial', 'BU', 18);
$pdf->SetTextColor(22, 122, 41);
$pdf->Image('../images/logo.png', 10, 37, 10, 10);
$pdf->SetY(42);
$pdf->SetX(25);
$pdf->Cell(0, 0, 'Grand-Livre General', 0, 0, 'J', false, '');
$pdf->Ln(8);

//Tableau coordonnées des parties
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetX(2);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(22, 122, 41);
$pdf->Cell(150, 8, 'Compte 411 Client', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetX(2);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(22, 122, 41);
$pdf->Cell(40, 8, 'Date', 1, 0, 'C', true);
$pdf->Cell(40, 8, 'Libelle', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Debit', 1, 0, 'C', true);
$pdf->Cell(40, 8, 'Credit', 1, 0, 'C', true);
$pdf->Ln();


$parties = [
    [
        'nom' => '25-12-2021',
        'presence' => 'Ventes de Pompes',
        'type'  => '25000',
        'adresse' => '-'
    ],
    [
        'nom' => '27-12-2021',
        'presence' => 'Reglement par cheque',
        'type'  => '-',
        'adresse' => '25000'
    ],
    [
        'nom' => '27-12-2021',
        'presence' => 'Total',
        'type'  => '25000',
        'adresse' => '25000'
    ],
    [
        'nom' => '27-12-2021',
        'presence' => 'Solde',
        'type'  => '0',
        'adresse' => '0'
    ]
];


foreach ($parties as $partie) {
    $pdf->SetX(2);
    $pdf->SetTextColor(23, 167, 217);
    $pdf->SetFillColor(242, 242, 242);
    $pdf->Cell(40, 15, iconv('UTF-8', 'windows-1252', $partie['nom']), 1, 0, 'C', true);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(40, 15, iconv('UTF-8', 'windows-1252', $partie['presence']), 1, 0, 'C', true);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(30, 15, iconv('UTF-8', 'windows-1252', $partie['type']), 1, 0, 'C', true);
    $pdf->Cell(40, 15, iconv('UTF-8', 'windows-1252', $partie['adresse']), 1, 0, 'C', true);
    $pdf->SetTextColor(0, 0, 255);
    $pdf->SetFont('Arial', 'B', 10);

    $pdf->Ln();
}



$pdf->Output();
