function addCourse(cla){
    var course = $('.'+cla);
    var minus = 'minus'+parseInt(100*Math.random());
    var html = '<div class="form-group course-one '+minus+'">'+course.html()+'</div>'
    html = html.replace("addCourse('course-one')","minusCourse('"+minus+"')");
    html = html.replace("增加","删除");
    html = html.replace("glyphicon-plus","glyphicon-minus");
    course.last().after(html);
}

function minusCourse(cla){
  $('.'+cla).remove();
}
