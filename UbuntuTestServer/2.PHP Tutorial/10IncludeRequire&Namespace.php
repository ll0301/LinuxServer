// 1. include ?
// php 에서는 필요에 따라서 다른 php 파일을
// 코드안으로 불러와서 사용할 수 있다.
// ex
<?php
function welcome(){
    return 'Hello world';
}
echo welcome();
?>
// 위의 코드는 아무런 문제가 없으나
// welcome 함수가 자주 사용되는 것이라 가정했을 때
// 필요할때마다 함수를 정의해서 사용하는 것은 불편하다.
// 이럴 때 include 가 필요하다.

// 2. include, require 사용하기
// includeTest1.php
<?php
function welcome(){
    return 'Hello world';
}
?>
// includeTest2.php
<?php
include 'includeTest1.php';
echo welcome();
?>
// 함수 welcome 을 외부파일로 분리했다.
// include 는 외부의 php 파일을 로드할 때 사용하는 명령이다.
// 외부 php 파일을 로드하는 방법으로 4가지 형식을 제공한다.
// include , include_once , require, require_once
// include 와 require 의 차이점은
// 존재하지 않는 파일의 로드를 시도했을때
// include -> 경고
// require -> fatal error
// 의 차이이다.
// fatal error 가 보다 심각한 에러이기때문에
// require 가 보다 엄격한 로드 방법이다.
// _once 는 파일을 로드할때 단 한번만 로드하면 된다는 의미이다.


// 3. namespace
// 파일은 데이터를 보관하고 있는 일종의 컨테이너다.
// 그리고 컨테이너는 파일명으로 식별이된다.
// 파일수가 많아지면서 파일을 관리하는것이 점점 어려워진다.
// 그래서 고안된 것이 디렉토리이다.
// 디렉토리로 인해 파일명의 충돌을 회피할 수 있게 된 것이다.
// 하나의 애플리케이션에는 다양한 모듈을 사용하게 된다.
// 모듈이 서로다른 개발자에 의해서 만들어지기 때문에
// 같은 이름을 쓰는 경우가 생길 수 있다.
// 이런 경우 먼저 로드된 모듈은 나중에 로드된 모듈에 의해 덮어쓰기된다.
// 이에대한 대책으로 네임스페이스가 필요하게 되는 것이다.
// namespaceTest1.php
<?php
namespace language\en;
function welcome(){
    return 'Hello';
}
?>
// namespaceTest2.php
<?php
namespace language\ko;
function welcome(){
    return '안녕';
}
?>
// namespaceTest3.php
<?php
namespace language\sp;
function welcome(){
    return 'Hola';
}
namespace language\it;
function welcome(){
    return 'Chao';
}
?>
// namespaceTest4.php
<?php
require_once 'namespaceTest1.php';
require_once 'namespaceTest2.php';
require_once 'namespaceTest3.php';
echo language\ko\welcome();
echo language\en\welcome();
echo language\sp\welcome();
echo language\it\welcome();
?>

// namespace 가 없다면
// 이러한경우 두가지 파일 모두 welcome 이라는 함수를 쓰기 때문에
// 에러를 발생 시킨다.
// php 는 함수의 중복선언을 허용하지 않는다.
// namespaceTest3.php 처럼
// 하나의 파일에 복수의 네임스페이스를 사용할수도 있다.

// 네임스페이스는 함수 뿐만 아니라 클래스와 상수에 대해서도 사용할 수 있다.
