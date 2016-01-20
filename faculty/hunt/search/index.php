<?php 
include "../template/header.php"; 


?>

<section style="width:960px">



 <?php $q = "ees"; ?> 
 <table>
 <tr>
 <td>
     
<div id="cse" style="width: 960px;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en', style : google.loader.themes.V2_DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '016588007481968927166:i6yoc97k1y4', customSearchOptions);
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
	line-height:20px;
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
      </td></tr></table>
</section>

<?php include "../template/footer.php"; ?>