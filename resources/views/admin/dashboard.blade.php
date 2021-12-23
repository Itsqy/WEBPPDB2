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
                    @if (Auth::user()->Role == 'admin')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-dark bg-primary-gradient">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $user }}</div>
                                        <h2 class="mb-2">Total User</h2>
                                        <p>Users </p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-secondary-gradient">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $formulir }}</div>
                                        <h2 class="mb-2">Total Formulir</h2>
                                        <p>Formulir</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart2"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-success2">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $admin }}</div>
                                        <h2 class="mb-2">Tota Admin</h2>
                                        <p>Admin</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart3"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-success2">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $guru }}</div>
                                        <h2 class="mb-2">Total Guru</h2>
                                        <p>Guru</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart3"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div id="container"></div>
                        </div>
                        <script>
                            Highcharts.chart('container', {
                                chart: {
                                    type: 'bar'
                                },
                                title: {
                                    text: 'Dashboard Admin'
                                },
                                xAxis: {
                                    categories: ['Formulir', 'User', 'Guru', 'Admin', ],
                                    title: {
                                        text: null
                                    }
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Population (millions)',
                                        align: 'high'
                                    },
                                    labels: {
                                        overflow: 'justify'
                                    }
                                },
                                tooltip: {
                                    valueSuffix: ' millions'
                                },
                                plotOptions: {
                                    bar: {
                                        dataLabels: {
                                            enabled: true
                                        }
                                    }
                                },
                                legend: {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'top',
                                    x: -40,
                                    y: 80,
                                    floating: true,
                                    borderWidth: 1,
                                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                                    shadow: true
                                },
                                credits: {
                                    enabled: false
                                },
                                series: [{
                                    name: '2021 year',
                                    data: [{{ $formulir }}, {{ $user }}, {{ $guru }}, {{ $admin }}, ]
                                }]
                            });
                        </script>
                    @elseif(Auth::user()->Role == 'guru')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-dark bg-primary-gradient">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $user }}</div>
                                        <h2 class="mb-2">Total User</h2>
                                        <p>Users </p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-secondary-gradient">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $formulir }}</div>
                                        <h2 class="mb-2">Total Formulir</h2>
                                        <p>Formulir</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart2"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-success2">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $admin }}</div>
                                        <h2 class="mb-2">Tota Admin</h2>
                                        <p>Admin</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart3"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-dark bg-success2">
                                    <div class="card-body pb-0">
                                        <div class="h1 fw-bold float-right">{{ $guru }}</div>
                                        <h2 class="mb-2">Total Guru</h2>
                                        <p>Guru</p>
                                        <div class="pull-in sparkline-fix chart-as-background">
                                            <div id="lineChart3"><canvas width="327" height="70"
                                                    style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div id="container"></div>
                        </div>
                        <script>
                            Highcharts.chart('container', {
                                chart: {
                                    type: 'bar'
                                },
                                title: {
                                    text: 'Dashboard Admin'
                                },
                                xAxis: {
                                    categories: ['Formulir', 'User', 'Guru', 'Admin', ],
                                    title: {
                                        text: null
                                    }
                                },
                                yAxis: {
                                    min: 0,
                                    title: {
                                        text: 'Population (millions)',
                                        align: 'high'
                                    },
                                    labels: {
                                        overflow: 'justify'
                                    }
                                },
                                tooltip: {
                                    valueSuffix: ' millions'
                                },
                                plotOptions: {
                                    bar: {
                                        dataLabels: {
                                            enabled: true
                                        }
                                    }
                                },
                                legend: {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'top',
                                    x: -40,
                                    y: 80,
                                    floating: true,
                                    borderWidth: 1,
                                    backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                                    shadow: true
                                },
                                credits: {
                                    enabled: false
                                },
                                series: [{
                                    name: '2021 year',
                                    data: [{{ $formulir }}, {{ $user }}, {{ $guru }},
                                        {{ $admin }},
                                    ]
                                }]
                            });
                        </script>


                    @elseif(Auth::user()->Role == 'user')
                        @if ($form)
                            <div class="row justify-content-center align-items-center mb-1">
                                <div class="container" data-aos="fade-up">
                                    <div class="card-body card-primary">
                                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                <div class="icon"><i class="bx bx-file"></i></div>
                                                <p>{{ $auth->name }} Sudah daftar ! <span class="badge bg-success"> <i
                                                            class="fas fa-check">Done!!</i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row justify-content-center align-items-center mb-1">
                                <div class="container" data-aos="fade-down">
                                    <div class="card-body card-warning">
                                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                <div class="icon"><i class="bx bx-file"></i></div>
                                                <p>{{ $auth->name }} status kelolosan kamu :


                                                    @if ($form->nilai1 + $form->nilai2 >= 160)


                                                        <span class="badge bg-success"> <i class="fas fa-check">lolos
                                                            </i></span>

                                                    @elseif($form->nilai1 + $form->nilai2 < 160 && $form->nilai1
                                                            + $form->nilai1 > 0) <span class="badge bg-danger"> <i
                                                                    class="fas fa-close">Belum
                                                                    Lolos </i></span>

                                                        @elseif($form->nilai1 + $form->nilai2 ==
                                                            0)

                                                            <span class="badge bg-warning"><i class="fas fa-history">
                                                                    Pending </i></span>


                                                    @endif

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center mb-1">
                                <div class="container" data-aos="fade-down">
                                    <div class="card-body card-danger">
                                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                                <div class="icon"><i class="bx bx-file"></i></div>
                                                <p>{{ $auth->name }} nilai-nilai kamu :


                                                    @if (!$form->nilai2)
                                                        <p>Nilai Wawancara :
                                                            <span> Kamu Belum Tes</span>
                                                        </p>
                                                    @else
                                                        <p>Nilai Wawancara :
                                                            <span> {{ $form->nilai2 }}</span>
                                                        </p>

                                                    @endif



                                                    @if (!$form->nilai1)
                                                        <p>Nilai SKD :
                                                            <span> Kamu Belum Tes</span>
                                                        </p>


                                                    @else
                                                        <p>Nilai SKD :
                                                            <span> {{ $form->nilai2 }}</span>
                                                        </p>

                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon"><i class="bx bx-file"></i></div>
                                    <p>{{ $auth->name }} Belom daftar ! <span class="badge bg-warning">
                                            <i class="fas fa-history"> Yok ke </i> <a href="/index">
                                                Formulir
                                            </a></span>
                                    </p>
                                </div>
                            </div>
                        @endif

                    @endif

                </div>
            </div>
        </div>
    </div>


@endsection
