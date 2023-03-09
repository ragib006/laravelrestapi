
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee cv</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>
<body style="font-family:tahoma">






<div class="container" style="margin-top:20px;display:block">
    
  <div class="card" id="mycv" style="background-color:white">
  <div class="row">













  



<h1> Hello Bangladesh</h1>
      






















              
































     </div>






  </div>






 <center style="margin-top:20px"> 



  <a class="btn btn-success" href="{{URL::to('/employee_profile')}}">Previous</a>


    <button id="downlodecv" class="btn btn-primary" style="margin-top:5px;margin-bottom:5px">Download Cv</button>


 </center>









</div>







<script>


window.onload = function(){
    
    
    document.getElementById("downlodecv").addEventListener("click",()=>{
        
        
         const mycv = this.document.getElementById("mycv");
         
         console.log(mycv);
         
         console.log(window);
         
         html2pdf().from(mycv).save();
         
        
        
        
        
    })
    
    
    
    
    
}



</script>
















</body>
</html>

