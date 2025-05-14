<h1 align="center">COOKIFY</h1>
<h3 align="center">(Sistem Informasi Perpustakaan Digital Berbasis Web)</h3><br>

<p align="center">
  <img src="public/images/lgo.jpg" alt="Logo Perpustakaan Digital" width="150" height="auto"><br><br>
</p>

<p align="center">
  <strong>Nama :</strong> Sipaami<br>
  <strong>NIM :</strong> D0223030
</p>
<br><br>

<p align="center">
  Framework Web laravel <br>
  2025
</p>
<br>

## Tentang SIP-D

istem Informasi Perpustakaan Digital (SIP-D) adalah platform berbasis teknologi untuk mempermudah pengelolaan koleksi buku, data pengguna, peminjaman, dan transaksi lainnya di perpustakaan. Sistem ini berfokus pada efisiensi dan aksesibilitas dengan memberikan berbagai fitur yang mendukung operasional perpustakaan secara otomatis dan terstruktur.

### Role dan fitur-fiturnya

#### 1. Admin (Pengelola aplikasi)

- Mengelola data petugas dan anggota
- Mengelola data buku dan kategori buku
- Mengelola stok buku
- Melihat dan mencetak laporan peminjaman
- Mengelola akun pengguna (buat, edit, hapus)
- Punya akses penuh terhadap seluruh sistem

#### 2. Petugas 

- Mencatat peminjaman dan pengembalian buku
- Melihat dan memperbarui data buku 
- Melihat riwayat peminjaman anggota
- Mencetak bukti peminjaman
- Membantu anggota dalam penggunaan sistem


#### 3. Anggota 

- Melihat koleksi buku dan detailnya
- Melakukan peminjaman dan pengembalian
- Melihat riwayat peminjaman pribadi
- Menerima notifikasi pengembalian
- Mengelola data profil pribadi

<br>

### Tabel-tabel database beserta field dan tipe datanya
<br>

#### Tabel 1 (admin)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | bigint | Primary key |
| euser_id | foreignld | Relasi ke tabel users|
| nama_admin | string | Nama admin |
| no_hp | string | no hp admin|
| created_at | timestamp |Waktu data dibuat|
|updated_at | timestamp |Waktu data diperbarui|

<br>

#### Tabel 2 (Petugas)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | bigint | Primary key |
| euser_id | foreignld | Relasi ke tabel users|
| nama_petugas | string | Nama petugas |
| no_hp | string | no hp petugas|
| alamat | string | alamat petugas|
| created_at | timestamp |Waktu data dibuat|
|updated_at | timestamp |Waktu data diperbarui|
<br>

#### Tabel 3 (Anggota)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| id | bigint | Primary key |
| euser_id | foreignld | Relasi ke tabel users|
| kode_anggota | string | Kode unik anggota |
| nama_lengkap | string | nama lengkap anggota|
| alamat | string | alamat anggota|
| no_hp | string | no hp anggota|
| created_at | timestamp |Waktu data dibuat|
|updated_at | timestamp |Waktu data diperbarui|
<br>


### Jenis-jenis Relasi

- Peminjaman ke Anggota (Many-to-One)  
- Pengguna ke Anggota (One-to-One) 
- Admin ke Pengguna (One-to-One)