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

});


