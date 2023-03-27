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

## Migration avec Laravel
- Créer une migration  `php artisan make:migration create_users_table`
- Les migrations se trouvent dans le dossier `database/migrations`
- Les modèles se trouvent dans le dossier `app/Models`
- On créer notre Model et notre migration avec la commande `php artisan make:model ModelName -m`
- On ajoute les colonnes dans la migration
- On lance la migration avec la commande `php artisan migrate`
- Ou on peux rafrachir la base de données avec la commande `php artisan migrate:refresh`
- On peut aussi rollback la dernière migration avec la commande `php artisan migrate:rollback`

## Factories 
- Sont des classes qui vont générer des données aléatoires pour nos modèles qui vont êtres insérés dans la base de données.
- On définit les champs de notre modèle dans la factory
- On peut créer une factory avec la commande `php artisan make:factory ModelNameFactory`
- En important directement le Model avec php `artisan make:factory PostFactory --model=Post`
- Avec la function definition() on génère des données à partir de notre modèle grâce à la fonction faker()
- Le lien de la documentation de Faker : https://github.com/fzaninotto/Faker
- On peux accéder à la création de données avec la commande `php artisan tinker`
- Puis on génère des données avec la commande `factory(App\Models\Post::class, 10)->create();` ou `Post::factory()->count(10)->create();`
