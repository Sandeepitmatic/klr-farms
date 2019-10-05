@include('include.frontheader')
<section class="video_section position-relative">
    <img src="{{url(asset('images/banner4.jpg'))}}" alt="video"/>
    <div class="position-absolute w-100 h-100 justify-content-center align-items-center d-flex">
        <h1 class="text-light overlay_heading">ABOUT</h1>
    </div>
</section>

<section class="about_farms bg-black">
    <div class="container py-5">
        <div class="section_heading">
            <h1 class="text-light">KLR FARMS</h1>
            <span class="text_golden mb-2">Insert interesting catchphrase here</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries.</p>
        </div>

        <div class="row gallery_images mt-5">
            <div class="col-md-5 pl_12 pr_12">
                <div class="left__image">
                    <img src="{{url(asset('images/4.collage.jpg'))}}" alt="gallery"/>
                </div>
            </div>
            <div class="col-md-7 pl_12 pr_12">
                <div class="right_top_image mb-4">
                    <img src="{{url(asset('images/2.collage.jpg'))}}" alt="gallery"/>
                </div>
                <div class="row">
                    <div class="col-md-5 pl_12 pr_12">
                        <div class="right_bottom_image">
                            <img src="{{url(asset('images/3.collage.jpg'))}}" alt="gallery"/>
                        </div>
                    </div>
                    <div class="col-md-7 pl_12 pr_12">
                        <div class="right_bottom_image">
                            <img src="{{url(asset('images/4.collage.jpg'))}}" alt="gallery"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_farms bg-black pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section_heading text-left align-items-start">
                    <h1 class="text-light mb-3">James Knox</h1>
                    <p class="mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries.</p>


                    <p class="text-light mb-0">
                        <img src="{{url(asset('images/icon.png'))}}" alt="icon"/>
                        James has been one of the most prevalent and knowledgeable strategic partners in the growing
                        hemp industry, his honesty and quality of products has facilitated expansion of hemp throughout
                        the nation.</p>
                    <span class="text_golden mb-2 text-right w-100 mb-3">-Oregon Hemp Connect</span>


                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and
                        scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="float-left w-100 h-100 grey_back">

                </div>
            </div>
        </div>

    </div>
</section>
@include('include.frontfooter')
