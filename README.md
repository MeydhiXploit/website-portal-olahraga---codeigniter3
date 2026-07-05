# Web Portal Berita Olahraga

Website Portal Berita Olahraga adalah aplikasi berbasis **CodeIgniter 3** dengan pola **MVC (Model-View-Controller)**. Aplikasi ini menyediakan halaman frontend untuk pengunjung dan halaman backend untuk admin dalam mengelola berita olahraga, jenis olahraga, liga, klub, atlet, pertandingan, user, tipe pemain, pelanggaran, dan review.

Project ini memakai **PHP**, **MySQL**, **Bootstrap**, asset template frontend di folder `assets/userpage/`, serta database utama dari file `portal_olahraga.sql`.

## Akses Lokal

- Frontend: `http://localhost/website-portal-olahraga/`
- Admin: `http://localhost/website-portal-olahraga/admin/login`

## Tim Pengembang

| Peran | NIM | Nama |
| :-- | :-- | :-- |
| Ketua Kelompok | `24010110126` | Meydhi Ari Nugroho |
| Anggota | `24010110088` | Clara Septia Ramdhani |
| Anggota | `24010110076` | Villari Naufal Nety |
| Anggota | `24010110078` | M. Syarifudin |

## Cara Kerja Singkat Project

Alur utama aplikasi mengikuti pola MVC CodeIgniter:

1. Request masuk melalui `index.php`.
2. Route dibaca dari `application/config/routes.php`.
3. Controller di `application/controllers/` menerima request dan menjalankan logika.
4. Controller memanggil model di `application/models/` untuk mengambil atau menyimpan data.
5. Model membaca database MySQL yang strukturnya tersedia di `portal_olahraga.sql`.
6. Controller mengirim data ke view di `application/views/`.
7. View menampilkan halaman HTML, CSS, JavaScript, gambar dari `assets/`, dan file upload dari `upload/`.

Contoh alur nyata:

```text
/admin/news
-> application/config/routes.php
-> NewsController::select_sportType()
-> M_Sport_Type dan M_News
-> application/views/Admin/news/
-> assets/userpage/ dan upload/
```

Contoh alur halaman utama:

```text
/
-> default_controller: Home/index
-> application/controllers/Home.php
-> News_model, M_Sport_Type, Match_model, Athlete_model, Club_model
-> application/views/home/index.php
-> layout frontend dari application/views/layouts/
```

## Struktur Folder Penting

```text
website-portal-olahraga/
|-- application/
|   |-- config/
|   |-- controllers/
|   |-- helpers/
|   |-- libraries/
|   |-- models/
|   +-- views/
|-- assets/
|   |-- img/
|   +-- userpage/
|-- system/
|-- upload/
|-- vendor/
|-- index.php
|-- composer.json
|-- portal_olahraga.sql
+-- README.md
```

Penjelasan hubungan folder:

- `index.php` adalah pintu masuk aplikasi CodeIgniter. Semua request akan melewati file ini sebelum diarahkan ke route dan controller.
- `application/config/` berisi konfigurasi aplikasi. File yang paling sering dipakai adalah `config.php`, `database.php`, `routes.php`, `autoload.php`, dan `mimes.php`.
- `application/controllers/` berisi pengendali request. Contohnya `Home.php` untuk halaman utama, `Auth.php` untuk login/register, `NewsController.php` untuk berita admin dan review, `MatchController.php` untuk pertandingan, `AthleteController.php` untuk atlet dan foul, serta `SportController.php` untuk jenis olahraga dan klub.
- `application/models/` berisi query dan akses database. Contohnya `M_News.php`, `M_Match.php`, `M_Sport_Type.php`, `M_League.php`, `Athlete_model.php`, `Club_model.php`, `Auth_model.php`, dan `M_User.php`.
- `application/views/` berisi tampilan halaman. Folder `Admin/` untuk dashboard admin, `User/` dan folder frontend lain untuk halaman pengunjung, serta `layouts/` untuk layout utama seperti `layout-admin.php` dan `layout-user.php`.
- `application/helpers/` berisi helper tambahan. Project ini memakai `auth_helper.php` untuk fungsi bantu autentikasi seperti pengecekan login admin.
- `application/libraries/` berisi library custom. Project ini memiliki `Template.php` untuk pemanggilan layout dan `Visitor.php` untuk pencatatan visitor.
- `assets/` berisi file statis seperti CSS, JavaScript, font, gambar template, dan gambar default. Folder `assets/userpage/` dipakai oleh tampilan frontend.
- `upload/` dipakai untuk menyimpan file yang diunggah dari halaman admin, seperti thumbnail berita, logo klub, atau gambar lain.
- `system/` adalah core CodeIgniter 3. Folder ini sebaiknya tidak diubah kecuali benar-benar diperlukan.
- `vendor/` berisi dependency dari Composer.
- `portal_olahraga.sql` berisi struktur dan data database yang harus di-import ke MySQL.

