<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class TileData extends Model
{
    /** @var int (Read-Only) : The period this data needs to be refreshed */
    protected $refresh;

    /** @var string (Read-Only) : The displayable name of this data */
    protected $label;

    /** @var string (Read-Only) : The technical name of this data */
    protected $name;

    /** @var int (Read-Only) : Id of the HomeNodeEndpoint related to this data */
    protected $ep_id;

    /** @var int (Read-Only) : id of signal to retrieve value. */
    protected $signal_id;

    /** @var int (Read-Only) : id of slot to send command or value. */
    protected $slot_id;

    /**
     * @var int|float|string|null (Read-Only) : current value of signal.
     * Documentation states that it might contain « The data value history as string in the format: “timestamp:value” separated by semicolons ».
     */
    protected $value;

    /**
     * @var string (Read-Only) : The data value type
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
     * @return int
     */
    public function getRefresh()
    {
        return $this->refresh;
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
     * @return int
     */
    public function getEpId()
    {
        return $this->ep_id;
    }

    /**
     * @return int
     */
    public function getSignalId()
    {
        return $this->signal_id;
    }

    /**
     * @return int
     */
    public function getSlotId()
    {
        return $this->slot_id;
    }

    /**
     * @return float|int|string|null
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
