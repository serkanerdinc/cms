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
            <li class="active">{%if $TermType==1 %}Kategori Düzenle{%else%}Etiket Düzenle{%/if%}</li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->


<div class="row home-row-top">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{%if $TermType==1 %}Kategori{%else%}Etiket{%/if%}  Düzenle</h3>
            </div>
            <div class="panel-body">
                <form role="form" class="ls_form" method="post">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="{%$Term.name%}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" placeholder="Slug" name="slug" value="{%$Term.slug%}" class="form-control">
                    </div>
                    {%if $TermType==1 %}
                    <div class="form-group">
                        <label>Üst Kategori</label>
                        <select class="form-control input-sm" name="parent">
                            <option {%if $Term.parent==0 %}selected{%/if%} value="0">Hiçbiri</option>
                            {%$pre=""%}
	                        {%function name=termsOpt prefix=''%}
								{%foreach from=$data  item=cat%}
									<option {%if $cat.term_id==$Term.term_id %}disabled{%/if%} {%if $Term.parent==$cat.term_id %}selected{%/if%} value="{%$cat.term_id%}">{%$prefix%} {%$cat.name%}</option>
			                        {%if (count($Terms[$cat.term_id])>0)%}
										{%assign var='pre' value="$pre=>"%}
			                        	{%termsOpt data=$Terms[$cat.term_id]  prefix=$pre%}
			                        {%/if%}
								{%/foreach%}
							{%/function%}
							
	                       	{%termsOpt data=$Terms[0]%}
                        </select>
                    </div>
                    {%/if%}
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5"  placeholder="Description">{%$Term.description%}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="5"  placeholder="Keywords">{%$Term.keywords%}</textarea>
                    </div>
                    <div class="form-group">
                    	<input type="hidden" name="term_id" value="{%$Term.term_id%}">
                        <button class="btn btn-sm btn-default" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Element  End-->
{%/block%}