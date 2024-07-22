<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lNgườig-8">
        <h2>{{ config('apps.course.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active"><strong>{{ config('apps.course.title') }}</strong></li>
        </ol>
    </div>
</div>
<div class="row mt20">    
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> {{ config('apps/course/tableHeading') }} </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th> <input type="checkbox" value="" id="checkAll" class="input-checkBox" ></th>
                                <th>Image</th>
                                <th>Họ tên</th>
                                <th>Tên người dùng</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Ngày sinh</th>
                                <th>Địa chỉ</th>
                                <th>Giới tính</th>    
                                <th class="text-center">Thao tác</th>   
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" value=""  class="input-checkBox checkBox-Item" ></td>
                                <td > 
                                        
                                </td>
                                <td>
                                    <div class="user-item fullname">admin</div>
                                </td>
                                <td>
                                    <div class="user-item username">admin</div>
                                </td>
                                <td>
                                    <div class="user-item phone">012321</div>
                                </td>
                                <td>
                                    <div class="user-item email">admin@gmail.com</div>
                                </td>
                                <td>
                                    <div class="user-item dob">19/01/2002</div>
                                </td>
                                <td>
                                    <div class="user-item address">ha noi</div>
                                </td>
                                <td>
                                    <div class="user-item sex">male</div>
                                </td>   
                                <td>
                                    <div class="text-center">
                                        <a href="" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                                                                       
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        