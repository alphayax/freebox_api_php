<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class Node extends Model
{
    /** @var int (Read-Only) : Id of the HomeAdapter this node is connected to. */
    protected $adapter;

    /** @var string (Read-Only) : Category of node (eg shutter, ...). Might be enum. */
    protected $category;

    /** @var string (Read-Only) : Displayable name of this node */
    protected $label;

    /** @var int (Read-Only) : Id of this node. */
    protected $id;

    /** @var string (Read-Only) : Technical name of this node */
    protected $name;

    /** @var Endpoint[] (Read-Only) : Endpoints exposed by this node */
    protected $show_endpoints = [];

    public function __construct($properties_x = [])
    {
        parent::__construct($properties_x);
        $this->initPropertyArray('show_endpoints', Endpoint::class);
    }

    /**
     * @return int
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Endpoint[]
     */
    public function getShowEndpoints()
    {
        return $this->show_endpoints;
    }
}
