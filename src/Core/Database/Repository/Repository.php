<?php 
namespace LetMeProto\Core\Database\Repository;

use LetMeProto\Core\Repository\Column\Id;

interface Repository {
    /** 
     * @param array $attributes
     */
    public function create(array $attributes = []);
    /** 
     * @param Id $id
     */
    public function getOne(Id $id);
    /** 
     * 
     * @param array $attributes 
     * @return mixed
     */
    public function update(array $attributes = []);
    /** 
     * @param Id $id
     */
    public function delete(Id $id);
    /** 
     * @param PaginateResult $paginate
     */
    public function paginate(Paginate $paginate): PaginateResult;
    
    public function all();
}