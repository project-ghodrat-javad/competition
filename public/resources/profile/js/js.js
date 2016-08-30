function menu(id)
{
    $("#li-menu li ul").hide();
    $("#menu_"+id).show();

    for(var i=1;i<5;i++)
    {
        document.getElementById('menu_box_'+i).style.background='';
    }

    document.getElementById('menu_box_'+id).style.background='red';
}
