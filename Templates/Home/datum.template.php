<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datum</title>
    <link rel="stylesheet" href="./Public/css/bootstrap/bootstrap.css">
    <script src="./Public/js/jquery/jquery-1.11.2.js"></script>
    <script src="./Public/js/jquery/jquery-ui-1.11.2/jquery-ui.js"></script>
    <script src="./Public/js/bootstrap/bootstrap.js"></script>
    <script src="./Public/js/course/course.js"></script>
</head>
<body>
<div class="container">
    <h4>产品申请</h4>
    <div class='col-lg-12'>
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

            <div class="row form-group panel-heading">
                <label for="year" class="col-sm-1 control-label">编号：</label>
                <div  class="col-sm-2" id="year">
                    <input type="text" class="form-control" name="classname" />
                </div>
                <label for="area" class="col-sm-1 control-label">年份</label>
                <div  class="col-sm-2" id="year">
                    <input type="text" class="form-control" name="classname" />
                </div>
                <label for="type" class="col-sm-1 control-label">地区</label>
                <div  class="col-sm-2" id="type">
                    <select class="form-control" name="type">
                        <option value="2015">北京</option>
                        <option value="2014">天津</option>
                        <option value="2013">上海</option>
                        <option value="2012">广州</option>
                        <option value="2011">重庆</option>
                    </select>
                </div>

            </div>
            <div class="row form-group panel-heading">
                <label for="type" class="col-sm-1 control-label">公职类型</label>
                <div  class="col-sm-2" id="type">
                    <select class="form-control" name="type">
                        <option value="2015">公务员考试</option>
                        <option value="2014">事业单位招考</option>
                        <option value="2013">政法干警</option>
                        <option value="2012">招警</option>
                        <option value="2011">三支一扶</option>
                    </select>
                </div>
                <label for="type" class="col-sm-1 control-label">班次名称</label>
                <div  class="col-sm-2" id="type">
                    <input type="text" class="form-control" name="classname" />
                </div>
                <label for="type" class="col-sm-1 control-label">考试时间</label>
                <div  class="col-sm-2" id="type">
                    <input type="text" class="form-control" name="classname" />
                </div>
            </div>

            <div class="course panel-heading" style="border:1px solid black">
                <div class="form-group">
                    <label for="classname" class="col-sm-2 control-label">资料名称</label>
                    <label for="testtime" class="col-sm-2 control-label">科目</label>
                    <label for="testtime" class="col-sm-1 control-label">数量</label>
                    <label for="testtime" class="col-sm-2 control-label">内容描述</label>
                    <label for="testtime" class="col-sm-2 control-label">特殊要求</label>
                    <label for="testtime" class="col-sm-2 control-label">任务截止时间</label>
                </div>

                <div class="form-group course-one">
                    <div  class="col-sm-2" id="classname">
                        <input type="text" class="form-control" name="classname" />
                    </div>

                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>

                    <div  class="col-sm-1" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>

                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <div class="col-sm-1">
                        <a href="javascript:addCourse('course-one')" class="btn btn-default">
                            增加 <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </div>

                </div>

            </div>
            <div class="row form-group">
                <label for="classname" class="col-sm-1 control-label">备注：</label>
                <div  class="col-sm-12" id="classname">
                    <textarea class="form-control" rows="4">请注明班次的特殊需求。</textarea>
                </div>
            </div>
            <div class="row form-group">
                <div  class="col-sm-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="保存本地" />
                </div>
                <div  class="col-sm-6">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="确认提交" />
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>