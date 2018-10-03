(function() {
  // Notifications Drawer
  const notificationDrawerEl = document.querySelector('#notifications-drawer');
  const notificationDrawer = new mdc.drawer.MDCTemporaryDrawer(notificationDrawerEl);

  document.querySelector('#rpx-top-toolbar-notification-icon').addEventListener('click', function() {
    notificationDrawer.open = true;
  });
  document.querySelector('.rpx-drawer-notification-collapse-icon').addEventListener('click', function(e) {
    notificationDrawer.open = false;
    e.preventDefault();
  });

  // Notification sidenav tabs
  const notificationTabBar = new mdc.tabs.MDCTabBar(document.querySelector('#notification-tab-bar'));
  notificationTabBar.layout();
  notificationTabBar.listen('MDCTabBar:change', function (t) {
    const panelTabBar = t.detail;
    const index = panelTabBar.activeTabIndex;
    const panels = document.querySelector('#notification-panels');
    portalUpdateTabPanels(panels, index);
  });

  function portalUpdateTabPanels(panels, index) {
    const activePanel = panels.querySelector('.rpx-tab-panel.rpx-tab-panel--active');
    if (activePanel) {
      activePanel.classList.remove('rpx-tab-panel--active');
    }
    const newActivePanel = panels.querySelector('.rpx-tab-panel:nth-child(' + (index + 1) + ')');
    if (newActivePanel) {
      newActivePanel.classList.add('rpx-tab-panel--active');
    }
  }

  const body = document.getElementsByTagName('body').item(0);
  // We need to relayout all tabs when switching to rtl.
  body.addEventListener('portalDirectionChanged', function () {
    notificationTabBar.layout();
  });
})();
