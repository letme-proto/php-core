<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use LetMeProto\Lib\Database\Column\IntId;
use LetMeProto\Core\Database\Repository\Column\Id;

class DatabaseColumnIdTest extends TestCase { 
    public function testColumnIdImplements() {
        $column = new IntId(1);
        $column->value();
        $this->assertInstanceOf(Id::class, $column);
    }
}