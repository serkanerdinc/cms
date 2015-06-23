{%extends file="admin/template.tpl"%}
{%block name=content%}
    <div class="row">
        <div class="col-md-12">
            <!--Top header start-->
            <h3 class="ls-top-header">Admin Panel</h3>
            <!--Top header end -->

            <!--Top breadcrumb start -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Admin Panel</li>
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
                        <th>Product</th>
                        <th>Info</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>PSD Design</td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="50"></div>
                            </div>
                        </td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PSD</td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuetransitiongoal="90"></div>
                            </div>
                        </td>
                        <td><span class="label label-light-green">On Way</span></td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PSD Theme</td>
                        <td>Lorem ipsum dolor sit amet</td>
                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="80"></div>
                            </div>
                        </td>
                        <td><span class="label label-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Wordpress Theme</td>
                        <td>Lorem ipsum dolor sit amet</td>

                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="80"></div>
                            </div>
                        </td>
                        <td><span class="label label-red">Error</span></td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>HTML Template</td>
                        <td>Lorem ipsum dolor sit amet</td>

                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="70"></div>
                            </div>
                        </td>
                        <td>
                            <span class="label label-light-green">On Way</span>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Plugin</td>
                        <td>Lorem ipsum dolor sit amet</td>

                        <td class="ls-table-progress">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="90"></div>
                            </div>
                        </td>
                        <td><span class="label label-success">Successfull</span></td>
                        <td>
                            <button class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-xs ls-light-green-btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs ls-red-btn"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
            <!--Table Wrapper Finish-->
        </div>
    </div>


    <!-- Main Content Element  End-->
{%/block%}