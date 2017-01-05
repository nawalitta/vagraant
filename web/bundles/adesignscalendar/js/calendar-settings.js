$(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function () {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()),
            stick: true
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });

    /* initialize the calendar
     -----------------------------------------------------------------*/

    $('#calendar-holder').fullCalendar({
        timezone: 'France/Paris',
        editable: true,
        aspectRatio: 1.8,
        scrollTime: '00:00',
        minTime: "08:00:00",
        maxTime: "22:00:00",
        eventOverlap: false,
         droppable: true, // this allows things to be dropped onto the calendar
        header: {
            left: '',
            center: '',
            right: 'timelineDay,timelineHour,timetwoHours'
        },
        defaultView: 'timelineDay',
        slotDuration: '00:15:00',
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

        resources: [
            {id: '1-lundi', enfant: 'Alexis Saludo', title: 'Lundi'},
            {id: '1-mardi', enfant: 'Alexis Saludo', title: 'Mardi'},
            {id: '1-mercredi', enfant: 'Alexis Saludo', title: 'Mercredi'},
            {id: '1-jeudi', enfant: 'Alexis Saludo', title: 'Jeudi'},
            {id: '1-vendredi', enfant: 'Alexis Saludo', title: 'Vendredi'},

            {id: '2-lundi', enfant: 'Guillaume Pochet', title: 'Lundi'},
            {id: '2-mardi', enfant: 'Guillaume Pochet', title: 'Mardi'},
            {id: '2-mercredi', enfant: 'Guillaume Pochet', title: 'Mercredi'},
            {id: '2-jeudi', enfant: 'Guillaume Pochet', title: 'Jeudi'},
            {id: '2-vendredi', enfant: 'Guillaume Pochet', title: 'Vendredi'},
        ],
        drop: function (date, jsEvent, ui, resourceId) {
            console.log('drop', date.format(), resourceId);
        },
        eventReceive: function (event) { // called when a proper external event is dropped
            console.log('eventReceive', event);
        },
        eventDrop: function (event) { // called when an event (already on the calendar) is moved
            console.log('eventDrop', event);
        }
    });
});
