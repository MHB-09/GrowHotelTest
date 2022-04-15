<?php

/**
 * @param $number
 * @return string
 */
require_once 'Database.php';

/**
 * Cette fonction permet de rendre un champs DISABLED pour tous les autres role excepté celui passé en parametres
 * @param $role
 * @return string
 */
function editableBy($role)
{
    return strtoupper(Role::getRole()) == strtoupper($role) ? '' : 'disabled';
}

/**
 * @param $date : d-m-Y
 * @param $format : d|dd|m|y|dmy|dm|my
 * @return false|mixed|string
 */
function my_dateEnFrancais($date, $format)
{

    $dd = date($date);
    $jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    $mois = array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    $format = strtolower($format);
    if ($format == 'd') {
        $datefr = $jour[date("w", strtotime($dd))];
    } elseif ($format == 'dd') {
        $datefr = $jour[date("w", strtotime($dd))] . " " . date("d", strtotime($dd));
    } elseif ($format == 'm') {
        $datefr = $mois[date("n", strtotime($dd))];
    } elseif ($format == 'y') {
        $datefr = date("Y", strtotime($dd));
    } elseif ($format == 'dmy') {
        $datefr = $jour[date("w", strtotime($dd))] . " " . date("d", strtotime($dd)) . " " . $mois[date("n", strtotime($dd))] . " " . date("Y", strtotime($dd));
    } elseif ($format == 'dm') {
        $datefr = $jour[date("w", strtotime($dd))] . " " . date("d", strtotime($dd)) . " " . $mois[date("n", strtotime($dd))];
    } elseif ($format == 'my') {
        $datefr = $mois[date("n", strtotime($dd))] . " " . date("Y", strtotime($dd));
    } else {
        $datefr = "Format incorrect";
    }

    return $datefr;
}

function my_formatNumber($number)
{
    return number_format($number, 0, '', '.');
}

function chargerPhoto($photo)
{
    if (file_exists(URLPHOTO . 'profil/' . $photo)) {
        return URLROOT . '/public/img/profil/' . $photo;
    } else {
        return URLROOT . '/public/img/profil/default.jpg';
    }
}

function chargerLogo($photo)
{
    if (file_exists(URLPHOTO . '/' . $photo)) {
        return URLROOT . '/public/img/' . $photo;
    } else {
        return URLROOT . '/public/img/logo.jpg';
    }
}

function linkTo($controller = 'personnel', $method = '', $param1 = '', $param2 = '')
{
    if (empty($method))
        return URLROOT . '/' . $controller;
    elseif (empty($param1))
        return URLROOT . '/' . $controller . '/' . $method;
    elseif (empty($param2))
        return URLROOT . '/' . $controller . '/' . $method . '/' . $param1;
    else
        return URLROOT . '/' . $controller . '/' . $method . '/' . $param1 . '/' . $param2;
}

