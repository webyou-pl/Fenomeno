function createCookie(name, value, days) {
		if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				var expires = "; expires=" + date.toGMTString();
		} else var expires = "";
		document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return null;
}

function eraseCookie(name) {
		createCookie(name, "", -1);
}

var $body = $("body"),
		sCookieName = "cookiewarning",
		$cookiewarning = $("div." + sCookieName);

function setCookieWarning(active) {
		(!!active) ? $body.addClass(sCookieName): $body.removeClass(sCookieName)
}

$cookiewarning.on("click", function() {
		createCookie(sCookieName, 1, 365)
		setCookieWarning(false);
});

// cookie warning
if (readCookie(sCookieName) != 1) {
		setCookieWarning(true);
}

$(".removecookie").on("click", function() {
		eraseCookie(sCookieName);
		setCookieWarning(false);
})