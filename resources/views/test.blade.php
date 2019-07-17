@extends('layouts.app')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
  <div class="container">
      <table class="table table-bordered" id="users-table">
          <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created At</th>
              <th>Updated At</th>
          </tr>
          </thead>
      </table>
  </div>


@endsection
@push('scripts')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('minh.getlist') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: '{{ route('minh.test') }}',
                dataType: 'json',
                success: function (data) {
                    // var obj = JSON.parse(data);
                    console.log(data);
                    $('#exampleModal').modal('show',function () {
                        data.forEach(function(element){
                            console.log(element);
                        })
                    });
                },
                error: function() {
                    console.log(data);
                }
            });

        });
    </script>
@endpush

