<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <h1 class="text-center font-weight-light text-success mt-3 ">Data Anda Telah Terkonfirmasi</h1>
        <div class="profil d-flex justify-content-center p-md-3">
            <h2 class="h3 text-center mb-2 d-flex align-items-center">Profile Calon Mahasiswa Baru</h2>
            <table class="ml-2 mb-2 table-primary" border="1">
                <thead>
                    <th colspan="2" class="text-center">DATA CALON MAHASISWA</th>
                </thead>
                <tbody>
                    <tr class="">
                        <td>Jalur Penerimaan</td>
                        <td> <?= $_GET['jal_pen'] ?> </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> <?= $_GET['nm_mhs'] ?> </td>
                    </tr>
                    <tr>
                        <td>Tempat & Tanggal Lahir</td>
                        <td> <?= $_GET['ttl'] ?> </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td> <?= $_GET['nik'] ?> </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> <?= $_GET['jk'] ?> </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td> <?= $_GET['agama'] ?> </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> <?= $_GET['status'] ?> </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> <?= $_GET['alamat'] ?> </td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td> <?= $_GET['kd_pos'] ?> </td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td> <?= $_GET['no_hp'] ?> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <?= $_GET['email'] ?> </td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td> <?= $_GET['prodi'] ?> </td>
                    </tr>
                    <tr>
                        <td>Kuliah dibiayai oleh</td>
                        <td> <?= $_GET['biaya_kuliah'] ?> </td>
                    </tr>
                </tbody>
            </table>

            <table border="1" class="ml-2 mb-2 table-success">
                <thead>
                    <th colspan="2" class="text-center">DATA SEKOLAH ASAL CALON MAHASISWA</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td> <?= $_GET['asal_sekolah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Kota Sekolah</td>
                        <td> <?= $_GET['kt_sekolah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Provinsi Sekolah</td>
                        <td> <?= $_GET['prov_sekolah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Jurusan Sekolah</td>
                        <td> <?= $_GET['jur_sekolah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Tahun Lulus</td>
                        <td> <?= $_GET['thn_lulus'] ?> </td>
                    </tr>
                </tbody>
            </table>

            <table border="1" class="ml-2 mb-2 table-info">
                <thead>
                    <th colspan="2" class="text-center">DATA ORANG TUA CALON MAHASISWA</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Nama Ayah</td>
                        <td> <?= $_GET['nm_ayah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td> <?= $_GET['nm_ibu'] ?> </td>
                    </tr>
                    <tr>
                        <td>Alamat Orang Tua</td>
                        <td> <?= $_GET['alamat2'] ?> </td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td> <?= $_GET['kd_post2'] ?> </td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td> <?= $_GET['no_hp2'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ayah</td>
                        <td> <?= $_GET['fatherlasteducation'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir Ibu</td>
                        <td> <?= $_GET['motherlasteducation'] ?> </td>
                    </tr>
                    <tr>
                        <td>Status Ayah</td>
                        <td> <?= $_GET['sts_ayah'] ?> </td>
                    </tr>
                    <tr>
                        <td>Status Ibu</td>
                        <td> <?= $_GET['sts_ibu'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td> <?= $_GET['fatherworker'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td> <?= $_GET['motherworker'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pendapatan Ayah</td>
                        <td> <?= $_GET['fatherincome'] ?> </td>
                    </tr>
                    <tr>
                        <td>Pendapatan Ibu</td>
                        <td> <?= $_GET['motherincome'] ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-right mr-3 font-weight-light">Informasi UPJ diperoleh dari : <?= $_GET['informasi'] ?></p>

    </div>
</body>

</html>