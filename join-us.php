<?php
    include_once('inc/header.php');
    $title = "Join Manav Yog Manch";
    $subtitle = "Join us to get the opportunity to serve needy people";
    include_once("inner-banner.php");
?>

<!-- inner-page -->
<section class="px-6 lg:px-14 grid lg:grid-cols-5 lg:gap-6 mb-4">

    <div class="col-span-4">
        <div class="text-center mb-6">
            <h2 class="text-4xl font-bold">Be A Volunteer with us</h2>   
            <div class="w-32 h-1 bg-orange-400 mx-auto my-4"></div>
            <div class="text-sm text-slate-500">
                Help today because tomorrow you may be the one who
                needs more helping
            </div>
        </div>

        <div class="p-6">
            <form action="#">
                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="username" class="text-sm text-gray-600">Your Name</label>
                        <input type="text" placeholder="Name" name="username" id="username" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                    <div class="mb-3">
                        <label for="father_name" class="text-sm text-gray-600">Father's Name</label>
                        <input type="text" placeholder="Father's Name" name="father_name" id="father_name" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="contact" class="text-sm text-gray-600">Contact Number</label>
                        <input type="text" placeholder="Contact Number" name="contact" id="contact" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                    <div class="mb-3">
                    <label for="email" class="text-sm text-gray-600">Email Address</label>
                    <input type="email" placeholder="Email ID" name="email" id="email" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="address_line_1" class="text-sm text-gray-600">Address Line 1</label>
                        <input type="text" placeholder="Address Line 1" name="address_line_1" id="address_line_1" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                    <div class="mb-3">
                        <label for="address_line_2" class="text-sm text-gray-600">Address Line 2</label>
                        <input type="text" placeholder="Address Line 2" name="address_line_2" id="address_line_2" class="border border-slate-400 py-2 px-3 block w-full outline-none">
                    </div>
                </div>
                
                

                <div class="mb-4">
                    <label for="area" class="text-gray-600" >Area</label>
                    <textarea 
                        name="area"
                        id="area"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3"
                        placeholder="Enter Your Area"
                    ></textarea>
                    <small class="text-sm text-gray-500">
                        Enter your Area
                    </small>
                </div>

                <div class="mb-4">
                    <label for="district" class="text-gray-600">Your District</label>
                    <textarea
                        name="district"
                        id="district"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3"
                        placeholder="Enter Your District"
                    ></textarea>
                    <small class="text-sm text-gray-500">
                        Enter your District.
                    </small>
                </div>

                <div class="mb-4">
                    <label for="work" class="work text-slate-600">Why do you want to work with us</label>
                    <textarea
                        name="work"
                        id="work"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3"
                        placeholder="Enter Your Why do you want to work with us"
                    ></textarea>
                    <small class="text-sm text-gray-500">
                        Enter Your Previous Work.
                    </small>
                </div>

                <div class="mb-4">
                    <label for="experience" class="experience text-slate-600">Describe Previous Experience</label>
                    <textarea
                        name="work"
                        id="work"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3"
                        placeholder="Describe Previous Experience"
                    ></textarea>
                    <small class="text-sm text-gray-500">
                        Enter Your Previous Work.
                    </small>
                </div>

                <div class="mb-4">
                    <label for="description" class="text-gray-600">Your Description</label>
                    <textarea
                        name="description"
                        id="description"
                        class="block w-full h-[200px] border border-slate-400 outline-none py-2 px-3"
                        placeholder="Enter Your Description"
                    ></textarea>
                    <small class="text-sm text-gray-500">
                        Enter your description, like - Work Profile, Hobbies, etc.
                    </small>
                </div>
                
                <button class="bg-danger-light btn btn-md text-white font-semibold" >
                    Submit
                </button>
            </form>

        </div>

    </div>

    <div class="col-span-1">
        <?php include('inc/sidebar.php'); ?>        
    </div>

</section>
<?php include_once('inc/footer.php') ?>