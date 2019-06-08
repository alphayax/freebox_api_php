<?php
namespace alphayax\freebox\api\v6\symbols\Node\Enpoint;

interface EndpointUiDisplay
{
    /**
     * This displays the endpoint value as text. Read access is always allowed when “text” is used. When write access is
     * allowed, the text may be editable on user request. When the “unit” entry is present and not null, it specifies
     * the physical unit associated to the endpoint value.
     */
    const TEXT = 'text';

    /**
     * This displays the icon fecthed from “icon_url” with % being replaced by the string representation of the endpoint
     * value. For string value type, the % is replaced by the endpoint value. For int and float value types, this
     * requires an “icon_ranges” array of threshold values. The % is replaced by the index in the “range” array which is
     * just below the endpoint value. For boolean value type, the % is replaced by “on” or “off”. When the “value” is
     * null, the % is replaced by the empty string. Read access is always allowed when “icon” is used. Write access is
     * not used.
     */
    const ICON = 'icon';

    /**
     * This displays a push button. Write access is always allowed when “button” is used. A null value must be send to
     * the endpoint when pushed.
     */
    const BUTTON = 'button';

    /**
     * This displays a slider with the cursor located according to the endpoint value in the range specified by “range”.
     * Read access is always allowed when “slider” is used. When write access is allowed, the cursor may be moved by the
     * user. When write access is not allowed it may be displayed as a progress bar.
     */
    const SLIDER = 'slider';

    /**
     * This displays an on/off switch. Read access is always allowed when “switch” is used. When write access is
     * allowed, switch may be toggled by the user. A boolean value must be send to the endpoint when toggled.
     */
    const TOGGLE = 'toggle';

    /**
     * This displays a color value. The value type is an int representing the RGB color. Read access is always allowed
     * when “color” is used.
     */
    const COLOR = 'color';

    /**
     * This display the icon fetched from “icon_url” when the value condition is true. For boolean value type, the value
     * is the condition. For int and float value types, this requires a “range” of size 2. If the value is within the
     * range, the condition is true.
     */
    const WARNING = 'warning';
}
