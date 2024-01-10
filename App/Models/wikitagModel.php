<?php
class WikiTag {
    public $wikiID;
    public $tagID;

    public function __construct($wikiID, $tagID) {
        $this->wikiID = $wikiID;
        $this->tagID = $tagID;
    }
}