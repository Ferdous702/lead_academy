<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$math_info = [
[
'title' => 'Functional Skills Maths Level 2 Online Course',
'price' => '320.00',
'sell_price' => '130.00',
'course_url' => '/course/functional-skills-maths-level-2',
'image_url' => '/wp-content/uploads/2022/10/Maths-Level-4.webp',
],
[
'title' => 'Functional Skills Maths Level 1 Online Course',
'price' => '320.00',
'sell_price' => '130.00',
'course_url' => '/course/functional-skills-maths-level-1',
'image_url' => '/wp-content/uploads/2022/10/Maths-Level-3.webp',
],
[
'title' => 'Functional Skills Maths Entry Level 3 Online Course',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => '/course/functional-skills-maths-entry-level-3',
'image_url' => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
],
[
'title' => 'Functional Skills Entry Level 2 Maths Online Course',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => '/course/entry-level-2-maths',
'image_url' => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
],
[
'title' => 'Functional Skills Entry Level 1 Maths Course Online',
'price' => '370.00',
'sell_price' => '130.00',
'course_url' => '/course/functional-skills-entry-level-1-maths',
'image_url' => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
]
];
$english_info = [
[
'title' => 'Functional Skills English Level 2 Course Online',
'price' => '330.00',
'sell_price' => '130.00',
'course_url' => 'https://lead-academy.org/course/functional-skills-english-level-2',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2022/10/Functional-Skills-English-Level-2-Online-Course-with-Exam.webp',
],
[
'title' => 'Functional Skills English Level 1 Course Online',
'price' => '330.00',
'sell_price' => '130.00',
'course_url' => 'https://lead-academy.org/course/functional-skills-english-level-1',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2022/10/Functional-Skills-English-Level-1-Online-Course-with-Exam.webp',
],
[
'title' => 'Functional Skills English Entry Level 3 Online Course',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => 'https://lead-academy.org/course/functional-skills-english-entry-level-3',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
],
[
'title' => 'Functional Skills English Entry Level 2 Course Online',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => 'https://lead-academy.org/course/entry-level-2-english-course',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
],
[
'title' => 'Functional Skills Entry Level 1 English Course Online',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => 'https://lead-academy.org/course/entry-level-1-english-course',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
]
];
$digital_info = [
[
'title' => 'Digital Functional Skills Entry Level 3 – Online Course and Exam',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
],
[
'title' => 'Digital Functional Skills Level 1 – Online Course and Exam',
'price' => '205.00',
'sell_price' => '149.00',
'course_url' => 'https://lead-academy.org/course/digital-functional-skills-level-1',
'image_url' => 'https://lead-academy.org/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
]
];
?>
<link rel="stylesheet" href="/wp-content/themes/lead-academy-child/assets/css/fs-past-papers.css">
<section class="hero-text">
    <h1 class="text-center">Edexcel Functional Skills English Level 1 Past Papers</h1>
    <p>Functional Skills English Level 1 is equivalent to a grade of 2-3 on the GCSE (E-D in the legacy system). Functional Skills English Level 1 is frequently required in college and university courses, as well as in various job requirements. Functional Skills English Level 1 also serves as a stepping stone to Level 2 and beyond. Here, you will find Functional Skills English Level 1 past papers assessed by Pearson Edexcel Exam Board, the most renowned, reliable, and accepted exam board.</p>
    <p>You will be assessed on the following skills and knowledge:</p>
    <ul>
        <li>Reading</li>
        <li>Writing (Spelling, Punctuation and Grammar)</li>
        <li>Speaking, Listening and Communicating
    </ul>
    <p>Speaking, listening, and communication skills are tested through a 5-minute well-rounded presentation and related question-and-answer session in groups of three to four learners and a 15-minute formal discussion in groups of three to five. A test comprising of multiple-choice, short open answer, and medium open response questions are used to assess reading ability. Writing is graded on a two-task test, with access spelling, punctuation, and grammar accounting for 42% of the total.</p>
    <p>However, each exam board has distinct schedules for each paper, mark distribution, and how much of your grade is based on each of the three competencies.</p>
