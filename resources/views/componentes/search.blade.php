<div class="card">
    <div class="card-body">
        <form method="POST" id="frm_search" role="form" data-toggle="validator" action="{{ url('admin/'.$mod.'/buscar') }}">
            {{csrf_field()}} {{ method_field('POST') }}
            <div class="input-group input-group-lg">
                <input type="search" id="search" class="form-control" placeholder="Buscar" required>
                <span class="input-group-btn">
                    <button type="submit" id="search_btn" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <div class="content-search">

        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('#search_btn').click(function(e) {
            $frm = $('#frm_search');
            e.preventDefault();
            $url = $frm.attr('action');
            $token = $('input[name="_token"]').val();
            $query = $('#search').val();
            $.ajax({
                type:'POST',
                url:$url,
                dataType: 'json',
                data:{_token:$token, query: $query},
            }).done(function(data){
                $('div.content-search').html(data);
            });
        });

    });
</script>
