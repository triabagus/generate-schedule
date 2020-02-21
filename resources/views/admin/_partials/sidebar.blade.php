/* COMMENT */
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL('images/avatar.png') }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    {{ isset(Auth::user()->name) ? Auth::user()->name : '' }}
                </p>
                <a href="#">
                    <i class="fa fa-circle text-success">
                    </i>
                    Online
                </a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header" style="text-align:center;">
                MAIN NAVIGATION
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="glyphicon glyphicon-home"></i>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa   fa-calendar"></i> <span>Data Waktu</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.timedays') }}">
                        <i class="fa   fa-calendar-check-o"></i>
                        <span>
                            Manajemen Waktu
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.times') }}">
                        <i class="fa  fa-clock-o"></i>
                        <span>
                            Jam
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.days') }}">
                        <i class="fa fa-calendar-plus-o"></i>
                        <span>
                            Hari
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.timenotavailables') }}">
                        <i class="fa  fa-clock-o"></i>
                        <span>
                            Waktu Berhalangan
                        </span>
                    </a>
                </li>
              </ul>
            </li>
            <li>
                <a href="{{ route('admin.lecturers') }}">
                    <i class="fa fa-users"></i>
                    <span>
                        Guru
                    </span>
                </a>
            </li>
             <li>
                <a href="{{ route('admin.courses') }}">
                    <i class="fa fa-file"></i>
                    <span>
                        Mata Pelajaran
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.rooms') }}">
                    <i class="fa fa fa-home"></i>
                    <span>
                        Kelas
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.teachs') }}">
                    <i class="fa fa-university"></i>
                    <span>
                        Kegiatan
                    </span>
                </a>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-file-archive-o"></i> <span>Generate Jadwal</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                    <a href="{{ route('admin.generates') }}">
                        <i class="glyphicon glyphicon-import"></i>
                        <span>
                            Input Generate Jadwal
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.generates.result', 1) }}">
                        <i class="glyphicon glyphicon-blackboard"></i>
                        <span>
                            Hasil Generate Jadwal
                        </span>
                    </a>
                </li>
              </ul>
            </li>
            <li>
                <a href="{{ route('admin.user') }}">
                    <i class="glyphicon glyphicon-user"></i>
                    <span>
                        User
                    </span>
                </a>
            </li>
        </ul>
    </section>
</aside>
