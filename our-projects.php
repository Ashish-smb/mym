<?php include_once('inc/header.php');
    $title = "What We’re Working On";
    $subtitle = "Our projects aim to bring positive change and support to our community.";
    include_once("inner-banner.php"); ?>

<div class="section px-6 lg:px-14 grid lg:grid-cols-5 lg:gap-6 mb-6">
    <div class="col-span-4">
        <!--Our Project  -->
        <section class="mb-8">
            <h2 class="text-4xl text-center mx-auto border-danger-light  border-b-2 font-semibold pb-4 inline-block">
                Our <span class="font-bold text-orange-500">Projects</span> 
            </h2>
        
            <div class="grid sm:grid-cols-2  gap-6 py-6">
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed" >
                        <img src="assets/imgs/fonts/food-manav-yog-manch.jpg" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" >Healthy Food</h2>
                        <p class="text-gray-600">
                            Making Sure Everyone Has Enough to Eat
                        </p>
                    </div>
                    
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
                        <img src="assets/imgs/fonts/education-manav-yog-manch.jpg" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" >Education</h2>
                        <p class="text-gray-600 " >
                            The Importance of Health and Education for Poor Children
                        </p>
                    </div>
            
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
                        <img src="assets/imgs/fonts/pure-water-manav-yog-manch.png" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" >Pure Water</h2>
                        <p class="text-gray-600">
                            The Connection Between Clean Water and Child Health
                        </p>
                    </div>
            
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
                        <img src="assets/imgs/fonts/medical-manav-yog-manch.png" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" >Medical</h2>
                        <p class="text-gray-600" >
                            Health Care Access for Disadvantaged Youth
                        </p>
                    </div>
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
                        <img src="assets/imgs/fonts/manav-yog-manch-Enviorment.png" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3" >Enviorment</h2>
                        <p class="text-gray-600" >
                            Acting Now: Small Changes for a Big Impact
                        </p>
                    </div>
                    <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
                        <img src="assets/imgs/fonts/manav-yog-manch-disaster.png" class="w-1/3 mx-auto group-hover:-translate-y-1 duration-500" alt="">
                        <h2 class="text-2xl font-bold mb-3">Disaster Relief</h2>
                        <p class="text-gray-600" >
                            Rebuilding Together: Life After a Disaster
                        </p>
                    </div>
            </div>
        </section>
    </div>

    <div class="col-span-1">
        <?php 
            $page = 'projects';
            include('inc/sidebar.php');
        ?>
    </div>

</div>


<?php include_once('inc/footer.php') ?>