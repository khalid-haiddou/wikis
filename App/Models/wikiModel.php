<?php
class Wiki {
    public $id;
    public $title;
    public $description;
    public $content;
    public $creationDate;
    public $updateDate;
    public $authorID;
    public $categoryID;

    public function __construct($id, $title, $description, $content, $creationDate, $updateDate, $authorID, $categoryID) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
        $this->creationDate = $creationDate;
        $this->updateDate = $updateDate;
        $this->authorID = $authorID;
        $this->categoryID = $categoryID;
    }
}
