<?php

/// Require Composer AutoLoader
require_once '../../vendor/autoload.php';

/// Define our application
$App = new \alphayax\freebox\utils\Application( 'com.alphayax.freebox.call', 'PHP API Example (Call)', '1.0.0');
$App->authorize();
$App->openSession();

$ContactService = new \alphayax\freebox\api\v3\services\Call\ContactEntry( $App);

$ContactEntries = $ContactService->getAll();
print_r( $ContactEntries);


/*
$ContactNumber = new \alphayax\freebox\api\v3\models\Call\ContactNumber();
$ContactNumber->setContactId( 1);
$ContactNumber->setNumber( '0213456789');
$ContactNumber->setType( \alphayax\freebox\api\v3\symbols\Call\ContactNumberType::HOME);

$ContactNumber = $ContactService->addContactNumber( $ContactNumber);
print_r( $ContactNumber);

$ContactNumbers = $ContactService->getContactNumbersFromContactId( 1);
print_r( $ContactNumbers);
*/

/*
$ContactAddressService = new \alphayax\freebox\api\v3\services\Call\ContactAddress( $App);

$ContactAddress = new \alphayax\freebox\api\v3\models\Call\ContactAddress();
$ContactAddress->setContactId( $ContactEntries[0]->getId());
$ContactAddress->setType( \alphayax\freebox\api\v3\symbols\Call\ContactAdressType::WORK);
$ContactAddress->setCity( 'Montpellier');
$ContactAddress->setCountry( 'France');

$ContactAddressCreated = $ContactAddressService->create( $ContactAddress);
print_r( $ContactAddressCreated);

$ContactAddressDeleted = $ContactAddressService->delete( $ContactAddressCreated);
print_r( $ContactAddressDeleted);
*/


$ContactNumbersService = new \alphayax\freebox\api\v3\services\Call\ContactNumber( $App);

$Number = new \alphayax\freebox\api\v3\models\Call\ContactNumber();
$Number->setType(\alphayax\freebox\api\v3\symbols\Call\ContactNumberType::HOME);
$Number->setNumber('0456123789');
$Number->setContactId( $ContactEntries[0]->getId());

$Number = $ContactNumbersService->create( $Number);


$ContactNumbers = $ContactService->getContactNumbersFromContactId( $ContactEntries[0]->getId());
print_r( $ContactNumbers);

$ContactNumbersService->delete( $Number);

$ContactNumbers = $ContactService->getContactNumbersFromContactId( $ContactEntries[0]->getId());
print_r( $ContactNumbers);


