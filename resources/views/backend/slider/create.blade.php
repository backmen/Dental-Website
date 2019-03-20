@extends('backend.layout.master')
@push('css')
    <style>


    </style>
@endpush
@section('content')
    <h3 class="py-3 px-5">Slider</h3><hr>
    <div class="row">
        <div class="col-md-10">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <textarea class="form-control" id="title"></textarea>
                </div>
            </form>
        </div>
    </div>


@endsection

@push('js')
    <script>

    </script>
@endpush
