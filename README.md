Pour créer la base de données il faut importer le script blogdb.sql

Le mot de passe pour créer un article est "root"

Le boutton "Exporter les articles" encode les articles en json et les place dans un fichier serialize.txt à la racine
du projet. S'il n'existe pas il est automatiquement créé.

Je n'ai pas eu le temps de mettre en place la mise à jour et la suppression d'un article mais les fonctions avec les requêtes 
SQL sont présentes.

J'ai créé une classe pour gérer la création des formulaires mais elle provoquait des erreurs dans mon css donc je ne l'ai pas utilisé mais elle fonctionne.

J'ai mis en place une classe Database avec un "singleton" et une autre Autoloader mais je ne les ai pas utilisé par manque 
de temps

Merci d'avance :)
