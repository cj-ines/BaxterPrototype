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
    <div class="col-md-8"  id="report-1">
      <h5>
        <button class="btn btn-sm" id="maximize-one"><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-one"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 1 
      </h5>
      <?php include "content/mystery/getReportOne.php"; ?>
    </div>
    <div class="col-md-4"  id="report-3">
      <h5>
        <button class="btn btn-sm" id="maximize-three"><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-three"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 2
      </h5>
      <?php include "content/mystery/getReportThree.php"; ?>
    </div>
  </div>

  <div class="row">
   
  </div>

  <div class="row">
    <div class="col-md-12" id="report-4">
       <h5>
        <button class="btn btn-sm" id="maximize-four" name=2 ><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-four"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 3 
      </h5>
        <?php include "content/mystery/getReportFour.php"; ?>
      </div>
    </div>
  </div>
</div> <!-- /container -->
<script src="js/mystery-report.js"></script>
 <?php include "doc_bot.php" ?>