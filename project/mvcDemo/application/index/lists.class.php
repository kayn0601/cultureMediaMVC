<?php
if(!defined("MVC")) {
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class lists{
    function int(){
        $smarty=new smarty();

        $cid=$_GET["cid"];

        $db=new db();
        $db=$db->db;

        $result=$db->query("select * from category where cid=$cid");
        $currentInfo=$result->fetch_assoc();

        $result1=$db->query("select * from content where cid=$cid");
        $condata=array();
        while ($row=$result1->fetch_assoc()){
            $condata[]=$row;
        }

        $header=new getheader();

        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("partner",$header->partner);

        $smarty->assign("menuData1",$header->menuData1);
        $smarty->assign("menuData",$header->menuData);

        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("condata",$condata);

        $smarty->display("index/lists.html");
    }
}