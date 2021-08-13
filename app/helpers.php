<?php



if (!function_exists('complete_name')) {
    function complete_name($ss)
    {
        return ucfirst($ss['userOut']['firstname']) . ' ' . strtoupper($ss['userOut']['lastname']);
    }
}

if (!function_exists('pretty_firstname')) {
    function pretty_firstname($ss)
    {
        return ucfirst($ss['userOut']['firstname']);
    }
}
