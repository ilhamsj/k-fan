@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                        <i data-feather="plus"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="users-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin._create')

@endsection

@push('scripts')
<script>
    var table;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Display The data
    table = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('user.index')}}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    // Delete Data
    $('body').on('click', '.deleteUser', function () {
        var url = $(this).data("id");
        if (confirm("Are You sure want to delete ? " + url) == true) {
            $.ajax({
                url: url,
                type: "DELETE",
                success: function (data) {
                    table.draw();
                    Swal.fire('Success!','Data berhasil dihapus','success');
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    });

    // Create Data
    $('#ajaxSubmit').click(function(e){
        e.preventDefault();
        $.ajax({
            url: "{{ route('user.store') }}",
            method: 'post',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
            },
            success: function(result){
                if (result.success == true) {
                    $('#modelId').modal('hide');
                    table.draw();
                    Swal.fire('Success!','Create Success','success');
                }
            }
        });
    });

    $('body').on('click', '.btnEdit', function (e) {
        e.preventDefault();
        var url = $(this).data('edit');
        console.log(url);
    });
    
    
    </script>
@endpush
