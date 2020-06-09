@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
                <div class="card-alert card red lighten-5">
                    <div class="card-content red-text">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
        </ul>
    </div>
@endif
