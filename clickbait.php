<?php
    define( "TITLE", "Honest Click Bait Headlines" );
    include("functions.php");

    if( isset( $_POST["fix_submit"] ) ) {
   
        checkForClickBait();
    }
?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
            </div>
            
            <?php
            if ( isset( $_POST["fix_submit"] ) ) {
             
                $clickBait = checkForClickBait()[0];
                
                
                $honestHeadline = checkForClickBait()[1];
                
                displayHonestHeadline( $clickBait, $honestHeadline );
            }
            ?>

        </div>
      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>


