# Server

- [Config](#Config)
- [Connection](#Connection)
- [IpPool](#IpPool)
- [User](#User)


<a name="Config"></a>"
## Config

**Namespace**  : alphayax\freebox\api\v3\services\config\VPN\Server

### Public methods

| Method | Description |
|---|---|
| `getConfigurationFromId` | Get a VPN config | 
| `setConfiguration` | Update the VPN configuration | 

<a name="Connection"></a>"
## Connection

**Namespace**  : alphayax\freebox\api\v3\services\config\VPN\Server

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of connections | 
| `closeFromId` | Close a given connection | 

<a name="IpPool"></a>"
## IpPool

**Namespace**  : alphayax\freebox\api\v3\services\config\VPN\Server

### Public methods

| Method | Description |
|---|---|
| `getReservations` | Get the VPN server IP pool reservations | 

<a name="User"></a>"
## User

**Namespace**  : alphayax\freebox\api\v3\services\config\VPN\Server

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of VPNUser | 
| `getFromLogin` | Gets the VPNUser with the given login | 
| `add` | Creates a new VPNUser | 
| `delete` | Deletes the VPNUser | 
| `deleteFromLogin` | Deletes the VPNUser | 
| `update` | Update a VPN Use | 
| `getConfigurationFile` |  | 
