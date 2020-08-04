<?php
$youtube_section_title = get_field('youtube_section_title');
$youtube_section_video_id = get_field('youtube_section_video_id');
?>

<!-- ================================== Youtube視訊欄位 ================================ -->
<div class="text-center some-spaces">
    <div class="container">
        <!-- <h2 class="leanFont">觀看課程推廣視頻</h2> -->
        <h2 class="leanFont"><?php echo $youtube_section_title ?></h2>
        <div class="embed-responsive embed-responsive-4by3 mt-5">
            <!-- <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/UyiGok88e60"></iframe> -->
      	<iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $youtube_section_video_id; ?>"></iframe>
        </div>

    </div>
</div>