</section>

<div id="enquiryModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hide()">&times;</span>
        <?php
        echo do_shortcode('[contact-form-7 id="f61a542" title="SPEAK TO US TODAY"]');
        ?>
    </div>
</div>

<div class="wrapper">
<section class="hero-links">
    <div class="row">
        <div class="col-lg-4">
            <div class="box">
                <h2>Past Papers</h2>
                <a href="#past-paper">View Past Papers</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box">
                <h2>Book Exam</h2>
                <a href="/exam-booking">Book English Exam</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box">
                <h2>Online Course</h2>
                <a href="/functional-skills-courses">Enrol Now</a>
            </div>
        </div>
    </div>
</section>
<section class="exam-info">
<h2>All of Edexcel Functional Skills English Level 1 Past Papers</h2>
<table class="exam-marks">
    <thead>
        <tr>
            <th></th>
            <th>EXAM</th>
            <th>MARKS</th>
            <th>TIME</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Paper 1</td>
            <td>Reading</td>
            <td>30 Marks</td>
            <td>1 Hour</td>
        </tr>
        <tr>
            <td>Paper 2</td>
            <td>Writing</td>
            <td>36 Marks</td>
            <td>1 Hour</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>-</td>
            <td>66 Marks</td>
            <td>2 Hours</td>
        </tr>
    </tbody>
</table>
<div class="promo-btn-box">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Functional Skills English Level 1 Exam</h3>
            <h4>Sit your functional skills english level 1 exam online in your own home.</h4>
        </div>
        <div class="col-md-3">
            <a href="https://lead-academy.org/exam-booking">Learn More</a>
        </div>
    </div>
</div>

<h2>All of Edexcel Functional Skills English Level 1 Past Papers</h2>
<div class="pdf-links-area">
    <table>
        <thead>
            <tr>
                <th>
                Edexcel Functional Skills English Level 1</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>City and Guilds Functional Skills Maths Level 2 Sample 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Writing-Practice-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Writing-Practice-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 Reading Practice Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-1-Mark-Scheme.pdf">Mark Scheme</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-1-Text-Booklet.pdf">Insert</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 Writing Practice Paper 2</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Writing-Practice-Paper-2-Question-Paper.pdf">Question Paper</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 Reading Practice Paper 2</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-2-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-2-Mark-Scheme.pdf">Mark Scheme</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Reading-Practice-Paper-2-Text-Booklet.pdf">Insert</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 Writing Practice Paper 3</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Writing-Practice-Paper-3-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-Writing-Practice-Paper-3-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="pdf-links-area">
    <table>
        <thead>
            <tr>
                <th>
                Edexcel Functional Skills English Level 1 (Old Specification)</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Edexcel Functional Skills English Level 1 February 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-February-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-February-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 February 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-February-2018-Reading-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-February-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 January 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-January-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-January-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 January 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-January-2018-Reading-Paper-1-Text-and-Questions.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-January-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 July 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-July-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-July-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 July 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-July-2018-Reading-Paper-1-Text-and-Questions.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-July-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 June 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-June-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-June-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 June 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-June-2018-Reading-Paper-1-Text-and-Questions.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-June-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 March 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-March-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-March-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 March 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-March-2018-Reading-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-March-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 May 2018 Writing Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-May-2018-Writing-Paper-1-Question-Paper.pdf">Question Paper</a> | <a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-May-2018-Writing-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>Edexcel Functional Skills English Level 1 May 2018 Reading Paper 1</td>
                <td><a href="https://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-May-2018-Reading-Paper-1-Text-and-Questions.pdf">Question Paper</a> | <a href="hhttps://lead-academy.org/wp-content/uploads/2022/05/Edexcel-Functional-Skills-English-Level-1-May-2018-Reading-Paper-1-Mark-Scheme.pdf">Mark Scheme</a></td>
            </tr>

        </tbody>
    </table>
