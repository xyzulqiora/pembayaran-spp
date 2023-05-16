<!DOCTYPE html>
<html>
</style>
<body>

<h2 align="center">Laporan Data Siswa</h2>

<table style="width:100%" border="1" cellspacing="0">
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
</table>
<script type="text/javascript">
        window.print();
    </script>
</body>
</html>
