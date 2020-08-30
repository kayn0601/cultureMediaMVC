<?php
if(!defined("MVC")) {
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class index{
    function int(){
        $smarty=new smarty();

        $db=new db();
        $db=$db->db;

        $result=$db->query("select * from category where cid=1");
        $currentInfo=$result->fetch_assoc();

        $result1=$db->query("select * from category where pid=1");
        $sonInfo=array();
        while ($row=$result1->fetch_assoc()){
            $sonInfo[]=$row;
        }

        $result2=$db->query("select * from content where cid=1");
        $condata=array();
        while ($row=$result2->fetch_assoc()){
            $condata[]=$row;
        }

        $header=new getheader();

//        echo json_encode($arr[1]);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("partner",$header->partner);

        $smarty->assign("menuData1",$header->menuData1);
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("sonInfo",$sonInfo);
        $smarty->assign("condata",$condata);

        $smarty->display("index/index.html");
    }
}