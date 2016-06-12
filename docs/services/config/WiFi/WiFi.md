# WiFi

**Namespace**  : alphayax\freebox\api\v3\services\config\WiFi

# Overview

- [AccessPoint](WiFi.md#AccessPoint)
- [Bss](WiFi.md#Bss)
- [Config](WiFi.md#Config)
- [MacFilter](WiFi.md#MacFilter)
- [Planning](WiFi.md#Planning)


<a name="AccessPoint"></a>
## AccessPoint

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\AccessPoint

### Public methods

| Method | Description |
|---|---|
| `getAll` |  | 
| `getFromId` |  | 
| `getAllowedCombFromId` | To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination. | 
| `getStationsFromId` | To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination. | 
| `update` |  | 
| `getNeighborsFromId` | Get the list of Neighbor seen by the AP | 
| `refreshNeighborsScan` | WARNING during the scan the AP will be unavailable. Therefore, you should ask for user confirmation prior to launching a scan. Once launched you should wait until the ap state comes back from scanning to get updated info. | 
| `getChannelUsageFromId` | List Wi-Fi channels usage | 

<a name="Bss"></a>
## Bss

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Bss

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of Freebox Access Points | 
| `getFromId` | Get the list of Freebox Access Points | 
| `update` | Get the list of Freebox Access Points | 

<a name="Config"></a>
## Config

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 
| `resetConfiguration` | Reset Wifi to default configuration | 

<a name="MacFilter"></a>
## MacFilter

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\MacFilter

### Public methods

| Method | Description |
|---|---|
| `getAll` |  | 
| `getFromId` |  | 
| `update` |  | 
| `delete` |  | 
| `deleteFromId` |  | 
| `add` |  | 

<a name="Planning"></a>
## Planning

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Planning

### Public methods

| Method | Description |
|---|---|
| `getPlanning` |  | 
| `update` |  | 
