/** 
 * Highlights the active side navbar link. 
 * 
 * Each anchor tag should have their own ID,
 * this ID will be used to identify which link to highlight.
 * 
 * @param {string} currentNav ID of the anchor tag or link
 * 
 * */ 
function setActiveNav (currentNav) {
    var $sidebar = $('.cb-sidebar');
    var $li = $sidebar.find('li.nav-item');
    var $link = $li.find('#' + currentNav);
    var $parentLinks = $link.parents('.has-treeview');
    var parentLinksCount = $parentLinks.length;
    $link.addClass('active');

    if (parentLinksCount > 0) {
        $parentLinks.each(function(){
            $(this).children('a').first().addClass('active');
        });
    }

}

/**
 * Add background-color depending on status.
 */
// function addBGYesOrNoField(index) {

//     var $container = document.querySelector('.cb-tabular-report.cb-config-status');
    
//     var checkContainer = setInterval(function(){

//         if ($container.querySelectorAll('[id*="cbOuterAjaxCtnr"]')[1] != 'undefined') {
//             var $form = $container.querySelectorAll('[id*="cbOuterAjaxCtnr"]')[1];            

//             if ($form.querySelector('[data-cb-name="cbTable"]') != 'undefined') {

//                 var $table = $form.querySelector('[data-cb-name="cbTable"]');

//                 clearInterval(checkContainer);

//                 var $tr = $table.querySelectorAll('tbody > tr');
//                 var count = 0;    
            
//                 $tr.forEach(function(elem){
            
//                     if (count < 2) {
//                         count++;
//                         return;
//                     }
            
//                     var $td = elem.querySelectorAll('td')[2];
            
//                     if (!textIsEmpty($td)) {     
//                         var statusValue = getTextValue($td);
//                         var color = 'cb-bg-success';
            
//                         if (statusValue === 'no') {
//                             color = 'cb-bg-danger';
//                         }
            
//                         $td.classList.add(color);
            
//                     }
            
//                 });

//             }
//         }

//     },100);

// }

// function removeBGYesOrNoField(elem) {
//     console.log(elem);
//     var $td = elem.closest('tr').find('td').eq(2);
    
//     if ($td.hasClass("cb-bg-danger")) {
//         $td.removeClass('cb-bg-danger');
//     }

//     if ($td.hasClass("cb-bg-success")) {
//         $td.removeClass('cb-bg-success');
//     }

// }

function textIsEmpty(elem) {
    return elem.textContent.toLowerCase().trim() === "";
}

function getTextValue(elem) {
    return elem.textContent.toLowerCase().trim();
}

function clearForm(form) {

    var elements = form.elements;
    form.reset();

    for(i=0; i<elements.length; i++) {

        field_type = elements[i].type.toLowerCase();

        switch(field_type) {
 
            case "text":
            case "textarea":
             
              elements[i].value = "";
              break;
            case "radio":
            case "checkbox":
                if (elements[i].checked) {
                    elements[i].checked = false;
                }

              break;
        
            case "select-one":
                       elements[i].selectedIndex = 0;
            break;            
        
            case "select-multi":
                        elements[i].selectedIndex = -1;
            break;
        }

    }

    form.querySelector('input[type="radio"]').checked = true;

    form.querySelector('.cb-search-button-container button[type="submit"]').click();


    // elem.querySelector('select, input[type="text"]').value = '';
    // elem.find('[data-cb-name="cbFormDataRadios"] > input:first-of-type').attr('checked', true);
    // elem.find('.cb-search-button-container button[type="submit"]').click();
    
}

function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        hash[1] = unescape(hash[1]);
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }

    return vars;
}



