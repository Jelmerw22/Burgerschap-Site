<!DOCTYPE html>
<html lang="en">
<head>
    <title>VrijheidVoorIeder.</title>
    <link rel="stylesheet" href="../css/style-agenda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="../css/calendar.css" rel="stylesheet" type="text/css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link rel="stylesheet" href="../css/mini-event-calendar.min.css">

    <style>
		html, body{
			margin: 0;
			padding: 0;
		}
		/* Just an excuse to use CSS Grid 😊 */
		#wrapper{
			padding: 40px;
			display: grid; 
			grid-gap: 40px; 
			grid-template-columns: 1fr 1fr 1fr;
		}

		[id^=calendar],
		[id^=calendar] + h3{
			width: 400px;
		}

		[id^=calendar] + h3{
			text-align: center;
		}

		@media only screen and (max-width: 500px){
			#wrapper{
				padding: 1em;
				display: block;
			}
			[id^=calendar],
			[id^=calendar] + h3{
				width: 100%;
				max-width: 400px;
				margin: 1em auto;
			}

			[id^=calendar] + h3{
				display: block;
				margin-bottom: 2em;
			}
		}
	</style>
</head>
<body>
<header>
        <div class="grid">
            <div class="header-left">
                <a class="header" href="../php/wie-zijn-wij.php">Wie zijn wij?</a>
                <a class="header" href="../php/onzevisie.php">Onze visie.</a>
                <a class="header" href="../php/agenda.php">Agenda.</a>
            </div>
            <div class="logo">
                <a class="header" href="../php/index.php"><img src="../../logo/logo_small_icon_only.png"></a>
            </div>
            <div class="header-right">
                <a class="header" href="../php/login/login.php">Log In/Register.</a>
                <a class="header" href="../php/contact.php">Contact.</a>
            </div>
        </div>
    </header>
    <main>
    <div>
		<div id="calendar"></div>
	</div>
    </main>
    <footer>
        <div class="contact">
            <h2>Heb je vragen over iets? Of wil je wat laten weten? Klik dan op de knop hier onder om met ons in contact te komen!</h2>
            <a href="../php/contact.php"><button class="button2">Klik hier!</button></a>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../js/mini-event-calendar.min.js"></script>

<script>
	var sameDaylastWeek = new Date().setDate(new Date().getDate() - 7);
	var someDaynextMonth = new Date().setDate(new Date().getDate() + 31);

	// All dates should be provided in timestamps
	    var sampleEvents = [
		{
			title: "Soulful sundays bay area",
			date: sameDaylastWeek, // Same day as today, last week
			link: "https://www.eventbrite.com/e/soulful-sundays-bay-area-edition-tickets-55214242285?aff=ehomecard"
		},
		{
			title: "London Comicon",
			date: new Date().getTime(), // Today
			link: "https://www.eventbrite.co.uk/e/london-film-comic-con-summer-2019-tickets-49472593860?aff=ebdssbdestsearch"
		},
		{
			title: "Youth Athletic Camp",
			date: someDaynextMonth, // Some day as today, next month
			link: "https://www.eventbrite.com/e/leaner-stronger-faster-tm-youth-athletic-camp-2021-tickets-38245970728?aff=ebdssbdestsearch"
		}
	    ];

		$(document).ready(function(){
			$("#calendar").MEC({
				events: sampleEvents
			});

			// Make calendar start on monday
			$("#calendar2").MEC({
				from_monday: true,
				events: sampleEvents
			});
		});
	</script>
</html>