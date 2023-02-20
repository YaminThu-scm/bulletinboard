<?php
if (!function_exists('date_format_change')) {
    function date_format_change($num)
    {
        return date('d/m/Y', strtotime($num));
    }
}
