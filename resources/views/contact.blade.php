@include('include.frontheader')
<section class="video_section position-relative">
    <img src="{{url(asset('images/banner1.jpg'))}}" alt="video"/>
    <div class="position-absolute w-100 h-100 justify-content-center align-items-center d-flex">
        <h1 class="text-light overlay_heading">CONTACT</h1>
    </div>
</section>

<section class="contact_section back_golden py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact_cards bl_20">
                    <img src="{{url(asset('images/order-black.png'))}}" alt="video"/>
                    <h2>ORDER REQUEST</h2>
                    <p>Fill out form</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_cards">
                    <img src="{{url(asset('images/email-black.png'))}}" alt="video"/>
                    <h2>EMAIL</h2>
                    <p>info@yourdomain.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_cards br_20">
                    <img src="{{url(asset('images/phone-black.png'))}}" alt="video"/>
                    <h2>CALL</h2>
                    <p>+1 242 4942 290</p>
                </div>
            </div>
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

<section class="contact_section back_golden py-5">
    <div class="col-md-6">
        <h1>SEND US AN EMAIL</h1>
        <p>Ask us about anything</p>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4"></label>
                    <input style="margin-top: 1.3rem" type="password" class="form-control" id="inputPassword4"
                           placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Business name</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Email</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            Message
            <div class="form-group">
                <label for="inputAddress2">Subject</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn default_button float-right bg-black item_shadow">Submit</button>
        </form>
    </div>
</section>

@include('include.frontfooter')
