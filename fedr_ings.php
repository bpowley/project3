<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Federation Ingredients Page</title>

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./jquery.min.js"></script>
<script type="text/javascript" src="./fedr_ings.js"></script>
</head>
<body>
  <div>
    <h3 style="text-align: center;">Federation Ingredients Page</h3>
    <p style="text-align: center;"> This page should display from sites thtat are open</p>
    <table id="ings" class="table table-striped" style="margin: 0 auto;">
      <tr>
        <th>Ingredient Name</th>
        <th>Unit</th>
        <th>Price</th>
        <th>URL</th>
      </tr>
    </table>
    <p  style="text-align: center;">
      Status of Sites AJAX Call: <span id="output1">Unresponsive</span>
    </p>
  </div>

</body>
</html>
