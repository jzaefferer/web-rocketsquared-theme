$(document).ready(function() {
    $('.projects .entry').truncate({max_length: 380, more: '... read more', less: '...close'});

    $('.read-more, .re-collapse').hover(function() {
        $(this).parent().css('background-image', '-moz-linear-gradient(#fdfdfd, #fafafa)');
        $(this).parent().css('background-image', '-webkit-gradient(linear, 0 0, 0 100%, from(#fdfdfd), to(#fafafa))');
    }, function() {
        $(this).parent().css('background', 'none');
    });
});
