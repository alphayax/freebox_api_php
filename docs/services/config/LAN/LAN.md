# LAN

**Namespace**  : alphayax\freebox\api\v3\services\config\LAN

# Overview

- [LAN](LAN.md#LAN)
- [Browser](LAN.md#Browser)


<a name="LAN"></a>
## LAN

**Class**  : alphayax\freebox\api\v3\services\config\LAN\LAN

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current LAN configuration | 
| `setConfiguration` | Update the LAN configuration | 

<a name="Browser"></a>
## Browser

**Class**  : alphayax\freebox\api\v3\services\config\LAN\Browser

### Public methods

| Method | Description |
|---|---|
| `getBrowsableInterfaces` | Get all Lan interfaces | 
| `getHostsFromInterface` | Get the LanHosts of the specified interface | 
| `getHostsFromInterfaceName` | Get the LanHosts of the specified interface name | 
| `getHostFromId` | Get a specific LanHost | 
| `updateHostFromInterfaceId` | Update a LanHost | 
| `wakeOnLan` | Send Wake ok Lan packet to an host | 
