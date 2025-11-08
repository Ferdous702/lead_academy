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
    <h1 class="text-center">NCFE Functional Skills Maths Level 2 Past Papers</h1>
    <p>Functional Skills Level 2 qualification is equivalent to GCSE grades 9 to 4 (A* to C in the old GCSE grading system). Here, you will find Functional Skills Maths Level 2 past papers assessed by Pearson Edexcel Exam Board which is the most renowned, reliable and accepted exam board among others.</p>
    <p>You will be assessed on the following skills and knowledge:</p>
    <ul>
        <li>Whole numbers</li>
        <li>Common measures</li>
        <li>Fractions, decimals and percentage</li>
        <li>Shape and space</li>
        <li>Handling information and data</li>
    </ul>
    <p>In addition to that, 25% of marks in Functional Skills Maths Level 2 assess your basic skills and knowledge regarding maths, while 75% of the marks are dedicated to intensive problem-solving.</p>
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
                <a href="/exam-booking">Book Maths Exam</a>
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
<h2>NCFE Functional Skills Maths Level 2 Past Papers: At a Glance</h2>
<table class="exam-marks">
    <thead>
        <tr>
            <th></th>
            <th>CALCULATOR?</th>
            <th>MARKS</th>
            <th>TIME</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Paper 1</td>
            <td>Non-Calculator</td>
            <td>15 Marks</td>
            <td>30 Minutes</td>
        </tr>
        <tr>
            <td>Paper 2</td>
            <td>Calculator</td>
            <td>45 Marks</td>
            <td>1 Hour 30 Minutes</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>-</td>
            <td>60 Marks</td>
            <td>2 Hours</td>
        </tr>
    </tbody>
</table>
<div class="promo-btn-box">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Functional Skills Maths Level 2 Exam</h3>
            <h4>Sit your functional skills maths level 2 exam online in your own home.</h4>
        </div>
        <div class="col-md-3">
            <a href="https://lead-academy.org/exam-booking">Learn More</a>
        </div>
    </div>
</div>

<h2>Full List of NCFE Functional Skills Maths Level 2 Past Papers</h2>
<div class="pdf-links-area">
    <table>
        <thead>
            <tr>
                <th>NCFE Functional Skills Maths Level 2</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 December 2019 Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-December-2019-Section-A-Past-Paper.pdf?_gl=1*1ny05k4*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-December-2019-Section-A-Mark-Scheme.pdf?_gl=1*1ny05k4*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 December 2019 Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-December-2019-Section-B-Past-Paper.pdf?_gl=1*1fv9hgr*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-December-2019-Section-B-Mark-Scheme.pdf?_gl=1*898s3e*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 February 2020 Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-February-2020-Section-A-Past-Paper.pdf?_gl=1*898s3e*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-February-2020-Section-A-Mark-Scheme.pdf?_gl=1*za2qid*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 February 2020 Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-February-2020-Section-B-Past-Paper.pdf?_gl=1*za2qid*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-February-2020-Section-B-Mark-Scheme.pdf?_gl=1*bfeher*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 October 2019 Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-October-2019-Section-A-Past-Paper.pdf?_gl=1*l13a5o*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-October-2019-Section-A-Mark-Scheme.pdf?_gl=1*l13a5o*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 October 2019 Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-October-2019-Section-B-Past-Paper.pdf?_gl=1*v5ir0r*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-October-2019-Section-B-Mark-Scheme.pdf?_gl=1*v5ir0r*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Practice Paper 1 Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-1-Section-A-Question-Paper.pdf?_gl=1*11ltxnr*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-1-Section-A-Mark-Scheme.pdf?_gl=1*11ltxnr*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Practice Paper 1 Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-1-Section-B-Question-Paper.pdf?_gl=1*922khi*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4wf">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-1-Section-B-Mark-Scheme.pdf?_gl=1*922khi*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Practice Paper 2 Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-2-Section-A-Mark-Scheme.pdf?_gl=1*idrs1l*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-2-Section-A-Question-Paper.pdf?_gl=1*idrs1l*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Practice Paper 2 Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-2-Section-B-Question-Paper.pdf?_gl=1*5mmk6n*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Practice-Paper-2-Section-B-Mark-Scheme.pdf?_gl=1*5mmk6n*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Sample Paper Section A</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-Section-A-Question-Paper.pdf?_gl=1*wxg3s0*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-Section-A-Mark-Scheme.pdf?_gl=1*wxg3s0*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Sample Paper Section B</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-Section-B-Mark-Scheme.pdf?_gl=1*1jqxflx*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-Section-B-Question-Paper.pdf?_gl=1*1b6p422*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="pdf-links-area">
    <table>
        <thead>
            <tr>
                <th>NCFE Functional Skills Maths Level 2 (Old Specification)</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Sample Paper 1</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-1-Question-Paper.pdf?_gl=1*3n6nob*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-1-Mark-Scheme.pdf?_gl=1*3n6nob*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Sample Paper 2</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-2-Question-Paper.pdf?_gl=1*v0hrkk*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-2-Mark-Scheme.pdf?_gl=1*v0hrkk*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
            </tr>
            <tr>
                <td>NCFE Functional Skills Maths Level 2 Sample Paper 3</td>
                <td><a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-3-Question-Paper.pdf?_gl=1*166mrlk*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Question Paper</a> | <a href="https://lms.lead-academy.org/wp-content/uploads/2022/05/NCFE-Functional-Skills-Maths-Level-2-Sample-Paper-3-Mark-Scheme.pdf?_gl=1*166mrlk*_gcl_au*MTU0Mjc3NTk5LjE3MTc1NjUyMjk.*_ga*MTM5OTgzNDI3NS4xNzE3NTY1MjMw*_ga_JXKLM9RV5Y*MTcxOTM5NjM1MS45Ni4xLjE3MTk0MDEyMTcuNTcuMC4w">Mark Scheme</a></td>
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