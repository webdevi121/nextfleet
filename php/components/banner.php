<div class="banner-section">
    <div class="background-overlay">
        <img src="images/building-bg.jpg">
    </div>
    <div class="overflow-hidden">
        <div class="container position-relative z-2 pb-5">
            <div class="banner-item">
                <div class="position-relative h-100">
                    <div class="col-xl-7 position-relative z-3">
                        <h1 class="fw-800">FLEET MANAGEMENT SERVICES SIMPLIFIED</h1>
                        <p>NextFleet simplifies leasing and fleet management, delivering tailored solutions to optimise and support your fleet, effortlessly.</p>
                        <div>

                        <form id="contactForm" class="row g-2">
                        <div class="col-12 col-md">
                            <input type="text" class="form-control custom-height" placeholder="Your Name" required>
                        </div>
                        <div class="col-12 col-md">
                            <input type="tel" class="form-control custom-height" placeholder="Your Number" required>
                        </div>
                        <div class="col-12 col-md-auto">
                            <button type="submit" class="btn btn-primary custom-height w-100 rounded-3 cursor-pointer">
                            Start A Discussion
                            </button>
                        </div>
                        </form>

                        <!-- Thank you message (hidden by default) -->
                        <div id="thankYouMessage" class="alert alert-success mt-3 d-none">
                            Thanks for contacting us! We will get in touch with you shortly.
                        </div>

                        <script>
                        document.getElementById("contactForm").addEventListener("submit", function(e) {
                            e.preventDefault(); // stop form from refreshing the page
                            console.log('test')
                            document.getElementById("thankYouMessage").classList.remove("d-none"); // show message
                            this.reset(); // clear inputs
                        });
                        </script>

                        </div>
                    </div>
                    <div class="partner-logos">
                        <ul>
                            <li><img src="images/logos-1.png" alt="Logo"></li>
                            <li><img src="images/logos-2.png" alt="Logo"></li>
                            <li><img src="images/logos-3.png" alt="Logo"></li>
                        </ul>
                    </div>
                    <div class="d-none d-sm-block chevron pointer-events-none">
                        <img src="images/chevron.png" alt="chevron">
                    </div>
                    <div class="the-car">
                        <!-- <img src="images/nf-img-72.png" alt="" class="w-100 w-sm-auto fade-image"> -->
                        <img src="images/nf-img-73.png" alt="" class="w-100 w-sm-auto fade-image--">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>