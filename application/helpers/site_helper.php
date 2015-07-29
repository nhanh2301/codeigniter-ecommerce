<?php
if ( ! function_exists('p'))
{
    function p($value)
    {
        print '<pre>';
        print_r ($value);
        print '</pre>';
    }
}

if ( ! function_exists('i'))
{
    function i($i, $w = false, $h = false)
    {
        $h = ($h) ? '&h='.$h : '';
        $w = ($w) ? '&w='.$w : '';
        return base_url('i.php?src='.base_url().'uploads/'.$i.$w.$h);
    }
}

if ( ! function_exists('our_date'))
{
    function our_date()
    {
        date_default_timezone_set('Etc/GMT-3');
        return date("Y-m-d, H:i");
    }
}

if ( ! function_exists('cleanURL'))
{
    function cleanURL($string)
    {
        $url = str_replace("'", '', $string);
        $url = str_replace('%20', ' ', $url);
        $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url); // substitutes anything but letters, numbers and '_' with separator
        $url = trim($url, "-");
        $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);  // you may opt for your own custom character map for encoding.
        $url = strtolower($url);
        $url = preg_replace('~[^-a-z0-9_]+~', '', $url); // keep only letters, numbers, '_' and separator
        return $url;
    }
}