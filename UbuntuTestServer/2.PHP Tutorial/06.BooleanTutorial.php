// 1. 변수와 비교연산자 그리고 조건문

// booleanTest1.html
<html>
<body>
    <form method="get" action="test.php">
        <input type="text" name="id" />
        <input type="submit" />
    </form>
</body>
</html>

// booltest1.php

<?php
if($_GET['id'] === 'kim'){
    echo 'right';
} else {
    echo 'wrong';
}
?>

// booleanTest1.html 에서
// id 값을 입력할 수 있다.
// booltest1.php 로 값을 전달하고
// booltest1.php 에서는 if 문을 사용해서
// 전달받은 값이 kim 일때와 아닐때를 구분하여 echo 를 출력한다.


// 2. 조건문의 중첩

// booleanTest2.html
<html>
<body>
    <form method="post" action="boolTest2.php">
        id :  <input type="text" name="id" />
        password : <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>

// boolTest2.php
<?php
if($_POST['id'] === 'kim'){
    if($_POST['password'] === '111111'){
        echo 'right';
    } else {
        echo 'password wrong';
    }
} else {
    echo 'id wrong';
}
?>
// id와 password 를 모두 받아서
// 두가지 다 비교하여 출력한다.


// 3. 논리연산자
<?php
if($_POST['id'] === 'kim' && $_POST['password'] === '111111'){
    echo 'right';
} else {
    echo 'wrong';
}
?>
// 위처럼 && 연산자를 사용하면 중첩된 if 문을 하나로 줄일 수 있다.


// 4. or
<?php
if($_POST['id'] === 'kim' or $_POST['id'] === 'k8805' or $_POST['id'] === 'sorialgi'){
    echo 'right';
} else {
    echo 'wrong';
}
?>
// or 연산자를 활용하였다.
// id 값을 전달받아서 3가지의 값을 비교할 수 있게된다.

 // 5. or  &&
 <?php
if(
    ($_POST['id'] === 'kim' or $_POST['id'] === 'k8805' or $_POST['id'] === 'sorialgi')
    and
    $_POST['password'] === '111111'
){
    echo 'right';
} else {
    echo 'wrong';
}
?>
// or 과 && 을 동시에 사용하였다.
// 3가지 아이디와 한개의 비밀번호를 활용하여 비교하는 예제이다.

// 6. !
<?php
if (!true and !true){
    echo 1;
}
if (!true and !false){
    echo 2;
}
if (!false and !true){
    echo 3;
}
if (!false and !false){
    echo 4;
}
?>
// ! -> 부정의 의미이다.
// boolean 값을 역전시킨다.
// 즉, true 를 fasle로 false 를 true 로 만든다.

// 조건문에 사용도리 수 있는 데이터는 꼭 boolean 만은 아니다.
// 숫자 0은 false 그외의 숫자는 true
// 값이 없는 배열, 빈문자열, null, 문자 0 등도 0으로 간주되어 false 를 반환한다.
