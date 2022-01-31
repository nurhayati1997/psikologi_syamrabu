<!DOCTYPE html>
<html>
<head>
	<title>Surat Ketererangan Pemeriksaan Sehat Jiwa</title>
  <link rel="icon" href="<?= base_url() ?>assets_admin/logot.png" type="image/png">
	<style type="text/css">
    /* body{
      background-image: url(assets_admin/logot.png);
      background-size: cover;
      background-attachment: fixed;
    } */
    
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
      /* background-image:url(assets_admin/logot.png); */
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<!-- <body background="assets_admin/logot.png"> -->
<!-- <body style="background-image:url(assets_admin/logot.png)"> -->
<body>
  
	<center>
		<table>
			<tr>
				<td><img src="<?= base_url() ?>assets_admin/Bangkalan.png" width="90" height="90"></td>
				<td>
				<center>
					<font size="4"></font><br>
					<font size="4">PEMERINTAH KABUPATEN BANGKALAN</font><br>
					<font size="4">DINAS KESEHATAN</font><br>
					<font size="5"><b>UOBK RSUD SYARIFAH AMBAMI RATO EBU</b></font><br>
					<font size="2">Jl. Pemuda Kaffa No.9,Telp.(031) 3091111 Fax.(031) 3094108 kode pos 69112</font><br>
					<font size="2"><i>Website www.rsabangkalan.com Email 1: eres.bangkalan@yahoo.co.id</i></font><br>
					<font size="2"><i>Email 2: rsudsyamrabu@bangkalankab.go.id</i></font><br>
					<font size="2">BANGKALAN</font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
      <table width="625">
        <tr>
          <td>
            <center>
              <!-- <font size="2">SURAT KETERANGAN DOKTER</font> <br> -->
              <font size="3"><u><b>SURAT KETERANGAN PEMERIKSAAN SEHAT JIWA</u></b></font><br>
              <font size="2">NOMOR : 445/590/433.102.1/I/2022</font> 
            </center>
          </td>
        </tr>
      </table>
      <table width="625">
        <!-- <tr>
          <td class="text2">Jember, 16 mei 2019</td>
        </tr> -->
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>
      <table width="625">
        
      </table>

		</table>
		
		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Yang Bertanda Tangan di bawah ini, menerangkan bahwa<br></font>
            	</td>
		    </tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nama </td>
				<td width="541">: dr. indriana Lestariningtias, Sp.KJ</td>
			</tr>
			<tr>
				<td width="200">No SIP </td>
				<td width="525">: 503/076/433.114/SIPD/2021/DS</td>
			</tr>
			<tr>
				<td width="200">Jabatan</td>
				<td width="525">: Dokter Spesialis Kedokteran Jiwa</td>
			</tr>
			<tr class="text2">
				<td>Instansi </td>
				<td width="541">: UOBK RSUD Syarifah Ambami Rato Ebu Bangkalan</td>
			</tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Atas Permintaan tertulis dari Pemerintah Provinsi Jawa Timur Dinas Pendidikan Cabang di Pendidikan Wilayah Bangkalan (Kabupaten Bangkalan)<br></font>
            	</td>
		    </tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nama </td>
				<td width="541">: Dr. Mustakim, S.S, M.Si</td>
			</tr>
			<tr>
				<td width="200">Jabatan </td>
				<td width="525">: Kepala Cabang Dinas Pendidikan Wilayah Bangkalan</td>
			</tr>
			<tr>
				<td width="200">No Surat</td>
				<td width="525">: 800/10/101.6.21/2022</td>
			</tr>
			<tr class="text2">
				<td>Perihal Permintaan </td>
				<td width="541">: Permohonan Fasilitas Tes Kesehatan bagi CPNS Formasi Tahun 2022 <br>
					Lingkungan Cabang Dinas Pendidikan Wilayah Bangkalan
				</td>
			</tr>
		</table>

		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Telah Melakukan Pemeriksaan psikiatri pada tanggal <?= $pasien['tgl_daftar_gcu'] ?> terhadap :<br></font>
            	</td>
		    </tr>
		</table>

		<!-- db -->
		<table width="625">
			<tr class="text2">
				<td>Nama </td>
				<td width="541">: <?= $pasien['nama'] ?></td>
			</tr>
			<tr>
				<td width="200">Tempat Lahir / Tanggal Lahir</td>
				<td width="525">: <?= $pasien['tempat_lahir'] ?> , <?= $pasien['ttl_pasien_gcu'] ?></td>
			</tr>
			<tr class="text2">
				<td>Jenis Kelamin </td>
				<td width="541">: <?= $pasien['jk_pasien_gcu'] ?></td>
			</tr>
			<tr class="text2">
				<td>Pendidikan Terakhir </td>
				<td width="541">: <?= $pasien['pendidikan_pasien_gcu'] ?></td>
			</tr>
			<tr class="text2">
				<td>Alamat </td>
				<td width="541">: <?= $pasien['alamat_pasien_gcu'] ?></td>
			</tr>
			<tr class="text2">
				<td>Status Pernikahan </td>
				<td width="541">: <?= $pasien['pernikahan_pasien_gcu'] ?></td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			        <font size="2">Dengan hasil Pemeriksaan kesehatan jiwa pada saat ini :<br></font>
              <center>
                <br>
					<font size="2"> <b>Tidak ditemukan tanda/gejala Gangguan Jiwa yang bermakna yang dapat mengganggu aktivitas kehidupan sehari-hari</b></font><br>
              <center>
            	</td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			    	<font size="2">Demikian Surat Keterangan ini dibuat sebenarnya untuk Persyaratan Pengangkatan menjadi PNS Pemerintah Provinsi Jawa Timur</font>
            	</td>
		    </tr>
		</table>
		<br>
		</table>
		<table>
      <br>
      <br>
      <br>
      <br>
	  	<table width="625">
			<tr>
				<td width="330"><br><br><br><br></td>
				<td class="text" align="center">Bangkalan, <?= $pasien['tgl_daftar_gcu'] ?><br>Pemeriksa<br><br><br><br><br><b><u>dr.Indriana Lestariningtias, Sp.KJ</u><br>NIP.19770621201001201</b></td>
			</tr>
	     </table>
		<br>
		<table width="625">
			<tr>
		       <td>
		       </td>
		    </tr>
		</table>
		<br>
		
	</center>
</body>
</html>