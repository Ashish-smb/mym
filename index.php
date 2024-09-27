<?php include_once('inc/header.php');?>

<!-- banner -->
<section class="px-6 lg:px-14 mb-8 lg:py-8  ">
    <div class="grid grid-cols-1 lg:grid-cols-6 lg:gap-2 overflow-hidden">
        <div class="col-span-4 h-[600px] relative mb-4 lg:mb-0">
            <img src="assets/imgs/manav-yog-manch-banner1.jpg" alt="" class="w-full h-full object-cover lg:rounded-l brightness-90">
            <div class="absolute top-10 px-6">
                <p class="text-2xl text-white font-semibold">
                    Child Crutely and Neglect Crimes Continue to Rise Every Year
                </p>
                <p class="text-slate-200">
                    Poor children often struggle to get a good education, which limits their future opportunities and dreams.
                </p>
            </div>
            <div class="absolute bottom-10 px-6">
                <p class="text-2xl text-white font-semibold">
                    Raise Your Voice Against the Child Crutely
                </p>
                <p class="text-slate-200">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>

        <div class="col-span-2 grid-rows-2 h-[600px] w-full lg:gap-2 lg:block">
            <div class="relative h-[300px] w-full mb-2">
                <img src="assets/imgs/manav-yog-manch-banner2.jpeg" alt="" class="w-full h-full object-cover lg:rounded-r brightness-50">
                <div class="absolute bottom-5 px-6">
                    <p class="text-xl text-white font-semibold">
                        Make Childrens Happy
                    </p>
                    <p class="text-slate-200 text-sm">
                        Every child should have a chance to grow and dream.
                    </p>
                </div>
            </div>
            <div class="relative h-[300px] w-full">
                <img src="assets/imgs/manav-yog-manch-banner3.jpg" alt="" class="w-full h-full object-cover lg:rounded-r brightness-50">
                <div class="absolute bottom-5 px-6">
                    <p class="text-xl text-white font-semibold">
                        Make Childrens Happy
                    </p>
                    <p class="text-slate-200 text-sm">
                        Many of them do not have enough healthy food to eat, affecting their growth and energy levels.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events sections -->
