<?php


if(!in_array(get_the_ID(), FACE_2_FACE_PRODUCT_CODES)){
?>
<nav id="la-single-links" class="d-none d-xl-block">
    <ul>
        <li>
            <a href="#single-course-details">Description</a>
        </li>
        <li>
            <a href="#la-accredited-by" class="open-accordion" data-target="#panelsStayOpen-collapseaccredited-by">Accreditation</a>
        </li>
        <li>
            <a href="#la-course-curriculum" class="open-accordion" data-target="#panelsStayOpen-collapsecourse-curriculum">Curriculum</a>
        </li>
        <li>
            <a href="#la-certification" class="open-accordion" data-target="#panelsStayOpen-collapsecertification">Certification</a>
        </li>
        <li>
            <a href="#la-review">Reviews</a>
        </li>
        <li>
            <a href="#la-single-faq">FAQ</a>  
        </li>
    </ul>
</nav>
<?php
}

?>