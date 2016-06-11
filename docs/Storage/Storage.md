# Storage

- [Disk](#Disk)
- [Partition](#Partition)


<a name="Disk"></a>"
## Disk

**Namespace**  : alphayax\freebox\api\v3\services\Storage

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of disks | 
| `getFromId` | Get a given disk info | 
| `update` | Update a disk state | 
| `format` | Format the disk with the given id There will be one partition using all the available space on disk. All previous data will be lost. | 

<a name="Partition"></a>"
## Partition

**Namespace**  : alphayax\freebox\api\v3\services\Storage

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of partitions | 
| `getFromId` | Get a given partition info | 
| `check` | Checks the partition with the given id *NOTE* once started you can monitor the fsck process getting the partition information | 
