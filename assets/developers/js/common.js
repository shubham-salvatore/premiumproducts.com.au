function lookup(inputString) {

    if (inputString.length == 0) {
        // Hide the suggestion box.
        $('#suggestions').hide();
        $('#autoSuggestionsList').hide();
    } else {
        $.post(site_url + "services/keyword_suggestions", {
            mysearchString: "" + inputString + ""
        }, function(data) {
            if (data.length > 0) {
                $('#suggestions').show();
                $('#autoSuggestionsList').html(data);
                $('#autoSuggestionsList').show();
            } else {
                $('#suggestions').hide();
                //$('#autoSuggestionsList').html(data);
                $('#autoSuggestionsList').hide();
            }
        });
    }
} //end

// if user clicks a suggestion, fill the text box.
function fill(thisValue) {
    $('#inputString').val(thisValue);
    setTimeout("$('#suggestions').hide();", 200);
}

function validcheckstatus(name, action, text) {
    var chObj = document.getElementsByName(name);
    var result = false;
    for (var i = 0; i < chObj.length; i++) {

        if (chObj[i].checked) {
            result = true;
            break;
        }
    }

    if (!result) {
        alert("Please select atleast one " + text + " to " + action + ".");
        return false;
    } else if (action == 'delete') {
        if (!confirm("Are you sure you want to delete this.")) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function showloader(id) {
    $("#" + id).after("<span id='" + id + "_loader'><img src='" + site_url + "/assets/developers/images/loader.gif'/></span>");
}


function hideloader(id) {
    $("#" + id + "_loader").remove();
}


function load_more(base_uri, more_container, formid) {
    showloader(more_container);
    $("#more_loader_link" + more_container).remove();
    if (formid != '0') {
        form_data = $('#' + formid).serialize();
    } else {
        form_data = null;
    }
    $.post(
        base_uri,
        form_data,
        function(data) {


            var dom = $(data);

            dom.filter('script').each(function() {
                $.globalEval(this.text || this.textContent || this.innerHTML || '');
            });

            var currdata = $(data).find('#' + more_container).html();
            $('#' + more_container).append(currdata);
            hideloader(more_container);
        }
    );
}

$(document).ready(function() {
    $(':checkbox.ckblsp').click(function() {
        $(':input', '#ship_container').val('');
        if ($(this).attr('checked')) {
            $('#ship_container').hide();
        } else {
            $('#ship_container').show();
        }
    });

});

function onclickcategory(ajax_url, response_id, category_value) {
    $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "html",
        data: {
            "category_id": category_value
        },
        cache: false,
        success: function(data) {
            $("#" + response_id).html(data);
        }
    });
}

function join_newsletter() {
    var form = $("#chk_newsletter");
    showloader('newsletter_loder');

    $.post(site_url + "/pages/join_newsletter",
        $(form).serialize(),
        function(data) {
            $("#refresh").click();
            hideloader('newsletter_loder');
            if (data.error != undefined) {
                $("#my_newsletter_msg").html(data.error);
            } else {
                $("#my_newsletter_msg").html(data);
                clearForm("#chk_newsletter");
            }
        });

    return false;
}

function handleForm(formId) {
  const form = document.getElementById(formId);

  if (!form) return;

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    fetch("/pages/send_mail.php", {
      method: "POST",
      body: new FormData(form)
    })
      .then(res => res.text())
      .then(data => {
        const response = data.trim();

        if (response === "success") {
          alert("Sent successfully");
          form.reset();
        } else {
          alert(response);
        }
      })
      .catch(() => {
        alert("Error");
      });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  ["contactForm", "chk_newsletter", "enquiryfrm"].forEach(handleForm);
});

function bidnow() {
    $(".bidnow").attr('disabled', true);
    $.post(site_url + "products/add_bid", $('#bidnowform').serialize(),
        function(data) {
            if (data.error != undefined) {
                $(".bidnow").attr('disabled', false);
                $(".bid_msg").html(data.error);
            } else {
                $("#biddata").hide();
                $(".bid_msg").html(data);
            }
        });
    return false;
}

function bargainnow() {
    $(".bargainnow").attr('disabled', true);
    $.post(site_url + "products/add_bargain", $('#bargainnowform').serialize(),
        function(data) {
            if (data.error != undefined) {
                $(".bargainnow").attr('disabled', false);
                $(".bargain_msg").html(data.error);
            } else {
                $("#bargaindata").hide();
                $("input[name='offer_price']").val('');
                $("textara[name='message']").val('');
                $(".bargain_msg").html(data);
            }
        });
    return false;
}

function clearForm(frm) {
    $(frm).find(':input').each(function() {
        switch (this.type) {
            case 'checkbox':
            case 'radio':
                $(this).attr('checked', false);
                break;
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
        }
    });
}

function increase_quantity(fldName, maxQty) {
    var qty = document.getElementById(fldName).value;
    if (parseInt(maxQty) <= qty) {
        alert("Total available quantity of this product is only " + maxQty + " at the moment");
    } else {
        qty++;
        document.getElementById(fldName).value = qty;
        document.getElementById('qty').value = qty;
    }
}


