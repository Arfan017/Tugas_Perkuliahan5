<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="konfirmasipmb.php" method="GET">
            <h2 class="h2 text-center">Pendaftaran Mahasiswa Baru</h4>
                <label class="h6" for="jal_pen">Jalur Penerimaan Mahasiswa Baru *</label>
                <select class="form-control mb-3" name="jal_pen" id="jal_pen">
                    <option value=""> ---Reguler--- </option>
                    <option value="TA 2020/2023 Rata-rata Raport">TA 2020/2023 Rata-rata Raport</option>
                    <option value="TA 2020/2023 Peringkat Kelas">TA 2020/2023 Peringkat Kelas</option>
                    <option value="TA 2020/2023 Ujian Saringan Masuk (USM)">TA 2020/2023 Ujian Saringan Masuk (USM)</option>
                    <option value=""> ---Beasiswa Prestasi Jaya--- </option>
                    <option value="TA 2020/2023 Akademik">TA 2020/2023 Akademik</option>
                    <option value="TA 2020/2023 Olahraga">TA 2020/2023 Olahraga </option>
                    <option value="TA 2020/2023 Seni Dan Budaya">TA 2020/2023 Seni Dan Budaya </option>
                    <option value="TA 2020/2023 Sains">TA 2020/2023 Sains </option>
                    <option value=""> ---Beasiswa UPJ untuk negara--- </option>
                    <option value="TA 2020/2023 ASAS">TA 2020/2023 ASAS </option>
                    <option value="TA 2020/2023 OSIS/PMK">TA 2020/2023 OSIS/PMK</option>
                    <option value=""> ---Beasiswa Desain Produk--- </option>
                    <option value="TA 2020/2023 Desain Produk">TA 2020/2023 Desain Produk</option>
                </select>
                <div class="form-group">
                    <label class="h6" for="nm_mhs">Nama Calon Mahasiswa (Sesuai Akte Kelahiran) *</label>
                    <input type="text" class="form-control" name="nm_mhs" id="nm_mhs" placeholder="Silahkan masukkan nama lengkap">
                </div>
                <div class="row">
                    <div class="col">
                        <label class="h6" for="ttl">Tempat & Tanggal Lahir *</label>
                        <input class="form-control" type="date" id="ttl" name="ttl" placeholder="Silahkan masukkan tempat, tanggal/bulan/tahun lahir">
                    </div>
                    <div class="col">
                        <label class="h6" for="nik">NIK (Nomor Induk Kependudukan KTP / KK) *</label>
                        <input class="form-control" type="text" id="nik" name="nik" placeholder="Silahkan masukkan Nomor Induk Kelahiran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="h6 mt-3" for="jk">Jenis Kelamin *</label>
                        <select class="form-control" name="jk" id="jk">
                            <option value="">--Pilih---</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="h6 mt-3" for="agama">Agama *</label>
                        <select class="form-control" name="agama" id="agama">
                            <option value="">---pilih---</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="h6 mt-3" for="status">Status *</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">--Pilih---</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="h6" for="alamat">Alamat *</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat..."></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label class="h6" for="kd_pos">Kode pos *</label>
                            <input class="form-control" type="text" name="kd_pos" id="kd_pos" placeholder="Silahkan masukkan kode pos">
                        </div>
                        <div class="col">
                            <label class="h6" for="no_hp">No Handphone *</label>
                            <input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="Silahkan maukkan No Handphone">
                        </div>
                        <div class="col">
                            <label class="h6" for="email">Email *</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Silahkan maukkan Email">
                        </div>
                    </div>
                </div>
                <h2 class="h3 text-center mt-5">DATA SEKOLAH ASAL CALON MAHASISWA</h2>
                <br>
                <div class="row mb-3">
                    <div class="col">
                        <label class="h6" for="asal_sekolah">Asal Sekolah (SMA/SMK/MA) *</label>
                        <input class="form-control" type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Silahkan masukkan asal Sekolah">
                    </div>
                    <div class="col">
                        <label class="h6" for="kt_sekolah">Kota Sekolah *</label>
                        <input class="form-control" type="text" name="kt_sekolah" id="kt_sekolah" placeholder="Silahkan masukkan kota asal Sekolah">
                    </div>
                    <div class="col">
                        <label class="h6" for="prov_sekolah">Provinsi Sekolah *</label>
                        <select required="" class="form-control" name="prov_sekolah" id="prov_sekolah">
                            <option value="">--- Pilih ---</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Bali">Bali</option>
                            <option value="Banten">Banten</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Jakarta Barat">Jakarta Barat</option>
                            <option value="Jakarta Pusat">Jakarta Pusat</option>
                            <option value="Jakarta Selatan">Jakarta Selatan</option>
                            <option value="Jakarta Timur">Jakarta Timur</option>
                            <option value="Jakarta Utara">Jakarta Utara</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Tangerang Selatan">Tangerang Selatan</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Luar Negri">Luar Negri</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="h6" for="jur_sekolah">Jurusan Sekolah *</label>
                        <input class="form-control" type="text" name="jur_sekolah" id="jur_sekolah" placeholder="Silahkan masukkan jurusan Sekolah">
                    </div>
                    <div class="col">
                        <label class="h6" for="thn_lulus">Tahun Lulus *</label>
                        <input class="form-control" type="text" name="thn_lulus" id="thn_lulus" placeholder="Silahkan masukkan tahun lulus">
                    </div>
                    <div class="col">
                        <label class="h6" for="biaya_kuliah">Biaya kuliah dibiayai oleh *</label>
                        <select class="form-control" name="biaya_kuliah" id="biaya_kuliah">
                            <option value="">--Pilih--</option>
                            <option value="Beasiswa">Beasiswa</option>
                            <option value="Ikatan Dinas">Ikatan Dinas</option>
                            <option value="OrangTua">OrangTua</option>
                            <option value="Wali">Wali</option>
                            <option value="Sendiri">Sendiri</option>
                            <option value="lain-lain">lain-lain</option>
                        </select>
                    </div>
                </div>
                <h2 class="h3 text-center mt-5">DATA ORANG TUA CALON MAHASISWA</h2>
                <div class="form-group">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="nm_ayah">Nama Ayah *</label>
                            <input class="form-control" type="text" name="nm_ayah" id="nm_ayah" placeholder="Silahkan masukkan Nama Ayah...">
                        </div>
                        <div class="col">
                            <label class="h6" for="">Nama Ibu *</label>
                            <input class="form-control" type="text" name="nm_ibu" id="nm_ibu" placeholder="Silahkan masukkan Nama Ibu...">
                        </div>
                    </div>
                    <label class="h6" for="alamat2">Alamat *</label>
                    <textarea class="form-control" name="alamat2" id="alamat2" rows="3" placeholder="Alamat"></textarea>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="kd_post2">Kode Post</label>
                            <input class="form-control" type="text" name="kd_post2" id="kd_post2" placeholder="Silahkan masukkan kode pos...">
                        </div>
                        <div class="col">
                            <label class="h6" for="no_hp2">No Handphone</label>
                            <input class="form-control" type="text" name="no_hp2" id="no_hp2" placeholder="Silahkan masukkan No handphone...">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="fatherlasteducation">Pendidikan Terakhir Ayah *</label>
                            <select required="" class="form-control" name="fatherlasteducation" id="fatherlasteducation">
                                <option value="">--- Pilih ---</option>
                                <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
                                <option value="Tamat SD">B - Tamat SD</option>
                                <option value="Tamat SMP">C - Tamat SMP</option>
                                <option value="Tamat SMA">D - Tamat SMA</option>
                                <option value="Diploma (D1-D2)">E - Diploma ( D1 - D2 )</option>
                                <option value="Sarjana (D3)">F - Sarjana ( D3 )</option>
                                <option value="Sarjana (D4-S1)">G - Sarjana ( D4 - S1 )</option>
                                <option value="Pascasarjana (S2)">H - Pascasarjana ( S2 )</option>
                                <option value="Doktor (S3)">I - Doktor ( S3 )</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="h6" for="motherlasteducation">Pendidikan Terakhir Ibu *</label>
                            <select required="" class="form-control" name="motherlasteducation" id="motherlasteducation">
                                <option value="">--- Pilih ---</option>
                                <option value="Tidak Tamat SD">A - Tidak Tamat SD</option>
                                <option value="Tamat SD">B - Tamat SD</option>
                                <option value="Tamat SMP">C - Tamat SMP</option>
                                <option value="Tamat SMA">D - Tamat SMA</option>
                                <option value="Diploma (D1-D2)">E - Diploma ( D1 - D2 )</option>
                                <option value="Sarjana (D3)">F - Sarjana ( D3 )</option>
                                <option value="Sarjana (D4-S1) ">G - Sarjana ( D4 - S1 )</option>
                                <option value="Pascasarjana (S2)">H - Pascasarjana ( S2 )</option>
                                <option value="Doktor (S3)">I - Doktor ( S3 )</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="sts_ayah">Status Ayah *</label>
                            <select required="" class="form-control" name="sts_ayah" id="sts_ayah">
                                <option value="">--- Pilih ---</option>
                                <option value="Masih Hidup">Masih Hidup</option>
                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="h6" for="sts_ibu">Status Ibu *</label>
                            <select required="" class="form-control" name="sts_ibu" id="sts_ibu">
                                <option value="">--- Pilih ---</option>
                                <option value="Masih Hidup">Masih Hidup</option>
                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="fatherworker">Pekerjaan Ayah *</label>
                            <select required="" class="form-control" name="fatherworker" id="fatherworker">
                                <option value="">--- Pilih ---</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Pensiun">Pensiun</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="h6" for="motherworker">Pekerjaan Ibu *</label>
                            <select required="" class="form-control" name="motherworker" id="motherworker">
                                <option value="">--- Pilih ---</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Pensiun">Pensiun</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="fatherincome">Penghasilan Ayah *</label>
                            <select required="" class="form-control" name="fatherincome" id="fatherincome">
                                <option value="">--- Pilih ---</option>
                                <option value="< Rp 1.000.000">&lt; Rp 1.000.000</option>
                                <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                                <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                                <option value="> Rp 10.000.000">&gt; Rp 10.000.000</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="h6" for="motherincome">Penghasilan Ibu *</label>
                            <select required="" class="form-control" name="motherincome" id="motherincome">
                                <option value="">--- Pilih ---</option>
                                <option value="< Rp 1.000.000">&lt; Rp 1.000.000</option>
                                <option value="Rp 1.000.000 - Rp 5.000.000">Rp 1.000.000 - Rp 5.000.000</option>
                                <option value="Rp 5.000.000 - Rp 10.000.000">Rp 5.000.000 - Rp 10.000.000</option>
                                <option value="> Rp 10.000.000">&gt; Rp 10.000.000</option>
                                <option value="Pensiun">Pensiun</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h2 class="h3 text-center mt-5">PEMINATAN PROGRAM STUDI</h2>
                <div class="form-group">
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="h6" for="prodi">Pilihan Program Studi *</label>
                            <select required="" class="form-control" name="prodi" id="prodi">
                                <option value="">--- Pilih ---</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Psikologi">Psikologi</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Desain Produk">Desain Produk</option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Arsitektur">Arsitektur</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="h6" for="informasi">Informasi UPJ diperoleh dari : *</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Website">
                                <label for="informasi">Website</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Instagram">
                                <label for="informasi">Instagram</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Facebook">
                                <label for="informasi">Facebook</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Brosur dan Flyer UPJ">
                                <label for="informasi">Brosur dan Flyer UPJ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="WA Blast">
                                <label for="informasi">WA Blast</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Sekolah">
                                <label for="informasi">Sekolah</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Event Education Expo">
                                <label for="informasi">Event Education Expo</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Keluarga/Teman">
                                <label for="informasi">Keluarga/Teman</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="E-mail Blast">
                                <label for="informasi">E-mail Blast</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="informasi" id="informasi" value="Lainnya">
                                <label for="informasi">Lainnya</label>
                            </div>
                        </div>
                        <div class="col">
                            <p class="p-2 font-weight-light bg-warning text-white text-center border-left border-success rounded-right">Panstikan Anda mengisi forumulir dengan BAIK dan BENAR *</p>
                            <input class="btn btn-outline-success btn-lg btn-block item-center" type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>