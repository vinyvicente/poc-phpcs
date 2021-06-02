<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Test1
 *
 * @author Vinicius Oliveira <vinicius.oliveira@db-n.com>
 */
class Test1 extends TestCase
{
    /**
     * @return bool
     */
    public function my_beautiful_test(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function myWrongTest(): bool
    {
        return true;
    }
}
