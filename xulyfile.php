<?php
$file = @fopen('data.txt', 'r');
if (!$file)
    echo "Mở file không thành công ";
else {
    echo "mở file thành công ";
}

$file = "data.txt";
if(is_writable($file)) {
  echo ("$file có thể ghi ");
} else {
  echo ("$file không thể ghi ");
}

$file = @fopen('data.txt', 'w');
if (!$file)
    echo "Mở file không thành công ";
else {
    $data = 'xin chào';
    fwrite($file, $data);
    fclose($file);
    unlink($file);
}
?>