var $loader = $('#section-loader');
var $loaderCont = $loader.find('.loader-container');
var $pageContentContainer = $('#content').find('.container-fluid').first();

$('body').on('hidden.bs.modal', function () {
    if($('.modal.show').length > 0)
    {
        $('body').addClass('modal-open');
    }
});

function showLoader() {
    // console.log($loader);
    $loader.removeClass('d-none');
}

function closeLoader() {
    $loader.addClass('d-none');
    if ($pageContentContainer.hasClass('d-none')) {
        $pageContentContainer.removeClass('d-none');
    }
}

function deploy_dp(containerID, appKey, param, title)
{
    document.getElementById(containerID).innerHTML = '';
    var $title = document.getElementById('cb-modal-title');

    // var $formContainer = $('#purchase-order-hidden-form');

    // if ($formContainer) {
    //     $formContainer.html('');
    // }


    var script = document.createElement('script');
    script.src = 'https://c9ebv091.caspio.com/dp/' + appKey + '/emb' + param;

    var container = document.getElementById(containerID);

    if(container)
    {
        container.appendChild(script);
    }

    if ($title) {
        $title.innerHTML = '';
        $title.innerHTML = title;
    }
}

function open_modal(module, action = 'add', size = 'lg', fid = '') {

    var $modal = $('#cb-modal-general');
    // var $modalTitleContainer = $modal.find('#cb-modal-title');
    $modal.find('#cb-modal-body').html('');


    // var title = processModalTitle(module, action);
    // var RID = $('#open-modal-btn').data('rid');
    /**
     * Set modal size
     * Parameters: lg,xl
     */
    $modalContainer = $modal.find('.modal-dialog');
    var currentClasses = $modalContainer.attr('class').split(' ');
    $modalContainer.removeClass(currentClasses[1]);
    $modalContainer.addClass('modal-' + size);

    /**
     * DataPage deployment
     * 1st param = container ID. You will find this in the php file
     * 2nd param = DataPage appKey
     * 3rd param = parameters
     */
    var $body = '';

    if (module === 'new-message') {
        deploy_dp('cb-modal-body', '40c0e000f55b8fdbd43a4725989b', '', 'Start New Message Thread');
        $modal.find('#cb-modal-body').addClass(module);

    }

    // $modalTitleContainer.text(title);
    // $modal.find('#cb-modal-body').html($body);
    $modal.modal('show');

}

function closeModalGeneral() {
    // $('#cb-modal-operators').modal('hide');

    if ($('#cb-modal-general').is(':visible')) {
        $('#cb-modal-title').html('');
        $('#cb-modal-body').html('');
        $('#cb-modal-general').modal('hide');
        closeLoader();
    }
}

function submitAddform(elem){
    $(elem).closest('section').find('.cbSubmitButton').click();
}


function processModalTitle(module, action) {
    var titleLabel = '';
    var actionLabel = '';
    var newLabel = '';

    if (action === 'add') {
        actionLabel = 'Add';
    } else if (action === 'edit') {
        actionLabel = 'Edit';
    } else if (action === 'view') {
        actionLabel = 'View';
    } else if (action === 'start') {
        actionLabel = 'Start';
    }


    switch (module) {
        case 'new-message':
            titleLabel = 'New Message Thread';
            break;       
        default:
    }

    return newLabel = actionLabel + ' ' + titleLabel;
}

