
# Freebox v6 PHP API v3

Implementation PHP de l'API de la freebox (dans sa version 3).

## Prérequis

Ce projet est basé sur **composer**. Pensez à installer les dependences :)

## Fonctionnalités

Jusqu'a présent, les fonctionalités suivantes ont été implémentées :

- AirMedia
- FileSystem
    - FileSystem (Core)
- Downloads
    - Download
- Configuration
    - DHCP
    - FTP
    - System
    - NAT
        - Dmz
        - Port Forwarding
        - Incoming Port


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
Les appels aux services de l'API se font par l'intermédiaire de services.
Ces derniers possedent les méthodes pour récuperer, ajouter ou mettre a jour des données.

Voici un exemple d'utilisation de l'API System. 
1. Nous créons un nouveau service "System"
2. Nous demandons de récuperer la configuration actuelle
3. Nous utilisons le modele retourné pour acceder a la donnée `uptime`
 
```php
$System = new \alphayax\freebox\api\v3\services\config\System( $App);

/** @var \alphayax\freebox\api\v3\models\SystemConfig $SystemConfig */
$SystemConfig = $System->getConfiguration();

\alphayax\utils\cli\IO::stdout( 'Uptime : '. $SystemConfig->getUptime());
```

## Exemples

Les exemples sont disponibles dans le repertoire `exemple`. Ils sont classés par services :
- `AirMedia` : Exemple de lancement d'une video sur le Freebox Player
- `config` 
    - `check_dns` : Un script pour récuperer la configuration courrante du DHCP
    - `DMZ` : Récupération de la confiugration de votre zone démilitarisée
    - `IncomingPort` : Retourne la configuration actuelle du port d'entrée HTTP
    - `PortForwarding` : Exemple d'ajout d'une redirection de port
- `download`
    - `dl_rss` : Un script qui parse les flux RSS et qui rajoute en téléchagement les items correspondant a une expression réguliere
 
 