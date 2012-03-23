$(function(){
    $('.panel-login input').focus(function(){
        $('.panel-login').css({
            "box-shadow":"0px 0px 20px blue"
        });
    });
    $('.panel-login').click(function(){
        $(this).css({
            "box-shadow":"0px 0px 40px  grey"
        });
    });
    $('.tooltp').tooltip('show');
});