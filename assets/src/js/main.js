document.addEventListener('DOMContentLoaded',function(){
		var photo = new SmartPhoto(".js-img-viwer3");
				photo.on('change',function(){
						console.log('change');
				});
				photo.on('close',function(){
						console.log('close');
				});
				// photo.on('swipestart',function(){
				// 		console.log('swipestart');
				// });
				photo.on('swipeend',function(){
						console.log('swipeend');
				});
				photo.on('loadall',function(){
						console.log('loadall');
				});
				photo.on('zoomin',function(){
						console.log('zoomin');
				});
				photo.on('zoomout',function(){
						console.log('zoomout');
				});
				// photo.on('open',function(){
				// 		console.log('open');
				// });
});
document.addEventListener('DOMContentLoaded',function(){
		var photo = new SmartPhoto(".js-img-viwer2");
				photo.on('change',function(){
						console.log('change');
				});
				photo.on('close',function(){
						console.log('close');
				});
				// photo.on('swipestart',function(){
				// 		console.log('swipestart');
				// });
				photo.on('swipeend',function(){
						console.log('swipeend');
				});
				photo.on('loadall',function(){
						console.log('loadall');
				});
				photo.on('zoomin',function(){
						console.log('zoomin');
				});
				photo.on('zoomout',function(){
						console.log('zoomout');
				});
				// photo.on('open',function(){
				// 		console.log('open');
				// });
});
document.addEventListener('DOMContentLoaded',function(){
	var photo = new SmartPhoto(".js-img-viwer");
			photo.on('change',function(){
					console.log('change');
			});
			photo.on('close',function(){
					console.log('close');
			});
			// photo.on('swipestart',function(){
			// 		console.log('swipestart');
			// });
			photo.on('swipeend',function(){
					console.log('swipeend');
			});
			photo.on('loadall',function(){
					console.log('loadall');
			});
			photo.on('zoomin',function(){
					console.log('zoomin');
			});
			photo.on('zoomout',function(){
					console.log('zoomout');
			});
			// photo.on('open',function(){
			// 		console.log('open');
			// });
});


