"use strict";

jQuery(function ($) {
  $('#page_product_row').hide();
  $('.page_column_switcher').click(function () {
    $('#page_product_row').hide();
    $('#page_product_col').show();
  });
  $('.page_row_switcher').click(function () {
    $('#page_product_col').hide();
    $('#page_product_row').show();
  }); // Slick Init

  $(document).ready(function () {
    $('.hero_2_items').slick({
      autoplay: true,
      // slidesPerRow: 1,
      // slidesToScroll: 1,
      // speed: 600
      prevArrow: '<i class="far fa-arrow-alt-circle-right hero_1_slider_arrow_right"></i>',
      nextArrow: '<i class="far fa-arrow-alt-circle-left hero_1_slider_arrow_left"></i>'
    });
  }); // Right Slide Menu

  $('.header_1_mobile_nav_burger').click(function () {
    $(".left_side_menu_1").animate({
      left: '0%'
    });
  });
  $('.left_side_menu_1_close_button').click(function () {
    $(".left_side_menu_1").animate({
      left: '-100%'
    });
  });
  $(".left_side_menu_1_nav .sub-menu").hide();
  $('.menu-item-has-children').click(function () {
    $(".left_side_menu_1_nav .sub-menu").slideToggle();
  });
});