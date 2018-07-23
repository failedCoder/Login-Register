//hides the login/register alerts

function hideAlert (alert) {

	setTimeout(function () {

		document.querySelector(alert).outerHTML = "";

		}, 5000);

}

hideAlert('.alert');