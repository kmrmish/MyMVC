<?php
class productController{
	
   public function add() 
   {
       	
       	$viewData = array();
       	if (!empty($_POST)) {
       		$productObj = new ProductObject();
       		$productObj->setName($_POST['name']);
       		$productObj->setCategory($_POST['category']);
       		$productObj->setSize($_POST['size']);
       		$productObj->setPrice($_POST['price']);
       		$productObj->setImage($_POST['image']);
       		$id = $productObj->save();
       		if(!empty($id)){
       			$viewData['successMsg']='Successfully saved!';
       		}
       	}
       	loadView("add.php", $viewData);
   }

   public function showList()
   {
      $productService = new ProductService();
      $productList = $productService->getProductList();
   		loadView("list.php",array('productList' => $productList));
   }
   
	
}