@include('include.frontheader')
<section class="video_section">
    <img src="{{url(asset('images/banner.jpg'))}}" alt="video"/>
</section>
<section class="video_section back_golden">
    <div class="container py-5">
        <div class="section_heading">
            <h1>INTERESTING TAG LINE HERE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </div>
</section>

<section class="request_quote bg-black py-5">
    <div class="px-5">
        <div class="heading_with_back heading_gradient w-100 mb-5">
            <h1>REQUEST A QUOTE</h1>
        </div>
        <form class="row">
            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label for="first">Name</label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="first" placeholder="First">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="last" placeholder="Last">
                    </div>
                </div>
                <div class="form-group">
                    <label for="business">Business Name</label>
                    <input type="text" class="form-control" id="business" placeholder="">
                </div>
                <div class="form-group">
                    <label for="addressline1">Address</label>
                    <input type="text" class="form-control" id="addressline1"
                           placeholder="Address line 1">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="addressline2"
                           placeholder="Address line 2">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="city"
                               placeholder="City">
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>State/Province</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inquiring">Products Inquiring About</label>
                    <input type="text" class="form-control" id="inquiring" placeholder="">
                </div>
                <div class="form-group">
                    <label for="hear">How did you hear about us?</label>
                    <textarea class="form-control" id="hear" rows="2">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="comments">Additional comments</label>
                    <textarea class="form-control" id="comments" rows="2">

                    </textarea>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn default_button back_dark_golden">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="release_section back_golden py-5">
    <div class="px-5">
        <div class="heading_with_back bg-black mb-5">
            <h1>PRESS RELEASE</h1>
        </div>
        <div class="float-left w-100">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="light_back_round w-100 p-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="light_back_round">
                                    <img class="w-100 item_shadow" src="{{url(asset('images/growing-exposed.jpg'))}}"
                                         alt="video"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="light_back_round section_text position-relative h-100">
                                    <h2>Central Oregon Cannabis Growing - Growning Exposed Season 2 Episode 8</h2>
                                    <span class="text_golden fw_400 mb-3 float-left w-100">Growning Exposed</span>
                                    <p>"James Knox, of KLR Farms is a grower with over twenty years of commercial
                                        growning experience, and he isn't afraid to pull any punches when it comes
                                        to..."</p>

                                    <div class="d-flex flex-row justify-content-end align-items-end btn_absolute_bottom"
                                         style="right: 0;">
                                        <button type="submit" class="btn default_button bg-black">WATCH</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="light_back_round section_text p-3 position-relative h-100">
                        <h2>Review : KLR Farms</h2>
                        <span class="text_golden fw_400 mb-3 float-left w-100">Dope Magazine</span>
                        <p>"James Knox, owner and operator of KLR Farms in Albany, Oregon, has been growing plants for
                            most of his life. While KLR Farms is only about two-years-old, Knox has been growing
                            cannabis in a variety of different environments and mediums since the inceptvion of the
                            Oregon Medical..."</p>
                        <div class="d-flex flex-row justify-content-end align-items-end btn_absolute_bottom mb-3">
                            <button type="submit" class="btn default_button bg-black item_shadow">READ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="light_back_round">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="light_back_round pl-3 py-3">
                                    <img class="w-100 item_shadow" src="{{url(asset('images/article.jpg'))}}"
                                         alt="video"/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="light_back_round section_text py-3 py-3">
                                    <h2>Central Oregon Cannabis Growing - Growning Exposed Season 2 Episode 8</h2>
                                    <span class="text_golden fw_400 mb-3 float-left w-100">Growning Exposed</span>
                                    <p>"James Knox, of KLR Farms is a grower with over twenty"</p>
                                    <div
                                        class="d-flex flex-row justify-content-end align-items-end btn_absolute_bottom mb-3 mr-3">
                                        <button type="submit" class="btn default_button bg-black item_shadow">READ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="float-right w-100 d-flex flex-row justify-content-end align-items-end px-5 mt-5">
        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" class="btn default_button bg-black item_shadow">EXPLORE MORE</button>
            </div>
        </div>
    </div>
</section>


@include('include.frontfooter')
