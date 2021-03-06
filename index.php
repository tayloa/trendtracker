<?php
  include('includes/init.inc.php'); // include the DOCTYPE and opening tags
?>

<?php
  include('includes/head.inc.php');
  // include global css, javascript, end the head and open the body
?>

<?php

session_start();


$_SESSION['query'] = $queryValue;
$_SESSION['inputDate'] = $inputDateValue;
?>
<div class="content">
  <div class="title">
    <h1 class="logo animated bounceInDown"><i class="fas fa-chart-line"></i>Trend Tracker</h1>
  </div>
  <div>
   <h3 id="sub-text" class="sub-text">Search a trend and see its popularity across the internet.</h3>
 </div>
</div>

<form  id="basic-search-form" name="basic-search-form" action="dashboard.php" method="get" onsubmit="return validate(this);">
  <div class="form-group">
    <div class="input-group mb-3" id="search-bar">
      <a href="#" class="btn btn-secondary" data-toggle="popover" data-placement="top" data-trigger="hover"
      data-content="Enter a topic and we'll send you its trend data.">
        <i class="fas fa-question"></i>
      </a>
      <input type="text" class="form-control" placeholder="Enter a topic"
      value="" name="query" id="query" aria-label="query" aria-describedby="basic-addon2">

      <input type="hidden" name="inputDate" value="Past Month">

      <div class="input-group-append">
        <a id="submit-button" tabindex="0" class="btn btn-success" role="button" data-toggle="popover" data-trigger="focus"
        data-content="Please enter a query." data-placement="top" type="submit" onclick='$("#basic-search-form").submit()'>Search</a>
      </div>
    </div>
  </div>
  </div>
</form>
</div>

<?php include('includes/foot.inc.php');
?>
