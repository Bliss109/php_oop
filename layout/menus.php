<?php
class menus{
    public function main_menu(){
        ?>
        <div>
            <a href="./">Home</a>
            <a href="">About</a>
        </div>
        <?php
    }
}
$menu = new menus();
$menu ->main_menu();
?>
