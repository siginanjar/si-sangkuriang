<style>
table{
	border-collapse: collapse;	 
}
th{
	border:solid 1px;
	text-align: center;
}
td{
	border:solid 1px;
}
</style>
<p>
	Nama Kelas : <b><?php echo $kelas->nama_kelas;?></b>
</p>
<p><?php echo CHtml::link("Create Absensi",array("create","id"=>$DaftarKelas->id_daftar_kelas));?></p>
<table>
	<tr>
		<th rowspan="2">Nama Peserta</th>
		<th rowspan="2">%</th>
		<th colspan="<?php echo $DaftarKelas->jumlah_pertemuan;?>" style="text-align: center">Absensi</th>
		
	</tr>
	<tr>
		
		<?php for($i=1;$i<=$DaftarKelas->jumlah_pertemuan;$i++){?>
		<th><?php echo $i;?></th>
		<?php }?>
	</tr>
	<?php foreach($data as $peserta):?>
	
	<tr>
		
		<td><?php echo $peserta->namapeserta;?></td><!--1.500:30.000×100 = 5%.-->
		<th>
			<?php 
				$criteria=new CDbCriteria(array(
						//order by
	  					'condition'=>'peserta_id= '.$peserta->id.' AND kelas_id= '.$peserta->kelas_id.' AND absensi="*"'		 
				));
				$persen=Dataabsensi::model()->findAll($criteria); 
			?>
			
			<?php 
				//foreach($persen as $persentase):
					echo floor((count($persen)/$kelas->jumlahpertemuan*100)).'%';
				//endforeach;
			?>
		</th>
		<?php
			$criteria=new CDbCriteria(array(
				//order by
	  			'condition'=>'peserta_id= '.$peserta->id.' AND kelas_id= '.$peserta->kelas_id.''		 
			)); 
			$absensi=Dataabsensi::model()->findAll($criteria);
			foreach($absensi as $absensi): 
			
			echo "<th style=\"border: none; border-right: solid 1px;\">".$absensi->absensi."</th>";
			
			endforeach;
		?>
		
	</tr>
	<?php endforeach;?>
	<tr>
		<th colspan="2">Keterangan</th>
		<td colspan="<?php echo $DaftarKelas->jumlah_pertemuan;?>">* = Hadir  <br>  ! = Tidak Hadir</td>
	</tr>
</table>