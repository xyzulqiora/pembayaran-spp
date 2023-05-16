<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Pembayaran Bulanan</h4>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <form method="POST" action="{{ route('bulanan-store') }}" class="form-validate">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="default-1-03">Petugas</label>
                                <input type="text" name="users_id" class="form-control" id="default-1-03" disabled value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nama Siswa</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-search="on" required name="siswa_id">
                                        @foreach ( $siswa as $w  )
                                        <option value=""></option>
                                        <option value="{{ $w->id }}">{{ $w->users->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Biaya</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" required multiple="multiple" data-placeholder="Pilih Biaya Siswa" name="biaya_siswa_id[]">
                                        @foreach ( $biaya as $b  )
                                        <option value="{{ $b->id }}">{{ $b->nama_biaya }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" id="bulan_container">
                            <div class="form-group">
                                <label class="form-label">Bulan SPP</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" multiple="multiple" data-placeholder="Pilih Bulan" name="spp_bulan[]">
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                        <option value="Lainnya" hidden>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-full-name">Jumlah Bayar</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="fv-full-name" name="jumlah_bayar" required placeholder="Masukan Jumlah Pembayaran">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-full-name">Metode Pembayaran</label>
                                <div class="form-control-wrap">
                                    <select class="form-control" required id="exampleFormControlSelect1" name="metode_pembayaran_id">
                                        <option value="1">Tunai</option>
                                        <option value="2">Transfer Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="fv-full-name">Keterangan</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="fv-full-name" name="keterangan" placeholder="Masukan Keterangan">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Tanggal Bayar</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="date" name="created_at" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                </div>
                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-lg btn-primary">Tambah Data Siswa</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
    <script>
        $(document).ready(function() {
          $('.js-select2').on('select2:select', function (e) {
            var value = e.params.data.id;
            if (value == 1) {
              $('#bulan-container').show();
            } else {
              $('#bulan-container').hide();
            }
          });
        });
        </script>
</x-dashboard-layout>
