<!DOCTYPE html>
<html>
    

	<head>
            
		
			
			
			<title>Charity</title>
			<link href="" rel="stylesheet">
			<link rel="stylesheet">
			<link rel="stylesheet" href="stys.css">

			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
    function AddReadMore() {
        //This limit you can set after how much characters you want to show Read More.
        var carLmt = 90
        // Text to show when text is collapsed
        var readMoreTxt = " ... Read More";
        // Text to show when text is expanded
        var readLessTxt = " Read Less";
 
 
        //Traverse all selectors with this class and manupulate HTML part to show Read More
        $(".addReadMore").each(function() {
            if ($(this).find(".firstSec").length)
                return;
 
            var allstr = $(this).text();
            if (allstr.length > carLmt) {
                var firstSet = allstr.substring(0, carLmt);
                var secdHalf = allstr.substring(carLmt, allstr.length);
                var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
                $(this).html(strtoadd);
            }
 
        });
        //Read More and Read Less Click Event binding
        $(document).on("click", ".readMore,.readLess", function() {
            $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
        });
    }
    $(function() {
        //Calling function after Page Load
        AddReadMore();
    });
    </script>
	</head>
	
    
	 
	 <nav>
	 	<ul>
	 		<li><a href="#" class="logo">ATOH<i class=" fa fa-arrow-down"></i></a></li>
	 		<li><a href="#">Home</a></li>
	 		<li><a href="#">Gallery</a></li>
	 		<li><a href="#">Donate</a></li>
	 		<li><a href="#">Contact</a></li>
	 		<li><a href="#">Services</a></li>
			
	 	</ul>
	 </nav>
	
	
	<!-- banner-->
	<section>	
	<header id="banner">
		
			
			<script type="text/javascript">
<!-->

var image1=new Image()
image1.src="event.jpg"
var image2=new Image()
image2.src="needy.jpg"
var image3=new Image()
image3.src="event4.jpg"
var image4=new Image()


//-->
</script>
</head>
<body>
<img src="event.jpg" name="slide" width="1300" height="450">
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
//-->
</script>
		</div>
	</header>
	
		
    


 <body>
 	<section id="project">
 		

    	<div class="title">
    	<div class="title-text">
    		<h1>RECENT EVENTS</h1>
    		
    	</div>
    	</div>
    	<div class="projects-container">
    		
			
				<div class="row">
					<div class="column">
    			
				<img src="marathon.jpg" width="400" height="220">
				<p class="addReadMore showlesscontent">
				The big one: this year marathon took place on 24th April with the title 'Uplift A Needy Child'.
				The main event sponsors include: Barclays Bank, Airtel Money, Safaricom and Sportpesa.The event’s 
				charity of the year is NSPCC.
				Under the Golden Donation scheme, charities could buy places for ksh 25,000 each and runners who
				took one of these places pledged to raise a six-figure sum. 
				The Multiple Sclerosis Society for example asked runners to raise at least Ksh 2000 and pay a Ksh 50 entry fee, while Breast Cancer Care asked a minimum sponsorship of Ksh 1,750, including a ksh50 entry fee.
				This scheme now includes more than 750 International charities with a total of 15,000 guaranteed places. 
				There is also a Silver Bond scheme which guarantees one entry place every five years. 
				Would-be runners for charity can search for charities with places through the Chartered Marathon site.
				</p>
			</div>
		</div>
			
			<div class="row">
			<div class="column">
		<img src="eventringtone.jpg" width="400" height="220">

 		<p class="addReadMore showlesscontent">
		Ringtone, a renowned gospel artiste held a successful charity event on Sunday 1st July at Blessed Generation Children’s Home in Nairobi. The home caters to approximately 110 orphans of different ages. This collaborative initiative between him and the ATOH charity organization aims to ease the difficulties faced by the vulnerable members of the society. Other partners were the county government and numerous individual well wishers.
		The event was graced by county officials from the ministry of tourism and trade and ministry of health. Also present was the former Nairobi governor. They helped in distributing the foodstuff to the children and also engaged them in lively fun activities. Other items such as rice, beans, bread, sodas, sugar, clothes and many others were also donated by wellwishrs who graced the event. Ringtone together with the officials present conducted short mentorship sessions with the kids to encourage them to make the best out of life.
		There was also a talent session by some aspiring entertainers at the home. They were coached by Ringtone on what they should do to be top entertainers like him. By the end of the day, Ringtone noticed that the kids are talented in music, dancing, comedy among others. To cap it all, all the officials present promised to make Blessed Generations children’s home their home and visit them often.
	
		</p>
	</div>
