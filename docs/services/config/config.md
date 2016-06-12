# config

**Namespace**  : alphayax\freebox\api\v3\services\config

# Overview

- [Connection](./Connection/Connection.md)
  - [DynDns](./Connection/DynDns/DynDns.md)
    - [DynDns](Connection/DynDns/DynDns.md#DynDns)
    - [NoIP](Connection/DynDns/DynDns.md#NoIP)
    - [Ovh](Connection/DynDns/DynDns.md#Ovh)
  - [Connection](Connection/Connection.md#Connection)
  - [DynDns](Connection/Connection.md#DynDns)
  - [Ftth](Connection/Connection.md#Ftth)
  - [Xdsl](Connection/Connection.md#Xdsl)
- [LAN](./LAN/LAN.md)
  - [Browser](LAN/LAN.md#Browser)
  - [LAN](LAN/LAN.md#LAN)
- [NAT](./NAT/NAT.md)
  - [DMZ](NAT/NAT.md#DMZ)
  - [IncomingPort](NAT/NAT.md#IncomingPort)
  - [PortForwarding](NAT/NAT.md#PortForwarding)
- [NetworkShare](./NetworkShare/NetworkShare.md)
  - [Afp](NetworkShare/NetworkShare.md#Afp)
  - [Samba](NetworkShare/NetworkShare.md#Samba)
- [SwitchPort](./SwitchPort/SwitchPort.md)
  - [Config](SwitchPort/SwitchPort.md#Config)
  - [Stats](SwitchPort/SwitchPort.md#Stats)
  - [Status](SwitchPort/SwitchPort.md#Status)
- [UPnP](./UPnP/UPnP.md)
  - [AV](UPnP/UPnP.md#AV)
  - [IGD](UPnP/UPnP.md#IGD)
- [VPN](./VPN/VPN.md)
  - [Client](./VPN/Client/Client.md)
    - [Config](VPN/Client/Client.md#Config)
    - [Status](VPN/Client/Client.md#Status)
  - [Server](./VPN/Server/Server.md)
    - [Config](VPN/Server/Server.md#Config)
    - [Connection](VPN/Server/Server.md#Connection)
    - [IpPool](VPN/Server/Server.md#IpPool)
    - [User](VPN/Server/Server.md#User)
- [WiFi](./WiFi/WiFi.md)
  - [AccessPoint](WiFi/WiFi.md#AccessPoint)
  - [Bss](WiFi/WiFi.md#Bss)
  - [Config](WiFi/WiFi.md#Config)
  - [MacFilter](WiFi/WiFi.md#MacFilter)
  - [Planning](WiFi/WiFi.md#Planning)
- [DHCP](config.md#DHCP)
- [FTP](config.md#FTP)
- [Freeplug](config.md#Freeplug)
- [LCD](config.md#LCD)
- [System](config.md#System)


<a name="DHCP"></a>
## DHCP

**Class**  : alphayax\freebox\api\v3\services\config\DHCP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="FTP"></a>
## FTP

**Class**  : alphayax\freebox\api\v3\services\config\FTP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="Freeplug"></a>
## Freeplug

**Class**  : alphayax\freebox\api\v3\services\config\Freeplug

### Public methods

| Method | Description |
|---|---|
| `getNetworks` | Get the current system info | 
| `getFromId` | Get a particular Freeplug information | 
| `resetFromId` | Reset a Freeplug | 

<a name="LCD"></a>
## LCD

**Class**  : alphayax\freebox\api\v3\services\config\LCD

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="System"></a>
## System

**Class**  : alphayax\freebox\api\v3\services\config\System

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current system info | 
| `reboot` | Reboot the Freebox | 
