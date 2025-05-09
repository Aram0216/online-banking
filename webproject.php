<!DOCTYPE html>
<html>
    <head>
        <title>Online Banking</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
                scroll-behavior: smooth;
                box-sizing: border-box;
            }
            #header{
                min-height: 100vh;
                width: 100%;
                background-image: url(https://cdn.i-scmp.com/sites/default/files/styles/landscape/public/d8/images/methode/2020/08/14/cb84b584-db08-11ea-b1d3-42d340dc91a3_image_hires_125145.jpg?itok=JHwrxSso&v=1597380713);
                background-position: center;
                background-size: 100% 100%;
                position: relative;
            }
            #header h1{
                font-size: 36px;
                color: #fff;
            }
            #header h1 span{
                font-size: 36px;
                color: #f44336;
            }
            nav{
            
                display: flex;
                padding: 2% 6%;
                justify-content: space-between ;
                align-items: center;
            }

            .nav-links{
                position: fixed;
                flex: 1;
                text-align: right;
                margin-left: 930px;
            }
            .nav-links ul li{
                list-style: none;
                display: inline-block;
                padding: 8px 14px;
                position: relative;
                
            }
            .nav-links ul li a{
                color: rgb(237, 174, 58);
                text-decoration: none;
                font-size: 20px;
                transition: 0.6s;
                
            }
            .nav-links ul li a:hover{
                background-color :#cac9c9;
                color: black;    
            }
            .nav-links ul li ::after{
                content: '';
                width: 0%;
                height: 2px;
                background: #f44336;
                display: block;    
                transition:0.5s;
            }
            .nav-links ul li :hover::after{
                width:100%;
                
            }
            .text-box{
                width: 90%;
                color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                text-align: left;
            }
            .text-box h1{    
                font-size: 62px;
            }
            .text-box p{
                padding-bottom: 10px;
            }
            .btn{
                display: inline-block;
                text-decoration: none;
                color: #fff;
                border: 1px solid #fff;
                padding: 10px 34px;
                font-size: 13px;
                background: transparent;
                position: relative;
                cursor: pointer;
            }
            .btn:hover{
                border: 1px solid #f44336;
                background: #f44336;
                transition: 1s;
            }


            .projects{
                width: 100%;
                margin: auto;
                text-align: center;
                padding: 10px;
                padding-top: 15px;
            }
            .row{
                
                display: flex;
                justify-content: space-between; 
                margin-left: 0px; 
                margin-right: 0px; 
            }
            .col{
                flex-basis: 32%;
                border-radius: 10px;
                margin-bottom: 30px;
                position: relative;
                overflow: hidden;

            }
            .col img{
                width: 100%;
                display:block;
            }
            .col p {
                color: black;
                font-size: medium;
                font-weight: 300px;
            }
            .layer{
                background: transparent;
                height: 100%;
                width: 100%;
                position: absolute;
                top: 0;
                left: 0;
                transition: 0.5s;
            }
            .layer:hover{
                background: rgba(24, 34, 75, 0.7);   
            }
            
            .layer h3{
                width: 100%;
                font-weight: 500;
                color: #fff;
                font-size: 15px;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                position: absolute;
                opacity: 0;
                transition: 0.5s;
                

            }
            .layer:hover h3{
                bottom: 49%;
                opacity: 1;
            }
            .button{
                background-color: red;
                color: #fff;
                border-radius: 15px;
                padding: 5px;
                padding-left: 20px;
                padding-right: 20px;
                border: 1px solid #fff;              
            }
            .button:hover{
                background-color: #fff;
                color: black; 
            }
            .layer h3 ul li {
                padding: 10px;                
            }
            
            .layer a:link {
                text-decoration: none;
            }
            .layer a:visited {
                text-decoration: none;
                
            }
            /* -----------security------------ */
            #security{
                width: 100%;
                margin: auto;
                text-align: center;
                padding-top: 10px;

            }
            
            .security-row{
                margin-top: 10px;
                display: flex;
                justify-content: space-between; 
                margin-left: 10px; 
                margin-right: 10px; 
               
            }
            .security-coloumn{
                flex-basis: 50%;
                padding: 10px 10px;
                box-sizing:border-box;
                
            }
            .security-coloumn h1{
                background: #d1cccc;
                font-size: medium;
                
            }
            .security-coloumn ul li{
                text-align: left;
            }
            /*------footer------*/
            #footer1 p{
                margin: 0px;
                padding: 0px;
                background-color: #0b0575;
            }
            #footer {                
                width: 100%;
                padding: 2px;
                background-color: rgb(244, 234, 234);
            }
            #footer .row{
                margin-left: 250px;
                margin-right: 250px;  
                margin-top: 30px;  
                
                display: flex;
                justify-content: space-between;
            } 
            #footer .link-container{
                       flex-basis: 20cm;   
                                      
            }

        </style>
    </head>
    <body>
        <section id="header">
            <nav>
                <a href = "webproject.html"><h1><span>O</span>nline<span>B</span>anking</h1></a>
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li ><a href="#header">Home</a></li>
                        <li><a href="#projects">Our program</a></li>
                        <li><a href="#security">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="login.php">login</a></li>
                    </ul>
                </div>                
            </nav>
            <div class="text-box"> 
                <h1> Welcome to Online Banking</h1>
                <p>
                    if your are new to online banking then register here
                </p>
                <a href="register.php" class ="btn">Register</a>
            </div>
        </section>
        <section id="projects">
        <section class="projects">
            <div class="row">
                <div class="col">
                    <p><i>Loan</i></p>
                    <img src="https://media.gettyimages.com/id/955530262/photo/loan-text-written-on-wooden-block-with-stacked-coins.jpg?s=612x612&w=0&k=20&c=twM90eG_eV4LAJDE39CyKs6U0GorYTQ7N3VTf8rJZbg=">
                    <div class="layer">
                        <h3>
                            <ul>
                                <li><a class="button"  href="#" target="_blank">Personal loan</a></li>
                                <li><a class="button"  href="#" target="_blank">Home loan</a></li>
                                <li><a class="button"  href="#" target="_blank">Vechicle loan</a></li>
                                <li><a class="button"  href="#" target="_blank">Educational loan</a></li>
                            </ul>
                        </h3>
                    </div>    
                        

                    
                </div>
                <div class="col">
                    <p><i>Digital Banking </i></p>
                    <img src="https://media.istockphoto.com/id/1334591614/photo/man-using-digital-tablet-online-connect-to-internet-banking-currency-exchange-online-shopping.jpg?b=1&s=170667a&w=0&k=20&c=uVgjqk6ZUldPjFOUX35vNMUzJZ6tz_IDV7apr1AWhII=">
                    <div class="layer">
                        <h3>
                            <ul>
                                <li><a class="button"  href="#" target="_blank">Internet Banking</a></li>
                                <li><a class="button"  href="#" target="_blank">Self Banking</a></li>
                                <li><a class="button"  href="#"  target="_blank">ATM Banking</a></li>
                                <li><a class="button"  href="#" target="_blank">Mobile Banking</a></li>
                            </ul>
                        </h3>
                    </div>    
                        

                    
                </div>
                <div class="col">
                    <p><i>Deposit </i></p>
                    <img src="https://cdn.pixabay.com/photo/2017/09/07/08/54/money-2724241__480.jpg">
                    <div class="layer">
                        <h3>
                            <ul>
                                <li><a class="button"  href="#" target="_blank">Salary Account</a></li>
                                <li><a class="button"  href="#" target="_blank">Current Account</a></li>
                                <li><a class="button"  href="#" target="_blank">Saving Account</a></li>
                                <li><a class="button"  href="#" target="_blank">Fixed Deposit</a></li>
                            </ul>
                        </h3>
                    </div>    
                </div>
            </div>
        </section>
        </section>
        <section id="aboutus">
            
        </section>
        <!--Security-->
        <section id="security" style="background: #ffffff; padding: 20px;">
            <h1 style="color: rgb(68, 172, 227);">For your own security</h1>
            <div class="security-row">
                <div class="security-coloumn">
                    <h1>Please ensure the following before logging into OnlineCBI</h1>
                    <ul>
                        <li>The URL in your browser address bar begins with "https".</li>
                        <li>The address or status bar displays the padlock symbol.</li>
                        <li>Click the padlock to view and verify the security certificate</li>
                        <li>The address bar turns green indicating that the site is secured with an SSL Certificate that meets the 
                            Extended Validation Standard.</li>
                        <li>(SSL is compatible for IE 7.0 and above, Mozilla Firefox 3.1 and above, Opera 9.5 and above, Safari 
                            3.5 and above, Google Chrome).</li>
                    </ul>

                </div>
                <div class="security-coloumn">
                    <h1>Beware of Phishing attacks</h1>
                    <ul>
                        <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your 
                            personal and confidential information.</li>
                        <li>State Bank or any of its representative never sends you email/SMS or calls you over phone to get 
                            your personal information,password or one time SMS (high security) password. </li>    
                        <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through 
                            Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on 
                            report.phishing@cbi.co.in if you receive any such email/SMS or Phone call. Please lock your user 
                            access immediately, if you have accidentally revealed your credentials.Click here to lock.</li>
                    </ul>

                </div>

            </div>


        </section>
        <section id="services">
            
        </section>
        <section id="footer1">
            <p>border</p>
        </section>
        <section id="footer">
            
            <div class="row">
                
                <div class="link-container">
                    <ul1 class="list-style-none">
                        <li1><a href="/home1">Home</a></li1>                
                        <li1><a href="/careers">|Careers</a></li1>                               
                        <li1><a href="/disclaimer">|Disclaimer</a></li1>
                        <li1><a href="/privacy-policy">|Privacy Policy</a></li1>
                    </ul1>
                </div>            
                <div class="link-container">
                    This website is intended to provide an overview of the New York branch. 
                    It is not a solicitation for the bank’s services. 
                    Customers can use the links provided herein to take them to separate pages 
                    detailing services which they can avail by clicking on the link
                    
                </div>                             
            </div>              
            <p1>Copyright © 2023 Ram. All rights reserved</p1>
        </section>
    </body>
</html>
