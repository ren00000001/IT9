
function updateRealTime(){
    const now = new Date();
    const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: 'true'
    };

    const dateTimeString = now.toLocaleDateString('en-PH', options);
    document.getElementById('real-time-display').textContent = dateTimeString;
}

updateRealTime();

setInterval(updateRealTime, 1000);