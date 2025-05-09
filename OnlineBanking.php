<!DOCTYPE html>
<html>
    <head>
        <title>Online Banking</title>
        <style>
                     
            
            .header ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #d7c1c1;                
                position:fixed;
                top: 0;                
                width: 100%;             
            }
            .header li {
                float: left;   
            }
            header img{
                float: right;
            }
            .header li a {
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                margin-bottom: -15px;
            }
                
            .header li a:hover:not(.active) {
                background-color: black;
                color: aliceblue;
            }
            .header .active {
                background-color: greenyellow;
            }
            .bankname{
                text-align: center;
                padding: 10px;
            }
            /*------- Home ------*/
            #home ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            #home li {
                float: left;
            }

            #home .dropbtn, li a {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            #home .dropdown:hover .dropbtn ,li a:hover {
                background-color: red;
            }

            #home .dropdown li {
                display: inline-block;
            }

            #home .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            #home .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            #home .dropdown-content a:hover {background-color: #f1f1f1;}

            #home .dropdown:hover .dropdown-content {
                display: block;
            }
            .Home{
                            
                padding: 10px;    
                margin-top: 50px;
                display: flex;
                justify-content: space-between;
                background-color: rgb(154, 202, 238);
                height: auto;
            } 
            .Home1 h2{
                width: 900px;
                text-align: center;
                font-size: 40px;
            }
            .Home1 table {
                width: 1000px;
                text-align: center;
                border-collapse: collapse;
            }
            .Home1 th{
                padding: 10px;
            }
            .Home1 p{
                width: 900px;
                text-align: center;
                color: blue;
            }

            /*----------About us----------*/
            #aboutus{
                padding-top: 50px;
                padding-bottom: 50px;
                
            }
            .table-bordered{
                border-collapse: collapse;             
                color: white;
                width: 10cm;               
            }
            .table-bordered .button{
                background-color: rgb(74, 163, 241);
                border-radius: 15px;
                padding: 10px;
                padding-left: 20px;
                padding-right: 20px;
            }
            .table-bordered td p a{
                color: white;
                text-align: left;
            }
            .table-bordered td p{
                margin-left: 0.5cm;
            }
            .table-bordered td{
                border-style: solid;
                border-color: rgb(211, 220, 211); 
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            /*------Security-----*/
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
                padding: 10px 1px;
                box-sizing:border-box;
                
            }
            .security-coloumn h1{
                background: #d1cccc;
                font-size: medium;
                
            }
            .security-coloumn ul li{
                text-align: left;
            }

            /*------Contact------*/
            #contact{
                width: 100%;
                margin: auto;
                text-align: center;
                padding-top: 10px;  
            }
            #contact h1{
                padding: 0px;

            }
            #contact p{
                color: rgb(184, 44, 44);
                font-size: 14px;
                font-weight: 300;               
                padding: 0px;
            }
            .contact-items{
                margin-top: 10px;
                display: flex;
                justify-content: space-between; 
                margin-left: 70px; 
                margin-right: 70px; 
            }
            .contact-item{
                flex-basis: 31%;
                background: #f9f9f9;
                border-radius: 10px;
                margin-bottom: 5%;
                padding: 20px 12px;
                box-sizing:border-box;
                
            }
            #contact h3{
                text-align: center;
                font-weight: 600;
                margin: 10px 0;
            }
            #contact  .icon img{
                height: 30px;
                width: 30px;
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
            .row{
                margin-left: 250px;
                margin-right: 250px;  
                margin-top: 30px;  
                
                display: flex;
                justify-content: space-between;
            } 
            .link-container{
                       flex-basis: 20cm;   
                                      
            }
            
            
            

        </style>
    </head>
    <body style="background: #f9f9f9;">
        <!-- Header -->
        <section id="header">
                <div class="header">
                    <ul>
                        <li style="float: right; background-color: white;"><a><img src="header-logo.png" alt="CBI" style="width:170px;height:40px;"></img></a></li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#aboutus">Documents</a></li>
                        <li><a href="#security">Security</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
            <br>
            <br>
            <div class="bankname">
                <h1><img src="home1.png" alt="CBI" style="width:20px;height:20px;">Central Bank of India</h1>
            </div>
        </section>
        <!-- Home -->
        <section id="home">
            <ul>                 
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Personal</a>
                    <div class="dropdown-content">
                        <a>Personal Banking</a>
                        <a>Our accounts</a>
                        <a>Borrowing</a>
                        <a>Cards</a>                            
                    </div >
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">business</a>
                    <div class="dropdown-content">
                        <a>bussiness Banking</a>
                        <a>checking</a>
                        <a>loans</a>
                        <a>Cards</a>                            
                    </div >
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Corporate & Government</a>
                    <div class="dropdown-content">
                        <a>Product and services</a>
                        <a>Financing solutions</a>
                        <a>Investiment Services</a>
                        <a>Security</a>                            
                    </div >
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Mortgage Center</a>
                    <div class="dropdown-content">
                        <a>mortgage Center</a>
                        <a>Purchase your home</a>
                        <a>Home Equity</a>
                        <a>Rates and fees</a>                            
                    </div >
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Learning Center</a>
                    <div class="dropdown-content">
                        <a>Trending</a>
                        <a>Budget And Save</a>
                        <a>Life Events</a>
                        <a>Credit and debit</a>                            
                    </div >
                </li>               
            </ul>
            <div class="Home">
                <div class="Home1">
                    
                    <h2><a><img src="home1.png" alt="CBI" style="width:30px;height:30px;"></a>  Online Banking</h2>
                    <table border="1px solid black">
                        <tr>
                            <th><a href="login.php">Retail Banking</a></th>
                            <th><a href="admin_login.php">Corporate Bnaking</a></th>
                        </tr>
                    </table>
                    <p>
                        “INR Remittance : In view of merger of various banks in India,<br>
                        please recheck the IFSC codes of existing beneficiaries and in case of any change,<br>
                        please re-register beneficiaries with new IFSC codes and account numbers. <br>
                        Using old inactive IFSC codes may result in return of the INR remittances.”
                    </p>
                </div>
                <div class="Home2">
                    <a ><img src="home.png" alt="CBI" style="width:500px;height:250px;"></img></a>
                </div>                
            </div>
        </section>
        <!-- About us -->
        <section id="aboutus">
            <div class="inner-page-content">
                <table class="table-bordered" >
                    <tbody>
                        <tr>
                            <td style="color: black;"><p>DOCUMENTS</p></td>
                        </tr>
                        <tr>
                            <td><p><a class="button"  href="#" target="_blank">User Registration Process</a></p></td>
                        </tr>
                        <tr>
                            <td><p><a class="button" href="#" target="_blank">USD Local Wires</a></p></td>
                        </tr>
                        <tr>
                            <td><p><a class="button"  href="#" target="_blank">USD INTERNATIONAL REMITTANCES</a></p></td>
                        </tr>
                        <tr>
                            <td><p><a class="button"  href="#" target="_blank">Pulling Funds through ACH</a></p></td>
                        </tr>
                        <tr>
                            <td><p><a class="button"  href="#" target="_blank">INR Remittance Process</a></p></td>
                        </tr>
                    </tbody>
                </table>                
            </div>
            

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
                            your personal information,password or one time SMS (high security) password. Any such e-
                            mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through 
                            Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on 
                            report.phishing@cbi.co.in if you receive any such email/SMS or Phone call. Please lock your user 
                            access immediately, if you have accidentally revealed your credentials.Click here to lock.</li>
                    </ul>

                </div>

            </div>


        </section>
        <!---Contact us--->
        <section id="contact" >
                <h1 class="section-title">Contact info</h1>
                <p> contact us any time</p>
                <div class="contact-items" >
                    <div class="contact-item" style="background: #ffffff;">
                        <h3>Phone<div class="icon"><img src="https://img.icons8.com/color/2x/apple-phone.png" /></div></h3>
                        <a href="6304712034"><p>+916304712034</p></a>
                    </div>
                    <div class="contact-item" style="background: #ffffff;">
                        <h3>Email<div class="icon"><img src="https://img.icons8.com/color/2x/gmail--v2.gif" /></div></h3>
                        <a href="#"><p>atmakuriram2003@gmail.com</p></a>
                    </div> 
                    <div class="contact-item" style="background: #ffffff;">        
                        <h3>Address<div class="icon"><img src="https://img.icons8.com/color/2x/address--v2.gif" /></div></h3>
                        <a href="#"><p>piduguralla,palanadu, Andhrapradesh</p></a>
                    
                    </div>
                </div>

        </section>
        <!----footer---->
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