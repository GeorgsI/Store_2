<?php
namespace app\views\templates;


class PageCategories implements View{
    public function render($data)
    {
        
        /*echo $data . '<br/>';
        echo '<a href="index.php?page=page2">page 2</a> <a href="index.php?page=page3">page 3</a>';*/
        
        
        
        $header = new templates\Header();
        $header->render();
        echo 'PAGE Промо<br/>';
        
        echo "<main class = 'main'>";
        
       
        
        
        
        
        
        var_dump($data);
        
        
       
        
        
        echo "</main>";
        
        $footer = new templates\Footer();
        $footer->render();
        
        echo "<script src='javaScript/ajax.js'></script>";
    }
}