# Wiki Films – Plateforme Collaborative Cinéma

> Une application web personnelle construite avec Laravel en architecture MVC, permettant la consultation et l’enrichissement collaboratif de fiches d’acteurs et de films.

<p align="center">
  <!-- Langages et Librairies Web -->
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-00758F?style=flat-square&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/Blade-24292E?style=flat-square&logo=laravel&logoColor=white" alt="Blade"/>
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
  <img src="https://img.shields.io/badge/Architecture-MVC-critical?style=flat-square" alt="MVC"/>
  <!-- Statut du projet -->
  <img src="https://img.shields.io/badge/Status-Terminé-brightgreen?style=flat-square" alt="Statut"/>
  <!-- Licence -->
  <img src="https://img.shields.io/badge/License-MIT-blue?style=flat-square" alt="License"/>
</p>

<h3 align="center">• • •</h3>

## À propos du projet

**Wiki Films** est une plateforme web développée dans une démarche personnelle et professionnelle. Elle permet de rechercher, consulter et enrichir des fiches d’acteurs et de films via une interface intuitive. Le projet repose sur le framework **Laravel** avec une structure **MVC propre**, un système d’authentification sécurisé, et une base de données relationnelle.

Ce projet démontre ma capacité à concevoir et déployer une application complète en autonomie, en respectant les bonnes pratiques du développement web moderne.

<h3 align="center">• • •</h3>

## Objectifs techniques

- Développer une application complète en Laravel
- Implémenter un système de rôles (Visiteur, Utilisateur, Admin)
- Sécuriser les formulaires et l’authentification
- Gérer dynamiquement une base de données MySQL
- Construire un front-end responsive avec Blade et Bootstrap

<h3 align="center">• • •</h3>

## Fonctionnalités

### Visiteur (non connecté)
- Recherche d’acteurs ou de films
- Consultation des fiches acteurs
- Visualisation des films associés

### Utilisateur (connecté)
- Ajout de nouveaux acteurs avec biographie
- Ajout de films liés à un acteur existant

### Administrateur
- Validation ou refus des contenus proposés
- Gestion complète des utilisateurs
- Accès à un tableau de bord dédié

<h3 align="center">• • •</h3>

## Stack technique

| Élément       | Technologies utilisées               |
|---------------|--------------------------------------|
| Backend       | Laravel 10, PHP                      |
| Frontend      | Blade, Bootstrap                     |
| Base de données | MySQL                              |
| Authentification | Laravel Auth, rôles personnalisés  |

<h3 align="center">• • •</h3>

## 📂 Arborescence du projet

<h3 align="center">• • •</h3>
📁 app/
📁 resources/views/
📁 routes/web.php
📁 database/migrations/
📁 public/
.env
composer.json
```

<h3 align="center">• • •</h3>

## Installation locale

```bash
# 1. Cloner le dépôt
git clone https://github.com/majoiefaya/larravel_streaming_website.git
cd larravel_streaming_website

# 2. Installer les dépendances
composer install
npm install && npm run dev

# 3. Configurer l’environnement
cp .env.example .env
php artisan key:generate

# 4. Créer et remplir la base de données
php artisan migrate --seed

# 5. Lancer le serveur
php artisan serve
```

<h3 align="center">• • •</h3>

## Rôles et permissions

| Rôle         | Droits                               |
|--------------|---------------------------------------|
| Visiteur     | Consultation uniquement               |
| Utilisateur  | Ajout de contenu                      |
| Administrateur | Gestion de l’ensemble de la plateforme |

<h3 align="center">• • •</h3>

## Captures d’écran


<p align="center">
  <table>
    <tr>
      <td align="center">Page d’accueil<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/wiki_film_home.png" width="300" alt="wiki_film_home"/>
      </td>
      <td align="center">Fiche acteur<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/wiki_film_actor.png" width="300" alt="wiki_film_actor"/>
      </td>
      <td align="center">Fiche acteurs<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/wiki_film_actors.png" width="300" alt="wiki_film_actors"/>
      </td>
       <td align="center">Liste films<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/wiki_film_films.png" width="300" alt="wiki_film_films"/>
      </td>
    </tr>
    <tr>
      <td align="center">Détail film<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/film_details.png" width="300" alt="wiki_film_films"/>
      </td>
      <td align="center">Connexion<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/wiki_film_log_in.png" width="300" alt="wiki_film_log_in"/>
      </td>
      <td align="center">Inscription<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/inscription_page.png" width="300" alt="inscription_page"/>
      </td>
      <td align="center">Filmographie<br/>
        <img src="https://github.com/majoiefaya/Iarravel_streaming_website/blob/main/assets/images/filmographie.png" width="300" alt="filmographie"/>
      </td>
    </tr>
  </table>
</p>
<h3 align="center">• • •</h3>

## Compétences développées

- Développement fullstack avec Laravel
- Création de systèmes d’authentification avancés
- Structuration d’un projet MVC propre
- Gestion de version (Git) et déploiement local
- Intégration front-end responsive avec Blade

<h3 align="center">• • •</h3>

## Licence

Ce projet est open-source, publié sous licence **MIT**.

<h3 align="center">• • •</h3>

## ☕ Me soutenir

<p align="center">
  <a href="https://buymeacoffee.com/majoiefaya" target="_blank" rel="noopener noreferrer">
    <img src="https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=flat-square&logo=buymeacoffee&logoColor=black" alt="Buy Me a Coffee"/>
  </a>
</p>
