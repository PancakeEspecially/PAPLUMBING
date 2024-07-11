<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'codeflakes/head-data.php'; ?>
        <title>PA Plumbing: Email Us</title>
    </head>
    <body>
        <header>
            <?php include 'codeflakes/topnavigation.php'; ?>
        </header>
        <section class="section">
            <H1>Email PA Plumbing</H1>
            <h2>Email us using the form below.  We will get back to you shortly.</h2>
            <form class="email-form" action="mechanical/email-gears.php" method="POST">
                <fieldset>
                <legend class="tag">Contact Information</legend>
                    <label for="sender">Full Name: 
                        <input id="sender" name="sender" placeholder="Full Name" type="text" required /></label>
                    <label for="company">Company Name: 
                        <input id="company" name="company" placeholder="Company Name" type="text" required /></label>
                    <label for="email">Email Address: 
                        <input id="email" name="email" type="email" placeholder="you@yourdomain.com" required /></label>
                    <label for="telephone">Contact Number: 
                        <input id="phone" name="phone" type="telephone" placeholder="(000)000-0000" required /></label><br>
                </fieldset>
                <fieldset class="selection">
                    <legend class="tag">We Can Respond</legend>
                    <input type="radio" id="contact-preference" name="respond-by" value="email">          
                    <label for="contact-preference">By Email</label>
                    <input type="radio" id="telephone" name="respond-by" value="phone">  
                    <label for="telephone">By Telephone</label>
                    <input type="radio" id="no-preference" name="respond-by" value="no-preference">
                    <label for="no-preference">No Preference</label>
                </fieldset>
                <fieldset>
                    <legend class="tag">Your Message</legend>
                    <label for="emailBody"> Message:</label>
                        <textarea id="email-body" type="file" name="emailBody"rows="3" cols="30" placeholder="Please type your message here..." required></textarea>
                    <input id="submit" type="submit" name="submitEmail" value="SEND">
                </fieldset>
            </form>
        <section> 
       
        <?php include 'codeflakes/footer-social-media.php'; ?>
       

    </body>    
   
</html>