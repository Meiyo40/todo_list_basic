<?php

namespace app\model\entity;

class Item
{
    private $id;
    private $title;
    private $content;
    private $isDone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * @param mixed $isDone
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }
}
