<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Federation Status Page</title>

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./jquery.min.js"></script>
<script type="text/javascript" src="./fedr_status.js"></script>

</head>
<body>
  <div>
    <h3 style="text-align: center;">Federation Status Page</h3>
    <p style="text-align: center;"> This page should display which sites are open, closed, and not responding within the federation</p>
    <table id="sites" class="table" style="margin: 0 auto;">
      <tr>
        <th style="text-align: right;">Status</th>
        <th style="text-align: right;">Team #</th>
        <th style="text-align: right;">Name Short</th>
        <th style="text-align: right;">Name Long</th>
        <th style="text-align: right;">URL</th>
      </tr>
    </table>
    <p  style="text-align: center;">
      Status of Sites AJAX Call: <span id="output1">Unresponsive</span>
    </p>
  </div>

</body>
</html>
