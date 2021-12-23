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
                <h4>Tambah Guru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.store') }}" method="post">
                    @csrf
                    <b style="font-size: 15px;">Tambah User Guru</b>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">nama :</label>
                        <input type="text" name="name" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">email :</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">

                        <label for="exampleFormControlSelect1">Peran :</label>
                        <select name="role" class="form-control" id="exampleFormControlSelect1">
                            <option value="guru">Guru</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">password :</label>
                        <input type="password" name="password" class="form-control" id="tugas"
                            placeholder="Masukin huruf awal nya Kapital yahh">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">tambah</button>
                </form>
                {{-- <table class="table table-hover">
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

                        @endforeach
                        <td>{{ $i++ }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->Role }}</td>
                        <td>{{ $u->email }}</td>
                        <td></td>
                        <td></td>
                    </tbody>

                </table> --}}
            </div>
        </div>
    </div>


@endsection
