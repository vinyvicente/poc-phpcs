<?php

declare(strict_types=1);

namespace App\Rules\Sniffs;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

class YourWebMakerMethodSnakeCaseSniff implements Sniff
{
    public function register(): array
    {
        return [T_FUNCTION];
    }

    public function process(File $phpcsFile, $stackPtr)
    {
        $functionName = $phpcsFile->getDeclarationName($stackPtr);

        if (true === $this->isCamelCase($functionName)) {
            $phpcsFile->addError('PHPUnit test methods just in snake_case', $stackPtr, 'SnakeCase');
        }
    }

    private function isCamelCase(string $functionName): bool
    {
        preg_match('/(^|[a-z])([A-Z])/', $functionName, $matches);

        return count($matches) > 0;
    }
}
