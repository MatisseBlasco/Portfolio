<?php
if(isset($_POST['submit']) && !empty($_POST['message'])) {
                        
    $dest = "matisseblascotest@gmail.com";
    $mail = $_POST['email'];
    $subject .= 'Portfolio';
    $name = $_POST['name'];
    $message = $_POST['message'];
    $header = "From: $mail";
                                    
    mail($dest, $subject, $message, $header);
    header('Location: index.html');
}