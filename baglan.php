<?php
try{
   $db=new PDO("mysql:localhost=host; dbname=php examples; charset=utf8", 'root' , '');
 
}
catch(Exception $e){
    echo $e->getMessage();
}

?>