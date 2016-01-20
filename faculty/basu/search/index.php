<?php 
include "../template/header.php"; 


?>

<section style="width:960px">



 <?php $q = "ees"; ?> 
 <table>
 <tr>
 <td>
     
<div id="cse" style="width: 960px;">Loading</div>
<script>
  (function() {
    var cx = '016588007481968927166:xscbr8eznhk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>

      

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