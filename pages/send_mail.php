<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $formType = $_POST['form_type'] ?? 'unknown';

    $email = clean($_POST['email'] ?? $_POST['subscriber_email'] ?? '');
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email";
        exit;
    }

    $to = "info@premiumproducts.com.au";
    $subject = "New Website Submission";

    $body = "Form Type: " . strtoupper($formType) . "\n\n";

    switch ($formType) {

        case "newsletter":
            $name = clean($_POST['subscriber_name'] ?? 'Subscriber');

            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            break;

        case "contact":
            $name = clean($_POST['first_name'] ?? '');
            $phone = clean($_POST['phone_number'] ?? '');
            $message = clean($_POST['message'] ?? '');

            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Phone: $phone\n";
            $body .= "Message: $message\n";
            break;

        case "enquiry":
            $name = clean($_POST['first_name'] ?? '');
            $phone = clean($_POST['mobile_number'] ?? '');
            $product = clean($_POST['product_name'] ?? '');
            $message = clean($_POST['message'] ?? '');

            $body .= "Product: $product\n";
            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Phone: $phone\n";
            $body .= "Message: $message\n";
            break;

        default:
            http_response_code(400);
            echo "Invalid form submission";
            exit;
    }

    $headers = "";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        http_response_code(500);
        echo "error";
    }
}