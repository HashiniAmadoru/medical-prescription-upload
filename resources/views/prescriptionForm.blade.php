@extends('sidebar')

@section('content')

<style>
    #preview_img img {
        width: 100px;
        height: 100px;
        padding: 10px;
        margin: 10px
    }
</style>

<div class="card">
    <div class="card-body">
        <h4 class="text-center">Add Your Prescription Details</h4>
        <form method="POST" action="{{ url('addPrescription') }}" enctype="multipart/form-data">
            @csrf

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control @error('note') is-invalid @enderror" name="note" id="note" rows="3"></textarea>
                @error('note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="delivery_address" class="form-label">Delivery Address</label>
                <input type="text" name="delivery_address" class="form-control @error('delivery_address') is-invalid @enderror" id="delivery_address">
                @error('delivery_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="delivery_time_slot" class="form-label">Select Time</label>
                <select name="delivery_time_slot" class="form-select @error('delivery_time_slot') is-invalid @enderror" id="delivery_time_slot" aria-label="Default select example">
                    <option selected value="">Select Time</option>
                    <option value="08.00am">08.00am</option>
                    <option value="10.00am">10.00am</option>
                    <option value="12.00pm">12.00pm</option>
                    <option value="02.00pm">02.00pm</option>
                    <option value="04.00pm">04.00pm</option>
                </select>
                @error('delivery_time_slot')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="image">{{ __('Image') }}</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" value="{{ old('image') }}" name="image[]" class="form-control" multiple autocomplete="image" autofocus>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="row" id="preview_img">
                </div>
            </div>

            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send') }}
                </button>

            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#image').on('change', function() { //on file input change
            if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
            {

                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file) { //loop though each file

                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file) { //trigger function on successful read
                        return function(e) {
                            var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                            $('#preview_img').append(img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.

                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>
@endsection