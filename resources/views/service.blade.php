@include('include.frontheader')
<section class="video_section position-relative">
    <img src="{{url(asset('images/banner1.jpg'))}}" alt="video"/>
    <div class="position-absolute w-100 h-100 justify-content-center align-items-center d-flex">
        <h1 class="text-light overlay_heading">SERVICE</h1>
    </div>
</section>

<section class="service_section back_golden position-relative">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-seed-tab" data-toggle="pill" href="#pills-seed" role="tab"
               aria-controls="pills-seed" aria-selected="true">SEEDS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-seedlings-tab" data-toggle="pill" href="#pills-seedlings" role="tab"
               aria-controls="pills-seedlings" aria-selected="false">SEEDLINGS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-clones-tab" data-toggle="pill" href="#pills-clones" role="tab"
               aria-controls="pills-clones" aria-selected="false">CLONES</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-pre-tab" data-toggle="pill" href="#pills-pre" role="tab"
               aria-controls="pills-pre" aria-selected="false">PRE-ROLLS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-blomass-tab" data-toggle="pill" href="#pills-blomass" role="tab"
               aria-controls="pills-blomass" aria-selected="false">BLOMASS</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-flower-tab" data-toggle="pill" href="#pills-flower" role="tab"
               aria-controls="pills-flower" aria-selected="false">FLOWER</a>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-seed" role="tabpanel" aria-labelledby="pills-seed-tab">
            <h2 class="default_button bg-black item_shadow">SEEDS</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            <div class="tabs_points mt-3">
                <h3>SEED OFFERINGS:</h3>
                <ul>
                    <li>- <a href="#" class="text_golden px-1">KLR_#1</a> - Sativa Dom Hybrid</li>
                    <li>- <a href="#" class="text_golden px-1">KLR_#2</a> - Sativa Dom Hybrid</li>
                    <li>- <a href="#" class="text_golden px-1">KLR_#3</a> - Sativa Dom Hybrid</li>
                    <li>- <a href="#" class="text_golden px-1">KLR_#4</a> - Sativa Dom Hybrid</li>
                    <li>- <a href="#" class="text_golden px-1">KLR_#5</a> - Sativa Dom Hybrid</li>
                </ul>
            </div>
            <a href="#" class="default_button bg-black position-relative float-right item_shadow mr-4">ORDER REQUEST</a>
        </div>
        <div class="tab-pane fade" id="pills-seedlings" role="tabpanel" aria-labelledby="pills-seedlings-tab">
            SEEDLINGS
        </div>
        <div class="tab-pane fade" id="pills-clones" role="tabpanel" aria-labelledby="pills-clones-tab">
            CLONES
        </div>
        <div class="tab-pane fade" id="pills-pre" role="tabpanel" aria-labelledby="pills-pre-tab">
            PRE-ROLLS
        </div>
        <div class="tab-pane fade" id="pills-blomass" role="tabpanel" aria-labelledby="pills-blomass-tab">
            BLOMASS
        </div>
        <div class="tab-pane fade" id="pills-flower" role="tabpanel" aria-labelledby="pills-flower-tab">
            FLOWER
        </div>
    </div>
</section>


<section class="service_section back_golden pb-5">
    <div class="service_section_gallery container">
        <div class="row">
            <div class="col-md-4 pr-0">
                <div class="left__image">
                    <img src="{{url(asset('images/4.collage.jpg'))}}" alt="gallery"/>
                </div>
            </div>
            <div class="col-md-4 pl_12 pr_12 pr-0">
                <div class="right_top_image mb-3">
                    <img src="{{url(asset('images/2.collage.jpg'))}}" alt="gallery"/>
                </div>
                <div class="row">
                    <div class="col-md-6 pl_12 pr_12 pr-0">
                        <div class="right_bottom_image">
                            <img src="{{url(asset('images/3.collage.jpg'))}}" alt="gallery"/>
                        </div>
                    </div>
                    <div class="col-md-6 pl_12 pr_12">
                        <div class="right_bottom_image">
                            <img src="{{url(asset('images/4.collage.jpg'))}}" alt="gallery"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pr-0">
                <div class="left__image">
                    <img src="{{url(asset('images/4.collage.jpg'))}}" alt="gallery"/>
                </div>
            </div>
        </div>
    </div>
</section>
@include('include.frontfooter')
