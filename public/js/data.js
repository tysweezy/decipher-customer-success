(function() {

    // qualified completes
    var ctx = document.getElementById('qualified-completes').getContext('2d');
    var qcChart = {
        labels: ['A', 'B', 'C'],
        datasets: [{
            data: [20, 55, 18]
        }]
    };

    new Chart(ctx).Line(qcChart, {bezierCurve: false});


    // qualified completes
    var ctx = document.getElementById('launched-surveys').getContext('2d');
    var qcChart = {
        labels: ['A', 'B', 'C'],
        datasets: [{
            data: [20, 55, 18]
        }]
    };

    new Chart(ctx).Line(qcChart, {bezierCurve: false});

    // helpdesk tickes

    var ctx = document.getElementById('helpdesk-tickets').getContext('2d');
    var qcChart = {
        labels: ['A', 'B', 'C'],
        datasets: [{
            data: [20, 55, 18]
        }]
    };

    new Chart(ctx).Line(qcChart, {bezierCurve: false});


    // support hours

    var ctx = document.getElementById('support-hours').getContext('2d');
    var qcChart = {
        labels: ['A', 'B', 'C'],
        datasets: [{
            data: [20, 55, 18]
        }]
    };

    new Chart(ctx).Line(qcChart, {bezierCurve: false});
})();