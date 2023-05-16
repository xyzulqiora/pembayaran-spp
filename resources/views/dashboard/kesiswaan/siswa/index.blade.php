<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Siswa</h4>
                @if(auth()->user()->can('tambah-data'))
                <div class="nk-block-des justify-content-around">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                <h4 class="card-title"><a href="{{route('siswa-create')}}" class="btn btn-primary" type="button">+ New User</a></h4>
                @endif
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">Nis</span></th>
                            <th class="tb-tnx-id"><span class="">Nama</span></th>
                            <th class="tb-tnx-id"><span class="">Jenis Kelamin</span></th>
                            <th class="tb-tnx-id"><span class="">Kelas</span></th>
                            <th class="tb-tnx-id"><span class="">Jurusan</span></th>
                            <th class="tb-tnx-id"><span class="">SPP</span></th>
                            @if(auth()->user()->can('tambah-data'))
                            <th class="tb-tnx-action">
                                <span>&nbsp;</span>
                            </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $siswa as $w )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $w->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->nis }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->users->name }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->users->jenkel }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->kelas->nama_kelas }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->jurusan->nama_jurusan }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $w->spp->nominal}}</span>
                            </td>
                            @if(auth()->user()->can('tambah-data'))
                            <td class="tb-tnx-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a href="{{ route('siswa-detail', $w->id) }}">View</a></li>
                                            <li style="background-color: rgb(255, 174, 0)"><a href="{{ route('siswa-edit', $w->id) }}">Edit</a></li>
                                            <form action="{{ route('siswa-delete', $w->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <li type="submit" style="background-color: rgb(255, 0, 0)"><a onclick="return confirm('Are you sure?')">Remove</a></li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
