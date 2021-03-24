<!-- inc/cta.php -->
<div class="c-calltoaction">
    <p class="c-calltoaction__text">まずはお電話か<br class="sp">メールにてご連絡ください。</p>
        <div class="c-calltoaction__middle">
            <p class="c-calltoaction__tel-time">24時間受付</p>
            <p class="c-calltoaction__tel-number">
                <?php if(is_mobile()): ?>
                <a href="tel:0120-71-1212">0120-71-1212</a>
                <?php else: ?>
                    0120-71-1212
                <?php endif; ?>
            </p>
        </div>
        <div class="c-calltoaction__form">
            <a href="<?php echo esc_url( home_url("/contact/")); ?>">お申し込みフォーム</a>
        </div>
</div>
<!-- inc/cta.php -->