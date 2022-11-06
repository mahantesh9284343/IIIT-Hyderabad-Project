$('#click-me') .toggle(function() {
    $('#click-event') .html('Yes');
}, function() {
    $('#click-event') .html('No');
});