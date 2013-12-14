<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 14/12/13
 * Time: 1:24 PM
 */



require 'core/FileLoader.php';
//base files to be loaded
$libraryFiles = array("BaseController","DirectionController", "Router", "View", "ObjectAccessor", "PageObject");
$configFiles = array("paths", "database");


//load files
$fileLoader = new FileLoader();
$fileLoader->loadConfigFiles($configFiles);
$fileLoader->loadLibraryFiles($libraryFiles);

//handles where to go
$directionController = new DirectionController();