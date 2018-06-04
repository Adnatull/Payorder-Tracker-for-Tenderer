<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/inc/classes/entry.php");

$entry = Entry::getEntry();
if ($entry->errors) {
    // header("Location: search.php");
     foreach ($entry->errors as $error) {
         echo $error; 
     }
 }


require_once ($_SERVER['DOCUMENT_ROOT']."/views/entry.php");
