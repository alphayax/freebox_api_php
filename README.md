
# Freebox v6 PHP API v3

![stable](https://poser.pugx.org/alphayax/freebox_api_php/v/stable)
![unstable](https://poser.pugx.org/alphayax/freebox_api_php/v/unstable)
![pakagist](https://img.shields.io/packagist/v/alphayax/freebox_api_php.svg)

[![Build Status](https://travis-ci.org/alphayax/freebox_api_php.svg?branch=master)](https://travis-ci.org/alphayax/freebox_api_php)
[![Coverage](https://api.codacy.com/project/badge/Coverage/f3569cf671f04b8ab6d699be3fd011e5)](https://www.codacy.com/app/alphayax/freebox_api_php?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=alphayax/freebox_api_php&amp;utm_campaign=Badge_Coverage)
[![Codacy](https://api.codacy.com/project/badge/Grade/f3569cf671f04b8ab6d699be3fd011e5)](https://www.codacy.com/app/alphayax/freebox_api_php?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=alphayax/freebox_api_php&amp;utm_campaign=Badge_Grade)

[![License](https://poser.pugx.org/alphayax/freebox_api_php/license)](https://packagist.org/packages/alphayax/freebox_api_php)
[![Total Downloads](https://poser.pugx.org/alphayax/freebox_api_php/downloads)](https://packagist.org/packages/alphayax/freebox_api_php)


Implementation PHP de l'API de la freebox (dans sa version 3).

## Prérequis

Ce projet est basé sur **composer**. 
Pensez à installer les dependences :)

## Fonctionnalités

L'intégralité des fonctionnalités de l'API Freebox (v3) sont implémentées :

- [AirMedia](docs/services/AirMedia/AirMedia.md)
- [Call](docs/services/Call/Call.md)
- [Configuration](docs/services/config/config.md)
- [Download](docs/services/download/download.md)
- [FileSystem](docs/services/FileSystem/FileSystem.md)
- [Parental Control](docs/services/ParentalControl/ParentalControl.md)
- [RRD](docs/services/RRD/RRD.md)
- [Storage](docs/services/Storage/Storage.md)

Un document complet repertorie l'ensemble des services implémentées : [services.md](docs/services/services.md)

## Utilisation

### Application

L'objet `\alphayax\freebox\utils\Application` représente votre application. Vous devrez 
créer une instance de cette classe et la transmettre aux services que vous souhaitez utiliser.

#### Association

Pour acceder aux services proposés par l'API de la freebox, vous deverez 
autoriser votre application. Cette procedure impose que vous soyez connecté 
au réseau local de votre Freebox lors de "l'association" et que vous ayez la
Freebox a portée de main. L'application sauvegarde automatiquement le token 
retourné par la frebox et cette procedure ne sera plus a reproduire.
 
Notez que pour modifier les droits d'accès aux differents services, vous deverez 
passer par l'interface web locale : [http://mafreebox.freebox.fr/login.php].

> Parametres de la freebox > Divers > Gestion des accès > Applications


1. Créer un objet application. 
2. Demander l'autorisation de connexion a la freebox (cf: cadrant led du Freebox Server)
3. Récuperer une session pour utiliser les divers services de l'API

```php
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.example', 'Freebox PHP API Exemple', '0.0.1');
$App->authorize();
$App->openSession();
```

#### Accès local

L'accès local est activé par défaut. Une fois l'application créer et la session ouverte, vous 
pouvez utiliser directement les services auquels l'application à acces.

#### Accès distant

Pour pouvoir utiliser l'accès distant, il vous faudra le token associé a votre application. 
Ce token s'obtient automatiquement après l'association faite via l'appel à la méthode `authorize()`. 
Le token est ecrit dans le fichier `app_token`. Il est également disponible via la methode `\alphayax\freebox\utils\Application::getAppToken()`. 

Une fois le token obtenu, vous pouvez proceder comme suit : 

```php
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.version', 'Freebox PHP API Example (Version)', '1.0.0');
$App->setFreeboxApiHost( 'https://xxx.freeboxos.fr:17105'); // A remplacer par votre host
$App->setAppToken( 'xxxxxxxxxxxxxxxxxxxx');                 // A remplacer par votre token
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
    - `UPnP` : Affichage des configuration UPnP
    - `VPN` : Affiche la configuration des serveurs VPN, liste les utilisateurs...
    - `WiFi` : Affiche la configuration globale du wifi
- `download`
    - `Download` : Listage des téléchargement en cours, liste des fichiers d'un téléchargement et mise a jour de la priorité de téléchargement
    - `DlConfig` : Affichage des configurations de téléchargement (bt, nntp...)
    - `dl_rss` : Un script qui parse les flux RSS et qui rajoute en téléchagement les items correspondant a une expression réguliere
    - `Bittorrent` : Affiche des infos sur des telechargements bittorent
- `ParentalControl`
    - `Filter` : Retourne la config et les filtres actuels
- `Storage`
    - `Disk` : Retourne des informations sur les disques connectés aux freebox
    - `Partition` : Retourne des infos sur ces disques. Possibilité de verification ou de formatage
- `remote` : Un exemple de connexion distant
- `version` : Affichage de la version de l'API de la freebox
