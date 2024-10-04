<?php include_once('inc/header.php');
    $title = "What We Aim to Do";
    $subtitle = "Our mission is to support and uplift those in need, creating a brighter future for all.";
    include_once("inner-banner.php"); ?>

<section class="grid lg:grid-cols-5 px-6 lg:px-14 lg:gap-6 mb-6">
    <!-- Mission -->
    <div class="col-span-4 mb-6">
    
        <!-- Mission Content  -->
        <div class="lg:py-12 mb-6 lg:mb-0">
            <h2 class="text-4xl font-bold mb-4 text-yellow-500 "> Mission</h2>
            <p class="text-gray-500 mb-3">
                At Manav Yog Manch, we know that education opens doors. We provide scholarships, learning materials, and support for teachers to inspire young minds.
                In health, we organize free check-ups and health camps, making medical care accessible to everyone in our community.
                Our clean water projects bring safe drinking water to villages, reducing illness and improving quality of life.
                Through community kitchens and food drives, we ensure that no one goes hungry, sharing meals and fostering togetherness.
            </p>
            <p class="text-gray-500 mb-3">
                We believe that every small step counts. Together, we can build stronger, healthier communities where everyone has the opportunity to thrive.
                Join us in this journey to create lasting change, because a better tomorrow starts with us today!
            </p>

            <a href="donate.php" class="border bg-orange-500 text-white font-bold py-2 inline-block gap-1 items-center px-4 rounded text-lg hover:bg-success-dark duration-500">
                <i class="fa-solid fa-indian-rupee-sign"></i>
                Donate Us
            </a>
        </div>    

        <!-- projects -->
        <div class="grid sm:grid-cols-2 gap-6">
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
        </div>
        
    </div>

    <!-- sidebar -->
    <div class="col-span-1">
        <?php
            $page = "mission";
            include('inc/sidebar.php');
        ?>
    </div>
</section>

<?php include_once('inc/footer.php') ?>