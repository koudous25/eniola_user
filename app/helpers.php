<?php

use Illuminate\Support\Facades\Crypt;

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

if (!function_exists('secret')) {
    function secret($ss)
    {
        if ($ss == "") {
            $val = '';
            return $val;
        } else {

            $sss = Crypt::decrypt($ss);
            $n = strlen($sss);
            $e = "$.$,$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$";
            $val = substr($e, 0, $n);
            return $val;
        }
    }
}

if (!function_exists('rand_no_repete')) {
    function rand_no_repete($totalvalue, $nbre)
    {
        if ($totalvalue <= $nbre) {
            $tab = array();
            $i = 0;
            while ($i < $totalvalue) {
                $a = rand(0, $totalvalue - 1);
                if (!in_array($a, $tab)) {
                    $tab[] = $a;
                    $i++;
                }
            }
        } else {
            $tab = array();
            $i = 0;
            while ($i < $nbre) {
                $a = rand(0, $totalvalue - 1);
                if (!in_array($a, $tab)) {
                    $tab[] = $a;
                    $i++;
                }
            }
        }
        return $tab;
    }
}
