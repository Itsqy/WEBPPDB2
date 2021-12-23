@extends('template')

@section('isi')
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">User</h2>
                {{-- <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                I am wise, so I am changing myself.</h5> --}}
            </div>
            <div class="card-header">
                <a href="{{ route('guru.create') }}" class="btn btn-success"> <i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>No</th>
                        <th>Nama Guru </th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Action</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->Role }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    <form action="{{ route('guru.destroy', $u->id) }}" method="POST"
                                        onsubmit="return confirm('hapus {{ $u->name }}  ?')">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('guru.edit', $u->id) }}" class="btn btn-warning"> <i
                                                class="fas fa-edit"> Edit </i></a>
                                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash">Hapus</i>
                                        </button>

                                    </form>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
