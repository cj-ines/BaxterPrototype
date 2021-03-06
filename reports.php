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
    <div class="col-md-7"  id="report-1">
      <h5>
        <button class="btn btn-sm" id="maximize-one"><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-one"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 1 
      </h5>
      <?php include "content/donor/getReportOne.php"; ?>
    </div>
    <div class="col-md-5"  id="report-2">
      <h5>
        <button class="btn btn-sm" id="maximize-two"><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-two"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 2
      </h5>
      <?php include "content/donor/getReportTwo.php"; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12" id="report-3">
       <h5>
        <button class="btn btn-sm" id="maximize-three"><span class="glyphicon glyphicon-resize-full"></span></button>
        <button class="btn btn-sm" id="minimize-three"><span class="glyphicon glyphicon-resize-small"></span></button>
        Report 3 
      </h5>
        <?php include "content/donor/getReportThree.php"; ?>
      </div>
    </div>
  </div>
</div> <!-- /container -->
<script src="js/donor-report.js"></script>
 <?php include "doc_bot.php" ?>