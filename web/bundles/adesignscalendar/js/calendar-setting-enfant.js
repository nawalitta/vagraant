$(function () {
    
    

    /* initialize the external events
     -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function () {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()),
            activiteId: parseInt($(this).attr('activiteId')),
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
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
        height: "auto",
        contentHeight: "auto",
        timezone: 'France/Paris',
        editable: true, // don't allow event dragging
        forceEventDuration : true,
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
            url: 'RessourcesInverted/'+id,
            type: 'GET'
        },
        events: {
            url: 'Events/'+id,
            type: 'GET',
        },

        drop: function (date, jsEvent, ui, resourceId) {
            
            console.log('drop', date.format(), resourceId);
        },
        
        eventReceive: function(event){
            console.log('eventReceive', event);
   var title = event.title;
   var start = event.start.toString();
   var end = event.end.toString();
   var resource = event.resourceId;
   var activiteId = event.activiteId;
   $.ajax({
     url: 'AddEvent/',
     data: 'title='+title+'&startdate='+start+'&enddate='+end+'&resourceId='+resource+'&activiteId='+activiteId,
     type: 'POST',
     dataType: 'json',
     success: function(response){
         
          console.log('Event added with succes', response);
       event.id = response.eventid;

       $('#calendar').fullCalendar('updateEvent',event);
     },
     error: function(e){

       console.log('error',e.responseText);
     }
   });
   $('#calendar').fullCalendar('updateEvent',event);
},
        
        
        
        
        eventDrop: function (event) { // called when an event (already on the calendar) is moved
            console.log('eventDrop', event);
        }
    });
});
