// navbar toggled menu
function toggle(div) {
	if(document.getElementById(div).style.display == 'block') {
		document.getElementById(div).style.display = 'none' ;
	} else {
		document.getElementById(div).style.display = 'block' ;
	}
}

// mark a last clicked link (on nav bar menu) as active
$(".nav a").on("click", function(){
	$(".nav").find(".active").removeClass("active");
	$(this).parent().addClass("active");
});

// mark a last clicked link (on a left side menu) as active
$(".list-group a").on("click", function(){
	$(".list-group a").find(".active").removeClass("active");
	$(this).parent().addClass("active");
});

$(document).ready(function(){
	
	$('[data-toggle="tooltip"]').tooltip(); 
	
	//Feedback Message Characters limit 
	var left = 1000
    $('#text_counter').text('Characters left: ' + left);

        $('#message').keyup(function () {

        left = 1000 - $(this).val().length;

        if(left < 0){
            $('#text_counter').addClass("overlimit");
            $('#btnContactUs').attr("disabled", true);
        }else{
            $('#text_counter').removeClass("overlimit");
            $('#btnContactUs').attr("disabled", false);
        }

        $('#text_counter').text('Characters left: ' + left);
    });
    //./Feedback Message Characters limit
        
    // Feedback validator and submit form
    $('#feedbackForm').validator();

    $('#feedbackForm').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "/feedback/insert";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                dataType : 'json',
                success: function (data)
                {
                    var alertBox = '<div class="alert ' + data.status + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + data.message + '</div>';
                	  
                    $('#feedbackForm').find('.messages').html(alertBox);
                    $('#feedbackForm')[0].reset();
                }
            });
            return false;
        }
    })
    // ./Feedback validator and submit form

    // Filter type for list of Articles
    $('.filter_type').on('click', function (e) {
    	e.preventDefault();
    	
    	var url = $(location).attr("href");
    	var last_param = url.substring(url.lastIndexOf('/') + 1);
    	
    	if( last_param == 'published_date' || last_param == 'modified_date' 
    		|| last_param == 'published_date#' || last_param == 'modified_date#'
    		|| last_param == 'views#' || last_param == 'views#'
    		|| last_param == 'downloads#' || last_param == 'downloads#'
    		|| last_param == 'cites#' || last_param == 'cites#'    				
    		){
    		url = url + '/' + $(this).attr('value');
    	} else {
    		url = url.replace(last_param, $(this).attr('value'));
    	}
    	url = url.replace('#','');

    	window.location.href = url;
    })
    // ./Filter type for list of Articles

    // Order By for list of Articles
    $('.order_by').on('click', function (e) {
    	e.preventDefault();
    	
    	var url = $(location).attr("href");
    	
    	url = url.replace('/published_date', '/' + $(this).attr('value'));
    	url = url.replace('/modified_date', '/' + $(this).attr('value'));
    	url = url.replace('/views', '/' + $(this).attr('value'));
    	url = url.replace('/downloads', '/' + $(this).attr('value'));
    	url = url.replace('/cites', '/' + $(this).attr('value'));
    	url = url.replace('/#','');

    	window.location.href = url;
    })
    // ./Order for list of Articles

    // Order directions for list of Articles
    $('.order').on('click', function (e) {
    	e.preventDefault();
    	
    	var url = $(location).attr("href");
    	
    	url = url.replace('/asc', '/' + $(this).attr('value'));
    	url = url.replace('/desc', '/' + $(this).attr('value'));
    	url = url.replace('/#','');

    	window.location.href = url;
    })
    // ./Order for list of Articles
    
    // Order by Ajax for list of Articles
    $('.order_by_ajax').on('click', function (e) {
    	e.preventDefault();
    	$('#order_by').val($(this).attr('id'));
    	$('#load_more').val('');
    	$("#searchFormPagination").submit(); // Form submission.
    	return false;
    })

    $('.order_ajax').on('click', function (e) {
    	e.preventDefault();
    	$('#order_direction').val($(this).attr('id'));
    	$('#load_more').val('');
    	$("#searchFormPagination").submit(); // Form submission.
    	return false;
    })    
    // ./Order by Ajax for list of Articles        
    
    // Filter type by Ajax for list of Articles
    $('.filter_type_ajax').on('click', function (e) {
    	e.preventDefault();
    	$('#filter_type').val($(this).attr('id'));
    	$('#load_more').val('');
    	$('#page').val('1');
    	$("#searchFormPagination").submit(); // Form submission.
    	return false;
    })
    // ./Filter type by Ajax for list of Articles    
    
    //Search form actions
    $("#btn-search").click(function(e) {
    	e.preventDefault();
    	$("#searchForm").submit(); // Form submission.
    });
    
    $("#search_by_menu li a").click(function(){
    	//Set search option selected to the search combo label
    	$("#search_combo").text($(this).text());
    	
    	//Set search by selected to the hidden input
    	$('#search_by').val($(this).attr('id'));
    	
        var target = $(this).html();

  	    //Adds active class to selected item
	    $(this).parents('.dropdown-menu').find('li').removeClass('active');
	    $(this).parent('li').addClass('active');

	    //Displays selected text on dropdown-toggle button
	    $(this).parents('.dropdown').find('.dropdown-toggle').html(target + ' <span class="caret"></span>');    	
    });
    // ./Search form actions
    
    // Search pagination
    $(".ajax_search").click(function(){
    	$('#page').val($(this).text());
    	$("#searchFormPagination").submit(); // Form submission.
    	return false;
    });
    // ./Search pagination
    
    // Citation Modal
    $('#citationModal').on('show.bs.modal', function(e) {
          doi = e.relatedTarget.id;
    	  $("#doi").val(doi);
	});
	
    $('#citationModal').on('hidden.bs.modal', function(e){
    	$('#format option:first').prop('selected',true);
    	$("#citationMessage").css("display", "none");
    });
	
    $('#citationForm').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {

            var url = "/articles/citation";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                dataType : 'json',
                success: function (data)
                {
                	if(data.status == false){
                		$("#copy-button").css("display", "none");
                		alert(data.message);
                	} else {
                    	$("#citationMessage").css("display", "block");
                    	$("#copy-button").css("display", "block");
                    	$("#formatedCitation").val(data.message);
                	}
                }
            });
            return false;
        }
    });	
    
    $('#format').on('change', '', function (e) {
    	if($(this).val() == "-"){
    		$("#formatedCitation").val('');
    		$("#copy-button").css("display", "none");
    		$("#citationMessage").css("display", "none");
    		return false;
    	}
    	
        if (!e.isDefaultPrevented()) {
            var url = "/articles/citation";

            $.ajax({
                type: "POST",
                url: url,
                data: $('#citationForm').serialize(),
                dataType : 'json',
                success: function (data)
                {
                	if(data.status == false){
                		$("#copy-button").css("display", "none");
                		alert(data.message);
                	} else {
                    	$("#citationMessage").css("display", "block");
                    	$("#copy-button").css("display", "block");
                    	$("#formatedCitation").val(data.message);
                	}
                }
            });
            return false;
        }
    });
    
    
    (function(){
        new Clipboard('#copy-button');
    })();    
    // ./Citation Modal
    
    
    // Stats Chart Modal
    google.charts.load('current', {packages: ['corechart', 'line']});
    
    $('#chartModal').on('show.bs.modal', function(e) {
        $.ajax({
            url: '/articles/stats', 
            type: 'GET',
            data: {id: e.relatedTarget.id},
            dataType: 'JSON', 
            success: function(chart_values) {
            	$.ajax({
            		url: 'https://www.google.com/jsapi?callback',
            		cache: true,
            		dataType: 'script',
            		success: function(){    	
            		    var data = new google.visualization.DataTable();

            		    data.addColumn('string', 'X');
            		    data.addColumn('number', 'Views');
            		    data.addColumn('number', 'Downloads');
            		    
       	    		    data.addRows(chart_values);

            		    var options = {
            		        series: {
            		        	0: { color: '#0055b8' },
            		            1: { color: '#c6093b' }
            		        },
            		          
            		        'width': 500,
            		          
            		        chartArea: {
            		       	  left: 40, 
            		       	  top: 20, 
            		       	  width: "70%"
            		        }    		          
            		    };

            		    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            		    chart.draw(data, options);    			  
            	    }
            	});
            },
            error : function (error) {
            	alert(error.responseText);
            }
        });
        
    });    
    
    $('#chartModal').on('hidden.bs.modal', function(e) {
        document.getElementById('chart_div').innerHTML = '';
    }); 
    // ./Stats Chart Modal
    
    // Load more data
    $('.load-more').click(function(){
        var $this = $(this);
        $this.button('loading');
        
        var page            = Number($('#page').val());
        var load_more_url   = $('#load_more_url').val();
        var order_direction = $('#order_direction').val();
        var order_by        = $('#order_by').val();
        var filter_type     = $('#filter_type').val();
        var id_group        = $('#id_group').val();
        
        page = page + 1;
        
        $("#page").val(page);

        $.ajax({
            url: '/articles/load_more',
            type: 'POST',
            data: {page:page, load_more_url:load_more_url, order_direction:order_direction, order_by:order_by, filter_type:filter_type, id_group:id_group},
            success: function(response){
                $(".list-group-item:last").after(response).show().fadeIn("slow");
            	if(response.length < 200){
            		$('.load-more').hide();
            	} else {
            		$this.button('reset')
            	}
                
            }
        });

    });    
    
    // Load more data
    $('.load-more-search').click(function(){
        var $this = $(this);
        $this.button('loading');

        var page = Number($('#page').val());
        page = page + 1;
        $("#page").val(page);
        
        var datastring = $("#searchFormPagination").serialize();
        
        $.ajax({
            url: '/articles/search',
            type: 'POST',
            data: datastring,
            success: function(response){
                $(".list-group-item:last").after(response).show().fadeIn("slow");
            	if(response.length < 200){
            		$('.load-more-search').hide();
            	} else {
            		$this.button('reset')
            	}
                
            }
        });
        
    });     
});