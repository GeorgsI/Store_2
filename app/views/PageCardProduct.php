<?php
namespace app\views;

class PageCardProduct implements View{
    public function render($data)
    {
        $header = new templates\Header();
        $header->render();
        
       
        echo "<main class='main'>";
        
       // var_dump($data);
        
        $cart = new templates\CardProduct();
        $cart->render($data);
       
        
        echo '</main>';
        
        $be = new templates\Footer();
        $be->render();

    }   
    
    
    
    
}
