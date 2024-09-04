<?php
class layouts{
    public function heading($title){
      echo "<h1>$title</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        //Create an instance of the Layouts class
        $layout= new Layouts();
        $layout ->heading("Captain Bliss' website");
         function footer(){
           echo "<footer>Footer content here.</footer>";
        }
        footer();
        ?>
        <div>
         Copyright &copy; ICS <?php print date("Y"); ?>
        </div>
    </body>
</html>


