<?php
if (!function_exists('date_format_change')) {
    function date_format_change($date)
    {
        if($date != null ) {
            return date('d/m/Y H:i:s', strtotime($date));
        }

    }
}

if (!function_exists('dob_format_change')) {
    function dob_format_change($date)
    {
        if($date != null ) {
            return date('d/m/Y', strtotime($date));
        }

    }
}
