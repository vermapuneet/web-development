<?php
include("class/users.php");
$cat=new users;
extract($_POST);
$category=$cat->cat_show();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

	
<!--//end-animate-->

<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<meta name="keywords" content="login page, test series, quiz, upsc free test series, upsc science test, mock exam, solved past papers, previous papers">
    <meta name="author" content="upscfever.com">

    <title>Test Series Login - UPSC FEVER</title>
    <meta property="og:url" content="http://upscfever.com/upsc-fever/tests/web/signup.html">
    <meta property="og:title" content="Test Series Login - UPSC FEVER">

  <meta property="og:description" content="India's best website and mobile app for competitive exam 
preparation of UPSC, MPSC, SSC, SBI, RBI, IBPS, NDA, CDS, GRE, GMAT, CAT, CET, NMAT, UGC NET, CBSE Teacher eligibility test, TGT, PGT. Best self study portal recommended by toppers and students which has free test series, current affairs, NCERT books and video tutorials from best teachers. Notes are available in hindi and marathi. Science Test Series
Indian Polity Test Series
Indian Economy Test Series
India Yearbook Test Series
Environment and Biodiversity Test Series
Aptitude Test Series
Indian and World Geography Test Series
History and Culture Test Series for government exams and general knowledge. Login now." />


<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88031717-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- END -->



<meta name="description" content="India's best website and mobile app for competitive exam 
preparation of UPSC, MPSC, SSC, SBI, RBI, IBPS, NDA, CDS, GRE, GMAT, CAT, CET, NMAT, UGC NET, CBSE Teacher eligibility test, TGT, PGT. Best self study portal recommended by toppers and students which has free test series, current affairs, NCERT books and video tutorials from best teachers. Notes are available in hindi and marathi. Science Test Series
Indian Polity Test Series
Indian Economy Test Series
India Yearbook Test Series
Environment and Biodiversity Test Series
Aptitude Test Series
Indian and World Geography Test Series
History and Culture Test Series for government exams and general knowledge. Login now.">


<meta name="yandex-verification" content="1a73167551cce21e" />
<meta name="p:domain_verify" content="95ba2393cbab4762aa39b7b0b075d2ec"/>
<meta property="fb:profile_id" content="100013516504481" />
<meta property="og:rich_attachment" content="true" />
<meta property="og:ttl" content="345600" />
<meta property="og:restrictions:age" content="13+" />
<meta property="fb:app_id" content="227514101012754" />

<link href="https://play.google.com/store/apps/details?id=com.upscfever.upscfeverapp" rel="alternate">
<meta name="twitter:app:id:googleplay" content="com.upscfever.upscfeverapp" />
    <meta name="twitter:app:name:googleplay" content="UPSCFever" />
    <meta name="twitter:app:country" content="in">
<meta property="og:type" content="article"/>
<meta content='http://upscfever.com/upsc-fever/assets/images/logo.png' property='og:image'/>
<meta name="application-name" content="UPSC Fever"> 
<meta name="twitter:card" content="app"/>
<meta name="twitter:site" content="@upscfever"/>
<meta name="twitter:image" content="http://upscfever.com/upsc-fever/assets/images/logo.png"/>
<meta name="twitter:creator" content="@upscfever"/>
<meta property="article:published_time" content="2017-01-25T05:30:09-05:00"/>
<meta property="article:modified_time" content="2017-01-25T05:30:09-05:00"/>
<meta property="og:updated_time" content="2017-01-25T05:30:09-05:00"/>


<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "url": "http://upscfever.com/",
    "name": "UPSCFever",
    "description": "India's best website and mobile app for competitive exam 
preparation of UPSC, MPSC, SSC, SBI, RBI, IBPS, NDA, CDS, GRE, GMAT, CAT, CET, NMAT, UGC NET, CBSE Teacher eligibility test, TGT, PGT. Best self study portal recommended by toppers and students which has free test series, current affairs, NCERT books and video tutorials from best teachers. Notes are available in hindi and marathi. Science Test Series
Indian Polity Test Series
Indian Economy Test Series
India Yearbook Test Series
Environment and Biodiversity Test Series
Aptitude Test Series
Indian and World Geography Test Series
History and Culture Test Series for government exams and general knowledge. Login now.",
    "sameAs": [
        "https://www.facebook.com/upsc.fever",
        "https://plus.google.com/b/112902461823802274531/?pageId=112902461823802274531",
        "https://www.linkedin.com/in/upsc-fever-6553a5135/"
    ],
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "telephone": "+91 9619997797",
            "contactType": "customer service"
        }
    ],
    "potentialAction": {
        "@type": "SearchAction",
        "target": "http://upscfever.com/upsc-fever/index.html?q={search_term}",
        "query-input": "required name=search_term"
    },
        "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.4",
        "reviewCount": "8900"
        }
}
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6814858165012889",
    enable_page_level_ads: true
  });
</script>
<script>
            $(document).ready(function(){
              
                $("#footer").load("footer.php");
               
            });
          
        </script>
</head> 

  <body>

  
	<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<h1>UPSCFEVER</h1>
						<span>Test-Series</span>
					</a>
				</div>
						
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
				<div class="profile_details">	
				<div class="user-name">
					<p>Admin    &nbsp;    <font color="black"> | </font> </style></p>			
										</div>
					</div>			
				</div>
				
				<div class="profile_details">		

				<div class="user-name">
									<p><a href="logout.php">Logout &emsp;</a></p>
										
									</div>
				</div>
				
				
			</div>								
				
				
				
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		
		<div class="main-content">
		
		
		<!-- main content start-->
		<div id="page-wrapper">
		<!-- //header-ends -->
       <div class="main-page signup-page">
	   <h3 class="title1">Add Question</h3>
       

         <div class="sign-up-row widget-shadow">
         <div class="sign-u">
          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
				echo "<i><P><b>Data inserted successfully !</b></p></i>";
			?>
			
	<form method="post" action="add_quiz.php">
	
		<div class="form-group">
		  <label for="text">Question</label>
		  <input type="text" class="form-control" name="qus" placeholder="Enter question">
		</div>
		<div class="form-group">
		  <label for="text">option1</label>
		  <input type="text" class="form-control"  name="op1"  placeholder="Enter option1">
		</div>
		<div class="form-group">
		  <label for="text">option2</label>
		  <input type="text" class="form-control"  name="op2" placeholder="Enter option2">
		</div>
		<div class="form-group">
		  <label for="text">option3</label>
		  <input type="text" class="form-control"  name="op3" placeholder="Enter option3">
		</div>
		<div class="form-group">
		  <label for="text">option4</label>
		  <input type="text" class="form-control"  name="op4" placeholder="Enter option4">
		</div>
		<div class="form-group">
		  <label for="pwd">Answer</label>
		  <input type="text" class="form-control"  name="ans" placeholder="Enter answer">
		</div>
		<div class="form-group">
	
		
		<select class="form-control" id="sell" name="cat">
		<option value="" >choose category</OPTION>
		
		
		<?php
	
		foreach($category as $c)
		{
			
			echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
			
		}
	   ?>
	   </select>
</div>
   
	<center>	<button type="submit" class="btn btn-warning">Submit</button></center>
  </form>
  
              </tbody>
            </table>
          </div>
		  </div>
		 </div>
        </div>
     </div>
   </div>
   
  </body>
</html>
