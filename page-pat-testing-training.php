<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>	
<!-- Styles -->
<style>
 
.banner {
    background-color: #050225;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    padding: 10px 0;
    align-items: center;
    overflow: hidden;
    position: relative;
}
.banner .bg-overlay 
{
    left: 65%;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
}
.banner .bg-overlay::before {
    content: "";
    background: linear-gradient(90deg, #050225, transparent);
    display: block;
    height: 100%;
    width: 400px;
    z-index: 1;
}
.banner .bg-overlay::after {
    background: #050225;
    bottom: 0;
    content: "";
    left: 0;
    opacity: .65;
    position: absolute;
    right: 0;
    top: 0;
}
.banner .bg-overlay::before, #top-banner .bg-overlay img
{
    bottom: 0;
    left: 0;
    position: absolute;
    top: 0;
}
.banner .st2
{
    font-weight:600;
}

.banner .bg-overlay img {
    object-fit: cover;
    object-position: center;
    display: block;
    height: 100%;
    transition: opacity .3s ease-in;
    width: 100%;
}
 .google-review-svg {
                width: 400px;
            }

            @media (max-width: 468px) {
                .google-review-svg {
                width: 300px;
            }
            }
.banner-content .banner-title
{
    font-size: 35px;
    font-weight: 700;
    margin-bottom: 20px;
    color: white;
}
.banner-content p 
{
  color:white;
}

#page .site-content
{
    flex-grow: 0;
}
.text-white
{
	color: white;
}
.text-black
{
	color: black;
}


.banner-content
{
	text-align: left;
    padding: 15px 0px;
    margin: 15px 0px;
}
.banner-content p 
{
	font-size: 18px;
	line-height: 1.6;
	font-weight: 400;
}

.card 
{
	margin: 10px 0px;
    padding: 0px;
    box-shadow: 0px 0px 10px #dfdfdf;
    border: none;
}
.card-section
{
	background: #f7f7f7;
}
.card .img
{
	padding: 0px;
    margin: auto;
    width: 40px;
    height: 40px;
}
.training-content h2
{
	color: #000;
    font-size: 30px;
    font-weight: 600;
    font-family: "Sen", Sans-serif;
}
.training-content span
{
	font-weight:700;
}
.training-content p 
{
	line-height: 30px;
  color: #000;
  font-family: "Sen", Sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding-right: 20px;
  text-align: justify;
}
.banner-image img 
{
	border-radius: 4%;
    border: 10px solid #bc254c30;
}
.card ul 
{
	list-style: none;
}
.card li
{
	position: relative;
	line-height: 35px;
}
.card li:before
{
	position: absolute;
    left: -1.5em;
    content: "\f058";
    font-family: 'FontAwesome';
    color: #AF1F47;
    margin-right: 10px;
    font-size: 18px;
}
.card .card-content
{
	flex: 1;
    padding: 25px;
	margin: 20px;
}
.card .card-content h2 a
{
	
	color: black;
}
.card .round-button
{
	color: white;
	padding: 12px 20px;
    
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
	background-image: linear-gradient(103deg, #D64A71 0%, #C52C52 100%);
}
.pb
{
    padding-bottom:30px;
}
.mb
{
    margin-bottom:30px;
}
.mt
{
    margin-top: 30px;
}
.pt 
{
    padding-top: 30px;
}
.card-section .card-title
{
     margin-bottom: 5px;
}
.phuk-venue-sec .card img
{
	height: 100%;
    border-radius: 40px;
    width: 100%;
    padding: 30px;
}
.phuk-venue-sec
{
	padding: 30px 0px;
    background: #f7f7f7;
}
.phuk-venue-sec p
{
    margin-top: 20px;
    font-size: 20px;
}
.phuk-venue-sec h2 
{
	color: #000;
    font-size: 36px;
    font-weight: 600;
    font-family: "Sen", Sans-serif;
    margin-bottom: 10px;
}
    .filters {
      text-align: center;
      margin-bottom: 20px;
    }
    .filters select {
        padding: 15px 30px;
    	margin: 0 10px;
    }
    .session {
      background: white;
      border-radius: 10px;
      padding: 25px;
	  margin: 20px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    .select-date-for-exam .date-location {
      background: #1a202c;
      color: white;
      text-align: center;
      padding: 15px 30px;
      border-radius: 8px;
      margin-right: 20px;
    }
    .info {
      flex: 1;
    }
    .info p {
      margin: 5px 0;
	  text-align: center;
    }
    .actions {
      text-align: right;
    }
    .btn {
      padding: 10px 15px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .book {
      background-color: #cd3960;
      color: white;
    }
    .details {
      background-color: #1a202c;
      color: white;
    }
	.select-date-for-exam .title
	{
        text-align: center;
	}
    .actions .btn:hover
   {
    background: #c5c5c5;
    color: white;
    }
    .phuk-venue-sec .card ul
    {
        margin-left: 0px;
        margin-bottom: 25px;
    }
    .card-section .card
    {
        margin: 8px;
        background: none;
        box-shadow: none;
    }
    #why-chose-us
    {
        line-height: 1;
    }
    .video-container 
    {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
    }

    .video-container iframe 
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }
    .ytp-title-link
    {
        font-weight:700;
    }
    .course-area .card
  {
    margin: 20px 0px;
    border-radius: 30px;
  }
    .location
    {
        color:#d3446b;
    }

  .pat-location {
    color: #d3446b;
    font-weight: bold;
    margin-bottom: 1.5rem !important;
    margin-top: 0.5rem !important;
  }

  .phuk-about-text h3
  {
    margin-bottom: 10px;
    color: #7a7a7a;
    font-weight: 500;
    font-size: 18px;
  }
  .PAT-img
  {
      padding: 10px 0px;
      width:100%;
      height:100%;
  }
  .PAT-img img
  {
      border-radius: 20px;
      max-width: 100%;
      height: 100%;
      box-shadow: 0px 0px 20px 10px #d1d1d1;
  }
  #phuk-review-sec 
  {
    padding: 35px 0px;
  }
  #phuk-review-sec h2 {
    text-align: center;
    margin-bottom: 60px;
    color: #000;
    font-size: 36px;
    font-weight: 600;
    font-family: "Sen", Sans-serif;
    }
    .google-carousel-reviews
    {
        padding: 0px 40px;
    }
    .no-js .owl-carousel, .owl-carousel.owl-loaded 
    {
    display: block;
    }
    .owl-carousel .owl-stage-outer 
    {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    }
    .la-reviews-carousel-section-wrap .owl-carousel .owl-nav {
    top: 0;
    position: absolute;
    bottom: 0;
    margin: auto;
    width: 100%;
    height: 100%;
}
.training-content ul
{
  margin: 30px 10px;
  padding:0;
}
.training-content ul li 
{
  list-style: none;
  line-height: 30px;
  font-size: 16px;
}
.training-content ul li i 
{
  color: #d23964;
  padding-right: 12px;
}
.training-with-us
{
  height: 100%;
  margin: 40px 15px;
}
.why-training-us
{
  padding: 25px;
  margin: 25px;
}
/* -------------------------------------- */
/*         Responsive Design (Mobile)     */
/* Applies to screens 768px and smaller   */
/* -------------------------------------- */

@media (max-width: 768px) { 
  
  .banner 
  {
    padding: 0%;
    background-position: unset;
  }

  .banner-content 
  {
    text-align: center;
    padding: 10px;
    margin: 10px 0;
  }

  .banner-content h3 
  {
    font-size: 22px;
  }

  .banner-content p 
  {
    font-size: 15px;
  }

  .card .img 
  {
    width: 40px;
    height: 40px;
    padding: 5px;
  }


  .training-content h2 
  {
    font-size: 22px;
  }

  .training-content p 
  {
    font-size: 15px;
    text-align: justify;
  }

  .card .card-content 
  {
    padding: 15px;
    margin: 15px 0;
  }

  .card .round-button 
  {
    margin: 10px auto;
    display: block;
    padding: 10px 15px;
  }

  .phuk-venue-sec .card img 
  {
    padding: 20px;
  }

  .title::before 
  {
    width: 60px;
  }

  .title::after 
  {
    width: 30px;
  }

  .filters select 
  {
    padding: 10px 15px;
    margin: 5px 0;
    width: 100%;
    max-width: 90%;
  }

  .session 
  {
    flex-direction: column;
    padding: 15px;
  }

  .date-location 
  {
    margin: 10px auto;
    width: 100%;
  }

  .info
   {
    width: 100%;
    text-align: center;
    margin-top: 10px;
  }

  .actions 
  {
    width: 100%;
    text-align: center;
    margin-top: 10px;
  }
 
  .actions .btn 
  {
    width: 100%;
    max-width: 90%;
  }
  .card
  {
    margin: 0;
    padding: 0;
    
  }
  .width-for-small-version
  {
    width:100%;
  }
   .card-section .card
   {
    text-align: center;
   }
  .card-section .card-body::before
  {
    margin-top: 0px;

  }
  .training-section
  {
    padding: 0;
    margin-bottom: 5px;
  }
  .title::after, .title::before
  {
    top:110%;
  }
  .training-content
  {
    padding: 0px;
  }
  .training-section .training-content .title
  {
    text-align: center;
    margin-bottom: 5px;
  }
   .course-list .card
   {
        margin: 5px 0;
        padding: 0px 0;
   }
  .course-list .card .card-content
  {
    padding: 15px;
    padding-bottom: 0px;
    margin: 0px 0;

  }
  .course-list .card li
  {
    text-align: left;
  }
   .course-list .card li::before
   {

   }
  .phuk-venue-sec p
  {
        margin-top: 12px;
  }
  .phuk-venue-sec
  {
    padding: 15px 0px;
  }
  .card .card-content
  {
    padding: 0px 32px;
    }

  .card .round-button
  {
    margin: 0px;
    display: inline-block;
  }
  .select-date-for-exam .date-location
  {
    padding: 15px;
  }
  .course-area .card
  {
    margin: 10px 0px;
  }
  #why-chose-us
  {
    line-height: 1.6;
    text-align: center;
  }
  .info p
  {
    margin: 0px 0;
  }
  .card-section
  {
    display: none;
  }
  .banner .bg-overlay
  {
    left: 100%;
  }
  .banner-content .banner-title
  {
    margin-bottom: 10px;
    font-size: 35px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 10px;
  }
  .phuk-venue-sec h2
  {
    font-size: 22px;
  }
  .phuk-venue-sec p
  {
    font-size: 16px;
    margin: 5px 0px;
  }
  #course-list .card-content h2
  {
    margin: 0;
  }
  .phuk-venue-sec .card ul
  {
    margin-bottom: 10px;
  }
}

</style>
<!-- End Styles -->

	<!-- Banner Section-->


	<!-- Card Secrion -->
	<section class="card-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<div class="row g-0">
							<div class="col-md-2 img">
								<img src="https://lead-academy.org/wp-content/uploads/2022/12/face-to-face.webp" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-10">
								<div class="card-body">
									<p class="card-title">Face-to-Face Training Session</p>
									<p class="card-text">to provide you with the top notch learning experience</p>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<div class="row g-0">
							<div class="col-md-2 img">
								<img src="https://lead-academy.org/wp-content/uploads/2022/12/instalment.webp" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-10">
								<div class="card-body">
									<p class="card-title">4 Instalment Plan on Checkout</p>
									<p class="card-text">to ensure that money doesn’t become a barrier to learning</p>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
						<div class="row g-0">
							<div class="col-md-2 img">
								<img src="https://lead-academy.org/wp-content/uploads/2022/12/14-days.webp" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-10">
								<div class="card-body">
									<p class="card-title">Learn From Industry Expert</p>
									<p class="card-text">to outshine by learning the most effective strategies</p>							
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>

    <!-- Banner Section-->
	 <section class="banner">
        <div class="bg-overlay">
			<img src="https://lead-academy.org/wp-content/uploads/2025/07/PAT-Testing-Birminham.webp" alt="PAT Testing Training Birmingham – 1 Day Course With Certificate" width="708" height="401">
	    </div>
		<div class="container">	
			<div class="row">
				<div class="col-8 width-for-small-version">
					<div class="banner-content">
					<h1 class="banner-title">Pat Testing Training</h1>
            <p>Gain accredited Portable Appliance Testing training with hands-on skills and certification. Enhance expertise and ensure electrical safety compliance.</p>
                    <svg class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
            <defs>
            <style>
            .st0 {
                fill: #01b67a;
            }

            .st1 {
                fill: #005229;
            }

            .st2 {
                font-family: Poppins-Regular, Poppins;
            }

            .st2, .st3, .st4 {
                fill: #fff;
            }

            .st2, .st4 {
                font-size: 10.25px;
            }

            .st5 {
                fill: #e84335;
            }

            .st6 {
                fill: #34a753;
            }

            .st4 {
                font-family: Poppins-SemiBold, Poppins;
                font-weight: 600;
            }

            .st7 {
                fill: #fbbb06;
            }

            .st8 {
                fill: #2d9657;
            }

            .st9 {
                fill: none;
                stroke: #fff;
                stroke-miterlimit: 10;
                stroke-width: .74px;
            }

            .st10 {
                fill: #4385f4;
            }
            </style>
        </defs>
        <g>
            <text class="st4" transform="translate(213.54 16.19)"><tspan x="0" y="0">Customer Reviews</tspan></text>
            <g>
            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"></path>
            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"></path>
            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"></path>
            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"></path>
            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"></path>
            </g>
        </g>
        <g>
            <text class="st2" transform="translate(111.5 15.84)"><tspan x="0" y="0">Rated</tspan></text>
            <text class="st2" transform="translate(147.56 16.05)"><tspan x="0" y="0">4.9/5</tspan></text>
            <line class="st9" x1="179.5" y1="5.01" x2="179.5" y2="19.17"></line>
        </g>
        <g>
            <rect class="st8" x="6.57" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M18.75,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M18.75,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M19.97,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="26.73" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M38.91,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M38.91,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M40.12,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="46.88" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M59.06,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M59.06,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M60.28,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="67.03" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M79.22,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M79.22,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M80.43,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="87.19" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M99.37,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M99.37,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M100.59,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
        </g>
        </svg><br>
                    <!-- <a href="#" class="red-button">Start Your Phlebotomy Career</a> -->
                </div>     
            </div>
        </div>
				</div>
				<div class="col-4"></div>
			</div>
		</div>
	</section>

	<!-- Best Phlebotomy Training Sessions START -->
	<section class="training-section mb mt pb pt">	
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="training-content">
            <p id="why-chose-us">Why Should You Take PAT Testing Training​ With Us?</p>
						<h2 class="title">Best PAT Testing Training Sessions</h2>
						<p class="">We offer CPD-accredited electrical appliance testing courses that provide both essential knowledge and 
              practical, hands-on experience. You will train in a classroom setting with expert tutors who show you exactly how 
              testing is done in real-world situations, using the same tools used on the job. This one-day, face-to-face course 
              covers all PAT testing procedures to meet UK safety standards. By the end, you will feel confident and ready to 
              carry out safe, compliant testing in any workplace.</p>

              <p>Our PAT course is ideal for electricians, maintenance teams, and health & safety professionals looking to gain a 
                nationally recognised qualification. Whether you are new or updating your skills, our PAT testing training UK 
                enhances your expertise and career prospects.</p>
					</div>
				</div>
				<div class="col-md-5">
				<div class="PAT-img">
          <img src="https://lead-academy.org/wp-content/uploads/0223/12/PAT_Training_With_Us-scaled-1.webp" class="img-fluid" alt="Responsive image">
          </div>
          </div>
				</div>
			</div>
		</div>
	</section>
  <!-- Best Phlebotomy Training Sessions END -->

  <!-- why Training With Us START -->
<section class="why-training-us">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="PAT-img">
          <img src="https://lead-academy.org/wp-content/uploads/2024/11/PAT-Testing-Training-1-Day-CPD-Accredited-1.webp" class="img-fluid" alt="PAT Traning Sessions">
        </div>
      </div>
      <div class="col-6">
        <div class="training-content training-with-us">
          <h2>What You’ll Gain from Training With Us</h2>
          <ul>
            <li><i class="fa fa-check-square-o"></i> Practical skills that prepare you for real-world electrical testing.</li>
            <li><i class="fa fa-check-square-o"></i> Hands-on guidance from experienced and supportive trainers.</li>
            <li><i class="fa fa-check-square-o"></i> Clear understanding of essential safety and compliance standards.</li>
            <li><i class="fa fa-check-square-o"></i> Confidence to perform tests accurately and safely.</li>
            <li><i class="fa fa-check-square-o"></i> CPD UK certificate to boost your career opportunities.</li>
            <li><i class="fa fa-check-square-o"></i> Knowledge of the latest PAT testing equipment and procedures.</li>
            <li><i class="fa fa-check-square-o"></i> Tips on maintaining compliance with UK health and safety laws.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 </section>
  <!-- why Training With Us END -->


<!-- Our Phlebotomy Venues -->
	<section class="phuk-venue-sec mb pb">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2 class="title">Our Venues</h2>
                <p>PAT Testing Training</p>
            </div>
        </div>
        <section id="course-list mb pb">
            <div class="course-area">
                <div class="row">
                    <div class="card pt-course-card">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/A-repairman-is-checking-the-voltage-with-a-multimeter.webp" alt="PAT Training London">
                            </div>
                            <div class="card-content col-md-6">
                                <h2><a href="">PAT Training</a></h2>
                                <h4 class="pat-location mb-4"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> London</h4>
                                <ul>
                                    <li>1 Day Face-to-Face Training</li>
                                    <li>Flexible Payment Options Available</li>
                                    <li>CPD Accredited Qualification</li>
                                    <li>Expert Tutor Support Included</li>
                                </ul>
                                <a class="round-button" href="https://lead-academy.org/course/pat-testing-training-london">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                 
                    <div class="card pt-course-card">
                        <div class="row">
                             <div class="col-md-6">
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/A-young-female-electrician-is-conducting-a-PAT-Testing.webp" alt="PAT Training Birmingham">
                            </div>
                            <div class="card-content col-md-6">
                                <h2><a href="">PAT Training</a></h2>
                                <h4 class="pat-location mb-4"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Birmingham</h4>
                                <ul>
                                     <li>1 Day Face-to-Face Training</li>
                                    <li>Flexible Payment Options Available</li>
                                    <li>CPD Accredited Qualification</li>
                                    <li>Expert Tutor Support Included</li>
                                </ul>
                                <a class="round-button" href="https://lead-academy.org/course/pat-testing-training-birmingham">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>

<section id="phuk-review-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2>Valuable Feedback From Student</h2>
                <div class="phuk-review-part">
                    <?php
                        echo '
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                            <style>
                                #phlebotomy-page .la-reviews-carousel-section-wrap {
                                    margin: 120px auto 80px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                                    font-size: 20px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                                    font-size: 16px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                                    font-family: "Sen";
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                                    display: block;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav .owl-prev {
                                    left: -21px;
                            </style>
                        ';
if (function_exists('la_display_reviews_section')) {
    la_display_reviews_section();
}
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="phuk-faq">
    <div class="container">
        <div id="la-single-faq" class="d-xl-block overflow-hidden">
            <h2 class="text-center"><b>FAQs</b></h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <?php
                    $all_faqs = get_post_meta( get_the_ID(), 'product_faqs', true);
                    $id_number=1;
                    if ( is_array( $all_faqs ) && ! empty( $all_faqs ) ) {
                        foreach($all_faqs as $faq){
                ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading<?=$id_number?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$id_number?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$id_number?>"><?=$faq['faq_title']?></button>
                        </h3>
                        <div id="panelsStayOpen-collapse<?=$id_number?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$id_number?>">
                            <div class="accordion-body">
                                <p><?=$faq['faq_text']?></p>
                            </div>
                        </div>
                    </div>
                <?php
                        $id_number++;
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>

		

<?php
get_footer();
?>