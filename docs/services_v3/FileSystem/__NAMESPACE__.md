
# FileSystem

**Namespace**  : alphayax\freebox\api\v3\services\FileSystem

# Overview

- [FileSystemOperation](__NAMESPACE__.md#FileSystemOperation)
- [FileSystemListing](__NAMESPACE__.md#FileSystemListing)
- [FileUpload](__NAMESPACE__.md#FileUpload)
- [FileSystemTask](__NAMESPACE__.md#FileSystemTask)
- [FileSharingLink](__NAMESPACE__.md#FileSharingLink)


---
<a name="FileSystemOperation"></a>
## FileSystemOperation

**Class**  : alphayax\freebox\api\v3\services\FileSystem\FileSystemOperation

### Public methods

| Method | Description |
|---|---|
| `move` | Move files |
| `copy` | Copy files |
| `remove` | Delete files |
| `cat` | Concatenate files (Miaw ^^) |
| `archive` | Create an archive |
| `extract` | Extract an archive |
| `repair` | Repair files from a .par2 |
| `computeHash` | Hash a file. This operation can take some time. To get the hash value, the returned task must have succeed and be in the state “done”. |
| `getHashValue` | Get the hash value To get the hash, the task must have succeed and be in the state “done”. |
| `createDirectory` | Create a directory Contrary to other file system tasks, this operation is done synchronously. |
| `rename` | Rename a file/folder Contrary to other file system tasks, this operation is done synchronously. |
| `download` | Download a file from the freebox server (return the file content) |

<a name="FileSystemListing"></a>
## FileSystemListing

**Class**  : alphayax\freebox\api\v3\services\FileSystem\FileSystemListing

### Public methods

| Method | Description |
|---|---|
| `getFilesFromDirectory` | Get all files in a given directory |
| `getFileInformation` | Get file information |

<a name="FileUpload"></a>
## FileUpload

**Class**  : alphayax\freebox\api\v3\services\FileSystem\FileUpload

### Public methods

| Method | Description |
|---|---|
| `createAuthorization` | Create a file upload authorization |
| `uploadFile` | Send the content of the FileUpload task |
| `getAll` | Get the list of uploads |
| `getFromId` | Track an upload status |
| `cancelFromId` | Cancel the given FileUpload closing the connection The upload status must be in_progress |
| `deleteFromId` | Delete the given FileUpload closing the connection if needed |
| `cleanTerminated` | Deletes all the FileUpload not in_progress |

<a name="FileSystemTask"></a>
## FileSystemTask

**Class**  : alphayax\freebox\api\v3\services\FileSystem\FileSystemTask

### Public methods

| Method | Description |
|---|---|
| `getAllTasks` | Retrieve all FS tasks |
| `getTaskById` | Retrieve a FS task with the specified id |
| `deleteTask` | Delete a FS task |
| `deleteTaskById` | Delete a FS task with the specified id |
| `updateTask` | Update a FS task |

<a name="FileSharingLink"></a>
## FileSharingLink

**Class**  : alphayax\freebox\api\v3\services\FileSystem\FileSharingLink

### Public methods

| Method | Description |
|---|---|
| `getAll` | Retrieve all File Sharing links |
| `getFromToken` | Get a file sharing link from his token identifier |
| `deleteFromToken` | Delete a File Sharing link for his token identifier Deletes the ShareLink task with the given token, if the task was running, stop it. |
| `create` | Create a File Sharing link |

