 
 $( document ).ready(function() {
            $('#usercountrange').change(function() {
                $('#usercountrange-value').val($(this).val());
            });
            $('#usercountrange-value').change(function() {
                $('#usercountrange').val($(this).val());
            });
        });