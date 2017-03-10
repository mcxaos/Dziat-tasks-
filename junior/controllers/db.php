<?
class db{
  private $host="127.0.0.1";
  private $username="root";
  private $password="root";
  private $db="Dziat";

  public function getConn(){
    try{
      $link = mysqli_connect($this->host, $this->username, $this->password);
      if (!mysqli_select_db($link,$this->db)){
                throw new Exception(mysqli_error());
            }
            return $link;
    }
    catch (Exception $e){
            return $e->getMessage();
        }
  }     
}
?>