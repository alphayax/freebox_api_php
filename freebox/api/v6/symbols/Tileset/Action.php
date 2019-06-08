<?php
namespace alphayax\freebox\api\v6\symbols\Tileset;

interface Action
{
    /** Open the related node sub-tileset */
    const TILESET = 'tileset';
    /** Open a graph detail page */
    const GRAPH = 'graph';
    /** Display a store simple command */
    const STORE = 'store';
    /** Display a store slider command */
    const STORE_SLIDER = 'store_slider';
    /** Display a color selection widget */
    const COLOR_PICKET = 'color_picker';
    /** Display a white tone selection widget */
    const HEAT_PICKER = 'heat_picker';
    /** Display an intensity selection widget */
    const INTENSITY_PICKER = 'intensity_picker';
    /** No action */
    const NONE = 'none';
}
