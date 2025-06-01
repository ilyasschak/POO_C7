<?php

// Classe abstraite Vehicule
abstract class Vehicule
{
    protected $modele;
    protected $annee;
    protected $kilometrage;
    protected static $compteur = 0;

    // TODO: Ajouter le constructeur pour initialiser $modele, $annee, $kilometrage
    // TODO: Incrémenter le compteur à chaque création

    // TODO: Méthode abstraite utiliser()

    // Méthode par défaut pour vérifier si le véhicule est électrique
    public function estElectrique()
    {
        return false;
    }

    // TODO: Méthode statique pour retourner le nombre total de véhicules
}
