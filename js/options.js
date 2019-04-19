function openOptions(id) {
    $(id).fadeIn();
    var component = $('.options'+id);
    component.css('display', 'flex');
}

function closeOptions(id) {
    $(id).fadeOut();
}

// $('.options-open').click(function() {
//     var component = $('.options');
//     component.fadeIn(); 
//     component.css('display', 'flex');
// });

// $('.options-close').click(function() {
//     var component = $('.options');
//     component.fadeOut();
// })