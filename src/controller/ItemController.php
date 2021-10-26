<?php

use app\model\repository\iDatabaseImpl;

class ItemController {
    private $repository;

    public function __construct(iDatabaseImpl $repository)
    {
        $this->repository = $repository;
    }

    public function getAll() {
        //must return a list of pushed items
        $lists = $this->repository->getAll();

        //debug print all title from pushed items, if exist;
        foreach($lists as $item) {
            echo $item->getTitle()."\n";
        }
    }

    public function delete($id) {
        $this->repository->delete($id);
    }

    public function postItem() {
        //simulate input
        for($i = 0; $i < 4; $i++) {
            $itemToCreate = array(
                "title" => "My List Title " . $i,
                "content" => "My list content" .$i,
                "isDone" => false
            );

            $this->repository->insert($itemToCreate);
        }
    }
}
