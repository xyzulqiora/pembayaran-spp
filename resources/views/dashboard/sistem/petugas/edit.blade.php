<x-dashboard-layout>
    <div class="components-preview wide-md mx-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Edit Petugas</h2>
                <div class="nk-block-des">
                    <p class="lead" style="color: red">Periksa Kembali Saat Penginputan Data!!</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form method="POST" action="{{ route('petugas-update', $petugas->id) }}" class="form-validate">
                        @method('put')
                        @csrf
                    <div class="preview-block">
                        <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Nama Lengkap</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="default-01" value="{{ $users->name }}" name="name" maxlength="30" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="default-01" value="{{ $users->email }}" name="email" maxlength="25" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Password</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="default-01" value="{{ $users->password }}" name="password" maxlength="15" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">Nomor Telepon</label>
                                    <div class="form-control-wrap">
                                        <input type="number" class="form-control" id="default-01" value="{{ $users->no_telp }}" maxlength="15" name="no_telp" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Gender</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="default-06" name="jenkel">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" hidden>
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Role</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="default-06" name="role_id">
                                                <option value="1">Siswa</option>
                                                <option value="2">Petugas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">NIP</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="default-01" value="{{ $petugas->nip }}" maxlength="10" name="nip" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary">Edit Data Petugas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- .card-preview -->
</x-dashboard-layout>
