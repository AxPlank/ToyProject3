<?php

$conn = mysqli_connect("localhost", "root", "joongseok03", "toyproject3");

$id = mysqli_real_escape_string($conn, $_POST['add_id']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
$month = mysqli_real_escape_string($conn, $_POST['month']);
$day = mysqli_real_escape_string($conn, $_POST['day']);
$time = mysqli_real_escape_string($conn, $_POST['time']);

$sql = "
        SELECT id FROM data_storage WHERE id = '{$id}'
        ";
$test = mysqli_fetch_array(mysqli_query($conn, $sql));

if ($test['id'] == $id) {
    echo "
        <script> alert('이미 아이디가 존재합니다.') </script>
        ";
    echo '
        <p><a href = "toyproject3.php">처음으로</a>
        ';
}
else {
    if ($time == "") {
        $sql = "
        INSERT INTO data_storage(id, 년주, 월주, 일주) 
        VALUES('{$id}', '{$year}', '{$month}', '{$day}');
        ";
        mysqli_query($conn, $sql);
    }
    else {
        $sql = "
        INSERT INTO data_storage(id, 년주, 월주, 일주, 시주) 
        VALUES('{$id}', '{$year}', '{$month}', '{$day}', '{$time}');
        ";
        mysqli_query($conn, $sql);
    }
    header('Location: toyproject3.php');
}

?>