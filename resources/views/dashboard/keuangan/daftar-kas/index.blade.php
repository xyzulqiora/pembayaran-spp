<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Kas</h4>
                <div class="nk-block-des">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                <h4 class="card-title"><a href="{{route('kas-create')}}" class="btn btn-primary" type="button">+ Tambah Kas</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">Nama Kas</span></th>
                            <th class="tb-tnx-id"><span class="">Keterangan</span></th>
                            <th class="tb-tnx-action">
                                <span>&nbsp;</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $kas as $k )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $k->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $k->nama_kas }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $k->keterangan }}</span>
                            </td>
                            <td class="tb-tnx-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li style="background-color: rgb(255, 174, 0)">
                                                <a href="{{ route('kas-edit', $k->id) }}">Edit</a>
                                            </li>
                                            <li style="background-color: rgb(255, 0, 0)">
                                                <a data-bs-toggle="modal" data-bs-target="#modalAlert2">Remove</a>
                                            </li>
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
