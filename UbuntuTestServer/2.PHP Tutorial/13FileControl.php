// 1. 파일복사
// fileCopy.php
<?php
$file = 'readme.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>

// 2. 파일삭제
// fileDelete.php
<?php
unlink('deleteme.txt');
?>

// 3. 파일읽기
// fileRead.php
<?php
$file = './readme.txt';
echo file_get_contents($file);
?>

// 4. 파일쓰기
// fileWrite.php
<?php
$file = './writeme.txt';
file_put_contents($file, 'coding everybody');
?>

// 5. 네트워크에서 데이터 읽어오기
// fileNetwork.php
<?php
$homepage = fread('http://php.net/manual/en/function.file-get-contents.php');
echo $homepage;
?>


// 6. 권한

// permissionRead.php
<?php
$filename = 'readme.txt';
if (is_readable($filename)) {
    echo 'The file is readable';
} else {
    echo 'The file is not readable';
}
?>

// permissionWrite.php
<?php
$filename = 'writeme.txt';
if (is_writable($filename)) {
    echo 'The file is writable';
} else {
    echo 'The file is not writable';
}
?>

// permissionExist.php
<?php
$filename = 'readme.txt';
if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename is not exists";
}
?>
