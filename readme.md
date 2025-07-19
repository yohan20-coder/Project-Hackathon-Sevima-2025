
# Project CodeIgniter 3 — Nama Sistem Pencatatan Transaksi

Project ini dibuat menggunakan [CodeIgniter 3]

---

## ✨ Fitur
- CRUD Data Transaksi
- Autentikasi Login
- Validasi Input Data
- Import Data Transaksi
- Grafik Trend Penjualan Berdasarkan Kategori Merk

---

## 🛠️ Kebutuhan Sistem
- PHP 7.4
- PostgreSQL
- Web Server (Apache/Nginx)

---

## 🚀 Cara Instalasi

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
```

### 2️⃣ Install Sistem
```bash
Taruh folder project pada htdocs jika menggunakan xampp sesuaikan url pada config.php sesuai dengan nama foldernya
```

### 3️⃣ Import database nya dan Atur Kofigurasi Database nya di file Database.php`
```bash
cp env .env
```

Edit bagian database :
```
'hostname' => 'localhost',
'username' => 'postgres',
'password' => '123',
'database' => 'sevima_hackathon',
'dbdriver' => 'postgre',
```

---

## 📌 Catatan
- Jika menggunakan MySQL, ubah `DBDriver` menjadi `MySQLi`
- Jika menggunakan PostgreSQL, ubah `DBDriver` menjadi `Postgre`

---

## 👨‍💻 Author
- [Nama](https://github.com/yohan20-coder)

---

## 📝 Lisensi
MIT License
