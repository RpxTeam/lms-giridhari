
<!-- initialise material components js -->
<script src="{{ url('libs') }}/materialize/select.js"></script>
<script src="{{ url('assets') }}/js/material-components-web.js"></script>
<script>mdc.autoInit()</script>
<!-- initialise marquee js -->
<script src="{{ url('assets') }}/js/marquee3k.js"></script>
<script>Marquee3k.init()</script>
<!-- layout js -->
<script src="{{ url('assets') }}/js/layout/classic.js"></script>
<!-- components js -->
<script src="{{ url('assets') }}/js/partials/notification-sidenav.js"></script>
<script src="{{ url('assets') }}/js/partials/top-toolbar.js"></script>
<script src="{{ url('assets') }}/js/Chart.js"></script>
<script src="{{ url('assets') }}/js/pace.js"></script>
<!-- page specific JS -->

<script>
    (function() {

        function setupDashboardCharts() {
            const analyticsCtx = document.getElementById('analyticsChart').getContext('2d');
            // const usersCtx = document.getElementById('usersChart').getContext('2d');
            const sessionsCtx = document.getElementById('sessionsChart').getContext('2d');
            let primaryColor = window.getComputedStyle(document.documentElement).getPropertyValue('--mdc-theme-primary');
            let secondaryColor = window.getComputedStyle(document.documentElement).getPropertyValue('--mdc-theme-secondary');
            let secondaryLightColor = window.getComputedStyle(document.documentElement).getPropertyValue('--mdc-theme-secondary-light');
            let secondaryDarkColor = window.getComputedStyle(document.documentElement).getPropertyValue('--mdc-theme-secondary-dark');

            // Fallback for IE11, whereby getPropertyValue returns an empty string.
            primaryColor = '' === primaryColor ? '#03A9F4' : primaryColor;
            secondaryColor = '' === secondaryColor ? '#FF4081' : secondaryColor;
            secondaryLightColor = '' === secondaryLightColor ? '#ff87b0' : secondaryLightColor;
            secondaryDarkColor = '' === secondaryDarkColor ? '#f80054' : secondaryDarkColor;

            // Users bar chart.
            // const usersChart = new Chart(usersCtx, {
            //     type: 'bar',
            //     data: {
            //         labels: ['15 minutes ago', '30 minutes ago', '45 minutes ago', '60 minutes ago', '75 minutes ago', '90 minutes ago', '1 hour ago', '2 hours ago', '3 hours ago', '4 hours ago', '5 hours ago', '6 hours ago', '7 hours ago', '8 hours ago', '9 hours ago', '12 hours ago'],
            //         datasets: [{
            //             label: 'Views:',
            //             data: [12, 19, 34, 57, 22, 39, 46, 37, 56, 48, 28, 43, 55, 27, 12, 26],
            //             backgroundColor: 'rgba(255, 255, 255, 0.5)',
            //             borderColor: 'rgba(255, 255, 255, 0.5)'
            //         }]
            //     },
            //     options: {
            //         legend: {
            //             display: false
            //         },
            //         animation: false,
            //         scaleShowVerticalLines: false,
            //         responsive: true,
            //         tooltips: {
            //             enabled: true,
            //             backgroundColor: '#ffffff',
            //             titleFontColor: '#00ABEE',
            //             bodyFontColor: 'rgba(0, 171, 238, 0.6)',
            //             xPadding: 20,
            //             yPadding: 20,
            //             displayColors: false
            //         },
            //         scales: {
            //             xAxes: [{
            //                 display: false
            //             }],
            //             yAxes: [{
            //                 display: false
            //             }]
            //         }
            //     }
            // });
            // Sessions doughnut chart
            const sessionsChart = new Chart(sessionsCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Desktop', 'Tablet', 'Mobile'],
                    datasets: [{
                        data: [124, 88, 172],
                        borderWidth: 0,
                        backgroundColor: [secondaryColor, secondaryLightColor, secondaryDarkColor],
                        hoverBackgroundColor: secondaryColor
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: true,
                        backgroundColor: '#00ABEE',
                        titleFontColor: '#ffffff',
                        bodyFontColor: '#ffffff',
                        xPadding: 20,
                        yPadding: 20,
                        displayColors: false
                    }
                }
            });

            const analyticsChart = new Chart(analyticsCtx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: false,
                        data: [3479, 1250, 1600, 4900, 5250, 2750, 5500],
                        backgroundColor: 'rgba(255, 255, 255, 0)',
                        borderColor: primaryColor,
                        borderWidth: 2,
                        pointBackgroundColor: secondaryColor,
                        pointBorderColor: secondaryColor,
                        lineTension: 0.45
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true,
                        backgroundColor: '#00ABEE',
                        titleFontColor: '#ffffff',
                        bodyFontColor: 'rgba(255,255,255,0.6)',
                        xPadding: 20,
                        yPadding: 20,
                        displayColors: false
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Analytics tabs listener. Datasets refresh on TabBarChange.
            const analyticsTabBar = new mdc.tabs.MDCTabBar(document.querySelector('#rpx-stats-chart-nav'));
            analyticsTabBar.layout();
            analyticsTabBar.listen('MDCTabBar:change', function (t) {
                for (let i = 0; i < analyticsChart.data.datasets[0].data.length; i++) {
                    analyticsChart.data.datasets[0].data[i] = Math.floor(Math.random() * 6000) + 200;
                }
                analyticsChart.update();
            });

            const coursesTabBar = new mdc.tabs.MDCTabBar(document.querySelector('.courses-nav'));
            coursesTabBar.layout();
            // Client acquisition tabs listener.
            coursesTabBar.listen('MDCTabBar:change', function (t) {
                const detailTabBar = t.detail;
                const index = detailTabBar.activeTabIndex;
                const panels = document.querySelector('.courses-tabs');
                portalUpdateTabPanels(panels, index);
            });

            const trailsTabBar = new mdc.tabs.MDCTabBar(document.querySelector('.trails-nav'));
            trailsTabBar.layout();
            // Client acquisition tabs listener.
            trailsTabBar.listen('MDCTabBar:change', function (t) {
                const detailTabBar = t.detail;
                const index = detailTabBar.activeTabIndex;
                const panels = document.querySelector('.trails-tabs');
                portalUpdateTabPanels(panels, index);
            });

            // We need to relayout all tabs when switching to rtl.
            const body = document.getElementsByTagName('body').item(0);
            body.addEventListener('portalDirectionChanged', function () {
                analyticsTabBar.layout();
                clientsTabBar.layout();
            });
        }

        function portalUpdateTabPanels(panels, index) {
            const activePanel = panels.querySelector('.rpx-table-tab-panel.rpx-table-tab-panel--active');
            if (activePanel) {
                activePanel.classList.remove('rpx-table-tab-panel--active');
            }
            const newActivePanel = panels.querySelector('.rpx-table-tab-panel:nth-child(' + (index + 1) + ')');
            if (newActivePanel) {
                newActivePanel.classList.add('rpx-table-tab-panel--active');
            }
        }

        // Wait 1sec before initializing the charts so the switcher CSS works.
        setTimeout(setupDashboardCharts, 1000);

        const body = document.getElementsByTagName('body').item(0);
        body.addEventListener('rpxThemeChanged', setupDashboardCharts);
    })();

    (function() {
        const tfRoot = document.querySelectorAll('.mdc-text-field');
        for (let i = 0; i < tfRoot.length; i++) {
            new mdc.textField.MDCTextField(tfRoot[i]);
        }
    })();


    (function() {
        const MDCSelect = mdc.select.MDCSelect;
        const selects = document.querySelectorAll('.mdc-select');
        for (let i = 0; i < selects.length; i++) {
            new MDCSelect(selects[i]);
        }
    })();
</script>