<html>

<head>
    <meta charset="utf-8"/>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

    <div class="container">

<?php

// Inclusion de l'autoload : il se charge de tous les includes
require_once __DIR__.'/vendor/autoload.php';

// USE des classes dont j'ai besoin pour instancier (USE avec nom du namespace + nom de la Class où il se trouve)
use Application\User;
use Application\Editeur;
use Application\Moderateur;
use Application\Auteur;
use Application\Commercial;

use Application\VRP;
use Libraries\User as UserLib; // on utilise un alias car la Class User est déjà utilisée dans le namespace Application


use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session(); // créer un objet Session
$session->start(); // je démarre une session

// je récupère mon compteur en session,
// s'il n'existe pas, il prendra la valeur de 0
$compteur = $session->get('compteur', 0);

$compteur++; // j'incrémente mon compteur

// j'enregistre en session mon nouveau compteur
$session->set('compteur', $compteur);

$compteur = $session->get('compteur');
echo "Mon compteur est de : " . $compteur; // j'affiche mon compteur



$userlib = new UserLib("elo", "pass");



// Use Finder in Symfony Namespace
use Symfony\Component\Finder\Finder;

// Je crée un objet de ma classe Finder
$finder = new Finder();

// Je vais récupérer les fichiers (méthode files()) dans mon dossier img (méthode in())
$finder->files()->in('img/');

// Je parcours tous mes fichiers du dossier img/
foreach ($finder as $file) {
    // J'affiche chaque image de mon dossier
    echo "<img class='thumbnail img-responsive col-md-6' style='width:12%' src='img/".$file->getRelativePathname()."' />";
}



// Je charge la classe Parser située dans le dossier Yaml
use Symfony\Component\Yaml\Parser;

// Création de mon objet Parser
$yaml = new Parser();

// Parser le fichier app.yml dans config
$value = $yaml->parse(file_get_contents('config/app.yml'));

// Exploser ma variable $value
var_dump($value);



// Use Monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a log channel
$log = new Logger('3WA utilise le composant Monolog'); // Créer un message de log