function successMessage(module)
{
    // Reference to the modal and its body
    var $modal = $('#cb-modal-general');
    var $modalBodyContainer = $modal.find('#cb-modal-body');
    var messageTitle = "";
    var messageBody = ""; // Replace with your desired message content
    var messageButtonURL = ""; // Replace with your button URL
    var messageButtonText = ""; // Replace with your button text

    // Message and URL button placeholders
    if (module == 'new-message') {
        messageTitle = "Message Sent!";
        messageBody = "Your message has been successfully created. The receiver will receive an email notification about the new message.";
        messageButtonURL = "closeModalGeneral()";
        messageButtonText = "Close";
    }
    

    // Clear the modal body initially
    $modalBodyContainer.html('');

    // Define the card structure
    if (module === 'new-message') {
        var $body = `
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="message-title">
                                ${messageTitle}
                            </h3>
                        </div>
                        <div class="col-12">
                            <i class="fas fa-check-circle success-message-icon"></i>
                        </div>
                        <div class="col-12 mx-auto">
                            <p class="message-sub-title mx-auto">${messageBody}</p>
                            <button type="button" onclick="${messageButtonURL};" class="secondary-button mt-5 px-4 py-2">${messageButtonText}</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the card to the modal body
        $modalBodyContainer.html($body);

        // Show the modal
        $modal.modal('show');
    }
}
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

function checkHighlightMessage(){
    var $messageCont = $('.message-report-cont');
    var $resultTable = $messageCont.find('.cbColumnarReport');
    var $resultRow = $resultTable.find('div[data-cb-name="data-row"]');

    $resultRow.each(function(){
        var $row = $(this);
        var $message = $row.find('div.message'); // Find child div with class 'message'
        var dataRead = $message.data('read'); // Get data-read value
        var dataUser = $message.data('user'); // Get data-user value
        var dataReceiver = $message.data('receiver'); // Get data-receiver value

        if (dataUser === dataReceiver && dataRead === "No") {
            $message.addClass('highlight');
            var $messageThread = $row.find('.message-thread');
            var currentHref = $messageThread.attr('href');

            // Add the new parameter to the URL (Check if '?' or '&' should be used based on existing parameters)
            var newHref = currentHref.includes('?') ? currentHref + '&SubmitRead=True' : currentHref + '?SubmitRead=True';

            // Set the new href back to the element
            $messageThread.attr('href', newHref);
        }
    })
}

function submitReply(){

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

function pageLoad(interval) {

    showLoader();

    let pageLoadStats = {
        pageLoaded: false,
        interval: interval,
        stats: {
            mutations: 0,
            idle: 0,
        },
        prevStats: {
            mutations: 0,
            idle: 0,
        },
    };

    const observer = new MutationObserver((mutations, _observer) => {
        pageLoadStats.prevStats = Object.assign({}, pageLoadStats.stats);
        ++pageLoadStats.stats.mutations;
        pageLoadStats.stats.idle = 0;
    });

    const target = Array.from(document.querySelectorAll("body"))[0];
    observer.observe(target, {
        attributes: true,
        attributeOldValue: true,
        characterData: true,
        characterDataOldValue: true,
        childList: true,
        subtree: true,
    });

    const mutationCheck = setInterval(() => {
        if (pageLoadStats.stats.mutations !== pageLoadStats.prevStats.mutations) {
            pageLoadStats.prevStats = Object.assign({}, pageLoadStats.stats);
            ++pageLoadStats.stats.idle;
        } else {
            ++pageLoadStats.prevStats.idle;
            ++pageLoadStats.stats.idle;

            if (pageLoadStats.stats.idle > pageLoadStats.interval.iterations) {
                closeLoader();
                observer.disconnect();
                clearInterval(mutationCheck);
                pageLoadStats.pageLoaded = true;

                document.dispatchEvent(
                    new CustomEvent("onpageload", {
                        detail: {
                            pageLoadStats: pageLoadStats,
                        },
                    })
                );
            }
        }
    }, pageLoadStats.interval.delay);
}

// window.addEventListener("load", (event) => {
//     pageLoad({
//         delay: 180, //msecs
//         iterations: 5, //secs
//     });
// });

var DOMChanges = {
    track: (target) => {
            // console.log(target);
            // console.log('track');

        const observer = new MutationObserver((mutations, _observer) => {
            const lastMutation = mutations[mutations.length - 1];
            // console.log('MutationObserver');


            if (
                lastMutation.oldValue !== lastMutation.target.value ||
                lastMutation.target.value === ""
            ) {
                // if (autoDisconnect) {
                //     observer.disconnect();
                // }

                document.dispatchEvent(
                    new CustomEvent("onfieldchange", {
                        detail: {
                            target: target,
                            observer: observer
                        },
                    })
                );
            }
        });

        target.each((index, element) => {
            observer.observe(element, {
                attributes: true,
                attributeOldValue: true,
                characterData: true,
                characterDataOldValue: true,
                childList: true,
                subtree: true,
            });
        });
    },
};





 

 



