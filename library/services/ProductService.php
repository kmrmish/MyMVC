<?php
// class for database connection
class ProductService
{
	public $connection;

	public function __construct() {
		$this->db = get_db_connection()->db;
	}

	public function saveProduct($product){
		$sql = "insert into product values('',";
		$sql .="'".$product->getName()."',";
		$sql .="'".$product->getCategory()."',";
		$sql .="'".$product->getPrice()."',";
		$sql .="'".$product->getSize()."',";
		$sql .="'".$product->getImage()."'";
		$sql .=")";

		try {
		   	$stmt = $this->db->prepare ( $sql );
		   	$stmt->execute ();
		   	return $this->db->lastInsertId ();
		} catch(Exception $e) {
		    echo 'Exception -> ';
		    var_dump($e->getMessage());
		}
		
	}

	public function getProductList(){
		$sql = "select * from product";
		try {
		   	$stmt = $this->db->prepare ( $sql );
		   	$stmt->execute ();
		   	$rows = $stmt->fetchAll ( PDO::FETCH_ASSOC );
		   	$productList = array();
		   	foreach($rows as $row){
		   		$productList[] = $this->getProductObjectFromArray($row);
		   	}
		   	return $productList;
		} catch(Exception $e) {
		    echo 'Exception -> ';
		    var_dump($e->getMessage());
		}
	}

	public function deleteProduct($product){

	}

	public function getProductById($id){

	}

	public function getProductObjectFromArray($productArray){
		$product = new ProductObject();
		$product->setId($productArray['id']);
		$product->setName($productArray['name']);
		$product->setCategory($productArray['category']);
		$product->setSize($productArray['size']);
		$product->setPrice($productArray['price']);
		$product->setImage($productArray['image']);
		return $product;
	}
}