// PHP 애플리케이션에 데이터 입력하기

// 1. 애플리케이션의 입력과 폼
// 프로그램은 입력값을 가질 수 있다.
// 입력값에 따라 동작방법이달라지거나
// 입력된 값을 저장/삭제/출력할 수 있다.
// PHP에서는 데이터를 어떻게 입력받는지 알아보자.

<?php
echo $_GET['id'].','.$_GET['password'];
?>

// 위의 코드를 get.php 로 리눅스서버에 저장하고
// 웹브라우저에서
// localhost/phptut/get.php?id=kim&password=111111
// 위와같이 주소창에 입력해보자
// kim,111111 이 출력될 것이다.
// lcoalhost/phptut/get.php 까지는 주소
// ? -> 주소와 입력 데이터의 구분자
// id=kim&password=111111 -> 입력 데이터이다.
// & -> 값과 값 사이의 구분자이다.

// 이렇게 전달받은 값에 따라서 다르게 동작하거나
// 다른 내용을 표시하거나 데이터 베이스에 저장할 수 도 있다.


// 2.HTML Form
// url에 직접 정보를 입력하는 것은 불편하다.
// 그래서 고안된 것이 HTML 의 폼이다.
<html>
<body>
    <form method="get" action="get.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>

// 폼이란 사용자가 입력한 정보를 받아서 서버로 전송하기 위한 html 의 태그이다.
// id와 passwrod 를 입력받는 입력 컨트롤이 포함되어 있다.
// 입력 컨트롤에 입력된 정보는 해당 컨트롤의 속성 name 의 값을 이름으로 데이터가 서버에 전달된다.
// 사용자가 submit 을 누르면 입력 컨트롤에 입력된 정보는
// 폼 태그의 action 속성에 지정된 url 로 전송된다.
// 이때 메소드에 지정된 방식에 따라서 get/post 방식으로 데이터가 전송된다.
// 리눅스서버에서 htmlForm1.html 을 만들고 값을 입력하고 전달해보자.
// submit 버튼을 눌렀을때 get.php 로 이동하여
// 입력한 값들이 출력되는 것을 확인할 수 있다.
// 또한, 주소창에도 id=입력값&password=입력값 이 표시된다.


// 3. post
// url 에 데이터를 첨부해 전송하는 방식 -> get
// http 메시지의 본문에 데이터를 포함해서 전송하는 방식 -> post
// 이러한 차이로 인해 get 은 정보에 대한 링크로 많이 사용되고
// post 는 사용자의 아이디나 비밀번호와 같은 데이터를 전송하는 방식으로 주로 사용된다.

// post.php
<?php
echo $_POST['id'].','.$_POST['password'];
?>

// htmlForm2.html
<html>
<body>
    <form method="POST" action="post.php">
        id :  <input type="text" name="id" />
        password :  <input type="text" name="password" />
        <input type="submit" />
    </form>
</body>
</html>

// form 태그의 action 에 메소드가 POST 로 바뀌었다.
// action 도 post.php 로 변경되었다.
// get.php 와 동일하게 출력하지만
// post.php는 주소창에 입력값이 표시되지 않는다.
