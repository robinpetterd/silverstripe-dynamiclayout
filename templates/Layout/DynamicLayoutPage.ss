<h3>$Title</h3>
<div >$Content </div>
<span style ="clear"></span>

<div id="DynamicLayout">
<% if Boxes %>
	<% control Boxes %>
		<div class="box" <% if Width %> style="width:$Width;" <% end_if %> >
                    <% if Image %>
                       $Image
                    <% end_if %>
                    $Text
                </div>
	<% end_control %>
<% end_if %>
</div>

<script type="text/javascript">

  $(function(){

    //var $layout = $('#DynamicLayout');
  
    $('#DynamicLayout').imagesLoaded( function(){
      $('#DynamicLayout').masonry({
            itemSelector : '.box',
          });
    });
  
  });



	
</script>






		