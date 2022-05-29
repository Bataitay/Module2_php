<?php
class ArrayList 
{
    private $arrayList = [];
    private $limit = 0;

    public function __construct(){
        //  $this->arrayList =$arrayList;
        
    }

    public function add($item){
        array_push( $this->arrayList,$item);
        
    }
    public function remove($index){
        if(array_key_exists($index,$this->arrayList)){
            unset($this->arrayList[$index]);
        }

    }
    public function updated($index,$item){
        if(array_key_exists($index,$this->arrayList)){
            $this->arrayList[$index] = $item;
        }
    }
    public function size(){
        return count($this->arrayList);
    }
    public function isFull(){
        return $this->size()==$this->limit;
    }
    public function getByIndex($index){
        if(array_key_exists($index,$this->arrayList)){
            return $this->arrayList[$index];
        }else{
            echo" khong ton tai phan tu tai vi tri" .$index ;
        }
    }
    public function addAtPos($item,$index){
        /*
        array_splice(array,index, offset,lenght, replacement);
        array: mang truyen vao
        offset: tu chi so nao;
        lenght: xoa bao nhieu(hien tai xoa 1 phan tu)
        replacement: thay the cai gi
        */
        
        array_splice($this->arrayList,$index,0,$item);

    }
    public function contains($item){
        return array_search($item,$this->arrayList);
    }
    public function get($index){
        
    }
    public function toArray(){

    }
    public function shiftItemsUp($startIndex,$neđIdext){
        
    }
    public function shiftItemsDown($startIndex,$neđIdext){
        
    }


}