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

1. **Affichage de tous les véhicules :**

```
🚗 Peugeot 208 (2019) - 48000 km : s'utilise pour des trajets confortables en ville  
🚚 Renault Trucks D (2015) - 85000 km : s'utilise pour transporter des marchandises lourdes  
🛵 Yadea G5 (2022) - 3000 km : s'utilise pour des déplacements courts en centre-ville  
🚗 Citroën C3 (2020) - 56000 km : s'utilise pour des trajets confortables en ville  
🚚 Mercedes Atego (2018) - 62000 km : s'utilise pour transporter des marchandises lourdes  
🛵 NIU NQi (2021) - 12000 km : s'utilise pour des déplacements courts en centre-ville  
```

2. **Véhicules mis en circulation après 2018 :**

```
🚘 Peugeot 208 (2019) : s'utilise pour des trajets confortables en ville  
🚘 Yadea G5 (2022) : s'utilise pour des déplacements courts en centre-ville  
🚘 Citroën C3 (2020) : s'utilise pour des trajets confortables en ville  
🚘 NIU NQi (2021) : s'utilise pour des déplacements courts en centre-ville  
```

3. **Nombre total de véhicules enregistrés :**

```
Total de véhicules enregistrés : 6
```

4. **Véhicules avec plus de 50 000 km :**

```
🔧 Renault Trucks D (2015) - 85000 km : s'utilise pour transporter des marchandises lourdes  
🔧 Citroën C3 (2020) - 56000 km : s'utilise pour des trajets confortables en ville  
🔧 Mercedes Atego (2018) - 62000 km : s'utilise pour transporter des marchandises lourdes  
```

5. **Véhicules électriques :**

```
⚡ Yadea G5 (2022) : s'utilise pour des déplacements courts en centre-ville  
⚡ NIU NQi (2021) : s'utilise pour des déplacements courts en centre-ville  
```

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
