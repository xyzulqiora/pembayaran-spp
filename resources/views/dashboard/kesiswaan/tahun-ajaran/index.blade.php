<x-dashboard-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Pengguna</h4>
                @if(auth()->user()->can('tambah-data'))
                <div class="nk-block-des">
                    <p style="color: red">Hati-Hati Saat Penginputan data</p>
                </div>
                   <h4 class="card-title"><a href="{{route('ajaran-create')}}" class="btn btn-primary" type="button">+ Tambah Tahun Ajaran</a></h4>
                   @endif
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="table">
                    <thead class="table-dark">
                            <tr class="tb-tnx-head">
                                <th class="tb-tnx-id"><span class="">No</span></th>
                                <th class="tb-tnx-id"><span class="">Tahun Ajaran</span></th>
                                <th class="tb-tnx-id"><span class="">SPP</span></th>
                                @if(auth()->user()->can('tambah-data'))
                                <th class="tb-tnx-action">
                                    <span>&nbsp;</span>
                                </th>
                                @endif
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ( $ajaran as $a )
                        <tr class="tb-tnx-item">
                            <td class="tb-tnx-id">
                                <span>{{ $a->id }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $a->tahun_ajaran }}</span>
                            </td>
                            <td class="tb-tnx-id">
                                <span>{{ $a->nominal }}</span>
                            </td>
                            @if(auth()->user()->can('tambah-data'))
                            <td class="tb-tnx-action">
                                <div class="dropdown">
                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                        <ul class="link-list-plain">
                                            <li><a style="color: rgb(221, 188, 0)" href="{{ route('ajaran-edit', $a->id) }}">Edit</a></li>
                                            <form action="{{ route('ajaran-delete', $a->id) }}" method="POST">
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
