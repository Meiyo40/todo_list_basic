<?php

namespace app\model\repository;

interface iDatabaseImpl {
    public function insert($entity);
    public function update($entity);
    public function delete($entity);
    public function getById($id);
}