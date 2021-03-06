/**
	* @file
	* Custom scripts for theme.
*/
(function ($) {

	/* Expand / collapse filters on small screens */
	function mobileFilters () {
		$( "#sidebar-first .block-facetapi" ).wrapAll( "<div class='facets-container mobile-hidden'></div>" );
		$('.block-current-search').append('<button id="showMobileFilters" type="button" class="show-facets-btn">Show filters</button>');
		$('#showMobileFilters').click(function () {
			$('.facets-container').toggleClass('mobile-hidden');
			$(this).toggleClass('active');
		});
	}

	/* Add buttons to filter headings so are focusable */
	function formatFilters () {
		$("#sidebar-first .block.block-facetapi h2").each(function () {
			var label = $(this).text();
			$(this).html('<button type="button">' + label + '</button>');
		});
	}

	$(document).ready(function() {

		//trigger resize
		$(window).resize();

		mobileFilters();
		formatFilters();

		//facets
		$("#sidebar-first .block.block-facetapi").on("click", "h4", function() {
			$(this).toggleClass('opened').next('.block__content').slideToggle('fast');
		});
		if($("#sidebar-first .block.block-current-search .content .current-search-item-reset").length > 0) {
			$("#sidebar-first .block.block-current-search .block__content .current-search-item-reset").appendTo('#sidebar-first .block.block-current-search .block__content');
		}

		$("#sidebar-first .block.block-facetapi .facetapi-active").each(function() {
			$(this).closest('.content').show().prev("h4").addClass("opened");
			$(this).parent().addClass('redactive');
		});

		//Top 'HR' tab
		$("#hr-space-tab > li > ul:first a").each(function() {
			if($(this).hasClass('active')) {
				$("#hr-space-tab").addClass('white');
			}
		});

		//Table responsive
		$(".table-responsive").each(function() {
			var head = $("th", this);
			var i = 0;
			$("td").each(function() {
				if(i >= head.length) {
					i = 0;
				}
				if($.trim($(this).html()) != "") {
					$(this).attr('data-title',$(head[i]).text());
				}
				i++;
			});
		});

		//Recherche Espace
		if($('#views-exposed-form-hr-search-space').length > 0) {
		  var inputsearch = $('#views-exposed-form-hr-search-space #edit-search-api-views-fulltext');
		  var html = '';
		  html+= '<div class="search-select-wrapper"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>';
		  html+= '<ul class="dropdown-menu changeSearch"><li rel-action="' + $('#views-exposed-form-hr-search-space').attr('action') + '" class="active"><a href="#">' + inputsearch.attr('placeholder') + '</a></li><li rel-action="/' + $('#block-locale-language .dropdown-toggle').text().trim().toLowerCase() + '/search" class=""><a href="#">' + Drupal.t('Search Assessments') + '</a></li></ul></div>';

		  $("#edit-search-wrapper").prepend(html);

		  $('.changeSearch li').click(function(e) {
		    e.preventDefault();
		    $('.changeSearch li.active').removeClass('active');
		    $(this).addClass('active');
		    inputsearch.attr('placeholder', $(this).text());
		    $("#views-exposed-form-hr-search-space").attr("action", $(this).attr("rel-action"));
		  });
		}

		// Make dropdown menus work
		$(".hr-goto-dropdown").on('change', function(evt, params) {
			document.location.href = $(this).val();
		});


	});

	$(window).resize(function() {

		//position & largeur submenu
		var ww = $(window).width();
		var mw = $("#block-system-main-menu").width();
		var dif = (ww-mw)/2;
		if($(".container.header #navigation ul.menu li ul").length>0) {

			//largeur
			$(".container.header #navigation ul.menu li ul").css({
				'width': ww+'px',
				'margin-left': '-'+dif+'px',
			});


			//position
			var offparent = $(".container.header #navigation ul.menu li ul").parent().offset().left - dif;
			var ulw = 0;

			$(".container.header #navigation ul.menu li ul li").each(function() {
				ulw+= $(this).width();
			});

			var ml = ulw/2 - $(".container.header #navigation ul.menu li ul").parent().width()/2;

			$(".container.header #navigation ul.menu li ul li:first").css("margin-left", offparent-ml+dif+"px");
		}

		//largeur submenu


	});

})(jQuery);
