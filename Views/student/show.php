<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
                <h3 class="panel-title">Student Profile: <?php echo $data['name']; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="<?php echo URL; ?>Views/template/img/avatars/<?php echo $data['image']; ?>">
                </div>
                <div class="col-sm-9">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b>Name: </b><?php echo $data['name']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Age: </b><?php echo $data['age']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Average: </b><?php echo $data['average']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Section: </b><?php echo $data['name_section']; ?>
                        </li>
                        <li class="list-group-item">
                            <b>Date: </b><?php echo $data['date']; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
