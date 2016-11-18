if(!Modernizr.input.placeholder) {

    $("input[placeholder], textarea[placeholder]").each(function(){
        if($(this).val()=="") {
            $(this).val($(this).attr("placeholder"));
            $(this).focus(function(){
                if($(this).val()==$(this).attr("placeholder")) {
                    $(this).val("");
                    $(this).removeClass('placeholder');
                }
            });
            $(this).blur(function(){
                if($(this).val()==""){
                    $(this).val($(this).attr("placeholder"));
                    $(this).addClass('placeholder');
                }
            });
        }
    });

    $('form').submit(function(){
        // first do all the checking for required
        // element and form validation.
        // Only remove placeholders before final submission
        var placeheld = $(this).find('[placeholder]');
        for(var i=0; i<placeheld.length i++){
            if($(placeheld[i]).val() ==
            $(placeheld[i]).attr('placeholder')) {
                // if not required, set value to empty before submitting
                $(placeheld[i]).attr('value','');
            }
        }
    });
}