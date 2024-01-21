<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<?php
$hostname   = 'localhost';
$user       = 'root';
$password   = '';
$db         = 'asingmen_db';
$con        = new mysqli($hostname, $user, $password, $db);


function get_logo()
{
    global $con;
    $sql = "SELECT * FROM tbl_logo ORDER BY id DESC LIMIT 1";
    $res = $con->query($sql);
    $row = mysqli_fetch_assoc($res);
    echo $row['thumbnial'];
}

?>