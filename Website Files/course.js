window.onload = function(){
        prepareListener();
}

function prepareListener(){
        var droppy;
        droppy = document.getElementById("getuniversity");
        droppy.addEventListener("change",getUniversity);
        var droppy2;
        droppy2 = document.getElementById("getcourse");
        droppy2.addEventListener("change",getCourse);
        var droppy3;
        droppy3 = document.getElementById("getprovince");
        droppy3.addEventListener("change",getProvince);
        var droppy4;
        droppy4 = document.getElementById("getcoursenum");
        droppy4.addEventListener("change",getCourseNum);
        var droppy5;
        droppy5 = document.getElementById("getdate");
        droppy5.addEventListener("change",getDate);
        var droppy7;
        droppy7 = document.getElementById("university");
        droppy7.addEventListener("change",university);
}

function getUniversity(){
        this.form.submit();
}
function getCourse(){
        this.form.submit();
}

function getProvince(){
        this.form.submit();
}

function getCourseNum(){
        this.form.submit();
}
function getDate(){
        this.form.submit();
}

function university(){
        this.form.submit();
}
