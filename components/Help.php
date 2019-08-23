<?php
/**
 * Class for helper functions
 */

class Help
{
    /**
     * Debug function. Halts program and outputs $value.
     *
     * @param null $value
     * @param int $die
     */
    public static function d($value = null, $die = 1)
    {
        echo 'Debug: <br /><pre>';
        print_r($value);
        echo '</pre>';

        if ($die) die;
    }
}