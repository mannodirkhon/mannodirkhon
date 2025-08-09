<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'info@example.com';
    $subject = 'Apex Facade contact form';
    $name = strip_tags($_POST['name'] ?? '');
    $phone = strip_tags($_POST['phone'] ?? '');
    $message = strip_tags($_POST['message'] ?? '');
    $body = "Name: $name\nPhone: $phone\nMessage:\n$message";
    $headers = "From: noreply@apexfacade.com\r\nReply-To: $phone";
    if (mail($to, $subject, $body, $headers)) {
        echo 'OK';
    } else {
        http_response_code(500);
        echo 'Error';
    }
} else {
    http_response_code(405);
}
?>
