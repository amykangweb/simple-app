<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  if($name == "" OR $email == "" OR $message == "") {
    echo "You must enter a name, email, and message.";
    exit;
  }

  // stop contact form injection
  foreach($_POST as $value) {
    if(stripos($value, 'Content-Type:') !== FALSE) {
      echo "There was a problem with the information you entered.";
      exit;
    }
  }

  // honey pot trap to check for spam bots
  if($_POST["address"] != "") {
    echo "Your form submission has an error.";
    exit;
  }

  include('PHPMailer/class.smtp.php');
  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  if(!$mail->ValidateAddress($email)) {
    echo "The email is not valid";
    exit;
  }

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "<br>";
  $email_body = $email_body . "Email: " . $email . "<br>";
  $email_body = $email_body . "Message: " . $message . "<br>";

  $mail->From = $email;
  $mail->FromName = $name;
  $mail->addAddress('selene6023@gmail.com', 'Shirts 4 Mike'); // Add a recipient

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = 'Shirts 4 Mike Contact Form Submission | ' . $name;
  $mail->Body    = $email_body;
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'There was a problem sending the email: ' . $mail->ErrorInfo;
      exit;
  }

  header("Location: contact.php?status=thanks");
  exit;
}
?>

<?php
$pageTitle = "Contact Mike";
$section = "contact";
include('header.php'); ?>

<h1>Contact</h1>

<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
  <p>Thanks for the email!</p>
<?php } else { ?>

  <p>I'd love to hear from you!</p>

  <form method="post" action="contact.php">
    <table>
      <tr>
        <th>
          <label for="name">Name</label>
        </th>
        <td>
          <input type="text" name="name" id="name">
        </td>
      </tr>
      <tr>
        <th>
          <label for="email">Email</label>
        </th>
        <td>
          <input type="text" name="email" id="email">
        </td>
      </tr>
      <tr>
        <th>
          <label for="message">Message</label>
        </th>
        <td>
          <textarea name="message" id="message"></textarea>
        </td>
      </tr>
      <tr style="display: none;">
        <th>
          <label for="address">Address</label>
        </th>
        <td>
          <input type="text" name="address" id="address">
          <p>Humans: Please leave this field blank.</p>
        </td>
      </tr>
  </table>
    <input type="submit" value="Send">
  </form>

<?php } ?>

<?php include('footer.php'); ?>
