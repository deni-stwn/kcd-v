@extends('admin.index')
@section('content')
    <x-modal-add title="Tambah Berita" action="{{ route('user.store') }}">
        @include('user.create')
    </x-modal-add>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <x-modal-add-call>
                        Add User
                    </x-modal-add-call>
                    <table id="datatable-blog" class="display nowrap table table-striped" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                {{-- <th>content</th> --}}
                                <th>email</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form id="delete-form-{{ $user->id }}"
                                            action="{{ route('user.destroy', $user) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="event.preventDefault(); deleteConfirmation({{ $user->id }});">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div> --}}
    </div>
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function deleteConfirmation(id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    timerProgressBar: true,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'User Deleted',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(() => {
                            document.getElementById('delete-form-' + id).submit();
                        }, 1500);
                    }
                })
            }
            $('#content').summernote({
                placeholder: 'Write here...',
                tabsize: 2,
                height: 100
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ $message }}',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        @elseif($message = Session::get('failed'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ $message }}',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        @endif
    @endpush
@endsection
