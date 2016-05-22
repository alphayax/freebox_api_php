
# Freebox v6 PHP API v3

Implementation PHP de l'API de la freebox (dans sa version 3).

## Prérequis

Ce projet est basé sur **composer**. Pensez à installer les dependences :)

## Fonctionnalités

Jusqu'a présent, les fonctionalités suivantes ont été implémentées :

- AirMedia
- Call
    - CallEntry
    - ContactEntry
        - ContactAddress
        - ContactEmail
        - ContactNumber
        - ContactUrl
- FileSystem
    - FileSystem (Core)
        - FsTask
        - FsOperation
        - FsListing
    - FileSharing
- Downloads
    - Download
- Configuration
    - Connection
        - Connection (Core)
        - xDSL
        - FTTH
        - DynDns
    - DHCP
    - FTP
    - LAN
        - Lan (Core)
        - Lan Browser
        - Wake On Lan
    - System
    - LCD
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

Voici un exemple d'utilisation de l'API System :

1. Nous créons un nouveau service "System"
2. Nous demandons de récuperer la configuration actuelle
3. Affichage du modele retourné
 
```php
$System = new \alphayax\freebox\api\v3\services\config\System( $App);

/** @var \alphayax\freebox\api\v3\models\SystemConfig $SystemConfig */
$SystemConfig = $System->getConfiguration();

print_r( $SystemConfig);
```

Résultat : 
```php
alphayax\freebox\api\v3\models\SystemConfig Object
(
    [firmware_version:protected] => 3.3.1
    [mac:protected] => 77:77:77:77:77:77
    [serial:protected] => 7777777777777777
    [uptime:protected] => 44 jours 16 heures 35 minutes 16 secondes
    [uptime_val:protected] => 3861316
    [board_name:protected] => fbxgw2r
    [temp_cpum:protected] => 63
    [temp_sw:protected] => 52
    [temp_cpub:protected] => 58
    [fan_rpm:protected] => 2253
    [box_authenticated:protected] => 1
)
```

## Exemples

Les exemples sont disponibles dans le repertoire `exemple`. Ils sont classés par services :
- `AirMedia` : Exemple de lancement d'une video sur le Freebox Player
- `Call` : 
    - `Call` : Liste les appels recus et emis sur la freebox (avec exemple de supression et de marquage comme lu) 
    - `Contact` : Liste les contacts, ajoute et retire un numéro de téléphone au premier contact de la liste
- `FileSystem`
    - `fileSharing` : Un exemple de partage de fichier sur le net
    - `fsListing` : Un exemple de scan de repertoires de la freebox
    - `fsOperation` : Un exemple d'operations sur le fichiers (copies, déplacement, renommage, par2..)
- `config` 
    - `check_dns` : Un script pour récuperer la configuration courrante du DHCP
    - `Connection` : Récupere diverses informations sur la connexion de la freebox (xDSL, FTTH, DynDns...)
    - `DMZ` : Récupération de la configuration de votre zone démilitarisée
    - `Freeplug` : Affichage de votre configuration de Freeplug
    - `IncomingPort` : Retourne la configuration actuelle du port d'entrée HTTP
    - `LCD` : Exemple de modification de la luminosité du cadrant LCD de la freebox server
    - `LAN` : Configuration du LAN et exploration des machines en réseau
    - `PortForwarding` : Exemple d'ajout d'une redirection de port
    - `System` : Affichage de la configuration système de la freebox
- `download`
    - `dl_rss` : Un script qui parse les flux RSS et qui rajoute en téléchagement les items correspondant a une expression réguliere
 
 