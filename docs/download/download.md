# download

**Namespace**  : alphayax\freebox\api\v3\services\download

# Overview

- [BlackList](download.md#BlackList)
- [Configuration](download.md#Configuration)
- [Download](download.md#Download)
- [Feed](download.md#Feed)
- [Peer](download.md#Peer)
- [Tracker](download.md#Tracker)


<a name="BlackList"></a>
## BlackList

**Class**  : alphayax\freebox\api\v3\services\download\BlackList

### Public methods

| Method | Description |
|---|---|
| `getAllFromDownloadTaskId` | Get the list of blacklist entries for a given download Attempting to call this method on a download other than bittorent will fail. | 
| `emptyBlackListFromDownloadId` | Empty the blacklist for a given download This call allow to remove all global entries, and entries related to the given download | 
| `removeBlackListEntry` | Delete a particular blacklist entry | 
| `addBlackListEntry` | Add a blacklist entry | 

<a name="Configuration"></a>
## Configuration

**Class**  : alphayax\freebox\api\v3\services\download\Configuration

### Public methods

| Method | Description |
|---|---|
| `getConfiguration` | Get the current Download configuration | 
| `setConfiguration` | Update the Download configuration | 
| `updateThrottlingMode` | You can force the throttling mode using this method. You can use any of the throttling modes defined in DlThrottlingConfig. | 

<a name="Download"></a>
## Download

**Class**  : alphayax\freebox\api\v3\services\download\Download

### Public methods

| Method | Description |
|---|---|
| `getAll` | Returns the collection of all Download tasks | 
| `getFromId` | Returns the Download task with the given id | 
| `update` | Update a download task | 
| `addFromUrl` |  | 
| `addFromUrls` |  | 
| `addFromFile` |  | 
| `getStats` | Returns the Download task with the given id | 
| `getFilesFromId` | Returns the Download task with the given id | 

<a name="Feed"></a>
## Feed

**Class**  : alphayax\freebox\api\v3\services\download\Feed

### Public methods

| Method | Description |
|---|---|
| `getAllFeeds` | Get the list of all download Feeds | 
| `getFeedFromId` | Gets the DownloadFeed with the given id | 
| `addFeed` | Add a Download Feed | 
| `removeFeed` | Delete a Download Feed | 
| `updateFeed` | Update a Download Feed | 
| `refreshFeed` | Remotely fetches the RSS feed and updates it. Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error | 
| `refreshFeeds` | Remotely fetches the RSS feed and updates it. Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error | 
| `getFeedItems` | Returns the collection of all DownloadFeedItems for a given DownloadFeed | 
| `updateFeedItem` | Returns the collection of all DownloadFeedItems for a given DownloadFeed | 
| `downloadFeedItem` | Returns the collection of all DownloadFeedItems for a given DownloadFeed | 
| `markFeedAsRead` | Returns the collection of all DownloadFeedItems for a given DownloadFeed | 

<a name="Peer"></a>
## Peer

**Class**  : alphayax\freebox\api\v3\services\download\Peer

### Public methods

| Method | Description |
|---|---|
| `getAll` | Get the list of peers for a given Download Attempting to call this method on a download other than bittorent will fail | 

<a name="Tracker"></a>
## Tracker

**Class**  : alphayax\freebox\api\v3\services\download\Tracker

### Public methods

| Method | Description |
|---|---|
| `getAll` | Each torrent Download task has one or more DownloadTracker. Each tracker is identified by its announce URL. | 
| `add` | Add a new tracker Attempting to call this method on a download other than bittorent will fail | 
| `remove` | Remove a tracker Attempting to call this method on a download other than bittorent will fail | 
| `update` | Update a tracker Attempting to call this method on a download other than bittorent will fail | 