function getNationalites()
{
    return "<option value='Afghane'>Afghane (Afghanistan)</option>
                                    <option value='Albanaise'>Albanaise (Albanie)</option>
                                    <option value='Algérienne'>Algérienne (Algérie)</option>
                                    <option value='Allemande'>Allemande (Allemagne)</option>
                                    <option value='Americaine'>Americaine (États-Unis)</option>
                                    <option value='Andorrane'>Andorrane (Andorre)</option>
                                    <option value='Angolaise'>Angolaise (Angola)</option>
                                    <option value='Antiguaise-et-Barbudienne'>Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                                    <option value='Argentine'>Argentine (Argentine)</option>
                                    <option value='Armenienne'>Armenienne (Arménie)</option>
                                    <option value='Australienne'>Australienne (Australie)</option>
                                    <option value='Autrichienne'>Autrichienne (Autriche)</option>
                                    <option value='Azerbaïdjanaise'>Azerbaïdjanaise (Azerbaïdjan)</option>
                                    <option value='Bahamienne'>Bahamienne (Bahamas)</option>
                                    <option value='Bahreinienne'>Bahreinienne (Bahreïn)</option>
                                    <option value='Bangladaise'>Bangladaise (Bangladesh)</option>
                                    <option value='Barbadienne'>Barbadienne (Barbade)</option>
                                    <option value='Belge'>Belge (Belgique)</option>
                                    <option value='Belizienne'>Belizienne (Belize)</option>
                                    <option value='Béninoise'>Béninoise (Bénin)</option>
                                    <option value='Bhoutanaise'>Bhoutanaise (Bhoutan)</option>
                                    <option value='Biélorusse'>Biélorusse (Biélorussie)</option>
                                    <option value='Birmane'>Birmane (Birmanie)</option>
                                    <option value='Bissau-Guinéenne'>Bissau-Guinéenne (Guinée-Bissau)</option>
                                    <option value='Bolivienne'>Bolivienne (Bolivie)</option>
                                    <option value='Bosnienne'>Bosnienne (Bosnie-Herzégovine)</option>
                                    <option value='Botswanaise'>Botswanaise (Botswana)</option>
                                    <option value='Brésilienne'>Brésilienne (Brésil)</option>
                                    <option value='Britannique'>Britannique (Royaume-Uni)</option>
                                    <option value='Brunéienne'>Brunéienne (Brunéi)</option>
                                    <option value='Bulgare'>Bulgare (Bulgarie)</option>
                                    <option value='Burkinabée'>Burkinabée (Burkina)</option>
                                    <option value='Burundaise'>Burundaise (Burundi)</option>
                                    <option value='Cambodgienne'>Cambodgienne (Cambodge)</option>
                                    <option value='Camerounaise'>Camerounaise (Cameroun)</option>
                                    <option value='Canadienne'>Canadienne (Canada)</option>
                                    <option value='Cap-verdienne'>Cap-verdienne (Cap-Vert)</option>
                                    <option value='Centrafricaine'>Centrafricaine (Centrafrique)</option>
                                    <option value='Chilienne'>Chilienne (Chili)</option>
                                    <option value='Chinoise'>Chinoise (Chine)</option>
                                    <option value='Chypriote'>Chypriote (Chypre)</option>
                                    <option value='Colombienne'>Colombienne (Colombie)</option>
                                    <option value='Comorienne'>Comorienne (Comores)</option>
                                    <option value='Congolaise'>Congolaise (Congo-Brazzaville)</option>
                                    <option value='Congolaise'>Congolaise (Congo-Kinshasa)</option>
                                    <option value='Cookienne'>Cookienne (Îles Cook)</option>
                                    <option value='Costaricaine'>Costaricaine (Costa Rica)</option>
                                    <option value='Croate'>Croate (Croatie)</option>
                                    <option value='Cubaine'>Cubaine (Cuba)</option>
                                    <option value='Danoise'>Danoise (Danemark)</option>
                                    <option value='Djiboutienne'>Djiboutienne (Djibouti)</option>
                                    <option value='Dominicaine'>Dominicaine (République dominicaine)</option>
                                    <option value='Dominiquaise'>Dominiquaise (Dominique)</option>
                                    <option value='Égyptienne'>Égyptienne (Égypte)</option>
                                    <option value='Émirienne'>Émirienne (Émirats arabes unis)</option>
                                    <option value='Équato-guineenne'>Équato-guineenne (Guinée équatoriale)</option>
                                    <option value='Équatorienne'>Équatorienne (Équateur)</option>
                                    <option value='Érythréenne'>Érythréenne (Érythrée)</option>
                                    <option value='Espagnole'>Espagnole (Espagne)</option>
                                    <option value='Est-timoraise'>Est-timoraise (Timor-Leste)</option>
                                    <option value='Estonienne'>Estonienne (Estonie)</option>
                                    <option value='Éthiopienne'>Éthiopienne (Éthiopie)</option>
                                    <option value='Fidjienne'>Fidjienne (Fidji)</option>
                                    <option value='Finlandaise'>Finlandaise (Finlande)</option>
                                    <option value='Française'>Française (France)</option>
                                    <option value='Gabonaise'>Gabonaise (Gabon)</option>
                                    <option value='Gambienne'>Gambienne (Gambie)</option>
                                    <option value='Georgienne'>Georgienne (Géorgie)</option>
                                    <option value='Ghanéenne'>Ghanéenne (Ghana)</option>
                                    <option value='Grenadienne'>Grenadienne (Grenade)</option>
                                    <option value='Guatémaltèque'>Guatémaltèque (Guatemala)</option>
                                    <option value='Guinéenne'>Guinéenne (Guinée)</option>
                                    <option value='Guyanienne'>Guyanienne (Guyana)</option>
                                    <option value='Haïtienne'>Haïtienne (Haïti)</option>
                                    <option value='Hellénique'>Hellénique (Grèce)</option>
                                    <option value='Hondurienne'>Hondurienne (Honduras)</option>
                                    <option value='Hongroise'>Hongroise (Hongrie)</option>
                                    <option value='Indienne'>Indienne (Inde)</option>
                                    <option value='Indonésienne'>Indonésienne (Indonésie)</option>
                                    <option value='Irakienne'>Irakienne (Iraq)</option>
                                    <option value='Iranienne'>Iranienne (Iran)</option>
                                    <option value='Irlandaise'>Irlandaise (Irlande)</option>
                                    <option value='Islandaise'>Islandaise (Islande)</option>
                                    <option value='Israélienne'>Israélienne (Israël)</option>
                                    <option value='Italienne'>Italienne (Italie)</option>
                                    <option value='Ivoirienne'>Ivoirienne (Côte d'Ivoire)</option>
                                    <option value='Jamaïcaine'>Jamaïcaine (Jamaïque)</option>
                                    <option value='Japonaise'>Japonaise (Japon)</option>
                                    <option value='Jordanienne'>Jordanienne (Jordanie)</option>
                                    <option value='Kazakhstanaise'>Kazakhstanaise (Kazakhstan)</option>
                                    <option value='Kenyane'>Kenyane (Kenya)</option>
                                    <option value='Kirghize'>Kirghize (Kirghizistan)</option>
                                    <option value='Kiribatienne'>Kiribatienne (Kiribati)</option>
                                    <option value='Kittitienne'>Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                                    <option value='Koweïtienne'>Koweïtienne (Koweït)</option>
                                    <option value='Laotienne'>Laotienne (Laos)</option>
                                    <option value='Lesothane'>Lesothane (Lesotho)</option>
                                    <option value='Lettone'>Lettone (Lettonie)</option>
                                    <option value='Libanaise'>Libanaise (Liban)</option>
                                    <option value='Libérienne'>Libérienne (Libéria)</option>
                                    <option value='Libyenne'>Libyenne (Libye)</option>
                                    <option value='Liechtensteinoise'>Liechtensteinoise (Liechtenstein)</option>
                                    <option value='Lituanienne'>Lituanienne (Lituanie)</option>
                                    <option value='Luxembourgeoise'>Luxembourgeoise (Luxembourg)</option>
                                    <option value='Macédonienne'>Macédonienne (Macédoine)</option>
                                    <option value='Malaisienne'>Malaisienne (Malaisie)</option>
                                    <option value='Malawienne'>Malawienne (Malawi)</option>
                                    <option value='Maldivienne'>Maldivienne (Maldives)</option>
                                    <option value='Malgache'>Malgache (Madagascar)</option>
                                    <option value='Maliennes'>Maliennes (Mali)</option>
                                    <option value='Maltaise'>Maltaise (Malte)</option>
                                    <option value='Marocaine'>Marocaine (Maroc)</option>
                                    <option value='Marshallaise'>Marshallaise (Îles Marshall)</option>
                                    <option value='Mauricienne'>Mauricienne (Maurice)</option>
                                    <option value='Mauritanienne'>Mauritanienne (Mauritanie)</option>
                                    <option value='Mexicaine'>Mexicaine (Mexique)</option>
                                    <option value='Micronésienne'>Micronésienne (Micronésie)</option>
                                    <option value='Moldave'>Moldave (Moldovie)</option>
                                    <option value='Monegasque'>Monegasque (Monaco)</option>
                                    <option value='Mongole'>Mongole (Mongolie)</option>
                                    <option value='Monténégrine'>Monténégrine (Monténégro)</option>
                                    <option value='Mozambicaine'>Mozambicaine (Mozambique)</option>
                                    <option value='Namibienne'>Namibienne (Namibie)</option>
                                    <option value='Nauruane'>Nauruane (Nauru)</option>
                                    <option value='Néerlandaise'>Néerlandaise (Pays-Bas)</option>
                                    <option value='Néo-Zélandaise'>Néo-Zélandaise (Nouvelle-Zélande)</option>
                                    <option value='Népalaise'>Népalaise (Népal)</option>
                                    <option value='Nicaraguayenne'>Nicaraguayenne (Nicaragua)</option>
                                    <option value='Nigériane'>Nigériane (Nigéria)</option>
                                    <option value='Nigérienne'>Nigérienne (Niger)</option>
                                    <option value='Niuéenne'>Niuéenne (Niue)</option>
                                    <option value='Nord-coréenne'>Nord-coréenne (Corée du Nord)</option>
                                    <option value='Norvégienne'>Norvégienne (Norvège)</option>
                                    <option value='Omanaise'>Omanaise (Oman)</option>
                                    <option value='Ougandaise'>Ougandaise (Ouganda)</option>
                                    <option value='Ouzbéke'>Ouzbéke (Ouzbékistan)</option>
                                    <option value='Pakistanaise'>Pakistanaise (Pakistan)</option>
                                    <option value='Palaosienne'>Palaosienne (Palaos)</option>
                                    <option value='Palestinienne'>Palestinienne (Palestine)</option>
                                    <option value='Panaméenne'>Panaméenne (Panama)</option>
                                    <option value='Papouane-Néo-Guinéenne'>Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                                    <option value='Paraguayenne'>Paraguayenne (Paraguay)</option>
                                    <option value='Péruvienne'>Péruvienne (Pérou)</option>
                                    <option value='Philippine'>Philippine (Philippines)</option>
                                    <option value='Polonaise'>Polonaise (Pologne)</option>
                                    <option value='Portugaise'>Portugaise (Portugal)</option>
                                    <option value='Qatarienne'>Qatarienne (Qatar)</option>
                                    <option value='Roumaine'>Roumaine (Roumanie)</option>
                                    <option value='Russe'>Russe (Russie)</option>
                                    <option value='Rwandaise'>Rwandaise (Rwanda)</option>
                                    <option value='Saint-Lucienne'>Saint-Lucienne (Sainte-Lucie)</option>
                                    <option value='Saint-Marinaise'>Saint-Marinaise (Saint-Marin)</option>
                                    <option value='Saint-Vincentaise et Grenadine'>Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                                    <option value='Salomonaise'>Salomonaise (Îles Salomon)</option>
                                    <option value='Salvadorienne'>Salvadorienne (Salvador)</option>
                                    <option value='Samoane'>Samoane (Samoa)</option>
                                    <option value='Santoméenne'>Santoméenne (Sao Tomé-et-Principe)</option>
                                    <option value='Saoudienne'>Saoudienne (Arabie saoudite)</option>
                                    <option value='Sénégalaise' selected>Sénégalaise (Sénégal)</option>
                                    <option value='Serbe'>Serbe (Serbie)</option>
                                    <option value='Seychelloise'>Seychelloise (Seychelles)</option>
                                    <option value='Sierra-Léonaise'>Sierra-Léonaise (Sierra Leone)</option>
                                    <option value='Singapourienne'>Singapourienne (Singapour)</option>
                                    <option value='Slovaque'>Slovaque (Slovaquie)</option>
                                    <option value='Slovène'>Slovène (Slovénie)</option>
                                    <option value='Somalienne'>Somalienne (Somalie)</option>
                                    <option value='Soudanaise'>Soudanaise (Soudan)</option>
                                    <option value='Sri-Lankaise'>Sri-Lankaise (Sri Lanka)</option>
                                    <option value='Sud-Africaine'>Sud-Africaine (Afrique du Sud)</option>
                                    <option value='Sud-Coréenne'>Sud-Coréenne (Corée du Sud)</option>
                                    <option value='Sud-Soudanaise'>Sud-Soudanaise (Soudan du Sud)</option>
                                    <option value='Suédoise'>Suédoise (Suède)</option>
                                    <option value='Suisse'>Suisse (Suisse)</option>
                                    <option value='Surinamaise'>Surinamaise (Suriname)</option>
                                    <option value='Swazie'>Swazie (Swaziland)</option>
                                    <option value='Syrienne'>Syrienne (Syrie)</option>
                                    <option value='Tadjike'>Tadjike (Tadjikistan)</option>
                                    <option value='Tanzanienne'>Tanzanienne (Tanzanie)</option>
                                    <option value='Tchadienne'>Tchadienne (Tchad)</option>
                                    <option value='Tchèque'>Tchèque (Tchéquie)</option>
                                    <option value='Thaïlandaise'>Thaïlandaise (Thaïlande)</option>
                                    <option value='Togolaise'>Togolaise (Togo)</option>
                                    <option value='Tonguienne'>Tonguienne (Tonga)</option>
                                    <option value='Trinidadienne'>Trinidadienne (Trinité-et-Tobago)</option>
                                    <option value='Tunisienne'>Tunisienne (Tunisie)</option>
                                    <option value='Turkmène'>Turkmène (Turkménistan)</option>
                                    <option value='Turque'>Turque (Turquie)</option>
                                    <option value='Tuvaluane'>Tuvaluane (Tuvalu)</option>
                                    <option value='Ukrainienne'>Ukrainienne (Ukraine)</option>
                                    <option value='Uruguayenne'>Uruguayenne (Uruguay)</option>
                                    <option value='Vanuatuane'>Vanuatuane (Vanuatu)</option>
                                    <option value='Vaticane'>Vaticane (Vatican)</option>
                                    <option value='Vénézuélienne'>Vénézuélienne (Venezuela)</option>
                                    <option value='Vietnamienne'>Vietnamienne (Viêt Nam)</option>
                                    <option value='Yéménite'>Yéménite (Yémen)</option>
                                    <option value='Zambienne'>Zambienne (Zambie)</option>
                                    <option value='Zimbabwéenne'>Zimbabwéenne (Zimbabwe)</option>
";
}

function convertirFormat($photo, $nom)
{
    if ($photo != "") {
        $b64 =  explode(",",  $photo)[1];
        $bin = base64_decode($b64);
        $im = imageCreateFromString($bin);

        if (!$im) {

            die('Base64 value is not a valid image');
            return "0";
        }

        $img_file = "../public/img/documents/$nom.png";

        imagepng($im, $img_file, 0);
        return $nom;
    }
    return "0";
}


function imprimer($nomFichier)
{
    return URLROOT . '/public/pdf/' . $nomFichier . '.php';
}

function downloadFile($nomFichier)
{
    $filepath ="https://extranet.infocopro.fr/documents/$nomFichier";
    $chemin = "../public/documents/$nomFichier";
  //  echo $filepath;
    if(file_exists($chemin)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream;charset=utf-8');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: no-cache');
        header('Content-Length: ' . filesize($filepath));
        ob_clean();
        flush(); // Flush system output buffer
        readfile($filepath);
        return true;
   } 
   return false;
}

