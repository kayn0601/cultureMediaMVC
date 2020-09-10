<?php
if(!defined("MVC")) {
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\getheader;
class category{
    function int(){
        $smarty=new smarty();

        $cid=$_GET["cid"];

        $db=new db();
        $db=$db->db;

        $result=$db->query("select * from category where cid=$cid");
        $currentInfo=$result->fetch_assoc();

        $result1=$db->query("select * from category where pid=$cid");
        $sonInfo=array();
        while ($row=$result1->fetch_assoc()){
            $sonInfo[]=$row;
        }

        $result2=$db->query("select * from content where cid=$cid");
        $condata=array();
        while ($row=$result2->fetch_assoc()){
            $condata[]=$row;
        }


        $header=new getheader();

        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("partner",$header->partner);

        $smarty->assign("menuData1",$header->menuData1);
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("sonInfo",$sonInfo);
        $smarty->assign("condata",$condata);

        if ($currentInfo["tpl_name"]=="index.html"){
            $smarty->assign("condata0",$condata[0]);
            $smarty->assign("img1_1",$condata[1]);
            $smarty->assign("img1_2",$condata[2]);
            $smarty->assign("img1_3",$condata[3]);
            $smarty->assign("img2_1",$condata[4]);
            $smarty->assign("img2_2",$condata[5]);
            $smarty->assign("img2_3",$condata[6]);
            $smarty->assign("img2_4",$condata[7]);
        }
        if ($currentInfo["tpl_name"]=="aboutus.html"){
            $smarty->assign("condata0",$condata[0]);
            $smarty->assign("condata1",$condata[1]);
            $smarty->assign("img1",$condata[2]);
            $smarty->assign("img2",$condata[3]);
        }
        if ($currentInfo["tpl_name"]=="pro.html"){
            $smarty->assign("condata0",$condata[0]);
            $smarty->assign("condata1",$condata[1]);
            $smarty->assign("img1",$condata[2]);
            $smarty->assign("img2",$condata[3]);
            $smarty->assign("img3",$condata[4]);
            $smarty->assign("img4",$condata[5]);
            $smarty->assign("img5",$condata[6]);
            $smarty->assign("img6",$condata[7]);
        }
        if ($currentInfo["tpl_name"]=="new.html"){
            $newarr1=array();
            $newarr2=array();
            for($i=4;$i<=6;$i++){
                $newarr1[]=$sonInfo[$i];
            }
            for($i=7;$i<=10;$i++){
                $newarr2[]=$sonInfo[$i];
            }
            $smarty->assign("newarr1",$newarr1);
            $smarty->assign("newarr2",$newarr2);
            $smarty->assign("img",$condata[0]);
        }
        if ($currentInfo["tpl_name"]=="find.html"){
            $smarty->assign("condata0",$condata[0]);
            $smarty->assign("condata1",$condata[1]);
            $smarty->assign("condata2",$condata[2]);
            $smarty->assign("condata3",$condata[3]);
            $smarty->assign("condata4",$condata[4]);
            $smarty->assign("condata5",$condata[5]);
        }

//        echo json_encode($condata);

        $smarty->display("index/".$currentInfo["tpl_name"]);
    }
}