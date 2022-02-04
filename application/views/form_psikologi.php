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
			font-size: 15px;
			font-family: arial;
		}
		table tr .text {
			text-align: center;
			font-size: 15px;
			font-family: arial;
		}
		table tr td {
			font-size: 15px;
			font-family: arial;
		}

	</style>
</head>
<!-- <body background="assets_admin/logot.png"> -->
<!-- <body style="background-image:url(assets_admin/logot.png)"> -->
<body>
  
	<center>
		<table>
			<tr>
				<td><img src="<?= base_url() ?>assets_admin/Bangkalan.png" width="150" height="90"></td>
				<td>
				<center>
					<font size="4"></font><br>
					<font size="4" face="Arial">PEMERINTAH KABUPATEN BANGKALAN</font><br>
					<font size="4" face="Arial">DINAS KESEHATAN</font><br>
					<font size="5" face="Arial"><b>UOBK RSUD SYARIFAH AMBAMI RATO EBU</b></font><br>
					<font size="2" face="Arial">Jl. Pemuda Kaffa No.9,Telp.(031) 3091111 Fax.(031) 3094108 kode pos 69112</font><br>
					<font size="2" face="Arial"><i>Website rsud.bangkalankab.go.id Email 1: eres.bangkalan@yahoo.co.id</i></font><br>
					<font size="2" face="Arial"><i>Email 2: rsudsyamrabu@bangkalankab.go.id</i></font><br>
					<font size="2" face="Arial">BANGKALAN</font>
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
              <font size="4" face="Arial"><u><b>SURAT KETERANGAN PEMERIKSAAN SEHAT JIWA</u></b></font><br>
              <font size="3" face="Arial">NOMOR : 445/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/433.102.1/II/2022</font> 
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
			    	<font size="3" face="Arial">Yang Bertanda Tangan di bawah ini, menerangkan bahwa<br></font>
            	</td>
		    </tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nama </td>
				<td width="541">&nbsp;&nbsp;: dr. indriana Lestariningtias, Sp.KJ</td>
			</tr>
			<tr>
				<td width="200">No SIP </td>
				<td width="525">&nbsp;&nbsp;: 503/076/433.114/SIPD/2021/DS</td>
			</tr>
			<tr>
				<td width="200">Jabatan</td>
				<td width="525">&nbsp;&nbsp;: Dokter Spesialis Kedokteran Jiwa</td>
			</tr>
			<tr class="text2">
				<td>Instansi </td>
				<td width="541">&nbsp;&nbsp;: UOBK RSUD Syarifah Ambami Rato Ebu Bangkalan</td>
			</tr>
		</table>
		<table width="625">
			<tr>
		       <td>
			    	<font size="3" face="Arial">Atas Permintaan tertulis dari : <?= $pasien['atas_permintaan_ps'] ?><br></font>
            	</td>
		    </tr>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nama </td>
				<td width="541">: <?= $pasien['nama_atas_permintaan_ps'] ?></td>
			</tr>
			<tr>
				<td width="200">Jabatan </td>
				<td width="525">: <?= $pasien['jabatan_atas_permintaan_ps'] ?></td>
			</tr>
			<tr>
				<td width="200">No Surat</td>
				<td width="525">: <?= $pasien['no_surat_atas_permintaan_ps'] ?></td>
			</tr>
			<tr class="text2">
				<td>Perihal Permintaan </td>
				<td width="541">: <?= $pasien['perihal_atas_permintaan_ps'] ?>
				</td>
			</tr>
		</table>

		<table width="625">
			<tr>
		       <td>
			    	<font size="3" face="Arial">Telah Melakukan Pemeriksaan psikiatri pada tanggal <?= $pasien['tgl_daftar_gcu'] ?> terhadap :<br></font>
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
			        <font size="3" face="Arial">Dengan hasil Pemeriksaan kesehatan jiwa pada saat ini :<br></font>
              <center>
                <br>
					<font size="3" face="Arial"> <b>Tidak / Ditemukan tanda/gejala Gangguan Jiwa yang bermakna yang dapat mengganggu aktivitas kehidupan sehari-hari</b></font><br>
              <center>
            	</td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			    	<font size="3" face="Arial">Demikian Surat Keterangan ini dibuat sebenarnya untuk <?= $pasien['keperluan_pasien_gcu'] ?></font>
            	</td>
		    </tr>
		</table>
		<br>
		</table>
		<table>
      <br>
	  	<table width="625">
			<tr>
				<td width="330"><br><br><br><br></td>
				<td class="text" align="center">Bangkalan, <?= $pasien['tgl_daftar_gcu'] ?><br>Pemeriksa<br><img src="<?= base_url() ?>assets_admin/ttd.png" width="250" height="150"><b><u>dr.Indriana Lestariningtias, Sp.KJ</u><br>NIP.197706212010012015</b></td>
				
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