



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
  <p>{{$empinfo->employee_first_name}} {{$empinfo->employee_last_name}} Apply For This Job</p> 

  <div class="container">

       <div class="card" style="background-color:white">


                         



       	    <div class="cont" id="mycv" style="padding:20px 20px 20px 20px">
        
        
        <img style="width:100px;height:100px" src="{{URL::to($empinfo->employee_image)}}">




     

         <p style="font-size:22px;margin-top:10px">About Employee</p>
         <span style="text-align:justify;">{{$empinfo->employee_about}}</span>
      
        <p style="font-size:22px;margin-top:20px">Personal Enformation</p>
        <p><span style="margin-right:5px">Name</span>:<span style="margin-left:5px">{{$empinfo->employee_first_name}}</span> <span>{{$empinfo->employee_last_name}}</span></p>

        <p><span style="margin-right:5px">Father's Name</span>:<span style="margin-left:5px">{{$empinfo->employee_father_name}}</span></p>
        <p><span style="margin-right:5px">Mother's Name</span>:<span style="margin-left:5px">{{$empinfo->employee_mother_name}}</span></p>

        
        <p><span style="margin-right:5px">Email</span>:<span style="margin-left:5px">{{$empinfo->employee_email}}</span></p>
        <p><span style="margin-right:5px">Contact</span>:<span style="margin-left:5px">{{$empinfo->employee_phone_number}}</span></p>
         <p><span style="margin-right:5px">Gender</span>:<span style="margin-left:5px">{{$empinfo->employee_gender}}</span></p>
        <p><span style="margin-right:5px">Date Of Birth</span>:<span style="margin-left:5px">{{$empinfo->employee_deth_of_birth}}</span></p>
        <p><span style="margin-right:5px">NID Number</span>:<span style="margin-left:5px">{{$empinfo->employee_nid_number}}</span></p>
        <p><span style="margin-right:5px">Present Address</span>:<span style="margin-left:5px">{{$empinfo->employee_present_address}}</span></p>
       <!--------- <p><span style="margin-right:5px">Parmanent Address</span>:<span style="margin-left:5px">{{$empinfo->employee_parmanent_address}}</span></p>--------------->

        <p style="font-size:22px;margin-top:30px">Education</p>

          <p><span style="margin-right:5px">Education Level</span>:<span style="margin-left:5px">{{$empinfo->employee_edu_level}}</span></p>
          <p><span style="margin-right:5px">Degree Title</span>:<span style="margin-left:5px">{{$empinfo->employee_degree_title}}</span></p>
          <p><span style="margin-right:5px">Major Subject</span>:<span style="margin-left:5px">{{$empinfo->employee_major_subject}}</span></p>
          <p><span style="margin-right:5px">Institution Name</span>:<span style="margin-left:5px">{{$empinfo->employee_institute_name}}</span></p>
          <p><span style="margin-right:5px">Pass Year</span>:<span style="margin-left:5px">{{$empinfo->employee_pass_year}}</span></p>
           <p><span style="margin-right:5px">CGPA</span>:<span style="margin-left:5px">{{$empinfo->employee_cgpa}}</span></p>


              <p style="font-size:22px;margin-top:30px">Job Experience</p>

          <p><span style="margin-right:5px">Job Position</span>:<span style="margin-left:5px">{{$empinfo->employee_job_position}}</span></p>
          <p><span style="margin-right:5px">Job Experience</span>:<span style="margin-left:5px">{{$empinfo->employee_job_exp}}</span></p>
          <p><span style="margin-right:5px">Job Skill</span>:<span style="text-align:justify">{{$empinfo->employee_skill}}</span></p>
        
     
  <p><span style="margin-right:5px;margin-top:30px">Job Responsibility</span>:<span style="text-align:justify;margin-left:5px">{{$empinfo->employee_job_res}}</span></p>
       

    </div>
           


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
























