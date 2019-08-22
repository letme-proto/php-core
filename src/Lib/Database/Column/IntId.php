<?php  declare(strict_types=1);
namespace LetMeProto\Lib\Database\Column;

use LetMeProto\Core\Database\Repository\Column\Id;

final class IntId implements Id {
    /** 
     * @var int
     */
    private $value = null;

    /**
     * @return int 
     */
    public function __construct(int $val) {
        $this->value = $val;
    }
    
    public function value(): int {
        return $this->value;
    }

    public function setValue(int $value): self {
        $this->value = $value;
        return $this;
    }

    /** 
     * @return string
     * 
     * Return type of column
     */
    public function getTypeString(): string {
        return "int";
    }
}