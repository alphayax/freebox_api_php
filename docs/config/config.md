# config

- [Connection](./Connection/Connection.md)
  - [DynDns](./DynDns/DynDns.md)
    - [DynDns](#DynDns)
    - [NoIP](#NoIP)
    - [Ovh](#Ovh)
  - [Connection](#Connection)
  - [DynDns](#DynDns)
  - [Ftth](#Ftth)
  - [Xdsl](#Xdsl)
- [LAN](./LAN/LAN.md)
  - [Browser](#Browser)
  - [LAN](#LAN)
- [NAT](./NAT/NAT.md)
  - [DMZ](#DMZ)
  - [IncomingPort](#IncomingPort)
  - [PortForwarding](#PortForwarding)
- [NetworkShare](./NetworkShare/NetworkShare.md)
  - [Afp](#Afp)
  - [Samba](#Samba)
- [SwitchPort](./SwitchPort/SwitchPort.md)
  - [Config](#Config)
  - [Stats](#Stats)
  - [Status](#Status)
- [UPnP](./UPnP/UPnP.md)
  - [AV](#AV)
  - [IGD](#IGD)
- [VPN](./VPN/VPN.md)
  - [Client](./Client/Client.md)
    - [Config](#Config)
    - [Status](#Status)
  - [Server](./Server/Server.md)
    - [Config](#Config)
    - [Connection](#Connection)
    - [IpPool](#IpPool)
    - [User](#User)
- [WiFi](./WiFi/WiFi.md)
  - [AccessPoint](#AccessPoint)
  - [Bss](#Bss)
  - [Config](#Config)
  - [MacFilter](#MacFilter)
  - [Planning](#Planning)
- [DHCP](#DHCP)
- [FTP](#FTP)
- [Freeplug](#Freeplug)
- [LCD](#LCD)
- [System](#System)


<a name="DHCP"></a>"
## DHCP

**Namespace**  : alphayax\freebox\api\v3\services\config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="FTP"></a>"
## FTP

**Namespace**  : alphayax\freebox\api\v3\services\config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="Freeplug"></a>"
## Freeplug

**Namespace**  : alphayax\freebox\api\v3\services\config

### Public methods

| Method | Description |
|---|---|
| `getNetworks` | Get the current system info | 
| `getFromId` | Get a particular Freeplug information | 
| `resetFromId` | Reset a Freeplug | 

<a name="LCD"></a>"
## LCD

**Namespace**  : alphayax\freebox\api\v3\services\config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` |  | 
| `setConfiguration` |  | 

<a name="System"></a>"
## System

**Namespace**  : alphayax\freebox\api\v3\services\config

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current system info | 
| `reboot` | Reboot the Freebox | 
