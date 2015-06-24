{%extends file="admin/template.tpl"%}
{%block name=content%}
<div class="row">
    <div class="col-md-12">
        <!--Top header start-->
        <h3 class="ls-top-header">Kategoriler</h3>
        <!--Top header end -->

        <!--Top breadcrumb start -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Sayfalar</a></li>
            <li class="active">Sayfa Ekle</li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->


<div class="row home-row-top">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yeni Sayfa Ekle</h3>
            </div>
            <div class="panel-body">
            	<form role="form" class="ls_form" method="post">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="" name="name" class="form-control">
                    	<b>Slug:</b> http://www.pratiktariflerim.com/<input type="text"  value="slug" name="slug" width="40px" >.html
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"  placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="3"  placeholder="Keywords"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="ckeditor" id="editor1" style="width: 100%; height: 250px;" name="content"></textarea>
                    </div>
                    
                </form>
            </div>
		</div>
    </div>
    <div class="col-md-3">
    	<div class="row">
    	
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Yayınla</h3>
		            </div>
		            <div class="panel-body">
		            	<div class="form-group" >
		            		<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-bitbucket"></i></a>
	                        <button class="btn ls-green-btn btn-lg" type="submit">Yayınla</button>
	                    </div>
		            </div>
				</div>
    	
    		</div>
		
		</div>
		<div class="row">
    	
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Kategoriler</h3>
		            </div>
		            <div class="panel-body">
		            	
		            	
		            </div>
				</div>
    	
    		</div>
		
		</div>
		<div class="row">
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Etiketler</h3>
		            </div>
		            <div class="panel-body">
		            </div>
				</div>
    	
    		</div>
		
		</div>
		
		<div class="row">
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Sayfa Resmi</h3>
		            </div>
		            <div class="panel-body">
		            </div>
				</div>
    	
    		</div>
		
		</div>
    </div>
</div>
<script src="/admin/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
<script src="/admin/ckeditor/samples/sample.js" type="text/javascript" charset="utf-8"></script>
<!-- Main Content Element  End-->
{%/block%}