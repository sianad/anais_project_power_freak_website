




console.log('hi, I am a Javascript file and I am loaded');


$.fn.removeClassRegex = function(regex) {
    return $(this).removeClass(function(index, classes) {
        return classes.split(/\s+/).filter(function(c) {
            return regex.test(c);
        }).join(' ');
    });
};

var debug = false;


var wrapper = 'body';
var speed = 0;
var loop = [];
var mainLoop = null;
var blockFrame = true;


function update( index ) {

    let current_section = $('.section.section__'+index);

    // MOVE CHILD
    var child = $('.block--progress-child');
    if( index > 1 ){
        var percentage = 100 / $('.section').length * index;
        child.css({
            left: percentage + "%", marginLeft: -4 + "vw"
        });
    }else{
        child.css({
            left: 0 + "%", marginLeft: 0 + "vw"
        });
    }

    // UNACTIVE
    $("body").removeClassRegex(/^step__/);
    $('.page--anchors > ul > li > a').removeClass('active');
    $('.page--anchors__basic > ul > li > a').removeClass('active');
    $('.section').removeClass('section--active');

    if( !blockFrame ){
        $('.section').removeClassRegex(/^animate__/);
        $('.section').removeClass('section--animate');
        $('[data-animate]').removeClass('animate');
    }

    // ACTIVE
    current_section.addClass("section--active").addClass("section--animate");
    $("body").addClass("step__" + index);
    $('.page--anchors > ul > li > a.link__' + index).addClass('active');


}

function launchAnimation( index ) {

    let current_section = $('.section.section__'+index);

    for( var i=0 ; i<loop.length ; i++){
        clearInterval( loop[i] );
    }
    loop = [];

    var timeout = 0;
    current_section.find('[data-animate]').each(function(i){
        var elm = $(this);

        var elmTimeout = $(this).attr('data-wait') ? parseInt($(this).attr('data-wait')) : 0;

        if( i > 0 ){
            var nTimeout = timeout + speed + elmTimeout;
                //nTimeout = elm.text().length * 5;
        }else{
            var nTimeout = timeout;
        }

        loop.push(null);
        loop[loop.length-1] = setTimeout(function(){ animateElement( elm, nTimeout ); }, nTimeout);
        timeout = nTimeout + elmTimeout;
    });

}


$(function() {




    window.location.hash = $('.section').first().attr('id');

    $('.section').each(function(){
        $(this).attr('data-section-name', $(this).attr('id'));
    });

if (window.matchMedia("(min-width: 768px)").matches) {

    // TO IMPLEMENT
    $.scrollify({
        section : ".section",
        sectionName : "section-name",
        before:function(index, sections) {
            index ++;
            update(index);
            /*
            clearInterval(mainLoop);
            mainLoop = setTimeout(function(){
                launchAnimation(index);
            }, 300);
            */
        },
        after:function(index, sections){
            index ++;
            launchAnimation(index);
        },
        afterRender: function(index){
            update(1);
            launchAnimation(1);
        }
    });


    $('.page--anchors > ul > li > a').click(function(){
        var anchor = $(this).attr('href');
        $.scrollify.move(anchor);
        return false;
    });

  }

});
