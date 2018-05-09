<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Find your credentials at twilio.com/console
$apiKeySid = "SKXXXX";
$apiKeySecret = "your_auth_apiKeySecret";
$client = new Client($apiKeySid, $apiKeySecret);

$compositionSid = "CJXXXX";
$uri = "https://video.twilio.com/v1/Compositions/$compositionSid/Media";
$response = $client->request("GET", $uri);
$mediaLocation = $response->getContent()["redirect_to"];

$media_content = file_get_contents($mediaLocation);
// Variable '$media_content' contains the binary Composition Media Data