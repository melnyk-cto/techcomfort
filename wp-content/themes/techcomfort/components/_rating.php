<?php
    global $starsArray;
    global $showCountsReviews;
    global $sumReviews;
?>

<div class='rating'>
    <?php for ($r = 1; $r <= 5; $r++) { ?>
        <?php if ($sumReviews < $r) { ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                 viewBox="0 0 24 24">
                <path style="fill:#DADADA"
                      d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
            </svg>
        <?php } else { ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                 viewBox="0 0 24 24">
                <path style="fill:#FFDC96"
                      d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
            </svg>
        <?php } ?>
    <?php } ?>
    <?php
        if ($starsArray) {
            if ($showCountsReviews) { ?>
                <div class='reviews-count'> <?php echo count($starsArray) ?> отзывов</div>
            <?php }
        } ?>
</div>