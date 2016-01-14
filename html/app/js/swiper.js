var swiper = {
  //static variables
  _currentPage: 0,
  init: function () {

  },
  getCurrentPages: function () {
    //current always should have 3 pages only
    var current = [];
    for (var i = 0; i < pages.length; i++) {
      if (i === this._currentPage) {
        current.push(pages[i]);
        //wrapping around - if first element, use last as a left page
        if (i > 0 && pages[i - 1].length) {
          current.unshift(pages[i - 1]);
        } else {
          current.unshift(pages[pages.length - 1]);
        }
        //wrapping around - if last element, use last as a right page
        if (i < pages.length - 1) {
          current.push(pages[i + 1]);
        } else {
          current.push(pages[0]);
        }
      }
    }

    return current;
  },
};

swiper.init();

var pages = [
  {
    url: 'img/auckland.jpg'
  },
  {
    url: 'img/bluff.jpg'
  },
  {
    url: 'img/dolphin.jpg'
  },
  {
    url: 'img/paritutu.jpg'
  }
];