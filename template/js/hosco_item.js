
// function add_item(){
// 	var editor1 = document.getElementsByClassName('editor');
// 	var html = '';


// 	html+=" <div class='box_item_hosco' style='border: 1px solid'>";
// 	html+="<button type='button' onclick='remove(this);'>Xóa</button>";
// 	html+="<h3>Line"+editor.length+"</h3>";
// 	html+="<textarea id='editor"+editor.length+"' class='editor' name='itemContent"+editor.length+"' cols='70'></textarea><br>";
// 	html+="<a href='#' class='linkTinhNang button button-secondary'><?php _e('Upload Image'); ?></a><input type='text' class='linkIMG' name='aw_custom_image"+editor.length+"' id='linkTinhNang"+editor.length+"' style='width:500px;' />";
// 	html+="</div>";
// 	document.getElementById('full_item_hosco').innerHTML += html;

// 	add_CKEDITOR()
// 	// console.log(full_item_hosco);
// }

function add_CKEDITOR(){
	var editor = document.getElementsByClassName('editor');
	for(let i = 0;i<editor.length;i++){
		if(document.getElementById('cke_editor'+i)==null)
			CKEDITOR.replace(editor[i].id);
	}
}
add_CKEDITOR();
function remove(obj)
{

	obj.parentNode.remove();
}
// console.log(editor);

