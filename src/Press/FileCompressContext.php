<?php

/**
 * Context
 */

declare(strict_types=1);

namespace FileCompressor\Press;

class FileCompressContext
{
  private ICompressorStrategy $compressorStrategy;

  public function __construct(ICompressorStrategy $compressorStrategy)
  {
    $this->compressorStrategy = $compressorStrategy;
  }

  public function compress(string $path)
  {
    $isCompressed = $this->compressorStrategy->compress($path);

    if ($isCompressed) {
      return ("Sucesso: compressão de arquivo realizada");
    }

    return ("Ocorreu um erro: sua compressão de arquivo não teve êxito");
  }

  public function setCompress(ICompressorStrategy $compressorStrategy)
  {
    $this->compressorStrategy = $compressorStrategy;
  }
}