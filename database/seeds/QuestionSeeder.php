<?php

use Illuminate\Database\Seeder;
use App\Question as Quest;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quest::create([
            'question' => 'Di dalam menginstalasi Sistem Operasi Linux diperlukan minimal 2 partisi yang digunakan, yaitu...',
            'a' => '/root dan /swap',
            'b' => '/home dan /usr',
            'c' => '/root dan /game',
            'key' => 'a'
        ]);

        Quest::create([
            'question' => 'Inti dari Sistem Operasi yang berfungsi sebagai pengelola dari hardware dan manajemen sistem disebut...',
            'a' => 'Boot',
            'b' => 'App manager',
            'c' => 'Kernel',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'BIOS singkatan dari...',
            'a' => 'Basic Internal Output System',
            'b' => 'Basic Invoker Output System',
            'c' => 'Basic Input Output System',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'File Sistem operasi windows ketika instalasi sebaiknya disimpan di direktori...',
            'a' => 'Local disk G',
            'b' => 'Local disk C',
            'c' => 'Local disk D',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Di bawah ini yang termasuk Operating System berbasis GUI, Kecuali...',
            'a' => 'Windows',
            'b' => 'MIUI',
            'c' => 'DOS',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'Yang tidak termasuk generasi dari varian Microsoft Windows adalah...',
            'a' => 'Windows ME',
            'b' => 'Windows 2004',
            'c' => 'Windows vista',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'DOS singkatan dari...',
            'a' => 'Detect operational system',
            'b' => 'Disk operating system',
            'c' => 'Desk organitation system',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Secara umum, CPU terdiri dari...',
            'a' => 'Control unit, Aritmetical Logical Unit dan Register',
            'b' => 'ROM dan RAM',
            'c' => 'VGA, Proccessor dan Power supply',
            'key' => 'a'
        ]);

        Quest::create([
            'question' => 'Hardware yang merupakan unit penyimpan adalah...',
            'a' => 'Harddisk',
            'b' => 'USB',
            'c' => 'Printer',
            'key' => 'a'
        ]);

        Quest::create([
            'question' => 'Sistem operasi adalah...',
            'a' => 'Penghubung antar jaringan',
            'b' => 'penghubung antara user dan software',
            'c' => 'penghubung antara brainware, hardware dan software',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'Dalam OS windows XP,  file systemnya sudah menggunakan...',
            'a' => 'NTFS',
            'b' => 'FAT 64',
            'c' => 'SWAP',
            'key' => 'a'
        ]);

        Quest::create([
            'question' => 'Di bawah ini yang tidak termasuk dalam perangkat lunak aplikasi adalah...',
            'a' => 'Photoshop',
            'b' => 'Windows',
            'c' => 'Mozila',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Untuk mengubah $23 menjadi Rp23 diatur pada regional setting di bagian...',
            'a' => 'Country',
            'b' => 'Currency',
            'c' => 'Number',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Di bawah ini merupakan program alat bantu utility...',
            'a' => 'Desktop',
            'b' => 'Disk Defragmenter',
            'c' => 'Chrome',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Seperangkat komputer yang digunakan oleh satu orang saja / pribadi adalah...',
            'a' => 'Server',
            'b' => 'PC',
            'c' => 'NIC',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Yang termasuk dalam Hardware pendukung jaringan internet adalah...',
            'a' => 'Modem, HUB, NIC, Router',
            'b' => 'OS, Modem, HUB',
            'c' => 'Modem, Browser,  OS,Router',
            'key' => 'a'
        ]);

        Quest::create([
            'question' => 'Perangkat keras komputer yang berfungsi sebagai alat untuk memasukan data atau perintah ke dalam komputer adalah...',
            'a' => 'Output Device',
            'b' => 'Input Device',
            'c' => 'I/O Ports',
            'key' => 'b'
        ]);

        Quest::create([
            'question' => 'Memori yang berfungs untuk menyimpan sementara perintah dan data pada saat program dijalankan...',
            'a' => 'Flashdisk',
            'b' => 'ROM',
            'c' => 'RAM',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'Modem kepanjangan dari...',
            'a' => 'Modulsi Demodulator',
            'b' => 'Modulator Demodulasi',
            'c' => 'Modulator Demodulator',
            'key' => 'c'
        ]);

        Quest::create([
            'question' => 'Yang digunakan untuk menerima ataupun mengirim data ke luar system yaitu...',
            'a' => 'Address Bus',
            'b' => 'Control Bus',
            'c' => 'I/O Ports',
            'key' => 'c'
        ]);
    }
}
