
# Freebox v6 PHP API v3

Implementation PHP de l'API de la freebox.

## Prérequis

Ce projet est basé sur composer. Pensez a installer les dependences :)

## Utilisation

### Application

La premiere étape est de créer une application. 
La seconde est de demander l'autorisation de connexion a la freebox (cf: cadrant led du Freebox Server)
La derniere est de récuperer une session pour utiliser les divers services de l'API

```php
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.1');
$App->authorize();
$App->openSession();
```

### Services
Les appels aux services de l'API se font de la maniere suivante :
Voiuci un exemple d'utilisation de l'API System. 
1. Nous créons un nouveau service "System"
2. Nous demandons de récuperer la configuration actuelle
3. Nous utilisons le modele retourné pour acceder a la donnée `uptime`
 
```php
$System = new \alphayax\freebox\api\v3\services\config\System( $App);

/** @var \alphayax\freebox\api\v3\models\SystemConfig $SystemConfig */
$SystemConfig = $System->getConfiguration();

\alphayax\utils\cli\IO::stdout( 'Uptime : '. $SystemConfig->uptime);
```