 
 $( document ).ready(function() {
            $('#usercountrange').change(function() {
                $('#usercountrange-value').val($(this).val());
            });
            $('#usercountrange-value').change(function() {
                $('#usercountrange').val($(this).val());
            });
            $('#ipsumcountrange').change(function() {
                $('#ipsumcountrange-value').val($(this).val());
            });
            $('#ipsumcountrange-value').change(function() {
                $('#ipsumcountrange').val($(this).val());
            });
        });