<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $order_id = intval($_GET['id']);
    $day = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year1'];

    if (!empty($day) && !empty($month) && !empty($year)) {
        $birth_date = $day . '-' . $month . '-' . $year;
        update_post_meta($order_id, 'billing_birth_date', $birth_date);
    }
}

// Set pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'shop_order',
    'posts_per_page' => 500,  // Adjust as needed
    'paged'          => $paged,
    'post_status'    => array('wc-completed', 'wc-on-hold'),
    'fields'         => 'ids',
);
$orders_query = new WP_Query($args);
$orders = $orders_query->posts;
echo '<div class="row">';
echo '<div class="order-list col-md-2">';
foreach ($orders as $order_id) {
    $dobf = get_post_meta($order_id, 'billing_birth_date', true);
    $is_updated = false;

    // Convert space-separated dates to dash-separated format
    if (preg_match('/^\d{1,2} [A-Za-z]{3} \d{4}$/', $dobf) && !$is_updated) {
        $dobf = str_replace(' ', '-', $dobf);
        update_post_meta($order_id, 'billing_birth_date', $dobf);
        $is_updated = true;
    }

    // Define month names and their abbreviations
    $month_names = [
        '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun',
        '07' => 'Jul', '08' => 'Aug', '09' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'
    ];

    
  /*  
    if (preg_match('/^(\d{1,2})\/(\d{1,2})\/(\d{2,4})$/', $dobf,$matches)) {
        $day = intval($matches[1]);   // Day part
        $month = intval($matches[2]); // Month part
        $year = $matches[3];  // Year part

        // handle DD/MM/YYYY to convert DD-MMM-YYYY 
        if ($day > 12 && $month <= 12 && strlen($year) == 4) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
            }
        }
        // handle MM/DD/YYYY to convert DD-MMM-YYYY 
        if ($day <= 12 && $month > 12 && strlen($year) == 4) {
            $day = intval($matches[2]); // second part count as day
            $month = intval($matches[1]); // first part count as month
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
            }
        } 

        if($day == $month && strlen($year)== 4){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            echo $newDate = $day.'-'.$month.'-'.$year;
            // if($month ){
            //     update_post_meta($order_id, 'billing_birth_date', $newDate);
            // }
        }
        
    }
   */     


    // Handle space , backSlash , Dot separetor also captures foroward slash as well
    if (preg_match('/^(\d{1,2}).(\d{1,2}).(\d{2,4})$/', $dobf,$matches) && !$is_updated) {
        $day = intval($matches[1]);   // Day part
        $month = intval($matches[2]); // Month part
        $year = $matches[3];  // Year part

        if ($day > 12 && $month <= 12 && strlen($year) == 4 && !$is_updated) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
     
        if ($day <= 12 && $month > 12 && strlen($year) == 4 && !$is_updated) {
            $day = intval($matches[2]); // second part count as day
            $month = intval($matches[1]); // first part count as month
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }  
        
        if($day == $month && strlen($year)== 4 && !$is_updated){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
    }

    

    // handle 2024.24.08 this type of date
    if (preg_match('/^\s*(\d{4}).(\d{1,2}).(\d{1,2})\s*$/', $dobf,$matches) && !$is_updated) {
        $year = $matches[1];
        $day = intval($matches[2]);   
        $month = intval($matches[3]); 

        if ($day > 12 && $month <= 12 && strlen($year) == 4 && !$is_updated) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
     
        if ($day <= 12 && $month > 12 && strlen($year) == 4 && !$is_updated) {
            $day = intval($matches[3]); 
            $month = intval($matches[2]); 
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }  
        
        if($day == $month && strlen($year)== 4 && !$is_updated){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
    }

    // Handle DD / MM / YYYY type of formate
    if (preg_match('/^(\d{1,2})\s*\/\s*(\d{1,2})\s*\/\s*(\d{2,4})$/', $dobf,$matches) && !$is_updated){
        $day = intval($matches[1]);   // Day part
        $month = intval($matches[2]); // Month part
        $year = $matches[3];  // Year part

        if ($day > 12 && $month <= 12 && strlen($year) == 4 && !$is_updated) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
     
        if ($day <= 12 && $month > 12 && strlen($year) == 4 && !$is_updated) {
            $day = intval($matches[2]); 
            $month = intval($matches[1]); 
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }  
        
        if($day == $month && strlen($year)== 4 && !$is_updated){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
    }


        // Handle all spacing type format left right (20- 01-1976)
        if (preg_match('/^\s*(\d{1,2})\s*-\s*(\d{1,2})\s*-\s*(\d{4})\s*$/', $dobf, $matches) && !$is_updated) {

            $day = intval($matches[1]);   // Day part
            $month = intval($matches[2]); // Month part
            $year = $matches[3];  // Year part
    
            if ($day > 12 && $month <= 12 && strlen($year) == 4  && !$is_updated) {
                $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                $month = isset($month_names[$month]) ? $month_names[$month] : null;
                $newDate = $day.'-'.$month.'-'.$year;
                if($month ){
                    update_post_meta($order_id, 'billing_birth_date', $newDate);
                    $is_updated = true;
                }
            }
         
            if ($day <= 12 && $month > 12 && strlen($year) == 4  && !$is_updated) {
                $day = intval($matches[2]); // second part count as day
                $month = intval($matches[1]); // first part count as month
                $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                $month = isset($month_names[$month]) ? $month_names[$month] : null;
                $newDate = $day.'-'.$month.'-'.$year;
                if($month ){
                    update_post_meta($order_id, 'billing_birth_date', $newDate);
                    $is_updated = true;
                }
            }  
            
            if($day == $month && strlen($year)== 4 && !$is_updated){
                $month = str_pad($month, 2, '0', STR_PAD_LEFT);
                $month = isset($month_names[$month]) ? $month_names[$month] : null;
                $newDate = $day.'-'.$month.'-'.$year;
                if($month ){
                    update_post_meta($order_id, 'billing_birth_date', $newDate);
                    $is_updated = true;
                }
            }
        }
    
    
    
    // Handle all spacing type format left right with first use Year (e.g., "1986 - 10 - 25")
    if (preg_match('/^\s*(\d{4})\s*-?\s*(\d{1,2})\s*-?\s*(\d{1,2})\s*$/', $dobf, $matches) && !$is_updated) {
        $year = $matches[1];    // Year part
        $month = intval($matches[2]);  // Month part
        $day = intval($matches[3]);    // Day part
    
        if ($day > 12 && $month <= 12 && strlen($year) == 4 && !$is_updated) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
     
        if ($day <= 12 && $month > 12 && strlen($year) == 4 && !$is_updated) {
            $day = intval($matches[2]); 
            $month = intval($matches[3]); 
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }  
        
        if($day == $month && strlen($year)== 4 && !$is_updated){
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $month = isset($month_names[$month]) ? $month_names[$month] : null;
            $newDate = $day.'-'.$month.'-'.$year;
            if($month ){
                update_post_meta($order_id, 'billing_birth_date', $newDate);
                $is_updated = true;
            }
        }
    }
    


    // Handle slash (/), hypens (-), and space ( ) , backslash (/) and Dot (.) as well  month and day bellow or equal 12 

if (preg_match('/^\s*(\d{1,2})\s*[-\/\\\.\s]\s*(\d{1,2})\s*[-\/\\\.\s]\s*(\d{4})\s*$/', $dobf, $matches) && !$is_updated) {
    $part1 = intval($matches[1]); // First number (could be day or month)
    $part2 = intval($matches[2]); // Second number (could be month or day)
    $year = $matches[3]; // Year

    // Apply condition: both must be ≤ 12
    if ($part1 <= 12 && $part2 <= 12) {
        $day = str_pad($part1, 2, '0', STR_PAD_LEFT);
        $month = str_pad($part2, 2, '0', STR_PAD_LEFT);
        $month_abbr = $month_names[$month] ?? null;

        if ($month_abbr) {
            $newDate = "{$day}-{$month_abbr}-{$year}";
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    }
}



// Handle without separator type date 12042001
if (preg_match('/^\s*(\d{2})(\d{2})(\d{4})\s*$/', $dobf, $matches) && !$is_updated) {
    $part1 = intval($matches[1]); 
    $part2 = intval($matches[2]); 
    $year = $matches[3];

    // Ensure one of the parts is a valid month (≤ 12)
    if ($part1 <= 12 && $part2 > 12) {
        $month = str_pad($part1, 2, '0', STR_PAD_LEFT);
        $day = str_pad($part2, 2, '0', STR_PAD_LEFT);
    } elseif ($part2 <= 12 && $part1 > 12) {
        $month = str_pad($part2, 2, '0', STR_PAD_LEFT);
        $day = str_pad($part1, 2, '0', STR_PAD_LEFT);
    } else {
        $day = str_pad($part1, 2, '0', STR_PAD_LEFT);
        $month = str_pad($part2, 2, '0', STR_PAD_LEFT);
    }

    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', "{$day}-{$month_abbr}-{$year}");
        $is_updated = true;
    }
}


// Handle 19/092001 &&  19:092001  these type of formate date
if (preg_match('/^\s*(\d{2})[:\/](\d{2})(\d{4})\s*$/', $dobf, $matches) && !$is_updated) {
    $day = intval($matches[1]);   
    $month = intval($matches[2]); 
    $year = $matches[3];  

    if ($month <= 12 && strlen($year) == 4) {
        $month = str_pad($month, 2, '0', STR_PAD_LEFT);
        $month_abbr = isset($month_names[$month]) ? $month_names[$month] : null;
        
        if ($month_abbr) {
            $newDate = "{$day}-{$month_abbr}-{$year}";
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    }
}

// Handle 04/02/77 ,  04:02:22  02.04.22 these type of format
if (preg_match('/^\s*(\d{1,2})[-:\/.](\d{1,2})[-:\/.](\d{2,4})\s*$/', $dobf, $matches) && !$is_updated) {
    $day = $matches[1];
    $month = str_pad($matches[2], 2, '0', STR_PAD_LEFT);
    $year = $matches[3];

    if (strlen($year) == 2) {
        $year = (intval($year) < 26) ? '20' . $year : '19' . $year;
    }

    $month_abbr = $month_names[$month] ?? null;
    
    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true; 
    }
}


// Double Validations END //



    // Handle October 15 1976 these type of formate
    $month_full_name = [
        'January' => 'Jan', 'February' => 'Feb', 'March' => 'Mar', 'April' => 'Apr',
        'May' => 'May', 'June' => 'Jun', 'July' => 'Jul', 'August' => 'Aug',
        'September' => 'Sep', 'October' => 'Oct', 'November' => 'Nov', 'December' => 'Dec'
    ];
    
    if (preg_match('/^(January|February|March|April|May|June|July|August|September|October|November|December)\s+(\d{1,2})\s+(\d{4})$/i', $dobf, $matches) && !$is_updated) {
        $month = ucfirst(strtolower($matches[1])); // Convert month to title case
        $day = str_pad($matches[2], 2, '0', STR_PAD_LEFT); // Ensure day is 2 digits
        $year = $matches[3]; // Year remains the same
    
        // Convert full month name to short abbreviation
        $month_abbr = $month_full_name[$month];
    
        // Format as "DD-MMM-YYYY"
        $newDate = "{$day}-{$month_abbr}-{$year}";
        if($month){
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    
    }



    // Check if the input matches both "DD Month YYYY" and "DD/Month/YYYY"
    if (preg_match('/^(\d{1,2})\s*\/?\s*(January|February|March|April|May|June|July|August|September|October|November|December)\s*\/?\s*(\d{4})$/i', $dobf, $matches) && !$is_updated) {
        $day = str_pad($matches[1], 2, '0', STR_PAD_LEFT); // Ensure day is 2 digits
        $month = ucfirst(strtolower($matches[2])); // Convert month to title case
        $year = $matches[3]; // Year remains the same

        // Convert full month name to short abbreviation
        $month_abbr = isset($month_full_name[$month]) ? $month_full_name[$month] : null;

        // Format as "DD-MMM-YYYY"
        $newDate = "{$day}-{$month_abbr}-{$year}";
        if ($month_abbr) {
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    }



    // Handle these type of formate 6 JUNE, 2000 
    
    if (preg_match('/^(\d{1,2})\s*[\/,\s]*\s*(January|February|March|April|May|June|July|August|September|October|November|December)\s*[\/,\s]*\s*(\d{4})$/i', $dobf, $matches) && !$is_updated) {
        $day = str_pad($matches[1], 2, '0', STR_PAD_LEFT); // Ensure day is 2 digits
        $month = ucfirst(strtolower($matches[2])); // Convert month to title case
        $year = $matches[3]; // Year remains the same
    
        // Convert full month name to title case format (preserving full name)
        $month_full = isset($month_full_name[$month]) ? $month_full_name[$month] : null;
    
        $newDate = "{$day}-{$month_full}-{$year}";
        if ($month_full) {
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    }



    // Handle 15th May 1985 , 2th January 2001  these type of formate
    if (preg_match('/^(\d{1,2})(?:st|nd|rd|th)?\s+(January|February|March|April|May|June|July|August|September|October|November|December),?\s*(\d{4})$/i', $dobf, $matches) && !$is_updated) {
        $day = str_pad($matches[1], 2, '0', STR_PAD_LEFT); // Ensure day is 2 digits
        $month = ucfirst(strtolower($matches[2])); // Convert month to title case
        $year = $matches[3]; // Extract the year
    
        // Convert full month name to short abbreviation
        $month_abbr = $month_full_name[$month] ?? null;
    
        $newDate = "{$day}-{$month_abbr}-{$year}";
        if ($month_abbr) {
            update_post_meta($order_id, 'billing_birth_date', $newDate);
            $is_updated = true;
        }
    }




// Handle "28th of November 1996" type format and convert it to "28-Nov-1996"
if (preg_match('/^\s*(\d{1,2})(st|nd|rd|th)?\s+of\s+(January|February|March|April|May|June|July|August|September|October|November|December)\s+(\d{4})\s*$/i', $dobf, $matches) && !$is_updated) {
    $day = str_pad($matches[1], 2, '0', STR_PAD_LEFT);  // Ensure day is 2 digits
    $month = ucfirst(strtolower($matches[3]));  // Convert month to title case
    $year = $matches[4];  // Year part

    $month_abbr = isset($month_full_name[$month]) ? $month_full_name[$month] : null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}




// Handle "20th Oct 1988" type format and convert it to "20-Oct-1988"
if (preg_match('/^\s*(\d{1,2})(st|nd|rd|th)?\s+(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s+(\d{4})\s*$/i', $dobf, $matches) && !$is_updated) {
    $day = str_pad($matches[1], 2, '0', STR_PAD_LEFT);  // Ensure day is 2 digits
    $month = ucfirst(strtolower($matches[3]));  // Convert month to title case
    $year = $matches[4];  // Year part

    // Convert month to full name from abbreviation
    $month_shortend_array = [
        'Jan' => 'January', 'Feb' => 'February', 'Mar' => 'March', 'Apr' => 'April',
        'May' => 'May', 'Jun' => 'June', 'Jul' => 'July', 'Aug' => 'August',
        'Sep' => 'September', 'Oct' => 'October', 'Nov' => 'November', 'Dec' => 'December'
    ];

    $month_full_name = isset($month_shortend_array[$month]) ? $month_shortend_array[$month] : null;

    if ($month_full_name) {
        // Format the date as "DD-MMM-YYYY"
        $newDate = "{$day}-" . substr($month, 0, 3) . "-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}



// 04/02/2001 &&  04:02:2001  &&  04.02.2001  &&  04 02 2001
if (preg_match('/^\s*(\d{4})[\/:\.\s](\d{2})[\/:\.\s](\d{2})\s*$/', $dobf, $matches) && !$is_updated) {
    $year = intval($matches[1]);  
    $month = intval($matches[2]); 
    $day = intval($matches[3]);   

    $month_str = $month_names[str_pad($month, 2, '0', STR_PAD_LEFT)];
    $newDate = "{$day}-{$month_str}-{$year}";
    update_post_meta($order_id, 'billing_birth_date', $newDate);
    $is_updated = true;
    
}




//  2024-24-08 && 2024:24:08 &&  2024.24.08  &&  2024/24/08   
if (preg_match('/^\s*(\d{4})[-:\/.](\d{1,2})[-:\/.](\d{1,2})\s*$/', $dobf, $matches) && !$is_updated) {
    $year = $matches[1];
    $month = str_pad($matches[2], 2, '0', STR_PAD_LEFT); // Month part
    $day = str_pad($matches[3], 2, '0', STR_PAD_LEFT);   // Day part

    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}


// Handle 1994-Jul-12 && 06-Jan-1994  these type of forate

if (preg_match('/^\s*(\d{4}|\d{2})-([A-Za-z]{3})-(\d{2})\s*$/', $dobf, $matches) && !$is_updated) {
    $year = strlen($matches[1]) == 4 ? $matches[1] : "19" . $matches[1]; 
    $month = ucfirst(strtolower($matches[2])); 
    $day = str_pad($matches[3], 2, '0', STR_PAD_LEFT);

    $newDate = "{$day}-{$month}-{$year}"; 
    update_post_meta($order_id, 'billing_birth_date', $newDate);
    $is_updated = true;
}



// Handle (14/11/1988) type of format date

if (preg_match('/^\(\s*(\d{2})\/(\d{2})\/(\d{4})\s*\)$/', $dobf, $matches) && !$is_updated) {
    $day = $matches[1];
    $month = str_pad($matches[2], 2, '0', STR_PAD_LEFT);
    $year = $matches[3];

    if($month > 12){
        $day = $matches[2];
        $month = str_pad($matches[1], 2, '0', STR_PAD_LEFT);
    }

    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}



// Handle 2008 3 10 type of format date

if (preg_match('/^\s*(\d{4})\s+(\d{1,2})\s+(\d{1,2})\s*$/', $dobf, $matches) && !$is_updated) {
    $year = $matches[1];
    $month = str_pad($matches[2], 2, '0', STR_PAD_LEFT);
    $day = $matches[3];

    if($month > 12){
        $day = $matches[2];
        $month = str_pad($matches[3], 2, '0', STR_PAD_LEFT);
    }

    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}




// Handle 24 08 72 type of format date

if (preg_match('/^\s*(\d{1,2})\s+(\d{1,2})\s+(\d{2})\s*$/', $dobf, $matches) && !$is_updated) {
    $day = $matches[1];
    $month = str_pad($matches[2], 2, '0', STR_PAD_LEFT);
    $year = $matches[3];

    if($month > 12){
        $day = $matches[2];
        $month = str_pad($matches[1], 2, '0', STR_PAD_LEFT);
    }

    if (strlen($year) == 2) {
        $year = (intval($year) < 26) ? '20' . $year : '19' . $year;
    }

    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}



// Handle 12/12/1995 extra somthing string remove

$cleaned_dob = preg_replace("/[^0-9\/]/", "", $dobf); // Remove non-numeric characters except '/'
if (preg_match('/^\s*(\d{1,2})\/(\d{1,2})\/(\d{4})\s*$/', $cleaned_dob, $matches) && !$is_updated) {
    $day = intval($matches[1]);
    $month = intval($matches[2]);
    $year = intval($matches[3]);

    // Swap if month is greater than 12
    if ($month > 12) {
        $temp = $day;
        $day = $month;
        $month = $temp;
    }

    // Convert month number to abbreviation
    $month = str_pad($month, 2, '0', STR_PAD_LEFT);
    $month_abbr = $month_names[$month] ?? null;

    if ($month_abbr) {
        $newDate = "{$day}-{$month_abbr}-{$year}";
        update_post_meta($order_id, 'billing_birth_date', $newDate);
        $is_updated = true;
    }
}

$dobf = trim($dobf); 
// Delete if it's random text for last query (no digits or no month name)
if (
    preg_match('/^[^0-9]*$/', $dobf) || 
    !preg_match('/\b(jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec|january|february|march|april|may|june|july|august|september|october|november|december)\b/i', $dobf)
) {
    delete_post_meta($order_id, 'billing_birth_date');
}



$dobf = trim($dobf); 
// Delete if it's random text for last query (no digits or no month name)
if (
    preg_match('/^[^0-9]*$/', $dobf) || 
    !preg_match('/\b(jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec|january|february|march|april|may|june|july|august|september|october|november|december)\b/i', $dobf)
) {
    delete_post_meta($order_id, 'billing_birth_date');
}





    // Validate correct formats (DD-MMM-YYYY or D-MMM-YYYY)
    if (!preg_match('/^\d{1,2}-[A-Za-z]{3}-\d{4}$/', $dobf)) {
        if(!empty($dobf)){
            echo "<a href='?id=$order_id' class='invalid-date'>$dobf</a><br>";
        }else{
            echo "<a href='?id=$order_id' class='invalid-date'>$order_id</a><br>";
        }
        
    }



}
echo '</>';

// Month dropdown options
$months = [
    '0'   => 'Month', // Default option
    'Jan' => 'January', 
    'Feb' => 'February', 
    'Mar' => 'March', 
    'Apr' => 'April', 
    'May' => 'May', 
    'Jun' => 'June', 
    'Jul' => 'July', 
    'Aug' => 'August', 
    'Sep' => 'September', 
    'Oct' => 'October', 
    'Nov' => 'November', 
    'Dec' => 'December'
];
echo '</div>';
echo '<div class="col-md-8">';
if (isset($_GET['id'])) {
    echo '<div class="selected-order-date">' . get_post_meta($_GET['id'], 'billing_birth_date', true) . '</div>';
}
?>
<!-- Birth Date Update Form -->
<form method="POST" class="birthdate-form">
    <select name="date">
        <option value="0">Date</option>
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>

    <select name="month">
        <?php
        foreach ($months as $key => $value) {
            echo "<option value='$key'>$value</option>";
        }
        ?>
    </select>

    <select name="year1">
        <option value="0">Year</option>
        <?php
        for ($i = date('Y'); $i > 1900; $i--) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <input type="submit" value="Update">
</form>
<?php

// Pagination 
echo '<div class="pagination">';
echo paginate_links(array(
    'total'   => $orders_query->max_num_pages,
    'current' => $paged,
    'format'  => '?paged=%#%',
    'prev_text' => '&laquo; Prev',
    'next_text' => 'Next &raquo;',
));
echo '</div>';
echo '</div>';
echo '</div>';
?>

<style>
/* Pagination Styling */
.pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination a, .pagination span {
    display: inline-block;
    padding: 8px 12px;
    margin: 2px;
    text-decoration: none;
    color: #0073aa;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.pagination .current {
    background-color: #0073aa;
    color: #fff;
    font-weight: bold;
}

.pagination a:hover {
    background-color: #0073aa;
    color: #fff;
}

/* Order List */
.order-list {
    margin-bottom: 20px;
}

.invalid-date {
    color: red;
    font-weight: bold;
}

.selected-order-date {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Form Styling */
.birthdate-form {
    margin-top: 20px;
}

.birthdate-form select, .birthdate-form input {
    padding: 5px;
    margin: 5px;
}
</style>

<?php
get_footer();
?>