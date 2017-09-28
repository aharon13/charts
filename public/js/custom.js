$(document).ready(function(){
	$("#wizard").steps();
    $('a[href^="#next"]').on( "click", CreateChart);
    $('a[href^="#wizard-h-1"]').on( "click", CreateChart);

    $('#save').on("click", function(){
    	$('#form').submit();
    });

    $('.download_jpg').on("click", DownloadAs);


});
function DownloadAs(){
	html2canvas($("#ch_b"), {
	    onrendered: function (canvas) {
	      Canvas2Image.saveAsPNG(canvas);
	    }
	});
}
function CreateChart(){
	$("#ch_b").empty();

	$('.xxxxx').each(function(){
		
		var name = $(this).find(".ch_name").val();
		var percent = $(this).find(".ch_percent").val();
		var color = $(this).find(".ch_color").val();
		var icon = $(this).find(".ch_icon").val();

		var	num = percent;
	    var percentP = (percent / 200) * 100;
	    if (num > 100 && num <=500) {
	        percentP = (percent / 500) * 100;
	    }else{if (num > 500 && num <=1000) {
	        percentP = (percent / 1000) * 100;
	    }}

    	var finalP = ((200 / 100) * percentP) ;

	  var $ch_box = $("<div>", {"class":"chart-box"});
	  var $ch_item = $("<div>", {"class":"chart-item", css:{"background-color": color, "height": finalP+"px"}});
	  var $ch_value = $("<div>", {"class":"chart-value"});
	  var $ch_value_text = $("<span>");
	  $ch_value_text.html(percent);
	  $ch_value.append($ch_value_text);
	  var $ch_icon = $("<div>", {"class":"chart-icon"});
	  var $ch_icon_value = $("<i>", {"class":"fa "+icon});
	  $ch_icon.append($ch_icon_value);
	  $ch_item.append($ch_value);
	  $ch_item.append($ch_icon);
	  $ch_box.append($ch_item);
	  $("#ch_b").append($ch_box);
	});
	 
}