# 🚌 Exercice PHP POO : Gestion de Véhicules d'une Agence de Transport (Avancé)

## 📘 Contexte
Une agence de transport souhaite mettre en place un système de gestion de son parc de véhicules.
Elle possède différents types de véhicules : voitures de tourisme, camions de livraison, et scooters électriques.

Chaque véhicule a :
- un modèle
- une année de mise en circulation
- un kilométrage
- un comportement spécifique lorsqu’il est utilisé

L'agence souhaite également :
- suivre le nombre total de véhicules
- afficher tous les véhicules
- filtrer par année, kilométrage, et type électrique

---

## 🎯 Objectifs pédagogiques

- Appliquer l’héritage, les classes abstraites, l'encapsulation implicite
- Utiliser des méthodes statiques
- Implémenter le polymorphisme
- Redéfinir une méthode pour spécialiser un comportement (ex: estElectrique)

---

## 🧩 Contraintes techniques

❌ Ne pas utiliser `public` ni de `getter/setter`  
✅ Utiliser les `protected` par défaut pour les attributs  
✅ Implémenter une méthode statique `getNombreVehicules()`  
✅ Redéfinir `utiliser()` dans chaque classe fille  
✅ Implémenter la méthode `estElectrique()` avec override dans `ScooterElectrique`

---

## 🧪 Données simulées

```php
$vehicules = [
    new VoitureTourisme("Peugeot 208", 2019, 48000),
    new CamionLivraison("Renault Trucks D", 2015, 85000),
    new ScooterElectrique("Yadea G5", 2022, 3000),
    new VoitureTourisme("Citroën C3", 2020, 56000),
    new CamionLivraison("Mercedes Atego", 2018, 62000),
    new ScooterElectrique("NIU NQi", 2021, 12000),
];
```

---

## ✅ Résultat attendu

- Affichage complet avec modèle, année, kilométrage, et utilisation
- Filtrage après une année donnée
- Filtrage des véhicules avec +50 000 km
- Affichage uniquement des véhicules électriques
- Affichage du nombre total de véhicules

---

## 📁 Structure du projet

```
agence/
├── classes/
│   ├── Vehicule.php
│   ├── VoitureTourisme.php
│   ├── CamionLivraison.php
│   └── ScooterElectrique.php
├── autoload.php
├── test.php
└── README.md ← ce fichier
```
