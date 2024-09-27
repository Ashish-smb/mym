<?php  include_once('inc/header.php');
    $title = "Get to Know Us";
    $subtitle = "We are a team dedicated to creating positive change in our community.";
    include_once("inner-banner.php");
?>

<section class="grid lg:grid-cols-5 px-6 lg:px-14 lg:gap-6 mb-6">

    <div class="col-span-4">
        <!-- about us -->
        <section class="mb-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="mb-2 lg:mb-0">
                    <h2 class="text-4xl font-bold mb-4">About <span class="text-yellow-400" >Us</span></h2>
                    <p class="text-gray-500 mb-3">
                        Manav Yog Manch has Completed 18 years of its Existence. Services were started in In remote Villages, our Management, and staff tried to give their best.  
                    </p>
                    <p class="text-gray-500 mb-3" >
                    This year was full of Events, Awareness Programs, regular Food distribution, and Blood Donation by our staff. We have teachers who provide free online teaching. celebration of events and all festivals., 250 children are taking education courses in our school.
                    </p>
                    
                </div>
        
                <div>
                    <div class="hidden lg:block">
                        <img src="assets/imgs/manav-yog-manch-about-us-help-childrens.jpg" alt="" class="w-full">
                    </div>
                    <div class="lg:hidden block">
                        <img src="assets/imgs/manav-yog-manch-about-us-sm-help-childrens.jpg" alt="" class="w-full" >
                    </div>
                </div>
            </div>
        </section>

        <!-- Our project -->
         <section class="grid lg:grid-cols-2 gap-4" >
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
            
            <div class="lg:py-8" >
                <h2 class="text-4xl font-bold mb-4 text-yellow-500 "> Mission</h2>
                <p class="text-gray-500 mb-3">
                    At Manav Yog Manch, our mission is to help communities grow by focusing on education, health, water, and food.
                    We believe every child deserves a chance to learn and dream big.
                    
                </p>
                <p class="text-gray-500 mb-3">
                    Our health programs support those in need, making sure everyone can stay healthy.
                    We work to provide clean water, as it’s essential for life and well-being.
                </p>
                <p class="text-gray-500">
                    Through our food programs, we fight hunger and ensure that everyone has enough to eat.
                    Together, we aim for a better future, where education, health, water, and food help everyone live happy and fulfilling lives.
                </p>
            </div>
         </section>
        
    </div>

    <div class="col-span-1">
        <?php include('inc/sidebar.php'); ?>
    </div>

</section>

<?php include_once('inc/footer.php');?>