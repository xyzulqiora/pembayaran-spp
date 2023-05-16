<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Kelulusan</h4>
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
                            <th class="tb-tnx-id"><span class="">Status</span></th>
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
                                @if($w->statuse->status === 'lulus')
                                <span class="text-success">Lulus</span>
                                @else
                                    <span class="text-danger">Belum Lulus</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
