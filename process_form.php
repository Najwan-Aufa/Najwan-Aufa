<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $fullName = htmlspecialchars($_POST['full_name']);
    $emailAddress = htmlspecialchars($_POST['email_address']);
    $mobileNumber = htmlspecialchars($_POST['mobile_number']);
    $emailSubject = htmlspecialchars($_POST['email_subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validasi data (opsional)
    if (empty($fullName) || empty($emailAddress) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    // Kirim email (contoh sederhana, pastikan server Anda mendukung fungsi mail)
    $to = "programnajwan@gmail.com"; // Ganti dengan email Anda
    $subject = "Contact Form Submission: $emailSubject";
    $body = "Name: $fullName\nEmail: $emailAddress\nMobile: $mobileNumber\n\nMessage:\n$message";
    $headers = "From: $emailAddress";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
