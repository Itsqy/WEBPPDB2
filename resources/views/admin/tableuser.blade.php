@extends('template')
@section('isi')
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Detail Formulir</h2>
                {{-- <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                I am wise, so I am changing myself.</h5> --}}
            </div>
            <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Photo</th>
                                    <th>Ijazah</th>
                                    <th>Rapot</th>
                                    <th>Prestasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($formulir as $form)
                                <tbody>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $form->full_name }}</td>
                                        <td>
                                            <img src="{{ url('storage/' . $form->photo) }}" alt=""
                                                style="max-width:100px !important; border-radius:5px">
                                        </td>
                                        <td><img src="{{ url('storage/' . $form->ijazah) }}" alt=""
                                                style="max-width:100px !important; border-radius:5px"></td>
                                        <td><img src="{{ url('storage/' . $form->rapot) }}" alt=""
                                                style="max-width:100px !important; border-radius:5px"></td>
                                        <td><img src="{{ url('storage/' . $form->file_prestasi) }}" alt=""
                                                style="max-width:100px !important; border-radius:5px"></td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('detail'), $form->id }}" class="btn btn-primary"> <i
                                                        class="fa fa-eye">Detail</i>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
