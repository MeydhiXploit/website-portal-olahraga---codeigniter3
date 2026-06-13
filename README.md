# Project Web Portal Berita Olahraga

Website Portal Berita Olahraga ini dibuat dengan menggunakan CodeIgniter 3. Website ini menyediakan segala informasi mengenai dunia olahraga. Di dalam website ini juga tersedia fitur admin, di mana admin dapat membuat dan menambahkan informasi-informasi ke dalam website ini.

## Link Akses Website (Server Local)

*   **Frontend (Halaman Utama):** [http://localhost/website-portal-olahraga/](http://localhost/website-portal-olahraga/)
*   **Backend (Halaman Admin):** [http://localhost/website-portal-olahraga/admin/login](http://localhost/website-portal-olahraga/admin/login)

---

## Dipersiapkan Oleh:

*   **Meydhi Ari Nugroho** (24010110126)
*   **Clara septia ramdhani** (2401010002)
*   **Villari Naufal Nety** (24010110076)
*   **M.syarifudin** (24010110078)

---

## 🚀 Panduan Kontribusi Kelompok (GitHub Workflow)

Untuk menjaga agar kode project tetap rapi, tidak bentrok (conflict), dan semua anggota kelompok bisa bekerja bersamaan dengan lancar, silakan ikuti alur kerja (workflow) di bawah ini:

### 0. Instalasi & Setup Dasar Git (Wajib bagi Pemula)

Jika Anda belum pernah menggunakan Git/GitHub sama sekali di laptop Anda, ikuti langkah-langkah dasar berikut terlebih dahulu:

#### A. Download dan Install Git Bash
1. Buka browser Anda dan unduh installer Git di link ini: **[git-scm.com/downloads](https://git-scm.com/downloads)** (Pilih tombol **Windows**).
2. Setelah selesai di-download, jalankan file installer-nya (misal `Git-x.xx.x-64-bit.exe`).
3. Klik **Next** terus-menerus sampai selesai (tidak perlu ada yang diubah, biarkan semua pengaturan default/bawaan), lalu klik **Install**.
4. Tunggu proses instalasi selesai, lalu klik **Finish**.

#### B. Cara Membuka Git Bash di Folder Project (Cara Paling Mudah)
Agar tidak bingung mengetik perintah navigasi folder, cara terbaik untuk membuka Git Bash adalah langsung dari folder server lokal Anda:
1. Buka **File Explorer** Windows Anda.
2. Masuk ke folder web root Anda (misal: `C:\laragon\www\` atau `C:\xampp\htdocs\`).
3. **Klik kanan** pada area kosong di dalam folder tersebut.
4. Pilih **"Git Bash Here"** (Untuk pengguna **Windows 11**: Klik kanan $\rightarrow$ pilih **Show more options** / **Tampilkan opsi lainnya** $\rightarrow$ pilih **Git Bash Here**).
5. Layar hitam terminal Git Bash akan otomatis terbuka dan langsung aktif di dalam folder tersebut.

#### C. Konfigurasi Identitas Git Anda (Wajib Dilakukan Sekali)
Sebelum bisa melakukan pengiriman kode, Anda harus mengenalkan identitas Anda kepada Git. Ketik perintah di bawah ini satu per satu di jendela Git Bash, lalu tekan **Enter**:
```bash
# Ganti teks di dalam tanda kutip dengan nama lengkap Anda
git config --global user.name "Nama Lengkap Anda"

# Ganti teks di dalam tanda kutip dengan email yang Anda gunakan di GitHub
git config --global user.email "email_anda@gmail.com"
```
*Catatan: Langkah konfigurasi di atas hanya perlu dilakukan sekali saja setelah menginstal Git.*

---

### 1. Persiapan Awal (Setup Project Pertama Kali)

Jika Anda baru pertama kali bergabung ke repositori ini, pilih panduan di bawah sesuai dengan server lokal yang Anda gunakan (**Laragon** atau **XAMPP**):

---

#### A. Panduan Pengguna Laragon

1. **Buka Git Bash di folder `C:\laragon\www\`:**
   - Buka File Explorer, masuk ke folder `C:\laragon\www\`.
   - Klik kanan di area kosong, lalu pilih **"Git Bash Here"**.
2. **Clone Repositori:**
   - Jalankan perintah berikut di Git Bash:
     ```bash
     git clone https://github.com/MeydhiXploit/website-portal-olahraga---codeigniter3.git
     ```
   - Foldernya akan otomatis bernama `website-portal-olahraga---codeigniter3`. Silakan **rename** (ubah nama) folder tersebut menjadi **`website-portal-olahraga`** agar nama link aksesnya rapi dan pendek.
3. **Nyalakan Server Laragon:**
   - Buka aplikasi Laragon Anda.
   - Klik tombol **"Start All"**.
4. **Import Database:**
   - Di aplikasi Laragon, klik tombol **"Database"** (ini akan membuka aplikasi HeidiSQL atau sejenisnya), ATAU jika Anda menggunakan phpMyAdmin, buka browser Anda ke `http://localhost/phpmyadmin/`.
   - Buat database baru bernama **`portal_olahraga`**.
   - Klik kanan database `portal_olahraga` tersebut $\rightarrow$ pilih **Import** $\rightarrow$ **Load SQL file...** $\rightarrow$ pilih file [portal_olahraga.sql](file:///c:/laragon/www/website-portal-olahraga/portal_olahraga.sql) yang terletak di folder project Anda $\rightarrow$ jalankan query-nya.
5. **Akses Website:**
   - Laragon secara otomatis membuat domain lokal untuk Anda. Buka browser dan akses:
     * **Frontend (Halaman Utama):** `http://website-portal-olahraga.test/`
     * **Backend (Halaman Admin):** `http://website-portal-olahraga.test/admin/login`

---

#### B. Panduan Pengguna XAMPP

1. **Buka Git Bash di folder `C:\xampp\htdocs\`:**
   - Buka File Explorer, masuk ke folder `C:\xampp\htdocs\`.
   - Klik kanan di area kosong, lalu pilih **"Git Bash Here"**.
2. **Clone Repositori:**
   - Jalankan perintah berikut di Git Bash:
     ```bash
     git clone https://github.com/MeydhiXploit/website-portal-olahraga---codeigniter3.git
     ```
   - **Rename** (ubah nama) folder hasil clone tersebut dari `website-portal-olahraga---codeigniter3` menjadi **`website-portal-olahraga`**.
3. **Nyalakan Server XAMPP:**
   - Buka aplikasi **XAMPP Control Panel**.
   - Klik tombol **"Start"** pada **Apache** dan **MySQL** hingga statusnya berwarna hijau.
4. **Import Database:**
   - Buka browser Anda dan akses **`http://localhost/phpmyadmin/`**.
   - Klik tombol **"New" / "Baru"** di menu sebelah kiri.
   - Tulis nama database: **`portal_olahraga`**, lalu klik tombol **"Create" / "Buat"**.
   - Klik database `portal_olahraga` yang baru dibuat, lalu pilih tab **"Import"** di bagian atas.
   - Klik tombol **"Choose File" / "Pilih File"**, lalu cari dan pilih file [portal_olahraga.sql](file:///c:/laragon/www/website-portal-olahraga/portal_olahraga.sql) di root folder project Anda.
   - Scroll ke bawah halaman, lalu klik tombol **"Import" / "Kirim"** di pojok kanan bawah.
5. **Akses Website:**
   - Buka browser Anda dan akses:
     * **Frontend (Halaman Utama):** `http://localhost/website-portal-olahraga/`
     * **Backend (Halaman Admin):** `http://localhost/website-portal-olahraga/admin/login`

---

#### 🔧 Konfigurasi Tambahan Aplikasi (Wajib Diperiksa)

Setelah melakukan clone dan import database, silakan sesuaikan konfigurasi file CodeIgniter berikut:

1. **Konfigurasi Database lokal Anda:**
   - Buka file [application/config/database.php](file:///c:/laragon/www/website-portal-olahraga/application/config/database.php).
   - Cari baris kode berikut (sekitar baris 75-80):
     ```php
     'username' => 'root',        // Default untuk XAMPP & Laragon adalah 'root'
     'password' => '',            // Default XAMPP/Laragon biasanya kosong ('')
     'database' => 'portal_olahraga',
     ```
   - Jika username atau password MySQL lokal Anda berbeda, silakan disesuaikan.

2. **Konfigurasi Base URL:**
   - Buka file [application/config/config.php](file:///c:/laragon/www/website-portal-olahraga/application/config/config.php).
   - Cari baris `$config['base_url']` (sekitar baris 26):
     ```php
     $config['base_url'] = 'http://localhost/website-portal-olahraga/';
     ```
   - *Catatan bagi pengguna Laragon:* Jika Anda menggunakan domain lokal `.test`, Anda bisa menyesuaikannya menjadi:
     ```php
     $config['base_url'] = 'http://website-portal-olahraga.test/';
     ```

---

### 2. Alur Kerja Harian (Git Workflow)

Setiap kali Anda ingin membuat fitur baru atau memperbaiki bug, ikuti langkah-langkah berikut secara berurutan:

#### Langkah Awal: Ambil Kode Terbaru
Sebelum menulis kode baru, pastikan repositori lokal Anda memiliki kode terbaru dari branch `main`.
```bash
# Pindah ke branch main
git checkout main

# Ambil perubahan terbaru dari GitHub
git pull origin main
```

#### Langkah 2: Buat Branch Baru
Jangan pernah melakukan coding atau commit langsung di branch `main`! Buatlah branch baru khusus untuk fitur yang ingin dikerjakan.
```bash
# Buat dan pindah ke branch baru
# Format: feature/nama-fitur atau fix/nama-bug
git checkout -b feature/tambah-detail-liga
```

#### Langkah 3: Coding & Uji Coba Lokal
- Tulis kode Anda di text editor (VS Code, dll.).
- Jalankan di browser dan pastikan fitur berjalan dengan baik serta tidak ada error.

#### Langkah 4: Commit Perubahan
Jika pekerjaan Anda sudah selesai dan berfungsi dengan baik:
```bash
# Cek file apa saja yang berubah/ditambahkan
git status

# Tambahkan perubahan ke staging area
git add .

# Buat commit dengan pesan yang jelas dan deskriptif
git commit -m "feat: menambahkan halaman detail liga dan daftar klub"
```
*Tips Penulisan Pesan Commit:*
- `feat: ...` untuk fitur baru.
- `fix: ...` untuk perbaikan bug/error.
- `docs: ...` untuk perubahan dokumentasi (seperti README).
- `style: ...` untuk merapikan format kode, CSS, atau tampilan tanpa mengubah logika.

#### Langkah 5: Push Branch ke GitHub
Kirim branch lokal Anda yang berisi fitur baru ke repositori GitHub online:
```bash
git push origin feature/tambah-detail-liga
```

---

### 3. Membuat Pull Request (PR) & Penggabungan Kode

Setelah berhasil melakukan push branch ke GitHub:
1. Buka halaman repositori GitHub project ini.
2. Anda akan melihat notifikasi kuning berupa tombol **"Compare & pull request"**. Klik tombol tersebut.
3. Beri judul Pull Request yang jelas dan jelaskan secara singkat apa saja yang Anda ubah atau tambahkan.
4. Klik **"Create pull request"**.
5. **Review Kode:** Beritahu anggota kelompok lain di grup chat untuk memeriksa (review) perubahan Anda.
6. **Merge:** Setelah disetujui dan tidak ada konflik (conflict), klik **"Merge pull request"** lalu klik **"Confirm merge"**.
7. Setelah di-merge, Anda bisa menghapus branch fitur tersebut di GitHub dan di komputer lokal Anda:
   ```bash
   git checkout main
   git pull origin main
   git branch -d feature/tambah-detail-liga
   ```

---

### 4. Sinkronisasi Perubahan Database (PENTING!)

Karena project ini menggunakan database MySQL (`portal_olahraga.sql`), ikuti aturan berikut jika Anda melakukan perubahan struktur database (seperti menambah tabel, menambah kolom, mengubah tipe data, dll.):
1. Setelah mengubah database di `phpmyadmin` lokal Anda, **Export** kembali database tersebut.
2. Simpan file hasil export tersebut dengan menimpa (overwrite) file [portal_olahraga.sql](file:///c:/laragon/www/website-portal-olahraga/portal_olahraga.sql) di root folder project.
3. Commit dan push file `portal_olahraga.sql` tersebut bersamaan dengan kode fitur Anda.
4. **Bagi Anggota Kelompok Lain:** Jika melihat ada perubahan pada file `portal_olahraga.sql` setelah Anda melakukan `git pull origin main`, segera import ulang file tersebut ke `phpmyadmin` lokal Anda agar database Anda tersinkronisasi.

---

### ⚠️ Tips Menghindari Konflik Kode (Merge Conflict)
- **Komunikasi:** Selalu koordinasikan dengan kelompok siapa mengerjakan file/fitur apa agar tidak ada dua orang yang mengubah file atau baris kode yang sama secara bersamaan.
- **Sering Pull:** Sering-sering lakukan `git pull origin main` ketika berada di branch `main` untuk meminimalkan perbedaan kode yang terlalu jauh.
