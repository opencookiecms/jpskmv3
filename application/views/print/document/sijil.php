<?php

@session_start();
$RegDate = date($kdetail[0]->sijilJPSSah);
$endRegDate = date($kdetail[0]->sijilJPSTamat);
?>

<style>
.imgalig
{
	alignment-adjust:middle;
}

.img {

    width: 350px;
	height:145px;
	
	top:60px;

	margin-left:250px;
	background-image:url(<?php echo base_url() ?>/assets/logo/sijil.png);
	background-repeat:no-repeat;
	background-size:150px;
}
.cop {

    width: 380px;
	height:145px;


	margin-left:180px;

	position:relative;
	left:80px;
	top:65px;
}
.sijil{

	margin-left:200px;
	size:150px;
	word-wrap:normal;
	font-size:18px;
	font-weight:bold;

}

.line1{

	margin-left:100px;
	size:150px;
	padding-bottom:5px;

}
.line2{

	margin-left:100px;
	size:150px;
	padding:0px;

}
.line3{

	margin-left:38px;
	size:150px;
	padding:0px;

}

.kon{

	margin-left:260px;
	size:350px;
	font-size:16px;

}

.text{
	size:150px;
}

.profileimage{
	position:relative;
	left:580px;
	top:-740px;
}

.tajuk
{
	margin-left:38px;

}

.signnama
{
	font-weight:bold;
}
.signjabatan
{
	position:relative;
	left:0px;
}
.signdaerah
{
	position:relative;
	left:-9px;
}




</style>
<page backtop="15mm" backbottom="5mm" backleft="5mm" backright="120mm">
<div class="img"></div>
<div class="line1">________________________________________________________________</div>
<div class="sijil"><span class="text">SIJIL&nbsp;PERAKUAN&nbsp;PENDAFTRAN</span></div>
<div class="kon">&nbsp;&nbsp;&nbsp;KONTRAKTOR</div>
<div class="line2">________________________________________________________________</div>
<div style="margin-left: 100px; text-align: center;">
<br />

<table width="439" border="0">
  <tr>
    <td width="429"><span style="font-weight:bold; font-size:16px;"><?php echo $kdetail[0]->konName ?></span><br /><?php echo $kdetail[0]->KonAlamat ?><br /><?php echo $kdetail[0]->konAlamatExtS ?><br /><?php echo $kdetail[0]->konAlamatExtD ?></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    </tr>
     <tr>
    <td>&nbsp;No Sijil Pendaftaran:&nbsp;&nbsp;<?php echo $kdetail[0]->spNoSijil ?></td>
    </tr>
</table>
</div>
<div style="margin-left: 5px; text-align: center;">
<br />
<table width="700" border="0">
  <tr>
    <td width="350">Nama Pengurus:&nbsp;<?php echo $kdetail[0]->konPengurus ?></td>
    <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Kad Pengenalan:&nbsp;&nbsp;<?php echo $kdetail[0]->NoKPpengurus ?></td>
  </tr>
</table>
</div>
<br /><br /><br /><br />
<div class="line3">_________________________________________________________________________________________</div>
<br />
<div style="margin-left: 38px;">
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL PERAKUAN PENDAFTRAN KONTRAKTOR</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $kdetail[0]->sijilNoPendaftaran ?></td>
    <td width="420">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah: <?php echo $kdetail[0]->spDateKeluar ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga :<?php echo $kdetail[0]->spDateTamat ?> </td>
  </tr>
</table>

</div>


<div style="margin-left: 38px;">
<br />
<br />
<table width="999" border="0">
  <tr>
    <td width="47">Gred:</td>
    <td width="60"><?php echo $kdetail[0]->sijilPPKGredOne ?></td>
    <td width="73">Kategori:</td>
    <td width="60"><?php echo $kdetail[0]->sijilPPKCatOne ?></td>
    <td width="114">Pengkhususan:</td>
    <td width="240"><?php echo $kdetail[0]->sijilPPKKhuOne ?></td>
  </tr>
  <tr>
    <td>Gred:</td>
    <td><?php echo $kdetail[0]->sijilPPKGredTwo ?></td>
    <td>Kategori:</td>
    <td><?php echo $kdetail[0]->sijilPPKCatTwo ?></td>
    <td>Pengkhususan:</td>
    <td><?php echo $kdetail[0]->sijilPPKKhuTwo ?></td>
  </tr>
    <tr>
    <td>Gred:</td>
    <td><?php echo $kdetail[0]->sijilPPKGredThree ?></td>
    <td>Kategori:</td>
    <td><?php echo $kdetail[0]->sijilPPKCatThree ?></td>
    <td>Pengkhususan:</td>
    <td><?php echo $kdetail[0]->sijilPPKKhuThree ?></td>
  </tr>
</table>

</div>
<br />
<div style="margin-left: 38px;">
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL PEROLEHAN KERJA KERAJAAN</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $kdetail[0]->sijilSPKKNo ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $kdetail[0]->sijilSPKKsah ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga:<?php echo $kdetail[0]->sijilSPKKTamat ?></td>
  </tr>
</table>

</div>
<div style="margin-left: 38px;">
<br />
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL TARAF BUMIPUTRA</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $kdetail[0]->sijiSTBNo ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $kdetail[0]->sijilSTBSah ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga:<?php echo $kdetail[0]->sijilSTBTamat ?></td>
  </tr>
</table>

</div>
<br />
<div class="line3">_________________________________________________________________________________________</div>
<div style="margin-left: 38px;">
<br />

<table width="1000" border="0">
<tr>
    <td>Tarikh Sijil Dikeluarkan</td>
    <td width="100">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $kdetail[0]->sijilJPSSah ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $kdetail[0]->sijilJPSSah ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hingga:<?php echo $kdetail[0]->sijilJPSTamat ?></td>
  </tr>
</table>

</div>
<br />

<div class="tajuk"><span style="font-weight:bold;">STATUS&nbsp;SIJIL:</span>&nbsp;	<?php if (date("Y-m-d") < $endRegDate) { ?>
                                    	<span style="font-weight:bold;">AKTIF</span>
                                        <?php } else{?>
                                    	<span style="font-weight:bold;">TIDAK AKTIF</span>
                                        <?php } ?></div>
<div class="cop">
<span class="signnama">&nbsp;&nbsp;<?php echo $sijilsah[0]->nama ?></span><br />
<span class="signjawatan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sijilsah[0]->jawatan ?></span><br />
<span class="signjabatan"><?php echo $sijilsah[0]->jabatan ?></span><br />
<span class="signdaerah"><?php echo $sijilsah[0]->daerah ?></span>
</div>
<div class="profileimage"><img src="<?php echo base_url() ?>assets/userimage/<?php echo $kdetail[0]->konImage ?>" width="50" height="80" /></div>
</page>

