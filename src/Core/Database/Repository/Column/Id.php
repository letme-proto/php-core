<?php declare(strict_types=1);
namespace LetMeProto\Core\Database\Repository\Column;

interface Id {
    /**
     * @var mixed 
     * 
     * Return value
     */
    public function value();

    /** 
     * @return string
     * 
     * Return type of column
     */
    public function getTypeString(): string;
}