$(document).ready(function(){
		$('.back-top').click(function () {
				$('body,html').animate({
						scrollTop: 0
				}, 1600);
				return false;
		});
		$(window).scroll( function(){
					// back top arrow
					if ($(this).scrollTop() > 500) {
							$('.back-top').fadeIn();
					} else {
							$('.back-top').fadeOut();
					}

		});

		var $height = $('.first .menu-box').width();
		$('.first  .menu-box').height($height);
    $('.first  .shadow1').height($height);
    $(' .tab2 .first  .galeryimgbox').height($height);
    $('.shadow1').css("top",'0%');

    var $whiterheight =  $('.whiter  .menu-box').width();
    $(' .whiter  .shadow1').height(($whiterheight*0.6));
    $(' .whiter  .menu-box').height(($whiterheight*0.6));
    $(' .smaller  .shadow1').height(($whiterheight*0.6));
    $(' .smaller  .menu-box').height(($whiterheight*0.6));

    var $scalewidth = $('.first .toscale').width();
    $('.first .toscale').height($scalewidth);

    var $scalewidth2 = $('.tab2 .toscale').width();
    $('.tab2 .toscale').height($scalewidth2);

    $(' .toscale').css({'transform':'scale(1)'});
    $('footer .social').css("margin","60px 0 100px 0")


    $(' .menu-box a').mouseenter(function(){
      $(this).find(' .toscale').css({'transform':'scale(1)'}, 1000);
    });


      // $('.fadeout').hide();
      // $('.forfade a').on('click',function(event){
      //   $('.forfade .toscale').removeClass('activatescal');
			//
      //   event.preventDefault();
      //       $(this).find('.toscale').addClass('activatescal');
      // });
			//
      // $('.forfade a').on('click', function (event) {
      //   var clicked = this.className;
      //       $('.fadeout').fadeOut();
      //   $('.'+clicked).fadeIn(1000);
      //   });


				$('.designer .col-sm-4 img').height(($('.artdesigner').outerHeight()));
				$('.blog .col-sm-4 img').height(($('.blog .col-sm-8').outerHeight())/2 -3);
        $('.krasa .col-sm-4 img').height($('.krasatext').height());
        $('.originalne .col-sm-4 img').height($('.originalne .col-sm-8').height());


    // blogArticlesvar $height = $('.first .menu-box').width();
    $('.first  .menu-box').height($height);
    $('.first  .shadow1').height($height);
    $(' .tab2 .first  .galeryimgbox').height($height);
    $('.shadow1').css("top",'0%');



    var $whiterheight =  $('.whiter  .menu-box').width();
    $(' .whiter  .shadow1').height(($whiterheight*0.6));
    $(' .whiter  .menu-box').height(($whiterheight*0.6));
    $(' .smaller  .shadow1').height(($whiterheight*0.6));
    $(' .smaller  .menu-box').height(($whiterheight*0.6));

		// vyska obrazkov z galerie


    var $scalewidth = $('.first .toscale').width();
    $('.first .toscale').height($scalewidth);

    var $scalewidth2 = $('.tab2 .toscale').width();
    $('.tab2 .toscale').height($scalewidth2);


      $('.fadeout').hide();
      $('.forfade a').on('click',function(event){
        $('.forfade .toscale').removeClass('activatescal');

        event.preventDefault();
            $(this).find('.toscale').addClass('activatescal');
      });

      var $tmptext='', $sirkakocky='';
      // $('.artdesigner').height(($('.artdesigner').height())+7);
      $sirkakocky = $('.blogArticles .menu-box').width();
      $('.blogArticles .menu-box').height($sirkakocky);
      $('.blogArticles img').height($sirkakocky*0.5);

			$('.blogArticles .menu-box').mouseenter(function(){
				$(this).find('.stitok').css({'transform':'scale(2) translate(-25%,-25%)','color':'#878787','transition':'all .5s ease-in-out'}, 500);
				$(this).find('.stitok').find('p').css({'color':'#878787','transform':'scale(.8)' }, 100);
				$(this).find('.stitok').find('p').css({'font-size':'1.3em'}, 100);
				$tmptext = $(this).find('.stitok').find('p').text();
				$(this).find('.stitok').find('p').text($(this).find($('.blogcontent h2')).text());
				$(this).find('.stitok').find('h3').css({'color':'#000000','transform':'scale(.7)'}, 100);
				$(this).find('.stitok').find('span').css({'border-bottom':'1px solid #878787'}, 100);
				$(this).find('.blogcontent').hide();
				$("#box").animate({height: "300px"});
				$(this).find('img').animate({height: $sirkakocky}, 300);
				// $(this).find('img').height($sirkakocky);
			});

			$('.blogArticles .menu-box').mouseleave(function(){
				$(this).find('.stitok').css({'transform':'scale(1) translate(-50%,-50%)','color':'#fff','transition':'all .5s ease-in-out'}, 500);
				$(this).find('.stitok').find('p').css({'color':'#fff'}, 100);
				$(this).find('.stitok').find('p').css({'font-size':'2.4em'}, 100);
				$(this).find('.stitok').find('p').text($tmptext);
				$(this).find('.stitok').find('h3').css({'color':'#fff'}, 100);
				$(this).find('.stitok').find('span').css({'border-bottom':'1px solid #fff'}, 100);
				$(this).find('.blogcontent').show();
				$(this).find('img').animate({height: $sirkakocky*0.5}, 300);
			});


			if (screen.width < 960) {
				$('.blogArticles .menu-box').mouseenter(function(){
					$(this).find('.stitok').css({'transform':'scale(1.3)','color':'#878787'}, 100);
				});
				$('.blogArticles .menu-box').mouseleave(function(){
					$(this).find('.stitok').css({'transform':'scale(1)','color':'#fff'}, 100);
				});
			}
			if (screen.width < 800) {
			 $('.blogArticles img').height($sirkakocky*0.5);
			 $('.blogArticles .menu-box').mouseenter(function(){
				 $(this).find('.stitok').css({'transform':'scale(1)','color':'#878787'}, 100);
				 $(this).find('img').height($sirkakocky);
			 });
			 $('.blogArticles .menu-box').mouseleave(function(){
				 $(this).find('img').height($sirkakocky*0.5);
			 });
		 }
		 if (screen.width < 600) {
			$('.blogArticles .menu-box').mouseenter(function(){
				$(this).find('.stitok').css({'transform':'scale(1.2)','color':'#878787'}, 100);
				$(this).find('img').height($sirkakocky);
			});
		}

    // koniec blogArticles

    // pre index
    var $height = $('.forindex .menu-box').outerHeight();
    $('.forindex .shadow1').height($height);
    $('.forindex .shadow1').css("margin-top",-$height);
    $('.forindex .menu-box3 .shadow1').css("margin-top",-$height-1);

		// zmena sirkyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
		$( window ).resize(function() {
				var $height = $('.first .menu-box').width();
				$('.first  .menu-box').height($height);
				$('.first  .shadow1').height($height);
				$(' .tab2 .first  .galeryimgbox').height($height);
				$('.shadow1').css("top",'0%');

				var $whiterheight =  $('.whiter  .menu-box').width();
				$(' .whiter  .shadow1').height(($whiterheight*0.6));
				$(' .whiter  .menu-box').height(($whiterheight*0.6));
				$(' .smaller  .shadow1').height(($whiterheight*0.6));
				$(' .smaller  .menu-box').height(($whiterheight*0.6));

				var $scalewidth = $('.first .toscale').width();
				$('.first .toscale').height($scalewidth);

				var $scalewidth2 = $('.tab2 .toscale').width();
				$('.tab2 .toscale').height($scalewidth2);

				$(' .toscale').css({'transform':'scale(1)'});
				$('footer .social').css("margin","60px 0 100px 0");

				// /////////////////////////////////
				$('.designer .col-sm-4 img').height(($('.artdesigner').outerHeight()));
				$('.blog .col-sm-4 img').height(($('.blog .col-sm-8').outerHeight())/2 -3);
				$('.krasa .col-sm-4 img').height($('.krasatext').height());
				$('.originalne .col-sm-4 img').height($('.originalne .col-sm-8').height());


				// blogArticlesvar $height = $('.first .menu-box').width();
				$('.first  .menu-box').height($height);
				$('.first  .shadow1').height($height);
				$(' .tab2 .first  .galeryimgbox').height($height);
				$('.shadow1').css("top",'0%');



				var $whiterheight =  $('.whiter  .menu-box').width();
				$(' .whiter  .shadow1').height(($whiterheight*0.6));
				$(' .whiter  .menu-box').height(($whiterheight*0.6));
				$(' .smaller  .shadow1').height(($whiterheight*0.6));
				$(' .smaller  .menu-box').height(($whiterheight*0.6));

				// vyska obrazkov z galerie


				var $scalewidth = $('.first .toscale').width();
				$('.first .toscale').height($scalewidth);

				var $scalewidth2 = $('.tab2 .toscale').width();
				$('.tab2 .toscale').height($scalewidth2);

				// ////////////////////////////////////////////
				var $tmptext='', $sirkakocky='';
				// $('.artdesigner').height(($('.artdesigner').height())+7);
				$sirkakocky = $('.blogArticles .menu-box').width();
				$('.blogArticles .menu-box').height($sirkakocky);
				$('.blogArticles img').height($sirkakocky*0.5);

				$('.blogArticles .menu-box').mouseenter(function(){
					$(this).find('.stitok').css({'transform':'scale(2)','color':'#878787'}, 100);
					$(this).find('.stitok').find('p').css({'color':'#878787'}, 100);
					$(this).find('.stitok').find('p').css({'font-size':'1.3em'}, 100);
					$tmptext = $(this).find('.stitok').find('p').text();
					$(this).find('.stitok').find('p').text($(this).find($('.blogcontent h2')).text());
					$(this).find('.stitok').find('h3').css({'color':'#000000'}, 100);
					$(this).find('.stitok').find('span').css({'border-bottom':'1px solid #878787'}, 100);
					$(this).find('.blogcontent').hide();
					$(this).find('img').height($sirkakocky);
				});

				$('.blogArticles .menu-box').mouseleave(function(){
					$(this).find('.stitok').css({'transform':'scale(1)','color':'#fff'}, 100);
					$(this).find('.stitok').find('p').css({'color':'#fff'}, 100);
					$(this).find('.stitok').find('p').css({'font-size':'2.4em'}, 100);
					$(this).find('.stitok').find('p').text($tmptext);
					$(this).find('.stitok').find('h3').css({'color':'#fff'}, 100);
					$(this).find('.stitok').find('span').css({'border-bottom':'1px solid #fff'}, 100);
					$(this).find('.blogcontent').show();
					$(this).find('img').height($sirkakocky*0.5);
				});


				if (screen.width < 960) {
					$('.blogArticles .menu-box').mouseenter(function(){
						$(this).find('.stitok').css({'transform':'scale(1.3)','color':'#878787'}, 100);
					});
					$('.blogArticles .menu-box').mouseleave(function(){
						$(this).find('.stitok').css({'transform':'scale(1)','color':'#fff'}, 100);
					});
				}
				if (screen.width < 800) {
				 $('.blogArticles img').height($sirkakocky*0.5);
				 $('.blogArticles .menu-box').mouseenter(function(){
					 $(this).find('.stitok').css({'transform':'scale(1)','color':'#878787'}, 100);
					 $(this).find('img').height($sirkakocky);
				 });
				 $('.blogArticles .menu-box').mouseleave(function(){
					 $(this).find('img').height($sirkakocky*0.5);
				 });
			 }
			 if (screen.width < 600) {
				$('.blogArticles .menu-box').mouseenter(function(){
					$(this).find('.stitok').css({'transform':'scale(1.2)','color':'#878787'}, 100);
					$(this).find('img').height($sirkakocky);
				});
			}
			var $height = $('.forindex .menu-box').outerHeight();
			$('.forindex .shadow1').height($height);
			$('.forindex .shadow1').css("margin-top",-$height);
			$('.forindex .menu-box3 .shadow1').css("margin-top",-$height-1);
			$('.kolekciesub  .forfade').height(($('.kolekciesub  .forfade').width()*0.6));

		});

    $('.forindex .menu-box a').mouseenter(function(){
      $(this).find('.toscale').css({'transform':'scale(1.3)'}, 1000);
    });
    $('.forindex .menu-box a').mouseleave(function(){
      $(this).find('.toscale').css({'transform':'scale(1)'}, 1000);
    });
    // konec pre index
		$('header label ul').hide();

		$('header label .menu').on('click', function(){
			$('header label ul').fadeToggle();
		});
    // auto csrolovanie
		// if (screen.width < 500) {
		// 	$("html, body").animate({ scrollTop: 1050 }, "slow");
		// }

		
		// $('.kolekciesub .forfade a').on('click', function(event){
		// 	event.preventDefault();
		// 	if($(window).width()<768){
		// 		$("html, body").animate({ scrollTop: $('header').outerHeight()+ $('.content-text').outerHeight() + $('.smaller').outerHeight() + $('.hp').outerHeight() +40 }, "slow");
		// 	}
		// 	else{
		// 		$("html, body").animate({ scrollTop: $('header').outerHeight()+ $('.content-text').outerHeight() + $('.smaller').outerHeight() + $('.hp').outerHeight() +70 }, "slow");
		// 	}
		// 	return false;
		// });

		var location = window.location.pathname;
		if((location=='/baby/')||(location=='/detsky-svet/')||(location=='/home-decor/')||(location=='/en/home-decor-en/')||(location=='/en/the-world-of-children/')||(location=='/en/baby-en/')){
			$("html, body").animate({ scrollTop: $('header').outerHeight() + $('.hp').outerHeight() +40}, "slow");
		}

		$('.kolekciesub  .forfade').height(($('.kolekciesub  .forfade').width()*0.6));
    // $('.kolekciesub  .forfade .toscale').height(70);

		// ak kliknes do galerie tak zmizne sipka hore
		$('.galeryimgbox a').on('click', function(){
			$('.back-top').hide();
		});

		// upravuje velkost obrazkov v galerii
		function loadlink(){
			if (($(window).width() < 768)&&($(window).width() > 500)) {
				var height2 = $('.tab2 .menu-box').width();
				console.log(height2);
				$('.fadeout .menu-box').height(height2);
			}
			else{
				if($(window).width() < 500) {
					height2=$(window).width()/3;
					console.log(height2);
					$('.fadeout .menu-box').height(height2);
				}
				else{
					height2 = $('.tab2 .menu-box').width();
					console.log(height2);
					$('.fadeout .menu-box').height(height2/2);
				}
			}

		}

		loadlink(); // This will run on page load
			setInterval(function(){
			loadlink() // this will run after every 5 seconds
		}, 1000);



});
