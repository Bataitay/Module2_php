<?php
class LinkList
{
    private $firstNode;
    Private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode ;
        $this->lastNode;
        $this->count =0;
    }
    
    public function insertFirst($data):void
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if(is_null($this->lastNode)){
            $this->last =$node;
        }
        $this->count++;
    }
    public function insertLast($data):void{
        if( !is_null($this->firstNode)){
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else{
            $this->insertFirst($data);
        }
    }
    public function totalNodes():int {
        return $this->count;
    }
    public function readList(): array{
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}