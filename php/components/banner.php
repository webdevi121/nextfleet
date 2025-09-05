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
                            <!-- Step 1: Email -->
                            <div id="step1" class="row g-2">
                                <div class="col-12 col-md">
                                    <input type="email" class="form-control custom-height" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <button type="button" id="nextBtn" class="btn btn-primary custom-height w-100 rounded-3 cursor-pointer">
                                        Start A Discussion
                                    </button>
                                </div>
                            </div>

                            <!-- Step 2: Name + Number (hidden at first) -->
                            <div id="step2" class="row g-2 d-none">
                                <div class="col-12 col-md">
                                    <input type="text" class="form-control custom-height" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-12 col-md">
                                    <input type="tel" class="form-control custom-height" name="number" placeholder="Your Number" required>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <button type="submit" class="btn btn-primary custom-height w-100 rounded-3 cursor-pointer">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Thank you message (hidden by default) -->
                        <div id="thankYouMessage" class="alert alert-success mt-3 d-none">
                            Thanks for contacting us! We will get in touch with you shortly.
                        </div>

<script>
function goToStep2() {
    const emailInput = document.querySelector('input[name="email"]');
    if (emailInput.checkValidity()) {
        document.getElementById("step1").classList.add("d-none");
        document.getElementById("step2").classList.remove("d-none");
    } else {
        emailInput.reportValidity();
    }
}

document.getElementById("nextBtn").addEventListener("click", goToStep2);

// Handle Enter key on email field
document.querySelector('input[name="email"]').addEventListener("keydown", function(e) {
    if (e.key === "Enter") {
        e.preventDefault(); // stop form submit
        goToStep2();
    }
});

document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Hide both steps
    document.getElementById("step1").classList.add("d-none");
    document.getElementById("step2").classList.add("d-none");

    // Show thank you
    const thankYou = document.getElementById("thankYouMessage");
    thankYou.classList.remove("d-none");

    this.reset();

    // After 5 seconds hide thank you and return to step 1
    setTimeout(() => {
        thankYou.classList.add("d-none");
        document.getElementById("step1").classList.remove("d-none");
    }, 5000);
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