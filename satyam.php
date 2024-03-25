<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MedEasy</title>
    <link rel="stylesheet" href="stylehome.css">

    <style>
        
        body {
            background-color: whitesmoke;
            margin:0px;
            padding:0px;
            
        }
        .navi
        {
            margin-top: 0%;
            width:100%;
            display:flex;
            height: 1.8cm;
            background-color: rgba(255, 255, 255, 0.65);
            position:fixed;
            z-index: 2;
        }
        .img2
        {
            height: 21cm;
            width:100%;
            background-image: url('1330529.png'); 
            background-size: cover;
            opacity:0.9;
            display:inline-block;
        }
        .img2::before
        {
            content: "";
            position: absolute;

            width: 100%;
            height: 21cm;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.8));
            pointer-events: none; /* Ensure the overlay doesn't interfere with mouse events */
        }
       
        a
        {
            text-decoration: none;
            margin-right:3%;
            margin-top: 1%;
            font-size: 22px;
            color:#000000;
        }

       

        section {
            max-width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            color: #4CAF50;
        }

        p {
            line-height: 1.6;
        }

        .clean-af-points {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            width:100%;
        }

        .clean-af-point {
            text-align: center;
            padding: 10px;
        }

        .aboutus3 {
            text-align: center;
        }

    </style>

</head>
<body>
    <div class="img2">
    <div class="navi" >
       
            <img src="med2.png" style="margin-right:0%; padding-right:0%; width:5%;">

        <b style="font-size:42px; font-weight:bold; margin-left:2%; margin-right:45%;">MedEasy</b>

      
            
                <a href="satyam.php">HOME</a>
            
            
                <a href="#about2">ABOUT US</a>
            
        
                <a href="#faqs2">FAQs</a>
          
           
                <a href="#contacts2">CONTACT US</a>
            
         
                <a href="login.php">LOGIN</a>
          
       
    </div>
    </div>
    

    <section class="nigganigga">
        <h2 id=about2 >About Us</h2>
        <p id=aboutus3>At MedEasy, we actually care.</p>

        <div class="clean-af-points">
            <div class="clean-af-point">
                <h3>Daily Reminders</h3>
                <p>Our platform sends a reminder to 
                <br>
                you to take your medicine according to 
                <br>
                the given schedule.</p>
            </div>

            <div class="clean-af-point">
                <h3>Meds Tracking</h3>
                <p>Track the medicines you are consuming.</p>
            </div>

            <div class="clean-af-point">
                <h3>Refill Reminders</h3>
                <p>You will be reminded when you are 
                    <br>
                    about to run out of stock.</p>
            </div>
        </div>
    </section>

    <br>
    <br>
  
<h2 id=faqs2>Frequently Asked Questions</h2>

<br>
<br>

<div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol viewBox="0 0 24 24" id="expand-more">
      <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
    <symbol viewBox="0 0 24 24" id="close">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
    </symbol>
  </svg>
</div>

<details>
  <summary>
    How does this website help?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>Many times patients forget whether or not they have taken certain 
    medicines or totally forget to take their medicines. MedEasy solves this
    problem by creating a medicine tracker which tells the user about the 
    frequency of medicine and also its expiry date. Users can also enter 
    the medicine they have already taken so that they dont take the same 
    medicine more than once. </p>
</details>

<details>
  <summary>
    How to create a new account?
    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
  </summary>
  <p>You can create a new account by clicking on the register now button 
    present on the top right of this page. We will require your email ID 
    and a username to track your medicines.</p>
</details>

<details>
    <summary>
        How to add new medicines? 
      <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
      <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
    </summary>
    <p>To add new medicines, you have to first login and then on the 
        left side click on the Add Medicine button. A form will show up where 
        you have to fill the details about the medicine and then submit it.</p>
  </details>



    <br>
    <br>
  
   <!-- Contact Section -->
   <section class="section-bg" style="color: #000000;"  data-scroll-index="7">
    <div class="overlay pt-100 pb-100 ">
      <div class="container">
         <div class="row">
              <div class="col-lg-6 d-flex align-items-center">
                  <div class="contact-info">

                      <h2 id="contacts2">Have Any Questions?</h2>
                      <p>We're here to assist in Streamlining your Processes and Enhancing Efficiency</p>
                      <ul class="contact-info">
                          <li>
                            <div class="info-right">
                                <h4>+91 91100 91100<br>+91 91100 91111<br>info@example.com<br>123 Linking Road, MUMBAI</h4>
                            </div>
                          </li>
                      </ul>
                  </div>
              </div>
              </div>
         </div>
     </div>
        </div>
</section>
 
</body>
</html>