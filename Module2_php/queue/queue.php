<?php
class Element
{
    public $value;
    public $next;
}
class Queue
{
    private $font = null;
    private $back = null;

    public function isEmpty()
    {
        return is_null($this->font);
    }
    
    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
$queue = new Queue();
// $queue->enqueue("start");
$queue->enqueue('Dương');
$queue->enqueue('Luy');
$queue->enqueue('cường');
$queue->enqueue('việt');
// $queue->enqueue("End");
echo "<pre>";
print_r($queue);
