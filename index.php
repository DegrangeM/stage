<?php
session_start();

define('PLACES_SECONDE', 20);
define('PLACES_PREMIERE', 20);
define('PLACES_TERMINALE', 20);

$stages = Array(
	1 => Array(
		"nom" => "Spécialité - Mme. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 08:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE + 5,
		"color" => 'hsl(0,100%,60%)'
	),
	47 => Array(
		"nom" => "Suite - M. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 08:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	2 => Array(
		"nom" => "Fonctions - Mme. XXXXXXX",
		"date" => "Jeudi 7 juin 10h-12h",
		"start" => "2018/06/07 10:00",
		"end" => "2018/06/07 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	48 => Array(
		"nom" => "Géométrie - M. XXXXXXX",
		"date" => "Jeudi 7 juin 10h-12h",
		"start" => "2018/06/07 10:00",
		"end" => "2018/06/07 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	3 => Array(
		"nom" => "Sujet 2018 - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 8h-10h",
		"start" => "2018/06/08 08:00",
		"end" => "2018/06/08 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	49 => Array(
		"nom" => "Probabilité - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 10h-12h",
		"start" => "2018/06/08 10:00",
		"end" => "2018/06/08 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	4 => Array(
		"nom" => "Spécialité - Mme. XXXXXXX",
		"date" => "Lundi 11 juin 8h-10h",
		"start" => "2018/06/11 08:00",
		"end" => "2018/06/11 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE + 5,
		"color" => 'hsl(0,100%,60%)'
	),
	5 => Array(
		"nom" => "Fonctions - Mme. XXXXXXX",
		"date" => "Lundi 11 juin 10h-12h",
		"start" => "2018/06/11 10:00",
		"end" => "2018/06/11 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	6 => Array(
		"nom" => "Sujet Bac 2018 - Mme. XXXXXXX",
		"date" => "Lundi 11 juin 10h-12h",
		"start" => "2018/06/11 10:00",
		"end" => "2018/06/11 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	50 => Array(
		"nom" => "Géométrie - M. XXXXXXX",
		"date" => "Mardi 12 juin 8h-10h",
		"start" => "2018/06/12 08:00",
		"end" => "2018/06/12 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	7 => Array(
		"nom" => "Complexes - Mme. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	51 => Array(
		"nom" => "Suite - M. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	52 => Array(
		"nom" => "Suite - M. XXXXXXX",
		"date" => "Mercredi 13 juin 8h-10h",
		"start" => "2018/06/13 08:00",
		"end" => "2018/06/13 10:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	53 => Array(
		"nom" => "Probabilité - Mme. XXXXXXX",
		"date" => "Mercredi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	54 => Array(
		"nom" => "Géométrie - M. XXXXXXX",
		"date" => "Mercredi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("TS"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	8 => Array(
		"nom" => "Spé, Suites, Algo - M. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 8:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	9 => Array(
		"nom" => "Spé, Suites, Algo - M. XXXXXXX",
		"date" => "Jeudi 7 juin 10h-12h",
		"start" => "2018/06/07 10:00",
		"end" => "2018/06/07 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	10 => Array(
		"nom" => "Spé, Suites, Algo - M. XXXXXXX",
		"date" => "Vendredi 8 juin 8h-10h",
		"start" => "2018/06/08 8:00",
		"end" => "2018/06/08 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	11 => Array(
		"nom" => "Spé, Suites, Algo - M. XXXXXXX",
		"date" => "Vendredi 8 juin 10h-12h",
		"start" => "2018/06/08 10:00",
		"end" => "2018/06/08 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	55 => Array(
		"nom" => "Probabilité et lois - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 10h-12h",
		"start" => "2018/06/08 10:00",
		"end" => "2018/06/08 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	12 => Array(
		"nom" => "Sujet Bac 2018 - Mme. XXXXXXX",
		"date" => "Lundi 11 juin 8h-10h",
		"start" => "2018/06/11 8:00",
		"end" => "2018/06/11 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	56 => Array(
		"nom" => "Probabilité - M. XXXXXXX",
		"date" => "Lundi 11 juin 8h-10h",
		"start" => "2018/06/11 8:00",
		"end" => "2018/06/11 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	57 => Array(
		"nom" => "Probabilité - M. XXXXXXX",
		"date" => "Lundi 11 juin 10h-12h",
		"start" => "2018/06/11 10:00",
		"end" => "2018/06/11 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	13 => Array(
		"nom" => "Fonctions - M. XXXXXXX",
		"date" => "Mardi 12 juin 8h-10h",
		"start" => "2018/06/12 8:00",
		"end" => "2018/06/12 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE+2,
		"color" => 'hsl(0,100%,60%)'
	),
	58 => Array(
		"nom" => "Fonctions - M. XXXXXXX",
		"date" => "Mardi 12 juin 8h-10h",
		"start" => "2018/06/12 8:00",
		"end" => "2018/06/12 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	14 => Array(
		"nom" => "Fonctions - M. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	15 => Array(
		"nom" => "Spé, Suites, Algo - M. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	59 => Array(
		"nom" => "Fonctions - M. XXXXXXX",
		"date" => "Mercredi 13 juin 8h-10h",
		"start" => "2018/06/13 08:00",
		"end" => "2018/06/13 10:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	60 => Array(
		"nom" => "Probabilité - M. XXXXXXX",
		"date" => "Mercredi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("TES"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	16 => Array(
		"nom" => "Fonctions, Dérivation - Mme. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 08:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	17 => Array(
		"nom" => "Information chiffrée et Statistiques - M. XXXXXXX",
		"date" => "Jeudi 7 juin 10h-12h",
		"start" => "2018/06/07 10:00",
		"end" => "2018/06/07 12:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	18 => Array(
		"nom" => "Suite - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 08h-10h",
		"start" => "2018/06/08 08:00",
		"end" => "2018/06/08 10:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	19 => Array(
		"nom" => "Probabilité - M. XXXXXXX",
		"date" => "Vendredi 8 juin 10h-12h",
		"start" => "2018/06/08 10:00",
		"end" => "2018/06/08 12:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	20 => Array(
		"nom" => "Fonctions, Dérivation - M. XXXXXXX",
		"date" => "Mardi 12 juin 08h-10h",
		"start" => "2018/06/12 08:00",
		"end" => "2018/06/12 10:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	21 => Array(
		"nom" => "Probabilité - Mme. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	22 => Array(
		"nom" => "Suites - M. XXXXXXX",
		"date" => "Mercredi 13 juin 08h-10h",
		"start" => "2018/06/13 08:00",
		"end" => "2018/06/13 10:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	23 => Array(
		"nom" => "Information chiffrée et Statistiques - Mme. XXXXXXX",
		"date" => "Mercredi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("TSTMG"),
		"places" => PLACES_TERMINALE,
		"color" => 'hsl(0,100%,60%)'
	),
	24 => Array(
		"nom" => "Rappels de cours, méthodes - M. XXXXXXX",
		"date" => "Lundi 11 juin 9h-10h",
		"start" => "2018/06/11 9:00",
		"end" => "2018/06/11 10:00",
		"classe" => Array("TSTI2D"),
		"places" => 15,
		"color" => 'hsl(0,100%,60%)'
	),
	25 => Array(
		"nom" => "Sujets de BAC - M. XXXXXXX",
		"date" => "Lundi 11 juin 10h-12h",
		"start" => "2018/06/11 10:00",
		"end" => "2018/06/11 12:00",
		"classe" => Array("TSTI2D"),
		"places" => 15,
		"color" => 'hsl(0,100%,60%)'
	),
	61 => Array(
		"nom" => "Rappels de cours, méthodes - M. XXXXXXX",
		"date" => "Mercredi 13 juin 09h-10h",
		"start" => "2018/06/13 09:00",
		"end" => "2018/06/13 10:00",
		"classe" => Array("TSTI2D"),
		"places" => 15,
		"color" => 'hsl(0,100%,60%)'
	),
	26 => Array(
		"nom" => "Sujets de BAC - M. XXXXXXX",
		"date" => "Mercredi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("TSTI2D"),
		"places" => 15 + 1,
		"color" => 'hsl(0,100%,60%)'
	),
	27 => Array(
		"nom" => "Fonctions, Dérivation - Mme. XXXXXXX",
		"date" => "Jeudi 7 juin 10h-12h",
		"start" => "2018/06/07 10:00",
		"end" => "2018/06/07 12:00",
		"classe" => Array("1S"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	28 => Array(
		"nom" => "Géométrie vectorielle - M. XXXXXXX",
		"date" => "Vendredi 8 juin 08h-10h",
		"start" => "2018/06/08 08:00",
		"end" => "2018/06/08 10:00",
		"classe" => Array("1S"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	29 => Array(
		"nom" => "Suites - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 13h-15h",
		"start" => "2018/06/08 13:00",
		"end" => "2018/06/08 15:00",
		"classe" => Array("1S"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	30 => Array(
		"nom" => "Géométrie analytique, Équation de courbe - M. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("1S"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	31 => Array(
		"nom" => "Trigonométrie, Produit scalaire - Mme. XXXXXXX",
		"date" => "Mercredi 13 juin 08h-10h",
		"start" => "2018/06/13 08:00",
		"end" => "2018/06/13 10:00",
		"classe" => Array("1S"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	43 => Array(
		"nom" => "Second degré - M. XXXXXXX",
		"date" => "Vendredi 8 juin 13h-15h",
		"start" => "2018/06/08 13:00",
		"end" => "2018/06/08 15:00",
		"classe" => Array("1ES"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	44 => Array(
		"nom" => "Étude de fonctions - M. XXXXXXX",
		"date" => "Vendredi 8 juin 15h-17h",
		"start" => "2018/06/08 15:00",
		"end" => "2018/06/08 17:00",
		"classe" => Array("1ES"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	32 => Array(
		"nom" => "Fonctions, Dérivation - M. XXXXXXX",
		"date" => "Lundi 11 juin 13h-15h",
		"start" => "2018/06/11 13:00",
		"end" => "2018/06/11 15:00",
		"classe" => Array("1ES"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	33 => Array(
		"nom" => "Loi Binomiale - M. XXXXXXX",
		"date" => "Lundi 11 juin 15h-17h",
		"start" => "2018/06/11 15:00",
		"end" => "2018/06/11 17:00",
		"classe" => Array("1ES"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	34 => Array(
		"nom" => "Suites - M. XXXXXXX",
		"date" => "Mardi 12 juin 15h-17h",
		"start" => "2018/06/12 15:00",
		"end" => "2018/06/12 17:00",
		"classe" => Array("1ES"),
		"places" => PLACES_PREMIERE,
		"color" => 'hsl(0,100%,60%)'
	),
	35 => Array(
		"nom" => "Géométrie - M. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 08:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),/*
	36 => Array(
		"nom" => "Géométrie - M. XXXXXXX",
		"date" => "Jeudi 7 juin 8h-10h",
		"start" => "2018/06/07 08:00",
		"end" => "2018/06/07 10:00",
		"classe" => Array("2nd"),
		"places" => 15,
		"color" => 'hsl(0,100%,60%)'
	),*/
	37 => Array(
		"nom" => "Expressions algébriques - Mme. XXXXXXX",
		"date" => "Jeudi 7 juin 13h-15h",
		"start" => "2018/06/07 13:00",
		"end" => "2018/06/07 15:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	38 => Array(
		"nom" => "Vecteurs - M. XXXXXXX",
		"date" => "Jeudi 7 juin 15h-17h",
		"start" => "2018/06/07 15:00",
		"end" => "2018/06/07 17:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	39 => Array(
		"nom" => "Fonctions de référence, Équations - Mme. XXXXXXX",
		"date" => "Vendredi 8 juin 10h-12h",
		"start" => "2018/06/08 10:00",
		"end" => "2018/06/08 12:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	45 => Array(
		"nom" => "Étude graphique de fonctions - M. XXXXXXX",
		"date" => "Lundi 11 juin 13h-15h",
		"start" => "2018/06/11 13:00",
		"end" => "2018/06/11 15:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	46 => Array(
		"nom" => "Trigonométrie - M. XXXXXXX",
		"date" => "Lundi 11 juin 15h-17h",
		"start" => "2018/06/11 15:00",
		"end" => "2018/06/11 17:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	40 => Array(
		"nom" => "Fonctions polynômes, Inéquations - Mme. XXXXXXX",
		"date" => "Mardi 12 juin 08h-10h",
		"start" => "2018/06/12 08:00",
		"end" => "2018/06/12 10:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	41 => Array(
		"nom" => "Équations de droites - M. XXXXXXX",
		"date" => "Mardi 12 juin 10h-12h",
		"start" => "2018/06/12 10:00",
		"end" => "2018/06/12 12:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
	42 => Array(
		"nom" => "Second degré - M. XXXXXXX",
		"date" => "Mardi 13 juin 10h-12h",
		"start" => "2018/06/13 10:00",
		"end" => "2018/06/13 12:00",
		"classe" => Array("2nd"),
		"places" => PLACES_SECONDE,
		"color" => 'hsl(0,100%,60%)'
	),
);

/* 
uasort($stages, function($a, $b){
	if ($a['start'] == $b['start']) {
        return 0;
    }
    return ($a['start'] < $b['start']) ? -1 : 1;
});
// */
//file_put_contents('stages.txt',var_export($stages,true));

$couleur = array();
$couleur['20'] = 50;
$couleur['21'] = 50;
$couleur['2nd'] = 50;
$couleur['1S'] = 0;
$couleur['TS'] = 0;
$couleur['1ES'] = 90;
$couleur['TES'] = 90;
$couleur['1STMG'] = 180;
$couleur['TSTMG'] = 180;
$couleur['1STI2'] = 270;
$couleur['1STI2D'] = 270;
$couleur['TSTI2'] = 270;
$couleur['TSTI2D'] = 270;

try {
	$bdd = new PDO('mysql:host=XXXXX;dbname=XXXXX;charset=utf8', 'XXXX', 'XXXXXX');
	// $bdd->query('DELETE FROM inscriptions');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<meta name="robots" content="noindex">
        <title>Stages de révision</title>
		<link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
	<script src='fullcalendar/locale/fr.js'></script>
    </head>
    <body>
	<center>
<?php

if(isset($_GET['pass']) AND strtolower($_GET['pass'])=='XXXXXXX') {

if(isset($_GET['deconnexion']) OR (empty($_SESSION['id']) AND empty($_POST['eleve']))) {
	
	if(isset($_GET['deconnexion'])) {
		unset($_SESSION['id']);
		unset($_SESSION['nom']);
		unset($_SESSION['prenom']);
		unset($_SESSION['eleve']);
		unset($_SESSION['classe']);
		unset($_SESSION['filiere']);
	}
	
	// $req = $bdd->query('SELECT * FROM eleves WHERE classe LIKE "T%" ORDER BY classe, nom, prenom');
	$req = $bdd->query('SELECT * FROM eleves ORDER BY classe, nom, prenom');
	$classe = '';

	echo '<form method="POST" action="./?pass=XXXXXXX">';
	echo '<select name="eleve">';
	echo '<option value="0">Veuillez choisir votre nom.</option>';
	while($data = $req->fetch())
	{
		if($classe != $data['classe']) {
			if($classe != '') {
				echo '</optgroup>';
			}
			echo '<optgroup label="'.$data['classe'].'" style="background-color:hsl('.$couleur[substr($data['classe'], 0, -1)].',100%,90%);">';
			$classe = $data['classe'];
		}
		echo '<option value="'.$data['id'].'">'.$data['nom'].' '.$data['prenom'].'</option>';
	}
	echo '</optgroup>';
	echo '</select>';
	echo '<br /><br />';
	echo '<input type="submit" name="connexion" value="Valider">';
	echo '</form><br /><br /><b style="color:red;">Attention, pour des raisons de sécurité, toutes vos actions sont enregistrées<span onclick="$(\'select[name=eleve]\').append(\'<option value=\\\'prof\\\'>Prof</option>\').val(\'prof\');">.</span></b>';
} else {
	if(isset($_POST['connexion']) AND empty($_SESSION['id'])) {
		if($_POST['eleve'] == 'prof') {
		// faux compte élève pour les profs
			$_SESSION['id'] = -1;	
			$_SESSION['nom'] = 'Prof';	
			$_SESSION['prenom'] = 'Prof';	
			$_SESSION['eleve'] = 'Prof';	
			$_SESSION['classe'] = 'PROF';	
			$_SESSION['filiere'] = 'PROF';
			file_put_contents('.logs', date('d/m H:i').' - '.$_SESSION['eleve'].' ('.$_SERVER['REMOTE_ADDR'].') - Connexion'."\n", FILE_APPEND);
		} else {
			$req = $bdd->query('SELECT * FROM eleves WHERE id='.intval($_POST['eleve']));
			if($data = $req->fetch()) {
				$_SESSION['id'] = $data['id'];	
				$_SESSION['nom'] = $data['nom'];	
				$_SESSION['prenom'] = $data['prenom'];	
				$_SESSION['eleve'] = $data['nom'] . ' ' . $data['prenom']. ' ('.$data['classe'].')';	
				$_SESSION['classe'] = $data['classe'];	
				$_SESSION['filiere'] = substr($data['classe'], 0, -1);
				if($_SESSION['filiere'] == "20" OR $_SESSION['filiere'] == "21") {
					$_SESSION['filiere'] = "2nd";
				}
				if($_SESSION['filiere'] == "TSTI2" OR $_SESSION['filiere'] == "1STI2") {
					$_SESSION['filiere'] .= "D";
				}
				file_put_contents('.logs', date('d/m H:i').' - '.$_SESSION['eleve'].' ('.$_SERVER['REMOTE_ADDR'].') - Connexion'."\n", FILE_APPEND);
			} else {
				die();
			}
		}
	}
	if(isset($_POST['inscription'])) {
		$_POST['stage'] = intval($_POST['stage']);
		if(isset($stages[$_POST['stage']])) {
			$s = $stages[$_POST['stage']];
			if(in_array($_SESSION['filiere'], $s['classe'])) { // les inscriptions avec le compte prof sont bloqués par cette condition
				$s['inscrits'] = $bdd->query('SELECT count(*) as nb FROM inscriptions WHERE stage='.$_POST['stage'])->fetch()['nb'];
				if($s['inscrits'] < $s['places']) {
					if(strtotime($s['start']) > time()) {
						if($bdd->query('SELECT count(*) as nb FROM inscriptions WHERE stage='.$_POST['stage'].' AND eleve='.$_SESSION['id'])->fetch()['nb']==0) {
							$req = $bdd->query('INSERT INTO inscriptions (stage, eleve) VALUES('.$_POST['stage'].', '.$_SESSION['id'].')');
							echo '<center><b style="color:green;">Inscription à l\'atelier réussie.</b></center><br /><br />';
							file_put_contents('.logs', date('d/m H:i').' - '.$_SESSION['eleve'].' ('.$_SERVER['REMOTE_ADDR'].') - Inscription atelier n°'.$_POST['stage'].' ('.$s['date'].' '.$s['nom'].' '.implode(",", $s['classe']).')'."\n", FILE_APPEND);
						} else {
							echo '<b style="color:blue;">Vous êtes déjà inscrit à cet atelier.</b><br /><br />';
						}
					} else {
						echo '<b style="color:red;">Il n\'est plus possible de s\'inscire une fois le stage débuté.</b><br /><br />';
					}
				} else {
					echo '<b style="color:red;">Il n\'y a plus de place dans l\'atelier demandé.</b><br /><br />';
				}
			} else {
				echo '<b style="color:red;">Erreur filière</b><br /><br />';
			}
		} else {
			echo '<b style="color:red;">Stage inconnu.</b><br /><br />';
		}
	}
	
	if(isset($_POST['deinscription'])) {
		$_POST['stage'] = intval($_POST['stage']);
		if(isset($stages[$_POST['stage']])) {
			$s = $stages[$_POST['stage']];
			if(strtotime($s['start']) > time()) {
				if($bdd->query('DELETE FROM inscriptions WHERE stage='.$_POST['stage'].' AND eleve='.$_SESSION['id'])->rowCount()) {
					echo '<b style="color:orange;">Désinscription réussie.</b><br /><br />';
					file_put_contents('.logs', date('d/m H:i').' - '.$_SESSION['eleve'].' ('.$_SERVER['REMOTE_ADDR'].') - Désinscription atelier n°'.$_POST['stage']."\n", FILE_APPEND);
				} else {
					echo '<b style="color:red;">Erreur, vous n\'êtes pas inscrit au stage auquel vous avez essayé de vous déinscrire.</b><br /><br />';
				}
			} else {
				echo '<b style="color:red;">Il n\'est plus possible de se désinscire une fois le stage débuté.</b><br /><br />';
			}
		} else {
						echo '<b style="color:red;">Stage inconnu.</b><br /><br />';
		}
	}

	echo 'Bonjour '.$_SESSION['eleve'].'. <a href="?pass=XXXXXXX&deconnexion=1">Deconnexion</a><br /><br />';
	
	?>
		<script>
	$(function() {
		myEvents = <?php
				$events = Array();
				$req = $bdd->query('SELECT * FROM inscriptions WHERE inscriptions.eleve = '.$_SESSION['id']);
				while($data = $req->fetch())
				{
					$s = $stages[$data['stage']];
					$e = Array();
					$e['title'] = $s['nom'];
					$e['start'] = $s['start'];
					$e['end'] = $s['end'];
					$e['color'] = $s['color'];
					$stages[$data['stage']]['my']=true;
					$events[] = $e;
				}
				echo json_encode($events);
			?>;
			
	classEvents = <?php
				$events = Array();
				foreach($stages as $s) {
					if(in_array($_SESSION['filiere'], $s['classe']) || $_SESSION['filiere'] == 'PROF') {
						$e = Array();
						$e['title'] = $s['nom'];
						$e['start'] = $s['start'];
						$e['end'] = $s['end'];
						$e['color'] = empty($s['my'])?'gray':$s['color'];
						$events[] = $e;
					}
				}
				echo json_encode($events);
			?>;
			
			showAll = false;
		$('#calendar').fullCalendar({
			defaultView: 'agendaWeek',
			allDaySlot: false,
			minTime: '08:00:00',
			maxTime: '18:00:00',
			slotDuration: '01:00:00',
			slotLabelInterval: '02:00:00',
			nowIndicator: true,
			height:300,
			businessHours: {
				start: '08:00:00',
				end: '17:00:00'
			},
			validRange: {
				start: '2018-06-07',
				end: '2018-06-14'
			},
			contentHeight: 'auto',
			firstDay: 4,
			header: {
				left:'title',
				center:'showAll',
				right: 'agendaWeek, listWeek'
			},
			events: myEvents,
			columnHeaderFormat: 'dddd D MMMM',
			slotLabelFormat: 'HH[h]mm',
			listDayFormat: 'dddd D MMMM',
			listDayAltFormat: false,
			customButtons: {
				showAll: {
				  text: 'Afficher tout',
				  click: function() {
					showAll = !showAll;
					$('#calendar').fullCalendar('removeEvents');
					$('#calendar').fullCalendar('addEventSource', showAll ? classEvents : myEvents);
					if (showAll) {
						$(this).addClass('fc-state-active').blur();
					} else {
						$(this).removeClass('fc-state-active').blur();
					}
				  }
				}
			  },
			slotEventOverlap: false
		});

	});
	
	function imprimer(s) {
		if(s.options[s.selectedIndex].value == 'imprimer') {
			var table = '';
			for(var i = 1 ; i<s.options.length - 1 ; i++) { // enlève le premier (nombre d'inscrit) et dernier (imprimer) élément
				table += '<tr><td>' + s.options[i].value + '</td><td></td></tr>';
			}
			window.open().document.write('<html><head><title>' + s.previousElementSibling.previousElementSibling.innerHTML + ' ' + s.previousElementSibling.innerHTML + '</title></head><body><table><thead><tr><th>Nom et prénom</th><th>Signature</th></tr></thead><tbody>' + table + '</tbody></table><style>table{border-collapse:collapse;}td{height:50px;min-width:100px;border:1px solid black;}</style><style type="text/css" media="print"> @page { size: portrait; }</style><scr'+'ipt>document.close();window.print();</scr'+'ipt></body></html>');
		}
	}
	</script>
		<div id='calendar'></div><br /><br />
	<?php
	
	foreach($stages as $i => $s) {
		if(in_array($_SESSION['filiere'], $s['classe']) || $_SESSION['classe'] == 'PROF') {
			$s['inscrits'] = $stages[$i]['inscrits'] = $bdd->query('SELECT count(*) as nb FROM inscriptions WHERE stage='.$i)->fetch()['nb'];
			$req = $bdd->query('SELECT * FROM inscriptions INNER JOIN eleves ON eleves.id = inscriptions.eleve WHERE stage='.$i.' ORDER BY eleves.nom, eleves.prenom');
			if($_SESSION['classe'] == 'PROF') {
				foreach($s['classe'] as $c) {
					echo '<span style="color:hsl('.$couleur[$c].',100%,40%);">'.$c.'</span> ';
				}
			}
			echo '<i>'.$s['date'].'</i> <b>'.$s['nom'].'</b> <select style="width:75px;"';
			if($_SESSION['classe'] == 'PROF') {
			echo ' onchange="imprimer(this);"';
			}
			echo'><option>'.$s['inscrits'].'/'.$s['places'].'</option><optgroup label="Élèves inscrits" disabled="disabled">';
			$inscrit = false;
			while($data = $req->fetch()) {
				// echo '<option style="color:hsl('.$couleur[substr($data['classe'], 0, -1)].',100%,90%);">'.$data['nom'].' '.$data['prenom'].'</option>';
				echo '<option>'.$data['nom'].' '.$data['prenom'].'</option>';
				if($data['id'] == $_SESSION['id']) {
					$inscrit = true;
				}
			}
			echo '</optgroup>';
			if($_SESSION['classe'] == 'PROF') {
				echo '<option value="imprimer">Imprimer</option>';
			}
			echo '</select> <form method="POST" action="./?pass=XXXXXXX" style="display:inline;"><input type="hidden" name="stage" value="'.$i.'"/>';
			if($inscrit) {
				echo '<input type="submit" name="deinscription" '.(strtotime($s['start']) > time() ? '':'disabled="disabled"').' value="Me désinscrire" />';
			} else {
				echo '<input type="submit" name="inscription" '.(($s['inscrits']<$s['places'] && strtotime($s['start'])>time() )?'':'disabled="disabled"').' value="M\'inscrire" />';
			}
			echo '</form><br /><br />';
		}
	}
	// echo '<b>Lundi 5 juin 8h-10h Probabilité</b> <select style="width:75px;"><option>2/25</option><optgroup label="Élèves inscrits" disabled="disabled"><option>DUPONT Jean</option><option>MACHIN Pierre</option></optgroup></select> <input type="button" value="M\'inscrire" /><br /><br />';
	// echo '<b>Lundi 5 juin 8h-10h Probabilité</b> <select style="width:75px;"><option>2/25</option><optgroup label="Élèves inscrits" disabled="disabled"><option>DUPONT Jean</option><option>MACHIN Pierre</option></optgroup></select> <input type="button" value="M\'inscrire" /><br /><br />';
	
	/*echo '<h1>8h-10h : Probabilités (2/25)</h1>';
	echo 'DUPONT Jean<br />';
	echo 'MACHIN Paul<br />';
	echo '<input type="button" value="M\'inscrire" />';
	*/
}
} else {
	if(!empty($_GET['pass'])) {
		echo '<b style="color:red;">Mot de passe erroné.</b><br /><br />';
	}
	?>
	Connexion hors ENT détectée.<br />Pour des raisons de sécurité, un mot de passe est necessaire.<br />Celui-ci a du vous être communiqué par votre professeur.<br /><br />
	<form method="GET">
		<input type="text" name="pass"><br /><br />
		<input type="submit" value="Valider" />
	</form>
	<?php
}
?>
</center>
</body>
</html>