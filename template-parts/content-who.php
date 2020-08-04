<?php
$reason_research = get_field('reason_research');

$who_section_title = get_field('who_section_title');
$reason_title1 = get_field('reason_title1');
$reason_description1 = get_field('reason_description1');
$reason_title2 = get_field('reason_title2');
$reason_description2 = get_field('reason_description2');
$reason_title3 = get_field('reason_title3');
$reason_description3 = get_field('reason_description3');

 ?>
    <!-- ========================= 為何研究wordpress主題開發 ======================= -->

<div class="reason">
        <div class="reason-text">
            <h2 class="leanFont mt-5"><?php echo $who_section_title ?></h2>
            <ul class="reason-flex">
                <li><img src="<?php echo $reason_research['url'] ?>" alt="<?php echo $reason_research['alt'] ?>"></li>
                <li>
                    <h3><?php echo $reason_title1 ?></h3>
                    <h4 class="leanFont"><?php echo $reason_description1 ?></h4 class="leanFont">
                    <h3><?php echo $reason_title2 ?></h3>
                    <h4 class="leanFont"><?php echo $reason_description2 ?></h4 class="leanFont">
                    <h3><?php echo $reason_title3 ?></h3>
                    <h4 class="leanFont"><?php echo $reason_description3 ?></h4 class="leanFont">
                
                </li>
            </ul>
        </div>
</div>