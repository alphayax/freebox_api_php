
# WiFi

**Namespace**  : alphayax\freebox\api\v3\services\config\WiFi

# Overview

- [Bss](__NAMESPACE__.md#Bss)
- [AccessPoint](__NAMESPACE__.md#AccessPoint)
- [Config](__NAMESPACE__.md#Config)
- [MacFilter](__NAMESPACE__.md#MacFilter)
- [Planning](__NAMESPACE__.md#Planning)


---
<a name="Bss"></a>
## Bss

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Bss

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of Freebox BSS |
| `getFromId` | Get a specific BSS |
| `update` | Update a BSS |

<a name="AccessPoint"></a>
## AccessPoint

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\AccessPoint

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get all Access Points |
| `getFromId` | Get a specific Access Point |
| `getAllowedCombFromId` | To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination. |
| `getStationsFromId` | To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination. |
| `update` | Update an Access Point |
| `getNeighborsFromId` | Get the list of Neighbor seen by the AP |
| `refreshNeighborsScan` | WARNING during the scan the AP will be unavailable. Therefore, you should ask for user confirmation prior to launching a scan. Once launched you should wait until the ap state comes back from scanning to get updated info. |
| `getChannelUsageFromId` | List Wi-Fi channels usage |

<a name="Config"></a>
## Config

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the global wifi configuration |
| `setConfiguration` | Update the global wifi configuration |
| `resetConfiguration` | Reset Wifi to default configuration |

<a name="MacFilter"></a>
## MacFilter

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\MacFilter

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get all MacFilters |
| `getFromId` | Get a specific MacFilter |
| `update` | Update a MacFilter |
| `delete` | Delete a MacFilter |
| `deleteFromId` | Delete a MacFilter with the specified id |
| `add` | Add a new MacFilter |

<a name="Planning"></a>
## Planning

**Class**  : alphayax\freebox\api\v3\services\config\WiFi\Planning

### Public methods

| Method | Description |
|---|---|
| `getPlanning` | Get the wifi planning |
| `update` | Update the wifi planning |

