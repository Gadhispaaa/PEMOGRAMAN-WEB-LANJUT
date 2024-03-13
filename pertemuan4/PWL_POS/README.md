# JOBSHEET 04 - MODEL ELOQUENT ORM

### Praktikum 1 - $fillable:
1. Hasil langkah 1-2
<img width="278" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/cab9f9a3-eb09-4e1d-b718-150e299a6602">

2. Hasil Langkah 4-5
- Terjadi kesalahan karena field password tidak dimasukkan dalam array fillable. Oleh karena itu, saat melakukan pembuatan data menggunakan model, field password dianggap tidak ada.
<img width="446" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/d86eef4f-571e-406b-9d91-a73e87ea5698">

### Praktikum 2.1
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

### Praktikum 2.2
1. Hasil langkah 1
- perintah untuk mencari use dengan id 1
<img width="318" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/42bbd5cd-675f-47fb-a0a5-e0ec5d5b7ea0">

2. Hasil langkah 3
- karena tidak ditemukannya pengguna dengan username 'manager9', sehingga browser mengembalikan halaman 'NOT FOUND'.
<img width="921" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/0e62a61a-e3cf-443a-b757-408e01cd798a">

### Praktikum 2.3
1. Hasil langkah 1
- browser mengembalikan banyak pengguna yang memiliki level_id 2
<img width="418" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/4140cdc3-5a3f-4db0-81ab-79690cf963e6">

2. Hasil langkah 3
<img width="219" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/5a244cdb-cbe9-41e9-818c-787a5db1589e">

### Praktikum 2.4
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

### Praktikum 2.5
1. Hasil langkah 1
- Program mengembalikan nilai false karena model sudah disimpan. Namun, ketika dicek menggunakan isDirty() untuk mengecek apakah data telah diubah, program mengembalikan nilai karena memang belum ada perubahan yang dilakukan.
<img width="299" alt="image" src="https://github.com/Gadhispaaa/PEMOGRAMAN-WEB-LANJUT/assets/91443563/6820923c-0514-47e6-9394-9bb1b7a3b00c">













