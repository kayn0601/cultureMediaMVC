$(function(){
    // banner轮播图
    var bW=$(".banner-back").width()
    var num=0
    function move(){
        num++
        if(num>1){
            $(".wheel").animate({
                marginLeft:-num*bW
            },500,function(){
                $(".wheel").css("margin-left",0)
            })
            num=0
        }else{
            $(".wheel").animate({
                marginLeft:-num*bW
            },500)
        }
    }
    var t=setInterval(move,3000)

    window.onblur=function(){
        clearInterval(t)
    }
    window.onfocus=function(){
        t=setInterval(move,3000)
    }

    $(".arrow-left").click(function(){
        num--
        if(num<0){
            $(".wheel").animate({
                marginLeft:-bW
            },500)
            num=1
        }else{
            $(".wheel").animate({
                marginLeft:-num*bW
            },500)
        }
    })
    $(".arrow-right").click(function(){
        num++
        if(num>1){
            $(".wheel").animate({
                marginLeft:-num*bW
            },500,function(){
                $(".wheel").css("margin-left",0)
            })
            num=0
        }else{
            $(".wheel").animate({
                marginLeft:-num*bW
            },500)
        }
    })
 });