function deleteFileFromFolder($nomFichier)
{
    $chemin = "../public/documents/$nomFichier";
    
    if(file_exists($chemin)) {
       unlink($chemin);
        return true;
   } 

   return false;

}

function getForm($tab = [])
{
    $tab = empty($tab) ? $_POST : $tab;
    $table = [];
    foreach ($tab as $k => $val) {
        $table[$k] = trim(htmlspecialchars($val));
    }
    return $table;
}

function isEmptyOnTab($tab): bool
{
    foreach ($tab as $k => $v) {
        if (empty($v)) {
            return true;
        }
    }
    return false;
}

function dateEnAge($date)
{
    $duree = nbreJours($date);
    $text = "";
    if ($duree['annees'] != 0) {
        echo $duree['annees'];
        if ($duree['annees'] == 1) {
            $text .= ' an ';
        } else {
            $text .= ' ans ';
        }
    }
    if ($duree['mois'] != 0) {
        $text .= $duree['mois'] . " mois ";
    }
    if ($duree['jours'] != 0) {
        $text .= $duree['jours'];
        if ($duree['jours'] == 1) {
            $text .= ' jour';
        } else {
            $text .= ' jours';
        }
    }
    return $text;
}

function nbreJours($d)
{
    $dateDuJour = new DateTime(date("Y-m-d H:i:s"));
    $dateEntree = new DateTime(date("Y-m-d H:i:s", strtotime($d)));
    $diff = $dateEntree->diff($dateDuJour);
    $dureesejour = $diff->format('%a');
    $ans = floor($dureesejour / 365);
    $mois = floor(($dureesejour % 365) / 30);
    $jours = floor(($dureesejour % 365) % 30);
    $dat['annees'] = $ans;
    $dat['mois'] = $mois;
    $dat['jours'] = $jours;
    return $dat;
}

