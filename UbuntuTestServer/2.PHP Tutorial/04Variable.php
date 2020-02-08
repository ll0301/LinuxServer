<html>
<body>
<?php
$a=1;
echo $a+1; #2
echo "<br />";
$a=2;
print $a+1; #3
?>
</body>
</html>
// 변수는 문자나 숫자 같은 값을 담는 컨테이너이다.
// -> $a=1; -> a 가 변수가된다.
// 담겨지는 값은 다른 값으로 바꿀 수 있다.
// 위의 예제는 2와 3이 출력되는 예제이다.
// 처음에 a에 1 이 대입되었고
// 뒤에는 2로 교체되었기 때문에 값이 바뀌었다.



// 다음 예제는 변수에 string 값을 넣어보았다.
<html>
<body>
<?php
$first = "coding";
echo "<br />";
echo $first." everybody";
?>
</body>
</html>

// 변수는 코드의 재활용성을 높여준다.
<html>
<body>
<?php
$a = 100;
echo "<br />";
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10 ;
print $a.'<br />';
?>
</body>
</html>
// $a에 변수를 할당하고 여러가지 계산을 하는 예제이다.
// $a 에 1000을 넣어도 10000을 넣어도 활용이 가능해진다.
// 변수 덕분이다.


//상수
<html>
<body>
<?php
define('TITLE', 'PHP Tutorial');
echo TITLE;
define('TITLE', 'JAVA Tutorial');
?>
</body>
</html>
// 상수를 정의할때는 define을 사용한다.
// 첫번째 인자로 상수 이름이 사용되고
// 두번째 인자로 상수의 값이 사용된다.
// 상수에 저장된 값을 사용하기 위해서는
// 인용부호가 없이 상수의 이름을 적어주면 도니다.

// 위의 코드는 오류를 발생시킨다.
// 상수는 한번 정의되면 값이 변경되지 않음을 보증한다.
// 이러한 성질을 활용해 설정 값과 같은 용도로 상수를 주로 사용한다.


// 변수에 담긴 데이터 형을 검사하고 변경하기
// 변수에 담긴 데이터형을 검사할때
// gettype 과 settype 을 사용한다.

<html>
<body>
<?php
$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
?>
</body>
</html>

// integer 와 double 이 출력된다.
// $에 어떤 데이터형이 담겨있는지 알아보기 위해서 gettype 을 사용했다.
// var_dump 와 비슷하지만 var_dump 는 데이터형에 대한 검사와함께 출력까지 강제하기 때문에
// 활용도가 떨어진다.
// settype 은 첫번째 인자로 주어진 값을 두번째 인자에 해당하는 데이터 형으로 변경해준다.


// php는 다른 언어들과는 다르게 변수에 담길 값의 데이터형을 미리 지정할 필요가 없다.

<html>
<body>
<?php
$a = 100;
$a = "test";
$a = array(1,2,3);
?>
</body>
</html>

// 위의 코드는 php 에서 아무 문제가 없다.
// php 장점이면서 단점이기도 하다.
// $a 를 선언할 때 변수에 어떤 값이 들어가야 하는지 미리 지정할 필요가 없다.
// 필요에 따라서 다른 형식의 데이터를 넣으면 변수의 데이터 형식이 자동을 ㅗ변경된다.
// 매우 편리하지만 어떠한 데이터가 담겨있는지 예측할 수 없기 때문에
// 오류가 발생할 가능성이 높아지기도 한다.


// 가변변수
// 변수의 이름을 변수로 변경할 수 있는 기능이다.
<html>
<body>
<?php
$title = 'subject';
$$title = 'PHP tutorial';
echo '<br />';
echo $subject;
?>
</body>
</html>

// $타이틀의 값이 subject 이다.
// 그런데 $$tiltle 이라고 2번 표시가 되어있는부분이있다.
// 이것은 'PHP tutorial' 이라는 값이 변수 $tilte 의 값이 아니라
// $subject 의값이라는 의미이다.
// 변수 이름을 동적으로 만들 수 있다는 점은 php 가 가진 유연함을 보여준다.
