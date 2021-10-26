<?php

namespace app\model\repository;

require_once ("iDatabaseImpl.php");
require_once (__DIR__."/../entity/Item.php");
require_once (__DIR__."/../database/ConfigurationDatabase.php");
require_once (__DIR__."/../database/MySQLDatabase.php");

use app\model\database\ConfigurationDatabase;
use app\model\database\MySQLDatabase;
use app\model\entity\Item;

class ItemRepository implements iDatabaseImpl
{
    private $itemsId = 0;
    private $items = array();
    private $database;
    private ConfigurationDatabase $databaseConfiguration;

    public function __construct()
    {
        $this->databaseConfiguration = new ConfigurationDatabase(
            "myDbUser",
            "MyDbPassword",
            'mysql:host=localhost;dbname=simple_todo_list'
        );
        MySQLDatabase::setConfigration($this->databaseConfiguration);
        //$this->database= MySQLDatabase::connect();

    }
    public function getAll(){
                return $this->items;
    }

    public function insert($entity)
    {
        $id = $this->itemsId++;
        $item = new Item();
        $item->setId($id);
        $item->setTitle($entity["title"]);
        $item->setContent($entity["content"]);
        $item->setIsDone($entity["isDone"]);

        //$db = MySQLDatabase::connect();

        array_push($this->items, $item);
    }

    public function update($entity)
    {
        foreach ( $this->items as $item) {
            if ($item->getId() == $entity['id']) {
                $item->setTitle($entity["title"]);
                $item->setContent($entity["content"]);
                $item->setIsDone($entity["isDone"]);
            } 
        } 
    }

    public function delete($id)
    {
        
        foreach ( $this->items as $item) {
            if ($item->getId() == $id) {
                unset($this->items[$item->getId()]);
            } 
        } 

    }

    public function getById($id)
    {
        foreach ( $this->items as $item) {
            if ($item->getId() == $id) {
                return $item;
            } 
        } 
        return null;

    }
}
