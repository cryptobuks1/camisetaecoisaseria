export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('#navigation').toggleClass('is-active');
      $('.heateor_sss_sharing_container').toggleClass('is-active');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
