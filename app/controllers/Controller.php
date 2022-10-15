<?php
namespace app\controllers;

class Controller {
    private $page = 'page1';//имя страницы по умолчанию page1
    private $action = 'read'; //CRUD-операции, по умолчанию read
    private $parameters; //массив остальных параметров запроса
    
    
    public function __construct($arr)
    {
        $this->parameters = $arr;
        $this->analyzeRequest($this->parameters);
    }
    
    
     protected function analyzeRequest()
    { //router
        //var_dump($this->parameters);
        
        if (!empty($this->parameters[0]))
        { 
            $this->page = $this->parameters[0];
            unset($this->parameters[0]);
        }
        if (!empty($this->parameters[1]))
        {   $this->action = $this->parameters[1];
            unset($this->parameters[1]);
        
        }
        //var_dump($this->parameters);
        // var_dump($this->action);
        //var_dump($this->page);
        $this->run($this->page, $this->action, $this->parameters);
         
       
    }

    public function run()
    {
        //Модель:
        $className = '\app\models\\'.$this->page;
        $model = new $className();
        $model->execute($this->action, $this->parameters);
        
        
        //Вид:
        $className = '\app\views\\'.$this->page;//имя класса view с пространством имен (например /views/page1)
        $view = new $className();
        $view->render($model->getData());
        
        
        
       /*$className = "\Models\" . $this->page;
        
        echo  $className;
        
       /* $className = '\\Models\\' . $this->page;//имя класса модели с пространством имен (например /models/page1)
        $model = new $className();//создаем объект нужной модели
        $model->execute($this->action, $this->parameters);
       
        $className = '\\Views\\' . $this->page;//имя класса view с пространством имен (например /views/page1)
        $view = new $className();
        $view->render($model->getData());*/
    }
}
