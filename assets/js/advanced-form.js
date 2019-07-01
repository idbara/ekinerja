//date picker start

if (top.location != location) {
    top.location.href = document.location.href ;
}
$(function(){
    window.prettyPrint && prettyPrint();
    /*$('.default-date-picker').datepicker({
        format: 'mm-dd-yyyy',
        todayBtn: true
    });*/
    $(".dp1").datetimepicker({
        format: 'mm-dd-yyyy',
        autoclose: true,
        todayBtn: true
    });

});

//date picker end