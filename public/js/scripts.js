$(function(){
    $('.date-input').datetimepicker({
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        startView: 4,
        forceParse: 0,
        minView: 2,
        format: 'dd/mm/yyyy'
    });

    //@start Free-wall dynamic grid layouts
    if($("#freewall").length)
    {
        var wall = new freewall("#freewall");
        wall.reset({
            selector: '.brick',
            animate: true,
            cellW: 210,
            cellH: 'auto',
            onResize: function() {
                wall.fitWidth();
            }
        });

        var images = wall.container.find('.brick');
        var length = images.length;
        images.css({visibility: 'hidden'});
        images.find('img').load(function() {
            --length;
            if (!length) {
                setTimeout(function() {
                    images.css({visibility: 'visible'});
                    wall.fitWidth();
                }, 500);
            }
        });
        if (length) {
            setTimeout(function() {
                images.css({visibility: 'visible'});
                wall.fitWidth();
            }, 500);
        }
    }
    //@end Free-wall dynamic grid layouts

    $(".profile-img-wrapper").on('mouseenter', function(){
        $(".profile-img-edit").slideDown('slow');
    });

    $(".profile-img-wrapper").on('mouseleave', function(){
        $(".profile-img-edit").slideUp('slow');
    });

    $(".profile-img-edit").on('click', function(){
        $.get('/profile-photo', function (response) {
            //var data = JSON.parse(response);
            var footer_content = '<div class="btn-group"><button id="edit-button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Done</button><button id="final-checkout-close" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button></div>';
            showCustomModal('Update Profile Photo', response, footer_content);
            $(":file").filestyle({input: false, classInput: "input-sm form-control", classIcon: "fa fa-plus-square", classButton : 'btn btn-primary', buttonText:'Choose File'});
            $("form#from-profile-photo").submit(function(event){
                event.preventDefault();
                //grab all form data
                var formData = new FormData($(this)[0]);
                $.ajax({
                    url: 'profile-photo',
                    type: 'POST',
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (returndata) {
                        alert(returndata);
                    }
                });
                return false;
            });
        });
    });

    $("body").append('<div id="site-generic-modal" class="modal site-modal" role="modal" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="header"></h3></div><div class="modal-body"><p></p></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div>');

});

var showCustomModal = function (modal_header, modal_body, modal_footer){
    $('html, body').css({
        'overflow': 'auto',
        'height': 'auto'
    });
    $('#site-generic-modal .header').html(modal_header);
    $('#site-generic-modal .modal-footer').html(modal_footer);
    $('#site-generic-modal .modal-body').html(modal_body);
    $("#site-generic-modal").modal('show');
}


