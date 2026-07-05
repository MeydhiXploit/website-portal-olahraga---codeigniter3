# 🏆 Web Portal Berita Olahraga

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-v3.1.13-EE4326?style=flat-squared&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![PHP](https://img.shields.io/badge/PHP-%3E%3D%207.4%20%7C%208.1-777BB4?style=flat-squared&logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-v5-7952B3?style=flat-squared&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-squared&logo=mysql&logoColor=white)](https://www.mysql.com/)

Website Portal Berita Olahraga ini dibangun menggunakan framework **CodeIgniter 3** dengan arsitektur MVC (Model-View-Controller). Platform ini menyajikan informasi terkini seputar dunia olahraga, dilengkapi dengan sistem manajemen konten (CMS) di halaman backend khusus admin untuk mengelola kategori olahraga, liga, klub, artikel berita, dan profil atlet secara dinamis.

---

## 🔗 Akses Cepat (Server Lokal)

Untuk mengakses website di lingkungan server lokal Anda:

- **Halaman Utama (User/Frontend):** `http://localhost/website-portal-olahraga/`
- **Halaman Dashboard (Admin/Backend):** `http://localhost/website-portal-olahraga/admin/login`

---

## 👥 Tim Pengembang & Kontributor (Kelas B)

| Peran              | NIM           | Nama                  |
| :----------------- | :------------ | :-------------------- |
| **Ketua Kelompok** | `24010110126` | Meydhi Ari Nugroho    |
| **Anggota**        | `24010110088` | Clara Septia Ramdhani |
| **Anggota**        | `24010110076` | Villari Naufal Nety   |
| **Anggota**        | `24010110078` | M. Syarifudin         |

---

## Panduan Instalasi & Setup Pertama Kali

Pilih panduan di bawah ini yang sesuai dengan aplikasi web server lokal yang Anda gunakan di laptop Anda:

### A. Panduan untuk Pengguna Laragon (Direkomendasikan)

1.  **Buka Terminal Git Bash** di direktori web server:
    - Masuk ke folder `C:\laragon\www\` menggunakan File Explorer.
    - Klik kanan di area kosong dan pilih **Git Bash Here** (di Windows 11: klik kanan $\rightarrow$ **Show more options** $\rightarrow$ **Git Bash Here**).
2.  **Clone Repositori:**
    ```bash
    git clone https://github.com/[GITHUB_USERNAME]/website-portal-olahraga---codeigniter3.git
    ```
    _(Ganti `[GITHUB_USERNAME]` dengan username pemilik repositori)._
3.  **Sesuaikan Nama Folder:**
    - Ubah nama folder hasil clone dari `website-portal-olahraga---codeigniter3` menjadi **`website-portal-olahraga`**.
4.  **Jalankan Laragon:** Buka aplikasi Laragon, lalu klik **Start All**.
5.  **Import Database (HeidiSQL):**
    - Klik tombol **Database** di Laragon untuk membuka HeidiSQL.
    - Klik **Open** untuk masuk ke session lokal (password default kosong).
    - Klik kanan pada daftar database sebelah kiri $\rightarrow$ **Create new** $\rightarrow$ **Database** $\rightarrow$ beri nama **`portal_olahraga`**.
    - Klik database `portal_olahraga` $\rightarrow$ klik menu **File** $\rightarrow$ **Run SQL file...** $\rightarrow$ pilih file `portal_olahraga.sql` yang ada di dalam folder project Anda.
6.  **Akses Web:** `http://localhost/website-portal-olahraga/` atau `http://website-portal-olahraga.test/`.

### B. Panduan untuk Pengguna XAMPP

1.  **Buka Terminal Git Bash** di direktori web server:
    - Masuk ke folder `C:\xampp\htdocs\` menggunakan File Explorer.
    - Klik kanan di area kosong dan pilih **Git Bash Here**.
2.  **Clone Repositori:**
    ```bash
    git clone https://github.com/[GITHUB_USERNAME]/website-portal-olahraga---codeigniter3.git
    ```
    _(Ganti `[GITHUB_USERNAME]` dengan username pemilik repositori)._
3.  **Sesuaikan Nama Folder:**
    - Ubah nama folder hasil clone menjadi **`website-portal-olahraga`**.
4.  **Jalankan XAMPP:** Buka XAMPP Control Panel, lalu klik **Start** pada modul **Apache** dan **MySQL**.
5.  **Import Database (phpMyAdmin):**
    - Buka browser dan buka alamat `http://localhost/phpmyadmin/`.
    - Klik **New** di kolom kiri $\rightarrow$ beri nama database **`portal_olahraga`** $\rightarrow$ klik **Create**.
    - Pilih database `portal_olahraga` $\rightarrow$ klik tab **Import** di bagian atas $\rightarrow$ pilih file `portal_olahraga.sql` dari folder project Anda $\rightarrow$ klik **Import** (Kirim) di bagian bawah.
6.  **Akses Web:** `http://localhost/website-portal-olahraga/`.

---

## 🔧 Konfigurasi Aplikasi Lokal

Setelah instalasi selesai, sesuaikan file konfigurasi berikut agar project berjalan lancar di PC Anda:

1.  **Konfigurasi Koneksi Database:**
    Buka file [application/config/database.php](file:///c:/laragon/www/website-portal-olahraga/application/config/database.php) dan sesuaikan pengaturannya:
    ```php
    'username' => 'root',             // Username default server lokal
    'password' => '',                 // Password database default (kosong)
    'database' => 'portal_olahraga',  // Nama database yang telah di-import
    ```
2.  **Konfigurasi Base URL:**
    Buka file [application/config/config.php](file:///c:/laragon/www/website-portal-olahraga/application/config/config.php):

    ```php
    // Default konfigurasi lokal
    $config['base_url'] = 'http://localhost/website-portal-olahraga/';

    // Atau jika menggunakan domain .test di Laragon:
    // $config['base_url'] = 'http://website-portal-olahraga.test/';
    ```

---

## ⚡ Sinkronisasi Perubahan Skema Database

Karena database terus berkembang seiring dengan penambahan fitur:

1.  Jika Anda menambah tabel, mengubah kolom, atau memodifikasi relasi database di MySQL lokal Anda, **wajib** melakukan **Export** ulang database Anda.
2.  Gantikan/timpa file `portal_olahraga.sql` lama di direktori utama project dengan file hasil export yang baru.
3.  Commit dan sertakan file `portal_olahraga.sql` baru tersebut saat melakukan push branch ke GitHub.
4.  **Anggota Tim Lain:** Jika ada perubahan pada file `portal_olahraga.sql` setelah melakukan `git pull`, segera lakukan import ulang file SQL tersebut ke database lokal Anda agar fitur berjalan normal.

---

## 🛠️ Fitur Utama Aplikasi

### 💻 Halaman Pengunjung (Frontend Portal)

- **Halaman Beranda (Home):** Menampilkan slider artikel utama terbaru, klasifikasi berita berdasarkan cabang olahraga, dan daftar artikel paling populer.
- **Cabang Olahraga:** Kategori navigasi berita berdasarkan jenis olahraga (seperti Sepakbola, Basket, Badminton, dll.).
- **Halaman Detail Liga:** Menampilkan ringkasan kompetisi, daftar jadwal pertandingan mendatang, serta artikel khusus mengenai liga bersangkutan.
- **Detail Artikel Berita:** Konten lengkap berita dilengkapi info penulis, tanggal publikasi, dan kolom komentar interaktif.
- **Pencarian Cepat:** Fitur pencarian kata kunci artikel berita secara instan.

### 🔐 Halaman Dashboard Pengelola (Backend Admin)

- **Manajemen Autentikasi:** Sistem login admin terproteksi menggunakan pengkondisian session (`isAdminLogin`).
- **Manajemen Kategori Olahraga (Sport Type):** Menambah, mengubah, dan menghapus jenis olahraga.
- **Manajemen Liga:** Mengatur kompetisi/liga di bawah naungan cabang olahraga tertentu.
- **Manajemen Klub:** Database klub peserta liga, negara asal, beserta logo klub.
- **Manajemen Berita:** Editor konten berita (tambah/edit/hapus/status publikasi) lengkap dengan fitur unggah thumbnail gambar.
- **Manajemen Profil Atlet:** Database profil pemain/atlet lengkap dengan nomor punggung, detail fisik (tinggi/berat badan), posisi bermain, dan foto profil.

---

## 📂 Struktur Direktori Utama

```text
website-portal-olahraga/
├── .editorconfig                        # Konfigurasi editor/format kode
├── .gitignore                           # File aturan pengecualian Git
├── .htaccess                            # Aturan rewrite untuk URL friendly
├── admin/                               # Dashboard admin statis / admin entry point
├── application/                         # Direktori kode aplikasi MVC CodeIgniter
│   ├── config/                          # File konfigurasi sistem CodeIgniter
│   │   ├── autoload.php                 # Pemuatan otomatis (autoload) library, helper, & model
│   │   ├── config.php                   # Pengaturan base_url, index_page, dll
│   │   ├── constants.php                # Definisi konstanta aplikasi
│   │   ├── database.php                 # Konfigurasi koneksi basis data MySQL
│   │   ├── doctype.php                  # Konfigurasi doctype HTML default
│   │   ├── foreign_chars.php            # Pemetaan karakter asing untuk URL slug
│   │   ├── hooks.php                    # Konfigurasi hook CodeIgniter
│   │   ├── memcached.php                # Konfigurasi cache Memcached (jika digunakan)
│   │   ├── migration.php                # Konfigurasi migrasi database
│   │   ├── mimes.php                    # Daftar tipe MIME & ekstensi upload yang diizinkan
│   │   ├── profiler.php                 # Konfigurasi profiler debugging
│   │   ├── routes.php                   # Pemetaan URL (routing) aplikasi
│   │   ├── smileys.php                  # Daftar emoji/smileys untuk chat atau komentar
│   │   ├── user_agents.php              # Pengaturan browser/platform user-agent
│   │   └── index.html                   # Tombol proteksi direktori
│   ├── controllers/                     # Pengendali alur logika bisnis (Controllers)
│   │   ├── AthleteController.php        # Kelola data profil, detail fisik, & foto atlet di Dashboard Admin
│   │   ├── Atlet.php                    # Controller data atlet untuk frontend
│   │   ├── Auth.php                     # Logika autentikasi login/logout admin & pengguna
│   │   ├── Berita.php                   # Controller halaman berita sisi frontend & admin
│   │   ├── ClubController.php           # Logika manajemen klub olahraga (tambah/edit/hapus)
│   │   ├── Home.php                     # Halaman beranda utama untuk pengunjung
│   │   ├── HomeController.php           # Logika tambahan untuk beranda & data sorotan berita
│   │   ├── Klub.php                     # Handler view / AJAX manajemen klub
│   │   ├── LeagueController.php         # Manajemen kompetisi/liga olahraga
│   │   ├── MatchController.php          # Manajemen data pertandingan (skor, jadwal, detail laga)
│   │   ├── NewsController.php           # Menangani unggah artikel, edit teks, & publikasi berita
│   │   ├── Pertandingan.php             # Handler data pertandingan & jadwal sisi pengunjung
│   │   ├── Player_type.php              # Mengatur master data posisi bermain (misal: Striker, Bek)
│   │   ├── SportController.php          # Kontrol cabang olahraga & master data jenis sport
│   │   └── UserController.php           # Autentikasi user & pengisian komentar/ulasan
│   ├── helpers/                         # Fungsi helper tambahan (custom helpers)
│   │   ├── auth_helper.php              # Proteksi session admin & generator dinamis get_image_url()
│   │   └── index.html                   # Tombol proteksi direktori
│   ├── models/                          # Interaksi query dengan database MySQL (Models)
│   │   ├── Athlete_model.php            # Model dasar manipulasi data atlet
│   │   ├── Auth_model.php               # Validasi login credential admin
│   │   ├── Club_model.php               # Kueri tabel sport_club
│   │   ├── M_League.php                 # Model relasi liga & jenis olahraga
│   │   ├── M_Match.php                  # Model kueri detail skor & jadwal tanding
│   │   ├── M_News.php                   # Model pengelolaan postingan artikel berita
│   │   ├── M_Review.php                 # Model penyimpanan ulasan/komentar berita
│   │   ├── M_Sport_Athlete.php          # Relasi tabel atlet, posisi, dan statistik
│   │   ├── M_Sport_Club.php             # Relasi tabel klub dengan liga dan negara
│   │   ├── M_Sport_Type.php             # Kueri jenis cabang olahraga (Sport Type)
│   │   ├── M_User.php                   # Model data user & hak akses
│   │   ├── M_Visitor.php                # Statistik pengunjung portal berita
│   │   ├── Match_model.php              # Query helper data pertandingan
│   │   ├── News_model.php               # Query helper data berita
│   │   └── Player_type_model.php        # Kueri master data tipe/posisi pemain
│   └── views/                           # Template tampilan antarmuka (Views)
│       ├── Admin/                       # Halaman Dashboard khusus Administrator
│       │   ├── athlete/                 # View kelola data atlet (tambah, edit, daftar)
│       │   ├── foul/                    # View pencatatan pelanggaran pertandingan
│       │   ├── foul-type/               # View tipe pelanggaran (kartu kuning/merah, dll)
│       │   ├── league/                  # View manajemen liga/kompetisi
│       │   ├── match/                   # View kelola jadwal & skor pertandingan
│       │   ├── news/                    # View penulisan, edit, & daftar artikel berita
│       │   ├── player-type/             # View kelola jenis posisi pemain
│       │   ├── sport-club/              # View kelola logo, negara, & nama klub
│       │   ├── sport-type/              # View kelola jenis olahraga
│       │   ├── user/                    # View kelola admin user & profile
│       │   └── dashboard.php            # Halaman utama ringkasan statistik admin
│       ├── Auth/                        # Halaman login administrator
│       ├── User/                        # Halaman portal berita sisi pengunjung
│       │   ├── Home.php                 # View beranda utama (slider, berita terkini, populer)
│       │   ├── league.php               # View detail daftar liga kompetisi
│       │   ├── league-match.php         # View daftar pertandingan di dalam suatu liga
│       │   ├── news-detail.php          # View isi lengkap artikel berita & form ulasan
│       │   ├── search.php               # View hasil pencarian artikel
│       │   └── sport.php                # View filter berita berdasarkan cabang olahraga
│       ├── layouts/                     # Master layout pembungkus halaman (reusable)
│       │   ├── layout-admin.php         # Kerangka layout Dashboard Admin (sidebar, nav, footer)
│       │   └── layout-user.php          # Kerangka layout Portal Pengunjung (navigasi, footer)
│       └── templates/                   # Komponen template parsial (header, footer, dll)
├── assets/                              # Aset statis front-end
│   ├── css/                             # Stylesheet CSS
│   ├── fonts/                           # Font web yang digunakan aplikasi
│   ├── images/                          # Gambar pendukung tema dan ikon
│   ├── img/                             # Gambar utama dan aset statis lainnya
│   ├── js/                              # Skrip JavaScript untuk interaksi UI
│   └── preview_img/                     # Contoh preview gambar
├── composer.json                        # Konfigurasi dependensi Composer
├── conflict_check.txt                   # Catatan pemeriksaan konflik perubahan
├── conflict_files.txt                   # Daftar file yang bermasalah saat konflik
├── debug_match.php                      # Skrip debug khusus modul pertandingan
├── fix_foul_tables.sql                  # Skrip SQL perbaikan tabel foul
├── index.php                            # Entry point utama aplikasi CodeIgniter
├── license.txt                          # Lisensi proyek
├── logo_ubg_transparant.png             # Logo proyek
├── portal_olahraga.sql                  # Salinan database MySQL ter-update
├── README.md                            # Dokumentasi ini
├── readme.rst                           # Dokumentasi alternatif/versi lama
├── system/                              # Berkas core engine Framework CodeIgniter 3
├── upload/                              # Direktori penyimpanan media unggahan dinamis
└── vendor/                              # Library & package dependensi pihak ketiga (via Composer)
```

---

## 💡 Solusi Masalah Umum (Troubleshooting)

### 1. Masalah Gambar/Logo Pecah (Tidak Tampil)

- **Penyebab:** Database menyimpan URL absolut server lokal pembuat awal (`http://localhost/...`). Ketika diakses menggunakan IP lokal atau domain virtual host lain (seperti `.test`), URL gambar menjadi tidak valid.
- **Solusi:** Gunakan helper global `get_image_url($path)` di dalam views untuk merelasikan path secara dinamis.

  ```html
  <!-- ❌ Contoh Salah: -->
  <img src="<?php echo $club->logo; ?>" />

  <!--  Contoh Benar: -->
  <img src="<?php echo get_image_url($club->logo); ?>" />
  ```

### 2. Gagal Upload Gambar: _"The filetype you are attempting to upload is not allowed"_

- **Penyebab:** Ekstensi berkas tidak cocok dengan data MIME asli (misalnya mengubah tipe berkas secara paksa dengan me-rename ekstensinya), atau MIME type belum terdaftar di konfigurasi CodeIgniter.
- **Solusi:**
  1. Hindari mengubah ekstensi secara manual. Pastikan format berkas asli.
  2. Tambahkan tipe MIME cadangan `application/octet-stream` atau tipe MIME spesifik lainnya pada array ekstensi yang bersangkutan di file [application/config/mimes.php](file:///c:/laragon/www/website-portal-olahraga/application/config/mimes.php).

### 3. Masalah Database Exception: `Unknown column 'sport_athlete.player_type' in 'where clause'`

- **Penyebab:** Kueri relasi di model tidak selaras dengan skema tabel fisik di MySQL.
- **Solusi:** Pastikan kueri pada model memetakan kolom kunci tamu (_foreign key_) dengan benar. Kolom relasi di tabel `sport_athlete` adalah `playerType_id` bukan `player_type`.

### 4. Mengatasi Merge Conflict di Git (Konflik Penggabungan)

Jika setelah mengeksekusi `git pull` muncul pesan konflik, ikuti instruksi berikut:

1.  Buka berkas berkonflik di **VS Code**. Daerah konflik akan ditandai dengan warna kontras.
2.  Identifikasi bagian penanda konflik:
    - `<<<<<<< HEAD` : Perubahan lokal Anda.
    - `=======` : Batas pemisah kode.
    - `>>>>>>> [branch_name]` : Perubahan masuk dari repositori GitHub.
3.  Pilih opsi di atas kode: **Accept Current Change** (pertahankan kode Anda), **Accept Incoming Change** (terima kode dari remote), atau **Accept Both Changes** (gabungkan keduanya).
4.  Rapatkan kode, pastikan tidak ada sintaks penanda konflik yang tersisa, lalu selesaikan dengan commit baru:
    ```bash
    git add .
    git commit -m "chore: menyelesaikan conflict pada [nama file]"
    git push origin [nama-branch-fitur-anda]
    ```
