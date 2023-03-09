







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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<div class="jumbotron text-center">
  <img src="https://res.cloudinary.com/ragibhasan006/image/upload/v1670828970/kazkormo_titzo2.png" style="width:200px;height:100px">
  <h3>You Have Successfully Applied This Job For {{$jobinfo->job_title}} Position</h3> 

  <div class="container">

       <div class="card" style="background-color:white">


                         



       	    <div class="cont" id="mycv" style="padding:20px 20px 20px 20px">
        
     

          <p>

          	<span>Job Title : </span> <span>{{$jobinfo->job_title}}</span>

          </p>


           <p>

          	<span>Company Name : </span> <span>{{$jobinfo->company_name_eng}}</span>

          </p>


            <p>

          	<span>Company Address : </span> <span>{{$jobinfo->company_address_eng}}</span>

          </p>
           
           
           


<!----
   <button id="downlodecv" class="btn btn-primary" style="margin-top:20px">Download Cv</button>
       
--->
       </div>

  </div>






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




  
<!-----------<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>------------>

</body>
</html>
























