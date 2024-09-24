<?php include_once('inc/header.php');
    $title = "Moments to Remember";
    $subtitle = "Explore our gallery to see the impact we’re making in the community.";
    include_once("inner-banner.php"); ?>
<section class="px-6 lg:px-14 mb-6" x-data="{ currentTab : 'tab1'}">
    <div class="text-center mb-4">
        <span class="text-slate-500 text-lg font-semibold"> Gallery </span>
        <h2 class="text-3xl font-bold mb-4">
            Explore our gallery to know how we works
        </h2>
        <div class="bg-orange-500 w-32 h-1 mx-auto" ></div>
    </div>

    <div class="grid grid-cols-3 gap-6 mb-4" x-show="currentTab == 'tab1'">
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallery.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryone.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerytwo.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfour.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfive.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerysix.jpg" alt="">
        </div>
    </div>
    
    <div class="grid grid-cols-3 gap-6 mb-4" x-show="currentTab == 'tab2'">
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerysix.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryone.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerytwo.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfour.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfive.jpg" alt="">
        </div>
        
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallery.jpg" alt="">
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6 mb-4" x-show="currentTab == 'tab3'">
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerysix.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryone.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallerytwo.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfour.jpg" alt="">
        </div>
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-galleryfive.jpg" alt="">
        </div>
        
        <div class="brightness-50 hover:brightness-95 duration-500">
            <img src="assets/imgs/manav-yog-manch-gallery.jpg" alt="">
        </div>
    </div>

    <div class="flex justify-end">
          <button class="items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            <span class="sr-only">Previous</span>
            <i class="fa-solid fa-chevron-left text-sm"></i>
          </button>
          
          <button 
          :class="[currentTab == 'tab1' ? 'bg-indigo-500 text-white' : 'bg-white text-black']"
          class="items-center px-4 py-2 text-sm font-semibold border" id="tab1" 
          @click="currentTab = 'tab1'">1
        </button>
          <button 
          :class="[currentTab == 'tab2' ? 'bg-indigo-500 text-white' : 'bg-white text-black']"
          class="items-center px-4 py-2 text-sm font-semibold border" id="tab2"
           @click="currentTab = 'tab2'">2
        </button>
          <button 
          :class="currentTab == 'tab3' ? 'bg-indigo-500 text-white' : 'bg-white text-black'"
          class="items-center px-4 py-2 text-sm font-semibold border" id="tab3" 
          @click="currentTab = 'tab3'">3
        </button>
          
          <button class=" items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
            <span class="sr-only">Next</span>
            <i class="fa-solid fa-chevron-right text-sm"></i>
          </button>

      </div>

</section>
<?php include_once('inc/footer.php') ?>