<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!------------
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">



  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>------------->


<!------------

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>----->







</head>
<body style="font-family:tahoma">


<div class="mycv" style="width:80%;margin:10px auto;background-color:E6E6FA">



  <img src="{{URL::to($empinfo->employee_image)}}" style="width:150px; height:120px;border-radius:50%;margin-top:20px;margin-bottom:20px"/>
 

  <h1>{{$empinfo->employee_first_name}}</h1>

  <h3><span>{{$empinfo->employee_first_name}} {{$empinfo->employee_last_name}}</span></h3>
  <h3><span>{{$empinfo->employee_designation}}</span></h3>

    <p style="font-weight:bold;font-size:16px">
          
            <span>Email :</span>   <span>{{$empinfo->employee_email}}</span>
                
      </p>


 <p style="font-weight:bold;font-size:16px">
          
            <span>Phone :</span>   <span>{{$empinfo->employee_phone_number}}</span>
                
      </p>


 <p style="font-weight:bold;font-size:16px">
          
            <span>Address :</span>   <span>{{$empinfo->employee_present_address}}</span>
                
      </p>



<p>{{$empinfo->employee_about}}</p>



 

  <section style="padding:20px 20px 20px 20px">

 <!---------------  <div class="sdfsdfds" style="overflow:hidden">

        <div class="namesec" style="overflow:hidden;width:400px;float:left">

           <span style="margin-right:10px">{{$empinfo->employee_first_name}}</span>  <span>{{$empinfo->employee_last_name}}</span>

         </div>


              <div class="namesec" style="overflow:hidden;width:400px;float:left">

           <span style="margin-right:10px">Email</span>  <span>{{$empinfo->employee_email}}</span>

         </div>

  </div>------------->




  <div class="firstsection" style="overflow:hidden;">

   <!------------------ <div class="myimage" style="width:200px;float:left;overflow:hidden">

          <img style="height:130px;width:150px;border:2px solid white;" src="https://res.cloudinary.com/ragibhasan006/image/upload/v1658396633/index2_fvklxq.jpg" alt="Cinque Terre">

      <




  
        <div class="myimage" style="width:400px;float:left;overflow:hidden;">

        <p style="font-weight:bold;font-size:22px">{{$empinfo->employee_first_name}}</p>

           <p style="font-weight: bold;color:gray">vcbvcbvcbvcbvc</p>

      </div>

    



           <div class="myimage" style="width:400px;float:left;overflow:hidden;color:gray">

        <p style="font-weight:bold;font-size:16px">
          
            <span>Email :</span>   <span>sdfsdfsd@gmail.com</span>
                
      </p>


        <p style="font-weight:bold;font-size:16px">
          
            <span>Phone :</span>   <span>01755963880</span>
                
      </p>


        <p style="font-weight:bold;font-size:16px">
          
            <span>Address :</span>   <span>Mirpur-1 , Dhaka</span>
                
      </p>




      </div>


  </div>------------->





<!------------------
    <div class="firstsection" style="overflow:hidden">
      <p>I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for usability and user experience with technology to create cool digital experience . I am working on php , laravel , vue.js , react.js , socket.io , express.js .</p>

  </div>--------->



<!------------

    <div class="firstsection" style="overflow:hidden">
      <p style="font-weight:bold;font-size:20px">Skill</p>

      <span style="margin-right:15px;font-weight:bold">Html</span>
 
     <span style="margin-right:15px;font-weight:bold">Html</span>
          <span style="margin-right:15px;font-weight:bold">Html</span>
               <span style="margin-right:15px;font-weight:bold">Html</span>
                    <span style="margin-right:15px;font-weight:bold">Html</span>
                         <span style="margin-right:15px;font-weight:bold">Html</span>
                              <span style="margin-right:15px;font-weight:bold">Html</span>
                                   <span style="margin-right:15px;font-weight:bold">Html</span>

  </div>---------->


 <div class="firstsection" style="overflow:hidden">
      <p style="font-weight:bold;font-size:20px">Skill</p>


      @foreach($empskill as $v_show)
      <span style="margin-right:15px;font-weight:bold">{{$v_show->skill_name}}</span>

      @endforeach
 
   

  </div>







<div class="firstsection" style="overflow:hidden;margin-top:20px;margin-bottom:20px">


      <p style="font-weight:bold;font-size:20px">Work Experience</p>





@foreach($empexperience as $v_show)

   <div class="experiencesection">

      <span style="font-weight:bold;color:gray;margin-right:40px">{{$v_show->emp_exp_com_name}}</span> 
      <span style="font-weight:bold;color:gray">{{$v_show->emp_exp_com_date}}</span>
      <p style="font-weight:bold;color:gray">{{$v_show->emp_exp_com_designation}}</p>

         <p style="font-family:tahoma">{{$v_show->emp_exp_com_res}}</p>

    </div>


