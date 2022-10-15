<?php
header("Content-type: application/json; charset=utf-8");
//Получаем данные запроса POST
//это не форма, поэтому они не попадают в $_POST
//получаем данные из php://input
$requestJSON = file_get_contents('php://input');


$requestData = json_decode($requestJSON);

if (!empty($requestData->login) && !empty($requestData->password)) {
    //конечно проверка должна быть по полной программе с организацией сессии, а не только на пустоту
    //если проверка успешна
    $answer['error'] = '';
    $answer['message'] =  $requestData->login . ', здравствуйте.';

}elseif(empty($requestData->password)){
    $answer['error'] = 'Ошибка при авторизации';
    $answer['message'] =  'Неверный пароль.';
   
}elseif(empty($requestData->login)){
    $answer['error'] = 'Ошибка при авторизации';
    $answer['message'] =  'Неверный логин.'; 
}
echo json_encode($answer);
