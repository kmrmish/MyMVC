<?php
class ProductObject{

	public $id;
	public $name;
	public $category;
	public $price;
	public $size;
	public $image;	

	function getId(){
   		return $this->id;
   	}

   	function setId($id){
   		$this->id = $id;
   	}

   	function getName(){
   		return $this->name;
   	}

   	function setName($name){
   		$this->name = $name;
   	}

   	function getCategory(){
   		return $this->category;
   	}

   	function setCategory($category){
   		$this->category = $category;
   	}

   	function getPrice(){
   		return $this->price;
   	}

   	function setPrice($price){
   		$this->price = $price;
   	}

   	function getSize(){
   		return $this->size;
   	}

   	function setSize($size){
   		$this->size = $size;
   	}

   	function getImage(){
   		return $this->image;
   	}

   	function setImage($image){
   		$this->image = $image;
   	}

   	function save(){
   		$productService = new ProductService();
   		return $productService->saveProduct($this);
   	}

   	function delete(){
   		$productService = new ProductService();
   		$productService->deleteProduct($this);
   	}


}