@extends('adminsidebar')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<h4 class="text-center m-3">Prescription Details</h4>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Customer Name</th>
            <th>delivery Address</th>
            <th>Time Slot</th>
            <th>Action</th>
            <th>User Result</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($allPresDetails as $key => $data)

        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->delivery_address }}</td>
            <td>{{ $data->delivery_time_slot }}</td>
            <td>
                <div class="d-grid gap-2">
                    <a href="{{ url('/adminquatationForm', $data->id )}}" class="btn btn-info" role="button">Create Quatation</a>
                </div>
            </td>

            
            <td>
            @if($data->quoatation_status =='accept')
               <span class="badge badge-success" style="font-size: 17px;">{{ $data->quoatation_status }}</span> 
               @elseif($data->quoatation_status =='reject')
               <span class="badge badge-danger" style="font-size: 17px;">{{ $data->quoatation_status }}</span>
               @else
               <span class="">{{ $data->quoatation_status }}</span> 
               @endif
            </td>
            

        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>Customer Name</th>
            <th>delivery Address</th>
            <th>Time Slot</th>
            <th>Action</th>
            <th>User Result</th>

        </tr>
    </tfoot>
</table>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@endsection