@extends('adminsidebar')

@section('content')

<h4 class="text-center m-3">Add Drugs</h4>
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ url('addDrugs') }}" enctype="multipart/form-data">
            @csrf

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="mb-3">
                <label for="drug" class="form-label @error('drug') is-invalid @enderror">Drug with ml</label>
                <input type="text" name="drug" class="form-control" id="drug">
                @error('drug')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unit_price" class="form-label @error('unit_price') is-invalid @enderror">Price</label>
                <input type="text" name="unit_price" class="form-control" id="unit_price" placeholder="RS.">
                @error('unit_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send') }}
                </button>

            </div>
        </form>
    </div>
</div>

@endsection