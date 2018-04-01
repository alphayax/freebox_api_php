<?php

namespace alphayax\freebox\api\v4\models\AirMedia;

use alphayax\freebox\utils\Model;

/**
 * Class AirMediaReceiver
 * @package alphayax\freebox\api\v4\models
 */
class AirMediaReceiverRequest extends Model
{
    /**
     * @var string
     * @see \alphayax\freebox\api\v4\symbols\AirMedia\Action
     */
    protected $action;

    /**
     * @var string
     * @see \alphayax\freebox\api\v4\symbols\AirMedia\MediaType
     */
    protected $media_type;

    /** @var string : Optional receiver password */
    protected $password;

    /**
     * @var int
     * Start position for a video.
     * The start position is expressed in percent * 1000, for instance 50000 means 50% of the video
     */
    protected $position = 0;

    /**
     * @var string : The media to play
     * For video media, you have to specify the media URL, for instance http://anon.nasa-global.edgesuite.net/HD_downloads/GRAIL_launch_480.mov
     * For photo media, you have to specify the file path on the Freebox Server (base64 encoded as returned in fs/ls call), for instance L0Rpc3F1ZSBkdXIvUGhvdG9zL1JvY2tldHMvRFNDXzM0OTEuanBn
     */
    protected $media;

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * @param string $media_type
     */
    public function setMediaType($media_type)
    {
        $this->media_type = $media_type;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

}
