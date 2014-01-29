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
});