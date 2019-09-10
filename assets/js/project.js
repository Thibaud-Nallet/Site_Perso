/* -------- Fais clignoter l'icone du bas du header -------- */

$(function () {
    function bis() {
        $(".scroll").hide(1000, function () {
            $(".scroll").show(1000, bis);
        });
    };
    bis();
})

$(function () {
    $("figcaption").hide();
})

$(function () {
    $(".image1").mouseenter(function () {
        $(".desc1").show(function () {
            $(".image1").mouseleave(function () {
                $(".desc1").hide();
            });
        });
    });
})

$(function () {
    $(".bouton1").mouseenter(function () {
        $(".desc1").show(function () {
            $(".bouton1").mouseleave(function () {
                $(".desc1").hide();
            });
        });
    });
})

$(function () {
    $(".image2").mouseenter(function () {
        $(".desc2").show(function () {
            $(".image2").mouseleave(function () {
                $(".desc2").hide();
            });
        });
    });
})

$(function () {
    $(".image3").mouseenter(function () {
        $(".desc3").show(function () {
            $(".image3").mouseleave(function () {
                $(".desc3").hide();
            });
        });
    });
})