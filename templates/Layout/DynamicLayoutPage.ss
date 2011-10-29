<h3>$Title</h3>
<div >$Content </div>

<span style ="clear"></span>

<div id="DynamicLayout">
<% if Boxes %>
	<% control Boxes %>
		<div class="item">$Text</div>
	<% end_control %>
<% end_if %>
</div>





<script type="text/javascript">

$(document).ready(function() {
	  $('#DynamicLayout').masonry({
		// options
		itemSelector : '.item',
	  });
	});


	
</script>






		