</div>
	
 		<div class="row">
 		<div class="column">
 		<img src="neyo.jpg" width="400" height="220">
 		<p class="addReadMore showlesscontent">
		One hundred kids screamed when R&B singer Ne-Yo walked in on their mentoring session last Saturday bearing gifts and a message of hope. "This is the first famous person I actually met," exclaimed Rose Mwikali, 16, with a huge smile. Mwikali, a sports fan, got a new football autographed by the R&B superstar. Mwikali is not Ne-Yo's typical fan -- she and the other teens at the party are part of Hope foster care system, all seeking a life free from neglect and abuse. For the past five years, Shaffer "Ne-Yo" Smith has visited underprivileged children across the globe, bringing toys, games, shoes and clothing as part of his charity's annual "giving tour. "Ne-Yo and his mother, who is president of his foundation, recently visited six cities in six days, bringing Christmas gifts to more than 3,000 kids at Boys and Girls clubs, group homes and in foster care. He also talks to the children about his personal experiences. "I grew up pretty much like you all," Ne-Yo told the teens at the central Hope foster home. "We didn't have a lot of anything ... there was no silver spoon in my mouth.	"A father of two himself, Ne-Yo said he sees his children in the faces of the kids he meets at these events. "It's hard for me to fathom any parent that would abandon their kids for whatever reason," said Ne-Yo, the father of a 1-year-old and a 3-month-old. "That doesn't compute with me. "The holiday party was organized by KCB foundation, which cares for 2,300 kids each year between the ages of 3 and 18, including victims of neglect, and others who witness domestic violence, or experience physical or sexual abuse, according to Marcie Dearth of Kids House.

		</p>
	</div>
</div>
	
	<div class="row">		
	<div class="column">
		<img src="images/donation1.jpg" width="400" height="220">
		<p class="addReadMore showlesscontent">
		The Christ Faith Foster Home at Frafraha near Nakuru and the All Nations Orphanage in  this Easter received support from ATOH in conjuction with BOND Savings & Loans Company (BOND) to help with the upkeep of the children. Two sets of lounge furniture, bags of rice, gallons of cooking oil, and other items worth GHC5,000 from BOND.
		The donation is an annual affair to give back to the less privileged in society especially during the festive seasons. This Easter, Christ Faith Foster Home requested a general facelift and furniture for the children’s lounge which the company was only too happy to oblige by providing two sets of lounge furniture.
		Assorted food items such as bags of rice, oils, cartons of noodles, cartons of sardine, drinks and toiletries amongst other items were also included in the donation to the two orphanages. The manager at the All Nations Orphanage in Nakuru expressed appreciation to BOND for putting smiles on the faces of the children.
		</p>
	</div>
</div>
	
 		<div class="row">
 		<div class="column">
 		<img src="needy2.jpg" width="400" height="220">
 		<p class="addReadMore showlesscontent">
		Standard Chartered Company has signed up to Operation Uplift a Child and volunteered to be a collection point for hopefully many hundreds of shoeboxes filled with toys and gifts, to be sent to children in refugee camps, orphanages, homeless shelters and impoverished neighbourhoods the world over.
		From next month (August) , Standard Chartered’s office in Apia, off Mombasa Road,  will be ‘box central’. Steve Purdy, managing director at Standard Chartered, said: “The shoebox appeal is easy, fun to take part in, and brings incredible joy to children who are in real poverty. “We’re hoping that lots of other local workplaces as well as schools and clubs will support us by filling shoeboxes with small gifts for children who have probably never received a present before.
		The appeal is run in conjunction with The Samaritans charity, and ends on November 18.
		</p>
	</div>
