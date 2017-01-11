$(function () {
    /* initialize the calendar
     -----------------------------------------------------------------*/

    $('#calendar-holder').fullCalendar({
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
        height: "auto",
        contentHeight: "auto",
        timezone: 'France/Paris',
        editable: false, // don't allow event dragging
        forceEventDuration: true,
        scrollTime: '00:00',
        minTime: "08:00:00",
        maxTime: "19:00:00",
        eventOverlap: false,
        // this allows things to be dropped onto the calendar
        header: {
            left: '',
            center: '',
            right: 'timelineDay,timelineHour,timetwoHours'
        },
        defaultView: 'timelineDay',
        slotDuration: '00:15:00',
        eventConstraint: {
            start: '08:00',
            end: '18:00'
        },
        views: {

            timelineDay: {
                buttonText: ':15 minutes',
                slotDuration: '00:15:00'
            },
            timelineHour:
                    {type: 'timeline',
                        buttonText: ':1 heure',
                        slotDuration: '01:00'
                    },
            timetwoHours:
                    {
                        type: 'timeline',
                        buttonText: ':2 heures',
                        slotDuration: '02:00'
                    }
        },
        resourceAreaWidth: '25%',

        resourceLabelText: 'Enfants',
        resourceGroupField: 'enfant',
        droppable: true, // this allows things to be dropped onto the calendar

        resources: {
            url: '../../Calendar/RessourcesInverted/' + id,
            type: 'GET'
        },
        events: {
            url: '../../Calendar/Events/' + id,
            type: 'GET',
        },

        drop: function (date, jsEvent, ui, resourceId) {

            console.log('drop', date.format(), resourceId);
        },

        eventReceive: function (event) {

            var title = event.title;
            var start = event.start.format("HH:MM:SS");
            var resource = event.resourceId;
            $.ajax({
                url: 'AddEvent/',
                data: 'title=' + title + '&startdate=' + start + '&resourceId=' + resource,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    console.log('eventReceive', event);
                    event.id = response.eventid;

                    $('#calendar').fullCalendar('updateEvent', event);
                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
            $('#calendar').fullCalendar('updateEvent', event);
        },

        eventDrop: function (event) { // called when an event (already on the calendar) is moved
            console.log('eventDrop', event);
        }
    });
});
