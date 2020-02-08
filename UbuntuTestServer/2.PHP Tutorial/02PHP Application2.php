// 2번째 애플리케이션
// -> cd /app/apache/htdocs/phptut
// vi helloworld2.php 생성
// 아래의 코드를 입력하고 저장
<html>
<body>
echo "Hello world"; // 문자열 출력
<?php // php 시작
echo "Hello world"; // 문자열 출력
?> // php 끝
</body>
</html>
// 웹 브라우져에서 실행
// 웹브라우저 -> 소스보기
<!--
<html>
<body>
echo "Hello world";
Hello world</body>
</html>
 -->
// echo "Hello world"
// Hello world
// 서로 다르게 출력된다.

// 해당 페이지가 php 확장자로 되어있기 때문에
// php 엔진이 해당 파일을 해석한다.
// php 문법 구분자 안의 내용만
// php 문법대로 해석이되어 실행이 된다.

// client hellowrd2.php 파일을 볼테야
// --> wb / url(phptut/helloworld2.php) -> window -> lan card
// 인터넷 --> os -> apache -> php engien
// helloworld2.php 실행 (php 애플리케이션)
// --> apache 에게 돌려줌
// --> os --> lancard  ... -> client 
// --> wb(웹브라우저) --> 화면에 출력
