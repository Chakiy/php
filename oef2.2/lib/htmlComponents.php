<?php

function printHead($file){
   $file = file_get_contents($file);
   print $file;
}
