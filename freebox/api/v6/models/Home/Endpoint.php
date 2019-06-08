<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class Endpoint extends Model
{
    /**
     * @var string (Read-Only) : The endpoint type
     * @see \alphayax\freebox\api\v6\symbols\Node\Enpoint\Type
     */
    protected $ep_type;

    /** @var int (Read-Only) : The endpoint id */
    protected $id;

    /**
     * @var string (Read-Only) : Visibility level of this endpoint
     * @see
     */
    protected $visibility;

    /** @var string (Read-Only) : The endpoint displayable type */
    protected $label;

    /** @var string (Read-Only) : The endpoint technical name */
    protected $name;

    /** @var string (Read-Only) : The current value of the endpoint */
    protected $value;

    /**
     * @var string (Read-Only) : The type of value this endpoint expose
     * @see \alphayax\freebox\api\v6\symbols\Node\Enpoint\ValueType
     */
    protected $value_type;

    /** @var EndpointUi (Read-Only) : Ui descriptor for this data to know how to display it */
    protected $ui;

    public function __construct($properties_x = [])
    {
        parent::__construct($properties_x);
        $this->initProperty('ui', EndpointUi::class);
    }

    /**
     * @return string
     */
    public function getEpType()
    {
        return $this->ep_type;
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
    public function getVisibility()
    {
        return $this->visibility;
    }

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * @return EndpointUi
     */
    public function getUi()
    {
        return $this->ui;
    }
}
