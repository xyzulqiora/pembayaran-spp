<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Pengguna</h4>
                <div class="nk-block-des">
                </div>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                            <tr class="tb-tnx-head">
                                <th class="tb-tnx-id"><span class="">No</span></th>
                                <th class="tb-tnx-id"><span class="">Nama</span></th>
                                <th class="tb-tnx-id"><span class="">Email</span></th>
                                <th class="tb-tnx-id"><span class="">No Telepon</span></th>
                                <th class="tb-tnx-id"><span class="">Jenis Kelamin</span></th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ( $user as $p )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $p->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $p->name }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $p->email }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $p->no_telp }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $p->jenkel }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
