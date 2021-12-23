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
                                    <th>Photo</th>
                                    <th>Nama</th>

                                    <th>Tanda Tangan</th>

                                </tr>
                            </thead>
                            @foreach ($formulir as $form)
                                <tbody>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <img src="{{ url('storage/' . $form->photo) }}" alt=""
                                                style="max-width:100px !important; border-radius:5px">
                                        </td>
                                        <td>{{ $form->full_name }}</td>
                                        <td>
                                            <div class="form-button-action">

                                            </div>
                                        </td>
                                    </tr>

                                    <div class="d-flex justify-content-end"><a class=" btn btn-primary"
                                            href="{{ route('cetakabsen') }}" target="_blank">download</a>
                                    </div>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
