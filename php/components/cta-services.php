<div class="bg-primary rounded-4 text-center py-5 pb-5 overflow-hidden position-relative mt-4">
    <img
        src="images/cta-arrow.png"
        alt="icon"
        class="position-absolute top-0 start-0 col-2 d-none d-sm-block h-100"
    />
    <div class="col-10 col-sm-8 m-auto">
        <p class="fs-4 fw-bold mb-3 text-white">
            <?php echo $text ?? 'Default CTA text'; ?>
        </p>
        <a href="contact.html" class="btn btn-primary text-white fw-bold bg-white">
            <div class="d-flex align-items-center gap-2">
                <div class="text-uppercase text-black">
                    <?php echo $buttonText ?? 'Default CTA text'; ?>
                </div>
                <div class="flex-grow-1">
                    <svg
                        width="15"
                        height="15"
                        viewBox="0 0 15 15"
                        fill="text-black"
                    >
                        <path d="M10 5.9948L6.13869 12H4.66296L8.52427 5.9948L4.66296 0H6.13869L10 5.9948Z" />
                        <path d="M7.34813 5.9948L3.48682 12H2L5.8613 5.9948L2 0H3.48682L7.34813 5.9948Z" />
                    </svg>
                </div>
            </div>
        </a>
    </div>
</div>
