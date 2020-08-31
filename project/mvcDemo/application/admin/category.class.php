<?php
if(!defined("MVC")) {
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
class category{
    public $arr=array();
    function int(){
        $smarty=new smarty();

        $database=new db();
        $this->db=$database->db;
        $str="";
        $this->tree(0,$str);
        $smarty->assign("data",$str);
        $smarty->display("admin/category.html");
    }

    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from category where pid=".$pid);
        while ($row=$result->fetch_assoc()){
            if ($row["isshow"]==1){
                $s="导航栏显示";
            }else{
                $s="导航栏隐藏";
            }

            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("↘",$i).$row["cname"].'</td><td>'.$s.'</td><td>'.$row["tpl_name"].'</td><td>
<a href="javascript:;" attr="'.$row["cid"].'" class="add btn btn-primary">添加</a>
<a href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'"class="edit btn btn-success">修改</a>
<a href="/project/mvcDemo/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove btn btn-danger">删除</a>
</td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }

    function show(){
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from category where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }

    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }

    function treeOption($pid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from category where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"]
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }

    function add(){
        if (isset($_POST["cid"])){
            $cid=$_POST["cid"];
        }else{
            $cid=0;
        }
        $path=$_POST["imgurl"];
        $cname=$_POST["cname"];
        $isshow=$_POST["isshow"];
        $info=$_POST["info"];
        $tpl_name=$_POST["tpl_name"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into category (cname,pid,isshow,tpl_name,info,path) values ('$cname','$cid','$isshow','$tpl_name','$info','$path')");
        if ($db->affected_rows>0){
            header("location:/project/mvcDemo/index.php/admin/category");
        }
    }

    function del(){
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from category where pid=".$cid);
        if ($result->num_rows>0){
            echo "<script>alert('请先删除子目录');location.href='/project/mvcDemo/index.php/admin/category'</script>";
        }else{
            $db->query("delete from category where cid='$cid'");
        }
        if ($db->affected_rows>0){
            header("location:/project/mvcDemo/index.php/admin/category");
        }
    }

    function editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $isshow=$_GET["isshow"];
        $tpl_name=$_GET["tpl_name"];
        $info=$_GET["info"];

        $database=new db();
        $db=$database->db;

        $db->query("update category set cname='$cname',pid='$pid',isshow='$isshow',tpl_name='$tpl_name',info='$info' where cid=".$cid);

        if ($db->affected_rows>0){
            echo "ok";
        }
    }

    function addcate(){
        $smarty=new smarty();

        $database=new db();
        $this->db=$database->db;
        $str="";
        $this->tree(0,$str);
        $smarty->assign("data",$str);
        $smarty->display("admin/addcate.html");
    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();

        $path=HOST_ADD."/project/mvcDemo/".$upload->fullpath;
        echo "$path";
    }
}