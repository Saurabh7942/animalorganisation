

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DYP MEDICAL</title>
 
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



  <!-- <script >
         var count=1;
            function developers()
        {
            count=count+1;
            mod = count%7;
            if(mod==0){
              window.open('./Assets/bootstrap-4.5.0-dist/js/dev/', '_blank');
              }

            
         }
         
</script> -->

<style>


@import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Permanent+Marker&display=swap');
.jumbotron.fluid-jumbotron.fixed-bottom
{
  opacity:0.8;
}


/* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      } */




      /* letter */
body {
  height: 100vh;
  padding: 0;
  margin: 0;


  background: #085078;  /* fallback for  26A69A old browsers */
background: -webkit-linear-gradient(to right, #85D8CE, #085078);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #85D8CE, #26A69A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


overflow-y: hidden; /* Hide vertical scrollbar */
overflow-x: hidden; /* Hide horizontal scrollbar */




}



@-webkit-keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes dash {
  100% {
    stroke-dashoffset: 0;
  }
}


.
/* particle js */
canvas {
  display: block;
  vertical-align: bottom;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  /* background: #00356B; */
}



/* BUTTON */

.btn{

   
/* border-color: #9f1c32; */
 padding:10px 20px;
    /* font-size: 20px; */
    
     cursor: pointer;
margin:10px;
position: relative;
overflow:hidden;
}


            .btn1,.btn2{
               color:#fff;
               
            }


            .btn1:hover,.btn2:hover {
               color:white;
               
            }


.btn::before{
content:"";
position: absolute;
left: 0;
width: 100%;
height: 0%;
background: #810101;
z-index: -1;
transition: 0.8s;
}

.btn1::before,.btn2::before{
top:0;
border-radius:0 0 50% 50%;
}


.btn1::before,.btn2::before{
height:0%
}

.btn1:hover::before,.btn2:hover::before{
height:180%;
}

.card{
  border-radius:1.2rem;


  /* background: #870000;  fallback for old browsers */
/* background: -webkit-linear-gradient(to right, #370704, #870000);  Chrome 10-25, Safari 5.1-6 */
/* background: linear-gradient(to right, #370704, #870000); W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




-webkit-box-shadow: 10px 10px 23px -12px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 23px -12px rgba(0,0,0,0.75);
box-shadow: 10px 10px 23px -12px rgba(0,0,0,0.75);

}

.card-header:first-child{
      border-radius: 1.25rem 1.25rem 0 0;
    }

.card-header{
  
    background: #870000;  
background: -webkit-linear-gradient(to right, #370704, #870000); 
background: linear-gradient(to right, #370704, #870000); 
}

.card-text{
     color:black;
     font-size:1.2rem;
     /* color:white; */
}

.card:hover{
 
}

</style>

</head>
<body >



<div onclick="developers()" id="particles-js"></div>

            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
              <h2 class="my-0 mr-md-auto font-weight-normal"><img src="assets/logo/med.png" style="height:8rem;width:18rem;" alt=""><font color = "white"></font></h2>
              <nav class="my-2 my-md-0 mr-md-3">


              <a class="btn btn1" href="index.php"><b>LOGIN</b></a>
                <a class="btn btn1" href="downloads.php"><b>DOWNLOADS</b></a>
                <!--  <button class=" btn btn2" type="button" onclick="window.location.href='ChangePassword';" margin-left:2rem><b>Change Password</b></button>
                        <button class=" btn btn1"  type="submit" style=" margin-left: 5px"><b>Logout</b></button> -->
              </nav>
            </div>


<BR>
<div class="row">

              <div class="col sm-12">
              <div class="card" style="margin-left:0.8rem;">
                <div class="card-header" style="color:white; font-size:1.1rem;">
              <b> ICE FOR CLINICAL TRIALS & BABE</b>
                </div>
                <div class="card-body">
                
                  <p class="card-text">The Institutional Ethics Committees (IECs) are reconstituted in compliance with the requirements laid down in the “New 
                  Drugs and Clinical Trials Rules, 2019” [G.S.R.227(E), Ministry Of Health And Family Welfare, Department of Health and Family 
                  Welfare; Notification dated 19th March, 2019].
                  </p>
                  
                </div>
              </div>
              </div>

              <div class="col sm-12">
              <div class="card">
                <div class="card-header" style="color:white;font-size:1.1rem;">
                <b>IEC FOR BIOMEDICAL & HEALTH RESEARCH </b>
                </div>
                <div class="card-body">
                
                  <p class="card-text">The functioning of the IECs is guided by the guidelines for Good Clinical Practice (GCP), ethical principles set forth in the 
                  Declaration of Helsinki and the “National Ethical Guidelines for Biomedical and Health Research Involving Human Participants, 
                  2017” by the Indian Council of Medical Research.


              </p>
                  
                </div>
              </div>
              </div>


            <div class="col sm-12">
            <div class="card" style="margin-right:0.8rem; height:auto;">
              <div class="card-header" style="color:white;font-size:1.1rem;">
              <b>INSTITUTIONAL ANIMAL ETHICS COMMITTEE</b>
              </div>
              <div class="card-body">
                
                <p class="card-text">The IAEC is constituted as per the guidelines of Committee for the Purpose of Control and Supervision of Experiments on 
                Animals (CPCSEA), Ministry of Fisheries, Dept. of Animal Husbandry & Dairying, Govt. of India.The animal house is registered vide 1638/PO/Re/S/12/CPCSEA


            </p>
                
              </div>
            </div>
            </div>

</div>


              <div class="jumbotron fluid-jumbotron fixed-bottom" style="margin-bottom: 0px; background-color: black; color: white; 
                              font-family: 'Montserrat', sans-serif; max-width: 100%; height:18% ;padding-top:10px; margin-left: 0px; margin-right: 0px;">
                          <center><div class="row">
                              <div class="col" style="font-style:oblique; font-size:0.7rem;">
                                  <i>Developed By
                                  Students of  <a href="https://www.rait.ac.in" title="Ramrao Adik Institute of Technology" target="blank" style="color:white;">RAIT</a><br><br>
                                  Shashikant Prajapati,Rupak Dey,Nikhil Mhatre <br> 
                                  Sushil Dubey, Aishwarya Anand<br>
                                  Ojaswi Deshmukh, Sharvay Chavan<br>
                                  Sahil Chavan,Kaustubh Bhure</i>
                              </div>

                              <div class="col">
                              <!-- <a href="https://www.rait.ac.in" title="Ramrao Adik Institute of Technology" target="blank">    <img src="Assets/logos/rait.png" style="height:35%;" /></a> -->
                              </div>

                              <div class="col" style="font-style:oblique; font-size:0.7rem;">
                                <i> Under the guidance of:<br><br>
                                  Dr. Vaibhav Narawade<br>Ms. Smita Bhoir</i>
                              </div>
                          </div></center>
              </div>

</div>

   
<script src='https://cldup.com/S6Ptkwu_qA.js'></script>
<script id="rendered-js">
// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 105,
      "density": {
        "enable": true,
        "value_area": 700 } },


    "color": {
      "value": "#000000" },

    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000" },

      "polygon": {
        "nb_sides": 5 } },


    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false } },


    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false } },


    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#000000",
      "opacity": 0.4,
      "width": 1 },

    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200 } } },



  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab" },

      "onclick": {
        "enable": true,
        "mode": "push" },

      "resize": true },

    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1 } },


      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3 },

      "repulse": {
        "distance": 200,
        "duration": 0.4 },

      "push": {
        "particles_nb": 4 },

      "remove": {
        "particles_nb": 2 } } },



  "retina_detect": true });

    </script> 
</body>
</html>
