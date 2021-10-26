<?php

use app\model\repository\ItemRepository;
require_once (__DIR__."/src/model/repository/ItemRepository.php");

$itemToCreate = array(
    "title" => "My List Title",
    "content" => "My list content",
    "isDone" => false
);

$itemRepository = new ItemRepository();

$itemRepository->insert($itemToCreate);
