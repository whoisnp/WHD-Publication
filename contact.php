<?php
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $AllowedExtensions = ["pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt"];
        $files = [];
        $server_file = [];
        // foreach($_FILES as $name => $file) {
        //     $file_name = $file["name"];
        //     $file_temp = $file["tmp_name"];
        //     foreach($file_name as $key) {
        //         $path_parts = pathinfo($key);
        //         $extension = strtolower($path_parts["extension"]);
        //         if(!in_array($extension, $AllowedExtensions)) { die("Extension not allowed"); }
        //         $server_file[] = "uploads/{$path_parts["basename"]}";
        //     }
        //     for($i = 0; $i<count($file_temp); $i++) { move_uploaded_file($file_temp[$i], $server_file[$i]); }
        // }
        $to = "nithyap322@gmail.com";
        $from = $email;
        $headers = "From: $from";
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        // $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
        $htmlContent = '<h2>Contact Request Submitted</h2>
                        <p><b>Name:</b> '.$name.'</p>
                        <p><b>Email:</b> '.$email.'</p>
                        <p><b>Subject:</b> '.$subject.'</p>
                        <p><b>Message:</b><br/>'.$message.'</p>';
        $message =  "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; ;
        $message .= "--{$mime_boundary}\n";
        // $FfilenameCount = 0;
        // for($i = 0; $i<count($server_file); $i++) {
        //     $afile = fopen($server_file[$i],"rb");
        //     $data = fread($afile,filesize($server_file[$i]));
        //     fclose($afile);
        //     $data = chunk_split(base64_encode($data));
        //     $name = $file_name[$i];
        //     $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
        //     "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
        //     "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        //     $message .= "--{$mime_boundary}\n";
        //     @unlink($server_file[$i]);
        // }
        if(mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Mail sent successfully');</script>";
        } else {
            echo "<script>alert('Mail was not sent. Please try again later');</script>";
        }
    }
?>