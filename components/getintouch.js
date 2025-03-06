export function loadGetInTouch() {
  document.getElementById('getintouch').innerHTML = `
        <div class="bg-light pt-10 pb-10">
            <div class="container">
                <div class="max-w-50 m-auto text-center mb-5">
                    <h2 class="fw-bold text-uppercase">Get In Touch</h2>
                    <div>Our team is here to help with all your fleet management services and leasing needs. Fill out the form below, and our team will get back to you promptly.</div>
                </div>
                <form class="max-w-70 m-auto">
                <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control form-control-lg border-0 rounded-0" id="fullName" required>
                    </div>

                    <!-- Email Address -->
                    <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control form-control-lg border-0 rounded-0" id="email" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Phone Number -->
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control form-control-lg border-0 rounded-0" id="phone" required>
                    </div>

                    <!-- Date for Callback -->
                    <div class="col-md-6 mb-3">
                        <label for="callbackDate" class="form-label">Preferred Date for Callback</label>
                        <div class="position-relative">
                            <input type="date" class="form-control form-control-lg border-0 rounded-0" id="callbackDate" required>
                            <div class="bg-gray p-2 position-absolute top-0 end-0 pointer-events-none">
                                <img src="images/calendar-icon.png" alt="Calendar" width="29">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 d-flex justify-content-center">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary text-white fw-bold">
                        <div class="d-flex align-items-center gap-2">
                        <div class="text-uppercase">Get Expert Advice</div>
                        <div class="flex-grow-1">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z"/>
                            <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                            </svg>
                        </div>
                        </div>
                    </button>
                </div>
                </form>
            </div>
        </div>
    `;
}
