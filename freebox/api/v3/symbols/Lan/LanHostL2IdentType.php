<?php
namespace alphayax\freebox\api\v3\symbols\Lan;

/**
 * Interface LanHostL2IdentType
 * @package alphayax\freebox\api\v3\symbols\Lan
 */
interface LanHostL2IdentType {
    const DHCP      = 'dhcp';     // DHCP
    const NETBIOS   = 'netbios';  // Netbios
    const MDNS      = 'mdns';     // mDNS
    const UPNP      = 'upnp';     // UPnP
}
