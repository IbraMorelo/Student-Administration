<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Create New Student</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name" class="control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="age" class="control-label">Age</label>
                                    <input type="number" name="age" id="age" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="average" class="control-label">Average</label>
                                    <input type="number" step=0.01 name="average" id="average" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="section_id" class="control-label">Section</label>
                                    <select name="section_id" id="section_id" class="form-control">
                                        <?php while($row = mysqli_fetch_array($data)){ ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
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