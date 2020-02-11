// 1. 현재 디렉토리와 디렉토리 변경
//DirectoryTest.php
<?php
echo getcwd().'<br />';
chdir('../');
echo getcwd().'<br />';
?>
// getcwd() 로 현재 디렉토리를 알 수 있고
// chdir() 을 이용해서 디렉토리를 변경할 수 있다.

2. 디렉토리 탐색
<?php
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>
// scadir() 은 디렉토리를 탐색하는 기능이다.
// 첫번째 인자는 탐색할 디렉토리 경로이고 두번째 인자는 정렬방법이다.

3. 디렉토리 생성
<?php
mkdir("1/2/3/4", 0700, true);
?>
// 첫번째는 디렉토리이름, 두번째는 디렉토리 권한이다.
// 세번째는 true로 할때 첫번째 인자의 경로가 여러개일때
// 한번에 생성하는 기능을 제공한다. 
