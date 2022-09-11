<?php

/**
 * Client Area
 */

require __DIR__ . "/../vendor/autoload.php";

use FileCompressor\Press\FileCompressContext;
use FileCompressor\Press\Services\Tar;
use FileCompressor\Press\Services\Zip;


// $wrapper = new FileCompressContext(new Tar);
$wrapper = new FileCompressContext(new Zip);

var_dump($wrapper->compress("hello.html"));