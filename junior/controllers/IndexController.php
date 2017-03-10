<?php
include_once('db.php');


class IndexController
{
	private $conn,$count,$pgs,$num;

	private  $limit = 2, $page = 1;

	function __construct() {
    	$db = new db();
    	$this->conn = $db->getConn();
    	$this->render();
   	}

	public function render(){

		if(!$this->InsertProduct()){
			echo " Try again leter";
		}
		
		$productsList = $this->getProducts();
		$typeList = $this->getTypes();
		$typePriceList = $this->TypesPriceSUM();
		include_once('views/view.php');
	}

	public function TypesPriceSUM(){
		$query ="Select  t.name as tname, SUM(p.prices) as price
      			FROM  types t 
      			LEFT JOIN  product_type p_t ON p_t.type_id=t.id
      			LEFT JOIN products p ON  p_t.prouduct_id=p.id
                GROUP by t.name";
      	$result = mysqli_query($this->conn,$query);
      	if (!$result)  die( mysqli_error($this->conn));
      	return $result;
	}


	
	public function getProducts(){
		$this->count = $this->getProductsCount();
		$this->Pagination();
		$query ="Select p.names as pname,p.prices as price, t.name as tname
      			FROM products p
      			LEFT JOIN  product_type p_t  ON p_t.prouduct_id=p.id
      			LEFT JOIN  types t ON p_t.type_id=t.id"
      			." Limit ".$this->num.", ".$this->limit;
      	$result = mysqli_query($this->conn,$query);
      	if (!$result)  die( mysqli_error($this->conn));
      	return $result;
	}



	public function getProductsCount(){
		$count = mysqli_fetch_assoc(mysqli_query($this->conn,
				 "SELECT count(*) as C FROM products "));
      	return  $count['C'];
	}



	private function Pagination(){
        $pageshow = 2;
        if(isset($_GET['page']) && (int) $_GET['page'] > 0 
        		&& (int) $_GET['page'] < $this->count){
          	$this->page=(int) $_GET['page'] ;
        }        
        /* how namy pages */
        $pages=ceil ( $this->count / $this->limit);
        $this->num=$this->limit*($this->page-1);
        /* Pagination */
        for($i=$this->page-$pageshow; $i<= $this-> page + $pageshow;$i++)
        {
          if($i >=1 && $i<= $pages)
            $this->pgs[]=$i;
        }
      }

	private function getTypes(){
		$query = "SELECT * FROM types";
		$result = mysqli_query($this->conn,$query);
		if (!$result)  die( mysqli_error($this->conn));
      	return $result;
	}

	private function InsertProduct(){
		$name = htmlspecialchars($_POST['name']);
		$price =  htmlspecialchars($_POST['price']);
		$type = htmlspecialchars($_POST['types']);
		if($name != NULL && $price != NULL  && $type != NULL)
		{
			$query ="INSERT INTO `products`( `names`, `prices`) VALUES ('$name','$price')";
			$result = mysqli_query($this->conn,$query);
			if (!$result) die( mysqli_error($this->conn));
			else{
			 	$id = mysqli_insert_id($this->conn);
				$query ="INSERT INTO `product_type`( `prouduct_id`, `type_id`) VALUES ('$id','$type')";
				$result = mysqli_query($this->conn,$query);
				if (!$result) die( mysqli_error($this->conn));
			}
		}
		return true;
	}
}