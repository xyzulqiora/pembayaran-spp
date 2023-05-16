<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Kelas</h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">Nama Kelas</span></th>
                            <th class="tb-tnx-id"><span class="">Dibuat</span></th>
                            <th class="tb-tnx-id"><span class="">Diperbarui</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $kelas as $k )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $k->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $k->nama_kelas }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $k->created_at }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $k->updated_at }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
