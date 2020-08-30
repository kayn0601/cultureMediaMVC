<?php
namespace libs;
header("content-type:text/html;charset=utf8");
class upload{
    public $fullpath;
    //定义文件上传的大小
    public $fileSize;
    //定义文件上传的类型
    public $fileType=array("image/png","image/jpeg","image/gif");
    //定义上传文件的表单名字
    public $fileName="file";

    public $defaultDir="upload";

    function __construct(){
        $this->fileSize=1024*1024*5;
    }
    private function accept(){
        $this->data=$_FILES[$this->fileName];
    }
    private function check(){
        if (is_uploaded_file($this->data["tmp_name"])){
            if ($this->data["size"]<$this->fileSize){
                if (in_array($this->data["type"],$this->fileType)){
                    return true;
                }else{
                    echo "文件类型不符合";
                }
            }else{
                echo "文件过大";
                return false;
            }
        }else{
            echo "文件不合法";
            return false;
        }
    }

    private function createDir(){
        if (!is_dir($this->defaultDir)){
            mkdir($this->defaultDir,0777,true);
        }
        $currentDir=$this->defaultDir.DIRECTORY_SEPARATOR.date("Y-m-d");
        if (!is_dir($currentDir)){
            mkdir($currentDir,0777,true);
        }
        $fileName=time().mt_rand(1000,20000).$this->data["name"];
        $this->fullpath=$currentDir.DIRECTORY_SEPARATOR.$fileName;
    }
    private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }
    function up(){
        //1.接收上传数据
        $this->accept();
        //2.检查数据是否合法
        if ($this->check()){
            //3.创建文件夹，用于放入上传文件
            $this->createDir();
            //4.移动到指定目录
            $this->move();
        }
    }
}