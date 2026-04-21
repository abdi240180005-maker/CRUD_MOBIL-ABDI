Deskripsi

Aplikasi Data Mobil adalah sistem sederhana berbasis web untuk mengelola data mobil. Aplikasi ini memungkinkan pengguna untuk menambahkan, melihat, mengedit, dan menghapus data mobil seperti nama, merk, tahun, dan harga.

⚙️ Fitur Utama
➕ Tambah data mobil
📋 Tampilkan daftar mobil
✏️ Edit data mobil
🗑️ Hapus data mobil
🗂️ Struktur Data


Setiap data mobil memiliki atribut berikut:

Field	Tipe Data	Keterangan
id	BIGINT	Primary Key
nama	VARCHAR	Nama mobil
merk	VARCHAR	Merk mobil
tahun	INT / YEAR	Tahun produksi
harga	DECIMAL/INT	Harga mobil



🖥️ Tampilan Aplikasi

Halaman utama menampilkan tabel data mobil dengan kolom:

No
Nama
Merk
Tahun
Harga
Aksi (Edit & Hapus)



🛠️ Teknologi yang Digunakan
HTML
CSS (opsional untuk styling)
PHP (backend)
MySQL (database)



🗄️ Setup Database
1. Buat Database
CREATE DATABASE penjualan;
USE penjualan;
2. Buat Tabel
CREATE TABLE mobil (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    merk VARCHAR(255) NOT NULL,
    tahun INT NOT NULL,
    harga DECIMAL(15,2) NOT NULL
);


🚀 Cara Menjalankan
1. Jalankan Server

Gunakan:

XAMPP / Laragon / LAMP
2. Simpan File

Letakkan project di folder:

htdocs/ (XAMPP)
3. Jalankan di Browser
http://localhost/nama-folder-project



📌 Contoh Data
Nama	Merk	Tahun	Harga
Pajero	Mitsubishi	2023	300000000
Brio	Honda	2020	80000000
Avanza	Toyota	2011	90000000



🔧 Fitur Pengembangan (Opsional)
Validasi input
Format rupiah (Rp)
Pagination
Pencarian data
Login user (auth)


📄 Lisensi

Project ini bebas digunakan untuk pembelajaran.