$(document).ready(function(){

	$("#wizard").steps();
    // $('a[href^="#next"]').on( "click", CreateChart);
    // $('a[href^="#wizard-h-1"]').on( "click", CreateChart);

    $('#save').on("click", function(){
    	$('#form').submit();
    });

    $('.download_png').on("click", DownloadAsPNG);
    $('.download_jpeg').on("click", DownloadAsJPEG);

    $("#embed_code").on("click", EmbedCode);

    $('body').on('change', '.ch_percent', function(){
    	var dataAction = $(this).data('action');
    	// $(".chart-item").find("[data-action='" + dataAction + "']").css("height", $(".ch_percent").val() * 2 + "px");;
    	$(".ch_preview_area[data-action="+dataAction+"]").find(".chart-item").css("height", $(this).val() * 1.5 + "px");
    });

    $('body').on('change', '.ch_color', function(){
    	var dataAction = $(this).data('action');
    	$(".ch_preview_area[data-action="+dataAction+"]").find(".chart-item").css("background-color", $(this).val());
    });

    
	$('body').on('change', '.ch_name', function(){
    	var dataAction = $(this).data('action');
    	$(".ch_preview_area[data-action="+dataAction+"]").find(".ch_name_f").html($(this).val());
    });


});
function DownloadAsPNG(){
	html2canvas($(".all_ch_preview_area"), {
	    onrendered: function (canvas) {
	    	canvas.toBlob(function(blob) {
            	saveAs(blob, "chart.png");
        	}, "image/png");
	    }
	});
}
function DownloadAsJPEG(){
	html2canvas($(".all_ch_preview_area"), {
	    onrendered: function (canvas) {
	    	canvas.toBlob(function(blob) {
            	saveAs(blob, "chart.jpeg");
        	}, "image/jpeg");
	    }
	});
}

function EmbedCode(){
	html2canvas($(".all_ch_preview_area"), {
	    onrendered: function (canvas) {
	    	var dataURL = canvas.toDataURL("image/png");
	    	$("#embed_code_area").val("<img src='"+dataURL+"'/>");
	    }
	});
}