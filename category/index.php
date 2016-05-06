<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Funny Stories Admin panel</title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
</head>
<body>
	<h2>Funny Stories Admin panel</h2>
	<p>Update data for Funny Stories App</p>
	
	<ul>
		<li><a href="../category">Categories</a></li>
		<li><a href="../story">Stories</a></li>
	</ul>
	<table id="dg" title="My Categories" class="easyui-datagrid" style="width:100%;"
			url="get_categories.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="id" width="20">ID</th>
				<th field="title" width="50">Title</th>
				<th field="thumb" width="80">Thumb</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newCategory()">New Category</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editCategory()">Edit Category</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyCategory()">Remove Category</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:700px;height:600px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Story Information</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Title:</label>
				<input name="title" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Thumb:</label>
				<input name="thumb" class="easyui-textbox" required="true" style="width:100%;height:300px">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveCategory()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<script type="text/javascript">
		var url;
		function newCategory(){
			$('#dlg').dialog('open').dialog('setTitle','New Category');
			$('#fm').form('clear');
			url = 'save_category.php';
		}
		function editCategory(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit Category');
				$('#fm').form('load',row);
				url = 'update_category.php?id='+row.id;
			}
		}
		function saveCategory(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the Category data
					}
				}
			});
		}
		function destroyCategory(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to destroy this Category?',function(r){
					if (r){
						$.post('destroy_category.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the Category data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width: 550px;
		}
	</style>
</body>
</html>