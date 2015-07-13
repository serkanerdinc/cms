{%extends file="admin/template.tpl"%}
{%block name=content%}
<div class="row">
                        <div class="col-md-12">
                            <!--Top header start-->
                            <h3 class="ls-top-header">Drag & Drop</h3>
                            <!--Top header end -->

                            <!--Top breadcrumb start -->
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li><a href="#">Ui Elements</a></li>
                                <li class="active">Drag & Drop</li>
                            </ol>
                            <!--Top breadcrumb start -->
                        </div>
                    </div>
                    <!-- Main Content Element  Start-->
                   	<form method="post" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Sortable</h3>
                                </div>
                                <div class="panel-body">
                                    <ol class="sortable simple_with_drop ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded">
		   <li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_2">
		   <div class="menuDiv">
			  
			   <span title="Click to show/hide item editor" data-id="2" class="expandEditor ui-icon ui-icon-triangle-1-n">
			   </span>
			   <span>
			   <span class="item-type">Sayfa</span>
			   <span data-id="2" class="itemTitle">İçerik Başlığı</span>
			  
			   </span>
			   
			   <div id="menuEdit2" class="menuEdit hiddenx">
				   <p>
					   <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel2">
				   </p>
				    <span title="Click to delete item." data-id="2" class="deleteMenu ui-icon ui-icon-closethick">
			   <span></span>
			   </span>
			   </div>
		   </div>
		   <ol>
			   <li style="display: list-item;" class="mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="menuItem_4">
			   <div class="menuDiv">
				   
				   <span title="Click to show/hide item editor" data-id="4" class="expandEditor ui-icon ui-icon-triangle-1-n">
				   <span></span>
				   </span>
				   <span class="item-type">Sayfa</span>
				   <span>
				   <span data-id="4" class="itemTitle">c</span>
				   
				   </span>
				   <div id="menuEdit4" class="menuEdit hiddenx">
					   <p>
						   <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel4">
					   </p>
					   <span title="Click to delete item." data-id="4" class="deleteMenu ui-icon ui-icon-closethick">
				   <span></span>
				   </span>
				   </div>
			   </div>
			   <ol>
				   <li class="mjs-nestedSortable-leaf" id="menuItem_6">
				   <div class="menuDiv">
					  
					   <span title="Click to show/hide item editor" data-id="6" class="expandEditor ui-icon ui-icon-triangle-1-n">
					   <span></span>
					   </span>
					   <span class="item-type">Sayfa</span>
					   <span>
					   <span data-id="6" class="itemTitle">e</span>
					  
					   </span>
					   <div id="menuEdit6" class="menuEdit hiddenx">
						   <p>
							   <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel6">
						   </p>
						    <span title="Click to delete item." data-id="6" class="deleteMenu ui-icon ui-icon-closethick">
					   <span></span>
					   </span>
					   </div>
				   </div>
				   </li>
			   </ol>
			   </li>
			   <li style="display: list-item;" class="mjs-nestedSortable-leaf" id="menuItem_5">
			   <div class="menuDiv">
				   
				   <span title="Click to show/hide item editor" data-id="5" class="expandEditor ui-icon ui-icon-triangle-1-n">
				   <span></span>
				   </span>
				   <span class="item-type">Sayfa</span>
				   <span>
				   <span data-id="5" class="itemTitle">d</span>
				   
				   </span>
				   <div id="menuEdit5" class="menuEdit hiddenx">
					   <p>
						   <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel5">
					   </p>
					   <span title="Click to delete item." data-id="5" class="deleteMenu ui-icon ui-icon-closethick">
					   <span></span>
					   </span>
				   </div>
			   </div>
			   </li>
		   </ol>
		   </li>
		   <ol>
		   </ol>
		   <li style="display: list-item;" class="mjs-nestedSortable-leaf" id="menuItem_7">
		   <div class="menuDiv">
			   <span title="Click to show/hide item editor" data-id="7" class="expandEditor ui-icon ui-icon-triangle-1-n">
			   <span></span>
			   </span>
			   <span class="item-type">Sayfa</span>
			   <span>
			   <span data-id="7" class="itemTitle">f</span>
			   
			   </span>
			   <div id="menuEdit7" class="menuEdit hiddenx">
				   <p>
					  <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel7">
				   </p>
				   <span title="Click to delete item." data-id="7" class="deleteMenu ui-icon ui-icon-closethick">
			   <span></span>
			   </span>
			   </div>
		   </div>
		   </li>
		   <li class="mjs-nestedSortable-leaf" id="menuItem_3">
		   <div class="menuDiv">
			  
			   <span title="Click to show/hide item editor" data-id="3" class="expandEditor ui-icon ui-icon-triangle-1-n">
			   <span></span>
			   </span>
			   <span class="item-type">Sayfa</span>
			   <span>
			   <span data-id="3" class="itemTitle">b</span>
			  
			   </span>
			   <div id="menuEdit3" class="menuEdit hiddenx">
				   <p>
					   <input value="Content or form, or nothing here. Whatever you want.aa" id="menuLabel3">
				   </p>
				    <span title="Click to delete item." data-id="3" class="deleteMenu ui-icon ui-icon-closethick">
			   <span></span>
			   </span>
			   </div>
		   </div>
		   </li>
	   </ol>
                                    <textarea name="serial" id="serialize_output_1"> First, Second, Third, Four, Five, Six</textarea>
									<input id="serialize" name="serialize" type="button" value="Serialize">
									<input name="toArray" type="submit" value="Kaydet">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Sortable With Handler</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class='sortable simple_with_drop'>
                                        <li><i class="fa fa-arrows"></i> First</li>
                                        <li><i class="fa fa-arrows"></i> Second</li>
                                        <li><i class="fa fa-arrows"></i> Third</li>
                                        <li><i class="fa fa-arrows"></i> Four</li>
                                        <li><i class="fa fa-arrows"></i> Five</li>
                                        <li><i class="fa fa-arrows"></i> Six</li>
                                    </ul>
                                    <pre id="serialize_output_2"> First, Second, Third, Four, Five, Six</pre>
									
                                </div>
                            </div>
                        </div>
					</div>
					</form>

