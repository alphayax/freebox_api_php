<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class Tile extends Model
{
    /** @var int (Read-Only) : Id of the HomeNode providing this tile data */
    protected $node_id;

    /** @var int (Read-Only) : Displayable label of this tile */
    protected $label;

    /**
     * @var string (Read-Only) : Action provided by this tile
     * @see \alphayax\freebox\api\v6\symbols\Tileset\Action
     */
    protected $action;

    /** @var string (Read-Only) : The type of tile to display */
    protected $type;

    /** @var Group (Read-Only) : Group icon and name */
    protected $group;

    /** @var TileData[] (Read-Only) : Tile data. Documentation */
    protected $data;

    public function __construct($properties_x = [])
    {
        parent::__construct($properties_x);
        $this->initProperty('group', Group::class);
        $this->initPropertyArray('data', TileData::class);
    }

    /**
     * @return int
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @return int
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return TileData[]
     */
    public function getData()
    {
        return $this->data;
    }
}
