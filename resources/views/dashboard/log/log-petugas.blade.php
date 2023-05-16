<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Data Petugas</h4>
                <div class="nk-block-des">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                <h4 class="card-title"><a href="{{route('petugas-create')}}" class="btn btn-primary" type="button">+ New User</a></h4>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">Context</span></th>
                            <th class="tb-tnx-id"><span class="">Reference</span></th>
                            <th class="tb-tnx-id"><span class="">Action</span></th>
                            <th class="tb-tnx-id"><span class="">User</span></th>
                            <th class="tb-tnx-action">
                                <span>&nbsp;</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $log as $o )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $o->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $o->context }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $o->reference_id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $o->actionType }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $o->user_id }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
</x-dashboard-layout>
