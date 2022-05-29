<?php 
abstract class Database {


    public static function getConnection()
    {
        $database = "omnes_sports";
        $db_handle = mysqli_connect('localhost', 'root', '' );
        $db_found = mysqli_select_db($db_handle, $database);
        if($db_found){
         
            return $db_handle;
        }
        return null;
       
    }

    public function createQuery(string $sql,$db_handle) 
    {
       
        $result = mysqli_query($db_handle, $sql);
        
        return $result;
      

      
    }


}





?>