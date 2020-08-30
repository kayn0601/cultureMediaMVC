<?php
use \libs\smarty;
class user{
    function adduser(){
        $smarty=new smarty();
        $smarty->display("admin/adduser.html");
    }
    function edituser(){
        $smarty=new smarty();
        $smarty->display("admin/edituser.html");
    }
}