@extends('admin-news.layouts.master')

@section('title')
{{ $title= 'Dokumenatsi' }}
@stop

@section('style')
    
    <link rel="icon" type="image/png" sizes="16x16" href="new_template/assets/images/favicon.png">
    <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset ('new_template/assets/extra-libs/prism/prism.css')}}" rel="stylesheet">
    <link href="{{asset ('new_template/dist/css/style.min.css" rel="stylesheet')}}">
    
    <style>
        .plugin-details {
            display: none;
        }

        .plugin-details-active {
            display: block;
        }
    </style>
@stop

@section('script')


<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw.jquery.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/tablesaw/dist/tablesaw-init.js') }}"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/dist/sweetalert2.all.min.js') }}" aria-hidden="true"></script>
<script src="{{ asset('new_template/assets/libs/sweetalert2/sweet-alert.init.js') }}" aria-hidden="true"></script>


@stop
    

@section("content")
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- card -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                    <div class="col align-self-center">
                    <h3>Pendahuluan</h3>
                    <hr>
                    <p>Schedule-App adalah aplikasi berbasis WEB yang dibuat dari kerja sama antara Pesantren Al-Andalus dan Komunitas IT QODR untuk memudahkan dalam membuat sebuah jadwal di suatu jenjang pendidikan </p>
                    <p>Diharapkan dengan adanya Schedule-App ini maka para pengajar/guru tidak perlu lagi repot dalam melakukan perubahan suatu jadwal sekolah dengan cara manual dan dapat dilakukan dengan cara mengakses website di browhser melalui Dektop maupun Mobile </p>
                    <ul>
                        <li> Author:
                            <a href="https://wrappixel.com/" target="_blank"> Pesantren Al-Andalus </a>
                            &amp
                            <a href="https://wrappixel.com/" target="_blank"> QODR </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="alert alert-warning">CATATAN: Dilarang keras untuk mengCopy-Paste seluruh maupun sebagian dari Aplikasi tanpa seijin dengan yang berwenang !.</div>
                    {{-- <b>Support does include: </b>
                    <ul>
                        <li>1) Answering your questions or problems regarding the template.</li>
                        <li>2) Giving solution to the Bugs reported. </li>
                    </ul>
                    <p></p>
                    <b>Support does not include: </b>
                    <ul>
                        <li>1) Custmaization Work</li>
                        <li>2) Any Installation Work</li>
                        <li>3) Support for any Third Party Plugins / Software</li>
                        <li>4) Support or Guide for How to integrate with any technologies (like, PHP, .net, Java
                            etc)
                        </li>
                        <li>5) Solve bug in your implemented template</li>
                    </ul> --}}
                </div>
            </div>
            <!-- card -->
            <!-- card -->
            <div class="card" id="installation">
                <div class="card-body">
                    <h3>Panduan Penggunaan</h3>
                    <hr>
                    {{-- <p>Langkah-langkah Penggunaan</p> --}}
                    <br/>
                    <h5>Ikuti Langkah-langkah Berikut Ini :</h5>
                    <p>
                        <br/> <b>1).</b> <strong><i>Login</i></strong> akun Schedule-App anda untuk dapat masuk dan mengakses Aplikeasi, Pastikan Email dan Password yang anda masukkan tidak salah !</p>
                    <p>
                        <b>2).</b> Setelah berhasil masuk ke dalam Schedule-App, anda akan masuk ke dalam Dashboard yang didalamnya memuat informasi data-data yang nanti akan di Generate untuk membuat sebuah jadwal
                    </p>
                    <div class="alert alert-info"> Pastikan dari informasi yang terdapat Dashboard sudah mencakup semua data yang dibutuhkan untuk membuat jadwal !  </div>
                    
                    <p>
                        <b>3).</b> Apabila semua data yang dibutuhkan sudah lengkap,maka langakah selanjutnya dalah menuju ke <strong><i>Generate jadwal</strong> --> <strong>Mulai Generate</i></strong>
                    </p>
                    <p>
                        <b>4).</b> kemudian anda akan masuk ke halaman <b><i> Generate</i></b>,selanjutnya anda tinggal memasukan elemen-elemen yang diperlukan untuk meng-generate jadwal seperti nilai kromosom, nilai Generasi, nilai Crossover, dan nilai Mutasi. Dan setelah memasukkan nilai-nilai yang dibutuhkan tadi, silahkan klik tombol <b><I>Generate</I></b> di bagian bawah maka jadwal akan dibuat secara otomatis.
                    </p>
                    <p>
                        <b>5).</b> setelah anda klik tombol <b><i>Generate</i></b> maka anda akan dibawa ke halaman <b><i>Hasil Generate</i></b>, Anda dapat langsung melihat data Jadwal yang dibuat, apabila anda ingin untuk men-download jadwal tersebut maka anda dapat klik tombol <b><i>Eksport Exel Data Ini</i></b> maka data akan otomatis terdownload dengan format Exel. <br>
                    </p>
                    <p>    
                        <b>6).</b> dan apabila anda ingin melihat hasil keluruhan Jadwal dalam bentuk yang tertata selama seminggu, anda tinggal klik <b><i>Jadwal Terbaik</i></b> di bawah tombol kembali, dan disitu anda dapat mencari nama guru tertentu dan juga kelas tertentu    
                    </p>
                    
                </div>
            </div>
            <!-- card -->
            <!-- card -->
            <div class="card" id="layout">
                <div class="card-body">
                    <h3>keterangan Fitur </h3>
                    <hr>
                    <h5>DASHBOARD</h5>
                    <p>Dashboard berfungsi sebagai halaman yang menampilkan informasi jumlah data-data yang terdapat di Schedule-App <br>yang nantinya kumpulan data tadi akan digunakan sebagai bahan untuk membuat jadwal</p>
                    
                    <h5>DATA WAKTU</h5>
                    <p>Di dalam Data Waktu terdapat 4 sub bagian, penjelasannya sebagai berikut ini :</p>
                    <ul>
                        <li>
                            <h6>Management Waktu :</h6><p>berfungsi sebagai halaman yang disitu anda dapat memanagement antara Hari dengan jam pelajaran</p>
                        </li>
                        <li>
                            <h6>Jam Pelajaran :</h6><p>berisi tentang data jam pelajaran</p>
                        </li>
                        <li>
                            <h6>Hari :</h6><p>berisi tentang data Hari Kegiatan Belajar Mengajar (KBM)</p>
                        </li>
                        <li>
                            <h6>Waktu Berhalangan :</h6><p>berisi data waktu pengajar yang berhalangan di hari/jam tertentu</p>
                        </li>
                    </ul>
                    
                    <h5>Guru</h5>
                    <p>Berisi dengan data pengajar/guru yang akan mengajar selama KBM,disini anda bisa menambah dan mengedit data guru</p>

                    <h5>Kelas</h5>
                    <p>Berisi dengan data kelas-kelas yang akan di isi oleh pengajar ketika KBM,disini anda bisa menambah dan mengedit data kelas</p>

                    <h5>Mata Pelajaran</h5>
                    <p>Berisi data mata pelajaran yang akan di ajarkan kepada para siswa/siswi oleh para pengajar sesuai dengan bidangnya masing-masing,disini anda bisa menambah dan mengedit data Mata pelajaran</p>

                    <h5>Kegiatan</h5>
                    <p>Berisi dengan data kegiatan pembelajaran oleh para guru di kelas-kelas masing-masing, disini anda bisa menambah dan mengedit data kegiatan pembelajaran yang nantinya kan menjadi bahan untuk membuat jadwal</p>

                    <h5>Generate Jadwal</h5>
                    <p>Dalam Generate Jadwal dalamnya terdapat 2 sub bagian, penjelasannya sebagai berikut :</p>
                    <ul>
                        <li>
                            <h6>Mulai Generate</h6> 
                            <p>Di fitur Mulai Generate,anda dapat memasukan komponen-komponen yang di perlukan untuk membuat sebuah jadwal.Diantaranya yaitu kromosom,Generasi,Crossover,dan Mutasi</p>
                        </li>
                        <li>
                            <h6>Hasil Generate</h6>
                            <p>Fitur Hasil Generate ini anda akan di perlihatkan data-data hasil dari fitur sebelumnya yaitu fitur Mulai Generate,dan apabila anda ingin melihat hasil akhir dari data-data yang ada di hasil generate ini maka,anda bisa klik URL jadwal terbaik yang terdapat di bawah tombol kembali</p>
                        </li>
                    </ul>

                    <h5>User</h5>
                    <p>Berisi dengan data User yang bisa mengakses Schedule-App,disini anda bisa menambah dan mengedit data User.
                    </p>


                </div>
            </div>
            
            <div class="card" id="thanks">
                <div class="card-body">
                    <div class="display-5 text-center text-success"> Terima Kasih Sudah Membaca</div>
                </div>
            </div>
            <!-- card -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
</div>
    
@stop