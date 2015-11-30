<?php
class Shopcart{
    //product list
    public  $productList = array();
    public function checkProduct($product_id){
        for($i = 0; $i < count($this->productList); $i++ ){
            if($this->productList[$i]['id'] == $product_id)   
            return $i;
        }
        return -1;
    }
    //add to cart
     public function add($product){
        $i = $this->checkProduct($product['id']);
        if($i == -1)
        array_push($this->productList,$product);
        else 
        $this->productList[$i]['count'] += $product['count']; 
    }    
    //delete from cart
    public function delete($product_id){
        $i = $this->checkProduct($product_id);
        if($i != -1)
        array_splice($this->productList, $i, 1); 
    }  
    //product info
    public function show(){
      return $this->productList;
    }
}
?>