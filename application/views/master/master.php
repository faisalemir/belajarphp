<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    //event onclick button edit
    $(function(){
      $('a.opsi-update').click(function(e){
        e.preventDefault();

        //get url from href attribut
        var url = $(e.target).parent().attr('href');

        //request html page and replace to modal
        $.get(url, function(response){
          $('#modal .modal-content').html(response);
          $('#modal').modal('show');
        });
      });
    });
  </script>
</head>
<body>

<?=$navbar?>
  
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <?=(isset($sidebar))?print_r($sidebar):''?>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-body">
          <?=$main?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>