function decrease_quantity(fldName) {
    var qty = document.getElementById(fldName).value;
    if (parseInt(qty) > 1) {
        qty--;
    }
    document.getElementById(fldName).value = qty;
    document.getElementById('qty').value = qty;
}

function getstate(country_id, url) {

    var ajax_url = site_url + url;
    $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "html",
        data: "country_id=" + country_id,
        cache: false,
        success: function(data) {
            $("#countryid").html(data);
            $("#city_id").val('');
        }
    });
}

function getcity(state_id, url) {

    var ajax_url = site_url + url;
    $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "html",
        data: "state_id=" + state_id,
        cache: false,
        success: function(data) {
            $("#stateid").html(data);
        }
    });

}

function getstate_ship(country_id, url) {

    var ajax_url = site_url + url;
    $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "html",
        data: "country_id=" + country_id,
        cache: false,
        success: function(data) {
            $("#countryid_ship").html(data);
            $("#city_id_ship").val('');
        }
    });
}

function getcity_ship(state_id, url) {

    var ajax_url = site_url + url;
    $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "html",
        data: "state_id=" + state_id,
        cache: false,
        success: function(data) {
            $("#stateid_ship").html(data);
        }
    });

}

function multisearch(srchkey, chkname) {
    var arrval = new Array();
    $('[name=' + chkname + ']:checked').each(function(mkey, mval) {
        arrval.push($(mval).val());
    })

    $('#' + srchkey).val(arrval.join(","));
    $("#srcfrm").submit();
}

function check_zip_location(prd_id) {
    $(".errors_value").hide();
    var hasError = false;
    var locationVal = $('#zip_location').val();
    if (locationVal == '') {
        $('#location_error').html('<span class="red mt5 loc_err">Please enter delivery location.</span>');
        $("#zip_location").focus();
        hasError = true;
    }
    if (hasError == true) {
        return false;
    } else {
        $("#location_loader").show();
        $('#location_loader').html('<img src="' + site_url + 'assets/developers/images/loader.gif"/>');
        term = $('input[name="zip_location"]').val();
        url = site_url + 'products/ajax_search_zip_location/';
        $.post(url, {
                zip_location: term
            },
            function(data) {
                $("#location_error_show").html('<span class="">' + data + '</span>');
                $("#location_loader").hide();
                $("#location_search_form").hide();
                $("#location_error").hide();
                $(".loc_err").hide();
                $("#zip_location").val('');
            });
    }
    return false;
}

function show_location_form() {
    $("#location_search_form").show();
}

$(document).ready(function () {

  var current = window.location.pathname.split("/").pop();

  if (current === "") current = "index.php";

  // reset
  $(".nav li").removeClass("active");
  $(".nav a").removeClass("act1");

  function activate(menuText) {
    $(".nav a").each(function () {
      if ($(this).text().trim() === menuText) {
        $(this).addClass("act1");
        $(this).closest("li").addClass("active");
      }
    });
  }

  // HOME
  if (current === "index.php") {
    activate("Home");
  }

  // ABOUT US
  else if ([
    "about-us.php",
    "our-mission.php",
    "our-vision.php"
  ].includes(current)) {
    activate("About Us");
  }

  // PRODUCTS
  else if ([
    "air-handling-units.php",
    "coils.php",
    "dx-coil.php",
    "heat-recovery-units-with-vrf-condenser.php",
    "category.php"
  ].includes(current)) {
    activate("Products");
  }

  // GALLERY
  else if ([
    "gallery.php",
    "videos.php"
  ].includes(current)) {
    activate("Gallery");
  }

  // CONTACT
  else if (current === "contact-us.php") {
    activate("Contact Us");
  }

});

$(document).ready(function() {

    $(':checkbox.ckblsp').click(function() {

        //$(':input','#ship_container').val('');

        if ($(this).is(':checked')) {
            //alert($('#billing_name').val());
            //$('#ship_container').hide();
            $('#shipping_name').val($('#billing_name').val());
            $('#shipping_address').val($('#billing_address').val());
            $('#shipping_zipcode').val($('#billing_zipcode').val());
            $('#shipping_phone').val($('#billing_phone').val());
            $('#shipping_mobile').val($('#billing_mobile').val());
            $('#shipping_city').val($('#billing_city').val());
            $('#shipping_state').val($('#billing_state').val());
            $('#shipping_country').val($('#billing_country').val());
        } else {
            //$('#ship_container').show();
            $('#shipping_name').val('');
            $('#shipping_address').val('');
            $('#shipping_zipcode').val('');
            $('#shipping_phone').val('');
            $('#shipping_mobile').val('');
            $('#shipping_city').val('');
            $('#shipping_state').val('');
            $('#shipping_country').val('');
        }
    });
    
    $('#accordion .collapse').on('show.bs.collapse', function () {
    $('#accordion .collapse.show').not(this).collapse('hide');
  });

});