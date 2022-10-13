# RPG
Projet symfony :
( Ce projet est une beta test qui a pour but d'évoluer au fil de l'année )

pour commencer cloner ce git sur un dossier vide créer relier à votre éditeur de commande avec la commande : git clone "liens repository" depuis git bash

Ensuite faites cd "fichier corespondant au projet cloné" pour ensuite executer la commande : <code>composer install</code> pour mettre à jour tous les packages sur le projet.

Une fois les étapes précédantes réalisées 

vous devez ensuite créer la base de donnée avec la commande <code>php bin/console doctrine:database:create</code>

dirigez vous vers votre base de donnée pour vérifier que la base à bien était crée 

Utilisez la commande <code>php bin/consolephp make:migration</code>  puis <code>php bin/console doctrine:migration:migrate</code> pour intégrer les tables à la base de donnée 

une fois ceci fait le server est donc opérationnel vous pouvez donc utiliser la commande pour démarrer le serveur symfony

<code> symfony server:start </code>

ensuite utilisez une route parmis les 3 suivantes pour faire les infos sur le RPG : 

/competences 
/personnage
/type 
ces 3 routes sont à indiquer apres l'url fournis par le server start 



