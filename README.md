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

## 📂 Struktur Direktori Utama

```text
website-portal-olahraga/
├── .agents/
├── .editorconfig
├── .git/
├── .gitignore
├── .htaccess
├── application/
│   ├── .htaccess
│   ├── cache/
│   ├── config/
│   │   ├── autoload.php
│   │   ├── config.php
│   │   ├── constants.php
│   │   ├── database.php
│   │   ├── doctypes.php
│   │   ├── foreign_chars.php
│   │   ├── hooks.php
│   │   ├── index.html
│   │   ├── memcached.php
│   │   ├── migration.php
│   │   ├── mimes.php
│   │   ├── profiler.php
│   │   ├── routes.php
│   │   ├── smileys.php
│   │   └── user_agents.php
│   ├── controllers/
│   │   ├── AthleteController.php
│   │   ├── Atlet.php
│   │   ├── Auth.php
│   │   ├── Berita.php
│   │   ├── ClubController.php
│   │   ├── Home.php
│   │   ├── HomeController.php
│   │   ├── Klub.php
│   │   ├── LeagueController.php
│   │   ├── MatchController.php
│   │   ├── NewsController.php
│   │   ├── Pertandingan.php
│   │   ├── Player_type.php
│   │   ├── SportController.php
│   │   └── UserController.php
│   ├── core/
│   ├── helpers/
│   ├── hooks/
│   ├── index.html
│   ├── language/
│   ├── libraries/
│   ├── logs/
│   ├── models/
│   ├── third_party/
│   └── views/
├── assets/
│   ├── img/
│   └── userpage/
├── composer.json
├── conflict_check.txt
├── conflict_files.txt
├── contributing.md
├── debug_match.php
├── fix_foul_tables.sql
├── index.php
├── license.txt
├── logo_ubg_transparant.png
├── portal_olahraga.sql
├── README.md
├── readme.rst
├── system/
├── upload/
└── vendor/
```

│ │ ├── foul/ # View pencatatan pelanggaran pertandingan
│ │ ├── foul-type/ # View tipe pelanggaran (kartu kuning/merah, dll)
│ │ ├── league/ # View manajemen liga/kompetisi
│ │ ├── match/ # View kelola jadwal & skor pertandingan
│ │ ├── news/ # View penulisan, edit, & daftar artikel berita
│ │ ├── player-type/ # View kelola jenis posisi pemain
│ │ ├── sport-club/ # View kelola logo, negara, & nama klub
│ │ ├── sport-type/ # View kelola jenis olahraga
│ │ ├── user/ # View kelola admin user & profile
│ │ └── dashboard.php # Halaman utama ringkasan statistik admin
│ ├── Auth/ # Halaman login administrator
│ ├── User/ # Halaman portal berita sisi pengunjung
│ │ ├── Home.php # View beranda utama (slider, berita terkini, populer)
│ │ ├── league.php # View detail daftar liga kompetisi
│ │ ├── league-match.php # View daftar pertandingan di dalam suatu liga
│ │ ├── news-detail.php # View isi lengkap artikel berita & form ulasan
│ │ ├── search.php # View hasil pencarian artikel
│ │ └── sport.php # View filter berita berdasarkan cabang olahraga
│ ├── layouts/ # Master layout pembungkus halaman (reusable)
│ │ ├── layout-admin.php # Kerangka layout Dashboard Admin (sidebar, nav, footer)
│ │ └── layout-user.php # Kerangka layout Portal Pengunjung (navigasi, footer)
│ └── templates/ # Komponen template parsial (header, footer, dll)
├── assets/ # Aset statis front-end
│ ├── css/ # Stylesheet CSS
│ ├── fonts/ # Font web yang digunakan aplikasi
│ ├── images/ # Gambar pendukung tema dan ikon
│ ├── img/ # Gambar utama dan aset statis lainnya
│ ├── js/ # Skrip JavaScript untuk interaksi UI
│ ├── preview_img/ # Contoh preview gambar
│ └── userpage/ # Halaman statis/preview user (template contoh)
├── composer.json # Konfigurasi dependensi Composer
├── conflict_check.txt # Catatan pemeriksaan konflik perubahan
├── conflict_files.txt # Daftar file yang bermasalah saat konflik
├── debug_match.php # Skrip debug khusus modul pertandingan
├── fix_foul_tables.sql # Skrip SQL perbaikan tabel foul
├── index.php # Entry point utama aplikasi CodeIgniter
├── license.txt # Lisensi proyek
├── logo_ubg_transparant.png # Logo proyek
├── portal_olahraga.sql # Salinan database MySQL ter-update
├── README.md # Dokumentasi ini
├── readme.rst # Dokumentasi alternatif/versi lama
├── system/ # Berkas core engine Framework CodeIgniter 3
├── upload/ # Direktori penyimpanan media unggahan dinamis

