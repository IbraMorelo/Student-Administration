<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">List of Sections</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>         
                    <?php while($row = mysqli_fetch_array($data)){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><a href="<?php echo URL; ?>section/show/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                        <td><a class="btn btn-warning" href="<?php echo URL; ?>section/edit/<?php echo $row['id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo URL; ?>section/delete/<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>