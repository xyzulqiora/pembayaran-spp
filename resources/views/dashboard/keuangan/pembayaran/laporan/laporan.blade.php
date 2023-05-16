<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('Admin/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Basic Table - General | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('Admin/assets/css/theme.css?ver=3.1.2') }}">
</head>
{{-- <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto"> --}}
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal mt-5">Laporan Pembayaran</h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    {{-- <div class="card card-bordered card-preview"> --}}
                        <div class="card-inner">
                            <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th class="col">No</th>
                                    <th class="col">Petugas</th>
                                    <th class="col">Siswa</th>
                                    <th class="col">SPP Bulan</th>
                                    <th class="col">Biaya</th>
                                    <th class="col">SPP</th>
                                    <th class="col">Metode</th>
                                    <th class="col">Keterangan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $pembayaran as $m )
                                    <tr class="tb-tnx-item">
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->id }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->users->name }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->siswa->users->name }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->spp_bulan }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->biayaSiswa->nama_biaya }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->jumlah_bayar }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->MetodePembayaran->metode_pembayaran }}</span>
                                        </td>
                                        <td class="tb-tnx-id">
                                            <span>{{ $m->keterangan }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div><!-- .card-preview -->
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
<script type="text/javascript">
    window.print();
</script>
<script src="{{ asset('Admin/assets/js/bundle.js?ver=3.1.2') }}"></script>
<script src="{{ asset('Admin/assets/js/scripts.js?ver=3.1.2') }}"></script>
</body>

</html>
