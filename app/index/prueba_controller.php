<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (function_exists($_PATH[1])){
    $_PATH[1]();
}else{
    setViewIndex('error');
}



function index(){

    echo getMailLogin("d","d","d");
}



















?>