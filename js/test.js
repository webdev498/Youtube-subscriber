function onYtEvent(payload) {
	var logElement = document.getElementById('ytsubscribe-events-log');
	if (payload.eventType == 'subscribe') {
		logElement.innerHTML = 'SUB'
	} else if (payload.eventType == 'unsubscribe') {
		logElement.innerHTML = 'UN SUB'
	}
	if (window.console) {
	  window.console.log('ytsubscribe event: ', payload);
	}
}