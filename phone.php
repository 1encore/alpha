<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $subject = "New contact";
    $message = "msg";
    $email = "new.visitor@alpha.academy.org";

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($subject) OR empty($message)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
//    $recipient = "admin@alpha-academy.org";
    $recipient = "hg1zadr@gmail.com";

    // Set the email subject.
    // $subject = "New contact";

    // Build the email content.
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$name\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

?>
