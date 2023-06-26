<?php

$arrFiles = array();

$iterator = new FilesystemIterator("/");

foreach($iterator as $entry) {

    $arrFiles[] = $entry->getFilename();

}

?>
