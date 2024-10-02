<?php echo $view->getThemePath(); ?>
<h2> Cards</h2>
<div class="group flex flex-wrap p-2 bg-transparent hover:bg-gradient-green-yellow w-[412px] h-[388px] rounded-small ">
    <div class="relative w-full h-full rounded-small-internal overflow-clip ">
        <img class="w-full h-full object-cover z-10" src="<?php echo $view->getThemePath(); ?>/images/card-placeholder.png" alt="Placeholder">
        <div class="w-full h-full absolute z-20 top-0 right-0 bg-black/20 group-hover:bg-black/0">
            <img class="w-1/2 mx-auto h-full object-contain flex group-hover:invisible" src="<?php echo $view->getThemePath(); ?>/images/espn-white.svg" alt="Placeholder">
        </div>
    </div>
</div>
<div class="group flex flex-wrap p-2 bg-transparent hover:bg-gradient-green-yellow w-[573px] h-[323px] rounded-small ">
    <div class="relative w-full h-full rounded-small-internal overflow-clip ">
        <img class="w-full h-full object-cover z-10" src="<?php echo $view->getThemePath(); ?>/images/card-work-placeholder.png" alt="Placeholder">
        <div class="w-full h-full absolute z-20 top-0 right-0 bg-black/20 group-hover:bg-black/0 text-white flex flex-col items-start justify-end p-[45px]">
            <h6>Project Title Here</h6>
            <h5>Client Name Here</h5>
        </div>
    </div>
</div>