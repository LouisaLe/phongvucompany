$(".delete-categorys").on("click", function(e){
    if (!confirm('Some message')) {
        e.preventDefault();
    }
})

function  readURL(input,thumbimage) {

   if  (input.files && input.files[0]) {
   var  reader = new FileReader();
    reader.onload = function (e) {
    $("#thumbimage").attr('src', e.target.result);
     }
     reader.readAsDataURL(input.files[0]);
    }
    else  {
      $("#thumbimage").attr('src', input.value);
    }
    $("#thumbimage").show();
    $('.filename').text($("#uploadfile").val());
    $('.Choicefile').css('background', '#C4C4C4');
    $('.Choicefile').css('cursor', 'default');
    $(".removeimg").show();
    $(".Choicefile").unbind('click');
}


$(".removeimg").click(function () {
	$("#thumbimage").attr('src', '').hide();
	$("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
	$(".removeimg").hide();
	$(".Choicefile").bind('click', function  () {
	$("#uploadfile").click();
	});
	$('.Choicefile').css('background','#0877D8');
	$('.Choicefile').css('cursor', 'pointer');
	$(".filename").text("");
});

$('#gallery').on("click",'.remove-img', function(){
    $(this).closest('.gallery-image').remove();
    if($('.gallery-image').length() < 2){
        $(".remove-img").hidden();
    }

})

$('#gallery').on("input",'.gallery-input', function(){
    $(".remove-img").show();
    if  (this.files && this.files[0]) {
        var element = $(this).closest('.gallery-image');
        var elemntTmp = element.html();
        var rootElement =  $(this).closest('#gallery');
        var reader = new FileReader();
        reader.onload = function(e) {
            element.find(".thumbimage").attr('src', e.target.result).show();
            rootElement.append(' <div class="col-md-3 col-sm-6 col-xs-12 form-group gallery-image">' + elemntTmp + '</div>');
        }

        reader.readAsDataURL(this.files[0]);
        element.find('.remove-img').removeClass('hidden');
        element.find('.input').removeClass('hidden');
    }
});

$('.image-upload').on("change", function(){
    if  (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
           $(".thumbimage").attr('src', e.target.result).show();
        }

        reader.readAsDataURL(this.files[0]);

    }
});

