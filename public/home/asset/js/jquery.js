$(document).ready(function () {
    $(".ri-arrow-left-line").click(function () {
        var sau = $(".active1").next();
        if(sau.length == 0){
        $(".active1").addClass("bentraidira").one("webkitAnimationEnd", function () {
                $(".bentraidira").removeClass("bentraidira");
            });

        $('.slider-items .slider-item:first-child').addClass("benphaidivao").one("webkitAnimationEnd", function () {
            $(".active1").removeClass("active1");
            $(".benphaidivao").addClass("active1").removeClass("benphaidivao");
        });
    }else{
        $(".active1").addClass("bentraidira").one("webkitAnimationEnd", function () {
            $(".bentraidira").removeClass("bentraidira");
        });

        sau.addClass("benphaidivao").one("webkitAnimationEnd", function () {
            $(".active1").removeClass("active1");
            $(".benphaidivao").addClass("active1").removeClass("benphaidivao");
        });
    }
    });

    $(".ri-arrow-right-line").click(function () {
        var truoc = $(".active1").prev();
        if(truoc.length == 0){
            $(".active1").addClass("benphaidira").one("webkitAnimationEnd", function () {
                $(".benphaidira").removeClass("benphaidira");
            });
            $('.slider-items .slider-item:last-child').addClass("bentraidivao").one("webkitAnimationEnd", function () {
                $(".active1").removeClass("active1");
                $(".bentraidivao").addClass("active1").removeClass("bentraidivao");
            });
        }else{
            $(".active1").addClass("benphaidira").one("webkitAnimationEnd", function () {
                $(".benphaidira").removeClass("benphaidira");
            });

            truoc.addClass("bentraidivao").one("webkitAnimationEnd", function () {
                $(".active1").removeClass("active1");
                $(".bentraidivao").addClass("active1").removeClass("bentraidivao");
            });
        }
    });

});
