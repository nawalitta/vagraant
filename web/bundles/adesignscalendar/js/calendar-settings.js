$(function () {

    /* Suppression */
    var currentMousePos = {
        x: -1,
        y: -1
    };
    jQuery(document).on("mousemove", function (event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });
    function isElemOverDiv() {
        var trashEl = jQuery('#trash');
        var ofs = trashEl.offset();
        var x1 = ofs.left;
        var x2 = ofs.left + trashEl.outerWidth(true);
        var y1 = ofs.top;
        var y2 = ofs.top + trashEl.outerHeight(true);
        if (currentMousePos.x >= x1 && currentMousePos.x <= x2 &&
                currentMousePos.y >= y1 && currentMousePos.y <= y2) {
            return true;
        }
        return false;
    }
    /* initialize the calendar
     -----------------------------------------------------------------*/

    $('#calendar-holder').fullCalendar({
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
        timezone: 'France/Paris',
        height: "auto",
        contentHeight: "auto",
        editable: true, // don't allow event dragging
        eventResourceEditable: false, // except for between resources
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

        resources: {
            url: 'Calendar/RessourcesInverted',
            type: 'GET'
        },
        events: {
            url: 'Calendar/Events',
            type: 'GET',
        },
        eventDragStop: function (event) {
            if (isElemOverDiv()) {
                console.log('eventDragStop', event);
                $.ajax({
                    url: 'Calendar/DeleteEvent/',
                    data: 'eventID=' + event.id,
                    type: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        console.log("Element supprimé");
                        if (response.status === 'success') {
                            $('#calendar-holder').fullCalendar('removeEvents', event.id);
                        }

                    }
                });
            }
        },
        eventDrop: function (event) { // called when an event (already on the calendar) is moved
            console.log('eventDrop', event);
        },

        resourceRender: function (resourceObj, labelTds) {
            labelTds.on('click', function () {
                var route = routeEnfant.replace("/1", "/" + resourceObj.idEnfant);
                document.location.href = route;
            });
        }
    });
});
