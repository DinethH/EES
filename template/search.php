
    
    <div id="wrapper" align="left">

<table class="clearfix" style="padding-left:10px;" width="1024px">
	<tr>
    	<td width="1024" id="current_bar">
        	<?php include "current_bar.php"; ?>
        </td>
    </tr>
	<tr>
    	<td valign="top" width="100">
			<?php include "side_menu.php"; ?>
		</td>
      
        
        <td align="left" width="900">
    <?php $q = "ees"; ?>      
<div id="cse" style="width:700px;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '016588007481968927166:oivgsrkng3k', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
	 customSearchControl.execute("<?php if (isset($_POST['q'])) echo $_POST['q']; ?>");
  }, true);
</script>
<style type="text/css">
  .gsc-control-cse {
    font-family: Arial, sans-serif;
    border-color: #e7e7e7;
    background-color: #e7e7e7;
  }  .gsc-webResult.gsc-result,
  .gsc-results .gsc-imageResult {
    border-color: #e7e7e7;
    background-color: #e7e7e7;
  }
  .gsc-webResult.gsc-result:hover,
  .gsc-imageResult:hover {
    border-color: #e7e7e7;
    background-color: #e7e7e7;
  }
</style>
      
          
</td>
</tr>
</table>


<br />



    </div>



<!-- CONTAINER END -->

<!-- OUTER WRAPPER END -->

