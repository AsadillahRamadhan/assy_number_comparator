@extends('layouts.main')
@section('container')
<form action="{{ route('compare.export') }}" method="post">
    @csrf
    <div class="modal fade" id="export-data" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Export Excel</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control" id="start_date" required>
              </div>
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" class="form-control" id="end_date" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Export</button>
            </div>
          </div>
        </div>
    </div>
</form>
<form action="{{ route('compare.store') }}" method="post">
    @csrf
    <div class="modal fade" id="scan-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Compare Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group mb-3">
                <label for="data-1">Data 1</label>
                <input type="text" name="data_1" class="form-control" id="data-1" required>
              </div>
              <div class="form-group">
                <label for="data-2">Data 2</label>
                <input type="text" name="data_2" class="form-control" id="data-2" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
</form>
<div class="d-flex justify-content-end">
    <button class="btn btn-success me-2"  data-bs-toggle="modal" data-bs-target="#export-data">Export Excel</button>
    <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#scan-data">Scan Data</button>
</div>
<div class="mt-5">
    <table id="data-table" class="table table-striped">
        <thead>
            <tr>
                <td class="text-center">No</td>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Status</td>
                <td>Tanggal</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr >
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $d->data_1 }}</td>
                <td>{{ $d->data_2 }}</td>
                <td><b class="{{ $d->status == 1 ? 'text-sucess' : 'text-danger' }}">{{ $d->status == 1 ? 'OK' : 'N-OK' }}</b></td>
                <td>{{ date_format($d->created_at, 'd M Y') }}</td>
                <td>
                    <form action="{{ route('compare.destroy', ['compare' => $d->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
@push('custom_js')
<script>
    $('#data-table').DataTable();
    @if(session('message'))
    Swal.fire({
        position: "middle",
        icon: "{{ session('status') }}",
        title: "{{ session('message') }}",
        showConfirmButton: false,
        timer: 1500
    });

    let audio = new Audio("{{ asset(session('file')) }}");
    audio.play();
    @endif
</script>
@endpush