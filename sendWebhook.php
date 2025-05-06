// sendWebhook.php (gönderici)
<?php
$data = json_decode(file_get_contents('php://input'), true);
$payload = [
  "embeds" => [[
    "title" => "IP LOG",
    "fields" => [
      ["name" => "IP", "value" => $data['ip'], "inline" => true],
      ["name" => "Time", "value" => $data['time'], "inline" => true]
    ]
  ]]
];

$options = [
  'http' => [
    'method'  => 'POST',
    'header'  => "Content-Type: application/json",
    'content' => json_encode($payload)
  ]
];
$context  = stream_context_create($options);
file_get_contents('https://discord.com/api/webhooks/1369394717862662214/CpSjAppWJh3yixR6lh3m2UyZbJ1qt_hXJq0lLweKnaJ-WoJAaKEyf_XgTD3CgHm3p9xU', false, $context);
?>
