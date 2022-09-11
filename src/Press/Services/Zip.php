<?php

/**
 * Concrete Strategy
 */

declare(strict_types=1);

namespace FileCompressor\Press\Services;

use FileCompressor\Press\ICompressorStrategy;
use ZipArchive;

class Zip implements ICompressorStrategy
{
  public function compress(string $path)
  {
    $zipname = "$path.zip";
    $zip = new ZipArchive;

    if (!$zip->open($zipname, ZipArchive::CREATE)) return false;

    echo '<font face="arial" color="#cb1516">Adicionando arquivo para compressão...</font></br>';
    $zip->addFile($path);

    $zip->close();

    return true;
  }
}