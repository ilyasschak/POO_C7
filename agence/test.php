<?php

require_once 'autoload.php';

// Données simulées
$vehicules = [
    new VoitureTourisme("Peugeot 208", 2019, 48000),
    new CamionLivraison("Renault Trucks D", 2015, 85000),
    new ScooterElectrique("Yadea G5", 2022, 3000),
    new VoitureTourisme("Citroën C3", 2020, 56000),
    new CamionLivraison("Mercedes Atego", 2018, 62000),
    new ScooterElectrique("NIU NQi", 2021, 12000),
];

// 1. Affichage de tous les véhicules
foreach ($vehicules as $vehicule) {
    echo "🚗 {$vehicule->modele} ({$vehicule->annee}) - {$vehicule->kilometrage} km : " . $vehicule->utiliser() . PHP_EOL;
}

echo PHP_EOL;

// 2. Affichage des véhicules après une certaine année
$anneeMin = 2018;
echo "🚘 Véhicules mis en circulation après {$anneeMin} :" . PHP_EOL;
foreach ($vehicules as $vehicule) {
    if ($vehicule->annee > $anneeMin) {
        echo "🚘 {$vehicule->modele} ({$vehicule->annee}) : " . $vehicule->utiliser() . PHP_EOL;
    }
}
echo PHP_EOL;

// 3. Affichage du nombre total de véhicules
echo "Total de véhicules enregistrés : " . Vehicule::getNombreVehicules() . PHP_EOL;
echo PHP_EOL;

// 4. Affichage des véhicules avec plus de 50 000 km
echo "🚦 Véhicules avec plus de 50 000 km :" . PHP_EOL;
foreach ($vehicules as $vehicule) {
    if ($vehicule->kilometrage > 50000) {
        echo "🔧 {$vehicule->modele} ({$vehicule->annee}) - {$vehicule->kilometrage} km : " . $vehicule->utiliser() . PHP_EOL;
    }
}
echo PHP_EOL;

// 5. Affichage des véhicules électriques
echo "⚡ Véhicules électriques :" . PHP_EOL;
foreach ($vehicules as $vehicule) {
    if ($vehicule->estElectrique()) {
        echo "🛵 {$vehicule->modele} ({$vehicule->annee}) : " . $vehicule->utiliser() . PHP_EOL;
    }
}
