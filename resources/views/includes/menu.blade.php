<?php
$pages = \App\Models\js_site_pages::all()->where('show_in_menu', '1')->sortBy('id');
?>
<div class="main_menu">
    <ul>
    <?php
    foreach ($pages as $key => $page){
        echo '<li><a href="'.$page['link'].'">'.$page['name'].'</a></li>';
    }
    ?>
    </ul>
</div>
