@extends('sidebar')

@section('content')

<h4 class="text-center m-3">Quatation Details</h4>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Date</th>
            <th>Note</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($quatationData as $key => $data)
        <tr>
            <td>{{ $data->created_at  }}</td>
            <td>{{ $data->note  }}</td>
            <td>
            <div class="d-grid gap-2">
                @if($data->quoatation_status =='pending')
                
                    <a href="{{ url('/viewQuatation', $data->id )}}" class="btn btn-info disabled" role="button">View Quatation</a>
                
                @else
                
                <a href="{{ url('/viewQuatation', $data->id )}}" class="btn btn-info" role="button">View Quatation</a>
               
                @endif
            </div>
            





            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Date</th>
            <th>Note</th>
            <th>Action</th>

        </tr>
    </tfoot>
</table>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@endsection