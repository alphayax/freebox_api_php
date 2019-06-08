<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class Group extends Model
{
    /** @var string (Read-Only) : The displayable name of this group */
    protected $label;
    /** @var string (Read-only) : The icon url or name */
    protected $icon_url;

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }
}
