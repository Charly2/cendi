<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}



function index(){

    sendMail('char2296@hotmail.com',"Juan Carlos","Alta al Sistema 22",getMailLogin('char2296@hotmail.com','123456','Juan CArlos'));

    echo "BIEN";
}



















?>