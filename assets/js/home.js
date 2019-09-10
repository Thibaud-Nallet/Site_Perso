$(function () {
    function bis() {
        $(".scroll").hide(1000, function () {
            $(".scroll").show(1000, bis);
        });
    };
    bis();
});