@endforeach








  </div>






<div class="firstsection" style="overflow:hidden;margin-top:20px;margin-bottom:20px">


      <p style="font-weight:bold;font-size:20px">Personal Project</p>








@foreach($empsproject as $v_show)


   <div class="experiencesection" style="margin-bottom:20px">


      <span style="font-weight:bold;color:gray;margin-right:40px">{{$v_show->emp_project_name}}</span> 
    
    

         <p style="font-family:tahoma">{{$v_show->emp_project_des}}</p>


           <p style="font-family:tahoma">{{$v_show->emp_project_tools}}</p>


           <p style="font-family:tahoma"><a style="text-decoration:none" href="{{$v_show->emp_project_link}}">{{$v_show->emp_project_link}}</a></p>

    </div>

@endforeach






  </div>








<div class="firstsection" style="overflow:hidden;margin-top:20px;margin-bottom:20px">


      <p style="font-weight:bold;font-size:20px">Education</p>






@foreach($empeducation as $v_show)


   <div class="experiencesection" style="margin-bottom:20px">





      <span style="font-weight:bold;color:gray;margin-right:20px">{{$v_show->edu_degree}}</span> 
         <span style="font-weight:bold;color:gray;margin-right:30px">{{$v_show->edu_level }}</span>
      <span style="font-weight:bold;color:gray">{{$v_show->edu_passyear}}</span>
    
         <p style="font-family:tahoma;font-weight:bold">{{$v_show->edu_institute}}</p>

    </div>


@endforeach








  </div>




    <div class="firstsection" style="overflow:hidden" style="margin-top:20px;margin-bottom:20px">
      <p style="font-weight:bold;font-size:20px">Skill</p>

 
@foreach($empinterest as $v_show)
     <span style="margin-right:15px;font-weight:bold">{{$v_show->interest_name}}</span>
    @endforeach    

  </div>









    <div class="firstsection" style="overflow:hidden;margin-top:20px;margin-bottom:20px">
      <p style="font-weight:bold;font-size:20px">Social Link</p>

 
@foreach($sociallink as $v_show)
     <p>
     <span style="margin-right:15px;font-weight:bold">{{$v_show->social_link_name}}</span>  <span style="margin-right:15px;"><a href="{{$v_show->social_link_url}}">{{$v_show->social_link_url}}</a></span>
     </p>

    @endforeach    

  </div>









</section>

</div>





<!---------------------------

   <div class="dsfsd" style="background-color:pink">


     <div class="mycard" style="width:80%;margin:10px auto;">


       <div class="sdkjbsd">


           <div class="my srction" style="width:300px;float:left;overflow:hidden">


           <img style="height:130px;width:150px;border:2px solid white;margin-left:50px" src="https://res.cloudinary.com/ragibhasan006/image/upload/v1658396633/index2_fvklxq.jpg" class="rounded-circle" alt="Cinque Terre"> 


           </div>




           <div class="my srction" style="float:left;width:800px">


            <p style="margin-top:20px;font-weight:bold;font-size:22px">Ragib Hasan</p>

             <p>Software Developer</p>


           </div>

         </div>



           <div class="abouxsdcsdt">

              <p>I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for usability and user experience with technology to create cool digital experience . I am working on php , laravel , vue.js , react.js , socket.io , express.js .</p>

          </div>

        


         </div>









     </div>

------------------------>

<!-----------------

