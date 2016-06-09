
# Call

- CallEntry
- ContactEntry
    - ContactEmail
    - ContactAddress
    - ContactNumber
    - ContactUrl

## CallEntry

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | CallEntry |


- getAll : Retourne tous les appels
- getFromId : Retourne un appel donné
- delete : Supprime un appel de la liste des appels
- deleteFromId : Supprime un appel de la liste des appels
- update : Met à jour les informations d'un appel

## ContactEntry

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | ContactEntry |

- getAll : Retourne la liste de tous les contacts
- getFromId : Retourne un contact donné
- create : Ajoute une nouveau contact
- delete : Supprime un contact
- deleteFromId : Supprime un contact
- update : Met à jour les informations d'un contact
- getContactNumbersFromContactId : Retourne les numéros associés a un contact
- getContactAddressesFromContactId : Retourne les adresses associés a un contact
- getContactEmailsFromContactId : Retourne les emails associés a un contact
- getContactUrlsFromContactId : Retourne les URLs associés a un contact

### Contact Email

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | ContactEmail |

- getFromId
- create
- delete
- deleteFromId
- update

### Contact Address

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | ContactAddress |

- getFromId
- create
- delete
- deleteFromId
- update

### Contact Number

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | ContactNumber |

- getFromId
- create
- delete
- deleteFromId
- update

### Contact URL

| Namespace  | Class |
|---|---|
| alphayax\freebox\api\v3\services\Call | ContactUrl |

- getFromId
- create
- delete
- deleteFromId
- update
