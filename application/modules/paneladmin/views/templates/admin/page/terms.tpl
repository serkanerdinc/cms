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
            <li class="active">{%if $TermType==1 %}Kategori{%else%}Etiket{%/if%}ler</li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->


<div class="row home-row-top">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yeni {%if $TermType==1 %}Kategori{%else%}Etiket{%/if%}  Ekle</h3>
            </div>
            <div class="panel-body">
                <form role="form" class="ls_form" method="post">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" placeholder="Slug" name="slug" class="form-control">
                    </div>
                    {%if $TermType==1 %}
                    <div class="form-group">
                        <label>Üst Kategori</label>
                        <select class="form-control input-sm" name="parent">
                            <option value="0">Hiçbiri</option>
                            {%$pre=""%}
	                        {%function name=termsOpt prefix=''%}
								{%foreach from=$data  item=cat%}
									<option value="{%$cat.term_id%}">{%$prefix%} {%$cat.name%}</option>
									{%assign var='pre' value="$pre--|"%}
			                        {%if (count($Terms[$cat.term_id])>0)%}
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
                        <textarea class="form-control" id="description" name="description" rows="5"  placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="5"  placeholder="Keywords"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-default" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tüm {%if $TermType==1 %}Kategori{%else%}Etiket{%/if%}ler</h3>
            </div>
            <div class="panel-body">
                <!--Table Wrapper Start-->
                <div class="table-responsive ls-table">
                    <table class="table table-bordered table-bottomless" id="">
                        <thead>
                        <tr>
                            <th><b>#</b></th>
                            <th><b>Adı</b></th>
                            <th><b>Açıklama</b></th>
                            <th><b>Slug</b></th>
                            <th><b>Toplam</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        {%$pre=""%}
                        {%function name=terms prefix=''%}
                        	
							{%foreach from=$data  item=term%}
								<tr id="term{%$term.term_id%}" >
		                            <td>{%$term.term_id%}</td>
		                            <td>
		                            	{%$prefix%} {%$term.name%}
		                            	<div class="row-action{%$term.term_id%}">
		                            		<span><a title="Düzenle" href="/paneladmin/page/termsedit/{%$nav2%}/{%$term.term_id%}"><i class="fa fa-edit"></i></a></span>
		                            		<span><a title="Sil" href="/paneladmin/page/termsdelete/{%$nav2%}/{%$term.term_id%}" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-times-circle-o"></i></a></span>
		                            	</div>
		                            </td>
		                            <td>{%$term.description%}</td>
		                            <td>{%$term.slug%}</td>
		                            <td>{%$term.count%}</td>
		                        </tr>
		                        {%if (count($Terms[$term.term_id])>0)%}
									{%assign var='pre' value="$pre=>"%}
		                        	{%terms data=$Terms[$term.term_id]  prefix=$pre%}
		                        {%/if%}
							{%/foreach%}
						{%/function%}
						
                       	{%terms data=$Terms[0]%}

                        </tbody>
                    </table>
                </div>
                <!--Table Wrapper Finish-->
            </div>
        </div>
    </div>
</div>

<!-- Main Content Element  End-->
{%/block%}