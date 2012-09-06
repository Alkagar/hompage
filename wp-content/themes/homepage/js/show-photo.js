$(document).ready(function() {
   function showPhoto() {
      var listBox = $(this).closest('.post-list-box.photo-box');
      console.log(listBox);
      var url = $.trim(listBox.find('.post-thumbnail').text());
      var alink = $('<a></a>').attr('href', url).css('display', 'none');
      var img = $('<img />').attr('src', url);
      alink.html(img);
      listBox.append(alink);
      alink.colorbox({height:'80%', photo:true});
      alink.click();
      return false;
   }
   $('.post-list-box.photo-box a').click(showPhoto);
});
