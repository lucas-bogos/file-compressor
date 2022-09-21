<?php

/**
 * Concrete Strategy
 */

declare(strict_types=1);

namespace FileCompressor\Press\Services;

use FileCompressor\Press\ICompressorStrategy;

class Tar implements ICompressorStrategy
{
  public function compress(string $path)
  {
    $pathScaned = htmlspecialchars($path, ENT_QUOTES);
    $tarfile = "$pathScaned.tar.gz";

    echo '<font face="arial" color="#cb1516">Seu arquivo está sendo comprimido...</font></br>';

    if (!exec("tar -czf $tarfile $pathScaned")) return true;
    
  }
}