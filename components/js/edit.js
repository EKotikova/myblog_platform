/**
 * Created by Lena on 25.07.2018.
 */


var edit=function(){
    var  texted=document.getElementById('post_full');
    alert(texted);
    var areatxt=document.getElementById('corect');
    alert(areatxt);
    areatxt.innerText=texted.innerText;
        $(function(){
            $('div.' + $(this).attr("rel")).fadeIn(500);

            $('a.close').click(function () {
                $(this).parent().fadeOut(100);
                //  $('#overlay_new').remove('#overlay_new');
                return false;
            });
        });
}