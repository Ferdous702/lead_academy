<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <section id="xm-booking-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>GCSE Exam Booking</h1>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1717684842">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <div class="custom-shape-divider-top-1718003077">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
            <path d="M350,10L340,0h20L350,10z" class="shape-fill"></path>
        </svg>
    </div>
    <style>
        .xm-booking-form {
            /* display: none; */
        }

        /* Desktop Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2c2c2e;
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #4a4a4c;
            padding: 12px 15px;
            text-align: left;
        }

        thead th {
            background-color: #1e1e1e;
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #3a3a3c;
        }

        .exam-booking-table {
            background-color: #ffff;
            padding: 50px;
            border-radius: 5px;
            text-align: center;
        }

        .exam-booking-table h2, .exam-booking-table p {
            text-align: center;
            padding: 0px;
            margin-bottom: 15px;
        }

        .exam-booking-table h3 {
            margin: 35px 0 25px 0;
            font-size: 22px;
        }

        /* Responsive Styles for Mobile (Stacked View) */
        @media screen and (max-width: 768px) {
            table {
                border: 0;
            }
            
            thead {
                /* Hide table headers on mobile, but keep them accessible */
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
            
            tr {
                display: block;
                margin-bottom: 15px;
                border-radius: 5px;
                background-color: #2c2c2e;
                border-top: 2px solid #fff;
            }
            
            td {
                display: block;
                text-align: right;
                font-size: 14px;
                border-bottom: 1px dotted #4a4a4c;
                position: relative;
                padding-left: 50%;
            }

            td:last-child {
                border-bottom: 0;
            }
            
            /* Use ::before pseudo-element to add labels from data-label attribute */
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: calc(50% - 30px);
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
                color: #cccccc;
            }

            .exam-booking-table {
                background-color: #ffff;
                padding: 30px 0;
                border-radius: 0px;
            }
        }
    </style>
    <section id="xm-booking-form-part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="xm-booking-form">
                        <?php echo do_shortcode('[bb_form id=8]'); ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            </div>
        </div>
        <div class="exam-booking-table">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h2>GCSE Exam Booking Information</h2>
                        <P>Please note that the dates mentioned are tentative and may change according to the number of learners’ entries for the respective year, as determined by the awarding body. You're requested to book your exam in advance of the entry deadline.</P>
                        
                        <h3>Summer (May-June) Examination Schedule</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Examination Season</th>
                                    <th>GCSE Subjects</th>
                                    <th>Awarding Body</th>
                                    <th>Practical Statement Submission Deadline</th>
                                    <th>Entry Deadline</th>
                                    <th>Late Fees Apply From</th>
                                    <th>High Late Fees Apply From</th>
                                    <th>Entry Deadline Close on</th>
                                    <th>Practical Class with Statement Charges by the Lead Academy Tutor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Season">Summer (May-June)</td>
                                    <td data-label="Subject">GCSE English Language</td>
                                    <td data-label="Awarding Body">AQA</td>
                                    <td data-label="Submission Deadline">N/A</td>
                                    <td data-label="Entry Deadline">10th January</td>
                                    <td data-label="Late Fees">11th January (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">21st January (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">15th March</td>
                                    <td data-label="Practical Class Charges">N/A</td>
                                </tr>
                                <tr>
                                    <td data-label="Season">Summer (May-June)</td>
                                    <td data-label="Subject">GCSE Maths Foundation/Higher Tier</td>
                                    <td data-label="Awarding Body">Pearson Edexcel</td>
                                    <td data-label="Submission Deadline">N/A</td>
                                    <td data-label="Entry Deadline">10th January</td>
                                    <td data-label="Late Fees">11th January (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">21st January (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">15th March</td>
                                    <td data-label="Practical Class Charges">N/A</td>
                                </tr>
                                <tr>
                                    <td data-label="Season">Summer (May-June)</td>
                                    <td data-label="Subject">GCSE Biology Foundation/Higher Tier</td>
                                    <td data-label="Awarding Body">AQA</td>
                                    <td data-label="Submission Deadline">10th March</td>
                                    <td data-label="Entry Deadline">10th January</td>
                                    <td data-label="Late Fees">11th January (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">21st January (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">15th March</td>
                                    <td data-label="Practical Class Charges">(£120+VAT)</td>
                                </tr>
                                <tr>
                                    <td data-label="Season">Summer (May-June)</td>
                                    <td data-label="Subject">GCSE Chemistry Foundation/Higher Tier</td>
                                    <td data-label="Awarding Body">AQA</td>
                                    <td data-label="Submission Deadline">10th March</td>
                                    <td data-label="Entry Deadline">10th January</td>
                                    <td data-label="Late Fees">11th January (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">21st January (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">15th March</td>
                                    <td data-label="Practical Class Charges">(£120+VAT)</td>
                                </tr>
                                <tr>
                                    <td data-label="Season">Summer (May-June)</td>
                                    <td data-label="Subject">GCSE Physics Foundation/Higher Tier</td>
                                    <td data-label="Awarding Body">AQA</td>
                                    <td data-label="Submission Deadline">10th March</td>
                                    <td data-label="Entry Deadline">10th January</td>
                                    <td data-label="Late Fees">11th January (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">21st January (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">15th March</td>
                                    <td data-label="Practical Class Charges">(£120+VAT)</td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>Autumn (November) Examination Schedule</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Examination Season</th>
                                    <th>GCSE Subjects</th>
                                    <th>Awarding Body</th>
                                    <th>Practical Statement Submission Deadline</th>
                                    <th>Entry Deadline</th>
                                    <th>Late Fees Apply From</th>
                                    <th>High Late Fees Apply From</th>
                                    <th>Entry Deadline Close on</th>
                                    <th>Subject Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Season">Autumn (November)</td>
                                    <td data-label="Subject">GCSE English Language</td>
                                    <td data-label="Awarding Body">AQA</td>
                                    <td data-label="Submission Deadline">N/A</td>
                                    <td data-label="Entry Deadline">5th August</td>
                                    <td data-label="Late Fees">6th August (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">11th August (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">6th October</td>
                                    <td data-label="Availability">GCSE English Language - Only available to anyone that is at least 16 years of age on the preceding 31st August.</td>
                                </tr>
                                <tr>
                                    <td data-label="Season">Autumn (November)</td>
                                    <td data-label="Subject">GCSE Maths Foundation/ Higher Tier</td>
                                    <td data-label="Awarding Body">Pearson Edexcel</td>
                                    <td data-label="Submission Deadline">N/A</td>
                                    <td data-label="Entry Deadline">5th August</td>
                                    <td data-label="Late Fees">6th August (Additional £150+VAT)</td>
                                    <td data-label="High Late Fees">11th August (£250+VAT)</td>
                                    <td data-label="Entry Deadline Close on">6th October</td>
                                    <td data-label="Availability">GCSE Mathematics - Only available to anyone that is at least 16 years of age on the preceding 31st August.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1718006923">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
<?php
get_footer();
?>