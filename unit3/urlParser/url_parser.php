<?php

$url = getopt('u:', array("url:"));

function urlParser($urlstring) {
	$host = parse_url($urlstring, PHP_URL_HOST);
        $hostparts = explode('.', $host);
        $topleveldomain = implode(".", array_slice($hostparts, 2));
        $scheme = parse_url($urlstring, PHP_URL_SCHEME);
        $path = parse_url($urlstring, PHP_URL_PATH);
        $query = parse_url($urlstring, PHP_URL_QUERY);

        //query string splitter
        parse_str($query, $query_array);

        $path_parts = pathinfo($path);
        $hash = parse_url($urlstring, PHP_URL_FRAGMENT);

        is_null($scheme) ?: var_dump("scheme (" . $scheme . ")");
        is_null($host) ?: var_dump("host (" . $host . ")",
        			   "subdomain (" . $hostparts[0] . ")",
				   "domain (" . $hostparts[1] . ")",
        			   "top level domain (" . $topleveldomain . ")");
        is_null($path) || is_null($query) ?: var_dump("resource (" . $path . "?" . $query . ")");
        !isset($path_parts['extension']) ?: var_dump("file suffix/extension (" . $path_parts['extension'] . ")");
        is_null($query) ?: var_dump("query (" . $query . ")");
        is_null($hash) ?: var_dump("hash (" . $hash . ")");
}

//if command run: php url_parser.php -u <url>
if (isset($url["u"])) {
	$urlstring = $url["u"];
	urlParser($urlstring);
//command run: php url_parser.php --url=<url>
} elseif (isset($url["url"])) {
	$urlstring = $url["url"];
	urlParser($urlstring);
//command run: php url_parser.php <url>
} else {
	$host = parse_url($argv[1], PHP_URL_HOST);
	$urlstring = $argv[1];
	urlParser($urlstring);
}
