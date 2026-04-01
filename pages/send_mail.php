<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // --- sanitize helper ---
    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    // --- get data (supports both forms) ---
    $name = clean($_POST['first_name'] ?? $_POST['subscriber_name'] ?? 'User');
    $email = clean($_POST['email'] ?? $_POST['subscriber_email'] ?? '');
    $phone = clean($_POST['phone_number'] ?? '');
    $message = clean($_POST['message'] ?? 'Newsletter Subscription');

    // --- basic validation ---
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email";
        exit;
    }

    // --- recipient (YOU) ---
    $to = "shubhamsggupta59@gmail.com";

    // --- subject ---
    $subject = "New Website Enquiry";

    // --- email body ---
    $body = "New Form Submission\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    if ($phone) {
        $body .= "Phone: $phone\n";
    }
    $body .= "Message: $message\n";

    // --- headers (CRITICAL PART) ---
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // --- send mail ---
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        http_response_code(500);
        echo "error";
    }
}