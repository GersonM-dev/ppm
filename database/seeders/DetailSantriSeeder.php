<?php

namespace Database\Seeders;

use App\Models\DetailSantri;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DetailSantriSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create('id_ID');

        $bloodTypes = ['A', 'B', 'AB', 'O'];
        $bpjsStatuses = ['Tidak Memiliki', 'Memiliki', 'Memiliki KIS'];
        $pipStatuses = ['Tidak Memiliki', 'Memiliki'];
        $pendidikanOrtu = ['SD', 'SMP', 'SMA', 'Diploma', 'S1'];

        User::factory()
            ->count(10)
            ->create()
            ->each(function (User $user) use ($faker, $bloodTypes, $bpjsStatuses, $pipStatuses, $pendidikanOrtu): void {
                $jenisKelamin = $faker->randomElement(['Laki-laki', 'Perempuan']);
                $birthDate = $faker->dateTimeBetween('-18 years', '-12 years')->format('Y-m-d');
                $tahunMasukSekolah = $faker->numberBetween(2015, 2022);
                $tahunMasukPpm = $faker->numberBetween(max($tahunMasukSekolah, 2018), 2024);

                $ayahBirth = $faker->dateTimeBetween('-60 years', '-35 years')->format('Y-m-d');
                $ibuBirth = $faker->dateTimeBetween('-55 years', '-30 years')->format('Y-m-d');

                $rt = str_pad((string) $faker->numberBetween(1, 10), 2, '0', STR_PAD_LEFT);
                $rw = str_pad((string) $faker->numberBetween(1, 10), 2, '0', STR_PAD_LEFT);

                DetailSantri::create([
                    'user_id' => $user->id,
                    'nama_lengkap' => $user->name,
                    'nama_panggilan' => Str::of($user->name)->explode(' ')->first(),
                    'NISN' => $faker->unique()->numerify('##########'),
                    'NIK' => $faker->unique()->numerify('################'),
                    'tanggal_lahir' => $birthDate,
                    'tempat_lahir' => $faker->city,
                    'status_anak' => $faker->randomElement(['Anak Kandung', 'Anak Asuh', 'Anak Tiri']),
                    'anak_ke' => $faker->numberBetween(1, 5),
                    'jumlah_saudara' => $faker->numberBetween(1, 5),
                    'hobi' => implode(', ', $faker->randomElements(['Membaca', 'Olahraga', 'Memasak', 'Menulis', 'Musik'], 2)),
                    'cita-cita' => $faker->randomElement(['Dokter', 'Guru', 'Pengusaha', 'Programmer']),
                    'jenis_kelamin' => $jenisKelamin,
                    'tinggi_badan' => $faker->numberBetween(140, 180),
                    'berat_badan' => $faker->numberBetween(40, 75),
                    'golongan_darah' => $faker->randomElement($bloodTypes),
                    'riwayat_penyakit' => $faker->boolean(70) ? 'Tidak ada' : 'Asma ringan',
                    'status_bpjs' => $faker->randomElement($bpjsStatuses),
                    'status_pip' => $faker->randomElement($pipStatuses),
                    'ijazah_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA', 'Paket C']),
                    'nama_sekolah_asal' => 'Sekolah ' . $faker->city,
                    'prodi_sekolah_asal' => $faker->randomElement(['IPA', 'IPS', 'Bahasa']),
                    'tahun_masuk_sekolah' => $tahunMasukSekolah,
                    'tahun_masuk_ppm' => $tahunMasukPpm,
                    'is_mondok' => $faker->boolean(),
                    'khatam' => 'Juz ' . $faker->numberBetween(1, 30),
                    'asalkelompoksambung' => 'Kelompok ' . $faker->randomElement(['Tahfidz', 'Kitab', 'Bahasa']),
                    'desa' => $faker->streetName,
                    'alamat' => $faker->streetAddress,
                    'rtrw' => "{$rt}/{$rw}",
                    'provinsi' => $faker->state,
                    'kabupaten' => $faker->city,
                    'kecamatan' => $faker->city,
                    'kodepos' => $faker->postcode,
                    'no_hp' => $faker->numerify('08##########'),
                    'email' => $user->email,
                    'media_sosial' => '@' . Str::slug($user->name) . $faker->numberBetween(1, 99),
                    'is_motor' => $faker->boolean(),
                    'is_sepeda' => $faker->boolean(),
                    'is_laptop' => $faker->boolean(),
                    'sim' => $faker->boolean(30) ? $faker->randomElement(['SIM A', 'SIM C']) : null,
                    'image_ktp_path' => null,
                    'image_pasfoto_path' => null,
                    'no_kk' => $faker->unique()->numerify('################'),
                    'nama_ayah' => $faker->name('male'),
                    'nik_ayah' => $faker->unique()->numerify('################'),
                    'tempat_lahir_ayah' => $faker->city,
                    'tanggal_lahir_ayah' => $ayahBirth,
                    'pendidikan_ayah' => $faker->randomElement($pendidikanOrtu),
                    'pekerjaan_ayah' => $faker->jobTitle,
                    'penghasilan_ayah' => $faker->numberBetween(2000000, 8000000),
                    'no_hp_ayah' => $faker->numerify('08##########'),
                    'nama_ibu' => $faker->name('female'),
                    'nik_ibu' => $faker->unique()->numerify('################'),
                    'tempat_lahir_ibu' => $faker->city,
                    'tanggal_lahir_ibu' => $ibuBirth,
                    'pendidikan_ibu' => $faker->randomElement($pendidikanOrtu),
                    'pekerjaan_ibu' => $faker->jobTitle,
                    'penghasilan_ibu' => $faker->numberBetween(1500000, 6000000),
                    'no_hp_ibu' => $faker->numerify('08##########'),
                    'is_ayah_alive' => $faker->boolean(90),
                    'is_ibu_alive' => $faker->boolean(95),
                ]);
            });
    }
}
