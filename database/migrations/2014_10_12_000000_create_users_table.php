<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('nama_role');
            $table->timestamps();
        });

        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pos_penerimaan');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('biaya_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerimaan_id')->constrained('penerimaan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_biaya');
            $table->string('tipe_biaya');
            $table->timestamps();
        });

        Schema::create('spp', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_ajaran');
            $table->string('nominal');
            $table->timestamps();
        });


        Schema::create('kas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kas');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('metode_pembayaran');
            $table->foreignId('kas_id')->constrained('kas')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('status_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamps();
        });


        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jurusan');
            $table->timestamps();
        });

        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas', 3);
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_telp');
            $table->enum('jenkel', ['Laki-Laki', 'Perempuan']);
            $table->foreignId('roles_id')->constrained('role')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nisn', 10)->unique();
            $table->string('nis', 10)->unique();
            $table->foreignId('kelas_id', 11)->constrained('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jurusan_id', 11)->constrained('jurusan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('spp_id')->constrained('spp')->onUpdate('cascade')->onDelete('cascade');
            $table->string('alamat');
            $table->foreignId('status_id')->constrained('status_siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nip')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('kelulusan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id', 10)->constrained('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id', 10)->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('biaya_siswa_id')->constrained('biaya_siswa')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('spp_bulan')->nullable();
            $table->string('jumlah_bayar', 11);
            $table->string('metode_pembayaran_id');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('lainya', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_id', 11)->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('pemberi');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('siswas');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('spp');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('biaya_siswa');
        Schema::dropIfExists('jurusan');
        Schema::dropIfExists('kelulusan');
        Schema::dropIfExists('kas');
        Schema::dropIfExists('tahun_ajaran');
        Schema::dropIfExists('status_siswa');
        Schema::dropIfExists('lainya');
    }
};
