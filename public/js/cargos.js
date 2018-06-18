$(document).ready(function(){


    $('#search_btn').click(function(e) {
        $frm = $('#frm_search');
        e.preventDefault();
        $url = $frm.attr('action');
        $token = $('input[name="_token"]').val();


        $.ajax({
            type:'POST',
            url:$url,
            dataType: 'json',
            data:{_token:$token},
        }).done(function(data){
            $('div.content-search').html(data);
        });
    });


});