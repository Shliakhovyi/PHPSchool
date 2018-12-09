<?php

$url = getopt('u:', array("url:"));

//if command run php url_parser.php -u <url>
if (isset($url["u"])) {
	$host = parse_url($url["u"], PHP_URL_HOST);
        $hostparts = explode('.', $host);
        $topleveldomain = implode(".", array_slice($hostparts, 2));
        $scheme = parse_url($url["u"], PHP_URL_SCHEME);
        $path = parse_url($url["u"], PHP_URL_PATH);
        $query = parse_url($url["u"], PHP_URL_QUERY);

	//query string splitter
        parse_str($query, $query_array);

        $path_parts = pathinfo($path);
        $hash = parse_url($url["u"], PHP_URL_FRAGMENT);

        null !== $scheme ? var_dump("scheme (" . $scheme . ")") : "";
        null !== $host ? var_dump("host (" . $host . ")") : "";
        null !== $host ? var_dump("subdomain (" . $hostparts[0] . ")") : "";
        null !== $host ? var_dump("domain (" . $hostparts[1] . ")") : "";
        null !== $host ? var_dump("top level domain (" . $topleveldomain . ")") : "";
        null !== $path || $query ? var_dump("resource (" . $path . "?" . $query . ")") : "";
        isset($path_parts['extension']) ? var_dump("file suffix/extension (" . $path_parts['extension'] . ")") : "";
        null !== $query ? var_dump("query (" . $query . ")") : "";
        null !== $hash ? var_dump("hash (" . $hash . ")") : "";
//command run: url_parser.php --url=<url>
} elseif (isset($url["url"])) {
	$host = parse_url($url["url"], PHP_URL_HOST);
        $hostparts = explode('.', $host);
        $topleveldomain = implode(".", array_slice($hostparts, 2));
        $scheme = parse_url($url["url"], PHP_URL_SCHEME);
        $path = parse_url($url["url"], PHP_URL_PATH);
        $query = parse_url($url["url"], PHP_URL_QUERY);
        parse_str($query, $query_array);
        $path_parts = pathinfo($path);
        $hash = parse_url($url["url"], PHP_URL_FRAGMENT);

        null !== $scheme ? var_dump("scheme (" . $scheme . ")") : "";
        null !== $host ? var_dump("host (" . $host . ")") : "";
        null !== $host ? var_dump("subdomain (" . $hostparts[0] . ")") : "";
        null !== $host ? var_dump("domain (" . $hostparts[1] . ")") : "";
        null !== $host ? var_dump("top level domain (" . $topleveldomain . ")") : "";
        null !== $path || $query ? var_dump("resource (" . $path . "?" . $query . ")") : "";
        isset($path_parts['extension']) ? var_dump("file suffix/extension (" . $path_parts['extension'] . ")") : "";
        null !== $query ? var_dump("query (" . $query . ")") : "";
        null !== $hash ? var_dump("hash (" . $hash . ")") : "";
//command run: php url_parser.php <url>
} else {
	$host = parse_url($argv[1], PHP_URL_HOST);
	$hostparts = explode('.', $host);
        $topleveldomain = implode(".", array_slice($hostparts, 2));
	$scheme = parse_url($argv[1], PHP_URL_SCHEME);
	$path = parse_url($argv[1], PHP_URL_PATH);
	$query = parse_url($argv[1], PHP_URL_QUERY);
	parse_str($query, $query_array);
	$path_parts = pathinfo($path);
	$hash = parse_url($argv[1], PHP_URL_FRAGMENT);

	null !== $scheme ? var_dump("scheme (" . $scheme . ")") : "";
	null !== $host ? var_dump("host (" . $host . ")") : "";
	null !== $host ? var_dump("subdomain (" . $hostparts[0] . ")") : "";
	null !== $host ? var_dump("domain (" . $hostparts[1] . ")") : "";
	null !== $host ? var_dump("top level domain (" . $topleveldomain . ")") : "";
	null !== $path || $query ? var_dump("resource (" . $path . "?" . $query . ")") : "";
	isset($path_parts['extension']) ? var_dump("file suffix/extension (" . $path_parts['extension'] . ")") : "";
	null !== $query ? var_dump("query (" . $query . ")") : "";
	null !== $hash ? var_dump("hash (" . $hash . ")") : "";
}
