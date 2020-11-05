$(window).ready(function()
{
    var i = 0;

    $(".email").keyup( function(e)
    {
        var email = $(this).val();
        var target= "eval";
        $(this).addClass("eval");

        $("p.notice").load("assets/js/validate.php?email="+email+"&&target="+target+"" );
    });

});