<?php
include('sidebar.php');
?>
<div class="col-10">
    <div class="content-right">
        <div class="top">
            <h3>Add Website Logo</h3>
        </div>
        <div class="bottom">
            <figure>
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Thumbnial</label>
                        <input type="file" name="thumbnail" class="form-control" value="No file seleced">
                        <?php
                        $post_id = $_GET['id'];
                        $sql = "SELECT thumbnial FROM tbl_logo WHERE id = '$post_id'";
                        $res = $con->query($sql);
                        $row = mysqli_fetch_assoc($res);
                        $thumbnial = $row['thumbnial'];


                        ?>
                        <img src="../admin/assets/icon/<?php $thumbnial; ?>" alt="">
                        <input type="hidden" name="oldthumbnail" value="<?php $thumbnial; ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="btnupdatelogo" class="btn btn-success">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>

                    </div>
                </form>
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</main>
</body>

</html>