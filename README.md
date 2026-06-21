# Project Web Portal Berita Olahraga

Website Portal Berita Olahraga ini dibuat dengan menggunakan CodeIgniter 3. Website ini menyediakan segala informasi mengenai dunia olahraga. Di dalam website ini juga tersedia fitur admin, di mana admin dapat membuat dan menambahkan informasi-informasi ke dalam website ini.

## Link Akses Website

*   **Frontend (Halaman Utama):** [http://localhost/website-portal-olahraga/](http://localhost/website-portal-olahraga/)
*   **Backend (Halaman Admin):** [http://localhost/website-portal-olahraga/admin/login](http://localhost/website-portal-olahraga/admin/login)

---

## 👥 Tim Pengembang & Kontributor

- **Meydhi Ari Nugroho** (NIM: `24010110126`) - *Ketua Kelompok*
- **Clara septia ramdhani** (NIM: `2401010002`) - *Anggota*
- **Villari Naufal Nety** (NIM: `24010110076`) - *Anggota*
- **M.syarifudin** (NIM: `24010110078`) - *Anggota*

---

## 🚀 Panduan Kontribusi Kelompok (GitHub Workflow)

> [!WARNING]
> **ATURAN WAJIB: DILARANG PUSH LANGSUNG KE BRANCH `main`!**
> 
> Semua anggota kelompok **TIDAK DIPERBOLEHKAN** melakukan push langsung ke branch `main` (`git push origin main`). Pushing langsung ke `main` berisiko merusak kode utama dan menyebabkan *conflict* yang sulit diperbaiki.
> 
> **Ikuti Alur Kerja Wajib Ini:**
> 1. **Buat Branch Baru** sebelum mulai bekerja:
>    ```bash
>    git checkout -b nama-branch-baru
>    ```
> 2. **Edit Kode** / Selesaikan pekerjaan Anda di text editor.
> 3. **Add & Commit** perubahan Anda di lokal:
>    ```bash
>    git add .
>    git commit -m "fix: deskripsi perubahan"
>    ```
> 4. **Push Branch Baru** ke origin (bukan `main`!):
>    ```bash
>    git push origin nama-branch-baru
>    ```
> 5. **Buka GitHub** dan ajukan **Pull Request (PR)** untuk digabungkan ke branch `main` setelah di-review bersama.

---

## 🛠️ Fitur Utama Website

Website Portal Berita Olahraga ini terbagi menjadi dua bagian utama:

### A. Halaman Pengunjung (Frontend)
- **Halaman Utama (Home):** Menampilkan slider berita terbaru, grid berita berdasarkan cabang olahraga, dan daftar berita terpopuler.
- **Halaman Cabang Olahraga:** Menampilkan seluruh berita yang dikelompokkan berdasarkan cabang olahraga tertentu (seperti Sepakbola, Basket, Badminton, dll.).
- **Halaman Detail Liga:** Informasi detail dari setiap liga, termasuk jadwal pertandingan terdekat dan berita-berita terkait liga tersebut.
- **Halaman Detail Berita:** Membaca artikel berita secara lengkap dengan metadata (penulis, tanggal terbit) serta fitur ulasan/komentar dari pembaca.
- **Pencarian Berita:** Fitur pencarian instan untuk menemukan berita berdasarkan judul atau isi konten.

### B. Halaman Admin (Backend)
- **Autentikasi:** Sistem login dan proteksi halaman admin menggunakan session (`isAdminLogin`).
- **Manajemen Cabang Olahraga:** Tambah, edit, dan hapus jenis olahraga (Sport Type).
- **Manajemen Liga:** Tambah, edit, dan hapus liga di bawah cabang olahraga tertentu.
- **Manajemen Klub:** Tambah, edit, dan hapus klub peserta liga beserta negara asal dan logo klub.
- **Manajemen Berita:** Menulis, menyunting, menghapus, dan mengatur status publikasi berita (draft/published) dengan file upload thumbnail.
- **Manajemen Atlet:** Tambah, edit, dan hapus data profil atlet beserta nomor punggung, tinggi/berat badan, posisi pemain, dan foto profil.

---

## 💻 Teknologi & Library (Tech Stack)

- **Framework Utama:** CodeIgniter 3.1.13 (PHP MVC Framework)
- **Database:** MySQL (MariaDB) via Driver `mysqli`
- **Frontend CSS Framework:** Bootstrap 5 (untuk tata letak grid dan komponen UI modern)
- **Ikon & Tipografi:** FontAwesome 5 & Outfit/Inter Google Fonts
- **Server Environment:** Laragon (Sangat direkomendasikan) atau XAMPP (PHP 7.4 s.d. 8.1)

---

## 📂 Struktur Folder Project

Berikut adalah struktur folder penting di dalam project ini yang perlu Anda pahami sebelum melakukan coding:

```text
website-portal-olahraga/
├── application/                    # Kode utama aplikasi CodeIgniter
│   ├── config/                     # Konfigurasi aplikasi
│   │   ├── autoload.php            # Library/helper yang otomatis dimuat
│   │   ├── config.php              # Pengaturan base_url dinamis, index_page, dll
│   │   ├── database.php            # Pengaturan koneksi MySQL
│   │   ├── mimes.php               # Daftar ekstensi file & tipe MIME yang diizinkan
│   │   └── routes.php              # Pengaturan routing/URL friendly
│   ├── controllers/                # Pengendali alur logika (Controller)
│   │   ├── AthleteController.php   # Mengatur data atlet
│   │   ├── NewsController.php      # Mengatur halaman berita dan admin berita
│   │   ├── SportController.php     # Mengatur data olahraga dan klub
│   │   └── UserController.php      # Mengatur autentikasi admin
│   ├── helpers/                    # Fungsi-fungsi helper global
│   │   └── auth_helper.php         # Berisi proteksi login admin & generator dynamic image url
│   ├── models/                     # Penghubung logika database (Model)
│   │   ├── M_News.php
│   │   ├── M_Sport_Athlete.php
│   │   ├── M_Sport_Club.php
│   │   └── M_Sport_Type.php
│   └── views/                      # Tampilan antarmuka HTML/CSS/JS (View)
│       ├── Admin/                  # Tampilan dashboard pengelola backend
│       ├── User/                   # Tampilan portal berita frontend
│       └── templates/              # Layout template header, footer, & sidebar
├── assets/                         # Aset statis (CSS, JS, Gambar default)
├── upload/                         # Folder penyimpanan file hasil upload admin (Logo, Thumbnail, Foto)
├── vendor/                         # Library pihak ketiga / aset template tambahan
├── portal_olahraga.sql             # Backup database MySQL project
└── README.md                       # Dokumentasi ini
```

---

## 💡 Panduan Troubleshooting (Penyelesaian Masalah)

Jika Anda menemui kendala saat mengembangkan website ini, silakan periksa solusi di bawah ini:

### 1. Masalah Gambar/Logo yang Diunggah Pecah (Tidak Muncul)
- **Penyebab:** Database menyimpan alamat absolut (`http://localhost/...`). Jika Anda mengakses menggunakan domain berbeda (seperti `.test` di Laragon) atau dari jaringan lokal, URL gambar tersebut akan salah/tidak valid.
- **Solusi:** Gunakan helper `get_image_url($db_path)` di views untuk mencetak URL gambar. Contoh penggunaan:
  ```html
  <!-- Contoh Salah (Sebelumnya): -->
  <img src="<?php echo $club->logo; ?>">

  <!-- Contoh Benar (Sekarang): -->
  <img src="<?php echo get_image_url($club->logo); ?>">
  ```

### 2. Error Saat Upload: *"The filetype you are attempting to upload is not allowed"*
- **Penyebab:** CodeIgniter mendeteksi tipe MIME file yang tidak terdaftar di `mimes.php` (misalnya file PNG yang sebenarnya bertipe MIME `image/gif` karena diubah ekstensinya secara manual).
- **Solusi:** 
  1. Pastikan Anda mengunggah file gambar asli (bukan sekadar mengubah ekstensi manual melalui rename).
  2. Buka [application/config/mimes.php](file:///c:/laragon/www/website-portal-olahraga/application/config/mimes.php), tambahkan tipe MIME cadangan `application/octet-stream` atau tipe MIME spesifik lainnya pada array ekstensi yang bersangkutan.

### 3. Database Exception: `Unknown column 'sport_athlete.player_type' in 'where clause'`
- **Penyebab:** Adanya perbedaan nama kolom di skema database lokal Anda dengan kode kueri di model. Nama kolom asli di tabel database `sport_athlete` adalah `playerType_id`.
- **Solusi:** Selalu pastikan kueri di file model Anda memetakan kolom database dengan benar. Kami telah memetakan `playerType_id` di model [M_Sport_Athlete.php](file:///c:/laragon/www/website-portal-olahraga/application/models/M_Sport_Athlete.php) agar selaras dengan skema database terbaru.

### 4. Mengatasi Konflik Penggabungan Kode (Merge Conflict) di Git
Jika setelah Anda melakukan `git pull` muncul pesan `CONFLICT (content): Merge conflict in ...`, ikuti langkah berikut:
1. Buka file yang berkonflik di **VS Code**. Baris yang berbenturan akan ditandai dengan warna merah/biru.
2. Anda akan melihat penanda berikut di dalam kode:
   - `<<<<<<< HEAD` (Perubahan yang Anda buat di lokal)
   - `=======` (Pembatas)
   - `>>>>>>> [branch-name/commit-hash]` (Perubahan dari GitHub)
3. Pilih opsi di atas kode: **Accept Current Change** (ambil kode lokal Anda), **Accept Incoming Change** (ambil kode dari GitHub), atau **Accept Both Changes** (pertahankan keduanya).
4. Setelah selesai memilih dan merapikan kode, lakukan add & commit baru:
   ```bash
   git add .
   git commit -m "chore: menyelesaikan conflict pada [nama file]"
   git push origin [nama-branch-fitur-anda]
   ```