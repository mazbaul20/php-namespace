<?php
namespace CloudStorage;
include "autoloader.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\scanner;
use \CloudStorage\FileSystem\Files\Images;

class Main{
    function __construct(){
        $mailer = new Mailer();
        $mailer->sendMail();
        $scanner = new scanner();
        $scanner->scan();

        $images = new Images();
        echo $images->getDimension();
    }
    
}
new Main();