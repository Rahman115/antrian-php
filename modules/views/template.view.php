<?php
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <!--<meta http-equiv="refresh" content="5">-->
        <title>Title</title>

        <!-- CSS -->
        
        <link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Javascript for animation -->
        <script src="resources/js/jquery.min.js" type="text/javascript"></script>
        <script src="resources/js/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="resources/js/antrian.jquery.js" type="text/javascript"></script>
    

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 well">
                    
                    <?php
                    $view = new View($viewName);
                    $view->bind('data', $data);
                    $view->forceRender();
                    ?>                            
                </div>
            </div>
        </div>


    </body>
</html>