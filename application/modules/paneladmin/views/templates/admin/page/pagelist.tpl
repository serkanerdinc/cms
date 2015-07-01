{%extends file="admin/template.tpl"%}
{%block name=content%}
    <div class="row">
        <div class="col-md-12">
            <!--Top header start-->
            <h3 class="ls-top-header">Yazılar</h3>
            <!--Top header end -->

            <!--Top breadcrumb start -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Sayfalar</li>
                <li class="active">Sayfaları Listele</li>
            </ol>
            <!--Top breadcrumb start -->
        </div>
    </div>
    <!-- Main Content Element  Start-->

    <div class="row home-row-top">
        <div class="col-md-12">
            <!--Table Wrapper Start-->
            <div class="table-responsive ls-table">
                <table class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>Kategoriler</th>
                        <th>Etiketler</th>
                        <th>Tarih</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                   {%foreach from=$pages  item=page%}
						<tr id="page{%$page.page_id%}" >
                            <td>{%$page.page_id%}</td>
                            <td>{%$page.title%}</td>
                            <td>{%$page.kategoriler%}</td>
                            <td>{%$page.etiketler%}</td>
                            <td>{%$page.created%}</td>
                            <td>
                            	<button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
	                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
	                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
					{%/foreach%}
                   
                    </tbody>

                </table>
            </div>
            <!--Table Wrapper Finish-->
        </div>
    </div>


    <!-- Main Content Element  End-->
{%/block%}