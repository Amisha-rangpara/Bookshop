<?php 
class feedback
    {   
        public $db; // Declare the property
        
        function __construct(){        
            $conn=mysqli_connect('localhost','root','','bookshop');
            $this->db=$conn; // Initialize the property
            if(mysqli_connect_error()){
                echo 'failed to connect'.mysqli_connect_error();
            }
        }
        function insert()
        {
            $sql  = "INSERT INTO `feedback`() VALUES ()";       
            $res=mysqli_query($this->db,$sql);
            return $res;
        }
        
        function view()
        {
                
            $sql = "SELECT * FROM `feedback`";
            $res = mysqli_query($this->db,$sql);
            return $res;
        }
    }
    $obj = new feedback();
    if (isset($_POST['submit'])) {

        $result=$obj->insert();
        
        if ($result==true) {
          header("Location:");
          die();
        }else{
          $errorMsg  = "error to insert data";
          echo $errorMsg;
        }   
    }

?>