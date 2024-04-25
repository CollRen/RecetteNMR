# Notes de cours Collège Maisonneuve


## Debug

> {{ dd(request())}}

> @dump(request()->is('accueil')) // * PAS de '/' avant 'accueil'

## Utilisation de Laravel pour les images

- Avantages

En utilisant Larabel, ce sera automatiquement minifié

## Système 'Vite'

- Description:
Vite vient avec Laravel: Permet de compiler css & js
> Vs Gulp et Babel

Vite est plus simple, Babel est compliqué

Préfixer Css pour les vieux navigateur
Js: S'assurer que tous les composants sont correctes
Surveille au fur et à mesure de la production pour améliorer, meilleures pratiques, erreurs etc.

Plus besoin du serveur de développement, le fichier est compilé automatiquement.

Directive blade @vite partial/base.blade.php

### Utilisation

> npm run dev // Pour lancer le serveur (En développement on voit les changements directement, sans rien faire de plus)

> npm run build // Pour compiler dans public/assets/... et mettre en ligne

## Tailwind

Attention, pour ajouter nos propres variables il faut installer Tailwind à notre système.