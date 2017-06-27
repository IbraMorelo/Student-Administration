<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Student: <?php echo $data['name']; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3">
                        <img class="img-responsive" src="<?php echo URL; ?>Views/template/img/avatars/<?php echo $data['image']; ?>">
                    </div>
                    <div class="col-sm-9">
                        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="age" class="control-label">Age</label>
                                <input type="number" name="age" id="age" class="form-control" value="<?php echo $data['age']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="average" class="control-label">Average</label>
                                <input type="number" step=0.01 name="average" id="average" class="form-control" value="<?php echo $data['average']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="section_id" class="control-label">Section (<b>Actual Section: <?php echo $data['name_section']; ?></b>)</label>
                                <select name="section_id" id="section_id" class="form-control">
                                    <?php while($row = mysqli_fetch_array($sections)){ ?>
                                        <?php if($data['section_id'] == $row['id']){ ?>
                                        <option value="<?php echo $row['id']; ?>" selected><?php echo $row['name']; ?></option>
                                        <?php }else{?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php }} ?>
                                </select>
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