## 💡 Solusi Masalah Umum (Troubleshooting)

└── vendor/ # Library & package dependensi pihak ketiga (via Composer)

````

**Ringkasan Poin Penting untuk Presentasi (MVC & File Kunci)**

- **MVC — Ringkasan & Alur:** aplikasi ini memakai pola Model-View-Controller (MVC). Singkatnya:
    1. Permintaan HTTP masuk ke `index.php` (entrypoint).
    2. Router (`application/config/routes.php`) menentukan Controller yang dipanggil.
    3. Controller (`application/controllers/`) menjalankan logika, memanggil Model untuk akses data.
    4. Model (`application/models/`) melakukan query ke database (`portal_olahraga.sql`) dan mengembalikan data.
    5. Controller me-render View (`application/views/`) yang menampilkan HTML ke pengguna.

- **Contoh file kunci:** `application/controllers/NewsController.php`, `application/models/M_News.php`, `application/views/Admin/news/` (tunjukkan pada demo).

- **Assets (`assets/`)**: tempat file statis (CSS, JS, gambar). Struktur penting:
    - `assets/css/`, `assets/js/`, `assets/img/`, `assets/userpage/` (template halaman statis untuk preview).
    - Views memanggil aset menggunakan path relatif ke base URL, contoh: `<link href="/website-portal-olahraga/assets/css/style.css">`.

- **Upload (`upload/`)**: direktori penyimpanan file yang diunggah pengguna (mis. foto atlet, logo klub).
    - Pastikan `upload/` dapat ditulis oleh server web (permission) dan tidak diekspos langsung tanpa validasi.
    - Referensi berkas hasil upload umumnya disimpan di database dan ditampilkan lewat helper `get_image_url()` di view.

- **Vendor & Composer (`composer.json` / `vendor/`)**:
    - Dependensi pihak ketiga dikelola lewat Composer. Jika `vendor/` kosong, jalankan:

```bash
composer install
```

    - Jangan commit `vendor/` jika tim memakai pendekatan dependency install pada server/runner.

- **Framework Core (`system/`)**: folder ini berisi engine CodeIgniter 3. Hindari perubahan kecuali benar-benar diperlukan.

- **Entrypoint & Konfigurasi**: `index.php` (root), `application/config/config.php` (base_url dan opsi aplikasi), `application/config/database.php` (koneksi DB). Tunjukkan lokasi ini saat demo.

- **Hubungan / Alur Terhubung (concrete example):**
    - User klik `http://.../admin/news` → `routes.php` → `NewsController::index()` → `M_News::getAll()` → tampilkan `application/views/Admin/news/index.php` → halaman memuat CSS/JS dari `assets/` dan gambar dari `upload/`.

- **Import database contoh (lokal):**
    ```bash
    mysql -u root -p portal_olahraga < portal_olahraga.sql
    ```

Catatan singkat: saat presentasi, tunjukkan satu contoh end-to-end (route → controller → model → view) dan tunjukkan file-file kunci yang sudah disebutkan.

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
````

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
