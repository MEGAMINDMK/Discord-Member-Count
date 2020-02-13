<meta http-equiv="refresh" content="60;url=" />
<?php
error_reporting(0);
//=======================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================
$webhookurl = "channel webhook here";
 $jsonIn = file_get_contents('https://discordapp.com/api/guilds/channelidhere/embed.json');
 $JSON = json_decode($jsonIn, true);

 $membersCount = count($JSON['members']);
 $channelCount = count($JSON['channels']);

 echo "<h2>Number of Online members:</h2> " . $membersCount;
 echo "<br><h2>Number of channels:</h2> " . $channelCount;
//=======================================================================
// Compose message. You can use Markdown
//=======================================================================
//$msg = "Test **message** [https://krasin.in.ua](<URL>)";
//$msg = 'Total Online Members '.$membersCount.' & Channels'.$channelCount.'';
$msg = '```js
Total Online Members '.$membersCount.'```';
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>
<?php
error_reporting(0);
//=======================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================
$webhookurl = "channel webhook here";
//=======================================================================
// Compose message. You can use Markdown
//=======================================================================
//$msg = "Test **message** [https://krasin.in.ua](<URL>)";
//$msg = 'Total Online Members '.$membersCount.' & Channels'.$channelCount.'';
$json_options = [
  "http" => [
    "method" => "GET",
    "header" => "Authorization: Bot token-here"
  ]
];
$json_context = stream_context_create($json_options);
$json_get     = file_get_contents('https://discordapp.com/api/guilds/channelidhere/members?limit=1000', false, $json_context);
$json_decode  = json_decode($json_get, true);
echo '<h2>Member Count</h2>';
echo count($json_decode);
$msg = '```js
Total Members '.count($json_decode).'```';
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>
<?php
error_reporting(0);
//=======================================================================
// Create new webhook in your Discord channel settings and copy&paste URL
//=======================================================================
$webhookurl = "channel webhook here";
//=======================================================================
// Compose message. You can use Markdown
//=======================================================================
//$msg = "Test **message** [https://krasin.in.ua](<URL>)";
//$msg = 'Total Online Members '.$membersCount.' & Channels'.$channelCount.'';
$json_options = [
  "http" => [
    "method" => "GET",
    "header" => "Authorization: Bot token-here"
  ]
];
$json_context = stream_context_create($json_options);
$json_getc     = file_get_contents('https://discordapp.com/api/guilds/channelidhere/channels?limit=1000', false, $json_context);
$json_decode  = json_decode($json_getc, true);
echo '<h2>Channel Count</h2>';
echo count($json_decode);
$msg = '```js
Total Channels '.count($json_decode).'```';
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>