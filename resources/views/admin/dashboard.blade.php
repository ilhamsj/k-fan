@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <table class="table table-bordered" id="users-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Tambah User 
                            </button>
                            </span>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@include('admin._addUser')

@endsection

@push('scripts')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Display The data
        var table = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'http://k-fan.test/user',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        // Delete Data
        $('body').on('click', '.deleteUser', function () {
            var user_id = $(this).data("id");
            if (confirm("Are You sure want to delete ? " + user_id) == true) {
                console.log('true');
                $.ajax({
                    type: "DELETE",
                    url: "http://k-fan.test/user/"+user_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        });

        
    });
    
    // Create Data
    jQuery(document).ready(function(){
        jQuery('#ajaxSubmit').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('user.store') }}",
                method: 'post',
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                },
                success: function(result){
                    jQuery('.alert').show();
                    jQuery('.alert').html(result.success);
                }
            });
        });
    });
    </script>
@endpush
