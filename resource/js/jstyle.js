$(function(){
    var i=0;
    for(i=0;i<=7;i++)
    {
        var li = $('.list-header li:eq('+i+')');

        function selectList(e){
            e.hover(
                function(){
                    $(this).addClass('active');
                },
                function(){
                    $(this).removeClass('active');
                }
            );
        }

        selectList(li);
    }



});