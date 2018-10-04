(function () {
  // Layout menu.
  const layoutMenuEl = document.querySelector('#rpx-layout-menu');
  if (layoutMenuEl !== null) {
    // Create layout menu.
    const layoutMenu = new mdc.menu.MDCMenu(layoutMenuEl);
    layoutMenu.setAnchorCorner(mdc.menu.MDCMenuFoundation.Corner.BOTTOM_START);
    // Set listener for opening menu.
    document.querySelector('#rpx-layout-menu-button').addEventListener('click', function() {
      layoutMenu.open = !layoutMenu.open;
    });
  }

  // Language menu.
  const LanguageMenuEl = document.querySelector('#rpx-language-menu');
  if (LanguageMenuEl !== null) {
    // Create layout menu.
    const LanguageMenu = new mdc.menu.MDCMenu(LanguageMenuEl);
    LanguageMenu.setAnchorCorner(mdc.menu.MDCMenuFoundation.Corner.BOTTOM_START);
    // Set listener for opening menu.
    document.querySelector('#rpx-language-menu-button').addEventListener('click', function() {
      LanguageMenu.open = !LanguageMenu.open;
    });
  }

  // Profile menu.
  const ProfileMenuEl = document.querySelector('#rpx-profile-menu');
  if (ProfileMenuEl !== null) {
    // Create layout menu.
    const ProfileMenu = new mdc.menu.MDCMenu(ProfileMenuEl);
    ProfileMenu.setAnchorCorner(mdc.menu.MDCMenuFoundation.Corner.BOTTOM_START);
    // Set listener for opening menu.
    document.querySelector('#rpx-profile-menu-button').addEventListener('click', function() {
      ProfileMenu.open = !ProfileMenu.open;
    });
  }

  // // Theme menu.
  // const themeMenuEl = document.querySelector('#rpx-theme-menu');
  // if (layoutMenuEl !== null) {
  //   const themeMenu = new mdc.menu.MDCMenu(themeMenuEl);
  //   document.querySelector('#rpx-theme-menu-button').addEventListener('click', function() {
  //     themeMenu.open = !themeMenu.open;
  //   });
  //   // Set Anchor Corner to Bottom End
  //   themeMenu.setAnchorCorner(mdc.menu.MDCMenuFoundation.Corner.BOTTOM_START);
  //
  //   themeMenuEl.addEventListener('MDCMenu:selected', function(evt) {
  //     // Switch theme
  //     const themeID = evt.detail.item.id;
  //     switchTheme(themeID);
  //     // Store theme.
  //     sessionStorage.setItem('rpx-html-theme', themeID);
  //     // Dispatch event to update the charts
  //     const body = document.getElementsByTagName('body').item(0);
  //     const event = new Event('rpxThemeChanged');
  //     setTimeout(function() {
  //       body.dispatchEvent(event);
  //     }, 500);
  //   });
  // }

  // // Check if theme has been stored in session.
  // const themeID = sessionStorage.getItem('rpx-html-theme');
  // if (themeID) {
  //   switchTheme(themeID);
  // }
  //
  // function switchTheme(themeID) {
  //   const stylesheetLink = document.querySelector('#rpx-stylesheet');
  //   const currentStylesheetFilename = stylesheetLink.href.substring(stylesheetLink.href.lastIndexOf('/') + 1);
  //   const newStylesheetURL = stylesheetLink.href.replace(currentStylesheetFilename, themeID + '.css');
  //   const head = document.getElementsByTagName('head').item(0);
  //   const newlink = document.createElement('link');
  //
  //   // Create new link.
  //   newlink.setAttribute('rel', 'stylesheet');
  //   newlink.setAttribute('type', 'text/css');
  //   newlink.setAttribute('href', newStylesheetURL);
  //   // Add new link to head.
  //   head.appendChild(newlink, stylesheetLink);
  //   // Add load listener to remove old CSS link.
  //   newlink.addEventListener('load', function() {
  //     // Remove old CSS link.
  //     head.removeChild(stylesheetLink);
  //     // Set new link to use id.
  //     newlink.setAttribute('id', 'rpx-stylesheet');
  //   });
  // }

  const rtlSwitch = document.getElementById('rtl-switch');
  if (rtlSwitch !== null) {
    mdc.iconToggle.MDCIconToggle.attachTo(rtlSwitch);
    rtlSwitch.addEventListener('MDCIconToggle:change', function(evt) {
      document.documentElement.dir = evt.detail.isOn ? 'rtl' : 'ltr';
      // Dispatch event to reload the tabs
      const body = document.getElementsByTagName('body').item(0);
      const event = new Event('portalDirectionChanged');
      body.dispatchEvent(event);
    });
  }
})();
