
# Server

**Namespace**  : alphayax\freebox\api\v3\services\config\VPN\Server

# Overview

- [User](__NAMESPACE__.md#User)
- [Connection](__NAMESPACE__.md#Connection)
- [Config](__NAMESPACE__.md#Config)
- [IpPool](__NAMESPACE__.md#IpPool)


---
<a name="User"></a>
## User

**Class**  : alphayax\freebox\api\v3\services\config\VPN\Server\User

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of VPNUser |
| `getFromLogin` | Gets the VPNUser with the given login |
| `add` | Creates a new VPNUser |
| `delete` | Deletes the VPNUser |
| `deleteFromLogin` | Deletes the VPNUser with the given id |
| `update` | Update a VPN Use |
| `getConfigurationFile` | Generate a new configuration file &amp; download it |

<a name="Connection"></a>
## Connection

**Class**  : alphayax\freebox\api\v3\services\config\VPN\Server\Connection

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of connections |
| `closeFromId` | Close a given connection |

<a name="Config"></a>
## Config

**Class**  : alphayax\freebox\api\v3\services\config\VPN\Server\Config

### Public methods

| Method | Description |
|---|---|
| `getConfigurationFromId` | Get a VPN config |
| `setConfiguration` | Update the VPN configuration |

<a name="IpPool"></a>
## IpPool

**Class**  : alphayax\freebox\api\v3\services\config\VPN\Server\IpPool

### Public methods

| Method | Description |
|---|---|
| `getReservations` | Get the VPN server IP pool reservations |

