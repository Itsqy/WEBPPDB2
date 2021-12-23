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


                        </div>
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
