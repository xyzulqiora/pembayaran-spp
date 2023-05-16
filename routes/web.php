<?php

use App\Models\Kelulusan;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\LainyaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\BiayaSiswaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\LaporanHarianController;
use App\Http\Controllers\MetodePembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Auth::routes();
Route::group([
    'prefix' => 'office',
    'middleware' => ['auth',]
], function() {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

});
    Route::group([
        'prefix' => 'kesiswaan',
        'middleware' => ['auth',]
    ], function() {
        Route::group([
            'prefix' => 'siswa',
        ], function() {
            Route::get('/', [SiswaController::class, 'index'])->name('siswa');
            Route::get('/create', [SiswaController::class, 'create'])->name('siswa-create');
            Route::get('/{id}/detail', [SiswaController::class, 'detail'])->name('siswa-detail');
            Route::post('/store', [SiswaController::class, 'store'])->name('siswa-store');
            Route::get('/{id}/edit', [SiswaController::class, 'edit'])->name('siswa-edit');
            Route::put('/{id}', [SiswaController::class, 'update'])->name('siswa-update');
            Route::delete('/{id}', [SiswaController::class, 'destroy'])->name('siswa-delete');
            Route::get('/print', [SiswaController::class, 'print'])->name('laporan-siswa');
        });

        Route::group([
            'prefix' => 'kelas',
        ], function() {
            Route::get('/', [KelasController::class, 'index'])->name('kelas');
            Route::get('/create', [KelasController::class, 'create'])->name('kelas-create');
            Route::post('/store', [KelasController::class, 'store'])->name('kelas-store');
            Route::get('/{id}/edit', [KelasController::class, 'edit'])->name('kelas-edit');
            Route::put('/{id}', [KelasController::class, 'update'])->name('kelas-update');
            Route::delete('/{id}', [KelasController::class, 'destroy'])->name('kelas-delete');
        });

        Route::group([
            'prefix' => 'status',
        ], function() {
            Route::get('/kelulusan', [SiswaController::class, 'lulus'])->name('siswaBylulus');
            Route::get('/kenaikan', [SiswaController::class, 'kenaikan'])->name('kenaikan');
            Route::get('/pindah', [SiswaController::class, 'pindah'])->name('pindah');
            Route::get('/tinggal', [SiswaController::class, 'tinggal'])->name('tinggal');
        });

        Route::group([
            'prefix' => 'tahun-ajaran',
        ], function() {
            Route::get('/', [TahunAjaranController::class, 'index'])->name('tahun-ajaran');
            Route::get('/create', [TahunAjaranController::class, 'create'])->name('ajaran-create');
            Route::post('/store', [TahunAjaranController::class, 'store'])->name('ajaran-store');
            Route::get('/{id}/edit', [TahunAjaranController::class, 'edit'])->name('ajaran-edit');
            Route::put('/{id}', [TahunAjaranController::class, 'update'])->name('ajaran-update');
            Route::delete('/{id}', [TahunAjaranController::class, 'destroy'])->name('ajaran-delete');
        });


        Route::group([
            'prefix' => 'kenaikan-kelas',
        ], function() {
            Route::get('/', [KenaikanKelasController::class, 'index'])->name('kenaikan-kelas');
        });
    });

    Route::group([
        'prefix' => 'sistem',
        'middleware' => ['auth',]
    ], function(){
        Route::group([
            'prefix' => 'data-sekolah',
        ], function() {
            Route::get('/', [DataSekolahController::class, 'index'])->name('data-sekolah');
        });

        Route::group([
            'prefix' => 'role',
        ], function() {
            Route::get('/', [RoleController::class, 'index'])->name('role');
        });

        Route::group([
            'prefix' => 'petugas',
        ], function() {
            Route::get('/', [PetugasController::class, 'index'])->name('petugas');
            Route::get('/create', [PetugasController::class, 'create'])->name('petugas-create');
            Route::post('/store', [PetugasController::class, 'store'])->name('petugas-store');
            Route::get('/{id}/edit', [PetugasController::class, 'edit'])->name('petugas-edit');
            Route::put('/{id}', [PetugasController::class, 'update'])->name('petugas-update');
        });

        Route::group([
            'prefix' => 'backup',
        ], function() {
            Route::get('/', [BackupController::class, 'index_backup'])->name('backup');
            Route::get('/backup-data', [BackupController::class, 'backup'])->name('backup-database');
        });

        Route::group([
            'prefix' => 'user',
        ], function() {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('/create', [UserController::class, 'create'])->name('user-create');
            Route::post('/store', [UserController::class, 'store'])->name('user-store');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user-edit');
            Route::put('/{id}', [UserController::class, 'update'])->name('user-update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('user-delete');
        });
    });

    Route::group([
        'prefix' => 'keuangan',
        'middleware' => ['auth',]
    ], function(){
        Route::group([
            'prefix' => 'metode-pembayaran',
        ], function() {
        Route::get('/', [MetodePembayaranController::class, 'index'])->name('metode-pembayaran');
         });

         Route::group([
            'prefix' => 'pembayaran',
        ], function() {
        Route::get('/', [PembayaranController::class, 'create'])->name('create-pembayaran');
        Route::post('/bulanan/store', [PembayaranController::class, 'store'])->name('bulanan-store');
        // LAPORAN
        Route::get('/harian', [PembayaranController::class, 'harian'])->name('harian');
        Route::post('/print-harian', [PembayaranController::class, 'print_harian'])->name('print_harian');
        Route::get('/laporan', [PembayaranController::class, 'laporan'])->name('laporan-pembayaran');

         });

        Route::group([
            'prefix' => 'biaya-siswa',
        ], function() {
        Route::get('/', [BiayaSiswaController::class, 'index'])->name('biaya');
        Route::get('/create', [BiayaSiswaController::class, ''])->name('biaya-create');
         });

        Route::group([
            'prefix' => 'daftar-kas',
        ], function() {
        Route::get('/', [KasController::class, 'index'])->name('daftar-kas');
        Route::get('/create', [KasController::class, 'create'])->name('kas-create');
        Route::post('/store', [KasController::class, 'store'])->name('kas-store');
        Route::get('/{id}/edit', [KasController::class, 'edit'])->name('kas-edit');
        Route::put('/{id}', [KasController::class, 'update'])->name('kas-update');
        Route::delete('/{id}', [KasController::class, 'destroy'])->name('kas-delete');

         });

        Route::group([
            'prefix' => 'daftar-penerimaan',
        ], function() {
        Route::get('/', [PenerimaanController::class, 'index'])->name('daftar-penerimaan');
        Route::get('/create', [PenerimaanController::class, ''])->name('penerima-create');
         });

        Route::group([
            'prefix' => 'lainnya',
        ], function() {
        Route::get('/', [LainyaController::class, 'index'])->name('lainnya');
        Route::get('/create', [LainyaController::class, ''])->name('lain-create');
         });

    Route::group([
        'prefix' => 'laporan',
        'middleware' => ['auth',]

    ], function(){
        Route::group([
            'prefix' => 'log',
        ], function() {
        Route::get('/', [LogController::class, 'index'])->name('log-petugas');
        });

        Route::group([
            'prefix' => 'riwayat-pembayaran',
        ], function() {
            Route::get('/', [PembayaranController::class, 'index'])->name('pembayaran');
        });


    });
});



// Route::get('/home/petugas/', [PegawaiC::class, 'index'])->name('petugas');

// Route::get('/home/tambah', [SiswaC::class, 'tambah'])->name('tambah');
// Route::get('/home/petugas/tambah', [PegawaiC::class, 'tambah'])->name('petugas.tambah');



// Route::post('/home/store', function (Request $request) {
//     // Menyimpan data user
//     $user = new User();
//     $user->name = $request->name;
//     $user->email = $request->email;
//     $user->password = bcrypt($request->password);
//     $user->save();

//     // Menyimpan data siswa
//     $siswa = new Siswa();
//     $siswa->users_id = $user->id;
//     $siswa->nisn = $request->nisn;
//     $siswa->save();

//     return redirect('/home');
// })->name('siswa.store');

// Route::post('/petugas/store', function (Request $request) {
//     // Menyimpan data user
//     $user = new User();
//     $user->name = $request->name;
//     $user->email = $request->email;
//     $user->password = bcrypt($request->password);
//     $user->save();

//     // Menyimpan data siswa
//     $siswa = new Petugas();
//     $siswa->users_id = $user->id;
//     $siswa->nip = $request->nip;
//     $siswa->save();

//     return redirect('/home');
// })->name('petugas.store');
