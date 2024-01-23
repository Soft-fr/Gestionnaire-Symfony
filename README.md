# Gestionnaire de client Symfony

Bienvenue dans le Gestionnaire de client Symfony.

Développer par Corentin Adelé

## Installation

Suivez ces étapes pour installer et exécuter le projet localement :

1. **Cloner le référentiel :** Utilisez la commande Git suivante pour cloner ce référentiel sur votre machine locale.

   git clone git@github.com:Soft-fr/Gestionnaire-Symfony.git
2. **Accéder au répertoire du projet :** Changez de répertoire pour accéder au répertoire du projet.

   cd TP-Symfony
3. **Installer les dépendances :** Utilisez Composer pour installer les dépendances du projet.

   composer install
4. **Créer la base de données :** Utilisez Doctrine pour créer la base de données en exécutant les migrations.

   php bin/console doctrine:migrations:migrate
6. **Démarrer le serveur de développement :** Utilisez le serveur de développement Symfony pour exécuter le projet localement.

   symfony serve
7. **Accéder au projet :** Ouvrez votre navigateur Web et accédez à l'URL suivante pour voir votre projet en action.

   http://localhost:8000

## Se connecter au compte admin 

Username : corentin.adl@gmail.com
Password : azerty

**Se Connecter :**
Pour commencer à utiliser le Gestionnaire Symfony, vous devez vous connecter à l'application. Pour cela, ouvrez votre navigateur Web et accédez à l'URL suivante :

http://localhost:8000/login
Cela vous dirigera vers la page de connexion, où vous devrez saisir vos informations d'identification (nom d'utilisateur et mot de passe). Une fois connecté avec succès, vous aurez accès aux fonctionnalités du Gestionnaire.

**Gérer les Clients :**
Une fois connecté, vous pouvez gérer les clients en accédant à la page suivante :

http://localhost:8000/admin/client
Sur cette page, vous trouverez des options pour afficher, ajouter, modifier et supprimer des clients. Assurez-vous d'être connecté en tant qu'utilisateur autorisé pour effectuer ces opérations.

**Gérer les Entreprises :**
De la même manière, vous pouvez gérer les entreprises en accédant à la page suivante :

http://localhost:8000/admin/entreprise
Sur cette page, vous pouvez effectuer diverses actions liées à la gestion des entreprises. Assurez-vous également d'être connecté en tant qu'utilisateur autorisé pour accéder à ces fonctionnalités.

**Tableau de Bord Administrateur :**
Pour accéder au tableau de bord administrateur, où vous pouvez choisir entre la gestion des clients et des entreprises, utilisez l'URL suivante :

http://localhost:8000/admin
Cette page vous permet de sélectionner l'option qui vous intéresse, que ce soit la gestion des clients ou des entreprises. Assurez-vous d'être connecté en tant qu'administrateur pour accéder à cette fonctionnalité.

**Se Déconnecter :**
Une fois que vous avez terminé de travailler dans le Gestionnaire Symfony, assurez-vous de vous déconnecter pour des raisons de sécurité. Pour cela, accédez à la page de déconnexion en utilisant l'URL suivante :

http://localhost:8000/logout
Cela vous déconnectera de l'application et vous ramènera à la page de connexion.

## Contribuer

Si vous souhaitez contribuer à ce projet, veuillez suivre ces étapes :

1. Forkez le projet sur GitHub.
2. Créez une branche pour votre contribution (git checkout -b ma-contribution).
3. Effectuez vos modifications et committez-les (git commit -m "Ajout de fonctionnalités").
4. Poussez vos modifications vers votre fork (git push origin ma-contribution).
5. Créez une Pull Request (PR) vers ce référentiel.
6. Attendez la revue et l'acceptation de votre PR.

Merci d'avoir utilisé ce projet.
