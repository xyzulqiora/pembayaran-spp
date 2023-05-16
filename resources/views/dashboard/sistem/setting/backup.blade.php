<x-dashboard-layout>
    <div class="col">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="user-card user-card-s2">
                    <div class="user-avatar md bg-info">
                        <span>MVP</span>
                    </div>
                    <div class="user-info">
                        <h1>Back Up Database?</h1>
                    </div>
                </div>
                <div class="team-view mt-5">
                    <a href="{{ route('backup-database') }}" class="btn btn-round btn-outline-light w-150px"><span>BackUp</span></a>
                </div>
            </div>
        </div>
    </div>
    </x-dashboard-layout>
