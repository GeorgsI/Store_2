


if(document.querySelector(".Authorization-btn")){
    const AuthorizationBtn = document.querySelector(".Authorization-btn");

    AuthorizationBtn.onclick = () => {
        let requestData = {
            login : document.getElementById("login").value,
            password : document.getElementById("password").value
        };
        sendAjax(requestData,'response.php','POST');  
    };   
}
if(document.querySelector(".Registration-btn")){
    
    const RegistrationBtn = document.querySelector(".Registration-btn");
    RegistrationBtn.onclick = () => {
        
        
        
        let requestData = {
            name: document.getElementById("name").value,
            surname: document.getElementById("surname").value,
            patronymic: document.getElementById("patronymic").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            address: document.getElementById("address").value,
            login : document.getElementById("login").value,
            password : document.getElementById("password").value
        };
        
        
        
        sendAjax(requestData,'responseRegister.php','POST');  
    };   
    
    
}



function sendAjax(data, response, metod){
    sendRequest(data, response, metod);
};












function sendRequest(data, response, metod)
{
    let xhr = new XMLHttpRequest();
    //данные формы
    /*let  requestData = {
        login : document.getElementById("login").value,
        password : document.getElementById("password").value
    };*/
    
    //преобразуем их в JSON
    let requestJSON = JSON.stringify(data);
    console.log(typeof(requestJSON));
    
    
    xhr.open(metod, response, true);
    //устанавливаем заголовок формата данных json
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = updateDocument; //имя функции обработки ответа сервера

    function updateDocument() {
        if (xhr.readyState == 4) { //проверяем статус завершения запроса - 4
            if (xhr.status == 200) { //проверяем код состояния 200 - OK
                let answerJSON = xhr.responseText;//ответ в JSON
                //парсим JSON, получаем аналог объекта PHP
                let  answer = JSON.parse(answerJSON);
                if (answer.error) {
                    document.getElementById("autherror").innerHTML = answer.error + ": " + answer.message;
                    document.getElementById("auth").innerHTML ='';
                } else {
                    document.getElementById("auth").innerHTML = answer.message;
                }
            }
        }
    }
    xhr.send(requestJSON); //посылаем данные методом POST
} 























/*function sendRequest()
{
    console.log(1);
    let xhr = new XMLHttpRequest();
    let formData = new FormData(formAuthorization);
    
    console.log(JSON.stringify(formData));
    xhr.open('POST', 'response.php', true);
    xhr.onload = function () // функция обработки ответа сервера
    {
        if (xhr.status == 200) //проверяем код состояния 200 - OK
        {
            document.getElementById("auth").innerHTML = xhr.response; //заменяем форму на ответ сервера
        }
    };
    xhr.send(formData); //посылаем данные методом POST*//*
}*/

