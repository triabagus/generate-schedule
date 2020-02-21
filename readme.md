# Algoritma Genetika

* Pertama yang harus anda lakukan adalah mendownload atau men-clone ini
* Kemudian anda harus men-setting `.env` sesuaikan dengan nama database anda
* setelah itu buka console atau cmd anda dan pastikan lokasinya sesuai dengan folder project ini
* setelah itu anda ketik `composer install` 
	nb. pastikan telah install composer `https://getcomposer.org/download/`
* anda bisa langsung import .sql nya di `jadwal.sql`
* anda bisa `php artisan migrate` dan `php artisan db:seed` ini untuk memasukkan data dan table ke database

```bash
Email : admin@gmail.com
Password : admin
```

# Alur Kinerja

1. Input Data : management waktu, guru, pelajaran, kelas, kegiatan, waktu guru berhalangan.
2. Algoritma Generate Jadwal : 
	- Random management waktu dan kegiatan 
	- Data tidak akan ke save kalau di waktu berhalangan
	- Tidak ada data kegiatan (guru dan kelas dan pelajaran) di hari yang sama 
	- Apabila data kegiatan berdekatan dengan antara putra dan putri (kelas) maka harus ada jarak diantaranya.
3. MVP Random Data (BUG)
	- Kegiatan punya waktu yang sama
4. Penyelesaian Setelah MVP (BUG)
	- Durasi kegiatan 1,2 atau 3 jam
	- Kegiatan punya waktu yang telah ditentukan
	- Jam kosong untuk perubahan kelas (guru pindah kelas)
5. Istilah yang aneh :
	- Kromossom = (jadwal) banyaknya pertemuan suatu jadwal. Panjang kromossom dipengaruhi 				oleh panjang gen
	- Crossover = prosedur memasangkan dua buah jadwal untuk dipisahkan masing2 gen dan 					dipasangkan dengan gen pasangannya 
	- Mutasi 	= pengantian satu struktur gen didalam individu yang di bangkitkan secara 					random
	- Generasi  = (gen) tiap pertemuan untuk kromossom jadwal