// 1.Array 생성
// arrayTest.php
<?php
$member = ['egoing', 'k8805', 'sorialgi'];
echo $member[0].'<br />';
echo $member[1].'<br />';
echo $member[2].'<br />';
?>

//2. 배열의 사용
// 배열의 진가는 반복문과 결합했을 때 나타난다.
// arrayTest2.php
<?php
function get_members(){
    return ['egoing', 'k8805', 'sorialgi'];
}

$members = get_members();

for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i]).'<br />';
}
?>
// 위 예제에서 주목해야 할 것은 반복문과 배열을 결합한 부분이다.
// 반복문을 이용해서 배열$members의 내용을 하나씩 꺼낸 후에
// 이름의 첫글자를 대문자로 바꿔 출력하고 있다.
// ucfirst() 메소드는 알파벳의 첫글자를 대문자로 만들어준다.

// 3. 배열의 조작
// arrayTest3.php
<?php

$arr = ['a', 'b', 'c', 'd', 'e'];

array_push($arr, 'f'); // 배열추가
var_dump($arr);
echo '<br />';

$arr = array_merge($arr,['g','h']); // 복수 배열추가
var_dump($arr);
echo '<br />';

array_unshift($arr,'z'); // 배열의 시작점에 아이템 추가
var_dump($arr);
echo '<br />';

array_splice($arr,3,0,'B') // 특정 부분 뒤에 아이템 추가
var_dump($arr);
echo '<br />';

array_shift($arr); // 첫번째 아이템 제거
var_dump($arr);
echo '<br />';

array_pop($arr); // 마지막 아이템 제거
var_dump($arr);
echo '<br />';

sort($arr); // 정렬
var_dump($arr);
echo '<br />';

rsort($arr); // 역정렬
var_dump($arr);
echo '<br />';
?>

// 4. 연관배열
// 위에서의 배열은 아이템에 대한 식별자로 숫자를 사용했다.
// 데이터가 추가되면 배열 전체에서 중복되지않는 인덱스가 자동으로 만들어져서
// 그 데이터에 대한 식별자가 되는것이다.
// php 에서는 인덱스로 문자를 사용하는것도 가능하다.
// arrayGrades.php
<?php
$grades = [];
$grades['kim'] = 10; // kim = key, 10 = value;
$grades['lee'] = 20;
$grades['park'] = 30;
var_dump($grades);
echo '<br />'.$grades['kim'];
echo '<br />'.$grades['lee'];
echo '<br />'.$grades['park'];
echo '<br />'."foreach".'<br />';
foreach ($grades as $key => $value) {
  echo"key: {$key} value:{$value}<br />";
}

?>
