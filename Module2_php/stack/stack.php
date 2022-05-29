<?php
class Queue
{
    protected $stack;
    protected $limit;
    public function __construct( $limit = 20){
        $this->limit = $limit;
        $this->stack =[];
    }
    function push($item){
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
        }
    
    function pop(){
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }function isEmpty(){
        return empty($this->stack);
    }function top(){
        return current($this->stack);
    }function isFull(): bool{
        //trả về độ dài stack=limit 
        if(count($this->stack)==$this->limit){
            return true;
        }
        return false;
    }
}
$mybooks = new Queue();
$mybooks->push(' văn ');
$mybooks->push(' sử ');
$mybooks->push(' địa ');
echo "<pre>";
 print_r($mybooks);
echo $mybooks->pop();
echo $mybooks->isEmpty();
echo $mybooks->top();
echo $mybooks->isFull();






