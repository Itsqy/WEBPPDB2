@extends('template')

@section('isi')
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-white pb-2">Welcome back, Hizrian!</h2>
                <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
                    I am wise, so I am changing myself.</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-dark bg-primary-gradient">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">+5%</div>
                            <h2 class="mb-2">17</h2>
                            <p>Users online</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark bg-secondary-gradient">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">-3%</div>
                            <h2 class="mb-2">27</h2>
                            <p>New Users</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart2"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-dark bg-success2">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-right">+7%</div>
                            <h2 class="mb-2">213</h2>
                            <p>Transactions</p>
                            <div class="pull-in sparkline-fix chart-as-background">
                                <div id="lineChart3"><canvas width="327" height="70"
                                        style="display: inline-block; width: 327px; height: 70px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
