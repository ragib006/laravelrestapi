<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>




<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>    



  <form action="" method=""> 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><input type="text" name="name[]" class="form-control"></td>
        <td><input type="text" name="price[]" class="form-control"></td>
        <td><input type="text" name="qty[]" class="form-control"/></td>
        <td><button type="button" class="btn btn-success btn-sm" id="add_btn">+</button></td>


      </tr>

      
    </tbody>

    
  </table>



  <button type="submit" class="btn btn-success">Save</button>

</form>



</div>




</body>


  <script type="text/javascript">
      
      $(document).ready(function(){   

          $("#add_btn").on('click',function(){   
             
             var html=''; 
             html+='<tr>';
             html+='<td><input type="text" name="name" class="form-control"></td>';
             html+='<td><input type="text" name="price[]" class="form-control"></td>';
             html+='<td><input type="text" name="qty[]" class="form-control" ></td>';
             html+='<td><buttontype="button" class="btn btn-danger btn-sm" id="remove_add">x</button></td>';
             html+='</tr>';

             $('tbody').append(html);




          })


      });

      $(document).on('click','#remove_add',function(){   

            $(this).closest('tr').remove();



      });





  </script>


</html>
