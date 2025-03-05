export function loadGetInTouch() {
  document.getElementById('getintouch').innerHTML = `
        <div class="bg-light pt-10 pb-10">
            <div class="container">
                <div class="max-w-50 m-auto text-center mb-5">
                    <h2 class="fw-bold">Get In Touch</h2>
                    <div>Our team is here to help with all your fleet management services and leasing needs. Fill out the form below, and our team will get back to you promptly.</div>
                </div>
                <form class="max-w-70 m-auto">
                <div class="row">
                    <!-- Full Name -->
                    <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" required>
                    </div>

                    <!-- Email Address -->
                    <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Phone Number -->
                    <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" required>
                    </div>

                    <!-- Date for Callback -->
                    <div class="col-md-6 mb-3">
                    <label for="callbackDate" class="form-label">Preferred Date for Callback</label>
                    <input type="date" class="form-control" id="callbackDate" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    `;
}
