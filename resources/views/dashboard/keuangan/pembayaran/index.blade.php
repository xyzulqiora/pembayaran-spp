
<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Riwayat Pembayaran</h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <table class="table table-tranx">
                <thead class="table-dark">
                    <tr class="tb-tnx-head">
                        <th class="tb-tnx-id"><span class="">No</span></th>
                        <th class="tb-tnx-id"><span class="">Petugas</span></th>
                        <th class="tb-tnx-id"><span class="">Siswa</span></th>
                        <th class="tb-tnx-id"><span class="">SPP Bulan</span></th>
                        <th class="tb-tnx-id"><span class="">Jenis</span></th>
                        <th class="tb-tnx-id"><span class="">Jumlah Bayar</span></th>
                        <th class="tb-tnx-id"><span class="">Metode Pembayaran</span></th>
                        <th class="tb-tnx-id"><span class="">Keterangan</span></th>
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
        </div><!-- .card-preview -->
    </div><!-- nk-block -->
</x-dashboard-layout>
