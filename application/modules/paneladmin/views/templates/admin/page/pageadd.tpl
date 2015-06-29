{%extends file="admin/template.tpl"%}
{%block name=content%}
<div class="row">
    <div class="col-md-12">
        <!--Top header start-->
        <h3 class="ls-top-header">Sayfa Ekle</h3>
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
<form role="form" class="ls_form" method="post">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yeni Sayfa Ekle</h3>
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="" name="name" class="form-control">
                    	<b>Slug:</b><div id="slug-permalink" >http://www.pratiktariflerim.com/<input type="text" id="page-slug" value=""  placeholder="slug">.html</div>
                    	<input type="hidden" id="slugtype" value="0"/>
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
            </div>
		</div>
    </div>
    <div class="col-md-3">
    	
		<div class="row">
    	
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Kategoriler</h3>
		            </div>
		            <div class="panel-body" style="overflow:auto;  max-height: 200px ">
		            	<div style="margin-left: 15px;">
			            	{%$pre=0%}
	                        {%function name=termsOpt prefix=0%}
								{%foreach from=$data  item=cat%}
									{%if $cat.parent==0 %}{%$pre=0%}{%/if%}
			            			<label class="checkbox" style="margin-left: {%$prefix%}px"><input type="checkbox" id="term_category[]" value="{%$cat.term_id%}">{%$cat.name%}</label>
									{%$pre=$pre+15%}
			                        {%if (count($Terms["Category"][$cat.term_id])>0)%}
			                        	{%termsOpt data=$Terms["Category"][$cat.term_id]  prefix=$pre%}
			                        {%/if%}
								{%/foreach%}
							{%/function%}
							
	                       	{%termsOpt data=$Terms["Category"][0]%}
		            	</div>
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
		            	<input type="text" name="tags" id="tags" class="form-control"  autofocus="" value="">
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
		            	<input type="file" name="image" value="Dosya Seç">
		            </div>
				</div>
    	
    		</div>
		
		</div>
		
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
    </div>
</form>
</div>
<script src="/admin/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
<script src="/admin/ckeditor/samples/sample.js" type="text/javascript" charset="utf-8"></script>
<!-- Main Content Element  End-->
{%/block%}

