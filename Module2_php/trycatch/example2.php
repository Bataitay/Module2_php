<?php
class customException  extends Exception {
    public function customMessage(){
        return $this->getMessage(). ' tại dòng:' . $this->getLine(). ' ' . $this->getFile(). ' ' . $this->getLine(). ' ' . $this->getMessage();
    }
}
function custom($a,$b) {
    
    if($b==0) {
      throw new customException("có lỗi rồi bạn ơi!!!", 1);
    }else{
        $result = $a / $b;
        return $result;
    }
}   

  try {
    custom(2,0);
    echo 'số b phải khác không';
  } catch(customException $e) { 
    echo 'Message: ' .$e->customMessage();
  } finally {
      echo " xử lí không thành công";
  }
  