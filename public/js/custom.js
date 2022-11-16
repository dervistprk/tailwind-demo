$(document).ready(function() {
   $('.navbar-item').on('click', function() {
      $('.navbar-item').addClass('text-gray-300 hover:bg-gray-700 hover:text-white').removeClass('bg-gray-900 text-white');
      $(this).addClass('bg-gray-900 text-white');
   });

   $('#user-menu-button').on('click', function(e) {
      if (!$('#user-menu').hasClass('hidden')) {
         $('#user-menu').removeClass('block').addClass('hidden');
      } else {
         $('#user-menu').removeClass('hidden').addClass('block');
      }
      e.stopPropagation();
   });

   $('#mobile-menu-button').on('click', function() {
      if (!$('#mobile-menu').hasClass('hidden')) {
         $('#mobile-menu').removeClass('block').addClass('hidden');
      } else {
         $('#mobile-menu').removeClass('hidden').addClass('block');
      }
   });

   $('.menu-item').on('click', function() {
      $('.menu-item').removeClass('bg-gray-200');
      $(this).addClass('bg-gray-200');
   });

   $('#notification-button').on('click', function(e) {
      if (!$('#notification-menu').hasClass('hidden')) {
         $('#notification-menu').removeClass('block').addClass('hidden');
      } else {
         $('#notification-menu').removeClass('hidden').addClass('block');
      }
      e.stopPropagation();
   });

   $(document).on('click', function() {
      $('#notification-menu').addClass('hidden');
      $('#user-menu').addClass('hidden');
   });
});