## Controller Utama

| Controller | Fungsi utama |
| :-- | :-- |
| `Home.php` | Halaman utama frontend, berita terbaru, pertandingan terbaru, atlet, dan klub. |
| `HomeController.php` | Dashboard admin dan pencarian berita. |
| `Auth.php` | Login, register, dan logout user. |
| `UserController.php` | Login admin dan manajemen user. |
| `NewsController.php` | Manajemen berita admin, upload thumbnail, dan review. |
| `Berita.php` | Halaman berita frontend, detail berita, dan kategori olahraga. |
| `MatchController.php` | Manajemen pertandingan di admin. |
| `Pertandingan.php` | Daftar pertandingan di frontend. |
| `AthleteController.php` | Manajemen atlet, tipe foul, dan foul di admin. |
| `Atlet.php` | Daftar dan detail atlet di frontend. |
| `SportController.php` | Manajemen jenis olahraga dan klub olahraga. |
| `Klub.php` | Daftar dan detail klub di frontend. |
| `LeagueController.php` | Manajemen liga. |
| `Player_type.php` | Manajemen tipe pemain. |

## View Utama

```text
application/views/
|-- Admin/
|   |-- athlete/
|   |-- foul/
|   |-- foul-type/
|   |-- league/
|   |-- match/
|   |-- news/
|   |-- player-type/
|   |-- player_type/
|   |-- sport-club/
|   |-- sport-type/
|   |-- user/
|   +-- dashboard.php
|-- Auth/
|-- User/
|-- atlet/
|-- berita/
|-- home/
|-- klub/
|-- layouts/
+-- pertandingan/
```

Folder `Admin/` dipakai untuk halaman CRUD admin. Folder `home/`, `berita/`, `atlet/`, `klub/`, dan `pertandingan/` dipakai untuk halaman frontend. Folder `layouts/` menyimpan kerangka tampilan agar header, sidebar, navbar, dan footer bisa dipakai ulang.

## File Konfigurasi Penting

- `application/config/routes.php`: mengatur URL ke controller dan method.
- `application/config/database.php`: mengatur koneksi database MySQL.
- `application/config/config.php`: mengatur `base_url` dan konfigurasi dasar aplikasi.
- `application/config/autoload.php`: mengatur library dan helper yang otomatis dimuat. Project ini memuat `database`, `upload`, `session`, `visitor`, `template`, `url`, dan `auth_helper`.
- `application/config/mimes.php`: mengatur MIME type file upload.

## Route Penting

Frontend:

- `/` -> `Home/index`
- `/login` -> `Auth/login`
- `/register` -> `Auth/register`
- `/logout` -> `Auth/logout`
- `/news/{slug}` -> `Berita/detail`
- `/sport/{slug}` -> `Berita/kategori`
- `/pertandingan` -> `Pertandingan/index`
- `/atlet` -> `Atlet/index`
- `/klub` -> `Klub/index`
- `/search` -> `HomeController/searchNews`

Admin:

- `/admin/login` -> `UserController/loginAdmin`
- `/admin/dashboard` -> `HomeController/indexAdmin`
- `/admin/user` -> `UserController/index`
- `/admin/sport-type` -> `SportController/sportType`
- `/admin/league` -> `LeagueController/select_sportType`
- `/admin/sport-club` -> `SportController/select_sportType`
- `/admin/player-type` -> `Player_type/index`
- `/admin/foul-type` -> `AthleteController/foulType_selectSport`
- `/admin/match` -> `MatchController/select_sportType`
- `/admin/athlete` -> `AthleteController/athlete_selectSport`
- `/admin/foul` -> `AthleteController/foul_selectSport`
- `/admin/news` -> `NewsController/select_sportType`

