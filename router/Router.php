<?php
namespace router;

class Router implements IRouter{
    private $routes;
    private $method;
    
    public function __construct($method, $routes) {
        $this->routes = $routes;
        $this->method = $method;

    }
    public function getRoute(){
        
        //var_dump($this->routes);
       var_dump($this->method);
       
       
       
       
        
       var_dump( implode('/', $this->method));
       
        $strRow = implode('/', $this->method);
        foreach($this->routes as $reg => $value) {
            
            if(preg_match($reg, $strRow)){
                //var_dump($value);
                if(isset($this->method['num']))
                {
                    //var_dump( $this->method['num']);
                    $value[2]['num']=$this->method['num'];
                   // echo $value[2]['num'];
                }

                new \app\controllers\Controller($value);
            }
            /*else{
               
                exit('404');
            }*/
            
            
            
        } 
        
      
        
    }
    
}
