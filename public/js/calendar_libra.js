document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar-li');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      selectable: true, // let selectable
      dateClick: function(info) {
        alert('Clicked on: ' + info.dateStr);
        //alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        //alert('Current view: ' + info.view.type);
        // change the day's background color just for fun
        info.dayEl.style.background= '#89CFF0';
        info.dayEl.style.color='white';
      }

    });
    calendar.render();
  });
