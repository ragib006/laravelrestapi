







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
  <h3>{{ $fstname }} {{$lstname}} Apply For This Job</h3> 

  <div class="container">

       <div class="card" style="background-color:white">


                         



            <div class="cont" id="mycv" style="padding:20px 20px 20px 20px">
        
     
         <p style="font-size:22px;margin-top:10px">About Employee</p>
         <span style="text-align:justify;">{{$empabout}}</span>
      
        <p style="font-size:22px;margin-top:20px">Personal Enformation</p>
        <p><span style="margin-right:5px">Name</span>:<span style="margin-left:5px">{{$fstname}}</span> <span>{{$lstname}}</span></p>

        <p><span style="margin-right:5px">Father's Name</span>:<span style="margin-left:5px">{{$empfather}}</span></p>
        <p><span style="margin-right:5px">Mother's Name</span>:<span style="margin-left:5px">{{$empmother}}</span></p>



       <p><span style="margin-right:5px">Email</span>:<span style="margin-left:5px">{{$empemail}}</span></p>
        <p><span style="margin-right:5px">Contact</span>:<span style="margin-left:5px">{{$empphn}}</span></p>
         <p><span style="margin-right:5px">Gender</span>:<span style="margin-left:5px">{{$empgender}}</span></p>
        <p><span style="margin-right:5px">Date Of Birth</span>:<span style="margin-left:5px">{{$empbirth}}</span></p>
        <p><span style="margin-right:5px">NID Number</span>:<span style="margin-left:5px">{{$empnid}}</span></p>
        <p><span style="margin-right:5px">Present Address</span>:<span style="margin-left:5px">{{$emppresentaddress}}</span></p>



                <p style="font-size:22px;margin-top:30px">Education</p>

          <p><span style="margin-right:5px">Education Level</span>:<span style="margin-left:5px">{{$empedulevel}}</span></p>
          <p><span style="margin-right:5px">Degree Title</span>:<span style="margin-left:5px">{{$empdegreetitle}}</span></p>
          <p><span style="margin-right:5px">Major Subject</span>:<span style="margin-left:5px">{{$empmejorsubject}}</span></p>
          <p><span style="margin-right:5px">Institution Name</span>:<span style="margin-left:5px">{{$empinstitute}}</span></p>
          <p><span style="margin-right:5px">Pass Year</span>:<span style="margin-left:5px">{{$emppassyear}}</span></p>
           <p><span style="margin-right:5px">CGPA</span>:<span style="margin-left:5px">{{$empcgpa}}</span></p>


              <p style="font-size:22px;margin-top:30px">Job Experience</p>

          <p><span style="margin-right:5px">Job Position</span>:<span style="margin-left:5px">{{$empjobposition}}</span></p>
          <p><span style="margin-right:5px">Job Experience</span>:<span style="margin-left:5px">{{$empjobexp}}</span></p>
          <p><span style="margin-right:5px">Job Skill</span>:<span style="text-align:justify">{{$empskill}}</span></p>
        
     
  <p><span style="margin-right:5px;margin-top:30px">Job Responsibility</span>:<span style="text-align:justify;margin-left:5px">{{$empjobrespon}}</span></p>
       

       
           
           @foreach($sociallink as $v_show)

            <span style="margin-right:20px">{{$v_show->social_link_name}}</span>   <span>{{$v_show->social_link_url}}</span>

           @endforeach


<!----
   <button id="downlodecv" class="btn btn-primary" style="margin-top:20px">Download Cv</button>
       
--->
       </div>

  </div>






</div>












  
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
























