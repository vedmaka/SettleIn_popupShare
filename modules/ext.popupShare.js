$(function(){

	console.log('Sharing kit initiated.');
	SocialShareKit.init();

    /*var selector = "#popupsharebtn";
    var popup = "#popupsharewindow";
    if( $(selector).length ) {
        SocialShareKit.init();
        $(selector).click(function(e){

            $(popup).css('top', $(selector).position().top - 20);
            $(popup).css('left', $(selector).position().left);

            if( $().hasClass('popup-active') ) {
                $(popup).removeClass('popup-active').fadeOut("fast");
            }else{
                $(popup).addClass('popup-active').fadeIn("fast");
            }

            e.preventDefault();
        });
        $(popup).find('a.popup-closer').click(function(){
            $(popup).removeClass('popup-active').fadeOut("fast");
        });
    }*/

});