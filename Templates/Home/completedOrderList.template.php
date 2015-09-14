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
        <li><a href="#">订单列表</a></li>
        <li class="active"><a href="#">已完成订单</a></li>
    </ul>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>班次名称</th>
            <th>科目</th>
            <th>课时</th>
            <th>申请时间</th>
            <th>任务截止时间</th>
            <th>经手人</th>
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
                <a href="#">修改</a>
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
                <a href="#">修改</a>
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
                <a href="#">修改</a>
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