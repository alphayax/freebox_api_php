<?php
namespace alphayax\freebox\api\v6\models\Home;

use alphayax\freebox\utils\Model;

class EndpointUi extends Model
{
    /**
     * @var string (Read-Only) : Display mode of this data
     * @see \alphayax\freebox\api\v6\symbols\Node\Enpoint\EndpointUiDisplay
     */
    protected $display;

    /**
     * @var string (Read-Only) : Access mode of this endpoint
     * @see  \alphayax\freebox\api\v6\symbols\Node\Enpoint\HomeAccess
     */
    protected $access;

    /** @var string|null (Read-Only) : Url or name of the icon to display. The icon may be displayed for any value of “display”. */
    protected $icon_url;

    /** @var string|null (Read-Only) : The unit of the value to display. */
    protected $unit;

    /** @var string|null (Read-Only) : The hexadecimal presentation of the tint to apply to the icon fetched from “icon_url”. */
    protected $icon_color;

    /** @var string|null (Read-Only) : The hexadecimal presentation of the color of this endpoint label. */
    protected $text_color;

    /** @var string|null (Read-Only) : The hexadecimal presentation of the color of this endpoint value. */
    protected $value_color;

    /** @var float[]|int[]|null (Read-Only) : Range of array of threshold values for this endpoint value. */
    protected $range;

    /** @var string[]|null (Read-Only) : A range of colors to choose from instead of “icon_color”. The index in the range is the index in the “range” array which is just below the endpoint value. */
    protected $icon_color_range;

    /** @var string[]|null (Read-Only) : A range of colors to choose from instead of “text_color”. The index in the range is the index in the “range” array which is just below the endpoint value. */
    protected $text_color_range;

    /** @var string[]|null (Read-Only) : A range of colors to choose from instead of “value_color”. The index in the range is the index in the “range” array which is just below the endpoint value. */
    protected $value_color_range;

    /** @var string[]|null (Read-Only) : Text values to display instead of the value itself. The index in the range is the index in the “range” array which is just below the endpoint value. */
    protected $status_text_range;

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return string|null
     */
    public function getIconColor()
    {
        return $this->icon_color;
    }

    /**
     * @return string|null
     */
    public function getTextColor()
    {
        return $this->text_color;
    }

    /**
     * @return string|null
     */
    public function getValueColor()
    {
        return $this->value_color;
    }

    /**
     * @return float[]|int[]|null
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return string[]|null
     */
    public function getIconColorRange()
    {
        return $this->icon_color_range;
    }

    /**
     * @return string[]|null
     */
    public function getTextColorRange()
    {
        return $this->text_color_range;
    }

    /**
     * @return string[]|null
     */
    public function getValueColorRange()
    {
        return $this->value_color_range;
    }

    /**
     * @return string[]|null
     */
    public function getStatusTextRange()
    {
        return $this->status_text_range;
    }
}
