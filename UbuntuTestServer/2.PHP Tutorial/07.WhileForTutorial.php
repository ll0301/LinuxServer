// 1.while
// while (조건) { 코드 }

<?php
while(true) {
    echo 'coding everybody';
}
?>
//  위 코드는 무한루프를 발생시킨다.
<?php
while(false) {
    echo 'coding everybody';
}
?>
// 위 코드는 아무것도 출력하지 않는다.
// while 문은 조건이 참일때
// 중괄호 구간의 구문을 반복적으로 실행한다.
// 조건이 false 이면 반복문을 실행하지 않는다.
// 반복문에서 종료조건을 잘못 지정하면 무한반복이 되거나 실행되지 않는다.

// 지속여부 결정

//whileTest.php
<?php
# i의 값으로 0을 할당한다.
$i = 0;
# 종료조건으로 i의 값이 5보다 작다면 true, 같거나 크다면 false
while($i < 5){
    echo 'coding everybody';
    echo '<br />';
    # 반복문이 실행될 때마다 i의 값을 1씩 증가시킨다. 그 결과 i의 값이 5가 되면 종료조건이 false가 되면서 반복문이 종료된다.
    $i += 1;
}
?>
// i가 5가되면 종료된다. 즉, while 문이 5번 반복된다.
// coding everybody 가 5번 출력될 것이다.


// 2. for
// for(초기화; 반복지속여부; 반복실행){코드}
// forTest.php
<?php
for($i = 0; $i < 10; $i++){
    echo 'coding everybody'.$i."<br />";
}
?>
// 초기화 => $i = 0 => i가 0이고
// 반복지속여부 => $i < 10 => i가 10보다 작을동안에
// 반복실행 => $i++ => i에 1씩 더하겠다
// 즉, 10번 반복실행 한다는 의미이며
// 문자열이 10번 출력된다.

// 3.break
// 반복작업을 중단시키고 싶을때 사용한다.
//breakTest.php
<?php
for($i = 0; $i < 10; $i++){
    if($i === 5){
        break;
    }
    echo "coding everybody{$i}<br />";
}

?>
// i가 10보다 작을동안 반복되지만
// i 가 5가 되었을때 break 이 동작하면서 반복문을 빠져나온다
// 결과적으로 문자열이 5번 출력된다.

// 4.continue
//continueTest.php
<?php
for($i = 0; $i < 10; $i++){
    if($i === 5){
        continue;
    }
    echo "coding everybody{$i}<br />";
}
?>
// 숫자 5가 보이지 않을 것이다.
// continue 이후 구문이 실행되지 않기 때문이다.

// 4. 반복문 중첩
<?php
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        echo "coding everybody{$i}{$j}<br />";
    }
}
?>
// 반복문 안에 반복문이 나올 수 있다.
