> Login Page using DB MYSQL
>nah tantangannya adalah coba kalian akses homepage kalian tanpa harus masuk login screen bisa apa ga?

nah kalau masih bisa barti validasi session belum berjalan, jadi tantangannya adalah 
- coba cek session apakah kosong kalau kosong berarti dia harus masuk ke halaman login terlebih dahulu (tidak bisa langsung akses ke homepage) jadi semua akses harus masuk ke login page terlebih dahulu
- setelah dia sukses login, apabila dia langsung akses homepage tanpa melalui login screen bisa, karena session sudah ada
- buat halaman logout, apabila klik button logout barti session destroy (kalian bisa cari dulu bagaimana cara men-destroy session di php)
- apabila sudah logout coba akses lagi halaman homepage kalian apakah bisa? nah seharusnya tidak bisa