<?php 
    $email = $_POST['email'];
    $bookUrls = $_POST['bookUrls'];
    $prefix = $_POST['prefix'];
    $name = $_POST['name'];
    $cno = $_POST['cno'];
    $BookTitle = $_POST['BookTitle'];
    $country = $_POST['country'];
    $data = implode("\n", $bookUrls);
    // echo $data; 

    $subject = "Free Book submitted by :$name"; 


    $to = "nithyap322@gmail.com";
    $from = $email;
    $headers = "From :$from";
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    // $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b><span>'.$prefix.'</span> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Book Name:</b> '.$BookTitle.'</p>
                    <p><b>Book URLS:</b> '.$data.'</p>
                    <p><b>Contact Number:</b><br/>'.$cno.'</p>';
    $message =  "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; ;
    $message .= "--{$mime_boundary}\n";


    if(mail($to, $subject, $message, $headers)) {
        echo "mail sent to $to!";
    } else {
        echo "mail could not be sent!";
    }


    // for($i = 0; $i<count($server_file); $i++) {

    //     <p><b>Book Files:</b> '.implode("\n", $bookUrls).'</p>

        
    // }
?>