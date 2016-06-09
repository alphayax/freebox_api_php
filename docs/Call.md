
# Call

- CallEntry
- ContactEntry
    - ContactEmail
    - ContactAddress
    - ContactNumber
    - ContactUrl

## CallEntry

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `CallEntry`|

- getAll : Retourne tous les appels
- getFromId : Retourne un appel donné
- delete : Supprime un appel de la liste des appels
- deleteFromId : Supprime un appel de la liste des appels
- update : Met à jour les informations d'un appel

## ContactEntry

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `ContactEntry`|

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

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `ContactEmail`|

- getFromId
- create
- delete
- deleteFromId
- update

### Contact Address

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `ContactAddress`|

- getFromId
- create
- delete
- deleteFromId
- update

### Contact Number

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `ContactNumber`|

- getFromId
- create
- delete
- deleteFromId
- update

### Contact URL

|---|
| Namespace   |`alphayax\freebox\api\v3\services\Call` |
| Classe   | `ContactUrl`|

- getFromId
- create
- delete
- deleteFromId
- update
