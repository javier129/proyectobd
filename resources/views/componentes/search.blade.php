<div class="card">
    <div class="card-body">
        <form method="POST" id="frm_search" role="form" data-toggle="validator" action="{{ url('buscar_'.$mod) }}">
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