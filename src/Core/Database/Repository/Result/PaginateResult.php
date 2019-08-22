<?php 
namespace LetMeProto\Core\Database;

use LetMeProto\Core\Database\Repository\Result\Paginate;

interface PaginateResult {
    
    /** 
     * @return mixed
     */
    public function result();

    /** 
     * @return Paginate
     */
    public function paginate(): Paginate;
}