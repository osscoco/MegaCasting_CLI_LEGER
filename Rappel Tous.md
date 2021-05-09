> mise a jour des OBJETS de la base de données vers les fichiers PHP
```bash
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```

> Créer les GETTERS/SETTERS de tes OBJETS de tes fichiers PHP
```bash
php bin/console make:entity --regenerate App
```

> Remettre l'identifiant d'une table à 0
```bash
DBCC CHECKIDENT ('[Table]', RESEED, 0);
GO
```

> Github Repository -> Visual Studio Code :
```bash
1) Aller sur github sur mon repository que je veux recuperer
2) Copier l'url HTTPS
3) Créer un nouveau dossier nommé Client_Leger_VersionX
4) Aller dans le dossier et clic droit dans le vide et Git bash here
5) git clone 'adresse HTTPS copié à l'étape 2'
6) Aller dans le dossier et clic droit dans une zone vide
7) Powershell puis 'code .'
8) Ouvrir nouveau terminal et 'composer install'
9) Tapper la commande : 'php -S 127.0.0.1:8000 -t public'
10) Aller sur le site en question
```

> Visual Studio Code  -> Github Repository :
 ```bash
1) Se placer en "git bash here" dans le repository avec tout les fichiers
2) git status (fichiers non enregistrer en modif en ROUGE)
3) git add .
4) git status (fichiers enregistrer à l'étape précédente en VERT)
5) git commit -m "le message du commit"
6) git status (Plus rien ne s'affiche)
7) git log (On voit le commit effectué à l'instant qui apparait le plus en haut) (q pour quitter)
8) git push origin master
9) Login : osscoco | Mdp : Pc...Yn
10) Vérifier sur github que la version nouvelle est la bonne
```
