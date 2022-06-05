<div class='socials'>
    <div class='socials-images'>
        <a href='https://t.me/<?php echo get_field('telegram', 'option') ?>'
           class='socials-image' target='_blank'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg'
                 alt='Telegram'>
        </a>
        <a href='viber://chat/?number=<?php echo get_field('viber', 'option') ?>'
           class='socials-image'
           target='_blank'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/viber.svg'
                 alt='Viber'>
        </a>
        <a href='https://wa.me/<?php echo get_field('whatsapp', 'option') ?>'
           class='socials-image' target='_blank'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/whatsapp.svg'
                 alt='WhatsApp'>
        </a>
    </div>
</div>