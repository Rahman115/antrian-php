function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}

$(document).ready( function(){
    $("#search").keyup(function(){
        var name = $('#search').val();
        
        if(name == '') {
            $('#display').html('');
            
        } else {
            $.ajax({
                type : 'POST',
                url : "index.php?page=registrasi&&action=getAjax",
                data: {
                    search: name
                },
                success : function(html) {
                    $('#display').html(html).show();
                }
                
            });
            
            console.log(name);
        }
    });
});

