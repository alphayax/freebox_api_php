
# config

**Namespace**  : alphayax\freebox\api\v3\services\config

# Overview

- [NetworkShare](./NetworkShare/__NAMESPACE__.md)
    - [Afp](NetworkShare/__NAMESPACE__.md#Afp)
    - [Samba](NetworkShare/__NAMESPACE__.md#Samba)
- [SwitchPort](./SwitchPort/__NAMESPACE__.md)
    - [Config](SwitchPort/__NAMESPACE__.md#Config)
    - [Status](SwitchPort/__NAMESPACE__.md#Status)
    - [Stats](SwitchPort/__NAMESPACE__.md#Stats)
- [NAT](./NAT/__NAMESPACE__.md)
    - [IncomingPort](NAT/__NAMESPACE__.md#IncomingPort)
    - [PortForwarding](NAT/__NAMESPACE__.md#PortForwarding)
    - [DMZ](NAT/__NAMESPACE__.md#DMZ)
- [VPN](./VPN/__NAMESPACE__.md)
    - [Client](./VPN/Client/__NAMESPACE__.md)
        - [Config](VPN/Client/__NAMESPACE__.md#Config)
        - [Status](VPN/Client/__NAMESPACE__.md#Status)
    - [Server](./VPN/Server/__NAMESPACE__.md)
        - [User](VPN/Server/__NAMESPACE__.md#User)
        - [Connection](VPN/Server/__NAMESPACE__.md#Connection)
        - [Config](VPN/Server/__NAMESPACE__.md#Config)
        - [IpPool](VPN/Server/__NAMESPACE__.md#IpPool)
- [Connection](./Connection/__NAMESPACE__.md)
    - [DynDns](./Connection/DynDns/__NAMESPACE__.md)
        - [DynDns](Connection/DynDns/__NAMESPACE__.md#DynDns)
        - [Ovh](Connection/DynDns/__NAMESPACE__.md#Ovh)
        - [NoIP](Connection/DynDns/__NAMESPACE__.md#NoIP)
    - [Ftth](Connection/__NAMESPACE__.md#Ftth)
    - [DynDns](Connection/__NAMESPACE__.md#DynDns)
    - [Connection](Connection/__NAMESPACE__.md#Connection)
    - [Xdsl](Connection/__NAMESPACE__.md#Xdsl)
- [UPnP](./UPnP/__NAMESPACE__.md)
    - [IGD](UPnP/__NAMESPACE__.md#IGD)
    - [AV](UPnP/__NAMESPACE__.md#AV)
- [LAN](./LAN/__NAMESPACE__.md)
    - [Browser](LAN/__NAMESPACE__.md#Browser)
    - [LAN](LAN/__NAMESPACE__.md#LAN)
- [WiFi](./WiFi/__NAMESPACE__.md)
    - [Bss](WiFi/__NAMESPACE__.md#Bss)
    - [AccessPoint](WiFi/__NAMESPACE__.md#AccessPoint)
    - [Config](WiFi/__NAMESPACE__.md#Config)
    - [MacFilter](WiFi/__NAMESPACE__.md#MacFilter)
    - [Planning](WiFi/__NAMESPACE__.md#Planning)
- [LCD](__NAMESPACE__.md#LCD)
- [FTP](__NAMESPACE__.md#FTP)
- [DHCP](__NAMESPACE__.md#DHCP)
- [System](__NAMESPACE__.md#System)
- [Freeplug](__NAMESPACE__.md#Freeplug)


---
<a name="LCD"></a>
## LCD

**Class**  : alphayax\freebox\api\v3\services\config\LCD

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current LCD configuration |
| `setConfiguration` | Update the LCD configuration |

<a name="FTP"></a>
## FTP

**Class**  : alphayax\freebox\api\v3\services\config\FTP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current FTP configuration |
| `setConfiguration` |  |

<a name="DHCP"></a>
## DHCP

**Class**  : alphayax\freebox\api\v3\services\config\DHCP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current DHCP configuration |
| `setConfiguration` | Update the DHCP configuration |

<a name="System"></a>
## System

**Class**  : alphayax\freebox\api\v3\services\config\System

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current system info |
| `reboot` | Reboot the Freebox |

<a name="Freeplug"></a>
## Freeplug

**Class**  : alphayax\freebox\api\v3\services\config\Freeplug

### Public methods

| Method | Description |
|---|---|
| `getNetworks` | Get the freeplug networks information |
| `getFromId` | Get a particular Freeplug information |
| `resetFromId` | Reset a Freeplug |

