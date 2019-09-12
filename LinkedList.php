<?php
include_once "Node.php";

class LinkedList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NUll;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NUll) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NUll;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != Null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function readNode($nodePos)
    {
        if ($nodePos <= $this->count) {
            $current = $this->firstNode;
            $pos = 1;
            while ($pos != $nodePos) {
                if ($current->next == NULL) {
                    return null;
                } else {
                    $current = $current->next;
                }
                $pos++;
            }
            return $current->data;
        } else {
            return NULL;
        }
    }
}