<?php 

    //THE CORE ENTRY FILE THAT HANDLES THE ROUTERS AND URLs
	require 'lib/init.php';

    //THE MAIN CONTROLLER, MODEL AND VIEWS
    require 'lib/controller.php';
    require 'lib/model.php';
    require 'lib/view.php';

    //CONFIGS, DATABASE AND PATHS FOR MEDIA,CSS AND JS
    require 'config/database.php';
    require 'config/paths.php';
    
    $app = new Init();

?>