{%/block%}

{%block name=script%}
	<style type="text/css">
		
		
		ol {
			max-width: 450px;
			padding-left: 25px;
		}
		
		ol.sortable,ol.sortable ol {
			list-style-type: none;
		}
		
		li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
			border-color: #999;
		}
		.placeholder {
			outline: 1px dashed #4183C4;
			margin-bottom: 15px;
		}
		.disclose, .expandEditor {
			cursor: pointer;
			width: 20px;
			display: none;
			float:right;
		}
		.item-type {
			float:right;
		}
		
		.sortable li.mjs-nestedSortable-collapsed > ol {
			display: none;
		}
		
		.sortable li.mjs-nestedSortable-branch > div > .disclose {
			display: inline-block;
		}
		
		.sortable span.ui-icon {
			display: inline-block;
			margin: 0;
			padding: 0;
		}
		
		.menuDiv {
			background: #fafafa;
			border: 1px solid #cbc5ba;
			padding: 10px;
			margin-bottom: 15px;
			cursor:move;
		}
		
		.menuEdit {
			background: #fff;
			height:250px;
			border: 1px solid #cbc5ba;
			margin: 10px -11px -11px -11px;
		}
		
		.itemTitle {
			vertical-align: middle;
			cursor: pointer;
		}
		
		.deleteMenu {
			float: right;
			cursor: pointer;
		}
		.hiddenx {
			display:none;
		}
		
	</style>
	
<script type="text/javascript" src="http://form-serialize.googlecode.com/svn/trunk/serialize-0.2.min.js"></script>	
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="/admin/assets/js/pages/jquery.mjs.nestedSortable.js"></script>
<script src="/admin/assets/js/pages/dragAndDrop.js"></script>
{%/block%}