function isEmptyTable($table)
{
    $sql = "SELECT * FROM $table";
    $db = new Database();
    $db->query($sql);
    return sizeof($db->resultSet()) > 0;
}
//
function existValueTable($nomTable, $col, $value)
{
    $db = new Database();
    $value = addcslashes($value, "'");

    $sql = "SELECT * FROM $nomTable WHERE  $col='{$value}'";
    $db->query($sql);
    return sizeof($db->resultSet()) > 0;
}
//REDIRECTION
function redirectToPage($controller, $method = "index", $params = "")
{
    if (empty($params))
        header("Location:" . URLROOT . "/" . $controller . '/' . $method);
    else
        header("Location:" . URLROOT . "/" . $controller . '/' . $method . "/" . $params);
}

//MENU DYNAMIQUE


//redirect If not Connect
function redirectToConnection(){
    !Role::isLogged() ?  header("Location:" . URLROOT) : '';
}

//Routes privées
function addPrivateRoute()
{
    if (isset($_POST['btnPrive'])) {
        //Mettre les liens dans un tableau
        $tabLiens = explode(",", $_SESSION["connectedUser"]->liens);

        //Recuperer la route actuelle
        $url = explode("/", $_GET['url']);
        $methode = (isset($url[1])) ? $url[1] : 'index';
        $url = ucfirst($url[0] . "/" . $methode);
        //Verifier si la route est deja dans les liens sinon l'ajouter
        if (!in_array($url, $tabLiens)) {
            if (empty($_SESSION["connectedUser"]->liens)) {
                $_SESSION["connectedUser"]->liens = $url;
            } else {
                $_SESSION["connectedUser"]->liens .= ',' . $url;
            }
        }
    }
}

function getRouteAccess()
{
    //Mettre les liens dans un tableau
    $tabLiens = explode(",", $_SESSION["connectedUser"]->liens);
    //Recuperer la route actuelle
    $url = explode("/", $_GET['url']);
    $methode = (isset($url[1])) ? $url[1] : 'index';
    $url = ucfirst($url[0] . "/" . $methode);
    //Verifier si la route est deja dans les liens sinon l'ajouter
    return in_array($url, $tabLiens);
}

function moisEnChaine($numero)
{
    switch ($numero) {
        case 1:
            return "Janvier";
        case 2:
            return "Février";
        case 3:
            return "Mars";
        case 4:
            return "Avril";
        case 5:
            return "Mais";
        case 6:
            return "Juin";
        case 7:
            return "Juillet";
        case 8:
            return "Août";
        case 9:
            return "Séptembre";
        case 10:
            return "Octobre";
        case 11:
            return "Novembre";
        case 12:
            return "Décembre";
    }
}

function inputHiddenForUrlRoot()
{
    echo '
        <input type="hidden" id="URLROOT" value="' . URLROOT . '">
    ';
}

