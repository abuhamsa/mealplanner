var startDate,
        endDate;
        
      $('#weekpicker').datepicker({
        autoclose: true,
        format :'yyyy-mm-dd',
        forceParse :false,
        calendarWeeks: true,
        weekStart:1

    }).on("changeDate", function(e) {
        console.log(e.date);
        var date = e.date;
        
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+1);
        startDateIntNTZ = startDate.getTime() - startDate.getTimezoneOffset() * 60 * 1000
        startDateObjNTZ = new Date(startDateIntNTZ)
        startString = startDateObjNTZ.toISOString().slice(0, 10)

        endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+7);
        endDateIntNTZ = endDate.getTime() - endDate.getTimezoneOffset() * 60 * 1000
        endDateObjNTZ = new Date(endDateIntNTZ)
        endString = endDateObjNTZ.toISOString().slice(0, 10)
        //$('#weekpicker').datepicker("setDate", startDate);
        $('#weekpicker').datepicker('update', startDate);
        //$('#weekpicker').val((startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear() + ' - ' + (endDate.getMonth() + 1) + '/' + endDate.getDate() + '/' +  endDate.getFullYear());
        //$('#weekpicker').val(startDate.getFullYear() +'-'+ (startDate.getMonth() + 1) + '-' + startDate.getDate() + ' --- ' + endDate.getFullYear() +'-'+ (endDate.getMonth() + 1) + '-' + endDate.getDate() );
        
        
        const combined = startString+' and '+endString
        console.log('start: '+startString+'     end: '+endString)
        $('#weekpicker').val(combined);
        var startInput = document.createElement("input");

        startInput.setAttribute("type", "hidden");
        startInput.setAttribute("name", "startDate");
        startInput.setAttribute("value", startString);

        //append to form element that you want .
        document.getElementById("weekform").appendChild(startInput);


        var endInput = document.createElement("input");

        endInput.setAttribute("type", "hidden");
        endInput.setAttribute("name", "endDate");
        endInput.setAttribute("value", endString);

        //append to form element that you want .
        document.getElementById("weekform").appendChild(endInput);

        
    });
        
        
        //new
        $('#prevWeek').click(function(e){
          var date = $('#weekpicker').datepicker('getDate');
          //dateFormat = "mm/dd/yy"; //$.datepicker._defaults.dateFormat;
          startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()- 7);
          endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() - 1);
          $('#weekpicker').datepicker("setDate", new Date(startDate));
          const startResult = startDate.toISOString().split('T')[0]
          const endResult = endDate.toISOString().split('T')[0]
          const combined = startResult+' -- '+endResult
          $('#weekpicker').val(combined);    
          return false;
        });
        $('#nextWeek').click(function(){
          var date = $('#weekpicker').datepicker('getDate');
          //dateFormat = "mm/dd/yy"; // $.datepicker._defaults.dateFormat;
          startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+ 7);
          endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 13);
          $('#weekpicker').datepicker("setDate", new Date(startDate));
          const startResult = startDate.toISOString().split('T')[0]
          const endResult = endDate.toISOString().split('T')[0]
          const combined = startResult+' -- '+endResult
          $('#weekpicker').val(combined); 
          return false;
        });