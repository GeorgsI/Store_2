<?php session_start();
include_once('routes.php');
        spl_autoload_register(function($class){
            $class =  str_replace('\\', '/', strtolower($class)).'.php';
                    
           
            //echo $class;
            if (file_exists($class))
                return include_once($class);
                //echo 1;
            else
               //echo 2;
                return false;
            
            
        });
        
        //use Core\Verification;
       
       
        
        
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="icon-fonts/css/all.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="wrepper">
        <?php
       
        
        
      
         /* $clean = [];
            if(!empty($_GET)){
                for($i = 0; $i<count($_GET); $i++ ){

                  array_push($clean, Verification::out($_GET[$i]));

                }
            }
            var_dump($clean);
  
            $r = new router\Router( $clean , $return);
            $r->getRoute(); 
           */
            
        
        
        
        
     //if(isset($_GET)){
            $r = new router\Router( $_GET, $return);
            $r->getRoute(); 
            var_dump($_GET);
           
          
           
   //  } 

        
     
     
     
     
     
    $baseURL = $_SERVER['REQUEST_URI'];
    $url = dirname($_SERVER['SCRIPT_NAME']);
    
    
    if(strpos($url, $baseURL)===0){
        
        $url = substr($url, strlen($baseURL));
    }
    echo  $url ;
    
     
     
      echo "<p>".$_SERVER['REQUEST_URI']."</p>";
      echo "<p>".dirname($_SERVER['SCRIPT_NAME'])."</p>";  
        ?>
        </div>    
        <script src="javaScript/script.js"></script>
        <script src="javaScript/ajax.js"></script>
        <script src="javaScript/ajaxBasket.js"></script>
    </body>
</html>
