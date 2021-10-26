<?php

use app\model\repository\ItemRepository;
require_once (__DIR__."/src/model/repository/ItemRepository.php");

$itemRepository = new ItemRepository();

//simulate input
for($i = 0; $i < 10; $i++) {
    $itemToCreate = array(
        "title" => "My List Title " . $i,
        "content" => "My list content" .$i,
        "isDone" => false
    );

    $itemRepository->insert($itemToCreate);
}

//must return a list of pushed items
//$lists = $itemRepository->getAll();

//debug print all title from pushed items, if exist;
function printAll($items) {
    foreach($items as $item) {
        echo $item->getTitle();
    }
}

