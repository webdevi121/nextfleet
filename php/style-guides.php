<?php
require_once __DIR__ . '/functions.php';
ob_start();
?>

    <?php loadComponent("header");?>
        <div class="grid g-5">
                <section class="bg-white pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="cols-12">
                                <h1 class="mb-4">Form Fields Style Guide</h1>
                                <form>
                                    <!-- Text Inputs -->
                                    <div class="mb-3">
                                    <label for="textInput" class="form-label">Text Input</label>
                                    <input type="text" class="form-control" id="textInput" placeholder="Enter text">
                                    </div>

                                    <div class="mb-3">
                                    <label for="emailInput" class="form-label">Email Input</label>
                                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                    </div>

                                    <div class="mb-3">
                                    <label for="passwordInput" class="form-label">Password Input</label>
                                    <input type="password" class="form-control" id="passwordInput">
                                    </div>

                                    <!-- Select -->
                                    <div class="mb-3">
                                    <label for="selectInput" class="form-label">Select</label>
                                    <select class="form-select" id="selectInput">
                                        <option selected>Select an option</option>
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                    </select>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="mb-3">
                                    <label for="textareaInput" class="form-label">Textarea</label>
                                    <textarea class="form-control" id="textareaInput" rows="3"></textarea>
                                    </div>

                                    <!-- Checkboxes -->
                                    <div class="mb-3">
                                    <label class="form-label d-block">Checkboxes</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">Check 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check2" checked>
                                        <label class="form-check-label" for="check2">Check 2 (Checked)</label>
                                    </div>
                                    </div>

                                    <!-- Radios -->
                                    <div class="mb-3">
                                    <label class="form-label d-block">Radio Buttons</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioOptions" id="radio1" checked>
                                        <label class="form-check-label" for="radio1">Radio 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioOptions" id="radio2">
                                        <label class="form-check-label" for="radio2">Radio 2</label>
                                    </div>
                                    </div>

                                    <!-- Switches -->
                                    <div class="mb-3">
                                    <label class="form-label d-block">Switches</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch</label>
                                    </div>
                                    </div>

                                    <!-- Range -->
                                    <div class="mb-3">
                                    <label for="rangeInput" class="form-label">Range Input</label>
                                    <input type="range" class="form-range" id="rangeInput">
                                    </div>

                                    <!-- File Upload -->
                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">File input</label>
                                    <input class="form-control" type="file" id="formFile">
                                    </div>

                                    <!-- Disabled Input -->
                                    <div class="mb-3">
                                    <label for="disabledInput" class="form-label">Disabled Input</label>
                                    <input type="text" class="form-control" id="disabledInput" placeholder="Disabled" disabled>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-gray pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="cols-12">
                                <!-- Solid buttons -->
                                <h2 class="mb-4">Button Variations</h2>
                                <div class="mb-3">
                                    <h5>Solid Buttons</h5>
                                    <button class="btn btn-primary">Primary</button>
                                    <button class="btn btn-secondary">Secondary</button>
                                    <button class="btn btn-success">Success</button>
                                    <button class="btn btn-danger">Danger</button>
                                    <button class="btn btn-warning">Warning</button>
                                    <button class="btn btn-info">Info</button>
                                    <button class="btn btn-light">Light</button>
                                    <button class="btn btn-dark">Dark</button>
                                    <button class="btn btn-link">Link</button>
                                </div>

                                <!-- Outline buttons -->
                                <div class="mb-3">
                                    <h5>Outline Buttons</h5>
                                    <button class="btn btn-outline-primary">Primary</button>
                                    <button class="btn btn-outline-secondary">Secondary</button>
                                    <button class="btn btn-outline-success">Success</button>
                                    <button class="btn btn-outline-danger">Danger</button>
                                    <button class="btn btn-outline-warning">Warning</button>
                                    <button class="btn btn-outline-info">Info</button>
                                    <button class="btn btn-outline-light">Light</button>
                                    <button class="btn btn-outline-dark">Dark</button>
                                </div>

                                <!-- Button Sizes -->
                                <div class="mb-3">
                                    <h5>Button Sizes</h5>
                                    <button class="btn btn-primary btn-sm">Small Button</button>
                                    <button class="btn btn-primary">Default Button</button>
                                    <button class="btn btn-primary btn-lg">Large Button</button>
                                </div>

                                <!-- Block Button -->
                                <div class="mb-3">
                                    <h5>Block Button</h5>
                                    <button class="btn btn-primary w-100 mb-2">Full-width Button</button>
                                </div>

                                <!-- Disabled Buttons -->
                                <div class="mb-3">
                                    <h5>Disabled Buttons</h5>
                                    <button class="btn btn-primary" disabled>Primary Disabled</button>
                                    <button class="btn btn-outline-secondary" disabled>Outline Disabled</button>
                                </div>
                                
                                <div class="input-group mb-3" style="max-width: 400px;">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="input-group-text bg-primary text-white" type="button">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>

                                <div class="input-group" id="datepicker" >
                                    <input type="text" class="form-control" placeholder="Select date" />
                                    <span class="input-group-text bg-primary text-white" id="calendar-icon">
                                        <i class="fa-solid fa-calendar-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="cols-12">
                                <h2>Dropdowns</h2>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>                            
                            </div>
                        </div>
                    </div>
                </section>

                </div>            

        </div>
    <?php loadComponent("footer"); ?>
