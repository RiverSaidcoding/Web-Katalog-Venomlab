<?php

if(!isset($_POST['submit'])) {
    echo "error";
}
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    if(empty($nama)|| empty($email)){

        echo "Nama and email are manda!";
        exit;
    }

    $email_from="riversaid191296@gmail.com";
    $email_subject="New Form submission";
    $email_body="You have received a new message from the user $nama.\n"."email address: $email\n". "Here is the message: $message\n".

    $to = "riversaid191296@gmail.com";
    $headers = "From: $email_from \r\n";

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($to, $subject, $mailBody, "From: $sender <$senderEmail>");


?>
