<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>orderList</title>
    <link rel="stylesheet" href="./Public/css/bootstrap/bootstrap.css">
    <script src="./Public/js/jquery/jquery-1.11.2.js"></script>
    <script src="./Public/js/jquery/jquery-ui-1.11.2/jquery-ui.js"></script>
    <script src="./Public/js/bootstrap/bootstrap.js"></script>
    <script src="./Public/js/course/course.js"></script>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">订单列表</a></li>
        <li><a href="#">已完成订单</a></li>
    </ul>
    <form action="#" class="form-horizontal panel-heading" role="form" method="get" enctype="multipart/form-data" style="background:lightgray">
        <div class="row form-group">
            <label class="col-sm-1 control-label" for="name">地区</label>
            <div class="col-sm-1">
                <input type="text" class="form-control input-sm" />
            </div>

            <label class="col-sm-1 control-label" for="inputfile">班次名称</label>
            <div class="col-sm-2">
                <input type="text" class="form-control input-sm" />
            </div>

            <label class="col-sm-1 control-label" for="inputfile">公职类型</label>
            <div  class="col-sm-2" id="type">
                <select class="form-control input-sm" name="type">
                    <option value="2015">公务员考试</option>
                    <option value="2014">事业单位招考</option>
                    <option value="2013">政法干警</option>
                    <option value="2012">招警</option>
                    <option value="2011">三支一扶</option>
                </select>
            </div>

            <label class="col-sm-1 control-label" for="inputfile">考试类型</label>
            <div class="col-sm-1">
                <input type="text" class="form-control input-sm" />
            </div>
            <div class="col-sm-1">
                <button type="submit" class="btn btn-success input-sm">提交</button>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>班次名称</th>
            <th>科目</th>
            <th>课时</th>
            <th>申请时间</th>
            <th>任务截止时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tanmay</td>
            <td>Bangalore</td>
            <td>560001</td>
            <td>560001</td>
            <td>560001</td>
            <td>560001</td>
            <td>
                <a href="#">查看</a>&nbsp;|
                <a href="#">组课</a>&nbsp;|
                <a href="#">提交</a>&nbsp;|
                <a href="#">驳回</a>
            </td>
        </tr>
        <tr>
            <td>Sachin</td>
            <td>Sachin</td>
            <td>Sachin</td>
            <td>Sachin</td>
            <td>Sachin</td>
            <td>Mumbai</td>
            <td>
                <a href="#">查看</a>&nbsp;|
                <a href="#">组课</a>&nbsp;|
                <a href="#">提交</a>&nbsp;|
                <a href="#">驳回</a>
            </td>
        </tr>
        <tr>
            <td>Uma</td>
            <td>Uma</td>
            <td>Uma</td>
            <td>Uma</td>
            <td>Uma</td>
            <td>Pune</td>
            <td>
                <a href="#">查看</a>&nbsp;|
                <a href="#">组课</a>&nbsp;|
                <a href="#">提交</a>&nbsp;|
                <a href="#">驳回</a>
            </td>
        </tr>
        </tbody>
    </table>
    <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li class="disabled"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>
</body>
</html>