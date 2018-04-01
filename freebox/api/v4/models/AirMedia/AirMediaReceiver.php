<?php

namespace alphayax\freebox\api\v4\models\AirMedia;

use alphayax\freebox\utils\Model;

/**
 * Class AirMediaReceiver
 * @package alphayax\freebox\api\v4\models
 */
class AirMediaReceiver extends Model
{
    /** @var string (Read-only) : AirMedia name */
    protected $name;

    /** @var bool (Read-only) : Is set to true the receiver is protected by a password */
    protected $password_protected;

    /**
     * @var array (Read-only) : List of receiver capabilities from the following list
     * photo    : can display photos
     * audio    : can play audio files
     * video    : can play video files
     * screen    : can display remote screen
     */
    protected $capabilities = [];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return boolean
     */
    public function isPasswordProtected()
    {
        return $this->password_protected;
    }

    /**
     * @return array
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

}
