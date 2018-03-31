
# NAT

**Namespace**  : alphayax\freebox\api\v3\services\config\NAT

# Overview

- [IncomingPort](__NAMESPACE__.md#IncomingPort)
- [PortForwarding](__NAMESPACE__.md#PortForwarding)
- [DMZ](__NAMESPACE__.md#DMZ)


---
<a name="IncomingPort"></a>
## IncomingPort

**Class**  : alphayax\freebox\api\v3\services\config\NAT\IncomingPort

### Public methods

| Method | Description |
|---|---|
| `getAll` | Getting the list of incoming ports |
| `getFromId` | Getting a specific incoming port |
| `update` | Updating an incoming port |

<a name="PortForwarding"></a>
## PortForwarding

**Class**  : alphayax\freebox\api\v3\services\config\NAT\PortForwarding

### Public methods

| Method | Description |
|---|---|
| `getAll` | Getting the list of port forwarding |
| `getById` | Getting a specific port forwarding |
| `update` | Update a specific port forwarding |
| `add` | Add a port forwarding |
| `delete` | Delete a port forwarding |
| `deleteById` | Delete a port forwarding with the specified id |

<a name="DMZ"></a>
## DMZ

**Class**  : alphayax\freebox\api\v3\services\config\NAT\DMZ

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current Dmz configuration |
| `setConfiguration` | Update the current Dmz configuration |

