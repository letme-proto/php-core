<?php
namespace LetMeProto\Core\Database\Repository\Result;

interface Paginate {
    
    /** 
     * @return int
     */
    public function page(): int;
    
    /** 
     * @return int
     */
    public function count(): int;
}