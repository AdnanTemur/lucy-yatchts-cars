  <link rel="stylesheet" href="/css/mini-event-calendar.min.css">

  <div id="calendar"></div>

  @push('scripts')
      <script src="{{ asset('js/mini-event-calendar.min.js') }}"></script>
      <script>
          var sameDaylastWeek = new Date().setDate(new Date().getDate() - 7);
          var today = new Date().getTime();
          var someDaynextMonth = new Date().setDate(new Date().getDate() + 31);

          var formattedDate = new Date(sameDaylastWeek);
          var formattedToday = new Date(today);

          // Get the individual components of the date (year, month, day)
          var year = formattedDate.getFullYear();
          var month = formattedDate.getMonth() + 1; // Months are zero-indexed, so add 1
          var day = formattedDate.getDate();

          var year2 = formattedToday.getFullYear();
          var month2 = formattedToday.getMonth() + 1; // Months are zero-indexed, so add 1
          var day2 = formattedToday.getDate();

          // Format the date as "YYYY-MM-DD"
          var formattedDateString = year + '-' + month.toString().padStart(2, '0') + '-' + day.toString().padStart(2, '0');
          var formattedDateString2 = year2 + '-' + month2.toString().padStart(2, '0') + '-' + day2.toString().padStart(2, '0');


          // All dates should be provided in timestamps
          var sampleEvents = [{
                  title: "Booked on " + formattedDateString,
                  date: sameDaylastWeek, // Same day as today, last week
                  link: "https://www.eventbrite.com/e/soulful-sundays-bay-area-edition-tickets-55214242285?aff=ehomecard"
              },
              {
                  title: "Booked on " + formattedDateString2,
                  date: new Date().getTime(), // Today
                  link: "https://www.eventbrite.co.uk/e/london-film-comic-con-summer-2019-tickets-49472593860?aff=ebdssbdestsearch"
              },
              {
                  title: "Youth Athletic Camp",
                  date: someDaynextMonth, // Some day as today, next month
                  link: "https://www.eventbrite.com/e/leaner-stronger-faster-tm-youth-athletic-camp-2021-tickets-38245970728?aff=ebdssbdestsearch"
              }
          ];

          $(document).ready(function() {
              $("#calendar").MEC({
                  events: sampleEvents
              });

              // Make calendar start on monday
            //   $("#calendar2").MEC({
            //       from_monday: true,
            //       events: sampleEvents
            //   });
          });
      </script>
  @endpush
