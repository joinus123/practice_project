// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}

var swiper = new Swiper(".client-slider", {
	slidesPerView: 3,
	slidesPerView: "auto",
	centeredSlides: true,
	loop:true,
	spaceBetween: 0,
	navigation: {
		nextEl: ".index-sec-5 .next",
		prevEl: ".index-sec-5 .prev",
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
});

var swiper = new Swiper(".team-slider", {
	slidesPerView: 4,
	spaceBetween: 20,
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		310: {
			slidesPerView: 1,
		},
		575: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 3,
		},
		991: {
			slidesPerView: 4,
		},
	}
});


/*FUNDRAISING EVENT CALENDAR*/

function selectDate(date) {
  $('.fundraising-sec-1 .calendar-container').updateCalendarOptions({
    date: date
  });
}

var defaultConfig = {
  prevButton:"<i class='fas fa-chevron-left'></i>",
  nextButton:"<i class='fas fa-chevron-right'></i>",
  weekDayLength: 1,
  date:new Date(),
  onClickDate: selectDate,
  showYearDropdown: true,
  startOnMonday: true,
  showTodayButton:false,
};

var calendar = $('.fundraising-sec-1 .calendar-container').calendar(defaultConfig);
console.log(calendar.getSelectedDate());



