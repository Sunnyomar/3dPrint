var slideIndex = 0;

/**
 * Add event to an element
 * @param {object} ele - element to add event
 * @param {string} evt - event to add
 * @param {object} func - function to add
 */
function bind(ele, evt, func) {
	if (ele.addEventListener) {
		ele.addEventListener(evt, func, false);
	} else if (ele.attachEvent) {
		ele.attachEvent('on' + evt, func);
	}
}

/**
 *phone number onKeyPress event
 *@param object input on keyPress to only allow numbers and certain characters
 *@return boolean true if conditions are met for ASCII character number otherwise returns false
 */
function inputFilter(event) {
	 if (event.shiftKey == true) {
		 //allow only tab, ), (, +
		if (event.keyCode != 9
				&& event.keyCode != 48
				&& event.keyCode != 57
				&& event.keyCode != 187) {
		event.preventDefault();
		}
	} else {
		//allow only numbers, numpad numbers, backspace, tab, enter, space, left/right cursor keys, delete, numpad+, numpad-, -
		if ((event.keyCode <= 47 || event.keyCode >= 58)
				&& (event.keyCode < 96 || event.keyCode > 105)
				&& event.keyCode != 8
				&& event.keyCode != 9
				&& event.keyCode != 13
//				&& event.keyCode != 16 shift key
				&& event.keyCode != 32
				&& event.keyCode != 37
				&& event.keyCode != 39
				&& event.keyCode != 46
				&& event.keyCode != 107
				&& event.keyCode != 109
				&& event.keyCode != 189) {
			event.preventDefault();
		}
	}
}

function process(evt)
{
	evt.preventDefault();
	
	var request= new XMLHttpRequest();
	var obj = Object();
	request.open('POST', 'index.php', true);
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

	//gather contact form info
	obj.firstName = document.contactForm.firstName.value
	obj.lastName = document.contactForm.lastName.value
	obj.phone = document.contactForm.phone.value
	obj.email = document.contactForm.email.value
	obj.postcode = document.contactForm.postcode.value;
	obj.message = document.contactForm.message.value

	var json = 'pageData=' + encodeURIComponent(JSON.stringify(obj));
	request.onreadystatechange = function() {
		if(request.readyState == 4) {
			if(request.responseText.length == 0) {
				alert('Unexpected Error. Err 45.');
			}
			if(request.responseText.toLowerCase().indexOf('page not found') > -1) {
				alert('Unexpected Error. Err 48.');
			}
			if (request.responseText.substr(0, 1) == '{') {
				var data = JSON.parse(request.responseText);
				//clear existing error flags
				var errors = document.querySelectorAll('.errorShow');
				for (var i = 0, err; err = errors[i]; i++) {
					err.className = err.className.replace('errorShow', 'errorHidden');
				}

				//handle the errors
				for (n in data) {
					if (n == 'status'
							|| n.indexOf('ClassError') > -1) {
						continue;
					}
					var element = document.getElementById(n);
					element.innerHTML = data[n];
					element.className = element.className.replace('errorHidden', 'errorShow');
				}

			} else {
				//no errors, display the thank you page
				document.write(request.responseText);
			}
		}
	};
	request.send(json);
}

function showSlides() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}    
    x[slideIndex-1].style.display = "block";  
   setTimeout(showSlides, 5000); // Change image every 5 seconds>
}


document.onreadystatechange = function() {
	if(document.readyState == 'complete') {

		//Onload for all page
		var page = document.getElementsByTagName('h1')[0];
		if(page !== undefined
				&& page !== null) {
			switch(page.innerHTML) {

				case ('Contact Us'):
					//handle the links to download info
					bind(document.getElementById('submit'), 'click', process);
					bind(document.contactForm.phone, 'keydown', inputFilter);
//					bind(document.contactForm.phone, 'keypress', inputFilter);
//					bind(document.contactForm.phone, 'keyup', inputFilter);
					break;

				case ('Home'):
					showSlides();
					break;
			}
		}
	}
}

