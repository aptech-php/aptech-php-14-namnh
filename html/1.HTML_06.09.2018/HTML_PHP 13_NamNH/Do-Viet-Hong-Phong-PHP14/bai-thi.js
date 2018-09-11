$('#menu-btn').click(function(){
var menu = $('#menu .menu-inner');
if (menu.hasClass('d-none')){
    menu.removeClass('d-none');
    menu.attr('style','display:none;');
    menu.show('300');
}
else {
    menu.hide('300',function() {
        menu.addClass('d-none');
    })
}
});