</div>
	
 		<div class="row">
 		<div class="column">
 		<img src="images/tree.jpg" width="400" height="220">
 		<p class="addReadMore showlesscontent">
		ATOH in conjunction with its partners, namely, Kenya Forestry Services (KFS) , Safaricom ,United Nation Environment Programme (UNEP) and Rotary clubs of Kenya , Sunflag Textiles ,Serena Hotels among others organized the second tree planting campaign dubbed "Plant Your Age ". In this campaign we called on Kenyans from all walks of life, to plant trees equivalent to their age every year and ensure that they grow to maturity as way of helping our beloved country attain 10% forest cover as articulated in vision 2030 .Other countries in Africa are also replicating the spirit of this campaign. The 2nd Plant Your Age campaign would run through out the entire short rainy season, April to June 2018 and would be replicated on October. Seedlings were being availed at a subsidized price of (KES 30) per seedling. Alternatively tree seedlings could be obtained from any of KFS tree nurseries country wide. The climax of this campaign was a tree planting event on 18th  June to be held at Nairobi National Park.
		</p>
	</div>
</div>
</div>
	
	</section>

</body>



    
<section id="projects">
	<section id="testimonial">
    	<div class="title">
    	<div class="title-text">
    		<h1>UPCOMING EVENTS</h1>
    	</div>
    	
    	</div>
   
 <div class="projects-container">
 	<!-- item-->
 	<article class="projects-item">
 		<img src="charity1.jpg">
 		<div class="img-text">
 		<h1>National Unity Conference</h1>
 		<h6>An event aimed at unifying all Kenyans regardless of the social status and social backgrounds</h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>

			<div class="footer-date">
				June 7, 2018
			</div>

		</div>
 		
 	</article>
	
 	<!-- new item-->
 	<article class="projects-item">
 		<img src="sponsors.jpg">
 		<div class="img-text">
 		<h1>Beneficiaries Awards Gala</h1>
 		<h6>Main focus will be on awarding the Beneficiaries of our Charity Program</h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>
			<div class="footer-date">
				June 8, 2018
			</div>

		</div>
 		
 	</article>
 	
 	<!--new item-->
 	<article class="projects-item">
 		<img src="neyo.jpg">
 		<div class="img-text">
 		<h1>Cultural Event</h1>
 		<h6></h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>
			<div class="footer-date">
				June 9, 2018
			</div>

		</div>
 		
 	</article>
 	
 	<!-- item-->
 	<article class="projects-item">
 		<img src="charityred.jpg" >
 		<div class="img-text">
 		<h1>Red Cross Partneship Forum</h1>
 		<h6>In collaboration with various charity programmes,the Red Cross are planning to hold a national fundraising forum at the Norfolk Hotel</h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>

			<div class="footer-date">
				June 10, 2018
			</div>

		</div>
 		
 	</article>
 	
 	<!-- item-->
 	<article class="projects-item">
 		<img src="charitycon.jpg">
 		<div class="img-text">
 		<h1>Nairobi Charity Conference</h1>
 		<h6>An event aimed at bringing together all residents within the city to create awareness on the need for providing an helping hand to the less fortunate</h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>

			<div class="footer-date">
				June 11, 2018
			</div>

		</div>
 		
 	</article>
 	
 	<!-- end of item--><!-- item-->
 	<!-- item-->
 	<article class="projects-item">
 		<img src="charitylead.png" >
 		<div class="img-text">
 		<h1>Charity Sponsors and Donors Forum</h1>
 		<h6>An event aimed at bringing together sponsors And donors who are willing to fund charity programmes in the future</h6>
		</div>
		<div class="img-footer">
			<div class="footer-icon">
			</div>

			<div class="footer-date">
				June 12, 2018
			</div>

		</div>
 		
 	</article>
</section>
     
	 <!-- filler section--> 
     	<section id="filler-contact">
     		<p><i>"We are constituted so that simple acts of kindness, such as giving to charity or expressing gratitude, 
			have a positive effect on our long-term moods. The key to the happy life, it seems, is the 
			good life: a life with sustained relationships, challenging work, and connections to community."</i><br><b>Paul Bloom</b></p>
			
			
     		<button type="button">Contact Us</button>
     		
     	</section><br/>
   
<!-- footer-->
<footer>
	<div class="footer">
	<div class="footer-text">
		
	<div class="footer-icons">
		
		
		<p>Posted by: Hege Refsnes</p>
  <p>Contact information: <a href="mailto:atoh@gmail.com">contactcare@atoh.com</a>.</p>
  <p>Copyright &copy; 2018. All rights reserved</p>
	</div>
</div>
	</div>
</footer>
