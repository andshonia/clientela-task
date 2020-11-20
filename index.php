<?php
  require_once("./vendor/autoload.php");
  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader);


  $locations = [
   	[
  		"title"=>"Kvareli st. Tbilisi",
  		"address" => "5th Kvareli st. Tbilisi, Georgia",
  		"working_hours" => "Monday - Saturday: 09:30 - 21:00 Sunday: 11:00 - 18:30",
  			"location" => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23831.99609275601!2d44.80304136684568!3d41.698946245087775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sge!4v1605869853448!5m2!1sen!2sge'
  	],
  	[
  		"title"=>"Kiketi st. Tbilisi",
  		"address" => "5th Kiketi st. Tbilisi, Georgia",
  		"working_hours" => "Monday - Saturday: 09:30 - 21:00 Sunday: 11:00 - 18:30",
  		"location" => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23831.99609275601!2d44.80304136684568!3d41.698946245087775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sge!4v1605869853448!5m2!1sen!2sge'
  	],
  	[
  		"title"=>"Dmanisi st. Tbilisi",
  		"address" => "5th Dmanisi st. Tbilisi, Georgia",
  		"working_hours" => "Monday - Saturday: 09:30 - 21:00 Sunday: 11:00 - 18:30",
 	"location" => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23831.99609275601!2d44.80304136684568!3d41.698946245087775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sge!4v1605869853448!5m2!1sen!2sge'
  	],
  	[
  		"title"=>"Aspindza st. Tbilisi",
  		"address" => "5th Aspindza st. Tbilisi, Georgia",
  		"working_hours" => "Monday - Saturday: 09:30 - 21:00 Sunday: 11:00 - 18:30",
  		"location" => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23831.99609275601!2d44.80304136684568!3d41.698946245087775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sge!4v1605869853448!5m2!1sen!2sge'
  	]
  ];


  $data = [
  	"locations" => $locations
  ];

echo $twig->render('index.html', $data);