// Envoi le message préparé dans mon fichier de log dev.log
$log->pushHandler(new StreamHandler('config/dev.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');



// Je crée un objet datetime instancié à la date d'aujourd'hui
// on utilise un antislash pour faire référence à une fonction qui est propre à php (classe définit par php) et ne pas faire une confusion avec nos propres classes
$date = new \Datetime('now');
// J'affiche la date au format d/m/Y
echo $date->format('d/m/Y');

echo "<br/>";

$date->modify('+1 day');
echo $date->format('d/m/Y H:i:s');

echo "<br/>";

$date->modify('+3 month');
echo $date->format('d/m/Y');

echo "<br/>";

$date->modify('+1 year');
echo $date->format('d/m/Y');

echo "<br/>";

$date->modify('+1 year -3 month');
echo $date->format('d/m/Y');

echo "<br/>";


$datefrom= \DateTime::createFromFormat('d/m/Y', '06/01/2014');
echo "Date ".$datefrom->format('Y-m-d');



// Création de 3 Objets User
$user1 = new User('Perrotton','Elodie',"elodie.perrotton@gmail.com", 26);
$user2 = new User('Chada','Saïd',"said.chada@gmail.com", 26);
$user3 = new User('Corroy','Alexandre',"alex.corroy@gmail.com", 28);

echo "<br/>";
// J'utilise ma fonction "magique" __toString() -> elle est définit dans l'entité User
echo $user1;



/**
 * Méthodes de mon objet
 */
// Appel à la méthode commenter()
$user1->commenter('François Hollande est un bon président!');

echo "<br/>";

$user2->commenter('Nico aussi, mais François est aussi grand que sa réputation');

echo "<br/>";

// J'envoie l'objet $user2 issu de ma class User
$user1->repondre($user2);

echo "<br/>";

/**
 * Attributs de mon objet
 */
echo "Email de l'utilisateur 1 : ".$user1->getEmail();
echo "<br/>";
echo "Age de l'utilisateur 2 : ".$user2->getAge()." ans";

echo "<br/>";

// J'accède à ma constante PAYS
echo beautiful($user1::PAYS);

echo "<br/>";

// J'accède à ma constante LANGUES
echo bold($user1::LANGUES);

echo "<br/>";
echo "<hr/>";

// Utilisation d'un helpers beautiful() et d'une méthode statique de classe
echo beautiful(User::getPays());
echo "<hr/>";
// Utilisation d'un helpers beautiful() et d'une méthode statique de classe
echo beautiful(User::getFormation());
echo "<hr/>";
// Utilisation d'un helpers beautiful() et d'une méthode statique de classe
echo beautiful(User::getlangues());
echo "<hr/>";

// Appel de la méthode interagir
echo beautiful($user1->interagir($user2, " C'est cool la POO ", 16));

/**
 * SETTER
 */
$user1->setAge(26);
echo "Elodie a vraiment ".$user1->getAge(). " ans";

echo "<br/>";

$user2->setEmail('said@free.fr');
echo "L'email correct de Said est : ".$user2->getEmail();

echo "<br/>";

// cloner l'objet dans un nouvel espace mémoire
//$user1 = clone $user2;
$user1->setAge(10);

echo $user1->getAge();
echo $user2->getAge();

$moderateur1 = new Moderateur('Dos Santos', 'Leonel', 'leonnel@gmail.com', 32, 4, 'Voici ma life');
$moderateur2 = new Moderateur('Julien', 'Boyer', 4);

echo "<br/>";
echo bold($moderateur1->getNom());
echo "<br/>";
echo italic($moderateur1->getPrenom());
echo "<br/>";
echo italic($moderateur1->getDescription());
echo "<br/>";
echo beautiful($moderateur2->noter(17));
echo "<br/>";
echo beautiful($moderateur2->partagerReseauxSociaux());


// J'utilise ma fonction "magique" __toString()
echo $moderateur1;



// Création de 3 Objets Éditeurs
$editeur1 = new Editeur('Perrotton', 'Elodie', 'elodie.perrotton@gmail.com', 'Bayard');
$editeur2 = new Editeur('Boyer', 'Julien', 'julien.boyer@gmail.com', 'Flammarion');
$editeur3 = new Editeur('Vincent', 'Philippe', 'vincent.philippe@gmail.com', 'Hachette');

echo $editeur1->getNom();
echo "<br/>";
echo $editeur1->getEmail();
echo "<br/>";
echo $editeur1->getAge();
echo "<br/>";
echo $editeur1->getPresse();
echo "<br/>";
echo "<br/>";

echo $editeur2->getNom();
echo "<br/>";
echo $editeur2->getEmail();
echo "<br/>";
echo $editeur2->getAge();
echo "<br/>";
echo $editeur2->getPresse();
echo "<br/>";
echo "<br/>";

echo $editeur3->getNom();
echo "<br/>";
echo $editeur3->getEmail();
echo "<br/>";
echo $editeur3->getAge();
echo "<br/>";
echo $editeur3->getPresse();
echo "<br/>";
echo "<br/>";


// Modifictaion de l'âge
$editeur1->setAge(30);
echo "Bayard a vraiment ".$editeur1->getAge(). " ans";
echo "<br/>";
echo "<br/>";



// Création de 3 Objets Commercial
$commercial1 = new Commercial('Vincent', 'Philippe', 47,'philippe.vincent@gmail.com', 'PHVLand', 10);
$commercial2 = new Commercial('Constant', 'Jean-Claude', 52, 'jc.constant@gmail.com', 'Flammarion', 5);

echo $commercial1->getNom();
echo "<br/>";
echo $commercial1->getPrenom();
echo "<br/>";
echo $commercial1->getAge();
echo "<br/>";
echo $commercial1->getEmail();
echo "<br/>";
echo $commercial1->getMagasin();
echo "<br/>";
echo $commercial1->getExperience();
echo "<br/>";


// J'utilise ma fonction "magique" __toString()
echo $commercial1;

echo "<hr>";

echo $commercial1->commenter();
echo "<br/>";
echo $commercial1->repondre($editeur1);
echo "<br/>";
echo $commercial1->noter(8);
echo "<br/>";
echo $editeur1->noter(5);
echo "<br/>";
echo "<br/>";

echo $moderateur1->blamer($user1);
echo "<br/>";
echo $moderateur1->blamer($user2);
echo "<br/>";
echo $moderateur1->blamer($user3);

echo "<hr>";

$auteur1 = new Auteur();
$auteur1->setNom("Boyer");
$auteur1->setPrenom("Julien");
$auteur1->setEmail("julien@meetserious.com");

echo $auteur1->getNom();
echo "<br/>";
echo $auteur1->getPrenom();
echo "<br/>";
echo $auteur1->getEmail();
echo "<hr>";

echo $auteur1->connexion();
echo "<br/>";
echo $auteur1->deconnexion();

echo "<br/>";
echo "<hr>";

$vrp = new VRP('Leclerc', 100);
echo beautiful("Le VRP travaillant dans le commerce : ".$vrp->getCommerce());

?>

    </div>

</body>

</html>







