<div>
    <!-- Header Content Section -->
    @section('header-content')
        Header Page
    @endsection

    <div class="card">
        <div class="card-body">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        @if (session('status'))
                            <div class="alert alert-info">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        {{ $header_content }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
