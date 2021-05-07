```bash
php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
```
> mise a jour des OBJETS de la base de données vers les fichiers PHP
```bash
php bin/console make:entity --regenerate App
```
> Créer les GETTERS/SETTERS de tes OBJETS de tes fichiers PHP