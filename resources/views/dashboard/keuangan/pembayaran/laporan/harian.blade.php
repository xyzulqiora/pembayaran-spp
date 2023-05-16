<x-dashboard-layout>
    <div class="nk-block nk-block-lg mt-5">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Laporan Harian</h4>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-inner">
                <form method="POST" action="{{ route('print_harian') }}">
                    @csrf
                    <div class="row g-gs">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Pilih Tanggal</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="date"  class="form-control date- picker" data-date- format="yyyy-mm-dd" name="date" id="date" required>
                                </div>
                                <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-lg btn-primary">Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .nk-block -->
</x-dashboard-layout>
