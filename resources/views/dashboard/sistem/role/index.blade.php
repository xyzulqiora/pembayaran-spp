<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Data Petugas</h4>
                <div class="nk-block-des">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                <h4 class="card-title"><a href="{{route('petugas-create')}}" class="btn btn-primary" type="button">+ New Petugas</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">NIP</span></th>
                            <th class="tb-tnx-id"><span class="">Nama</span></th>
                            <th class="tb-tnx-id"><span class="">Jenis Kelamin</span></th>
                            <th class="tb-tnx-id"><span class="">Email</span></th>
                            <th class="tb-tnx-id"><span class="">No Telepon</span></th>
                            <th class="tb-tnx-action">
                                <span>&nbsp;</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $petugas as $g )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $g->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $g->nip }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $g->users->name }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $g->users->jenkel }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $g->users->email }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $g->users->no_telp }}</span>
                            </td>
                            <td class="tb-tnx-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a style="color: rgb(206, 151, 0)" href="{{ route('petugas-edit', $g->id) }}">Edit</a></li>
                                            <form action="{{ route('siswa-delete', $g->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <li type="submit"><a style="color: rgb(179, 2, 2)" onclick="return confirm('Are you sure?')">Remove</a></li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
