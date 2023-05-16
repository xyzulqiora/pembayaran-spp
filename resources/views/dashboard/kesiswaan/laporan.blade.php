<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('Admin/images/favicon.png') }}">
    <title>Laporan Siswa</title>
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('Admin/assets/css/theme.css?ver=3.1.2') }}">
</head>

<body class="bg-white" onload="printPromot()">
    <div class="nk-block">
            <div class="invoice-wrap">
                <div class="invoice-brand text-center">
                    <img src="{{ asset('assets/img/sekolah/logo.png') }}" srcset="{{ asset('assets/img/sekolah/logo.png') }}" alt="">
                </div>
                <div class="invoice-head">
                    <div class="invoice-desc">
                        <h3 class="title">Laporan Siswa</h3>
                        <ul class="list-plain">
                            <li class="invoice-id"><span>SMK MVP ARS INTERNATIONAL</span></li>
                        </ul>
                    </div>
                </div>
                <div class="invoice-bills">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>NISN</th>
                                    <th>NIS</th>
                                    <th>no_telp</th>
                                    <th>jenkel</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Spp</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $k)
                                <tr>
                                    <td>{{$k->id}}</td>
                                    <td>{{$k->users->name}}</td>
                                    <td>{{$k->users->email}}</td>
                                    <td>{{$k->nisn}}</td>
                                    <td>{{$k->nis}}</td>
                                    <td>{{$k->no_telp}}</td>
                                    <td>{{$k->users->jenkel}}</td>
                                    <td>{{$k->kelas->nama_kelas}}</td>
                                    <td>{{$k->jurusan->nama_jurusan}}</td>
                                    <td>{{$k->spp->nominal}}</td>
                                    <td>{{$k->alamat}}</td>
                                    <td>{{$k->statuse->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .invoice-bills -->
            </div><!-- .invoice-wrap -->
    </div><!-- .nk-block -->
    <script>
        function printPromot() {
            window.print();
        }
    </script>
</body>

</html>
