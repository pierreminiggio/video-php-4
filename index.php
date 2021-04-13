<?php

// Single Quoted

$salut = 'Bonjour, je m\'appelle Pierre';
echo $salut;


// Double quoted

// $prenom = 'Pierre';
// $salut = 'Bonjour, je m\'appelle ' . $prenom;
// echo $salut;


// Double quoted : Interpolation avec accolades :
// class Person {
//     public string $prenom;
// }
// $pierre = new Person();
// $pierre->prenom = 'Pierre';
// $salut = "Bonjour, je m'appelle {$pierre->prenom}";
// echo $salut;

// Heredoc
// $prenom = 'Pierre';
// $salut = <<<HTML
// <h1>Bonjour,</h1>
// <p>je m'appelle $prenom</p>
// HTML;
// echo $salut;

// Nowdoc
// $prenom = 'Pierre';
// $salut = <<<'HTML'
// <h1>Bonjour,</h1>
// <p>je m'appelle $prenom <- ne marche pas car comme single quoted</p>
// HTML;
// echo $salut;
