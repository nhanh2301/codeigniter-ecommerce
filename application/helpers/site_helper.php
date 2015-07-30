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

if ( ! function_exists('convert_currency'))
{
	function convert_currency($from, $to, $amount)
	{
        $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

        $request = curl_init();
        $timeOut = 0;
        curl_setopt ($request, CURLOPT_URL, $url);
        curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($request, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut);
        $response = curl_exec($request);
        curl_close($request);


        $regularExpression     = '#\<span class=bld\>(.+?)\<\/span\>#s';
        preg_match($regularExpression, $response, $finalData);

        // $finalData[0] returns a string in $to currency

        return floatval(preg_replace("/[^-0-9\.]/", "", $finalData[0])); // removes not numerical and dot characters and converts it to float
    }
}

if ( ! function_exists('prefered_languages'))
{
    function preferd_languages(array $available_languages, $http_accept_language) 
	{

        $available_languages = array_flip($available_languages);

        $langs = [];
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_accept_language), $matches, PREG_SET_ORDER);
        foreach($matches as $match) {

            list($a, $b) = explode('-', $match[1]) + array('', '');
            $value = isset($match[2]) ? (float) $match[2] : 1.0;

            if(isset($available_languages[$match[1]])) {
                $langs[$match[1]] = $value;
                continue;
            }

            if(isset($available_languages[$a])) {
                $langs[$a] = $value - 0.1;
            }

        }
        arsort($langs);

        return $langs;
    }
}

if ( ! function_exists('browser_data'))
{
    public static function browser_data()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        }
        elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        }
        elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        }
        elseif(preg_match('/Firefox/i',$u_agent))
        {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        }
        elseif(preg_match('/Chrome/i',$u_agent))
        {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        }
        elseif(preg_match('/Safari/i',$u_agent))
        {
            $bname = 'Apple Safari';
            $ub = "Safari";
        }
        elseif(preg_match('/Opera/i',$u_agent))
        {
            $bname = 'Opera';
            $ub = "Opera";
        }
        elseif(preg_match('/Netscape/i',$u_agent))
        {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
            ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            }
            else {
                $version= $matches['version'][1];
            }
        }
        else {
            $version= $matches['version'][0];
        }

        // check if we have a number
        if ($version==null || $version=="") {$version="?";}

        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'    => $pattern
        );
    }
}

if ( ! function_exists('real_ip'))
{
    function real_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}

if ( ! function_exists('file_get_contents_curl'))
{
    function file_get_contents_curl($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}

if ( ! function_exists('ip_info'))
{
	function ip_info($ip) 
	{
        $ip_info_url = "http://ipinfo.io/".$ip."/json";
        $data = Utils::file_get_contents_curl($ip_info_url);

        return (array) json_decode($data);
    }
}