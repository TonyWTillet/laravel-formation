# Laravel formation

## Introduction

Laravel est un framework PHP qui permet de créer des applications web. Il est basé sur le modèle MVC (Model View Controller) et est très simple à prendre en main.

## Installation
- Installer PHP
- Installer Composer
- Installer Laravel
  - Solution 1
    - `composer global require laravel/installer` 
    - `laravel new example-app`
  - Solution 2
    - `composer create-project --prefer-dist laravel/laravel example-app`
    
### Configuration
- Modifier le fichier `.env` pour configurer la base de données
- Créer la base de données
- Lancer les migrations
  - `php artisan migrate`
- Lancer les seeders
  - `php artisan db:seed`
- Lancer le serveur
  - `php artisan serve`
- Accéder à l'application
  - `http://localhost:8000`

## Gestion des assets
- Installer Node.js
- `npm install`
- Installer Laravel Mix
  - `npm install laravel-mix --save-dev`
- Installer Tailwind CSS
  - `npm install -D tailwindcss`
  - `npx tailwind init`
- Lancer la compilation
  - `npm run dev` ou `npm run watch` ou `npx mix` ou `npx mix watch`


