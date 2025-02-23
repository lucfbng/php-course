<?php
$age = 18;
$habitant = false;

if (!$age >= 18 || !$habitant) { // Si l'âge n'est pas supérieur ou égal à 18 ou que l'individu n'est pas habitant
    echo "Vous ne pouvez pas voter.";
} else {
    echo "Vous pouvez voter.";
}

$heuresParSemaine = 40;
$tauxHoraire = 12;
$salaireHebdo = null;

if ($heuresParSemaine > 40) {
    $salaireHebdo = 0;
} elseif ($heuresParSemaine <= 40) {
    $salaireHebdo = $heuresParSemaine * $tauxHoraire;
} else {
    $salaireHebdo = ($tauxHoraire * 40) + (($heuresParSemaine - 40) * ($tauxHoraire * 1.5)); // Calcul du salaire pour les heures supplémentaires
}
echo "Votre salaire hebdomadaire est de " . $salaireHebdo . "€.";
