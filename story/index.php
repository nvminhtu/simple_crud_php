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
	
	<table id="tt"></table>

	<ul>
		<li><a href="../category">Categories</a></li>
		<li><a href="../story">Stories</a></li>
	</ul>
	<h2>Story</h2>
	<table id="dg" title="My Storys" class="easyui-datagrid" style="width:100%;"
			url="get_stories.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="id" width="20">ID</th>
				<th field="title" width="50">Title</th>
				<th field="content" width="80">Content</th>
				<th field="cat_id" width="50">Category</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newStory()">New Story</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editStory()">Edit Story</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyStory()">Remove Story</a>
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
				<label>Content:</label>
				<input name="content" data-options="multiline:true" class="easyui-textbox" required="true" style="width:100%;height:300px">
			</div>
			<div class="fitem">
				<label>Category:</label>
				<input name="cat_id" class="easyui-textbox">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveStory()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>

	<br><br>
	<h2>Categories</h2>
	<table id="category" title="My Categories" class="easyui-datagrid" style="width:100%;"
			url="../category/get_categories.php"
			toolbar="#cattoolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="id" width="20">ID</th>
				<th field="title" width="50">Title</th>
				<th field="thumb" width="80">Thumb</th>
			</tr>
		</thead>
	</table>
	<div id="cattoolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newCategory()">New Category</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editCategory()">Edit Category</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyCategory()">Remove Category</a>
	</div>

	<div id="catdlg" class="easyui-dialog" style="width:700px;height:600px;padding:10px 20px"
			closed="true" buttons="#catdlg-buttons">
		<div class="ftitle">Category Information</div>
		<form id="catfm" method="post" novalidate>
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
	<div id="catdlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveCategory()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#catdlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	
	
	<script type="text/javascript">
		var url;
		function newStory(){
			$('#dlg').dialog('open').dialog('setTitle','New Story');
			$('#fm').form('clear');
			url = 'save_story.php';
		}
		function editStory(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit Story');
				$('#fm').form('load',row);
				url = 'update_story.php?id='+row.id;
			}
		}
		function saveStory(){
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
						$('#dg').datagrid('reload');	// reload the Story data
					}
				}
			});
		}
		function destroyStory(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to destroy this Story?',function(r){
					if (r){
						$.post('destroy_story.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the Story data
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

		function newCategory(){
			$('#catdlg').dialog('open').dialog('setTitle','New Category');
			$('#catfm').form('clear');
			url = '../category/save_category.php';
		}
		function editCategory(){
			var row = $('#category').datagrid('getSelected');
			if (row){
				$('#catdlg').dialog('open').dialog('setTitle','Edit Category');
				$('#catfm').form('load',row);
				url = '../category/update_category.php?id='+row.id;
			}
		}
		function saveCategory(){
			$('#catfm').form('submit',{
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
						$('#catdlg').dialog('close');		// close the dialog
						$('#category').datagrid('reload');	// reload the Category data
					}
				}
			});
		}
		function destroyCategory(){
			var row = $('#category').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to destroy this Category?',function(r){
					if (r){
						$.post('../category/destroy_category.php',{id:row.id},function(result){
							if (result.success){
								$('#category').datagrid('reload');	// reload the Category data
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