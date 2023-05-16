<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Metode Pembayaran</h4>
                @if(auth()->user()->can('tambah-data'))
                <div class="nk-block-des">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                <h4 class="card-title"><a href="{{route('kas-create')}}" class="btn btn-primary" type="button">+ Tambah Metode Pembayaran</a></h4>
                @endif
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">No</span></th>
                            <th class="tb-tnx-id"><span class="">Metode Pembayaran</span></th>
                            <th class="tb-tnx-id"><span class="">Dibuat</span></th>
                            <th class="tb-tnx-id"><span class="">Diperbarui</span></th>
                            @if(auth()->user()->can('tambah-data'))
                            <th class="tb-tnx-action">
                                <span>&nbsp;</span>
                            </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $metode_pembayaran as $m )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $m->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $m->metode_pembayaran }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $m->created_at }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $m->updated_at }}</span>
                            </td>
                            @if(auth()->user()->can('tambah-data'))
                            <td class="tb-tnx-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a href="#">View</a></li>
                                            {{-- <li><a href="{{ route('biaya-siwa-edit') }}">Edit</a></li> --}}
                                            <li><a href="#">Remove</a></li>
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
