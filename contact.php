


<?php include 'header.php';?>




<section class="engine"><a href="https://mobirise.co/p">bootstrap dropdown</a></section><section class="mbr-section content5 cid-qBYZOzDWoV mbr-parallax-background" id="content5-11" data-rv-view="792">

 <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">
                    Contact us</span></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section234 form4 cid-qBYZHwBjQy" id="form4-10" data-rv-view="797">

    

    
    <div class="container">
        <div class="row">
                <div class="col-md-2"></div>
            <div class="col-md-8">
          
                <div>
                    <div class="icon-block pb-3">
                   
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            CONTACT US
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                   
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Phone: +91-9826021003  <br>
                            Phone: +91-9826021003 <br>
                            Email: contact@webdesky.com 
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                        Thanks for filling out the form!
                    </div>
                    <form class="block mbr-form" method="post" data-form-title="Mobirise Form" id='contact_form'>
                        <input type="hidden" data-form-email="true" value="IbX7uU+oJ6QLs5tzrKyA5Mp0EUvn5l3niJnipbP6e/oBXwF1FcSfGhG9jRpLIepCTXjUA+bBkTGlsS8RKQrfR7UhQVTOO7BcebakrshESfPkmmG3ZN24ioe/GVePqif9">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" id="name-form4-10">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-10">
                            </div>
                            <div class="col-md-6" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-10">
                            </div>
                            <div class="col-md-6" data-for="subject">
                                <input class="form-control input" name="subject" rows="3" data-form-field="Subject" placeholder="Subject" style="resize:none" id="message-form4-10"/>
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" data-form-field="Message" placeholder="Message" id="message-form4-10"></textarea>
                            </div>
                            
                            <div class='col-md-12' data-for='captcha'>
                                <div class="g-recaptcha" data-sitekey="6LdKCj4UAAAAAGZZztOUfFd1zU19vvYdOtxOrcPc"></div>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <input type="submit" class="btn btn-primary btn-form display-4" id='contact_btn' value='SEND MESSAGE'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-qBZ076K1iF" id="social-buttons1-12" data-rv-view="800">
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook mx-2" title="Share link on Facebook">
                        <a href="https://www.facebook.com/webdesky.infotech.5" target="_blank">
                            <i class="socicon socicon-facebook"></i> </a>
                        </span>
                        <span class="btn btn-social twitter mx-2" title="Share link on Twitter">
                        <a href="https://twitter.com/Webdeskyinfo?lang=en" target="_blank">
                            <i class="socicon socicon-twitter"></i></a>
                        </span>
                        <span class="btn btn-social plusone mx-2" title="Share link on Google+">
                        <a href="http://www.linkedin.com/in/webdesky-infotech225588"  target="_blank">
                            <i class="socicon socicon-googleplus"></i></a>
                        </span>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
<script src='https://www.google.com/recaptcha/api.js'></script>


<script type="text/javascript">
$('#contact_form').on('submit', function(e) {
    if (grecaptcha.getResponse() == "") {
        e.preventDefault();
        alert("Please verify captcha");
    } else {
        $.ajax({
            url: 'contact_form.php',
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                console.log(data);
                if(data==1){
                    alert('Enquiry succesfully Submitted');
                    window.location.reload();
                }

            },
        });
    }
});
</script>




