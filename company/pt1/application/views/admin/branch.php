<legend>KANTOR CABANG</legend>
	<div class="thumbnail box-gradient">
		<form id="frmNew" method="POST">
			<table width="100%" class='table2'>
				<tr>	
					<td>Kode</td><td><?=form_input('branch_code')?></td>
					<td>Nama</td><td colspan='4'><?=form_input('branch_name')?></td>
					<td><?=link_button("Tambah","add_branch()","save")?></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="thumbnail" >
			<table class="table2" width="100%">
				<thead><tr><th>Kode</th><th>Nama Cabang</th>
					<th>Action</th></tr></thead>
				<tbody>
					<?     			
					$CI =& get_instance();
					
					$sql="select * from branch";
					$rst_item=$CI->db->query($sql);
					foreach($rst_item->result() as $row_item){
						echo "
						<tr><td>".$row_item->branch_code."</td>
						<td>".$row_item->branch_name."</td>
						<td>".link_button('Hapus',"del_branch('".$row_item->branch_code."')","remove")."</td></tr>
						";
					}
					?>
					<tr></tr>
				</tbody>
			</table>
	</div>

<script language="JavaScript">
	function add_branch(){
		url='<?=base_url()?>index.php/company/branch_add';
			$('#frmNew').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
			            window.open(CI_ROOT+'company/branch','_self');
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
 	}
 	function del_branch(kode){
        xurl=CI_ROOT+'company/branch_delete/'+kode;                             
        $.ajax({
            type: "GET",
            url: xurl,
            success: function(msg){
	            window.open(CI_ROOT+'company/branch','_self');
            },
            error: function(msg){$.messager.alert('Info',msg);}
        });         
 	}
	
</script>