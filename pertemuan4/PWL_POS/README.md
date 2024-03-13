# JOBSHEET 04 - MODEL ELOQUENT ORM
Nama : Gadhis Pramestya Arifin
Mata Kuliah : Pemrograman Web Lanjut (PWL)
Program Studi : D4 – Sistem Informasi Bisnis
Kelas    : SIB-3C

### Praktikum 1 - $fillable:
1. Hasil langkah 1-2
<img width="278" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/cab9f9a3-eb09-4e1d-b718-150e299a6602">

2. Hasil Langkah 4-5
- Terjadi kesalahan karena field password tidak dimasukkan dalam array fillable. Oleh karena itu, saat melakukan pembuatan data menggunakan model, field password dianggap tidak ada.
<img width="446" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/d86eef4f-571e-406b-9d91-a73e87ea5698">

### Praktikum 2.1 - Retrieving Single Models 
1. Hasil langkah 1-2
- user dengan id 1 ditampilkan
<img width="267" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/34ecaf00-c21f-4e78-896c-529ff2daeebc">

3. Hasil langkah 4
<img width="267" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/34ecaf00-c21f-4e78-896c-529ff2daeebc">

4. Hasil langkah 6
<img width="267" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/34ecaf00-c21f-4e78-896c-529ff2daeebc">

5. Hasil langkah 8
- menampilkan pengguna dengan ID 1, tetapi hanya mengambil kolom username dan nama dari data pengguna tersebut.
<img width="265" alt="Screenshot 2024-03-12 231211" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/96b978a0-6df7-47f9-b0cd-a9516ff81e33">

7. Hasil Langkah 10
- terjadi eror karena tidak ditemukan id user 20 maka akan muncul seperti dibawah
<img width="468" alt="Screenshot 2024-03-12 231311" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/6b8bc43f-6707-4f37-9b90-89f7429f54a8">

### Praktikum 2.2 - Not Found Exceptions 
1. Hasil langkah 1
- perintah untuk mencari use dengan id 1
<img width="318" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/42bbd5cd-675f-47fb-a0a5-e0ec5d5b7ea0">

2. Hasil langkah 3
- karena tidak ditemukannya pengguna dengan username 'manager9', sehingga browser mengembalikan halaman 'NOT FOUND'.
<img width="921" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/0e62a61a-e3cf-443a-b757-408e01cd798a">

### Praktikum 2.3 - Retreiving Aggregrates 
1. Hasil langkah 1
- browser mengembalikan banyak pengguna yang memiliki level_id 2
<img width="418" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/4140cdc3-5a3f-4db0-81ab-79690cf963e6">

2. Hasil langkah 3
<img width="219" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/5a244cdb-cbe9-41e9-818c-787a5db1589e">

### Praktikum 2.4 - Retreiving or Creating Models 
1. Hasil langkah 1-2
<img width="246" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/126359ba-7ec8-4662-ba82-15112f8d64c8">

2. Hasil langkah 4
- menambahkan data sesuai Langkah yang sebelumnya
<img width="298" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/7d062844-72a2-4c5e-93f8-12b8667dea9a">
<img width="698" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/e1edb389-3538-4169-b5f6-868f7489488c">

3. Hasil langkah 6
- program tidak menambahkan data karena username dan nama diatas sudah ada di database
<img width="239" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/f7c6a747-e461-499e-af8e-0a0f686fdba3">

4. Hasil Langkah 8
-program membuat satu record data dengan data seperti diatas tetapi tidak di simpan pada db karena di database tidak ada data seperti itu.
<img width="306" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/c6a64105-8f99-4fce-8bc4-f0cb7cbb6e03">

5. Hasil langkah 10
- data disimpan pada database karena data diatas belum ada di database hal ini ditandai dengan adanya id baru.
<img width="284" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/e3ddd62b-1b33-4b76-95cc-b5b66988955e">
<img width="697" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/42d63fb8-9470-4f98-86ba-46d5e13379e7">

### Praktikum 2.5 - Attribute Changes 
1. Hasil langkah 1
- Program mengembalikan nilai false karena model sudah disimpan. Namun, ketika dicek menggunakan isDirty() untuk mengecek apakah data telah diubah, program mengembalikan nilai karena memang belum ada perubahan yang dilakukan.
<img width="299" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/6820923c-0514-47e6-9394-9bb1b7a3b00c">

2. Hasil langkah 3
- Program mengembalikan nilai true karena model telah diubah. Jika menggunakan helper wasChanged(), meskipun sudah disimpan dengan save(), jika data memang berbeda dengan yang aslinya, maka akan terdeteksi sebagai perubahan.
<img width="420" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/8cd2596f-fa16-4ca3-a2e4-05f86e55fb9b">

### Praktikum 2.6 - Create, Read, Update, Delete (CRUD) 
1. Hasil langkah 1-2
- browser mengembalikan view dengan data sesuai perintah.
<img width="356" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/ef80ec82-e2d3-4a9d-92e4-194ece856292">

2. Hasil langkah 4-6
<img width="276" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/1a0c6d17-b3f5-4e4c-b1e8-a8c17dd2205c">

3. Hasil langkah 8-9
- terjadi input baru di simpan pada database seperti pada gambar.
<img width="358" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/931bb8de-bad5-43a2-b509-5f5e2674b84a">
<img width="371" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/c69849ce-9671-415b-a02e-ad7946c24b04">

4. Hasil langkah 11-13
- menampilkan halaman edit data yang berisi data yang dipilih sebelumnya
<img width="378" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/39cdf080-fa3e-4720-881a-41c564a476a4">

5. Hasil langkah 15-16
- data yang di ubah datanya perubahanya disimpan pada database.
<img width="376" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/f6e57f3c-677a-42bf-823f-3e26cbc06f93">
<img width="359" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/77f43526-da19-479e-8ac4-1b30d3f8d924">

6. Hasil langkah 18-19
- data terhapus dari database.
<img width="370" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/66c99c15-e86d-449b-9c4b-cc6e3d649522">

### Praktikum 2.7 - Relationships 
1. Hasil langkah 1-2
- ditampilkan data user dan data relasinya.
<img width="508" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/d16617b4-651d-4eb6-9ddc-1a2c1ad41be6">

3. Hasil langkah 4-5
- ata relasi level ditampilkan di halaman user
<img width="511" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/c0c6c10c-dcff-4ede-87d6-e2a032935f27">

























