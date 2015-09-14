<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
                <label for="year" class="col-sm-1 control-label">年份</label>
                <div  class="col-sm-2" id="year">
                    <select class="form-control" name="year">
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                    </select>
                </div>
                <label for="area" class="col-sm-1 control-label">地区</label>
                <div  class="col-sm-2" id="area">
                    <select class="form-control" name="area">
                        <option value="2015">北京</option>
                        <option value="2014">上海</option>
                        <option value="2013">天津</option>
                        <option value="2012">重庆</option>
                        <option value="2011">广州</option>
                    </select>
                </div>
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
            </div>

            <div class="row form-group panel-heading">
                <label for="classname" class="col-sm-1 control-label">班次名称</label>
                <div  class="col-sm-2" id="classname">
                    <input type="text" class="form-control" name="classname" />
                </div>
                <label for="testtime" class="col-sm-4 control-label">考试时间</label>
                <div  class="col-sm-2" id="testtime">
                    <input type="text" class="form-control" name="classname" />
                </div>
            </div>
            <div class="course panel-heading" style="border:1px solid black">
                <div class="form-group course-one">
                    <label for="classname" class="col-sm-1 control-label">科目</label>
                    <div  class="col-sm-2" id="classname">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <label for="testtime" class="col-sm-1 control-label">课时</label>
                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <label for="testtime" class="col-sm-1 control-label">任务截止时间</label>
                    <div  class="col-sm-2" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <label for="testtime" class="col-sm-1 control-label">直播频道号</label>
                    <div  class="col-sm-1" id="testtime">
                        <input type="text" class="form-control" name="classname" />
                    </div>
                    <div class="col-sm-1">
                        <a href="javascript:addCourse('course-one')" class="btn btn-default">
                            增加 <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="classname" class="col-sm-1 control-label">需求</label>
                    <div  class="col-sm-3" id="classname">
                        <label class="checkbox-inline">
                            <input type="radio" name="need" value="option1" checked>直接拍摄
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="need" value="option2">组课
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="need" value="option2">资料
                        </label>
                    </div>
                    <label for="testtime" class="col-sm-3 control-label">是否有讲义</label>
                    <div  class="col-sm-2" id="testtime">
                        <label class="checkbox-inline">
                            <input type="radio" name="materials" value="option1" checked>是
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="materials" value="option2">否
                        </label>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="classname" class="col-sm-1 control-label">讲义上传</label>
                    <div  class="col-sm-3" id="classname">
                        <input type="file" class="form-control" name="file" />
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