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
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" name="btnaddlogo" class="btn btn-success">Add</button>
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