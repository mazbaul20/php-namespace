<?php
namespace CloudStorage\filesystem\Files;
use CloudStorage\FileSystem\Files\Contracts\Imagecontracts;

class Images implements Imagecontracts{
    function getDimension(){
        echo "This is images class\n";
    }
}