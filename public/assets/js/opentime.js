function ToniatoLogic(days){
  var rows = {}, array_open_hours_length, array_couples_length, str = "", key;
  $.each(days, function(i, day){
    key = day.open_hours_str;
    // check if there a key with that hour
    if(typeof rows[key] != "undefined"){
      array_open_hours_length = rows[key].length;
    }
    else { array_open_hours_length = 0; }
    //console.log(i, day.open_hours_str, day.name);
    if(i==0 || array_open_hours_length==0)
    {
      rows[key] = new Array();
      rows[key].push(new Array({"id":day.id, "name":day.name})); // initialize array of that hours with the first element
    }
    else {
      array_couples_length = rows[key][0].length;
      //console.log(rows[key][0], "array_couples_length: "+array_couples_length);

      var array_open_hours_id_prev = rows[key][0][array_couples_length-1].id;
      var array_open_hours_name_prev = rows[key][0][array_couples_length-1].name;

      //console.log('array_open_hours_length day.id day.name day_prev.id  day_prev.name');
      //console.log(array_open_hours_length, day.id, day.name, array_open_hours_id_prev, array_open_hours_name_prev);

      // count how many days there are in the array with that days

      // if its defined a key with that hour and there is only one day in that hour
      if(array_open_hours_length != 0 /*&& array_couples_length <=2*/)
      {
          //console.log(day.id-1,array_open_hours_id_prev);
          // check if the current day is the next day of previous element in the array_open_hours
          if(day.id-1 == array_open_hours_id_prev)
          {
            rows[key][0].push({"id":day.id, "name":day.name});
          }
          else {
            // check if consecutives
            rows[key].push(new Array({"id":day.id, "name":day.name}));
          }
      }
      else {
          rows[key].push({"id":day.id, "name":day.name});
      }
    }
  })
  //console.log(JSON.stringify(rows, null, 4));

  // start printable times
  $.each(rows, function(i, d){
    //console.log(i,JSON.stringify(d, null, 4));
    // the key of rows is the open hours
    // the value are the array of days (each array contains consecutive days)
    $.each(d, function(ii, dd){
      var hour_size = dd.length;
      if(hour_size > 1)
      {
        str += "from <span class='open_from'>"+ dd[0].name +"</span> to <span class='open_to'>"+ dd[hour_size-1].name+"</span>";
      }
      else {
        if(ii > 0)
        str += ", ";

        str += dd[0].name;
      }
    })
    str += " <span class='opened_hours'>"+ i +"</span><br>";
  })
  // end printable times

  return str;
}

function save_times(){
  var days = new Array(), html_result='';
  $.each($('#edit-hours .day-week'), function(id, vd){
    var day_checked = $(vd).find('[name="open-day"]').prop('checked');
    var day_value = $(vd).find('[name="open-day"]').val();
    if(day_checked==true)
    {
        // read times
        var times_selected = Array();
        $.each($(vd).find('.inner-ft-row'), function(it, vt){
          timefrom_value = $(vt).find('[name="open-from"]').val();
          timeto_value = $(vt).find('[name="close-to"]').val();
          times_selected.push(timefrom_value+' - '+timeto_value);
        })
        opened = true;
        open_hours = times_selected;
        open_hours_str = times_selected.join(' / ');
    }
    else
    {
      opened = false;
      open_hours = [];
      open_hours_str = "closed";
    }
    time_day = {
        "name": day_value,
        "id": id,
        "opened": opened,
        "open_hours": open_hours,
        "open_hours_str": open_hours_str
    };
    days[id]=time_day;
  })

    //console.log(days, JSON.stringify(days));

    html_result = ToniatoLogic(days);
    $("body").find(".time-results").html(html_result);
}


function load_preset(string){
  var obj
  if(string!=="")
    obj = JSON.parse(string);
  else obj = {};
  //console.log(obj);

  $('[name="open-day"]').prop('checked', false)
  $('.day-opened').hide();

  $.each(obj, function(i,v){
    if(v.opened==true)
    {
      $('[name="open-day"][value="'+v.name+'"]').prop('checked',true);
      $("[data-day='"+v.name+"']").find(".inner-ft-row").remove();
      $.each(v.open_hours, function(it, vt){
        var fromto_html = $("#inner-ft-rowTemplate > div").clone();
        $("[data-day='"+v.name+"']").find(".ft-row").append(fromto_html);
        hours_splitted = vt.split(' - ');
        fromto_html.find('[name="open-from"] option[value="'+hours_splitted[0]+'"]').attr("selected", true).prop("selected", true);
        fromto_html.find('[name="close-to"] option[value="'+hours_splitted[1]+'"]').attr("selected", true).prop("selected", true);
        fromto_html.find(".day-opened").show();
        fromto_html.find('select').material_select();
      })
    }
    else
    {
      $('[name="open-day"][value="'+v.name+'"]').prop('checked', false);
      $('.day-week[value="'+v.name+'"] .day-closed').show();
    }
  })
  if(string!=="") {
    $.each($("[data-day]"), function(i,v){
      $(v).prop('checked', false);
    })
  }
}

$(document).ready(function() {
  
  $("body").on(".modal-close.save", "click", function(event) {
    save_times();
  
  })

    $("#edit-hours").modal({
      ready: function(modal, trigger){
      
        var data_times = $('[name="preset"]:checked').val();
    
         load_preset(data_times);
         
      }
    });

    $('#edit-hours select').material_select();

    $('[name="open-day"]').on("change", function(){
      if($(this).prop('checked'))
      {
        $(this).closest(".day-week").find(".day-closed").hide();
        $(this).closest(".day-week").find(".day-opened").show();
      }
      else{
        $(this).closest(".day-week").find(".day-closed").show();
        $(this).closest(".day-week").find(".day-opened").hide();
      }
    })

    $(document).on(".agg-orari", "click", function(){
      var fromto_html = $("#inner-ft-rowTemplate > div").clone();
      $(this).closest(".ft-row").append(fromto_html);
      fromto_html.find(".day-opened").show();
      fromto_html.find('select').material_select();
    });

    $(document).on(".del-orari", "click", function(){
      var fromto_html = $("#inner-ft-rowTemplate > div").clone();
      $(this).closest(".ft-row").append(fromto_html);
      fromto_html.find(".day-opened").show();
      fromto_html.find('select').material_select();
    });

    $(document).on(".wrap-sel-to .select-wrapper input", "focus", function(event){
      from_val_selected = $(event.target).closest(".inner-ft-row").find('select[name="open-from"]').val();
      $(event.target).next().find("li").show(); // reinit
      $.each($(event.target).next().find("li"), function(i,v){
        $(v).hide();
        if($(v).find("span").html()==from_val_selected)
          return false;
      })
    })
  
    $(".open-edit-hours").trigger('click');

})