<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">List of Students</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Average</th>
                        <th>Section</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php while($row = mysqli_fetch_array($data)){ ?>
                    <tr>
                        <td><img class="img-responsive img-avatar" src="<?php echo URL; ?>Views/template/img/avatars/<?php echo $row['image']; ?>"></td>
                        <td><a href="<?php echo URL; ?>student/show/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['average']; ?></td>
                        <td><?php echo $row['name_section']; ?></td>
                        <td><a class="btn btn-warning" href="<?php echo URL; ?>student/edit/<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo URL; ?>student/delete/<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>