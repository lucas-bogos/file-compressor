<?php

/**
 * Strategy
 */

declare(strict_types=1);

namespace FileCompressor\Press;

interface ICompressorStrategy {
  public function compress(string $path);
}