<x-dashboard-layout>
    <div class="components-preview wide-md mx-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Edit Tahun Ajaran</h2>
                <div class="nk-block-des">
                    <p class="lead" style="color: red">Periksa Kembali Saat Penginputan Data!!</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form method="POST" action="{{ route('ajaran-update', $ajaran->id) }}" class="form-validate">
                        @method('put')
                        @csrf
                    <div class="preview-block">
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Tahun Ajaran</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="default-01" value="{{ $ajaran->tahun_ajaran }}" name="tahun_ajaran" maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Nominal</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="default-01" value="{{ $ajaran->nominal }}" maxlength="10" name="nominal" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary">Edit Data Tahun Ajaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- .card-preview -->
</x-dashboard-layout>