## Instalasi Lokal

### Menggunakan Laragon

1. Letakkan project di folder `C:\laragon\www\website-portal-olahraga`.
2. Jalankan Laragon, lalu klik `Start All`.
3. Buat database MySQL bernama `portal_olahraga`.
4. Import file `portal_olahraga.sql` ke database tersebut.
5. Buka `application/config/database.php`, lalu pastikan konfigurasi sesuai:

```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'portal_olahraga',
```

6. Buka `application/config/config.php`, lalu sesuaikan `base_url`:

```php
$config['base_url'] = 'http://localhost/website-portal-olahraga/';
```

7. Akses project melalui browser:

```text
http://localhost/website-portal-olahraga/
```

### Menggunakan XAMPP

1. Letakkan project di folder `C:\xampp\htdocs\website-portal-olahraga`.
2. Jalankan Apache dan MySQL dari XAMPP Control Panel.
3. Buka `http://localhost/phpmyadmin/`.
4. Buat database bernama `portal_olahraga`.
5. Import file `portal_olahraga.sql`.
6. Sesuaikan `database.php` dan `config.php`.
7. Akses project di `http://localhost/website-portal-olahraga/`.

## Database

Database utama project ada di file:

```text
portal_olahraga.sql
```

File ini harus di-import sebelum aplikasi dijalankan. Model di folder `application/models/` mengambil data dari tabel-tabel di database tersebut. Contohnya:

- `M_News.php` berhubungan dengan data berita.
- `M_Match.php` dan `Match_model.php` berhubungan dengan pertandingan.
- `M_Sport_Type.php` berhubungan dengan jenis olahraga.
- `M_League.php` berhubungan dengan liga.
- `Athlete_model.php` berhubungan dengan atlet.
- `Club_model.php` berhubungan dengan klub.
- `Auth_model.php` dan `M_User.php` berhubungan dengan user dan autentikasi.

## Upload dan Asset

File gambar yang di-upload admin disimpan di folder:

```text
upload/
```

Asset bawaan frontend dan tampilan berada di:

```text
assets/userpage/
```

Contoh file penting:

- `assets/userpage/css/home.css`
- `assets/userpage/css/bootstrap.css`
- `assets/userpage/js/custom.js`
- `assets/userpage/images/`
- `assets/img/no-image.jpg`

## Composer

Jika dependency belum tersedia, jalankan:

```bash
composer install
```

File `composer.json` menyimpan daftar dependency, sedangkan hasil install berada di folder `vendor/`.

## Troubleshooting

### Gambar tidak tampil

Pastikan path gambar di database dan folder `upload/` sesuai. Jika project dipindahkan dari komputer lain, URL absolut seperti `http://localhost/...` bisa menyebabkan gambar tidak muncul saat base URL berbeda.

### Upload gambar gagal

Pastikan format file sesuai dengan konfigurasi upload. Untuk pengaturan tipe file, cek:

```text
application/config/mimes.php
```

Pada `NewsController.php`, upload thumbnail memakai folder `upload/` dan tipe file:

```text
jpg, jpeg, png, webp, gif
```

### Database error

Pastikan database `portal_olahraga` sudah dibuat dan file `portal_olahraga.sql` sudah di-import. Periksa juga konfigurasi di:

```text
application/config/database.php
```

### Halaman 404

Pastikan route yang diakses sudah terdaftar di:

```text
application/config/routes.php
```

Pastikan juga nama controller dan method sesuai dengan route.

## Catatan Pengembangan

- Utamakan perubahan di folder `application/`, `assets/`, dan `upload/`.
- Hindari mengubah folder `system/` karena folder tersebut adalah core CodeIgniter.
- Jika menambah halaman baru, tambahkan route di `routes.php`, controller di `controllers/`, model jika membutuhkan database, dan view di `views/`.
- Jika menambah fitur admin, ikuti pola folder `application/views/Admin/` yang sudah ada.
