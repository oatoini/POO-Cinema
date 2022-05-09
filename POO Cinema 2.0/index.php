<html> 
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>POO Cinema</title>

</head>

<body>
<h1>POO Cinéma</h1>

<h2>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</h2>

Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre cinématographique (science-fiction, aventure, action, ...).
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).

Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où le mettre en place !

Attention !

• Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs)
On doit pouvoir :
• Lister la liste des acteurs ayant incarné tel rôle
• Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)
• Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)
• Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)
• Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)

</body>
</html>

<?php

/* Vous devez être en mesure de :

-créer des réalisateurs

-créer des genres

-créer des films



Puis ensuite

-afficher les infos d'un film

-afficher les infos d'un réalisateur + la liste de ses films (comme la liste des livres d'un auteur, pareil !)

-afficher les infos d'un genre + la liste des films de ce genre (comme au-dessus) */


spl_autoload_register(function ($class_name) {
require $class_name.'.php';
});


$a1 = new Acteur('Hamill', 'Mark', 'M', '1947-08-14');

$r1 = new Realisateur('Lucas', 'George', 'M', '1950-01-01');

$g1 = new Genre('Science-fiction');

$f1=new Film ("Star Wars la menace fantome", "1999", 136, $r1, " le quatrième opus de la saga Star Wars.", $g1);

$role1 = new Role('Luke Skywaker');

$c1 = new Casting( $f1, $a1,$role1);


$r1->afficherRealisation();

$a1->afficherFilmographie();

$g1->afficherFilm();

$role1->afficherRole();

$f1->afficherCasting();


?>






