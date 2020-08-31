$(function () {
            var fullmonth_array = $.datepicker.regional['bn-BD'].monthNames;
            $.datepicker.setDefaults($.datepicker.regional['bn-BD']);
            $("#date_of_birth").datepicker({
                dateFormat: "yy/mm/dd",
                monthNamesShort: fullmonth_array,
                changeMonth: true,
                changeYear: true
            }, $.datepicker.regional['bn-BD']);
        });
        
        
$(document).on("change", "#date_of_birth", function () {
        var dateArr = $(this).val().split('/');
        var banglaDate = mrt(dateArr[0]) + '/' + mrt(dateArr[1]) + '/' + mrt(dateArr[2]);
        $(this).val(banglaDate);
    });


$(function () {
            var fullmonth_arrayD = $.datepicker.regional['bn-BD'].monthName;
            $.datepicker.setDefaults($.datepicker.regional['bn-BD']);
            $("#date_of_dead").datepicker({
                dateFormat: "yy/mm/dd",
                monthNameShort: fullmonth_arrayD,
                changeMonth: true,
                changeYear: true
            }, $.datepicker.regional['bn-BD']);
        });

$(document).on("change", "#date_of_dead", function () {
            var dateArra = $(this).val().split('/');
            var banglaDateD = mrt(dateArra[0]) + '/' + mrt(dateArra[1]) + '/' + mrt(dateArra[2]);
            $(this).val(banglaDateD);
        });


$(function () {
            var fullmonth_arrayDe = $.datepicker.regional['bn-BD'].monthNamee;
            $.datepicker.setDefaults($.datepicker.regional['bn-BD']);
            $("#pub_date").datepicker({
                dateFormat: "yy/mm/dd",
                monthNameeShort: fullmonth_arrayDe,
                changeMonth: true,
                changeYear: true
            }, $.datepicker.regional['bn-BD']);
        });

$(document).on("change", "#pub_date", function () {
            var dateArraaa = $(this).val().split('/');
            var banglaDateD = mrt(dateArraaa[0]) + '/' + mrt(dateArraaa[1]) + '/' + mrt(dateArraaa[2]);
            $(this).val(banglaDateDe);
        });

$(function () {
            var fullmonth_arrayDd = $.datepicker.regional['bn-BD'].monthName;
            $.datepicker.setDefaults($.datepicker.regional['bn-BD']);
            $("#pub_date_end").datepicker({
                dateFormat: "yy/mm/dd",
                monthNameShort: fullmonth_arrayDd,
                changeMonth: true,
                changeYear: true
            }, $.datepicker.regional['bn-BD']);
        });

$(document).on("change", "#pub_date_end", function () {
            var dateArrab = $(this).val().split('/');
            var banglaDateD = mrt(dateArrab[0]) + '/' + mrt(dateArrab[1]) + '/' + mrt(dateArrab[2]);
            $(this).val(banglaDateD);
        });