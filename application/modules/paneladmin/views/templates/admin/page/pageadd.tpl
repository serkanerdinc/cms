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
<form role="form" class="ls_form" method="post" enctype="multipart/form-data">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yeni Sayfa Ekle</h3>
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="{%if $page|is_array%}{%$page.title%}{%/if%}" id="title" name="title" class="form-control">
                    	<b>Slug:</b><div id="slug-permalink" >http://www.pratiktariflerim.com/<input type="text" id="page-slug" name="page-slug" value="{%if $page|is_array%}{%$page.slug%}{%/if%}"  placeholder="slug" style="width: 200px;">.html</div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"  placeholder="Description">{%if $page|is_array%}{%$page.description%}{%/if%}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="3"  placeholder="Keywords">{%if $page|is_array%}{%$page.keywords%}{%/if%}</textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="ckeditor" id="editor1" style="width: 100%; height: 250px;" name="content">{%if $page|is_array%}{%$page.content%}{%/if%}</textarea>
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
								{%foreach from=$data item=cat%}
									{%if $cat.parent==0 %}{%$pre=0%}{%/if%}
			            			<label class="checkbox" style="margin-left: {%$prefix%}px"><input type="checkbox" id="term_category[]" name="term_category[]" value="{%$cat.term_id%}" {%if $page|is_array && $page.cats[$cat.term_id]=="checked"%}checked{%/if%}>{%$cat.name%}</label>
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
		            	<input type="text" name="tags" id="tags" class="form-control"  autofocus="" value="{%if $page|is_array%}{%$page.etiketler%}{%/if%}">
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
		            	{%if $page|is_array%} <img src="/images/page-image/kucuk/{%$page.resim%}" width="220px"> {%/if%}
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
	                        <button class="btn ls-green-btn btn-lg" type="submit">{%if $page_id!="" %}Güncelle{%else%}Yayınla{%/if%}</button>
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

{%block name=script%}
	<script>
		$("#title").change(function(){
			if ($("#page-slug").val()=="")
			{
				$.ajax({ 
					type: "POST", 
					url: "/paneladmin/page/urltitle", 
					data: "title="+ $("#title").val(), 
					success: function(slug){ 
						$.ajax({ 
							type: "POST", 
							url: "/paneladmin/page/slugcontrol", 
							data: "slug="+ slug, 
							success: function(slug2){ 
								$("#page-slug").val(slug2);
							}
						});
					}
				});
			}	
		});
		
		$("#page-slug").change(function(){
			$.ajax({ 
				type: "POST", 
				url: "/paneladmin/page/slugcontrol", 
				data: "slug="+ $("#page-slug").val(), 
				success: function(slug){ 
					$("#page-slug").val(slug);
				}
			});
		});
	</script>
{%/block%}