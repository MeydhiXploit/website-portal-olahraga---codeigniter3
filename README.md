# Project Web Portal Berita Olahraga

Website Portal Berita Olahraga ini dibuat dengan menggunakan CodeIgniter 3. Website ini menyediakan segala informasi mengenai dunia olahraga. Di dalam website ini juga tersedia fitur admin, di mana admin dapat membuat dan menambahkan informasi-informasi ke dalam website ini.

## Link Akses Website (Server Local)

*   **Frontend (Halaman Utama):** [http://localhost/website-portal-olahraga/](http://localhost/website-portal-olahraga/)
*   **Backend (Halaman Admin):** [http://localhost/website-portal-olahraga/admin/login](http://localhost/website-portal-olahraga/admin/login)

---

## 👥 Tim Pengembang & Kontributor

**Kelas: B**

| Peran | Nama Lengkap | NIM |
| :---: | :--- | :---: |
| 👑 **Ketua Kelompok** | **Meydhi Ari Nugroho** | `24010110126` |
| 💻 **Anggota** | **Clara septia ramdhani** | `2401010002` |
| 💻 **Anggota** | **Villari Naufal Nety** | `24010110076` |
| 💻 **Anggota** | **M.syarifudin** | `24010110078` |

---

## 🚀 Panduan Kontribusi Kelompok (GitHub Workflow)

Untuk menjaga agar kode project tetap rapi, tidak bentrok (conflict), dan semua anggota kelompok bisa bekerja bersamaan dengan lancar, silakan ikuti alur kerja (workflow) di bawah ini:

### 0. Instalasi & Setup Dasar Git (Wajib bagi Pemula)

Jika Anda belum pernah menggunakan Git/GitHub sama sekali di laptop Anda, ikuti langkah-langkah dasar berikut terlebih dahulu agar tidak bingung:

#### A. Download dan Install Git Bash
1. Buka browser Anda dan unduh installer Git di link ini: **[git-scm.com/downloads](https://git-scm.com/downloads)** (Pilih tombol **Windows**).
2. Setelah selesai di-download, jalankan file installer-nya (misal `Git-2.xx.x-64-bit.exe` yang ada di folder Downloads Anda).
3. **Penting:** Selama proses instalasi, klik **Next** terus-menerus sampai selesai. Anda tidak perlu mengubah pengaturan apa pun, biarkan semuanya default/bawaan.
4. Di halaman terakhir, klik **Install**, tunggu sebentar, lalu klik **Finish**. Sekarang Git Bash sudah terpasang di komputer Anda.

#### B. Konfigurasi Identitas Git Anda (Wajib Dilakukan Sekali)
Sebelum bisa melakukan pengiriman kode ke GitHub, Anda harus mengenalkan identitas Anda kepada aplikasi Git di laptop Anda:
1. Klik tombol **Start** Windows (logo Windows di kiri bawah desktop).
2. Ketik **"Git Bash"**, lalu klik aplikasi Git Bash untuk membukanya. Sebuah jendela hitam mirip Command Prompt akan muncul.
3. Ketik perintah di bawah ini satu per satu, lalu tekan **Enter** pada keyboard setelah mengetik masing-masing baris:
   ```bash
   # Ganti teks di dalam tanda kutip dengan nama lengkap Anda
   git config --global user.name "Nama Lengkap Anda"

   # Ganti teks di dalam tanda kutip dengan email yang Anda gunakan di GitHub
   git config --global user.email "email_anda@gmail.com"
   ```
4. Setelah selesai, Anda bisa menutup jendela Git Bash tersebut. *Langkah ini hanya perlu dilakukan satu kali saja seumur hidup di laptop Anda.*

#### C. Cara Membuka Git Bash di Folder Project (Cara Paling Mudah)
Agar tidak bingung mengetik perintah navigasi folder (`cd folder`), cara terbaik untuk membuka Git Bash adalah langsung dari folder server lokal Anda:
1. Buka **File Explorer** Windows Anda.
2. Masuk ke folder web root Anda:
   - Bagi pengguna **Laragon**: Masuk ke `C:\laragon\www\`
   - Bagi pengguna **XAMPP**: Masuk ke `C:\xampp\htdocs\`
3. **Klik kanan** pada area kosong di dalam folder tersebut.
4. Pilih **"Git Bash Here"**.
   - *Catatan untuk pengguna Windows 11:* Klik kanan pada area kosong $\rightarrow$ pilih **Show more options** (Tampilkan opsi lainnya) $\rightarrow$ pilih **Git Bash Here**.
5. Layar hitam terminal Git Bash akan otomatis terbuka dan langsung aktif di dalam folder tersebut (Anda akan melihat tulisan alamat folder berwarna biru di atas ketikan Anda).

---

### 1. Persiapan Awal (Setup Project Pertama Kali)

Jika Anda baru pertama kali bergabung ke repositori ini, silakan ikuti panduan detail di bawah sesuai dengan server lokal yang Anda gunakan (**Laragon** atau **XAMPP**):

---

#### A. Panduan Setup untuk Pengguna LARAGON

1. **Buka Git Bash di folder `C:\laragon\www\`:**
   - Masuk ke folder `C:\laragon\www\` melalui File Explorer.
   - Klik kanan di area kosong, lalu pilih **"Git Bash Here"**.
2. **Clone Repositori (Menyalin Project dari GitHub):**
   - Jalankan perintah berikut di Git Bash, lalu tekan Enter:
     ```bash
     git clone https://github.com/MeydhiXploit/website-portal-olahraga---codeigniter3.git
     ```
   - Tunggu proses download hingga selesai 100%.
3. **Rename Folder Project:**
   - Folder hasil clone secara default bernama `website-portal-olahraga---codeigniter3`.
   - Klik kanan folder tersebut di File Explorer $\rightarrow$ pilih **Rename** (atau klik folder lalu tekan **F2** pada keyboard).
   - Ubah namanya menjadi **`website-portal-olahraga`** (agar link aksesnya lebih pendek dan rapi).
4. **Nyalakan Server Laragon:**
   - Buka aplikasi Laragon.
   - Klik tombol **"Start All"** dan pastikan Apache serta MySQL sudah bertuliskan status running (jalan).
5. **Import Database (Menggunakan HeidiSQL):**
   - Di aplikasi Laragon, klik tombol **"Database"** di bagian bawah.
   - Akan muncul jendela masuk HeidiSQL. Klik langsung tombol **"Open"** di pojok kanan bawah (tidak perlu mengisi password, biarkan default kosong).
   - Pada daftar database di panel sebelah kiri, **klik kanan** area kosong $\rightarrow$ pilih **Create new** $\rightarrow$ **Database**.
   - Beri nama database baru tersebut: **`portal_olahraga`**, lalu klik **OK**.
   - Klik kiri database `portal_olahraga` yang baru dibuat agar terpilih.
   - Klik menu **File** di bagian kiri atas jendela HeidiSQL $\rightarrow$ pilih **Run SQL file...**.
   - Cari dan pilih file `portal_olahraga.sql` yang terletak di dalam folder project Anda (`C:\laragon\www\website-portal-olahraga\portal_olahraga.sql`).
   - Jika ada konfirmasi, klik **Yes/Jalankan**. Tunggu sampai selesai, lalu tekan F5 untuk me-refresh HeidiSQL. Tabel-tabel database akan muncul.
6. **Akses Website:**
   - Buka browser Anda (Chrome/Edge/Firefox) dan ketik alamat berikut:
     * **Frontend (Halaman Utama):** `http://website-portal-olahraga.test/` (atau jika tidak bisa, gunakan `http://localhost/website-portal-olahraga/`)
     * **Backend (Halaman Admin):** `http://website-portal-olahraga.test/admin/login`

---

#### B. Panduan Setup untuk Pengguna XAMPP

1. **Buka Git Bash di folder `C:\xampp\htdocs\`:**
   - Masuk ke folder `C:\xampp\htdocs\` melalui File Explorer.
   - Klik kanan di area kosong, lalu pilih **"Git Bash Here"**.
2. **Clone Repositori (Menyalin Project dari GitHub):**
   - Jalankan perintah berikut di Git Bash, lalu tekan Enter:
     ```bash
     git clone https://github.com/MeydhiXploit/website-portal-olahraga---codeigniter3.git
     ```
   - Tunggu proses download hingga selesai 100%.
3. **Rename Folder Project:**
   - Klik kanan folder `website-portal-olahraga---codeigniter3` di File Explorer $\rightarrow$ pilih **Rename** (atau tekan **F2**).
   - Ubah namanya menjadi **`website-portal-olahraga`**.
4. **Nyalakan Server XAMPP:**
   - Buka aplikasi **XAMPP Control Panel**.
   - Klik tombol **"Start"** pada **Apache** dan **MySQL** hingga kedua teks tersebut berwarna hijau dan ada angka port-nya.
5. **Import Database (Menggunakan phpMyAdmin):**
   - Buka browser Anda dan akses **`http://localhost/phpmyadmin/`**.
   - Klik menu **"New" / "Baru"** yang berlogo kertas plus di menu sebelah kiri atas.
   - Pada kolom nama database, ketik: **`portal_olahraga`**, kemudian klik tombol **"Create" / "Buat"**.
   - Klik database `portal_olahraga` yang baru Anda buat tadi di sebelah kiri.
   - Klik tab **"Import"** di menu bagian atas halaman.
   - Klik tombol **"Choose File" / "Pilih File"**, lalu cari dan pilih file [portal_olahraga.sql](file:///c:/laragon/www/website-portal-olahraga/portal_olahraga.sql) di folder project Anda (`C:\xampp\htdocs\website-portal-olahraga\portal_olahraga.sql`).
   - Scroll ke bawah halaman, lalu klik tombol **"Import" / "Kirim"** di pojok kanan bawah. Tunggu hingga muncul pesan berhasil berwarna hijau.
6. **Akses Website:**
   - Buka browser Anda dan ketik alamat berikut:
     * **Frontend (Halaman Utama):** `http://localhost/website-portal-olahraga/`
     * **Backend (Halaman Admin):** `http://localhost/website-portal-olahraga/admin/login`

---

#### 🔧 Konfigurasi Tambahan Aplikasi (Wajib Diperiksa)

Setelah project berhasil di-setup dan database di-import, silakan sesuaikan konfigurasi file CodeIgniter berikut di text editor Anda (misal VS Code):

1. **Membuka Project di VS Code:**
   - Jalankan aplikasi VS Code $\rightarrow$ klik **File** $\rightarrow$ **Open Folder** $\rightarrow$ pilih folder project `website-portal-olahraga` yang sudah di-rename tadi.
2. **Konfigurasi Database lokal Anda:**
   - Buka file [application/config/database.php](file:///c:/laragon/www/website-portal-olahraga/application/config/database.php).
   - Cari baris kode berikut (sekitar baris 75-80):
     ```php
     'username' => 'root',        // Default untuk XAMPP & Laragon adalah 'root'
     'password' => '',            // Default XAMPP/Laragon biasanya kosong ('')
     'database' => 'portal_olahraga',
     ```
   - Jika username atau password MySQL lokal Anda berbeda, silakan disesuaikan.
3. **Konfigurasi Base URL:**
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

> [!IMPORTANT]
> **Penting untuk Pemula (Login GitHub):**
> Saat pertama kali Anda mengetik `git push`, Windows biasanya akan memunculkan jendela pop-up login dari GitHub.
> 1. Klik tombol **"Sign in with your browser"** (Masuk menggunakan browser).
> 2. Browser Anda akan terbuka secara otomatis ke halaman login/konfirmasi GitHub.
> 3. Klik tombol hijau **"Authorize GitCredentialManager"** (pastikan Anda sudah login ke akun GitHub Anda di browser tersebut).
> 4. Setelah berhasil, jendela pop-up akan menutup sendiri dan proses pengiriman file di Git Bash Anda akan otomatis berjalan hingga selesai.

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