<section class=" grid lg:grid-cols-8 md:grid-cols-1 lg:gap-5 bg-slate-100  px-6 lg:px-14  mb-8 py-10">
    <div class="lg:col-span-2">
        <div class="bg-white rounded-lg shadow-lg p-4 mb-6">
            <h1 class="font-semibold text-lg text-red-700 m-0">Vision</h1>
            <span class="bg-slate-300 w-full h-px block my-2"></span>
            <h6 class="font-semibold mb-2 text-danger-light">Donate to Others for Self</h6>
            <p class="text-gray-500 text-sm">
                Our NGO visions a future where everyone has access to education, healthcare, and livelihoods, empowering communities to thrive together and ensuring no one is left behind.
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4 mb-6">
            <h1 class="font-semibold text-lg text-red-700">Members</h1>
            <span class="bg-slate-300 w-full h-px block my-2"></span>
            
            <div class="flex items-center gap-5 py-2">
                <img src="assets/imgs/manav-yog-manch-member.jpeg" alt="" class="rounded-full h-20 w-20 ">
                <div>
                    <h1 class="font-semibold text-lg text-red-700">Vishwajeet Nath</h1>
                    <p class="text-gray-500 text-sm">Volunteers Manager</p>
                </div>
            </div>
            <span class="bg-slate-300 w-full h-px block my-2"></span>
            
            
            
            <div class="flex items-center py-2 gap-5">
                <img src="assets/imgs/manav-yog-manch-members.jpg" alt="" class="rounded-full w-20 h-20">
                <div>
                    <h1 class="font-semibold text-lg text-red-700">Rampratap Nath</h1>
                    <p class="text-gray-500 text-sm">Volunteers Manager</p>
                </div>
            </div>
            
           
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4">
            <h1 class="font-semibold text-danger-light">
                    Gallery
                </h1>
                <div class="w-32 h-[2px] bg-yellow-600 my-2"></div>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    <?php for($i = 1; $i <= 6; $i++): ?>
                        <img src="assets/imgs/gallery/lg-pic<?= $i ?>.jpg" alt="">
                    <?php endfor;?>
                </div>

                <a href="gallery.php" class="w-32 px-4 py-2 text-xs gap-2 bg-orange-600 text-white flex items-center hover:bg-danger-light duration-500 group">
                    Go To Gallery
                <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 duration-300"></i>
            </a>
        </div>

    </div>
    <div class="lg:col-span-4">
        <div class="bg-white rounded-lg shadow-lg p-6 space-y-5">

            <div class="flex gap-5 ">
                <h1 class="font-semibold text-xl text-red-700">What We Do?</h1>
            </div>
            <div class="bg-slate-200 w-full h-px">
                <div class="bg-red-700 w-24 h-px"></div>
            </div>
            <img src="assets/imgs/manav-yog-manch-banner1.jpg" alt="" class="w-full object-cover">
            
            <div>   
                <div class="flex flex-col sm:flex-row gap-5 mb-4">
                    <img src="assets/imgs/manav-yog-manch-distribute-bags.jpeg" alt="" class="shrink-0 object-cover sm:w-36">
                    <div>
                        <h1 class="font-semibold text-lg text-red-700">FREE SCHOOL BAG DISTRIBUTION</h1>
                        <p class="text-gray-500 text-sm">
                            We give free school bags to children in need, helping them carry their books and supplies for school.
                        </p>
                    </div>
                </div>
                <div class="text-center ">
                    <span class="bg-slate-200 w-full h-px block"></span>
                </div>
            </div>

            <div>
                <div class="flex gap-5 mb-4 flex-col sm:flex-row">
                    <img src="assets/imgs/manav-yog-manch-provide-education.jpeg" alt="" class="object-cover sm:w-36 shrink-0 w-full">
                    <div>
                        <h1 class="font-semibold text-lg text-red-700">FREE EDUCATION PROVIDE</h1>
                        <p class="text-gray-500 text-sm">
                            We offer quality education and resources to help children follow their dreams and escape poverty.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <span class="bg-slate-200 w-full h-px block"></span>
                </div>
            </div>

            <div>
                <div class="flex gap-5 mb-4 flex-col sm:flex-row">
                    <img src="assets/imgs/manav-yog-manch-distribute-food.jpeg" alt="" class="object-cover sm:w-36 shrink-0 w-full">
                    <div>
                        <h1 class="font-semibold text-lg text-red-700">FREE MID-DAY MEAL DISTRIBUTION</h1>
                        <p class="text-gray-500 text-sm">
                            Our program ensures every child gets a healthy meal at school to stay focused and attend regularly.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <span class="bg-slate-200 w-full h-px block"></span>
                </div>
            </div>
            
            <div>
                <div class="flex gap-5 flex-col sm:flex-row">
                    <img src="assets/imgs/manav-yog-manch-distribute-mask.jpeg" alt="" class="object-cover sm:w-36 shrink-0 w-full">
                    <div>
                        <h1 class="font-semibold text-lg text-red-700">FREE MASK AND SANIZER COVID 19</h1>
                        <p class="text-gray-500 text-sm">
                            We give masks to keep children safe and teach them about hygiene.
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="lg:col-span-2">
        <div class="bg-white rounded-lg shadow-lg capitalize p-4">
            <h1 class="font-semibold text-lg text-red-700">Empowering Lives Through Education</h1>
            <span class="bg-slate-300 w-full h-px block my-2"></span>
            <p class="text-gray-500 mb-4 text-sm">We offer quality education and resources to help children.</p>
            
            <a href="donate.php" class="bg-red-700 block text-center text-white font-semibold px-6 py-2 rounded w-full">Donate Now</a>
        </div>

        <div class="bg-white rounded-lg my-8 shadow-lg p-4 space-y-4">

        <?php
            $events = [
                [
                    'id' => 1,
                    'img' => 'assets/imgs/children.jpeg',
                    'title' => 'Provide Education',
                    'content' => 'Everyone Can Access Education',
                ],
                [
                    'id' => 2,
                    'img' => 'assets/imgs/children1.jpeg',
                    'title' => 'Distribute Books',
                    'content' => 'Everyone Can Gain Knowledge',
                ],
                [
                    'id' => 3,
                    'img' => 'assets/imgs/children2.jpeg',
                    'title' => 'Provide Food',
                    'content' => 'No One Can Sleep Without Eating Food',
                ],
                [
                    'id' => 4,
                    'img' => 'assets/imgs/work.jpeg',
                    'title' => 'Distribute Senitizer Mask',
                    'content' => 'Take Care of Poor Children Medical Hygiene',
                ],
                [
                    'id' => 5,
                    'img' => 'assets/imgs/bag.jpeg',
                    'title' => 'Distribute School Bags',
                    'content' => 'Take Care of Domestic Goods',
                ],
            ]
        ?>

            <?php foreach($events as $event): ?>
                <div class="grid grid-cols-2 gap-5">
                    <img src="<?=  $event['img'] ?>" alt="" class="w-full object-cover lg:object-fill h-[100px] rounded">
                    <div>
                        <h1 class="font-bold text-red-700"><?= $event['title'] ?></h1>
                        <p class="text-gray-500 text-sm"><?= $event['content'] ?></p>
                    </div>
                    
                </div>

                <div class="text-center">
                    <span class="bg-slate-300 w-full h-px block"></span>
                </div>

            <?php endforeach;?>

            <div class="grid grid-cols-2 gap-5">
                <img src="assets/imgs/manav-yog-manch-provide-education.jpeg" alt="" class="w-full h-[100px] object-cover lg:object-fill rounded">
                <div>
                    <h1 class="font-bold text-sm text-red-700">Helping hand for Education</h1>
                    <p class="text-gray-500 text-sm">Everyone Can Gain Knowledge</p>
                </div>
            </div>
           
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="px-6 lg:px-14 mb-8 "> 
    <h2 class="text-4xl text-center font-bold mb-8">
        Testimonial
    </h2>

    
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="p-4">

            <h2 class="text-4xl font-bold mb-8 text-red-700">
                Reviews
            </h2>
            <div class="owl-carousel testimonial-carousel mb-4">

            <?php
                $testimonials = [
                    [
                        "id" => 1,
                        "content" => "I volunteered with this NGO, and it was an inspiring experience. Their dedication to education and community empowerment truly makes a difference. The passionate team left me feeling motivated about the impact we can create together!",
                        "name" => "Manish Aggarwal",
                        "work" => "Run an NGO"
                    ],
                    [
                        "id" => 2,
                        "content" => "I volunteered with this NGO, and it was an inspiring experience. Their dedication to education and community empowerment truly makes a difference. The passionate team left me feeling motivated about the impact we can create together!",
                        "name" => "Rajeev Ranjan",
                        "work" => "News Anchor"
                    ],
                    [
                        "id" => 3,
                        "content" => "I volunteered with this NGO, and it was an inspiring experience. Their dedication to education and community empowerment truly makes a difference. The passionate team left me feeling motivated about the impact we can create together!",
                        "name" => "Vishesh Nagpan",
                        "work" => "Government Officer"
                    ],
                ];
            ?>

            <?php foreach( $testimonials as $testimonial ): ?>
                <div>
                    <p class="text-gray-500 mb-4">
                        <i class="fa-solid fa-quote-left text-gray-200 text-7xl"></i>
                        <br>
                        <?= $testimonial['content']; ?>
                    </p>
                    <h2 class="text-2xl font-semibold ">
                        <?= $testimonial['name']; ?>
                    </h2>
                    <span class="text-slate-500">
                        <?= $testimonial['work']; ?>
                    </span>
                </div>
            <?php endforeach; ?>
    
            </div>

            <a href="donate.php" class="border text-xl px-6 py-2 rounded font-bold bg-danger-light text-white hover:bg-red-700 duration-800 group duration-500">
                Donate Us 
                <i class="fa-solid fa-arrow-right ml-2 -rotate-45 group-hover:rotate-0 duration-500"></i>
            </a>
        </div>

        <div class="h-[400px]">
            <img src="assets/imgs/testimonial.jpg" alt="" class="h-full w-full shrink-0 object-cover lg:object-contain">
        </div>
    </div>

</section>

<?php include_once('inc/footer.php');?>