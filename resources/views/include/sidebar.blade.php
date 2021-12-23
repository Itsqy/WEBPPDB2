<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                @if (Auth::user()->Role == 'admin')

                    <li class="nav-item active">
                        <a href="/dashboard" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas icon-pie-chart"></i>
                            <p>Admin</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('tableusershow') }}">
                                        <span class="sub-item">Table User </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('guru.index') }}">
                                        <span class="sub-item">Tambah Guru </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('absen') }}">
                                        <span class="sub-item">Cetak Absen </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @elseif(Auth::user()->Role == 'guru')

                    <li class="nav-item active">
                        <a href="/dashboard" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas icon-pie-chart"></i>
                            <p>Admin</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('tableusershow') }}">
                                        <span class="sub-item">Table User </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('guru.index') }}">
                                        <span class="sub-item">Tambah Guru </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('absen') }}">
                                        <span class="sub-item">Cetak Absen </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @elseif(Auth::user()->Role == 'user')
                    <li class="nav-item active">
                        <a href="/dashboard" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>

                        </a>

                    </li>
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-layer-group"></i>
                            <p>Daftar</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('index') }}">
                                        <span class="sub-item">Isi Formulir</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('show') }}">
                                        <span class="sub-item">Detail formulir </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('card') }}">
                                        <span class="sub-item">Card </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('after') }}">
                                        <span class="sub-item">Nilai kelulusan </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif


            </ul>
        </div>
    </div>
</div>
