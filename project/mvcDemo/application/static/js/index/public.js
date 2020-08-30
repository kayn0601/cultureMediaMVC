$(function(){
    // 合作伙伴传送带
    function tp(){
        $(".tp-box").animate({
            marginLeft:'-190px'
        },300,function(){
            $(".tp-box").append($(".tp-box").children()[0])
            $(".tp-box").css("marginLeft",0)
        })
    }
    var t=setInterval(tp,3000)

    window.onblur=function(){
        clearInterval(t)
    }
    window.onfocus=function(){
        t=setInterval(tp,3000)
    }


    // 关于我们下拉栏
    $(".head-nav").mouseenter(function(){
        $(".aboutusTab").slideDown("fast");
    })
    $(".head-nav").mouseleave(function(){
        $(".aboutusTab").slideUp("fast");
    })
    $(".aboutusTab").mouseenter(function(){
        $(".aboutusTab").stop();
    })
    $(".aboutusTab").mouseleave(function(){
        $(".aboutusTab").slideUp("fast");
    })


    // 回到顶部
    $(".toTop").click(function(){
        $('body,html').animate({
            scrollTop:0
        },300);
    })

    $(window).scroll(function(){
        if($('body,html').scrollTop()>200){
            $(".toTop").slideDown(500);          
        }else{
            $(".toTop").slideUp(500);
        }
    })
});