<?php
    global $postId;
    $userID = get_user_meta(get_current_user_id());
    $favorites = $userID['favorite'];
?>

<?php
    // Обработка полей формы
    wp_enqueue_script('jquery-form');

    // Подключаем скрипты формы
    wp_enqueue_script('ajax-form-compare-favorite', get_theme_file_uri('/assets/js/compare-favorite.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form-compare-favorite', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>

<form id='form-compare-favorite' class='description-icons'>
    <button type='submit' class='icon compare-js submit-icon-js' data-name='compare' data-id='<?php echo $postId ?>'>
        <svg id="Сгруппировать_2793" data-name="Сгруппировать 2793"
             xmlns="http://www.w3.org/2000/svg" width="31.918"
             height="24.554" viewBox="0 0 31.918 24.554">
            <path id="Контур_724" data-name="Контур 724"
                  d="M31.461,67.082,27.419,58.54h1.687a.7.7,0,1,0,0-1.406H18.947a3.058,3.058,0,0,0-5.976,0H2.812a.7.7,0,1,0,0,1.406H4.5L.457,67.082A.7.7,0,0,0,0,67.715a5.554,5.554,0,0,0,5.554,5.554h.035a5.7,5.7,0,0,0,5.624-5.589.6.6,0,0,0-.492-.6L6.679,58.54h6.292a3.093,3.093,0,0,0,2.285,2.144V73.832a4.781,4.781,0,0,0-4.148,4.781.668.668,0,0,0,.667.669h8.332a.668.668,0,0,0,.7-.632c0-.012,0-.024,0-.036a4.781,4.781,0,0,0-4.148-4.781V60.685a3.093,3.093,0,0,0,2.285-2.144h6.292L21.2,67.082a.633.633,0,0,0-.492.633,5.554,5.554,0,0,0,5.554,5.554h.035a5.66,5.66,0,0,0,5.624-5.554A.738.738,0,0,0,31.461,67.082ZM5.589,71.863h0a4.148,4.148,0,0,1-4.113-3.48H9.737A4.289,4.289,0,0,1,5.589,71.863Zm3.55-4.886h-7.1l3.55-7.628Zm10.194,10.9H12.585a3.621,3.621,0,0,1,3.375-2.742A3.621,3.621,0,0,1,19.334,77.874ZM15.959,59.349A1.652,1.652,0,1,1,17.611,57.7,1.652,1.652,0,0,1,15.959,59.349Zm10.37,0,3.55,7.628h-7.1Zm-.035,12.514a4.148,4.148,0,0,1-4.113-3.48h8.261A4.289,4.289,0,0,1,26.294,71.863Z"
                  transform="translate(0 -54.727)"></path>
        </svg>
    </button>
    <button type='submit' class='icon favorites-js submit-icon-js <?php if (in_array($postId, $favorites))  echo ' active'?>' data-name='favorites' data-id='<?php echo $postId ?>'>
        <svg xmlns="http://www.w3.org/2000/svg" width="27"
             height="24.07" viewBox="0 0 27 24.07">
            <g id="Сгруппировать_2766"
               data-name="Сгруппировать 2766"
               transform="translate(1 -0.465)">
                <path id="Контур_714" data-name="Контур 714"
                      d="M18.359,1.465a5.919,5.919,0,0,0-3.7,1.278,8.421,8.421,0,0,0-2.163,2.6,8.42,8.42,0,0,0-2.163-2.6,5.919,5.919,0,0,0-3.7-1.278C2.855,1.465,0,4.561,0,8.668,0,13.1,3.562,16.139,8.954,20.734c.916.78,1.953,1.665,3.032,2.608a.782.782,0,0,0,1.029,0c1.079-.943,2.117-1.828,3.033-2.609C21.438,16.139,25,13.1,25,8.668,25,4.561,22.145,1.465,18.359,1.465Z"
                      fill="none" stroke="#6b92b0"
                      stroke-width="2" />
            </g>
        </svg>
    </button>
</form>