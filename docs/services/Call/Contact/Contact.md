# Contact

**Namespace**  : alphayax\freebox\api\v3\services\Call\Contact

# Overview

- [ContactNumber](Contact.md#ContactNumber)
- [ContactAddress](Contact.md#ContactAddress)
- [ContactUrl](Contact.md#ContactUrl)
- [ContactEmail](Contact.md#ContactEmail)
- [ContactEntry](Contact.md#ContactEntry)


<a name="ContactNumber"></a>
## ContactNumber

**Class**  : alphayax\freebox\api\v3\services\Call\Contact\ContactNumber

### Public methods

| Method | Description |
|---|---|
| `getFromId` | Get the contact number (with the given id) | 
| `create` | Add a new contact number | 
| `delete` | Remove a contact number | 
| `deleteFromId` | Remove a contact number (with the specified id) | 
| `update` | Update a contact number | 

<a name="ContactAddress"></a>
## ContactAddress

**Class**  : alphayax\freebox\api\v3\services\Call\Contact\ContactAddress

### Public methods

| Method | Description |
|---|---|
| `getFromId` | Get the address (with the given id) | 
| `create` | Add an address | 
| `delete` | Remove an address | 
| `deleteFromId` | Remove an address (with the given id) | 
| `update` | Update an address | 

<a name="ContactUrl"></a>
## ContactUrl

**Class**  : alphayax\freebox\api\v3\services\Call\Contact\ContactUrl

### Public methods

| Method | Description |
|---|---|
| `getFromId` | Get the contact url (with the given id) | 
| `create` | Add a new contact url | 
| `delete` | Remove a contact url | 
| `deleteFromId` | Remove a contact url (with the given id) | 
| `update` | Update a contact url | 

<a name="ContactEmail"></a>
## ContactEmail

**Class**  : alphayax\freebox\api\v3\services\Call\Contact\ContactEmail

### Public methods

| Method | Description |
|---|---|
| `getFromId` | Get the email contact (with the given id) | 
| `create` | Create a new email contact | 
| `delete` | Remove an email contact | 
| `deleteFromId` | Remove an email contact (with the given id) | 
| `update` | Update an email contact | 

<a name="ContactEntry"></a>
## ContactEntry

**Class**  : alphayax\freebox\api\v3\services\Call\Contact\ContactEntry

### Public methods

| Method | Description |
|---|---|
| `getAll` | List all contacts | 
| `getFromId` | Get a specific contact entry | 
| `create` | Add a contact entry | 
| `update` | Update a contact entry | 
| `delete` | Remove a contact entry | 
| `deleteFromId` | Remove a contact entry (with the specified id) | 
| `getContactNumbersFromContactId` | Get all numbers associated to a given contact id | 
| `getContactAddressesFromContactId` | Get all addresses associated to a given contact id | 
| `getContactEmailsFromContactId` | Get all email addresses associated to a given contact id | 
| `getContactUrlsFromContactId` | Get all URLs associated to a given contact id | 
