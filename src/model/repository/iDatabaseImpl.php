<?php

namespace app\model\repository;

interface iDatabaseImpl {
    public function getAll();
    public function insert($entity);
    public function update($entity);
    public function delete($id);
    public function getById($id);


}