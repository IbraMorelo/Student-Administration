<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Section: <?php echo $data['name']; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name" class="control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button type="submit" class="btn btn-success">Edit</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>