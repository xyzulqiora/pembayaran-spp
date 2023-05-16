<x-dashboard-layout>
    <div class="components-preview wide-md mx-auto">
        <div class="nk-block-head nk-block-head-lg wide-sm">
            <div class="nk-block-head-content">
                <h2 class="nk-block-title fw-normal">Edit Siswa</h2>
                <div class="nk-block-des">
                    <p class="lead" style="color: red">Periksa Kembali Saat Penginputan Data!!</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <form method="POST" action="{{ route('siswa-update', $siswa->id) }}" class="form-validate">
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
                                        <input type="email" class="form-control" id="default-01" value="{{ $users->email }}" name="email" maxlength="30" required>
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
                                            <select class="form-control" id="default-06" name="roles_id">
                                                <option value="1">Siswa</option>
                                                <option value="2">Petugas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Status</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control" id="exampleFormControlSelect1" name="status_id">
                                            @foreach ( $status as $t  )
                                            @if (old('status', $siswa->status_id) == $t->id)
                                            <option value="{{ $t->id }}" selected>{{ $t->status }}</option>
                                            @else
                                            <option value="{{ $t->id }}">{{ $t->status }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-full-name">NISN</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="fv-full-name" value="{{ $siswa->nisn }}" name="nisn" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-01">NIS</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="default-01" value="{{ $siswa->nis }}" maxlength="15" name="nis" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Kelas</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control" id="exampleFormControlSelect1" name="kelas_id">
                                            @foreach ( $kelas as $k  )
                                            @if (old('kelas_id', $siswa->kelas_id) == $k->id)
                                            <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                                            @else
                                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Jurusan</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control" id="exampleFormControlSelect1" name="jurusan_id">
                                            @foreach ( $jurusan as $l  )
                                            @if (old('jurusan', $siswa->jurusan_id) == $l->id)
                                            <option value="{{ $l->id }}" selected>{{ $l->nama_jurusan }}</option>
                                            @else
                                            <option value="{{ $l->id }}">{{ $l->nama_jurusan }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">SPP</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control" id="exampleFormControlSelect1" name="spp_id">
                                            @foreach ( $spp as $p  )
                                            @if (old('spps_id', $siswa->spp_id) == $p->id)
                                            <option value="{{ $p->id }}" selected>{{ $p->nominal }}</option>
                                            @else
                                            <option value="{{ $p->id }}">{{ $p->nominal }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="default-textarea">Alamat</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control no-resize" name="alamat" required id="default-textarea">{{ $siswa->alamat }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary">Tambah Data Siswa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- .card-preview -->
</x-dashboard-layout>
