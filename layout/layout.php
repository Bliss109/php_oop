<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/styles.css"/>
    </head>
    <?php 
//Define the layouts class with a heading
class layout {
    public function heading($title){
        echo "<h1>$title</h1>";
    }
}
//Footer function
function footer(){
    echo "<footer>Bliss creates</footer>";
}
?>

    <body>
        <?php
        $layouts = new layout();
        $layouts ->heading("Captain Bliss' Website");
        
        footer();
        ?>

        <!--Dynamic copyright -->
        <div class="footer">
            Copyright &copy; ICS <?php echo date("Y"); ?>
        </div>

    </body>
</html>



