<?php

if (isset($_POST['submit'])) {
$Full_Name = $_POST['Full_Name'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Notes = $_POST['Notes'];

$from = 'Pitch and Toss Productions';
$to = 'nferrell557@gmail.com';
$subject = 'Subject';
$body = "Full Name: $Full_Name \n
         Email: $Email \n
         Phone Number: $Phone_Number\n




if (!$_POST['Full_Name']) {
    $errFullname = 'You Forgot Your Name';
}

if (!$_POST['Email']) {
    $errEmail = 'You Forgot Your Email';
}

if (!$_POST['Phone_Number']) {
    $errPhonenumber = 'Incorrect Phone Number';
}

if (!$errFullname && !$errEmail && !$errPhonenumber) {
    if (mail ($to, $subject, $body, $from)) {
        $result = '<div class="alert alert-success">Your Request Was Successfully Sent</div>'
    }
    else {
        $result = '<div class="alert alert-danger">Your Request Was Not Successfully Sent</div>'
    }
}
}

?>




<head>
    <link href="CeruleanBootstrap.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    

       <div style="text-align:center; -webkit-transition:all .2s ease-in-out; "> <h1 style=" text-align:center;">MobileSmith Prototype Request</h1>
        <h3 style=" text-align:center; ">Please Use This Form to Request a Proof of Concept App.</h3></div>
    <br />
   <div class="container">
     
       <div class="col-md-3"></div>
	   <div class="col-md-6">
		<div class="well">
        <form role="form" enctype="text/plain" action="" method="post">
            <br />
            <div class="form-group">
            <label for="companyName">Name of Company</label>
                <input name="Name_of_Company" type="text" required class="form-control" id="companyName"/>
            </div>

            <div class="form-group">
            <label for="websiteURL">Website URL</label>
                <input name="Website_URL" type="text" required class="form-control" id="websiteURL"/>
            </div>

            <div class="form-group">
            <label for="brandingGuidelines">Branding Guidelines</label>
                <input name="Branding_Guidelines" type="text" required class="form-control" id="brandingGuidelines"/>
            </div>

            <div class="form-group">
            <label for="dataLocation">Notes</label>
                <textarea id="dataLocation" class="form-control" name="notes">
                    Enter comments Here
                </textarea>
            </div>

           <input type="submit" class="btn btn-primary">


            


			</div>
         </form>
		 </div>
		 <div class="col-md-3"></div>
       </div>
      
    </div>
</body>
