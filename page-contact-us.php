<?php

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message)
{
    global $response;

    if ($type == "success") {
        $response = "<div class='alert alert-success'>{$message}</div>";
    } else {
        $response = "<div class='alert alert-warning'>{$message}</div>";
    }
}

//response messages
$not_human = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid = "Email Address Invalid.";
$message_unsent = "Message was not sent. Try Again.";
$message_sent = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST["message_name"];
$email = $_POST["message_email"];
$message = $_POST["message_text"];
$human = $_POST["message_human"];

//php mailer variables
$to = "admin@jirehelec.co.za";
$subject = "Message from the " . get_bloginfo("name") . " website.";
$headers = "From: " . $email . "\r\n" . "Reply-To: " . $email . "\r\n";

if (!$human == 0) {
    if ($human != 2) {
        my_contact_form_generate_response("error", $not_human);
    }
    //not human!
    else {
        //validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            my_contact_form_generate_response("error", $email_invalid);
        }
        //email is valid
        else {
            //validate presence of name and message
            if (empty($name) || empty($message)) {
                my_contact_form_generate_response("error", $missing_content);
            }
            //ready to go!
            else {
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
            }
        }
    }
} elseif ($_POST["submitted"]) {
    my_contact_form_generate_response("error", $missing_content);
}
?>

<?php get_header(); ?>

<main class="contact-us">

    <div class="contact-us__content container">
        <div class="row">
            <div class="col-12 col-lg-6">

                <h1><?php the_title(); ?></h1>

                <?php get_template_part("includes/section", "content"); ?>

            </div>
            <div class="contact-us__form-wrapper col-12 col-lg-6">

                <h1>Message us</h1>
                <p>Send a message straight to our inbox, we'll get back to you in no time!</p>
 
                <div id="respond">
                    <?php echo $response; ?>
                    <form class="custom-form" action="<?php the_permalink(); ?>" method="post">
                        <div class="custom-form__name">
                            <label for="name">Name: <span>*</span></label>
                            <input type="text" name="message_name" value="<?php echo esc_attr(
                                $_POST["message_name"]
                            ); ?>">
                        </div>
                        <div class="custom-form__email">
                            <label for="message_email">Email: <span>*</span></label>
                            <input type="text" name="message_email" value="<?php echo esc_attr(
                                $_POST["message_email"]
                            ); ?>">
                        </div>
                        <div class="custom-form__text">
                            <label for="message_text">Message: <span>*</span></label>
                            <textarea type="text" name="message_text" rows="8"><?php echo esc_textarea(
                                $_POST["message_text"]
                            ); ?></textarea>
                        </div>
                        <div class="custom-form__human">
                            <label for="message_human">Human Verification: <span>*</span>+ 3 = 5</label>
                            <input type="text" name="message_human">
                        </div>
                        <input type="hidden" name="submitted" value="1">
                        <input class="btn btn-primary" type="submit">
                    </form>
                </div>
            
            </div>
        </div>
    
    </div>
</main>

<?php get_footer(); ?>
