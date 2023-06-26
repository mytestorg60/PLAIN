<?php

$arrFiles = array();

$iterator = new FilesystemIterator("/");

foreach($iterator as $entry) {

    $arrFiles[] = $entry->getFilename();

}

var_dump($arrFiles)

?>
