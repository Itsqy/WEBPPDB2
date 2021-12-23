@extends('template')
@section('isi')
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Formulir</h2>
                {{-- <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                    I am wise, so I am changing myself.</h5> --}}
            </div>
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" data-aos="zoom-out">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Form Daftar</div>
                            </div>
                            <!-- allert succes -->
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <b style="font-size=15px">1. Form Siswa</b>
                                <div class="form-group">
                                    <label for="foto">Foto Siswa 3x4 :</label>
                                    <input type="file" name="photo" class="form-control" placeholder="" id="foto"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="namalengkap">Nama Lengkap :</label>
                                    <input type="text" required name="full_name" class="form-control" id="namalengkap"
                                        placeholder="Enter fullname...">
                                    @if ($errors->has('full_name'))
                                        <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="namalengkap">NISN :</label>
                                    <input type="text" required name="nisn" class="form-control" id="namalengkap"
                                        placeholder="Enter NISN...">
                                </div>
                                <div class="form-group">
                                    <label for="namalengkap">asal sekolah :</label>
                                    <input type="text" required name="school" class="form-control" id="namalengkap"
                                        placeholder="Enter fullname...">
                                </div>

                                <div class="form-check">
                                    <label>Jenis Kelamin :</label><br />
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="gender" value="laki" checked="">
                                        <span class="form-radio-sign">Laki - Laki</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="gender" value="perempuan">
                                        <span class="form-radio-sign">Perempuan</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="tp2">tempat Lahir :</label>
                                    <input type="string" name="place" required class="form-control" id="tp2"
                                        placeholder="tempat Lahir...">
                                </div>
                                <div class="form-group">
                                    <label for="tp2">Tanggal Lahir :</label>
                                    <input type="date" name="birthday" required class="form-control"
                                        placeholder="Tanggal Lahir...">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
                                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                        <option value="islam">islam</option>
                                        <option value="kristen">kristen</option>
                                        <option value="katolik">katolik</option>
                                        <option value="buddha">buddha</option>
                                        <option value="konghucu">konghucu</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="ank">Anak Ke- :</label>
                                    <input type="number" name="anak_ke" required class="form-control" id="ank"
                                        placeholder="anak ke berapa...">
                                </div>
                                <div class="form-group">
                                    <b>Jumlah Saudara :</b><br>
                                    <label for="inlineinput" class="col-md-3 col-form-label">Kandung :</label>
                                    <div class="col-md-9 p-0">
                                        <input type="number" required name="jml_saudara" class="form-control input-full"
                                            id="inlineinput" placeholder="Enter Input">
                                    </div>
                                    <label for="inlineinput2" class="col-md-3 col-form-label">Tiri :</label>
                                    <div class="col-md-9 p-0">
                                        <input type="number" name="jml_saudara" required class="form-control input-full"
                                            id="inlineinput2" placeholder="Enter Input">
                                    </div>
                                    <label for="inlineinput3" class="col-md-3 col-form-label">Angkat :</label>
                                    <div class="col-md-9 p-0">
                                        <input type="number" name="jml_saudara" required class="form-control input-full"
                                            id="inlineinput3" placeholder="Enter Input">
                                    </div>
                                </div>

                                {{-- 2. Keterangan tmpt tinggal --}}
                                <b style="margin-left: 10px;font-size: 15px;">2.Keterangan Tempat Tinggal</b>
                                <div class="form-group">
                                    <label for="almtrm">Alamat Rumah :</label>
                                    <input type="text" name="address" required class="form-control" id="almtrm"
                                        placeholder="alamat(rt/rw)">
                                </div>

                                <div class="form-group">
                                    <label for="tlprmh">No. Telpon :</label>
                                    <input type="number" name="phone" required class="form-control" id="tlprmh"
                                        placeholder="...">
                                </div>
                                <div class="form-check">
                                    <label>Tinggal Dengan :</label><br />
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="tinggal_dengan" value="orangtua"
                                            checked="">
                                        <span class="form-radio-sign">Orang Tua</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="tinggal_dengan" value="asrama">
                                        <span class="form-radio-sign">Asrama</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="tinggal_dengan" value="saudara">
                                        <span class="form-radio-sign">Saudara</span>
                                    </label>
                                </div>
                                {{-- 3.Keterangan Kesehatan --}}
                                <b style="margin-left: 10px;font-size: 15px;">3.Keterangan Kesehatan</b>
                                <div class="form-group">
                                    <label for="pykt">Riwayat Penyakit(namaPenyakit/kapan) :</label>
                                    <input type="text" name="penyakit" required class="form-control" id="pykt"
                                        placeholder="jika tidak maka isi strip...">
                                </div>
                                {{-- 4.Data OrangTua/Wali --}}
                                <b style="margin-left: 10px;font-size: 15px;">4.Data OrangTua/Wali</b><br>
                                <b style="margin-left: 13px;font-size: 13px;">A. Data Ayah</b>
                                {{-- Data Ayah --}}
                                <div class="form-group">
                                    <label for="nmyh">Nama Ayah :</label>
                                    <input type="text" name="nama_ayah" required class="form-control" id="nmyh"
                                        placeholder="masih ada/almarhum">
                                </div>

                                <div class="form-group">
                                    <label for="krjyh">Pekerjaan :</label>
                                    <input type="text" name="kerja_ayah" required class="form-control" id="krjyh"
                                        placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="pdtrkh">Pendidikan Terakhir :</label>
                                    <input type="text" name="pend_akhira" required class="form-control" id="pdtrkh"
                                        placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="nohape">No. HP/WA :</label>
                                    <input type="number" name="no_telpayah" required class="form-control" id="nohape"
                                        placeholder="...">
                                </div>
                                <b style="margin-left: 13px;font-size: 13px;">B. Data Ibu</b>
                                {{-- Data Ibu --}}
                                <div class="form-group">
                                    <label for="nmibu">Nama Ibu :</label>
                                    <input type="text" name="nama_ibu" required class="form-control" id="nmibu"
                                        placeholder="masih ada/almarhum">
                                </div>
                                <div class="form-group">
                                    <label for="krjyh">Pekerjaan :</label>
                                    <input type="text" name="kerja_ibu" required class="form-control" id="krjyh"
                                        placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label for="pdibu">Pendidikan Terakhir :</label>
                                    <input type="text" name="pend_akhiri" required class="form-control" id="pdibu"
                                        placeholder="...">
                                </div>

                                <div class="form-group">
                                    <label for="nohapeibu">No. HP/WA :</label>
                                    <input type="number" name="no_telpibu" required class="form-control" id="nohapeibu"
                                        placeholder="...">
                                </div>




                                {{-- Nilai - Nilai --}}
                                <b style="margin-left: 10px;font-size: 15px;">4.Berkas Yang Harus Di Upload</b><br><br>
                                {{-- 1.ijazah --}}

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">File Ijazah</label>
                                    <input type="file" required name="ijazah" class="form-control-file"
                                        id="exampleFormControlFile1">
                                </div>
                                {{-- 2.Rapot --}}

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">File rapot</label>
                                    <input type="file" required name="rapot" class="form-control-file"
                                        id="exampleFormControlFile1">
                                </div>

                                <div class="form-group">
                                    <label for="prsts">Prestasi Yang Pernah Diraih :</label>
                                    <input type="text" required name="prestasi" class="form-control" id="prsts"
                                        placeholder="...">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">File Sertifikat</label>
                                    <input type="file" required name="file_prestasi" class="form-control-file"
                                        id="exampleFormControlFile1">
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
