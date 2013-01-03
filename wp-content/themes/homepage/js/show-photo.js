$(document).ready(function() {
   function showPhoto() {
      var listBox = $(this).closest('.post-list-box.photo-box');
      console.log(listBox);
      var url = $.trim(listBox.find('.post-thumbnail').text());
      var alink = $('<a></a>').attr('href', url).css('display', 'none');
      var description = listBox.find('.post-thumbnail-description');
      alink.attr('title', description.text());
      var img = $('<img />').attr('src', url);
      alink.html(img);
      listBox.append(alink);
      alink.colorbox({height:'80%', photo:true});
      alink.click();
      return false;
   }
   $('.post-list-box.photo-box a').click(showPhoto);
});

// fix too long titles for colorbox
$(document).bind("cbox_complete", function(){
    if($("#cboxTitle").height() > 20){ 
        $("#cboxTitle").hide(); 
        var titleBox = $("<div>"+$("#cboxTitle").html()+"</div>").css({
            color: $("#cboxTitle").css("color"),
            margin: '5px 35px'
        }); 
        $("#cboxLoadedContent").append(titleBox);
        $.fn.colorbox.resize(); 
    }
});
