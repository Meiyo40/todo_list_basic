<?php

require_once (__DIR__."/src/model/repository/ItemRepository.php");
require_once (__DIR__."/src/controller/ItemController.php");

$repository = new \app\model\repository\ItemRepository();
$controller = new ItemController($repository);

$controller->postItem();
$controller->getAll();
$controller->delete(2);
echo "\n";
$controller->getAll();