<?php include_once('inc/header.php')?>

<!-- Donate Us -->
<section class="px-6 lg:px-14 mb-6 mt-4" x-data="{ donateAmount: undefined }">
    <div class="grid sm:grid-cols-3 gap-6">
        <div class="text-white cursor-pointer" @click.prevent="donateAmount = 100">
            <img src="assets/imgs/images-1.jpg" class="w-full" alt="">

            <div class="text-center py-2 bg-gradient-to-r to-danger-light from-yellow-600" >
                <h2 class="text-lg lg:text-4xl font-bold" >
                    ₹100
                </h2>
                <p class="text-sm lg:text-xl font-semibold" >
                    Provide Shelter For Children
                </p>
            </div>
            
        </div>

        <div class="text-white cursor-pointer" @click.prevent="donateAmount = 200">
            <img src="assets/imgs/images2.jpg" class="w-full" alt="">

            <div class="text-center py-2 bg-gradient-to-r to-yellow-600 from-danger-light ">
                <h2 class="text-lg lg:text-4xl font-bold" >
                    ₹200
                </h2>
                <p class="text-sm lg:text-xl font-semibold" >
                    Provide the Education
                </p>
            </div>
            
        </div>

        <div class="text-white cursor-pointer" @click.prevent="donateAmount = 300">
            <img src="assets/imgs/manav-yog-manch-distribute-bags.jpeg" class="w-full" alt="">

            <div class="text-center py-2 bg-gradient-to-r to-danger-light from-yellow-600">
                <h2 class="text-lg lg:text-4xl font-bold" >
                    ₹300
                </h2>
                <p class="text-sm lg:text-xl font-semibold" >
                    Provide Domestic Uses
                </p>
            </div>
            
        </div>

    </div>

    <div class="bg-gray-200 py-6" id="donate" >
        <form action="donate.html">
            <div class="flex flex-col lg:flex-row items-center gap-4 justify-center">
                <label for="amount" class="text-xl font-bold ">Donate Custom Amount </label>
                <div class="flex items-center" >
                    <span class="text-3xl mx-2 ">₹</span>
                    <input type="number" min="1" placeholder="Other" x-model="donateAmount" name="amount" class="p-2 w-[200px] placeholder:font-bold outline-none">
                </div>
                <button type="submit" class="font-semibold bg-danger-light text-white p-2 px-4">
                    <i class="fas fa-hand-holding-dollar mr-1"></i>
                    Donate Now
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Vision us -->
<section class="px-4 lg:px-14 py-16">
    <div class=" grid lg:grid-cols-2 gap-4 bg-gray-200 ">
        <div class="text-center lg:text-start p-6">
            <span class="font-bold uppercase text-amber-950 ms-2">our vision</span>
            <h1 class="text-5xl font-bold my-5 font-playfair tracking-wide">Finding Solutions Together</h1>
            <p class="text-slate-500 text-lg mb-10">
                When creating an NGO vision Focus on sharing goals like empowerment, education, health, and sustainability in a fresh way. Always give credit for quotes or ideas from others to respect their work. This helps clearly communicate your vision and builds a culture of creativity and trust, making your NGO more credible in the community.
            </p>
            <a href="#" class="py-4 px-8 bg-danger-light text-white font-semibold duration-300 hover:bg-warning-light">
                Our Vision
            </a>
        </div>

        <div>
            <img src="assets/imgs/children2.jpeg" alt="" class="w-full h-full lg:h-[450px] object-cover">
        </div>
    </div>
</section>

<!-- projects -->
<section class="px-4 lg:px-14 mb-8">
    <h2 class="text-4xl text-center mx-auto border-danger-light  border-b-2 font-semibold pb-4 mb-4 inline-block">
        Our <span class="font-bold text-orange-500">Projects</span> 
    </h2>

    <div class="grid sm:grid-cols-2  lg:grid-cols-4 gap-6">
        <div class="text-center group border-2 border-danger-light  p-2 border-dashed" >
            <img src="assets/imgs/fonts/food-manav-yog-manch.jpg" class="w-1/2 mx-auto group-hover:-translate-y-1 duration-500" alt="">
            <h2 class="text-2xl font-bold mb-3" >Healthy Food</h2>
            <p class="text-gray-600">
                Making Sure Everyone Has Enough to Eat
            </p>
        </div>
        
        <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
            <img src="assets/imgs/fonts/education-manav-yog-manch.jpg" class="w-1/2 mx-auto group-hover:-translate-y-1 duration-500" alt="">
            <h2 class="text-2xl font-bold mb-3" >Education</h2>
            <p class="text-gray-600 " >
                The Importance of Health and Education for Poor Children
            </p>
        </div>

        <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
            <img src="assets/imgs/fonts/pure-water-manav-yog-manch.png" class="w-1/2 mx-auto group-hover:-translate-y-1 duration-500" alt="">
            <h2 class="text-2xl font-bold mb-3" >Pure Water</h2>
            <p class="text-gray-600">
                The Connection Between Clean Water and Child Health
            </p>
        </div>

        <div class="text-center group border-2 border-danger-light  p-2 border-dashed">
            <img src="assets/imgs/fonts/medical-manav-yog-manch.png" class="w-1/2 mx-auto group-hover:-translate-y-1 duration-500" alt="">
            <h2 class="text-2xl font-bold mb-3" >Medical</h2>
            <p class="text-gray-600" >
                Health Care Access for Disadvantaged Youth
            </p>
        </div>
    </div>
</section>

<?php include_once('inc/footer.php')?>