
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:10px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-il6h{background-color:#bbdaff;color:#000000;vertical-align:top;text-align:center;}
.tg .tg-c57o{background-color:#ecf4ff;vertical-align:top;text-align:center;}
.tg .tg-yw4l{vertical-align:top; text-align:center;}
</style>
<page backtop="15mm" backbottom="5mm" backleft="5mm" backright="120mm">
<div class="text" style="text-align:center; width:1044px;"><span style="text-align:center">JABATAN PENGAIRAN DAN SALIRAN</span></div>
<div class="text" style="text-align:center; width:1044px;"><span style="text-align:center">KUALA MUDA / SIK / BALING</span></div>
<div class="text" style="text-align:center; width:1044px;"><span style="text-align:center">MAKLUMAT SYARIKAT MENGIKUT DAERAH</span></div>
<br>
<br>

<table class="tg">
  <tr>
    <th width="20" class="tg-il6h">Bil</th>
    <th width="121" class="tg-il6h">Nama Syarikat<br></th>
    <th width="146" class="tg-il6h">No Sijil Pendaftaran<br></th>
    <th width="129" class="tg-il6h">Tarikh Sijil Tamat<br></th>
    <th width="60" class="tg-il6h">Prestasi Kontraktor<br></th>
    <th width="117" class="tg-il6h">Daerah</th>
    <th width="61" class="tg-il6h">No Tel<br></th>
    <th width="60" class="tg-il6h">No Telefon Pejabat<br></th>
  </tr>
  <tr>
    <td class="tg-c57o">#</td>
    <td class="tg-c57o">Nama Pengurus</td>
    <td class="tg-c57o">No Kad Pengenalan<br></td>
    <td class="tg-c57o">Nama Bank<br></td>
    <td class="tg-c57o"></td>
    <td class="tg-c57o">Status<br></td>
    <td class="tg-c57o"></td>
    <td class="tg-c57o">No Faksimili<br></td>
  </tr>
  <?php $bil=0;?>
  <?php foreach ($kdetail as $row): $bil++?>
  <tr>

    <td class="tg-yw4l" rowspan="2"><?php echo $bil ?></td>
    <td class="tg-yw4l"><?php echo $row->konName ?></td>
    <td class="tg-yw4l" style="text-align:center;"><?php echo $row->sijilNoPendaftaran ?></td>
    <td class="tg-yw4l"><?php echo $row->sijilJPSTamat ?></td>
    <td class="tg-yw4l"><?php echo $row->konPrestasi ?></td>
    <td class="tg-yw4l"><?php echo $row->konDaerah ?></td>
    <td class="tg-yw4l"><?php echo $row->NoTelPengurus ?></td>
    <td class="tg-yw4l"><?php echo $row->konTel ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l" style="border-left:none;"><?php echo $row->konPengurus ?></td>
    <td class="tg-yw4l" style="text-align:center;"><?php echo $row->NoKPpengurus ?></td>
    <td class="tg-yw4l"><?php echo $row->konBank ?></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"><?php

									@session_start();
									$RegDate = date($row->sijilJPSSah);
									$endRegDate = date($row->sijilJPSTamat);
									//$endofSijil = date("Y-m-d", strtotime(date("Y-m-d", strtotime($RegDate))." + 1 day"));
									?>


                                    	<?php if (date("Y-m-d") < $endRegDate) { ?>
                                    	<span style="color:#FFF; background-color:#096; font-weight:bold; padding:5px;">Berdaftar</span>
                                        <?php } else{?>
                                    	<span style="color:#FFF; background-color:#F03; font-weight:bold; padding:5px;">Tidak Berdaftar</span>
                                        <?php } ?>
</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"><?php echo $row->koFax ?></td>

  </tr>
      
  <?php endforeach; ?>
</table>
</page>

