# config

**Namespace**  : alphayax\freebox\api\v3\services\config

# Overview

- [LAN](./LAN/LAN.md)
    - [LAN](LAN/LAN.md#LAN)
    - [Browser](LAN/LAN.md#Browser)
- [SwitchPort](./SwitchPort/SwitchPort.md)
    - [Status](SwitchPort/SwitchPort.md#Status)
    - [Stats](SwitchPort/SwitchPort.md#Stats)
    - [Config](SwitchPort/SwitchPort.md#Config)
- [VPN](./VPN/VPN.md)
    - [Server](./VPN/Server/Server.md)
        - [User](VPN/Server/Server.md#User)
        - [IpPool](VPN/Server/Server.md#IpPool)
        - [Connection](VPN/Server/Server.md#Connection)
        - [Config](VPN/Server/Server.md#Config)
    - [Client](./VPN/Client/Client.md)
        - [Status](VPN/Client/Client.md#Status)
        - [Config](VPN/Client/Client.md#Config)
- [UPnP](./UPnP/UPnP.md)
    - [IGD](UPnP/UPnP.md#IGD)
    - [AV](UPnP/UPnP.md#AV)
- [NetworkShare](./NetworkShare/NetworkShare.md)
    - [Afp](NetworkShare/NetworkShare.md#Afp)
    - [Samba](NetworkShare/NetworkShare.md#Samba)
- [WiFi](./WiFi/WiFi.md)
    - [Planning](WiFi/WiFi.md#Planning)
    - [MacFilter](WiFi/WiFi.md#MacFilter)
    - [Config](WiFi/WiFi.md#Config)
    - [Bss](WiFi/WiFi.md#Bss)
    - [AccessPoint](WiFi/WiFi.md#AccessPoint)
- [Connection](./Connection/Connection.md)
    - [DynDns](./Connection/DynDns/DynDns.md)
        - [DynDns](Connection/DynDns/DynDns.md#DynDns)
        - [NoIP](Connection/DynDns/DynDns.md#NoIP)
        - [Ovh](Connection/DynDns/DynDns.md#Ovh)
    - [DynDns](Connection/Connection.md#DynDns)
    - [Ftth](Connection/Connection.md#Ftth)
    - [Connection](Connection/Connection.md#Connection)
    - [Xdsl](Connection/Connection.md#Xdsl)
- [NAT](./NAT/NAT.md)
    - [PortForwarding](NAT/NAT.md#PortForwarding)
    - [DMZ](NAT/NAT.md#DMZ)
    - [IncomingPort](NAT/NAT.md#IncomingPort)
- [FTP](config.md#FTP)
- [System](config.md#System)
- [LCD](config.md#LCD)
- [DHCP](config.md#DHCP)
- [Freeplug](config.md#Freeplug)


<a name="FTP"></a>
## FTP

**Class**  : alphayax\freebox\api\v3\services\config\FTP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current FTP configuration | 
| `setConfiguration` |  | 

<a name="System"></a>
## System

**Class**  : alphayax\freebox\api\v3\services\config\System

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current system info | 
| `reboot` | Reboot the Freebox | 

<a name="LCD"></a>
## LCD

**Class**  : alphayax\freebox\api\v3\services\config\LCD

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current LCD configuration | 
| `setConfiguration` | Update the LCD configuration | 

<a name="DHCP"></a>
## DHCP

**Class**  : alphayax\freebox\api\v3\services\config\DHCP

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current DHCP configuration | 
| `setConfiguration` | Update the DHCP configuration | 

<a name="Freeplug"></a>
## Freeplug

**Class**  : alphayax\freebox\api\v3\services\config\Freeplug

### Public methods

| Method | Description |
|---|---|
| `getNetworks` | Get the freeplug networks information | 
| `getFromId` | Get a particular Freeplug information | 
| `resetFromId` | Reset a Freeplug | 
