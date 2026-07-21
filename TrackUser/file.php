$request_uri = 'https://api.geoplugin.com';

$ip_address = '8.8.8.8';

$key = 'your_api_key';

$url= $request_uri . "?ip=" . $ip_address . "&auth=" . $key;

$document= file_get_contents($url);

$result = json_decode($document);