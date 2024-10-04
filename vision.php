<?php include_once('inc/header.php');
    $title = "Our Goals for Tomorrow";
    $subtitle = "Our vision is a world where everyone has the opportunity to thrive and succeed.";
    include_once("inner-banner.php"); ?>

<section class="grid lg:grid-cols-5 px-6 lg:px-14 ">
    <!-- Vision -->
    <section class="col-span-4 py-16">
        <div class=" grid lg:grid-cols-2 gap-4 bg-gray-200 ">
            <div class="text-center lg:text-start p-6">
                <span class="font-bold uppercase text-amber-950 ms-2">our vision</span>
                <h1 class="text-5xl font-bold my-5 font-playfair tracking-wide">Finding Solutions Together</h1>
                <p class="text-slate-500 text-lg mb-10">
                    When creating an NGO vision Focus on sharing goals like empowerment, education, health, and sustainability in a fresh way. Always give credit for quotes or ideas from others to respect their work. This helps clearly communicate your vision and builds a culture of creativity and trust, making your NGO more credible in the community.
                </p>
                <a href="donate.php" class="py-4 px-8 bg-danger-light text-white font-semibold duration-300 hover:bg-warning-light">
                    Together We Change
                </a>
            </div>
    
            <div>
                <img src="assets/imgs/children2.jpeg" alt="" class="w-full lg:h-full object-cover">
            </div>
        </div>
    </section>

    <!-- sidebar -->
    <div class="col-span-1 p-4">
        <?php
            $page = "vision";
            include('inc/sidebar.php');
        ?>
    </div>
</section>


<?php include_once('inc/footer.php') ?>