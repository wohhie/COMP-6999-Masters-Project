var $r = $('input[type="range"]');
var $ruler = $('<div class="rangeslider__ruler" />');
var $top_ruler = $('<div class="rangeslider__topruler" />');

// Initialize
$r.rangeslider({
    polyfill: false,
    onInit: function() {
        $ruler[0].innerHTML = getRulerRange(this.min, this.max, this.step);
        $top_ruler[0].innerHTML = getTopRulerRange(this.min, this.max, this.step);
        this.$range.prepend($ruler);
        this.$range.prepend($top_ruler);
    }
});

function getRulerRange(min, max, step) {
    var range = '';
    var i = 0;
    var item = 0;

    while (i <= max) {
        item = i / 10;
        range += item + '  ';
        i = i + step;
    }
    return range;
}



function getTopRulerRange(min, max, step) {
    var range = '';
    var i = 0;
    var item = 0;

    while (i <= max) {
        item = i / 10;
        range += i + '/10 ';
        i = i + step;
    }
    return range;
}
