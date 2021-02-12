@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        @include('layouts.adminMenu', ['routeLink' => 'goberment'])
        <div class="col-md-9">
            @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            {{ __('Goberments') }}
                        </div>
                        <div class="col-md-3">
                            <a class="col-md-12 btn btn-primary mb-1"  href="{{ url('admin/reports') }}">{{ __('Create') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ url('goberment/get') }}",
                     "dataType": "json",
                     "type": "POST",
                     "data":{ _token: "{{csrf_token()}}"}
                   },
            "columns": [
                { "data": "id" },
                { "data": "title" },
                { "data": "body" },
                { "data": "created_at" },
                { "data": "options" }
            ]	 
        });
    } );
</script>

@endsection