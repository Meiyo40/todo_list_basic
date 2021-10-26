<?php

namespace app\model\repository;

require_once ("iDatabaseImpl.php");
require_once (__DIR__."/../entity/Item.php");

use app\model\database\ConfigurationDatabase;
use app\model\database\MySQLDatabase;
use app\model\entity\Item;

class ItemRepository implements iDatabaseImpl
{
    private $itemsId = 0;
    private $items = array();
    private ConfigurationDatabase $databaseConfiguration;

    public function __construct()
    {
        $this->databaseConfiguration = new ConfigurationDatabase(
            "myDbUser",
            "MyDbPassword",
            'mysql:host=localhost;dbname=simple_todo_list'
        );
    }

    public function insert($entity)
    {
        $id = $this->itemsId++;

        $item = new Item();
        $item->setId($id);
        $item->setTitle($entity["title"]);
        $item->setContent($entity["content"]);
        $item->setIsDone($entity["isDone"]);

        $db = MySQLDatabase::connect();

        array_push($this->items, $item);
        echo $this->items[0]->getTitle();
    }

    public function update($entity)
    {

    }

    public function delete($entity)
    {
        // TODO: Implement delete() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
}
