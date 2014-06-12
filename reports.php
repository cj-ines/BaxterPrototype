<?php include "doc_top.php" ?>
 <div class="container bio-main" role="main">

 <div class="container">
   <ul class="nav nav-tabs">
    <li class="active"><a href="#">Current Month</a></li>
    <li><a href="#">Current Qtr</a></li>
    <li><a href="#">Year to Date</a></li>
    <li><a href="#">Custom</a></li>
  </ul>
  <div class="page-header">
      <h3>Donor Surveys Reports <small>Corporate Overall</small></h3>
       <button class="btn btn-primary"><span class="glyphicon glyphicon-filter"></span> Filters</button>
  </div>
 </div>

<div class="container">
  <div class="row">
    <div class="col-md-7" id="report-1">
      <h4><span class="glyphicon glyphicon-chevron-right"></span> Report 1</h4>
      <?php include "content/getReportOne.php"; ?>
    </div>
    <div class="col-md-5"  id="report-2">
    <h4><span class="glyphicon glyphicon-chevron-right"></span> Report 2</h4>
      <?php include "content/getReportTwo.php"; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12" id="report-3">
       <h4><span class="glyphicon glyphicon-chevron-right"></span> Report 3</h4>
        <?php include "content/getReportThree.php"; ?>
      </div>
    </div>
  </div>
</div> <!-- /container -->
<script type="text/javascript">
  
</script>
 <?php include "doc_bot.php" ?>