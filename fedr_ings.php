<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Federation Ingredients Page</title>
<script src="./jquery.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./fedr_ings.js"></script>
</head>
<body>
  <div style="padding-left: 8px;">
    <h3 style="text-align: center">Federation Ingredients Page</h3>
    <p> This page should display the ingredients across all the open sites</p>
    <table class="table table-striped" id="ings">
      <tr>
        <th>Team Name</th>
        <th>Ingredient Name</th>
        <th>Url</th>
      </tr>
    </table>
    <p>
      Status of Sites AJAX Call: <span id="output1">Unresponsive</span>
    </p>
  </div>

</body>
</html>