</div>
<div class="fsc-card-area">
    <h2>Functional Skills Courses</h2>
    <p>Not feeling confident? Enrol into our comprehensive range of functional skills course to to brush up your English, Maths or ICT skills and surpass your exam with flying colours</p>
    <div class="btn-area">
        <div data-course="math" class="exam-btn active"><span>Math</span></div>
        <div data-course="english" class="exam-btn"><span>English</span></div>
        <div data-course="digital" class="exam-btn"><span>Digital</span></div>
    </div>
    <div class="exam-cards">
        <div class="math">
            <div class="row">
<?php
foreach($math_info as $info){
?>
<div class="col-md-4">
    <div class="cards">
        <img src="<?=$info['image_url']?>" alt="<?=$info['title']?>" title="<?=$info['title']?>" />
        <h2><?=$info['title']?></h2>
        <div class="price"><del><?=get_woocommerce_currency_symbol().$info['price']?></del><span><?=get_woocommerce_currency_symbol().$info['sell_price']?></span></div>
        <div class="card-btn">
            <a href="<?=$info['course_url']?>">View Course</a>
        </div>
    </div>
</div>
<?php
}
?>
            </div>
        </div>
        <div style="display:none" class="english">
        <div class="row">
<?php
foreach($english_info as $info){
?>
<div class="col-md-4">
    <div class="cards">
        <img src="<?=$info['image_url']?>" alt="<?=$info['title']?>" title="<?=$info['title']?>" />
        <h2><?=$info['title']?></h2>
        <div class="price"><del><?=get_woocommerce_currency_symbol().$info['price']?></del><span><?=get_woocommerce_currency_symbol().$info['sell_price']?></span></div>
        <div class="card-btn">
            <a href="<?=$info['course_url']?>">View Course</a>
        </div>
    </div>
</div>
<?php
}
?>
            </div>
        </div>
        <div style="display:none" class="digital">
        <div class="row">
<?php
foreach($digital_info as $info){
?>
<div class="col-md-4">
    <div class="cards">
        <img src="<?=$info['image_url']?>" alt="<?=$info['title']?>" title="<?=$info['title']?>" />
        <h2><?=$info['title']?></h2>
        <div class="price"><del><?=get_woocommerce_currency_symbol().$info['price']?></del><span><?=get_woocommerce_currency_symbol().$info['sell_price']?></span></div>
        <div class="card-btn">
            <a href="<?=$info['course_url']?>">View Course</a>
        </div>
    </div>
</div>
<?php
}
?>
            </div>
        </div>
    </div>
</div>

<div class="bottom-form">
    <h2>Our experts will help you choose a course</h2>
    <p>Overcome your doubts and queries regarding any of our courses with the help from our
extensive range of experienced and expert customer support team.</p>
    <div class="btn-wrap">
        <button id="enquire-now-btn">Speak To An Advisor</button>
    </div>
</div>
</section>

</div>
<script>

// Get the booking modal
let mobileBookingModal = document.getElementById("mobileEnquiryBookingModal");

// Get the button that opens the modal
let mobileRedBtn = document.getElementById("mobile-enquiry-booking-modal");

// Get the <span> element that closes the modal
let mobileCloseEl = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
mobileCloseEl.onclick = function() {
mobileBookingModal.style.display = "none";
}

// Get the modal
var modal = document.getElementById("enquiryModal");

// Get the button that opens the modal
var enNowBtn = document.getElementById("enquire-now-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
enNowBtn.onclick = function(e) {
e.preventDefault();
modal.style.display = "block";
}

function hide(){
let enBookModal = document.getElementById("enquiryBookingModal");
let enModal = document.getElementById("enquiryModal");
enModal.style.display = "none";
enBookModal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>
<?php
get_footer();
?>