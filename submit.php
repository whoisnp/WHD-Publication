<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Schedule a Call Request";
    $message = "";
    $Country = $_POST['country'];
    $cno = $_POST['number'];

    $to = "nithyap322@gmail.com";
    $from = $email;
    $headers = "From: $from";
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    // $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $htmlContent = '<h2>Contact Request Submitted</h2>
                        <p><b>Name:</b> ' . $name . '</p>
                        <p><b>Email:</b> ' . $email . '</p>
                        <p><b>Country:</b> ' . $Country . '</p>
                        <p><b>Contact Number:</b> ' . $cno . '</p>';
    $message =  "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";;
    $message .= "--{$mime_boundary}\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Mail sent successfully');</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Mail was not sent. Please try again later');</script>";
    }
}