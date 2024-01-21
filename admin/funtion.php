<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php
$hostname   = 'localhost';
$user       = 'root';
$password   = '';
$db         = 'asingmen_db';
$con        = new mysqli($hostname, $user, $password, $db);
session_start();


function register()
{
    global $con;
    if (isset($_POST['btn_register'])) {
        $name = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $profile = $_FILES['profile']['name'];
        if (!empty($name) && !empty($password) && !empty($email) && !empty($profile)) {
            $password = md5($password);
            $profile = date('YmdHis') . '-' . $profile;
            $path  = 'aseets/icon/' . $profile;
            move_uploaded_file($_FILES['profile']['name'], $path);

            $sql = "INSERT INTO `tbl_user`( `username`, `email`, `password`, `profile`) VALUES ('$name','$email','$password','$profile')";

            $res = $con->query($sql);

            if ($res) {
                header('Location: index.php');
                echo '<script>
                $(document).ready(function(){
                    swal({
                        title: "Success",
                        text: "Register SuccessFull",
                        icon: "success",
                        button: "ok"
                    });     
                });
               
            </script>';
            } else {
                echo '<script>
                $(document).ready(function(){
                    swal({
                        title: "Error",
                        text: "All file must be empty",
                        icon: "error",
                        button: "Try agian"
                    });     
                });
               
            </script>';
            }
        } else {
            echo '<script>
                $(document).ready(function(){
                    swal({
                        title: "Error",
                        text: "All file must be empty",
                        icon: "error",
                        button: "Try agian"
                    });     
                });
               
            </script>';
        }
    }
}
register();


function login()
{

    global $con;
    if (isset($_POST['btn_login'])) {
        $name_email = $_POST['name_email'];
        $password = md5($_POST['pass']);
        $sql = "SELECT id FROM `tbl_user` WHERE (`username` = '$name_email' OR `email` = '$name_email') AND (password = '$password')";
        $res = $con->query($sql);
        $row = mysqli_fetch_assoc($res);

        if (!empty($row)) {
            $_SESSION['user'] = $row['id'];
            header('Location: index.php');
        } else {
            echo '<script>
                    $(document).ready(function(){
                        swal({
                            title: "Error",
                            text: "Login nagin",
                            icon: "error",
                            button: "Try agian"
                        });     
                    });

                </script>';
        }
    }
}

login();


function logout()
{
    if (isset($_POST['acceptlogout'])) {
        unset($_SESSION['user']);
        header('Location: login.php');
    }
}
logout();

function add_logo()
{
    global $con;
    if (isset($_POST['btnaddlogo'])) {
        $thumbnail = $_FILES['thumbnail']['name'];
        if (!empty($thumbnail)) {
            $thumbnail = date('YmdHis') . '-' . $thumbnail;
            $path = 'assets/icon/' . $thumbnail;
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path);

            $sql = "INSERT INTO `tbl_logo`(`thumbnial`) VALUES ('$thumbnail')";
            $res = $con->query($sql);
            if ($res) {
                echo '<script>
            $(document).ready(function(){
                swal({
                    title: "Success",
                    text: "Add Logo Success",
                    icon: "success",
                    button: "Ok"
                });     
            });
           
        </script>';
            }
        } else {
            echo '<script>
            $(document).ready(function(){
                swal({
                    title: "Error",
                    text: "Something went wrong",
                    icon: "error",
                    button: "Try agian"
                });     
            });
           
        </script>';
        }
    }
}

add_logo();

function logo_view_post()
{
    global $con;
    $sql = "SELECT * FROM tbl_logo ORDER BY id DESC LIMIT 5";
    $res = $con->query($sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $thumbnail = $row['thumbnial'];
        echo '
            <tr>
                <td>' . $id . '</td>
                <td style = "bg-black">
                <img src="../admin/assets/icon/' . $thumbnail . '" alt=""width="120" height="80" >
                </td>
                <td>
                    <a href="logo-update-view-post.php? id=' . $id . '" class="btn btn-warning">Update</a>
                    <a href=""class= "btn btn-danger">Delete</a>
                </td>
            </tr>
        ';
    }
}

function update_logo_post(){
    global $con;
    if(isset($_POST['btnupdatelogo'])){
        $post_id = $_GET['id'];
        echo $post_id;
        $thumbnail = $_FILES['thumbnail']['name'];
        $old_thumbnail = $_POST['oldthumbnail'];
        if(!empty($thumbnail)){
            $thumbnail = date('YmdHis') . '-' . $thumbnail;
            $path = 'assets/icon/' . $thumbnail;
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], $path);
        }else{
            $thumbnail = $old_thumbnail;
        }

        $sql = "UPDATE `tbl_logo` SET `thumbnial`= '$thumbnail' WHERE id = '$post_id'";
        $res = $con->query($sql);
    }
}
update_logo_post();


function delete_logo_post(){
    if(isset($_POST['acceptdelete'])){
        echo 123;
    }
}
delete_logo_post();
?>