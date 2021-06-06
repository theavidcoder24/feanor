jQuery(document).ready(function ($) {
    $('#pp_settings_form li.agp-agent a').on('click', function () {
        var str = $(this).attr('class');
        str = str.replace('pp-', '');
        str = str.replace('presspermit-', '');
        $('input[name="pp_tab"]').val(str);
    });

    $('a.pp-options-core-tab').on('click', function () {
        $('#pp_settings_form ul li a.pp-core').trigger('click');
    });

    // todo: pass img url variable, title
    if (ppCoreSettings.displayHints) {
        $('.pp-options-table tr').each(function(i,e) {
            if ($(this).find('td .pp-subtext, td .pp-hint').length) {
                var img_html = '<img class="pp-show-hints" title="See more configuration tips..." src="' + ppCoreSettings.hintImg + '" />';
                
                if ($(e).find('div.pp-extra-heading').length) {
                    $(e).find('div.pp-extra-heading').before(img_html);
                } else {
                    if ($(e).find('> th').length) {
                        $(e).find('> th').append(img_html);
                    } else {
                        $(e).find('> td').first().find('span').first().append(img_html);
                    }
                }
            }
        });

        $('.pp-options-table tr img.pp-show-hints').click(function() {
            $(this).closest('tr').find('td .pp-subtext, td .pp-hint').show();
            $(this).hide();
        });
    }
});