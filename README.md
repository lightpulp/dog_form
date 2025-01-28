<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Get Dog Breeds
 - [script.js] url: /'get_breeds' route in order to call DogCEO API
 - [web.php] route the getbreeds command to the dogcontroller.php
 - [DogController.php] make a get request to DOGCEO api, put it into '$response' variable 
	put the $response into a json file and return it to web.php
 - [web.php] routes the json file as get_breeds and sends it to script.js
 - [script.js] checks if there are errors, and if json file has contents, 
	then create a statement to fill the dropdown menu

 

## Generate Dog image
 - [script.js] onclick gets the selected dog breed from the dropdown menu, puts it into 'selectedBreed' variable 
	wraps selectedBreed into this 'line data: { breed: selectedBreed },' and then goes to web.php for routes
 - [web.php] routes the 'breed' variable into DogController.php
 - [DogController.php] has a function to put the 'breed' data to be put into 'breed' variable
	*checks if 'breed' variable has contents and puts it into the https call
	*if there is a response, it returns an imageurl
 - [web.php] routes the url into script.js
 - [script.js] appends the url into the div 
