// 1. 함수
// 함수는 로직을 재실행 할 수 있도록 하는 것으로 코드의 재사용성을 높인다.
// function 함수명 ([인자...[인자]]){
  코드
  return 반환값;
}

// 2. 함수의 정의와 호출
// function 뒤에 함수명이 있고 괄호가 따라온다.
// 괄호안에는 함수에 대한 입력값을 담을 변수가 온다.
// 복수일때는 콤마로 구분한다.
// 중괄호에 호출되었을때 실행될 코드가 온다.

// numberingFunc.php
<?php
function numbering(){
    $i = 0;
    while ($i < 10) {
        echo $i;
        $i += 1;
    }
}
numbering();
numbering();
?>
// numbering() 이라는 함수는 i를 반복문으로 돌려 0부터 9까지 출력하는 일을 한다.
// 2번 호출되었으니 0부터 9까지 1번 0부터9까지 1번 해서 총 2번 출력된다.
// 함수기능이 없다면 함수 내부에 있는 코드를 2번 반복해서 기입해야한다.
// 이것이 함수의 재활용성이다.

// 3. return
// 함수 내에서 사용한 return 은 뒤에 따라오는 값을 결과로 반환한다.
// 그와 동시에 종료시킨다.
//returnFunc.php
<?php
function get_member1(){
    return 'kim';
}


function get_member2(){
    return 'lee';
}

echo get_member1();
echo ',';
echo get_member2();
?>
// kim,lee 가 출력된다.
// 각각의 함수가 kim 과 lee를 리턴값으로 지정해 두었기 때문이다.


// 4.argumentFunc.php
<?php
function get_argument($arg){
    return $arg;
}
function get_arguments($arg1,$arg2){
  return $arg1+$arg2;
}

print get_argument("kim");
print get_argument(1);
print get_arguments(1,2);
?>
// get_argument 함수는
// 입력값을 받아서 해당 입력값을 reutn 하는 함수이다.
// kim 이라는 문자열과 1 이라는 int 데이터가 입력되었고

// get_argument 함수는 숫자를 입력받아 두개를 합친값을 리턴하는 함수이다.
// 복수의 값이 인자로 입력될 수 있다.
// kim13이 출력된다.

// 5.defaultArgFunc.php
<?php
function get_arguments($arg1=100){
    return $arg1;
}
echo get_arguments(1);
echo ',';
echo get_arguments();
?>
// 인자값에 기본값을 줄 수 있다.
// 인자값을 입력받았을 땐 입력값으로 출력되고
// 입력값이 없을 때는 기본값이 출력된다.
// 1,100 이 출력될 것이다.
