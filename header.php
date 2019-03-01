
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Componentes</title>

    <!-- Bootstrap core CSS -->
    <link href="public/libs/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/libs/datatables/css/datatables.min.css"/>

    <!-- DataTable core CSS -->
    <link rel="stylesheet" type="text/css" href="public/libs/datatables/css/select.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/libs/datatables/css/buttons.dataTables.min.css"/>
 
    <!-- Select2 core CSS -->
    <link href="public/libs/select2/css/select2.min.css" rel="stylesheet">
    
    <!-- TreeView Bootstrap code CSS -->
    <link rel="stylesheet" href="public/libs/bootstrap-treeview/css/bootstrap-treeview.min.css" />
    
    <style type="text/css" media="screen">
 
.btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}

.clickable{
    cursor: pointer;   
}

.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}

table.dataTable tbody td.select-checkbox:before, table.dataTable tbody th.select-checkbox:before {
    margin-top: -12px;
}
table.dataTable tr.selected td.select-checkbox:after, table.dataTable tr.selected th.select-checkbox:after {
    margin-top: -15px;
}
    </style>

  </head>

  <body>

    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>