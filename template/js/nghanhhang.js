
function validateSelectBox(obj)
{
    var options = obj.children;

    var html = '';

    var kiemtra =-1;
    for (var i = 0; i < options.length; i++){
    	if (options[i].selected){
    		kiemtra = options[i].value;
    		html+="<div style='display:inline-block;'>";
    		html+="<p style='display:inline-block;box-shadow: 0px 0px 10px 2px inset gray ;'>"+options[i].innerHTML+"</p>";
    		html+="<button type='button' style='width: 16.2px;padding: 0;border: 1px solid #c56565;' onclick='remove(this)'><img src='../wp-content/themes/hosco/template/image/remove-image.png' alt='' width='100%' height = '100%'></button>"
    		html += '<input type="hidden" name="prozzzzduct-'+options[i].value+'" value="'+options[i].value+'" >';
    		html+="</div>";
    	}
    }
    if(kiemtra!=""){
    	if(!search(kiemtra))
    		document.getElementById('choose-pr').innerHTML += html;
    	else
    		alert("Lựa chọn đã được chọn lựa");
    }

}
function remove(obj)
{

	obj.parentNode.remove();
}
function search(a){
	var div = document.getElementById('choose-pr').children;

	for(var i = 0;i<div.length;i++){
		if(a ==div[i].getElementsByTagName('input')[0].value)
			return true;
	}
	return false;
}