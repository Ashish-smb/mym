<!-- A word from president -->


<div class="flex items-center py-2 gap-2 mb-3">
    <img src="assets/imgs/manav-yog-manch-members.jpg" alt="" class="rounded-full w-20 h-20">
    <div>
        <h1 class="font-semibold text-red-700">Rampratap Nath</h1>
        <p class="text-gray-500 text-sm">Building a Future of Possibilities for Everyone</p>
    </div>
</div>

<!-- Donate Button -->
<a href="donate.php" class="border bg-orange-500 text-center w-full text-white font-bold py-2 inline-block gap-1 items-center px-4 hover:bg-success-dark duration-500 mb-2">
    <i class="fa-solid fa-indian-rupee-sign"></i>
    Donate Us
</a>

<!-- Mission - few words -->
<div class="mb-3">
    <h1 class="font-semibold text-danger-light">
        Mission
    </h1>
    <div class="w-32 h-[2px] bg-yellow-600 my-2"></div>
    <ul class="space-y-2 text-sm mb-4">
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
                Helping Communities Thrive Together
        </li>
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
                Bringing Hope and Support to Those in Need
        </li>
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
                Uniting for a Better Future
        </li>
    </ul>

    <a href="mission.php" class="w-32 px-4 py-2 text-xs gap-2 bg-orange-600 text-white flex items-center hover:bg-danger-light duration-500 group">
        Go To Mission
        <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 duration-300"></i>
    </a>
</div>

<!-- Vision - few words -->
<div class="mb-3">
    <h1 class="font-semibold text-danger-light">
        Vision
    </h1>
    <div class="w-32 h-[2px] bg-yellow-600 my-2"></div>
    <ul class="space-y-2 text-sm mb-4" >
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
            A World Where Everyone Is Valued
        </li>
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
            Building Stronger Communities for All
        </li>
        <li class="flex items-start gap-4 text-slate-600">
            <i class="fa-solid fa-arrow-right text-sm"></i>
            Inspiring Change for a Better Tomorrow
        </li>
        
    </ul>

    <a href="vision.php" class="w-32 px-4 py-2 text-xs gap-2 bg-orange-600 text-white flex items-center hover:bg-danger-light duration-500 group">
        Go To Vision
        <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 duration-300"></i>
    </a>
</div>

<!-- Our Projects -->
<div cass="mb-4 border" >
    <h1 class="font-semibold text-danger-light">
        Our Projects
    </h1>
    <div class="w-32 h-[2px] bg-yellow-600 my-2"></div>

    <div class="flex lg:grid lg:grid-cols-3 mb-3">
        <img src="assets/imgs/fonts/food-manav-yog-manch.jpg" class="w-16 lg:w-full col-span-1" alt="">
        <div class="col-span-2" >
            <h2 class="font-bold text-sm">Healthy Food</h2>
            <p class="text-gray-600 text-sm">
                Making Sure Everyone Has Enough to Eat
            </p>
        </div>
    </div>

    <div class="flex lg:grid lg:grid-cols-3 mb-3">
        <img src="assets/imgs/fonts/education-manav-yog-manch.jpg" class="w-16 lg:w-full col-span-1" alt="">
        <div class="col-span-2" >
            <h2 class="font-bold text-sm">Education</h2>
            <p class="text-gray-600 text-sm">
                The Importance of Health and Education for Poor Children
            </p>
        </div>
    </div>

    <div class="flex lg:grid lg:grid-cols-3 mb-3">
        <img src="assets/imgs/fonts/pure-water-manav-yog-manch.png" class="w-16 lg:w-full col-span-1" alt="">
        <div class="col-span-2" >
            <h2 class="font-bold text-sm">Pure Water</h2>
            <p class="text-gray-600 text-sm">
                The Connection Between Clean Water and Child Health
            </p>
        </div>
    </div>

    <div class="flex lg:grid lg:grid-cols-3 mb-3">
        <img src="assets/imgs/fonts/medical-manav-yog-manch.png" class="w-16 lg:w-full col-span-1" alt="">
        <div class="col-span-2" >
            <h2 class="font-bold text-sm">Medical</h2>
            <p class="text-gray-600 text-sm">
                Health Care Access for Disadvantaged Youth
            </p>
        </div>
    </div>
    
    <a href="our-projects.php" class="mb-4 w-32 px-4 py-2 text-xs gap-2 bg-orange-600 text-white flex items-center hover:bg-danger-light duration-500 group">
        Go To Projects
        <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 duration-300"></i>
    </a>
</div>

<!-- Image Gallery -->
<div>
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

        