<div class="container jumbotron">
  <div class="card" style="background-color:white">
  <div class="row">











    <div class="col-md-4 bg-info">

      <center style="margin-top:20px;margin-bottom:20px">

          <img style="height:40%;width:40%;border:2px solid white" src="https://res.cloudinary.com/ragibhasan006/image/upload/v1663668428/adsdsad_qoarca.jpg" class="rounded-circle" alt="Cinque Terre"> 

      </center>



      <p>

        <i class="fa fa-envelope" style="font-size: 20px;color:black"></i><span style="font-size: 17px;color:white;margin-left:20px;">ragibhasan006@gmail.com</span>
      </p>


        <p>

        <i class="fa fa-phone" style="font-size: 24px;color:black"></i><span style="font-size: 17px;color:white;margin-left:20px">01755963880</span>
      </p>


      <p>

        <i class="fa fa-map-marker" style="font-size: 24px;color:black"></i><span style="font-size: 17px;color:white;margin-left:20px">01755963880</span>
      </p>



      <p style="font-weight:bold;font-size:18px;margin-top:50px">Personal Information</p>


   

    <p>

        <span style="font-size: 15px;color:white;font-weight:bold">Father's Name    :</span> <span style="font-size: 17px;color:white;margin-left:15px">Wahab Sarker</span>
      </p>

   <p>

        <span style="font-size: 15px;color:white;font-weight:bold">Mother's Name :</span> <span style="font-size: 17px;color:white;margin-left:15px">Lutfon Ness</span>
      </p>

   <p>
        <span style="font-size: 15px;color:white;font-weight:bold">Death Of Birth :</span> <span style="font-size: 17px;color:white;margin-left:15px">12-04-2022</span>
      </p>


   <p>
        <span style="font-size: 15px;color:white;font-weight:bold">NID Number :</span> <span style="font-size: 17px;color:white;margin-left:15px">sdfsdgvsdgfsgfs</span>
      </p>


      <p>
        <span style="font-size: 15px;color:white;font-weight:bold">Gender :</span> <span style="font-size: 17px;color:white;margin-left:15px">Male</span>
      </p>


      




           <p style="font-weight:bold;font-size:18px;margin-top:50px;">Skill</p>


             <div class="skill" style="padding-bottom:50px">


                <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>


   <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>



   <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>
                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>

                 <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;" class="bg-success">HTML</span>

              </p>






           </div>




                   <p style="font-weight:bold;font-size:18px;margin-top:50px;">Interests</p>


                     <div class="interests" style="padding-bottom:70px">

                   
                          <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>



                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>


                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>


                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>

                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>

                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>

                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>

                               <p style="font-weight:bold;font-size:15px;color:white;width:60px;float:left">

                           <span  style="padding:4px 8px 4px 8px;border-radius:10px;font-size:14px;color:white" class="btn btn-outline-danger">HTML</span>
  
                         </p>




                     </div>


       



     </div>


         <div class="col-md-8">

          <div class="about" style="padding-bottom:70px">

              <div class="mycontent" style="padding-top:10px">

               <span style="margin-top:15px;font-size:25px;">Ragib Hasan</span>

               <p style="font-size:17px;border-bottom:1px solid black;width:200px;padding-bottom:5px;padding-top:5px">Software Developer</p>




               <p style="text-align:justify;padding:0px 30px 5px 0px;font-size:15px">I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for usability and
               user experience with technology to create cool digital experience . I am working on php , laravel , vue.js , react.js , socket.io , express.js .</p>

             </div>







           <div class="workexperience" style="padding-top:10px">

          

               <p style="font-size:17px;border-bottom:1px solid black;width:680px;padding-bottom:5px;padding-top:5px;font-weight:bold">Work Experience</p>
                
                    <span style="margin-right:20px;font-weight:bold;color:gray">Junior Developer</span>  <span style="color:gray">12-03-2018 to 07-03-2022</span>


                    <p style="margin-top:5px;font-weight:bold;color:gray">Tigher It</p>


                    <p style="text-align:justify;padding:0px 30px 5px 0px;font-size:15px">I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for.</p>

             </div>


           <div class="workexperience" style="padding-top:10px">

          

            
                
                    <span style="margin-right:20px;font-weight:bold;color:gray">Junior Developer</span>  <span style="color:gray">12-03-2018 to 07-03-2022</span>


                    <p style="margin-top:5px;font-weight:bold;color:gray">Tigher It</p>


                    <p style="text-align:justify;padding:0px 30px 5px 0px;font-size:15px">I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for.</p>

             </div>

   <div class="workexperience" style="padding-top:10px">

          

            
                
                    <span style="margin-right:20px;font-weight:bold;color:gray">Junior Developer</span>  <span style="color:gray">12-03-2018 to 07-03-2022</span>


                    <p style="margin-top:5px;font-weight:bold;color:gray">Tigher It</p>


                    <p style="text-align:justify;padding:0px 30px 5px 0px;font-size:15px">I have working with software development since 2017 , In this period I am working many different technologies. I am a self-motivation and self-taught person who likes to solve problem. I have marge passion for.</p>

             </div>










           <div class="education" style="padding-top:10px">

          

               <p style="font-size:17px;border-bottom:1px solid black;width:680px;padding-bottom:5px;padding-top:5px;font-weight:bold">Education</p>

             <span style="margin-right:20px;font-weight:bold;color:gray">Bsc in Computer Science and Engineering</span>  

             <span style="font-weight:bold;color:gray;margin-right:5px">2022</span><span style="font-weight:bold;color:gray">to 2024</span>

             <p style="padding-top:5px;font-weight:bold">Ahasan Ullaha University Of Science and Technology</p>

          


          </div>













          </div>

     </div>




  </div>

</div>
</div>
-------------->



</body>
</html>