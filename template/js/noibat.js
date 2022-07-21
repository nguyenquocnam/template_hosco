
jQuery(function($){
   $(document).ready(function(){
    $('.noibat a').click(function(e){
     e.preventDefault();
    console.log(); // Khi click vào button thì sẽ gọi hàm ajax
        $.ajax({ // Hàm ajax
           type : "post", //Phương thức truyền post hoặc get
           dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
           url : this.href, // Nơi xử lý dữ liệu
           data : {
           },
           
           success: function(response) {
                console.log("success");
                location.reload();
           },
           error: function( jqXHR, textStatus, errorThrown ){
                //Làm gì đó khi có lỗi xảy ra
                console.log( 'The following error occured: ' + textStatus, errorThrown );
           }
       });
    });
});
});