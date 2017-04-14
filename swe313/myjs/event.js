$(document).ready(function() {   
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
   
$(".addtocart").ajaxForm({
    beforeSend: function() {
        $('.loading-cart').show();
    },
    uploadProgress: function(event, position, total, percentComplete) {
    },
    success: function() {
       $('.loading-cart').hide();
    },
complete: function(xhr) {
//var obj = jQuery.parseJSON(xhr.responseText);
//alert(xhr.responseText);
swal("Item Added To Cart", "", "success")

//if (obj.status=='success') {
//location.href=obj.url;
//}
//else {
//alert("something went wrong");
//}

}
}); 
$("#processdlt").ajaxForm({
    beforeSend: function() {

        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
complete: function(xhr) {
var obj = jQuery.parseJSON(xhr.responseText);

if (obj.status=='success') {
location.reload();
}
else {
status.html(obj.error);
}


}
});



$(".post_update").ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    complete: function(xhr) {
location.reload();

    }
}); 

$("#user_update").ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    complete: function(xhr) {
        status.html(xhr.responseText);


        //location.href=xhr.responseText;
         location.reload();
    }
});


$(".post_delete").ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
complete: function(xhr) {
var obj = jQuery.parseJSON(xhr.responseText);
if (obj.status=='success') {
location.reload();
}
else {
status.html(obj.error);
}


}
}); 




$('#search input').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#search').submit();
    }
});


  var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
$(wrapper).append('<div class="remove"><div style="clear:both;"></div><br><br><div class="form-group"><input type="text" class="form-control" id="event-schedule" placeholder="Indtroduktion till" name="scedule_name[]"></div><div class="form-group one-half-form-group "><input type="text" class="form-control mb5 time" id="event-schedule-start" placeholder="Start tid" name="start_time[]"></div><div class="form-group one-half-last-form-group"><input type="text" class="form-control mb5 time" id="event-schedule-end" placeholder="Slut tid" name="end_time[]"></div><a href="#" class="remove_field">Remove</a></div>'); //add input box

//datetime

$('.date').datetimepicker({
    timepicker:false,
     format:'d-m-Y'
});

 }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })


//datetime



});      
