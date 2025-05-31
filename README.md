
# 🎬 Wiki Films – Plateforme Collaborative Cinéma

> Une application Laravel en architecture MVC permettant la consultation et l’enrichissement collaboratif de fiches d’acteurs et de films.

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

## 📌 Présentation du projet

**Wiki Films** est une application web permettant aux utilisateurs de consulter des informations détaillées sur des acteurs et leurs films, et de participer à l’enrichissement de la base de données. Elle a été développée avec **Laravel** en suivant une stricte **architecture MVC**.

Ce projet a été conçu pour répondre à des objectifs pédagogiques tout en respectant des standards professionnels de développement web.

---

## 🧠 Objectifs pédagogiques

- Implémentation de l’architecture MVC avec Laravel
- Création d’un système de rôles et permissions (Visiteur, Utilisateur, Admin)
- Gestion sécurisée des formulaires et authentification Laravel
- Construction d’une base de données relationnelle en MySQL
- Interface responsive avec Blade et Bootstrap

---

## 🔧 Fonctionnalités principales

### 🎥 Visiteur (non connecté)
- 🔍 Rechercher des acteurs ou des films
- 👁️ Consulter la fiche d’un acteur
- 🎬 Consulter les détails d’un film

### ✍️ Utilisateur enregistré (connecté)
- ➕ Ajouter de nouveaux acteurs avec biographie et filmographie
- ➕ Ajouter un film à un acteur existant

### 🛠 Administrateur
- ✅ Valider ou refuser les contenus ajoutés
- 🗂 Gérer les utilisateurs (ajouter, modifier, supprimer)
- 📊 Accéder à un tableau de bord de gestion

---

## 🧱 Architecture technique

| Composant | Stack |
|----------|-------|
| Backend | Laravel 10, PHP |
| Frontend | Blade, Bootstrap |
| Base de données | MySQL |
| Sécurité | Authentification Laravel, rôles/permissions |

---

## 📂 Structure du projet

```
📁 app/
📁 resources/views/
📁 routes/web.php
📁 database/migrations/
📁 public/
.env
composer.json
```

---

## 🚀 Lancer le projet en local

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/majoiefaya/Iarravel_streaming_website.git
   cd Iarravel_streaming_website
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurer la base de données**
   ```bash
   php artisan migrate --seed
   ```

5. **Démarrer le serveur**
   ```bash
   php artisan serve
   ```

---

## 👥 Accès aux rôles

| Rôle | Description |
|------|-------------|
| Visiteur | Consultation uniquement |
| Utilisateur | Ajout de contenu |
| Administrateur | Gestion complète du contenu et des utilisateurs |

---

## 📸 Captures d’écran *(à ajouter)*

- [ ] Page d’accueil
- [ ] Fiche acteur
- [ ] Détail film
- [ ] Dashboard admin

---

## 💡 Ce que j’ai appris

- Mettre en œuvre une architecture MVC dans Laravel
- Créer un système d’authentification robuste avec rôles
- Organiser un projet web complet de A à Z
- Déployer une base de données relationnelle
- Travailler avec Git en environnement versionné

---

## 📜 Licence

Ce projet est open-source à but pédagogique.  
Licence : **MIT**

---
