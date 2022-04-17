let input_search = $("#input-search");

input_search.keyup(function(){
    $.ajax({
        type: "GET",
        url: "search",
        data: {input: input_search.val()},
        success : function(data){
            // ambil response dari file php
            let result = data;

            // tambahin ke halaman
            $('#hasil-cari').html(result);
        

        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });

});
