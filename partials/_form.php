<div class="container-fluid container-form">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form data-form>
                <input required type="hidden" name="_form" value="contacts" />
                <input required type="text" id="name" name="name" class="input" placeholder="Name and Surname" />
                <input required type="email" id="email" name="email" class="input" placeholder="Email" />
                <input required type="text" id="subject" name="subject" class="input" placeholder="Subject" />
                <textarea required id="message" name="message" rows="4" cols="50" class="textarea" placeholder="Your message"></textarea>
                <label class="container-checkbox">
                    <span class="text">I declare that I have read the Privacy Policy.</span>
                    <input required type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" class="black-button"><span class="black-button__title">Send message</span></button>
            </form>
        </div>
    </div>
</div>