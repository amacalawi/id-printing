!function($) {
    "use strict";

    var status = function() {
        this.$body = $("body");
    };

    var $required = 0;

    status.prototype.validates = function($form)
    {   
        $required = 0;

        $.each($('body .m-wizard__form-step--current').find("input[type='text'], select, textarea"), function(){
               
            if (!($(this).attr("name") === undefined || $(this).attr("name") === null)) {
                if($(this).hasClass("required")){
                    if($(this).is("[multiple]")){
                        if( !$(this).val() || $(this).find('option:selected').length <= 0 ){
                            $(this).closest(".form-group").addClass("has-danger").find(".m-form__help").text("this field is required.");
                            $required++;
                        }
                    } else if($(this).val()=="" || $(this).val()=="0"){
                        if(!$(this).is("select")) {
                            $(this).closest(".form-group").addClass("has-danger").find(".m-form__help").text("this field is required.");
                            $required++;
                        } else {
                            $(this).closest(".form-group").addClass("has-danger").find(".m-form__help").text("this field is required.");
                            $required++;                                          
                        }
                    } 
                }
            }
        });

        $('body').stop().animate({
            scrollTop: $('.has-danger').top - 100
        }, 1500, 'easeInOutExpo');

        return $required;
    },

    status.prototype.required_fields = function() {

        $('.form-group span.c-red').remove();

        $.each(this.$body.find(".form-group"), function(){
            
            if ($(this).hasClass('required')) {
                $(this).find('label').append('<span class="pull-right c-red">*</span>');            
                $(this).find("input[type='text'], select, textarea").addClass('required');
            } else {
                $(this).find("input[type='text'], select, textarea").removeClass('required');
            }  

        });

    },

    status.prototype.init = function()
    {   
        /*
        | ---------------------------------
        | # save button click
        | ---------------------------------
        */
        this.$body.on('click', '#save-btn', function (e){
            e.preventDefault();
            var btn = $(this);
            var $form = $('#m_form');
            var $statusID = $('input[name="id"]');

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

            /*
            | ---------------------------------
            | # save ajax
            | ---------------------------------
            */
            var $url = ($statusID.val() != '') ? 
                base_url + 'resources/status/update/' + $statusID.val() : 
                base_url + 'resources/status/store';
            
            console.log($url);
            $.ajax({
                type: ($statusID.val() != '') ? 'PUT' : 'POST',
                url: $url,
                data: $form.serialize(),
                success: function(response) {
                    console.log(response);
                    setTimeout(function() {
                        var data = $.parseJSON(response);   
                        if ($statusID.val() == '') {
                            $statusID.val(data.id);
                        }
                        swal({
                            title: 'Sweet!',
                            text: 'The information has been successfully saved.',
                            imageUrl: base_url + 'img/thumbs-up.png',
                            imageWidth: 120,
                            imageHeight: 120,
                            imageAlt: 'thumbs up',
                            animation: false,
                            confirmButtonClass: "btn btn-info btn-focus m-btn m-btn--pill m-btn--air"
                        });
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                    }, 1000);
                }, 
                complete: function() {
                    window.onkeydown = null;
                    window.onfocus = null;
                }
            });
        });

    }

    //init status
    $.status = new status, $.status.Constructor = status

}(window.jQuery),

//initializing status
function($) {
    "use strict";
    $.status.required_fields();
    $.status.init();
}(window.jQuery);
