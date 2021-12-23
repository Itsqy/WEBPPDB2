<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="atlantis/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('atlantis/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="atlantis/atlantis/css/demo.css">
</head>

<body data-background-color="dark" onload="window.print();">
    <div class="wrapper">


        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-white pb-2">Detail Formulir</h2>
                    {{-- <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                    I am wise, so I am changing myself.</h5> --}}
                </div>
                <div class="card-header">
                    <div class="card-body" data-aos="zoom-out">
                        {{-- atas nya --}}
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('atlantis/img/ppdb.png') }}" alt="" class="w-50">
                                </div>
                                <div class="col-md-9">
                                    <h3 class="text-center mt-3 ">kartu tanda peserta</h3>
                                </div>
                            </div>

                        </div>

                        {{-- isianya --}}
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-4 border">

                                    <img src="{{ url('storage/' . $formulir->photo) }}" alt=""
                                        class="img-thumbnail w-100">
                                </div>
                                <div class="col-md-8">
                                    <h4 style="text-align: start; margin-top:50px ">NAMA :</h4>
                                    <h3><strong>{{ $formulir->full_name }}</strong></h3>
                                    <h4 style="text-align: start margin-top:30px">NISN :</h4>
                                    <h3><strong>{{ $formulir->nisn }}</strong></h3>
                                    <h4 style="text-align: start margin-top:30px">NO REGISTERASI :</h4>
                                    <h3><strong>REG-2021-{{ str_pad($formulir->id, 5, '0', STR_PAD_LEFT) }}</strong>
                                    </h3>
                                    <h4 style="text-align: start margin-top:30px">ASAL SEKOLAH :</h4>
                                    <h3><strong>{{ $formulir->school }}</strong></h3>
                                    <h4 style="text-align: start margin-top:30px">TEMPAT, TANGGAL LAHIR : :</h4>
                                    <h3><strong>{{ $formulir->place }},
                                            {{ \Carbon\Carbon::parse($formulir->birthday)->format('d - F - Y') }}</strong>
                                    </h3>

                                </div>
                            </div>
                        </div>

                        {{-- bawah , nilainya --}}
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-6 border">
                                    <h4 style="text-align: start">Nilai SKD :</h4>
                                    <h3><strong>
                                            @if (!$formulir->nilai1)
                                                Nilai Kamu Belum Di konfirmasi
                                            @else
                                                {{ $formulir->nilai1 }}
                                            @endif

                                        </strong></h3>
                                    <h4 style="text-align: start">Nilai Wawancara :</h4>
                                    <h3><strong>
                                            @if (!$formulir->nilai2)
                                                Nilai Kamu Belum Di konfirmasi
                                            @else
                                                {{ $formulir->nilai2 }}
                                            @endif

                                        </strong></h3>
                                </div>
                                <div class="col-md-6">

                                    <h4 style="text-align: start; margin-top:50px"> STATUS KELULUSAN :</h4>
                                    <h3><strong>
                                            @if ($formulir->nilai1 + $formulir->nilai2 >= 160)
                                                {{-- <th>status :</th> --}}
                                                <td> <span class="badge bg-success"> <i class="fas fa-check">lolos
                                                        </i></span>
                                                </td>
                                            @elseif($formulir->nilai1 + $formulir->nilai2 < 160 && $formulir->nilai1
                                                    + $formulir->nilai1 > 0)
                                                    {{-- <th>status :</th> --}}
                                                    <td> <span class="badge bg-danger"> <i class="fas fa-history">Belum
                                                                Lolos</i></span></td>
                                                @elseif($formulir->nilai1 + $formulir->nilai2 == 0)
                                                    {{-- <th>status :</th> --}}
                                                    <td> <span class="badge bg-warning"><i
                                                                class="fas fa-history">Pending</i></span>
                                                    </td>


                                            @endif
                                        </strong></h3>

                                </div>
                            </div>
                        </div>
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-12 border">
                                    <h4>*Catatan</h4>
                                    <h5>-Jika pending berarti anda belum mengerjakan soal

                                    </h5>
                                    <h5>-jika lolos langsung daftar ulang ke nomor 08966xxxx

                                    </h5>
                                    <h5>-jika belum lolos maka bersabar , dan jangan pantang menyerah

                                    </h5>
                                </div>

                            </div>
                            {{-- <div class="d-flex justify-content-end"><a class=" btn btn-primary"
                                href="{{ route('generatecard', $formulir->id) }}" target="_blank">download</a></div> --}}
                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                            href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


    <!-- Chart JS -->
    <script src="{{ asset('atlantis/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('atlantis/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('atlantis/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('atlantis/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('atlantis/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="atlantis/js/setting-demo.js"></script>
    <script src="atlantis/js/demo.js"></script>
    <script>
        $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });

        $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });

        $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });
    </script>
</body>

</html>
