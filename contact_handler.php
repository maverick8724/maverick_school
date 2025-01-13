<?php

include 'sanitize.php';


if (isset($_POST['submit'])) {
    $fullName = sanitize($_POST['name']);
    $email =sanitize($_POST['email']);
    $phoneNumber =sanitize($_POST['number']);
    $msg =sanitize($_POST['message']);

    $myEmail ="absolutelymaverick@gmail.com";
    $to =$myEmail;
    $headers ='MIME-Version: 1.0' ."\r\n";
    $headers ='Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers ='From: '.$email . "\r\n";
    $headers ='Reply-To: '.$email . "\r\n";
    $subject ='Account Verification';
    $message = 'From: '.$fullName. "\r\n" .$email. "\r\n" .$phoneNumber. "\r\n" .$msg;
    mail($to, $subject, $message ,$headers);
    header("location: reg-success.php");
  }

?>
            <!-- <head>
                 <title>ACCOUNT VERIFICATION</title>
                    <style type="text/css" >
                        body{
                            background-color: #c1bdba;
                            font-family: sans-serif;
                        }
                        a{
                            text-decoration: none;
                            color: #1ab188;
                            -webkit-transition: .5s ease;
                            transition: .5s ease;
                        }
                        a:hover{
                            color: #179b77;
                        }
                        h1{
                            font-size: 18px;
                            text-align: center;
                            color: #ffffff;
                            font-weight: 300;
                        }
                        h2{
                            text-align: center;
                            color: #1ab188;
                            font-weight: 1000;
                        }
                        span{
                            color: #1ab188;
                            font-weight: bold;
                        }
                        p{
                            text-align: center;
                            color: #ffffff;
                            margin: 0px 0px 50px 0px;
                            padding-top: 2px;
                        }
                        .form{
                            background: rgba(19, 35, 47, 0.9);
                            padding: 40px;
                            max-width: 600px;
                            margin: 40px auto;
                            border-radius: 4px;
                            box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
                        }
                        .button{
                            font-family: sans-serif;
                            border: 0;
                            outline: none;
                            border-radius: 0;
                            padding: 15px 0;
                            margin-top: 30px;
                            font-size: 2rem;
                            font-weight: 600;
                            text-transform: uppercase;
                            
                        }
                    </style>
                    </head>
                    <body></body>
                    </html>'
} -->