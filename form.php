<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

    $email_from='baekainmybed@163.com';
    $email_subject="new form submission";
    $email_body="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

    $to ="qiyao.zuo.gr@dartmouth.edu";
    $headers="From: $email_from \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location:index.html");


?>