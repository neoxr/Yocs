(function($) {
    $.extend({
        copy: function(obj) {
            return copyText(obj)
        }
    })
}(jQuery));

function copyText(obj) {
    if (!obj) {
        return !1
    }
    var text;
    if (typeof(obj) == 'object') {
        if (obj.nodeType) {
            obj = $(obj)
        }
        if (obj instanceof $) {
            if (!obj.length) {
                return !1
            }
            text = obj.text();
            if (!text) {
                text = obj.val()
            }
        } else {
            text = JSON.stringify(obj)
        }
    } else {
        text = obj
    }
    var $temp = $('<textarea>');
    $('body').append($temp);
    $temp.val(text).select();
    var res = document.execCommand('copy');
    $temp.remove();
    return res
}