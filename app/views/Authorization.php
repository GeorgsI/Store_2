<?php
namespace app\views;

class Authorization implements View{
    public function render($data)
    {
    
       
      
        $header = new templates\Header();
        $header->render();
        
        echo 'PAGE 2<br/>';
        echo "<main class='main'>";
        
        
        $be = new templates\FormAuthorization();
        $be->render();
        
         echo '</main>';
        
        $be = new templates\Footer();
        $be->render();
   
    }
    
    
    
}
