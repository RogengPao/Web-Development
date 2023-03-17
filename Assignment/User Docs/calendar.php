<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Healing Dashboard</title>
    <link rel="shortcut icon" href="favicon_io\favicon-16x16.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        themeSystem: 'bootstrap5',
        initialView: 'dayGridMonth',
        height: 750,
        events: 'fetch_appointment.php',
        eventColor:'#92A8D1',
        
    });
    calendar.render();
});

document.addEventListener('DOMContentLoaded', function() {
  var calendarE2 = document.getElementById('calendar2');

  var calendar2 = new FullCalendar.Calendar(calendarE2, {
    headerToolbar: {
        left: 'title',
        center: '',
        right: ''
    },
    timeZone: 'UTC',
    initialView: 'listWeek',

    eventColor: '#F7CAC9',
    events: 'fetch_appointment.php'
  });

  calendar2.render();
});
</script>

</head>
<body>
    <section id="nav-bar-admin">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="index.php"><img class="nav-company-logo" src="illustration\companylogo.png" alt="company's logo"><b>CareHealing's Dashboard</b></a>
                </div>
            </div>
        </nav>  
    </section>
    <div class="calendar_container">
        <div class="event">
            <h2 class="event_title">Upcomning Events</h2>
            <div id="calendar2"></div>
        </div> 
        <div class="calendar_style">
            <div id="calendar"></div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        color: #375bb1;
        background-color: whitesmoke;
    }

    .calendar_container {
        padding-top: 7%;
    }
   .event {
        width: 15%;
        float: left;
        margin-right: 75px;
        margin-left: 50px;
    }

    .calendar_style {
        width: 97%;
    }

    .fc-event-time {
        width: 40px;
    }

    
    #nav-bar-admin {
        z-index: 2;
        position: fixed;
        width: 100%;
        border-bottom: 3px solid black;
    }

    .navbar {
        padding: 0.25% 2.5%
    }

    .navbar-brand {
        color: #375bb1;
        font-size: 1.3rem;
    }

    .nav-company-logo {
    height: 55px;
    width: auto;
    }
</style>