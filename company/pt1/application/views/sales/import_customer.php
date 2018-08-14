<legend>Import Data Master Customer</legend>
<p>Isi seting kolom dibawah ini sesuai dengan kolom di excel, 
sesuaikan kolomnya dengan file TXT yang dipilih.</p>
<p>File TXT yang diinput dari XLS harap di SAVE AS tab delimited</p>
<p>Periksa inputan jangan ada tanda koma atau kutip dua</p>
<p>Tekan tombol <strong>Choose File</strong> untuk memilih file TXT kemudian tekan tombol 
<strong>Submit</strong> untuk mulai di proses</p>
<p>Contoh file template file TXT silahkan download disini 
 <?=anchor(base_url()."import/master_customer.rar","master_customer.rar")?> </p>
<div style='color:red'><?=validation_errors()?></div>

<?php 
	echo form_open_multipart(base_url()."index.php/customer/import_customer","id='frmImport'");
?>
<table class='table' width='100%'>
<tr><td colspan='4'><h4>SETING KOLOM</h4></td></tr>
<tr><td>Kode Pelanggan</td><td><?=form_input('kode',"A"," style='width:50px'")?></td>
	<td>Nama Pelanggan</td><td><input type='text' name='nama' id='nama' value='B' style="width:50px"></td></tr>
<tr><td>Alamat 1</td><td><input type='text' name='alamat1' value='C' style="width:50px"></td>
	<td>Alamat 2</td><td><input type='text' name='alamat2' value='D' style="width:50px"></td></tr>
<tr><td>Kota</td><td><input type='text' name='kota' value='E' style="width:50px"></td>
	<td>Wilayah</td><td><?=form_input('wilayah',"F"," style='width:50px' ")?></td></tr>
<tr><td>Provinsi</td><td><input type='text' name='provinsi' value='N' style="width:50px"></td>
	<td>Negara</td><td><?=form_input('negara',"G"," style='width:50px' ")?></td></tr>
<tr><td>Telpon</td><td><input type='text' name='telpon' value='H' style="width:50px"></td>
	<td>Fax</td><td><?=form_input('fax',"I"," style='width:50px' ")?></td></tr>
<tr><td>Handphone</td><td><input type='text' name='hp' value='J' style="width:50px"></td>
	<td>Kode Salesman</td><td><input type='text' name='salesman' value='K' style="width:50px"></td>
	</tr>
<tr><td>Kode Kelompok</td><td><input type='text' name='kelompok' value='L' style="width:50px"></td>
	<td>Kontrak Person</td><td><input type='text' name='kontak' value='N' style="width:50px"></td>
	</tr>
<tr><td>Email</td><td><input type='text' name='email' value='O' style="width:50px"></td>
	</tr>
	
<tr><td colspan=3><input type="file" name="file_excel" id="file_excel"/></td>
<td><input type='submit' value='Submit' name='submit' class='btn btn-primary'></td></tr>
</table>
