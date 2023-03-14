<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Montserrat, sans-serif;
    background-image: url(images/reg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
a{
    color: #7c9ab7;
    font-weight: bold;
    text-decoration: none;
}
p{
    margin: 10px 0;
}
form{
    display: flex;
    flex-direction: column;
    width: 400px;
}
input{
    margin: 10px 0;
    padding: 10px;
    border: unset;
    border-bottom: 2px solid #e3e3e3;
}
button{
    padding: 10px;
    background: #e3e3e3;
    border: unset;
    cursor: pointer;
}
.msg{
    border: 2px solid #ffa908;
    border-radius: 3px;
    padding: 10px;
    text-align: center;
    font-weight: bold;
}
label
{
    font-weight: bold;
}
    </style>
</head>
<body>
<form action="signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Телефон</label>
        <input type="text" name="phone" placeholder="Введите свой телефон">
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите адрес своей почты">
        <label>Турнир</label>
        <input type="text" name="tourn" placeholder="Введите турнир">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>