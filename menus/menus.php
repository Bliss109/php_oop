<?php
class menus{
    public function main_menu(){
        ?>
        <div class="topnav">
            <a href="./">Home</a>
            <a href="">About</a>
            <?php $this->main_right_menu(); ?>
        </div>
        <?php
    }
    public function main_right_menu(){
        ?>
        <div class="topnav-right">
            <a href="./">Sign Up</a>
            <a href="">Sign In</a>
        </div>
        <?php
    }
}
$menu = new menus();
$menu ->main_menu();
?>
