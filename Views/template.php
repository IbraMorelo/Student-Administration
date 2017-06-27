<?php
    namespace Views;

    $template = new Template();
    
    class Template
    {
        public function __construct()
        {
?>
<!DOCTYPE>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminStudents</title>
        <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">    
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AdminStudents</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo URL; ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>student">List</a></li>
                                <li><a href="<?php echo URL; ?>student/create">Add</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sections <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>section">List</a></li>
                                <li><a href="<?php echo URL; ?>section/create">Add</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
<?php
        }

        public function __destruct()
        {
?>  
        <nav class="navbar navbar-default navbar-fixed-bottom text-center">
            All Rights reserved &copy 2017<br>
            <b>Ibrahimme Morelo Mejía</b>
        </nav>
        <script src="<?php echo URL; ?>Views/template/js/jquery.min.js"></script>
        <script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
    </body>    
</html>
<?php
        }
    }
?>