<?php include_once('inc/header.php');

    $title = "Moments to Remember";
    $subtitle = "Explore our gallery to see the impact we’re making in the community.";
    include_once("inner-banner.php"); ?>
<section class="px-6 lg:px-14 mb-6 grid lg:grid-cols-5 lg:gap-6" x-data="{ currentTab : 'tab1'}">
    <div class="col-span-4">
        <div class="text-center mb-4">
            <span class="text-slate-500 text-lg font-semibold"> Gallery </span>
            <h2 class="text-3xl font-bold mb-4">
                Explore our gallery to know how we works
            </h2>
            <div class="bg-orange-500 w-32 h-1 mx-auto" ></div>
        </div>
    
        
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 mb-4" x-show="currentTab == 'tab1'">
            <?php
                $directory = 'assets/imgs/gallery/';
                $thumbs = glob( $directory . "*_thumb.{jpg,jpeg,png,gif}", GLOB_BRACE);

                $current_page = (int) ($_GET['page'] ?? 1);
                $max_per_page = 12;
                $last_item = $current_page * $max_per_page;
                $start_item = $current_page * $max_per_page - $max_per_page;
            ?>
            <?php for( $i = $start_item; $i < $last_item; $i++ ): if( isset( $thumbs[$i] ) ): ?>
                    <?php
                        $filenameWithThumb = basename($thumbs[$i]);
                        $org_image = str_replace('_thumb', '', $filenameWithThumb);
                    ?>
                    <div class="brightness-50 hover:brightness-95 duration-500">
                        <a href="<?= $directory . $org_image ?>" data-fancybox="mym-gallery">
                            <img src="<?= $thumbs[$i] ?>" alt="">
                        </a>
                    </div>
            <?php else: break; endif; endfor; ?>
        </div>
    
        <div class="flex justify-end" >
            <?php 
                    $total_pages = ceil(count($thumbs) / $max_per_page); // Calculate total pages

                    for ($page = 1; $page <= $total_pages; $page++): 
                        $isActive = $current_page === $page ? 'bg-red-500 text-white' : 'bg-white text-black';
            ?>
                    <a href="gallery.php?page=<?= $page ?>" class="<?= $isActive ?> border px-4 py-2">
                        <?= $page ?>
                    </a>
            <?php 
                endfor; 
            ?>
        </div>

    </div>

    <div class="col-span-1" >
        <?php
            $page = 'gallery';
            include('inc/sidebar.php'); 
         ?>
    </div>
</section>
<?php include_once('inc/footer.php') ?>