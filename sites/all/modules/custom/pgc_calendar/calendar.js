(function($) { 
   
	function calendarWidget(el, params) { 
		
		var now   = new Date();
		var thismonth = now.getMonth();
		var thisyear  = now.getYear() + 1900;
		
		var opts = {
			month: thismonth,
			year: thisyear
		};
		
		$.extend(opts, params);
		
		var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		month = i = parseInt(opts.month);
		year = parseInt(opts.year);
		var m = 0;
		var table = '';
		
			// next month
			if (month == 11) {
				var next_month = monthNames[0] + ' ' + (year + 1);
			} else {
				var next_month = monthNames[month + 1] + ' ' + (year);
			}
			
			// month after that
			if (month == 10) {
				var month_after_that = monthNames[0] + ' ' + (year + 1);
			} else if (month == 11) {
				var month_after_that = monthNames[1] + ' ' + (year + 1);
			} else {
				var month_after_that = monthNames[month + 2] + ' ' + (year);
			}
				
			table += ('<h3 id="current-month">'+monthNames[month]+' '+year+'</h3>');
			// uncomment the following lines if you'd like to display calendar month based on 'month' and 'view' paramaters from the URL
			//table += ('<div class="nav-prev">'+ prev_month +'</div>');
			//table += ('<div class="nav-next">'+ next_month +'</div>');
			table += ('<table class="calendar-month " ' +'id="calendar-month'+i+' " cellspacing="0">');	
		
			//table += '<tr>';
			
			//for (d=0; d<7; d++) {
				//table += '<th class="weekday">' + dayNames[d] + '</th>';
			//}
			
			//table += '</tr>';
		
			var days = getDaysInMonth(month,year);
            var firstDayDate=new Date(year,month,1);
            var firstDay=firstDayDate.getDay();
			
			var prev_days = getDaysInMonth(month,year);
            var firstDayDate=new Date(year,month,1);
            var firstDay=firstDayDate.getDay();
			
			var prev_m = month == 0 ? 11 : month-1;
			var prev_y = prev_m == 11 ? year - 1 : year;
			var prev_days = getDaysInMonth(prev_m, prev_y);
			firstDay = (firstDay == 0 && firstDayDate) ? 7 : firstDay;
	
			var i = 0;
            for (j=0;j<42;j++){
			  
              if ((j<firstDay)){
                table += ('<td class="other-month"><span class="day">'+ (prev_days-firstDay+j+1) +'</span></td>');
			  } else if ((j>=firstDay+getDaysInMonth(month,year))) {
				i = i+1;
                table += ('<td class="other-month"><span class="day">'+ i +'</span></td>');			 
              }else{
                table += ('<td class="current-month day'+(j-firstDay+1)+'"><span class="day">'+(j-firstDay+1)+'</span></td>');
              }
              if (j%7==6)  table += ('</tr>');
            }

            table += ('</table>');

		el.html(table);
	}
	
	function getDaysInMonth(month,year)  {
		var daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31];
		if ((month==1)&&(year%4==0)&&((year%100!=0)||(year%400==0))){
		  return 29;
		}else{
		  return daysInMonth[month];
		}
	}
	
	
	// jQuery plugin initialisation
	$.fn.calendarWidget = function(params) {    
		calendarWidget(this, params);		
		return this; 
	}; 

})(jQuery);

function next_month() {
	var now   = new Date();
	var thismonth = now.getMonth() + 1;
	var thisyear  = now.getYear() + 1900;
	
	if (month == 11) {
		var month = 0;
		var year = thisyear + 1;
	} else {
		var month = thismonth + 1;
		var year = thisyear;
	}
	return thismonth;
	return year;
}

function month_after_that() {
	var now   = new Date();
	var thismonth = now.getMonth();
	var thisyear  = now.getYear() + 1900;
	
	if (month == 11) {
		var month = 0;
		var year = thisyear + 1;
	} else {
		var month = thismonth + 1;
		var year = thisyear;
	}
	return month;
	return year;
}

jQuery("#calendar-1").calendarWidget();
jQuery("#calendar-2").calendarWidget(next_month());
jQuery("#calendar-3").calendarWidget(month_after_that());