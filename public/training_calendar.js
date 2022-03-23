document.addEventListener('DOMContentLoaded', function()
{
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl,
        {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap5'
        });
    calendar.render();
});

